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
        '/api/dictionary/languages' => [[['_route' => 'app_api_dictionary_languages', '_controller' => 'App\\Controller\\Api\\DictionaryController::languages'], null, ['GET' => 0], null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cours/admin/cours/new' => [[['_route' => 'app_admin_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/user/profile' => [[['_route' => 'dashboard_user_profile', '_controller' => 'App\\Controller\\DashboardController::userProfile'], null, null, null, false, false, null]],
        '/dashboard/export-users' => [[['_route' => 'dashboard_export_users', '_controller' => 'App\\Controller\\DashboardController::exportUsers'], null, null, null, false, false, null]],
        '/dashboard/users-viewer' => [[['_route' => 'dashboard_users_viewer', '_controller' => 'App\\Controller\\DashboardController::usersViewer'], null, null, null, false, false, null]],
        '/dashboard/export-google-sheets' => [[['_route' => 'dashboard_export_google_sheets', '_controller' => 'App\\Controller\\DashboardController::exportGoogleSheets'], null, null, null, false, false, null]],
        '/dialogue/generer' => [[['_route' => 'app_dialogue_generer', '_controller' => 'App\\Controller\\DialogueController::generer'], null, ['POST' => 0], null, false, false, null]],
        '/dialogue/verifier' => [[['_route' => 'app_dialogue_verifier', '_controller' => 'App\\Controller\\DialogueController::verifier'], null, ['POST' => 0], null, false, false, null]],
        '/face-setup/save' => [[['_route' => 'app_face_save', '_controller' => 'App\\Controller\\FaceController::save'], null, ['POST' => 0], null, false, false, null]],
        '/face-verify' => [[['_route' => 'app_face_verify', '_controller' => 'App\\Controller\\FaceController::verify'], null, ['POST' => 0], null, false, false, null]],
        '/face-verify-page' => [[['_route' => 'app_face_verify_page', '_controller' => 'App\\Controller\\FaceController::verifyPage'], null, null, null, false, false, null]],
        '/face-success' => [[['_route' => 'app_face_success', '_controller' => 'App\\Controller\\FaceController::faceSuccess'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\ForgotPasswordController::forgotPassword'], null, null, null, false, false, null]],
        '/forgot-password/code' => [[['_route' => 'app_forgot_password_code', '_controller' => 'App\\Controller\\ForgotPasswordController::verifyCode'], null, null, null, false, false, null]],
        '/jeu/generer' => [[['_route' => 'app_jeu_generer', '_controller' => 'App\\Controller\\GameController::generer'], null, ['POST' => 0], null, false, false, null]],
        '/jeu/verifier' => [[['_route' => 'app_jeu_verifier', '_controller' => 'App\\Controller\\GameController::verifier'], null, ['POST' => 0], null, false, false, null]],
        '/gamification' => [[['_route' => 'app_gamification_index', '_controller' => 'App\\Controller\\GamificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/_debug/detect' => [[['_route' => 'debug_detect', '_controller' => 'App\\Controller\\GroupeController::detect'], null, null, null, false, false, null]],
        '/groupes' => [[['_route' => 'app_groupe', '_controller' => 'App\\Controller\\GroupeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/adminGroup' => [[['_route' => 'admin_group_index', '_controller' => 'App\\Controller\\GroupeController::adminGroupIndex'], null, ['GET' => 0], null, false, false, null]],
        '/adminGroup/create' => [[['_route' => 'admin_group_create', '_controller' => 'App\\Controller\\GroupeController::adminGroupCreate'], null, ['POST' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/Langue' => [[['_route' => 'app_langue_index', '_controller' => 'App\\Controller\\LangueController::indexEtudiant'], null, ['GET' => 0], null, true, false, null]],
        '/Langue/admin' => [[['_route' => 'app_admin_langue_index', '_controller' => 'App\\Controller\\LangueController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/Langue/admin/new' => [[['_route' => 'app_admin_langue_new', '_controller' => 'App\\Controller\\LangueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Langue/admin/stats' => [[['_route' => 'app_admin_langue_stats', '_controller' => 'App\\Controller\\LangueController::statsAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/niveau' => [[['_route' => 'app_niveau_index', '_controller' => 'App\\Controller\\NiveauController::index'], null, ['GET' => 0], null, true, false, null]],
        '/niveau/new' => [[['_route' => 'app_niveau_new', '_controller' => 'App\\Controller\\NiveauController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/objectif' => [[['_route' => 'app_objectif_admin_index', '_controller' => 'App\\Controller\\ObjectifAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/objectif/new' => [[['_route' => 'app_objectif_admin_new', '_controller' => 'App\\Controller\\ObjectifAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/objectif/stats' => [[['_route' => 'app_objectif_admin_stats', '_controller' => 'App\\Controller\\ObjectifAdminController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/objectif' => [[['_route' => 'app_objectif_index', '_controller' => 'App\\Controller\\ObjectifController::index'], null, ['GET' => 0], null, false, false, null]],
        '/objectif/calendar' => [[['_route' => 'app_objectif_calendar', '_controller' => 'App\\Controller\\ObjectifController::calendar'], null, ['GET' => 0], null, false, false, null]],
        '/objectif/calendar/events' => [[['_route' => 'app_objectif_calendar_events', '_controller' => 'App\\Controller\\ObjectifController::calendarEvents'], null, ['GET' => 0], null, false, false, null]],
        '/objectif/new' => [[['_route' => 'app_objectif_new', '_controller' => 'App\\Controller\\ObjectifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recommandation' => [[['_route' => 'app_recommandation_index', '_controller' => 'App\\Controller\\RecommandationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recommandation/generer' => [[['_route' => 'app_recommandation_generer', '_controller' => 'App\\Controller\\RecommandationController::generer'], null, ['POST' => 0], null, false, false, null]],
        '/recommandation/creer-objectif' => [[['_route' => 'app_recommandation_creer_objectif', '_controller' => 'App\\Controller\\RecommandationController::creerObjectif'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/admin/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/admin/reservations' => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\ReservationController::adminIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/admin/reservations/new' => [[['_route' => 'admin_reservation_new', '_controller' => 'App\\Controller\\ReservationController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/reservations/new' => [[['_route' => 'front_reservation_new', '_controller' => 'App\\Controller\\ReservationController::frontNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/default-redirect' => [[['_route' => 'app_default_redirect', '_controller' => 'App\\Controller\\SecurityController::defaultRedirect'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_session_index', '_controller' => 'App\\Controller\\SessionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/session/new' => [[['_route' => 'app_session_new', '_controller' => 'App\\Controller\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session/admin/sessions' => [[['_route' => 'admin_session_index', '_controller' => 'App\\Controller\\SessionController::adminIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session/admin/sessions/new' => [[['_route' => 'admin_session_new', '_controller' => 'App\\Controller\\SessionController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tache' => [[['_route' => 'app_tache_admin_index', '_controller' => 'App\\Controller\\TacheAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/tache/search' => [[['_route' => 'app_tache_admin_search', '_controller' => 'App\\Controller\\TacheAdminController::search'], null, ['POST' => 0], null, false, false, null]],
        '/admin/tache/new' => [[['_route' => 'app_tache_admin_new', '_controller' => 'App\\Controller\\TacheAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tache/export-pdf' => [[['_route' => 'app_tache_admin_export_pdf', '_controller' => 'App\\Controller\\TacheAdminController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/tache' => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TacheController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tache/search' => [[['_route' => 'app_tache_search', '_controller' => 'App\\Controller\\TacheController::search'], null, ['POST' => 0], null, false, false, null]],
        '/tache/new' => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TacheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/test' => [[['_route' => 'app_test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/test/new' => [[['_route' => 'app_test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/test/admin/test/passages' => [[['_route' => 'app_admin_test_passages', '_controller' => 'App\\Controller\\TestController::adminTestPassages'], null, ['GET' => 0], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|pi/dictionary/search/([^/]++)(*:236)'
                    .'|dmin(?'
                        .'|Group/(?'
                            .'|([^/]++)(*:268)'
                            .'|message/([^/]++)/delete(*:299)'
                        .')'
                        .'|/(?'
                            .'|objectif/([^/]++)(?'
                                .'|(*:332)'
                                .'|/edit(*:345)'
                                .'|(*:353)'
                            .')'
                            .'|reponse/([^/]++)(?'
                                .'|(*:381)'
                                .'|/edit(*:394)'
                                .'|(*:402)'
                            .')'
                            .'|t(?'
                                .'|ache/(?'
                                    .'|(\\d+)(*:428)'
                                    .'|(\\d+)/edit(*:446)'
                                    .'|(\\d+)(*:459)'
                                .')'
                                .'|est/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:486)'
                                        .'|/edit(*:499)'
                                        .'|(*:507)'
                                    .')'
                                    .'|e(?'
                                        .'|tudiant/(?'
                                            .'|([^/]++)(?'
                                                .'|(*:542)'
                                                .'|/(?'
                                                    .'|s(?'
                                                        .'|tart(*:562)'
                                                        .'|ubmit(*:575)'
                                                    .')'
                                                    .'|pause(*:589)'
                                                    .'|resume(*:603)'
                                                .')'
                                            .')'
                                            .'|result/([^/]++)(*:628)'
                                            .'|analyse/([^/]++)(*:652)'
                                        .')'
                                        .'|xam/log\\-event/([^/]++)(*:684)'
                                    .')'
                                    .'|admin/passage/([^/]++)/(?'
                                        .'|expire(*:725)'
                                        .'|finaliser(*:742)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/cours(?'
                    .'|/(?'
                        .'|([^/]++)(*:777)'
                        .'|admin/([^/]++)(*:799)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:826)'
                                .'|terminer(*:842)'
                                .'|ressources\\-personnalisees(*:876)'
                            .')'
                            .'|(*:885)'
                        .')'
                    .')'
                    .'|\\-personnalise/generer/([^/]++)(*:926)'
                .')'
                .'|/dashboard/(?'
                    .'|delete\\-user/([^/]++)(*:970)'
                    .'|user/([^/]++)/(?'
                        .'|disable(*:1002)'
                        .'|edit(*:1015)'
                    .')'
                .')'
                .'|/face\\-setup/([^/]++)(*:1047)'
                .'|/groupes/([^/]++)(?'
                    .'|(*:1076)'
                    .'|/(?'
                        .'|message(*:1096)'
                        .'|ai/suggest(*:1115)'
                    .')'
                .')'
                .'|/messages/([^/]++)/(?'
                    .'|delete(*:1154)'
                    .'|edit(*:1167)'
                .')'
                .'|/Langue/(?'
                    .'|([^/]++)/apprentissage(*:1210)'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:1241)'
                        .'|delete(*:1256)'
                    .')'
                    .'|([^/]++)(*:1274)'
                .')'
                .'|/niveau/([^/]++)(?'
                    .'|(*:1303)'
                    .'|/edit(*:1317)'
                    .'|(*:1326)'
                .')'
                .'|/objectif/([^/]++)(?'
                    .'|(*:1357)'
                    .'|/edit(*:1371)'
                    .'|(*:1380)'
                .')'
                .'|/question/([^/]++)(?'
                    .'|(*:1411)'
                    .'|/edit(*:1425)'
                    .'|(*:1434)'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:1465)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1490)'
                        .'|(*:1499)'
                    .')'
                    .'|admin/reservations/(?'
                        .'|(\\d+)(*:1536)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1561)'
                            .'|delete(*:1576)'
                        .')'
                    .')'
                    .'|mes\\-reservations(*:1604)'
                .')'
                .'|/session/(?'
                    .'|(\\d+)(*:1631)'
                    .'|(\\d+)/reservations(*:1658)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:1686)'
                            .'|rejoindre(*:1704)'
                        .')'
                        .'|(*:1714)'
                    .')'
                    .'|admin/sessions/(?'
                        .'|(\\d+)(*:1747)'
                        .'|([^/]++)/(?'
                            .'|edit(*:1772)'
                            .'|delete(*:1787)'
                        .')'
                    .')'
                    .'|sessions(?'
                        .'|(*:1809)'
                        .'|/(?'
                            .'|(\\d+)(*:1827)'
                            .'|([^/]++)/rejoindre(*:1854)'
                        .')'
                    .')'
                .')'
                .'|/tache/(?'
                    .'|new/objectif/([^/]++)(*:1897)'
                    .'|([^/]++)(?'
                        .'|(*:1917)'
                        .'|/edit(*:1931)'
                        .'|(*:1940)'
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
        236 => [[['_route' => 'app_api_dictionary_search', '_controller' => 'App\\Controller\\Api\\DictionaryController::search'], ['word'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'admin_group_manage', '_controller' => 'App\\Controller\\GroupeController::adminGroupManage'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'admin_message_delete', '_controller' => 'App\\Controller\\GroupeController::adminDeleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        332 => [[['_route' => 'app_objectif_admin_show', '_controller' => 'App\\Controller\\ObjectifAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_objectif_admin_edit', '_controller' => 'App\\Controller\\ObjectifAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'app_objectif_admin_delete', '_controller' => 'App\\Controller\\ObjectifAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        381 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        402 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'app_tache_admin_show', '_controller' => 'App\\Controller\\TacheAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'app_tache_admin_edit', '_controller' => 'App\\Controller\\TacheAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'app_tache_admin_delete', '_controller' => 'App\\Controller\\TacheAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        486 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        499 => [[['_route' => 'app_test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        507 => [[['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        542 => [[['_route' => 'app_test_student_show', '_controller' => 'App\\Controller\\TestController::studentShow'], ['id'], ['GET' => 0], null, false, true, null]],
        562 => [[['_route' => 'app_test_student_start', '_controller' => 'App\\Controller\\TestController::startTest'], ['id'], ['POST' => 0], null, false, false, null]],
        575 => [[['_route' => 'app_test_student_submit', '_controller' => 'App\\Controller\\TestController::studentSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        589 => [[['_route' => 'app_test_student_pause', '_controller' => 'App\\Controller\\TestController::pauseTest'], ['id'], ['POST' => 0], null, false, false, null]],
        603 => [[['_route' => 'app_test_student_resume', '_controller' => 'App\\Controller\\TestController::resumeTest'], ['id'], ['POST' => 0], null, false, false, null]],
        628 => [[['_route' => 'app_test_student_result', '_controller' => 'App\\Controller\\TestController::studentResults'], ['id'], ['GET' => 0], null, false, true, null]],
        652 => [[['_route' => 'app_etudiant_analyse', '_controller' => 'App\\Controller\\TestController::analysePerformance'], ['langueId'], ['GET' => 0], null, false, true, null]],
        684 => [[['_route' => 'app_exam_log_event', '_controller' => 'App\\Controller\\TestController::logExamEvent'], ['id'], ['POST' => 0], null, false, true, null]],
        725 => [[['_route' => 'admin_expire_passage', '_controller' => 'App\\Controller\\TestController::expirePassage'], ['id'], ['POST' => 0], null, false, false, null]],
        742 => [[['_route' => 'admin_finaliser_passage', '_controller' => 'App\\Controller\\TestController::finaliserPassage'], ['id'], ['POST' => 0], null, false, false, null]],
        777 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        799 => [[['_route' => 'app_admin_cours_show', '_controller' => 'App\\Controller\\CoursController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        826 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        842 => [[['_route' => 'app_cours_terminer', '_controller' => 'App\\Controller\\CoursController::terminer'], ['id'], ['POST' => 0], null, false, false, null]],
        876 => [[['_route' => 'app_cours_ressources_personnalisees', '_controller' => 'App\\Controller\\CoursController::ressourcesPersonnalisees'], ['id'], ['GET' => 0], null, false, false, null]],
        885 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_cours_personnalise_generer', '_controller' => 'App\\Controller\\CoursPersonnaliseController::generer'], ['id'], null, null, false, true, null]],
        970 => [[['_route' => 'dashboard_delete_user', '_controller' => 'App\\Controller\\DashboardController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        1002 => [[['_route' => 'dashboard_disable_user', '_controller' => 'App\\Controller\\DashboardController::disableUser'], ['id'], ['POST' => 0], null, false, false, null]],
        1015 => [[['_route' => 'dashboard_edit_user', '_controller' => 'App\\Controller\\DashboardController::editUser'], ['id'], null, null, false, false, null]],
        1047 => [[['_route' => 'app_face_setup', '_controller' => 'App\\Controller\\FaceController::setup'], ['id'], null, null, false, true, null]],
        1076 => [[['_route' => 'app_groupe_details', '_controller' => 'App\\Controller\\GroupeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1096 => [[['_route' => 'app_groupe_message', '_controller' => 'App\\Controller\\GroupeController::sendMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1115 => [[['_route' => 'app_groupe_ai_suggest', '_controller' => 'App\\Controller\\GroupeController::aiSuggest'], ['id'], ['POST' => 0], null, false, false, null]],
        1154 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\GroupeController::deleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1167 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\GroupeController::editMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1210 => [[['_route' => 'app_langue_apprentissage', '_controller' => 'App\\Controller\\LangueController::apprentissage'], ['id'], ['GET' => 0], null, false, false, null]],
        1241 => [[['_route' => 'app_admin_langue_edit', '_controller' => 'App\\Controller\\LangueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1256 => [[['_route' => 'app_admin_langue_delete', '_controller' => 'App\\Controller\\LangueController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1274 => [[['_route' => 'app_langue_show', '_controller' => 'App\\Controller\\LangueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1303 => [[['_route' => 'app_niveau_show', '_controller' => 'App\\Controller\\NiveauController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1317 => [[['_route' => 'app_niveau_edit', '_controller' => 'App\\Controller\\NiveauController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1326 => [[['_route' => 'app_niveau_delete', '_controller' => 'App\\Controller\\NiveauController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1357 => [[['_route' => 'app_objectif_show', '_controller' => 'App\\Controller\\ObjectifController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1371 => [[['_route' => 'app_objectif_edit', '_controller' => 'App\\Controller\\ObjectifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1380 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\ObjectifController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1411 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1425 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1434 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1465 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1490 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1499 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1536 => [[['_route' => 'admin_reservation_show', '_controller' => 'App\\Controller\\ReservationController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1561 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1576 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1604 => [[['_route' => 'front_reservation_index', '_controller' => 'App\\Controller\\ReservationController::frontIndex'], [], ['GET' => 0], null, false, false, null]],
        1631 => [[['_route' => 'app_session_show', '_controller' => 'App\\Controller\\SessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1658 => [[['_route' => 'app_session_reservations', '_controller' => 'App\\Controller\\SessionController::showReservations'], ['id'], ['GET' => 0], null, false, false, null]],
        1686 => [[['_route' => 'app_session_edit', '_controller' => 'App\\Controller\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1704 => [[['_route' => 'app_session_rejoindre', '_controller' => 'App\\Controller\\SessionController::rejoindre'], ['id'], ['GET' => 0], null, false, false, null]],
        1714 => [[['_route' => 'app_session_delete', '_controller' => 'App\\Controller\\SessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1747 => [[['_route' => 'admin_session_show', '_controller' => 'App\\Controller\\SessionController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1772 => [[['_route' => 'admin_session_edit', '_controller' => 'App\\Controller\\SessionController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1787 => [[['_route' => 'admin_session_delete', '_controller' => 'App\\Controller\\SessionController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        1809 => [[['_route' => 'front_session_index', '_controller' => 'App\\Controller\\SessionController::frontIndex'], [], ['GET' => 0], null, false, false, null]],
        1827 => [[['_route' => 'front_session_show', '_controller' => 'App\\Controller\\SessionController::frontShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1854 => [[['_route' => 'front_session_rejoindre', '_controller' => 'App\\Controller\\SessionController::frontRejoindre'], ['id'], ['GET' => 0], null, false, false, null]],
        1897 => [[['_route' => 'app_tache_new_from_objectif', '_controller' => 'App\\Controller\\TacheController::newFromObjectif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1917 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1931 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1940 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
