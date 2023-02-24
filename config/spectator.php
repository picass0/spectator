<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Spec Source
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default spec source that should be used
    | by the framework.
    |
    */

    'default' => env('SPEC_SOURCE', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Sources
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many sources as you wish, and you
    | may even configure multiple source of the same type. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'sources' => [
        //'local' => [
        //    'source' => 'local',
        //    'base_path' => env('SPEC_PATH'),
        //],

        //'remote' => [
        //    'source' => 'remote',
        //    'base_path' => env('SPEC_PATH'),
        //    'params' => env('SPEC_URL_PARAMS', ''),
        //],

        'gitlab' => [
            'source' => 'gitlab',
            'branch' => env('SPEC_GITLAB_BRANCH'),
            'base_path' => env('SPEC_GITLAB_PATH'),
            'token' => env('SPEC_GITLAB_TOKEN'),
        ],

        //'github' => [
        //    'source' => 'github',
        //    'base_path' => env('SPEC_GITHUB_PATH'),
        //    'repo' => env('SPEC_GITHUB_REPO'),
        //    'token' => env('SPEC_GITHUB_TOKEN'),
        //],
    ],

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Configure path defaults, like prefixes.
    |
    */

    'path_prefix' => 'api/v2/my',

    /*
    |--------------------------------------------------------------------------
    | Errors
    |--------------------------------------------------------------------------
    |
    | Suppress errors in tests and only show messages.
    |
    */

    'suppress_errors' => false,

    'validate_spec_in_api_tests' => env('VALIDATE_SPEC_IN_API_TESTS', false),

    'middleware_group' => 'foundation',

    'all_response_fields_required' => true,
];
