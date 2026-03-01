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
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/calendar/events' => [[['_route' => 'calendar_events', '_controller' => 'App\\Controller\\CalendarController::events'], null, ['GET' => 0], null, false, false, null]],
        '/calendar/recommend' => [[['_route' => 'calendar_recommend', '_controller' => 'App\\Controller\\CalendarController::recommend'], null, ['POST' => 0], null, false, false, null]],
        '/calendar/debug-events' => [[['_route' => 'calendar_debug', '_controller' => 'App\\Controller\\CalendarController::debugEvents'], null, ['GET' => 0], null, false, false, null]],
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
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/professeur/reservations' => [[['_route' => 'reservation_professeur', '_controller' => 'App\\Controller\\ReservationController::professeurReservations'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/calendar' => [[['_route' => 'reservation_calendar', '_controller' => 'App\\Controller\\ReservationController::calendar'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/calendar/events' => [[['_route' => 'reservation_calendar_events', '_controller' => 'App\\Controller\\ReservationController::calendarEvents'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/default-redirect' => [[['_route' => 'app_default_redirect', '_controller' => 'App\\Controller\\SecurityController::defaultRedirect'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_session_index', '_controller' => 'App\\Controller\\SessionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/session/professeur/reservations' => [[['_route' => 'session_prof_reservations_redirect', '_controller' => 'App\\Controller\\SessionController::redirectToReservations'], null, ['GET' => 0], null, false, false, null]],
        '/session/professeur/dashboard' => [[['_route' => 'session_prof_dashboard', '_controller' => 'App\\Controller\\SessionController::professeurDashboard'], null, ['GET' => 0], null, false, false, null]],
        '/session/professeur/sessions' => [[['_route' => 'prof_session_list', '_controller' => 'App\\Controller\\SessionController::profSessionList'], null, ['GET' => 0], null, false, false, null]],
        '/session/professeur/sessions/new' => [[['_route' => 'prof_session_new', '_controller' => 'App\\Controller\\SessionController::profSessionNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/session/professeur' => [[['_route' => 'session_professeur', '_controller' => 'App\\Controller\\SessionController::espaceProfesseur'], null, ['GET' => 0], null, false, false, null]],
        '/session/new' => [[['_route' => 'app_session_new', '_controller' => 'App\\Controller\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/q(?'
                    .'|r\\-code/([^/]++)/([\\w\\W]+)(*:38)'
                    .'|uestion/([^/]++)(?'
                        .'|(*:64)'
                        .'|/edit(*:76)'
                        .'|(*:83)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:123)'
                    .'|wdt/([^/]++)(*:143)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:185)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:222)'
                                .'|router(*:236)'
                                .'|exception(?'
                                    .'|(*:256)'
                                    .'|\\.css(*:269)'
                                .')'
                            .')'
                            .'|(*:279)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/dictionary/search/([^/]++)(*:324)'
                    .'|dmin(?'
                        .'|Group/(?'
                            .'|([^/]++)(*:356)'
                            .'|message/([^/]++)/delete(*:387)'
                        .')'
                        .'|/(?'
                            .'|objectif/([^/]++)(?'
                                .'|(*:420)'
                                .'|/edit(*:433)'
                                .'|(*:441)'
                            .')'
                            .'|reponse/([^/]++)(?'
                                .'|(*:469)'
                                .'|/edit(*:482)'
                                .'|(*:490)'
                            .')'
                            .'|t(?'
                                .'|ache/(?'
                                    .'|(\\d+)(*:516)'
                                    .'|(\\d+)/edit(*:534)'
                                    .'|(\\d+)(*:547)'
                                .')'
                                .'|est/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:574)'
                                        .'|/edit(*:587)'
                                        .'|(*:595)'
                                    .')'
                                    .'|e(?'
                                        .'|tudiant/(?'
                                            .'|([^/]++)(?'
                                                .'|(*:630)'
                                                .'|/(?'
                                                    .'|s(?'
                                                        .'|tart(*:650)'
                                                        .'|ubmit(*:663)'
                                                    .')'
                                                    .'|pause(*:677)'
                                                    .'|resume(*:691)'
                                                .')'
                                            .')'
                                            .'|result/([^/]++)(*:716)'
                                            .'|analyse/([^/]++)(*:740)'
                                        .')'
                                        .'|xam/log\\-event/([^/]++)(*:772)'
                                    .')'
                                    .'|admin/passage/([^/]++)/(?'
                                        .'|expire(*:813)'
                                        .'|finaliser(*:830)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|alendar/(?'
                        .'|qrcode/([^/]++)(*:875)'
                        .'|sync\\-google/([^/]++)(*:904)'
                    .')'
                    .'|ours(?'
                        .'|/(?'
                            .'|([^/]++)(*:932)'
                            .'|admin/([^/]++)(*:954)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:981)'
                                    .'|terminer(*:997)'
                                    .'|ressources\\-personnalisees(*:1031)'
                                .')'
                                .'|(*:1041)'
                            .')'
                        .')'
                        .'|\\-personnalise/generer/([^/]++)(*:1083)'
                    .')'
                .')'
                .'|/dashboard/(?'
                    .'|delete\\-user/([^/]++)(*:1129)'
                    .'|user/([^/]++)/(?'
                        .'|disable(*:1162)'
                        .'|edit(*:1175)'
                    .')'
                .')'
                .'|/face\\-setup/([^/]++)(*:1207)'
                .'|/groupes/([^/]++)(?'
                    .'|(*:1236)'
                    .'|/(?'
                        .'|message(*:1256)'
                        .'|ai/suggest(*:1275)'
                    .')'
                .')'
                .'|/messages/([^/]++)/(?'
                    .'|delete(*:1314)'
                    .'|edit(*:1327)'
                .')'
                .'|/Langue/(?'
                    .'|([^/]++)/apprentissage(*:1370)'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:1401)'
                        .'|delete(*:1416)'
                    .')'
                    .'|([^/]++)(*:1434)'
                .')'
                .'|/niveau/([^/]++)(?'
                    .'|(*:1463)'
                    .'|/edit(*:1477)'
                    .'|(*:1486)'
                .')'
                .'|/objectif/([^/]++)(?'
                    .'|(*:1517)'
                    .'|/edit(*:1531)'
                    .'|(*:1540)'
                .')'
                .'|/reservation/([^/]++)(?'
                    .'|(*:1574)'
                    .'|/(?'
                        .'|edit(*:1591)'
                        .'|statut(*:1606)'
                    .')'
                    .'|(*:1616)'
                .')'
                .'|/session/(?'
                    .'|professeur/sessions/([^/]++)(?'
                        .'|/edit(*:1674)'
                        .'|(*:1683)'
                    .')'
                    .'|([^/]++)/rate(*:1706)'
                .')'
                .'|/tache/(?'
                    .'|new/objectif/([^/]++)(*:1747)'
                    .'|([^/]++)(?'
                        .'|(*:1767)'
                        .'|/edit(*:1781)'
                        .'|(*:1790)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        64 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        123 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        143 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        222 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        236 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        256 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        269 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        279 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        324 => [[['_route' => 'app_api_dictionary_search', '_controller' => 'App\\Controller\\Api\\DictionaryController::search'], ['word'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'admin_group_manage', '_controller' => 'App\\Controller\\GroupeController::adminGroupManage'], ['id'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => 'admin_message_delete', '_controller' => 'App\\Controller\\GroupeController::adminDeleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'app_objectif_admin_show', '_controller' => 'App\\Controller\\ObjectifAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_objectif_admin_edit', '_controller' => 'App\\Controller\\ObjectifAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [[['_route' => 'app_objectif_admin_delete', '_controller' => 'App\\Controller\\ObjectifAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        490 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        516 => [[['_route' => 'app_tache_admin_show', '_controller' => 'App\\Controller\\TacheAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_tache_admin_edit', '_controller' => 'App\\Controller\\TacheAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [[['_route' => 'app_tache_admin_delete', '_controller' => 'App\\Controller\\TacheAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        574 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        595 => [[['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        630 => [[['_route' => 'app_test_student_show', '_controller' => 'App\\Controller\\TestController::studentShow'], ['id'], ['GET' => 0], null, false, true, null]],
        650 => [[['_route' => 'app_test_student_start', '_controller' => 'App\\Controller\\TestController::startTest'], ['id'], ['POST' => 0], null, false, false, null]],
        663 => [[['_route' => 'app_test_student_submit', '_controller' => 'App\\Controller\\TestController::studentSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        677 => [[['_route' => 'app_test_student_pause', '_controller' => 'App\\Controller\\TestController::pauseTest'], ['id'], ['POST' => 0], null, false, false, null]],
        691 => [[['_route' => 'app_test_student_resume', '_controller' => 'App\\Controller\\TestController::resumeTest'], ['id'], ['POST' => 0], null, false, false, null]],
        716 => [[['_route' => 'app_test_student_result', '_controller' => 'App\\Controller\\TestController::studentResults'], ['id'], ['GET' => 0], null, false, true, null]],
        740 => [[['_route' => 'app_etudiant_analyse', '_controller' => 'App\\Controller\\TestController::analysePerformance'], ['langueId'], ['GET' => 0], null, false, true, null]],
        772 => [[['_route' => 'app_exam_log_event', '_controller' => 'App\\Controller\\TestController::logExamEvent'], ['id'], ['POST' => 0], null, false, true, null]],
        813 => [[['_route' => 'admin_expire_passage', '_controller' => 'App\\Controller\\TestController::expirePassage'], ['id'], ['POST' => 0], null, false, false, null]],
        830 => [[['_route' => 'admin_finaliser_passage', '_controller' => 'App\\Controller\\TestController::finaliserPassage'], ['id'], ['POST' => 0], null, false, false, null]],
        875 => [[['_route' => 'calendar_qrcode', '_controller' => 'App\\Controller\\CalendarController::qrcode'], ['id'], ['GET' => 0], null, false, true, null]],
        904 => [[['_route' => 'calendar_sync_google', '_controller' => 'App\\Controller\\CalendarController::syncGoogle'], ['id'], ['POST' => 0], null, false, true, null]],
        932 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        954 => [[['_route' => 'app_admin_cours_show', '_controller' => 'App\\Controller\\CoursController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        981 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        997 => [[['_route' => 'app_cours_terminer', '_controller' => 'App\\Controller\\CoursController::terminer'], ['id'], ['POST' => 0], null, false, false, null]],
        1031 => [[['_route' => 'app_cours_ressources_personnalisees', '_controller' => 'App\\Controller\\CoursController::ressourcesPersonnalisees'], ['id'], ['GET' => 0], null, false, false, null]],
        1041 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1083 => [[['_route' => 'app_cours_personnalise_generer', '_controller' => 'App\\Controller\\CoursPersonnaliseController::generer'], ['id'], null, null, false, true, null]],
        1129 => [[['_route' => 'dashboard_delete_user', '_controller' => 'App\\Controller\\DashboardController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        1162 => [[['_route' => 'dashboard_disable_user', '_controller' => 'App\\Controller\\DashboardController::disableUser'], ['id'], ['POST' => 0], null, false, false, null]],
        1175 => [[['_route' => 'dashboard_edit_user', '_controller' => 'App\\Controller\\DashboardController::editUser'], ['id'], null, null, false, false, null]],
        1207 => [[['_route' => 'app_face_setup', '_controller' => 'App\\Controller\\FaceController::setup'], ['id'], null, null, false, true, null]],
        1236 => [[['_route' => 'app_groupe_details', '_controller' => 'App\\Controller\\GroupeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1256 => [[['_route' => 'app_groupe_message', '_controller' => 'App\\Controller\\GroupeController::sendMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1275 => [[['_route' => 'app_groupe_ai_suggest', '_controller' => 'App\\Controller\\GroupeController::aiSuggest'], ['id'], ['POST' => 0], null, false, false, null]],
        1314 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\GroupeController::deleteMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1327 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\GroupeController::editMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        1370 => [[['_route' => 'app_langue_apprentissage', '_controller' => 'App\\Controller\\LangueController::apprentissage'], ['id'], ['GET' => 0], null, false, false, null]],
        1401 => [[['_route' => 'app_admin_langue_edit', '_controller' => 'App\\Controller\\LangueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1416 => [[['_route' => 'app_admin_langue_delete', '_controller' => 'App\\Controller\\LangueController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1434 => [[['_route' => 'app_langue_show', '_controller' => 'App\\Controller\\LangueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1463 => [[['_route' => 'app_niveau_show', '_controller' => 'App\\Controller\\NiveauController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1477 => [[['_route' => 'app_niveau_edit', '_controller' => 'App\\Controller\\NiveauController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1486 => [[['_route' => 'app_niveau_delete', '_controller' => 'App\\Controller\\NiveauController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1517 => [[['_route' => 'app_objectif_show', '_controller' => 'App\\Controller\\ObjectifController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1531 => [[['_route' => 'app_objectif_edit', '_controller' => 'App\\Controller\\ObjectifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1540 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\ObjectifController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1574 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1591 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1606 => [[['_route' => 'app_reservation_update_statut', '_controller' => 'App\\Controller\\ReservationController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        1616 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1674 => [[['_route' => 'prof_session_edit', '_controller' => 'App\\Controller\\SessionController::profSessionEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1683 => [
            [['_route' => 'prof_session_show', '_controller' => 'App\\Controller\\SessionController::profSessionShow'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'prof_session_delete', '_controller' => 'App\\Controller\\SessionController::profSessionDelete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1706 => [[['_route' => 'app_session_rate', '_controller' => 'App\\Controller\\SessionController::rate'], ['id'], ['POST' => 0], null, false, false, null]],
        1747 => [[['_route' => 'app_tache_new_from_objectif', '_controller' => 'App\\Controller\\TacheController::newFromObjectif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1767 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1781 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1790 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
