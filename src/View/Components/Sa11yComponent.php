<?php

namespace poldixd\Sa11y\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sa11yComponent extends Component
{
    public function __construct(
        public ?string $cspNonce = null,
    ) {}

    public function render(): View|Closure|string
    {
        if (config('sa11y.enabled') === false) {
            return '';
        }

        $version = config('sa11y.version');
        $cspNonce = filled($this->cspNonce) ? "nonce=\"{$this->cspNonce}\"" : '';

        return <<<JAVASCRIPT
        <!-- Stylesheet -->
        <link {$cspNonce} rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ryersondmp/sa11y@{$version}/dist/css/sa11y.min.css" />

        <!-- Script -->
        <script {$cspNonce} src="https://cdn.jsdelivr.net/combine/gh/ryersondmp/sa11y@{$version}/dist/js/lang/en.umd.js,gh/ryersondmp/sa11y@{$version}/dist/js/sa11y.umd.min.js"></script>

        <!-- Instantiate-->
        <script {$cspNonce}>
        Sa11y.Lang.addI18n(Sa11yLangEn.strings);
        const sa11y = new Sa11y.Sa11y({
            checkRoot: "body",
        });
        </script>
        JAVASCRIPT;
    }
}
