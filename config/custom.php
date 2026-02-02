<?php

return [
    'custom' => [
        'myLayout' => 'vertical', // Options: 'vertical', 'horizontal', 'blank', 'front'
        'myTheme' => 'theme-default', // Options: 'theme-default', 'theme-bordered', 'theme-semi-dark'
        'myStyle' => 'light', // Options: 'light', 'dark', 'system'
        'myRTLSupport' => false,
        'myRTLMode' => false,
        'hasCustomizer' => true,
        'showDropdownOnHover' => true,
        'displayCustomizer' => true,
        'contentLayout' => 'compact', // Options: 'compact', 'wide'
        'headerType' => 'fixed', // Options: 'fixed', 'static'
        'navbarType' => 'fixed', // Options: 'fixed', 'static', 'hidden'
        'menuFixed' => true,
        'menuCollapsed' => false,
        'footerFixed' => false,
        'menuFlipped' => false,
        'customizerControls' => [
            'rtl',
            'style',
            'headerType',
            'contentLayout',
            'layoutCollapsed',
            'showDropdownOnHover',
            'layoutNavbarOptions',
            'themes',
        ],
        'myPrimaryColor' => '#666cff',
    ],
];
