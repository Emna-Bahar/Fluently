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
        '/Langue' => [[['_route' => 'app_langue_index', '_controller' => 'App\\Controller\\LangueController::indexEtudiant'], null, ['GET' => 0], null, true, false, null]],
        '/Langue/admin' => [[['_route' => 'app_admin_langue_index', '_controller' => 'App\\Controller\\LangueController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/Langue/admin/new' => [[['_route' => 'app_admin_langue_new', '_controller' => 'App\\Controller\\LangueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Langue/admin/stats' => [[['_route' => 'app_admin_langue_stats', '_controller' => 'App\\Controller\\LangueController::statsAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/logout-ajax' => [[['_route' => 'app_logout_ajax', '_controller' => 'App\\Controller\\LoginController::logoutAjax'], null, null, null, false, false, null]],
        '/niveau' => [[['_route' => 'app_niveau_index', '_controller' => 'App\\Controller\\NiveauController::index'], null, ['GET' => 0], null, true, false, null]],
        '/niveau/new' => [[['_route' => 'app_niveau_new', '_controller' => 'App\\Controller\\NiveauController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/objectif' => [[['_route' => 'app_objectif', '_controller' => 'App\\Controller\\ObjectifController::objectif'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/admin/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session' => [[['_route' => 'app_session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
        '/admin/test' => [[['_route' => 'app_test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/test/new' => [[['_route' => 'app_test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/cours/(?'
                    .'|([^/]++)(*:220)'
                    .'|admin/([^/]++)(*:242)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:269)'
                            .'|terminer(*:285)'
                        .')'
                        .'|(*:294)'
                    .')'
                .')'
                .'|/dashboard/(?'
                    .'|delete\\-user/([^/]++)(*:339)'
                    .'|edit\\-user/([^/]++)(*:366)'
                .')'
                .'|/groupes/([^/]++)(*:392)'
                .'|/Langue/(?'
                    .'|([^/]++)/apprentissage(*:433)'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:463)'
                        .'|delete(*:477)'
                    .')'
                    .'|([^/]++)(*:494)'
                .')'
                .'|/niveau/([^/]++)(?'
                    .'|(*:522)'
                    .'|/edit(*:535)'
                    .'|(*:543)'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:573)'
                    .'|/edit(*:586)'
                    .'|(*:594)'
                .')'
                .'|/admin/(?'
                    .'|reponse/([^/]++)(?'
                        .'|(*:632)'
                        .'|/edit(*:645)'
                        .'|(*:653)'
                    .')'
                    .'|test/(?'
                        .'|([^/]++)(?'
                            .'|(*:681)'
                            .'|/edit(*:694)'
                            .'|(*:702)'
                        .')'
                        .'|etudiant/([^/]++)/results(*:736)'
                    .')'
                .')'
                .'|/session/([^/]++)(*:763)'
                .'|/test/([^/]++)(?'
                    .'|(*:788)'
                    .'|/(?'
                        .'|submit(*:806)'
                        .'|result(*:820)'
                    .')'
                .')'
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
        242 => [[['_route' => 'app_admin_cours_show', '_controller' => 'App\\Controller\\CoursController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_cours_terminer', '_controller' => 'App\\Controller\\CoursController::terminer'], ['id'], ['POST' => 0], null, false, false, null]],
        294 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        339 => [[['_route' => 'dashboard_delete_user', '_controller' => 'App\\Controller\\DashboardController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'dashboard_edit_user', '_controller' => 'App\\Controller\\DashboardController::editUser'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'app_groupe_details', '_controller' => 'App\\Controller\\GroupeController::instructorDetails'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'app_langue_apprentissage', '_controller' => 'App\\Controller\\LangueController::apprentissage'], ['id'], ['GET' => 0], null, false, false, null]],
        463 => [[['_route' => 'app_admin_langue_edit', '_controller' => 'App\\Controller\\LangueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'app_admin_langue_delete', '_controller' => 'App\\Controller\\LangueController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        494 => [[['_route' => 'app_langue_show', '_controller' => 'App\\Controller\\LangueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_niveau_show', '_controller' => 'App\\Controller\\NiveauController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => 'app_niveau_edit', '_controller' => 'App\\Controller\\NiveauController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'app_niveau_delete', '_controller' => 'App\\Controller\\NiveauController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        573 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        632 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        645 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        653 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        681 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        694 => [[['_route' => 'app_test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        702 => [[['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        736 => [[['_route' => 'app_test_student_results', '_controller' => 'App\\Controller\\TestController::studentResults'], ['id'], ['GET' => 0], null, false, false, null]],
        763 => [[['_route' => 'app_session_single', '_controller' => 'App\\Controller\\SessionController::single'], ['id'], null, null, false, true, null]],
        788 => [[['_route' => 'app_test_student_show', '_controller' => 'App\\Controller\\TestStudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        806 => [[['_route' => 'app_test_student_submit', '_controller' => 'App\\Controller\\TestStudentController::submit'], ['id'], ['POST' => 0], null, false, false, null]],
        820 => [
            [['_route' => 'app_test_student_result', '_controller' => 'App\\Controller\\TestStudentController::result'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
