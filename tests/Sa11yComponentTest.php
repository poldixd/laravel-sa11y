<?php

it('renders the component if it is enabled', function () {

    config()->set('sa11y.enabled', true);

    $component = test()->blade('<x-sa11y />');

    expect($component)->toMatchSnapshot();
});

it('did not renders the component if it is not enabled', function () {

    config()->set('sa11y.enabled', false);

    $component = test()->blade('<x-sa11y />');

    expect($component)->toMatchSnapshot();
});

it('can change the version of sa11y', function () {

    config()->set('sa11y.enabled', true);
    config()->set('sa11y.version', '4.3.1');

    $component = test()->blade('<x-sa11y />');

    expect($component)->toMatchSnapshot();
});

it('can render with a nonce', function () {

    config()->set('sa11y.enabled', true);
    config()->set('sa11y.version', '4.3.1');

    $component = test()->blade('<x-sa11y :csp-nonce="\'ABCDEFGH\'" />');

    expect($component)->toMatchSnapshot();
});
