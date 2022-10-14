<?php

$api = app('Dingo\Api\Routing\Router');

 $api->version('v1', function($api) {
    $api->resources([
        'admin' => [
            \App\Http\Controllers\V1\Admin\AdminController::class, ['index', 'store', 'update', 'destroy']
        ],
//        'role' => [
//            \App\Http\Controllers\V1\Role\RoleController::class => [
//                'index',
//                'store',
//                'update',
//                'destroy'
//            ],
//        ],
//        'rule' => [
//            \App\Http\Controllers\V1\Rule\RuleController::class => [
//                'index',
//                'store',
//                'update',
//                'destroy'
//            ],
//        ],
    ]);
});
