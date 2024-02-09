<?php

// config/crud-generator.php

return [
    /*
    |--------------------------------------------------------------------------
    | Enable Custom Template
    |--------------------------------------------------------------------------
    |
    | Specify whether to use a custom template for the CRUD generator. By default,
    | this is set to false. Set this to true if you want to use your own template
    | files instead of the package's default ones.
    |
    */

    'use_custom_template' => false,

    /*
    |--------------------------------------------------------------------------
    | CRUD Generator Template Stubs Path
    |--------------------------------------------------------------------------
    |
    | When using a custom template for the CRUD generator, specify the path where
    | your custom stubs are located. This path is relative to the base_path of
    | the application.
    |
    */

    'custom_template_path' => 'resources/crud-generator/',
];