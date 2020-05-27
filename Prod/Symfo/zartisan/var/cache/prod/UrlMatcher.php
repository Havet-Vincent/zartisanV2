<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/advice/add' => [[['_route' => 'api_advice__add', '_controller' => 'App\\Controller\\ApiAdviceController::add'], null, null, null, false, false, null]],
        '/api/v1/advice/report' => [[['_route' => 'api_advice__report', '_controller' => 'App\\Controller\\ApiAdviceController::report'], null, null, null, false, false, null]],
        '/api/v1/artisan/edit' => [[['_route' => 'api_artisan_edit', '_controller' => 'App\\Controller\\ApiArtisanController::edit'], null, null, null, false, false, null]],
        '/v1/artisan/list' => [[['_route' => 'artisan_all', '_controller' => 'App\\Controller\\ApiArtisanController::all'], null, null, null, false, false, null]],
        '/v1/artisan/recherche' => [[['_route' => 'artisan_recherche', '_controller' => 'App\\Controller\\ApiArtisanController::searchByRate'], null, null, null, false, false, null]],
        '/v1/artisan/single' => [[['_route' => 'artisan_single', '_controller' => 'App\\Controller\\ApiArtisanController::single'], null, null, null, false, false, null]],
        '/v1/job/category/list' => [[['_route' => 'api_job_category', '_controller' => 'App\\Controller\\ApiJobController::categoryList'], null, null, null, false, false, null]],
        '/v1/job/category/listV2' => [[['_route' => 'api_job_categoryV2', '_controller' => 'App\\Controller\\ApiJobController::categoryListV2'], null, null, null, false, false, null]],
        '/v1/job/list' => [[['_route' => 'api_job_job', '_controller' => 'App\\Controller\\ApiJobController::jobListFromCategory'], null, null, null, false, false, null]],
        '/api/v1/rate/add' => [[['_route' => 'api_rate_add', '_controller' => 'App\\Controller\\ApiRateController::add'], null, null, null, false, false, null]],
        '/api/v1/rate/single' => [[['_route' => 'api_rate_single', '_controller' => 'App\\Controller\\ApiRateController::single'], null, null, null, false, false, null]],
        '/v1/region/list' => [[['_route' => 'api_region_list', '_controller' => 'App\\Controller\\ApiRegionController::getRegionList'], null, null, null, false, false, null]],
        '/api/v1/user/edit' => [[['_route' => 'api_user_edit', '_controller' => 'App\\Controller\\ApiUserController::edit'], null, null, null, false, false, null]],
        '/api/v1/user/delete' => [[['_route' => 'api_user_delete', '_controller' => 'App\\Controller\\ApiUserController::delete'], null, null, null, false, false, null]],
        '/api/v1/user/list' => [[['_route' => 'api_user_all', '_controller' => 'App\\Controller\\ApiUserController::all'], null, null, null, false, false, null]],
        '/api/v1/user/single' => [[['_route' => 'api_user_single', '_controller' => 'App\\Controller\\ApiUserController::single'], null, null, null, false, false, null]],
        '/api/v1/checkMail' => [[['_route' => 'api_mail_check', '_controller' => 'App\\Controller\\MailController::mailCheck'], null, null, null, false, false, null]],
        '/confirmMail' => [[['_route' => 'mail_confirm', '_controller' => 'App\\Controller\\MailController::sendMailValidation'], null, null, null, false, false, null]],
        '/resetPassMail' => [[['_route' => 'api_reset_pass', '_controller' => 'App\\Controller\\MailController::sendResetPass'], null, null, null, false, false, null]],
        '/confirmation' => [[['_route' => 'api_confirm_route', '_controller' => 'App\\Controller\\MailController::comfirmRoute'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register/artisan' => [[['_route' => 'app_register_artisan', '_controller' => 'App\\Controller\\SecurityController::registerArtisan'], null, null, null, false, false, null]],
        '/register/user' => [[['_route' => 'app_register_user', '_controller' => 'App\\Controller\\SecurityController::registerUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/sirene/test/([^/]++)(*:28)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [
            [['_route' => 'sirene', '_controller' => 'App\\Controller\\ExterneApiController::ApiTestSirene'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
