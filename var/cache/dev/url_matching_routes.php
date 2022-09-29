<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/gestion/company' => [[['_route' => 'app_company', '_controller' => 'App\\Controller\\CompanyController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/gestion/driver' => [[['_route' => 'app_driver_index', '_controller' => 'App\\Controller\\DriverController::index'], null, ['GET' => 0], null, false, false, null]],
        '/gestion/new' => [[['_route' => 'app_driver_new', '_controller' => 'App\\Controller\\DriverController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/galery' => [[['_route' => 'app_galery', '_controller' => 'App\\Controller\\GaleryController::index'], null, null, null, true, false, null]],
        '/gestion' => [[['_route' => 'app_gestion_index', '_controller' => 'App\\Controller\\GestionController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\MailerController::index'], null, null, null, false, false, null]],
        '/sendEmail' => [[['_route' => 'app_sendMail', '_controller' => 'App\\Controller\\MailerController::send'], null, null, null, false, false, null]],
        '/portefoliot' => [[['_route' => 'app_portefoliot', '_controller' => 'App\\Controller\\PortefoliotController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/pass-oublie' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/g(?'
                    .'|estion/([^/]++)(?'
                        .'|(*:192)'
                        .'|/(?'
                            .'|edit(*:208)'
                            .'|photo_edit(*:226)'
                            .'|([^/]++)/photo_insert(*:255)'
                        .')'
                        .'|(*:264)'
                    .')'
                    .'|alery/(?'
                        .'|add/image/([^/]++)(*:300)'
                        .'|delete/image/([^/]++)(*:329)'
                    .')'
                .')'
                .'|/oubli\\-pass/([^/]++)(*:360)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'app_driver_show', '_controller' => 'App\\Controller\\DriverController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'app_driver_edit', '_controller' => 'App\\Controller\\DriverController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        226 => [[['_route' => 'app_driver_photo_edit', '_controller' => 'App\\Controller\\DriverController::photo'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        255 => [[['_route' => 'app_driver_photo_insert_api', '_controller' => 'App\\Controller\\DriverController::insert'], ['id', 'driver'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_driver_delete', '_controller' => 'App\\Controller\\DriverController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'app_galery_add_image', '_controller' => 'App\\Controller\\GaleryController::addImage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        329 => [[['_route' => 'app_galery_del_image', '_controller' => 'App\\Controller\\GaleryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        360 => [
            [['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
