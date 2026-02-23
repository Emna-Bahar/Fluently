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
        '/dashboard/user/profile' => [[['_route' => 'dashboard_user_profile', '_controller' => 'App\\Controller\\DashboardController::userProfile'], null, null, null, false, false, null]],
        '/groupes' => [[['_route' => 'app_groupe', '_controller' => 'App\\Controller\\GroupeController::index'], null, ['GET' => 0], null, false, false, null]],
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
        '/admin/objectif' => [[['_route' => 'app_objectif_admin_index', '_controller' => 'App\\Controller\\ObjectifAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/objectif/new' => [[['_route' => 'app_objectif_admin_new', '_controller' => 'App\\Controller\\ObjectifAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/objectif/stats' => [[['_route' => 'app_objectif_admin_stats', '_controller' => 'App\\Controller\\ObjectifAdminController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/objectif' => [[['_route' => 'app_objectif_index', '_controller' => 'App\\Controller\\ObjectifController::index'], null, ['GET' => 0], null, false, false, null]],
        '/objectif/new' => [[['_route' => 'app_objectif_new', '_controller' => 'App\\Controller\\ObjectifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/admin/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/admin/reservations' => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\ReservationController::adminIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/admin/reservations/new' => [[['_route' => 'admin_reservation_new', '_controller' => 'App\\Controller\\ReservationController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/reservations/new' => [[['_route' => 'front_reservation_new', '_controller' => 'App\\Controller\\ReservationController::frontNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session' => [[['_route' => 'app_session_index', '_controller' => 'App\\Controller\\SessionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/session/new' => [[['_route' => 'app_session_new', '_controller' => 'App\\Controller\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session/admin/sessions' => [[['_route' => 'admin_session_index', '_controller' => 'App\\Controller\\SessionController::adminIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session/admin/sessions/new' => [[['_route' => 'admin_session_new', '_controller' => 'App\\Controller\\SessionController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tache' => [[['_route' => 'app_tache_admin_index', '_controller' => 'App\\Controller\\TacheAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/tache/new' => [[['_route' => 'app_tache_admin_new', '_controller' => 'App\\Controller\\TacheAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tache/export-pdf' => [[['_route' => 'app_tache_admin_export_pdf', '_controller' => 'App\\Controller\\TacheAdminController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/tache' => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TacheController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tache/new' => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TacheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/test' => [[['_route' => 'app_test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/test/new' => [[['_route' => 'app_test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/test/admin/test/passages' => [[['_route' => 'app_admin_test_passages', '_controller' => 'App\\Controller\\TestController::adminTestPassages'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/cours(?'
                    .'|/(?'
                        .'|([^/]++)(*:223)'
                        .'|admin/([^/]++)(*:245)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:272)'
                                .'|terminer(*:288)'
                                .'|ressources\\-personnalisees(*:322)'
                            .')'
                            .'|(*:331)'
                        .')'
                    .')'
                    .'|\\-personnalise/generer/([^/]++)(*:372)'
                .')'
                .'|/dashboard/(?'
                    .'|delete\\-user/([^/]++)(*:416)'
                    .'|edit\\-user/([^/]++)(*:443)'
                .')'
                .'|/groupes/([^/]++)(?'
                    .'|(*:472)'
                    .'|/message(*:488)'
                .')'
                .'|/messages/([^/]++)/(?'
                    .'|delete(*:525)'
                    .'|edit(*:537)'
                .')'
                .'|/Langue/(?'
                    .'|([^/]++)/apprentissage(*:579)'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:609)'
                        .'|delete(*:623)'
                    .')'
                    .'|([^/]++)(*:640)'
                .')'
                .'|/niveau/([^/]++)(?'
                    .'|(*:668)'
                    .'|/edit(*:681)'
                    .'|(*:689)'
                .')'
                .'|/admin/(?'
                    .'|objectif/([^/]++)(?'
                        .'|(*:728)'
                        .'|/edit(*:741)'
                        .'|(*:749)'
                    .')'
                    .'|reponse/([^/]++)(?'
                        .'|(*:777)'
                        .'|/edit(*:790)'
                        .'|(*:798)'
                    .')'
                    .'|t(?'
                        .'|ache/(?'
                            .'|(\\d+)(*:824)'
                            .'|(\\d+)/edit(*:842)'
                            .'|(\\d+)(*:855)'
                        .')'
                        .'|est/(?'
                            .'|([^/]++)(?'
                                .'|(*:882)'
                                .'|/edit(*:895)'
                                .'|(*:903)'
                            .')'
                            .'|e(?'
                                .'|tudiant/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:938)'
                                        .'|/(?'
                                            .'|s(?'
                                                .'|tart(*:958)'
                                                .'|ubmit(*:971)'
                                            .')'
                                            .'|pause(*:985)'
                                            .'|resume(*:999)'
                                        .')'
                                    .')'
                                    .'|result/([^/]++)(*:1024)'
                                    .'|analyse/([^/]++)(*:1049)'
                                .')'
                                .'|xam/log\\-event/([^/]++)(*:1082)'
                            .')'
                            .'|admin/passage/([^/]++)/(?'
                                .'|expire(*:1124)'
                                .'|finaliser(*:1142)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/objectif/([^/]++)(?'
                    .'|(*:1176)'
                    .'|/edit(*:1190)'
                    .'|(*:1199)'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:1230)'
                    .'|/edit(*:1244)'
                    .'|(*:1253)'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:1284)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1309)'
                        .'|(*:1318)'
                    .')'
                    .'|admin/reservations/(?'
                        .'|(\\d+)(*:1355)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1380)'
                            .'|delete(*:1395)'
                        .')'
                    .')'
                    .'|mes\\-reservations(*:1423)'
                .')'
                .'|/session/(?'
                    .'|(\\d+)(*:1450)'
                    .'|(\\d+)/reservations(*:1477)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1505)'
                            .'|rejoindre(*:1523)'
                        .')'
                        .'|(*:1533)'
                    .')'
                    .'|admin/sessions/(?'
                        .'|(\\d+)(*:1566)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1591)'
                            .'|delete(*:1606)'
                        .')'
                    .')'
                    .'|sessions(?'
                        .'|(*:1628)'
                        .'|/(?'
                            .'|(\\d+)(*:1646)'
                            .'|([^/]++)/rejoindre(*:1673)'
                        .')'
                    .')'
                .')'
                .'|/tache/(?'
                    .'|([^/]++)(*:1703)'
                    .'|new/objectif/([^/]++)(*:1733)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1758)'
                        .'|(*:1767)'
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
        223 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_admin_cours_show', '_controller' => 'App\\Controller\\CoursController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'app_cours_terminer', '_controller' => 'App\\Controller\\CoursController::terminer'], ['id'], ['POST' => 0], null, false, false, null]],
        322 => [[['_route' => 'app_cours_ressources_personnalisees', '_controller' => 'App\\Controller\\CoursController::ressourcesPersonnalisees'], ['id'], ['GET' => 0], null, false, false, null]],
        331 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        372 => [[['_route' => 'app_cours_personnalise_generer', '_controller' => 'App\\Controller\\CoursPersonnaliseController::generer'], ['id'], null, null, false, true, null]],
        416 => [[['_route' => 'dashboard_delete_user', '_controller' => 'App\\Controller\\DashboardController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        443 => [[['_route' => 'dashboard_edit_user', '_controller' => 'App\\Controller\\DashboardController::editUser'], ['id'], null, null, false, true, null]],
        472 => [[['_route' => 'app_groupe_details', '_controller' => 'App\\Controller\\GroupeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_groupe_message', '_controller' => 'App\\Controller\\GroupeController::sendMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        525 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\GroupeController::deleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        537 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\GroupeController::editMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        579 => [[['_route' => 'app_langue_apprentissage', '_controller' => 'App\\Controller\\LangueController::apprentissage'], ['id'], ['GET' => 0], null, false, false, null]],
        609 => [[['_route' => 'app_admin_langue_edit', '_controller' => 'App\\Controller\\LangueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        623 => [[['_route' => 'app_admin_langue_delete', '_controller' => 'App\\Controller\\LangueController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        640 => [[['_route' => 'app_langue_show', '_controller' => 'App\\Controller\\LangueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        668 => [[['_route' => 'app_niveau_show', '_controller' => 'App\\Controller\\NiveauController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        681 => [[['_route' => 'app_niveau_edit', '_controller' => 'App\\Controller\\NiveauController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'app_niveau_delete', '_controller' => 'App\\Controller\\NiveauController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        728 => [[['_route' => 'app_objectif_admin_show', '_controller' => 'App\\Controller\\ObjectifAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        741 => [[['_route' => 'app_objectif_admin_edit', '_controller' => 'App\\Controller\\ObjectifAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        749 => [[['_route' => 'app_objectif_admin_delete', '_controller' => 'App\\Controller\\ObjectifAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        777 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        798 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        824 => [[['_route' => 'app_tache_admin_show', '_controller' => 'App\\Controller\\TacheAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        842 => [[['_route' => 'app_tache_admin_edit', '_controller' => 'App\\Controller\\TacheAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        855 => [[['_route' => 'app_tache_admin_delete', '_controller' => 'App\\Controller\\TacheAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        882 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        895 => [[['_route' => 'app_test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        903 => [[['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        938 => [[['_route' => 'app_test_student_show', '_controller' => 'App\\Controller\\TestController::studentShow'], ['id'], ['GET' => 0], null, false, true, null]],
        958 => [[['_route' => 'app_test_student_start', '_controller' => 'App\\Controller\\TestController::startTest'], ['id'], ['POST' => 0], null, false, false, null]],
        971 => [[['_route' => 'app_test_student_submit', '_controller' => 'App\\Controller\\TestController::studentSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        985 => [[['_route' => 'app_test_student_pause', '_controller' => 'App\\Controller\\TestController::pauseTest'], ['id'], ['POST' => 0], null, false, false, null]],
        999 => [[['_route' => 'app_test_student_resume', '_controller' => 'App\\Controller\\TestController::resumeTest'], ['id'], ['POST' => 0], null, false, false, null]],
        1024 => [[['_route' => 'app_test_student_result', '_controller' => 'App\\Controller\\TestController::studentResults'], ['id'], ['GET' => 0], null, false, true, null]],
        1049 => [[['_route' => 'app_etudiant_analyse', '_controller' => 'App\\Controller\\TestController::analysePerformance'], ['langueId'], ['GET' => 0], null, false, true, null]],
        1082 => [[['_route' => 'app_exam_log_event', '_controller' => 'App\\Controller\\TestController::logExamEvent'], ['id'], ['POST' => 0], null, false, true, null]],
        1124 => [[['_route' => 'admin_expire_passage', '_controller' => 'App\\Controller\\TestController::expirePassage'], ['id'], ['POST' => 0], null, false, false, null]],
        1142 => [[['_route' => 'admin_finaliser_passage', '_controller' => 'App\\Controller\\TestController::finaliserPassage'], ['id'], ['POST' => 0], null, false, false, null]],
        1176 => [[['_route' => 'app_objectif_show', '_controller' => 'App\\Controller\\ObjectifController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1190 => [[['_route' => 'app_objectif_edit', '_controller' => 'App\\Controller\\ObjectifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1199 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\ObjectifController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1230 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1244 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1253 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1284 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1318 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1355 => [[['_route' => 'admin_reservation_show', '_controller' => 'App\\Controller\\ReservationController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1380 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1395 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1423 => [[['_route' => 'front_reservation_index', '_controller' => 'App\\Controller\\ReservationController::frontIndex'], [], ['GET' => 0], null, false, false, null]],
        1450 => [[['_route' => 'app_session_show', '_controller' => 'App\\Controller\\SessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1477 => [[['_route' => 'app_session_reservations', '_controller' => 'App\\Controller\\SessionController::showReservations'], ['id'], ['GET' => 0], null, false, false, null]],
        1505 => [[['_route' => 'app_session_edit', '_controller' => 'App\\Controller\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1523 => [[['_route' => 'app_session_rejoindre', '_controller' => 'App\\Controller\\SessionController::rejoindre'], ['id'], ['GET' => 0], null, false, false, null]],
        1533 => [[['_route' => 'app_session_delete', '_controller' => 'App\\Controller\\SessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1566 => [[['_route' => 'admin_session_show', '_controller' => 'App\\Controller\\SessionController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1591 => [[['_route' => 'admin_session_edit', '_controller' => 'App\\Controller\\SessionController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1606 => [[['_route' => 'admin_session_delete', '_controller' => 'App\\Controller\\SessionController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1628 => [[['_route' => 'front_session_index', '_controller' => 'App\\Controller\\SessionController::frontIndex'], [], ['GET' => 0], null, false, false, null]],
        1646 => [[['_route' => 'front_session_show', '_controller' => 'App\\Controller\\SessionController::frontShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1673 => [[['_route' => 'front_session_rejoindre', '_controller' => 'App\\Controller\\SessionController::frontRejoindre'], ['id'], ['GET' => 0], null, false, false, null]],
        1703 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1733 => [[['_route' => 'app_tache_new_from_objectif', '_controller' => 'App\\Controller\\TacheController::newFromObjectif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1758 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1767 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
