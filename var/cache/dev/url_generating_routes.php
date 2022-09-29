<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_company' => [[], ['_controller' => 'App\\Controller\\CompanyController::index'], [], [['text', '/gestion/company']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_driver_index' => [[], ['_controller' => 'App\\Controller\\DriverController::index'], [], [['text', '/gestion/driver']], [], [], []],
    'app_driver_new' => [[], ['_controller' => 'App\\Controller\\DriverController::new'], [], [['text', '/gestion/new']], [], [], []],
    'app_driver_show' => [['id'], ['_controller' => 'App\\Controller\\DriverController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gestion']], [], [], []],
    'app_driver_edit' => [['id'], ['_controller' => 'App\\Controller\\DriverController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/gestion']], [], [], []],
    'app_driver_delete' => [['id'], ['_controller' => 'App\\Controller\\DriverController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gestion']], [], [], []],
    'app_driver_photo_edit' => [['id'], ['_controller' => 'App\\Controller\\DriverController::photo'], [], [['text', '/photo_edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/gestion']], [], [], []],
    'app_driver_photo_insert_api' => [['id', 'driver'], ['_controller' => 'App\\Controller\\DriverController::insert'], [], [['text', '/photo_insert'], ['variable', '/', '[^/]++', 'driver', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/gestion']], [], [], []],
    'app_galery' => [[], ['_controller' => 'App\\Controller\\GaleryController::index'], [], [['text', '/galery/']], [], [], []],
    'app_galery_add_image' => [['id'], ['_controller' => 'App\\Controller\\GaleryController::addImage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/galery/add/image']], [], [], []],
    'app_galery_del_image' => [['id'], ['_controller' => 'App\\Controller\\GaleryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/galery/delete/image']], [], [], []],
    'app_gestion_index' => [[], ['_controller' => 'App\\Controller\\GestionController::index'], [], [['text', '/gestion/']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_mailer' => [[], ['_controller' => 'App\\Controller\\MailerController::index'], [], [['text', '/mailer']], [], [], []],
    'app_sendMail' => [[], ['_controller' => 'App\\Controller\\MailerController::send'], [], [['text', '/sendEmail']], [], [], []],
    'app_portefoliot' => [[], ['_controller' => 'App\\Controller\\PortefoliotController::index'], [], [['text', '/portefoliot']], [], [], []],
    'app_profile_index' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/pass-oublie']], [], [], []],
    'reset_pass' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPass'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/oubli-pass']], [], [], []],
];