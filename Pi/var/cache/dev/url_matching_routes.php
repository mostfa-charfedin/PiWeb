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
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programmebienetre' => [[['_route' => 'app_programmebienetre_index', '_controller' => 'App\\Controller\\ProgrammebienetreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/programmebienetre/new' => [[['_route' => 'app_programmebienetre_new', '_controller' => 'App\\Controller\\ProgrammebienetreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/new' => [[['_route' => 'projet_new', '_controller' => 'App\\Controller\\ProjetController::new'], null, null, null, false, false, null]],
        '/projet' => [[['_route' => 'projet_list', '_controller' => 'App\\Controller\\ProjetController::list'], null, null, null, false, false, null]],
        '/mes-projets' => [[['_route' => 'user_projet_list', '_controller' => 'App\\Controller\\ProjetController::userProjetList'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\QuizController::list'], null, null, null, false, false, null]],
        '/quiz/new' => [[['_route' => 'quiz_new', '_controller' => 'App\\Controller\\QuizController::new'], null, null, null, false, false, null]],
        '/recompense' => [[['_route' => 'app_recompense_index', '_controller' => 'App\\Controller\\RecompenseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recompense/new' => [[['_route' => 'app_recompense_new', '_controller' => 'App\\Controller\\RecompenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/score' => [[['_route' => 'app_score', '_controller' => 'App\\Controller\\ScoreController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/inscrit' => [[['_route' => 'inscrit', '_controller' => 'App\\Controller\\UserController::ajouter'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/GestionUsers' => [[['_route' => 'GestionUsers', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/avis/(?'
                    .'|new/([^/]++)(*:223)'
                    .'|([^/]++)(?'
                        .'|/edit(*:247)'
                        .'|(*:255)'
                    .')'
                .')'
                .'|/p(?'
                    .'|rogrammebienetre/([^/]++)(?'
                        .'|(*:298)'
                        .'|/(?'
                            .'|edit(*:314)'
                            .'|delete(*:328)'
                        .')'
                    .')'
                    .'|i/projet/(\\d+)(*:352)'
                .')'
                .'|/(\\d+)(*:367)'
                .'|/projet/(?'
                    .'|(\\d+)/delete(*:398)'
                    .'|([^/]++)/(?'
                        .'|tache/new(*:427)'
                        .'|stats(*:440)'
                    .')'
                    .'|(\\d+)/tasks(*:460)'
                    .'|([^/]++)/rapport(*:484)'
                .')'
                .'|/ta(?'
                    .'|che/([^/]++)/(?'
                        .'|edit(*:519)'
                        .'|delete(*:533)'
                    .')'
                    .'|sk/(?'
                        .'|(\\d+)(*:553)'
                        .'|([^/]++)/done(*:574)'
                    .')'
                .')'
                .'|/qu(?'
                    .'|estion/(?'
                        .'|new/([^/]++)(*:612)'
                        .'|(\\d+)/edit(*:630)'
                        .'|(\\d+)/delete(*:650)'
                        .'|(\\d+)(*:663)'
                        .'|([^/]++)/reponse/new(*:691)'
                    .')'
                    .'|iz/(?'
                        .'|(\\d+)/edit(*:716)'
                        .'|(\\d+)(*:729)'
                        .'|([^/]++)/delete(*:752)'
                    .')'
                .')'
                .'|/re(?'
                    .'|compense/(?'
                        .'|program/([^/]++)(*:796)'
                        .'|([^/]++)(?'
                            .'|(*:815)'
                            .'|/(?'
                                .'|edit(*:831)'
                                .'|delete(*:845)'
                            .')'
                        .')'
                    .')'
                    .'|ponse/([^/]++)/delete(*:877)'
                    .'|set\\-password/reset(?:/([^/]++))?(*:918)'
                .')'
                .'|/admin/user/([^/]++)/(?'
                    .'|de(?'
                        .'|tails(*:961)'
                        .'|lete(*:973)'
                    .')'
                    .'|edit\\-modal(*:993)'
                    .'|update(*:1007)'
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
        223 => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], ['idprogramme'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        247 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_programmebienetre_show', '_controller' => 'App\\Controller\\ProgrammebienetreController::show'], ['idprogramme'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'app_programmebienetre_edit', '_controller' => 'App\\Controller\\ProgrammebienetreController::edit'], ['idprogramme'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'app_programmebienetre_delete', '_controller' => 'App\\Controller\\ProgrammebienetreController::delete'], ['idprogramme'], ['POST' => 0], null, false, false, null]],
        352 => [[['_route' => 'projet_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['idProjet'], null, null, false, true, null]],
        367 => [[['_route' => 'projet_edit', '_controller' => 'App\\Controller\\ProjetController::edit'], ['idProjet'], null, null, false, true, null]],
        398 => [[['_route' => 'projet_delete', '_controller' => 'App\\Controller\\ProjetController::delete'], ['idProjet'], null, null, false, false, null]],
        427 => [[['_route' => 'tache_new', '_controller' => 'App\\Controller\\ProjetController::createTache'], ['idProjet'], null, null, false, false, null]],
        440 => [[['_route' => 'projet_stats', '_controller' => 'App\\Controller\\ProjetController::stats'], ['idProjet'], null, null, false, false, null]],
        460 => [[['_route' => 'user_projet_tasks', '_controller' => 'App\\Controller\\ProjetController::userTasksForProject'], ['idProjet'], null, null, false, false, null]],
        484 => [[['_route' => 'projet_rapport', '_controller' => 'App\\Controller\\ProjetController::generateRapport'], ['idProjet'], null, null, false, false, null]],
        519 => [[['_route' => 'tache_edit', '_controller' => 'App\\Controller\\ProjetController::editTache'], ['idTache'], null, null, false, false, null]],
        533 => [[['_route' => 'tache_delete', '_controller' => 'App\\Controller\\ProjetController::deleteTache'], ['idTache'], null, null, false, false, null]],
        553 => [[['_route' => 'user_task_show', '_controller' => 'App\\Controller\\ProjetController::showTask'], ['id'], null, null, false, true, null]],
        574 => [[['_route' => 'task_mark_done', '_controller' => 'App\\Controller\\ProjetController::markTaskDone'], ['id'], ['POST' => 0], null, false, false, null]],
        612 => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], ['quizId'], null, null, false, true, null]],
        630 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], null, null, false, false, null]],
        650 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        663 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], null, null, false, true, null]],
        691 => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::createReponse'], ['idQuestion'], null, null, false, false, null]],
        716 => [[['_route' => 'quiz_edit', '_controller' => 'App\\Controller\\QuizController::edit'], ['id'], null, null, false, false, null]],
        729 => [[['_route' => 'quiz_show', '_controller' => 'App\\Controller\\QuizController::show'], ['id'], null, null, false, true, null]],
        752 => [[['_route' => 'quiz_delete', '_controller' => 'App\\Controller\\QuizController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        796 => [[['_route' => 'app_recompense_program', '_controller' => 'App\\Controller\\RecompenseController::programRewards'], ['idprogramme'], ['GET' => 0], null, false, true, null]],
        815 => [[['_route' => 'app_recompense_show', '_controller' => 'App\\Controller\\RecompenseController::show'], ['idrecompense'], ['GET' => 0], null, false, true, null]],
        831 => [[['_route' => 'app_recompense_edit', '_controller' => 'App\\Controller\\RecompenseController::edit'], ['idrecompense'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        845 => [[['_route' => 'app_recompense_delete', '_controller' => 'App\\Controller\\RecompenseController::delete'], ['idrecompense'], ['POST' => 0], null, false, false, null]],
        877 => [[['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::deleteReponse'], ['idReponse'], ['POST' => 0], null, false, false, null]],
        918 => [[['_route' => 'app_reset_password_reset', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        961 => [[['_route' => 'admin_user_details', '_controller' => 'App\\Controller\\UserController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        973 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        993 => [[['_route' => 'admin_user_edit_modal', '_controller' => 'App\\Controller\\UserController::editModal'], ['id'], ['GET' => 0], null, false, false, null]],
        1007 => [
            [['_route' => 'admin_user_update', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
