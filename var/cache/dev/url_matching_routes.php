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
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cours/admin/cours/new' => [[['_route' => 'app_admin_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/groupes' => [[['_route' => 'app_groupe', '_controller' => 'App\\Controller\\GroupeController::instructors'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/langue' => [[['_route' => 'app_langue_index', '_controller' => 'App\\Controller\\LangueController::indexEtudiant'], null, ['GET' => 0], null, true, false, null]],
        '/langue/admin' => [[['_route' => 'app_admin_langue_index', '_controller' => 'App\\Controller\\LangueController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/langue/admin/new' => [[['_route' => 'app_admin_langue_new', '_controller' => 'App\\Controller\\LangueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/niveau' => [[['_route' => 'app_niveau_index', '_controller' => 'App\\Controller\\NiveauController::index'], null, ['GET' => 0], null, true, false, null]],
        '/niveau/new' => [[['_route' => 'app_niveau_new', '_controller' => 'App\\Controller\\NiveauController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/objectif' => [[['_route' => 'app_objectif', '_controller' => 'App\\Controller\\ObjectifController::objectif'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/cours/([^/]++)(?'
                    .'|(*:220)'
                    .'|/(?'
                        .'|edit(*:236)'
                        .'|terminer(*:252)'
                    .')'
                    .'|(*:261)'
                .')'
                .'|/groupes/([^/]++)(*:287)'
                .'|/langue/(?'
                    .'|([^/]++)/apprentissage(*:328)'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:358)'
                        .'|delete(*:372)'
                    .')'
                    .'|([^/]++)(*:389)'
                .')'
                .'|/niveau/([^/]++)(?'
                    .'|(*:417)'
                    .'|/edit(*:430)'
                    .'|(*:438)'
                .')'
                .'|/session/([^/]++)(*:464)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'app_cours_terminer', '_controller' => 'App\\Controller\\CoursController::terminer'], ['id'], ['POST' => 0], null, false, false, null]],
        261 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_groupe_details', '_controller' => 'App\\Controller\\GroupeController::instructorDetails'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'app_langue_apprentissage', '_controller' => 'App\\Controller\\LangueController::apprentissage'], ['id'], ['GET' => 0], null, false, false, null]],
        358 => [[['_route' => 'app_admin_langue_edit', '_controller' => 'App\\Controller\\LangueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'app_admin_langue_delete', '_controller' => 'App\\Controller\\LangueController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        389 => [[['_route' => 'app_langue_show', '_controller' => 'App\\Controller\\LangueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_niveau_show', '_controller' => 'App\\Controller\\NiveauController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_niveau_edit', '_controller' => 'App\\Controller\\NiveauController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'app_niveau_delete', '_controller' => 'App\\Controller\\NiveauController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        464 => [
            [['_route' => 'app_session_single', '_controller' => 'App\\Controller\\SessionController::single'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
