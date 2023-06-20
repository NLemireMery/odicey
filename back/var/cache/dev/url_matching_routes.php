<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backoffice/games' => [[['_route' => 'app_backoffice_game_getGames', '_controller' => 'App\\Controller\\Backoffice\\GameController::getGames'], null, null, null, false, false, null]],
        '/backoffice/games/new' => [[['_route' => 'app_backoffice_game_postGames', '_controller' => 'App\\Controller\\Backoffice\\GameController::postGames'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Backoffice\\LoginController::index'], null, null, null, false, false, null]],
        '/backoffice/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Backoffice\\LogoutController::logout'], null, null, null, false, false, null]],
        '/backoffice/home' => [[['_route' => 'app_backoffice_home', '_controller' => 'App\\Controller\\Backoffice\\MainController::home'], null, null, null, false, false, null]],
        '/backoffice/modes' => [[['_route' => 'app_backoffice_mode_getModes', '_controller' => 'App\\Controller\\Backoffice\\ModeController::getModes'], null, null, null, false, false, null]],
        '/backoffice/modes/new' => [[['_route' => 'app_backoffice_mode_postModes', '_controller' => 'App\\Controller\\Backoffice\\ModeController::postModes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/users' => [[['_route' => 'app_backoffice_user_getUsers', '_controller' => 'App\\Controller\\Backoffice\\UserController::getUsers'], null, null, null, false, false, null]],
        '/backoffice/users/searchByMail' => [[['_route' => 'app_backoffice_user_getUsersByMail', '_controller' => 'App\\Controller\\Backoffice\\UserController::getUsersByMail'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/users/new' => [[['_route' => 'app_backoffice_user_postUsers', '_controller' => 'App\\Controller\\Backoffice\\UserController::postUsers'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/characters' => [
            [['_route' => 'app_api_character_getCharacters', '_controller' => 'App\\Controller\\CharacterController::getCharacters'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_character_postCharacters', '_controller' => 'App\\Controller\\CharacterController::postCharacters'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/galleries' => [
            [['_route' => 'app_api_gallery_getGalleries', '_controller' => 'App\\Controller\\GalleryController::getGalleries'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_gallery_postGalleries', '_controller' => 'App\\Controller\\GalleryController::postGalleries'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/games' => [
            [['_route' => 'app_api_game_getGames', '_controller' => 'App\\Controller\\GameController::getGames'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_game_postGames', '_controller' => 'App\\Controller\\GameController::postGames'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/modes' => [[['_route' => 'app_api_mode_getModes', '_controller' => 'App\\Controller\\ModeController::getModes'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [
            [['_route' => 'app_api_user_getUsers', '_controller' => 'App\\Controller\\UserController::getUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_user_postUsers', '_controller' => 'App\\Controller\\UserController::postUsers'], null, ['POST' => 0], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
        '/mercure/hub' => [[['_route' => 'mercure_hub', '_controller' => 'mercure.hub'], null, ['GET' => 0], null, false, false, null]],
        '/mercure/subscribe' => [[['_route' => 'mercure_subscribe', '_controller' => 'mercure.subscribe'], null, ['GET' => 0], null, false, false, null]],
        '/test/mercure' => [[['_route' => 'test_mercure', '_controller' => 'App\\Controller\\TestController::mercureTestAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/backoffice/(?'
                    .'|characters/(\\d+)(*:38)'
                    .'|games/(?'
                        .'|(\\d+)(*:59)'
                        .'|([^/]++)/edit(*:79)'
                        .'|(\\d+)(*:91)'
                    .')'
                    .'|modes/(?'
                        .'|(\\d+)(*:113)'
                        .'|([^/]++)/edit(*:134)'
                        .'|(\\d+)(*:147)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:170)'
                        .'|(\\d+)/edit(*:188)'
                        .'|(\\d+)(*:201)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|characters/(?'
                        .'|([^/]++)(*:241)'
                        .'|(\\d+)(?'
                            .'|(*:257)'
                        .')'
                    .')'
                    .'|ga(?'
                        .'|lleries/(?'
                            .'|([^/]++)(*:291)'
                            .'|(\\d+)(?'
                                .'|(*:307)'
                            .')'
                        .')'
                        .'|mes/(?'
                            .'|(\\d+)(*:329)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|characters(*:362)'
                                    .'|users(?'
                                        .'|(*:378)'
                                        .'|/([^/]++)(*:395)'
                                    .')'
                                    .'|galleries(*:413)'
                                .')'
                                .'|(*:422)'
                            .')'
                        .')'
                    .')'
                    .'|modes/(\\d+)(*:444)'
                    .'|users/([^/]++)(?'
                        .'|(*:469)'
                        .'|/(?'
                            .'|characters(*:491)'
                            .'|games(?'
                                .'|(*:507)'
                                .'|/(?'
                                    .'|withoutCharacters(*:536)'
                                    .'|([^/]++)/character(*:562)'
                                .')'
                            .')'
                            .'|invites(*:579)'
                        .')'
                        .'|(*:588)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:629)'
                    .'|wdt/([^/]++)(*:649)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:695)'
                            .'|router(*:709)'
                            .'|exception(?'
                                .'|(*:729)'
                                .'|\\.css(*:742)'
                            .')'
                        .')'
                        .'|(*:752)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_backoffice_character_deleteCharacters', '_controller' => 'App\\Controller\\Backoffice\\CharacterController::deleteCharacters'], ['id'], ['POST' => 0], null, false, true, null]],
        59 => [[['_route' => 'app_backoffice_game_getGamesById', '_controller' => 'App\\Controller\\Backoffice\\GameController::getGamesById'], ['id'], ['GET' => 0], null, false, true, null]],
        79 => [[['_route' => 'app_backoffice_game_editGames', '_controller' => 'App\\Controller\\Backoffice\\GameController::editGames'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        91 => [[['_route' => 'app_backoffice_game_deleteGames', '_controller' => 'App\\Controller\\Backoffice\\GameController::deleteGames'], ['id'], ['POST' => 0], null, false, true, null]],
        113 => [[['_route' => 'app_backoffice_mode_getModesById', '_controller' => 'App\\Controller\\Backoffice\\ModeController::getModesById'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_backoffice_mode_editModes', '_controller' => 'App\\Controller\\Backoffice\\ModeController::editModes'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'app_backoffice_mode_deleteModes', '_controller' => 'App\\Controller\\Backoffice\\ModeController::deleteModes'], ['id'], ['POST' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_backoffice_user_getUsersById', '_controller' => 'App\\Controller\\Backoffice\\UserController::getUsersById'], ['id'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_backoffice_user_editUsers', '_controller' => 'App\\Controller\\Backoffice\\UserController::editUsers'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        201 => [[['_route' => 'app_backoffice_user_deleteUsers', '_controller' => 'App\\Controller\\Backoffice\\UserController::deleteUsers'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_api_character_getCharactersById', '_controller' => 'App\\Controller\\CharacterController::getCharactersById'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => 'app_api_character_editCharacters', '_controller' => 'App\\Controller\\CharacterController::editCharacters'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'app_api_character_deleteCharacters', '_controller' => 'App\\Controller\\CharacterController::deleteCharacters'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        291 => [[['_route' => 'app_api_gallery_getGalleriesById', '_controller' => 'App\\Controller\\GalleryController::getGalleriesById'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [
            [['_route' => 'app_api_gallery_editGalleries', '_controller' => 'App\\Controller\\GalleryController::editGalleries'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'app_api_gallery_deleteGalleries', '_controller' => 'App\\Controller\\GalleryController::deleteGalleries'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        329 => [[['_route' => 'app_api_game_getGamesById', '_controller' => 'App\\Controller\\GameController::getGamesById'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_api_game_getCharactersByGame', '_controller' => 'App\\Controller\\GameController::getCharactersByGame'], ['id'], ['GET' => 0], null, false, false, null]],
        378 => [
            [['_route' => 'app_api_game_getUsersByGame', '_controller' => 'App\\Controller\\GameController::getUsersByGame'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_game_postGameUsersInvites', '_controller' => 'App\\Controller\\GameController::postGameUsersInvites'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        395 => [[['_route' => 'app_api_game_deleteGameUser', '_controller' => 'App\\Controller\\GameController::deleteGameUser'], ['id', 'user_id'], ['DELETE' => 0], null, false, true, null]],
        413 => [[['_route' => 'app_api_game_getGalleriesByGame', '_controller' => 'App\\Controller\\GameController::getGalleriesByGame'], ['id'], ['GET' => 0], null, false, false, null]],
        422 => [
            [['_route' => 'app_api_game_editGames', '_controller' => 'App\\Controller\\GameController::editGames'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'app_api_game_deleteGames', '_controller' => 'App\\Controller\\GameController::deleteGames'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        444 => [[['_route' => 'app_api_mode_getModesById', '_controller' => 'App\\Controller\\ModeController::getModesById'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_api_user_getUsersById', '_controller' => 'App\\Controller\\UserController::getUsersById'], ['id'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_api_user_getCharactersByUser', '_controller' => 'App\\Controller\\UserController::getCharactersByUser'], ['id'], ['GET' => 0], null, false, false, null]],
        507 => [[['_route' => 'app_api_user_getGamesByUser', '_controller' => 'App\\Controller\\UserController::getGamesByUser'], ['id'], ['GET' => 0], null, false, false, null]],
        536 => [[['_route' => 'app_api_user_getGamesWithoutCharacters', '_controller' => 'App\\Controller\\UserController::getGamesByUserWithoutCharacters'], ['id'], ['GET' => 0], null, false, false, null]],
        562 => [[['_route' => 'app_api_user_getCharacterByUserAndGame', '_controller' => 'App\\Controller\\UserController::getCharacterByUserAndGame'], ['userId', 'gameId'], ['GET' => 0], null, false, false, null]],
        579 => [[['_route' => 'app_api_user_getInvitesByUser', '_controller' => 'App\\Controller\\UserController::getInvitesByUser'], ['id'], ['GET' => 0], null, false, false, null]],
        588 => [
            [['_route' => 'app_api_user_editUsers', '_controller' => 'App\\Controller\\UserController::editUsers'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'app_api_user_deleteUsers', '_controller' => 'App\\Controller\\UserController::deleteUsers'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        629 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        649 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        695 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        709 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        729 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        742 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        752 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
