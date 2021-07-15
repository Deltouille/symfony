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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'agent', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, false, false, null]],
        '/agent-ajout' => [[['_route' => 'agent-ajout', '_controller' => 'App\\Controller\\AgentController::ajout'], null, null, null, false, false, null]],
        '/cible' => [[['_route' => 'cible', '_controller' => 'App\\Controller\\CibleController::index'], null, null, null, false, false, null]],
        '/cible-ajout' => [[['_route' => 'cible-ajout', '_controller' => 'App\\Controller\\CibleController::ajout'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact-ajout' => [[['_route' => 'contact-ajout', '_controller' => 'App\\Controller\\ContactController::ajout'], null, null, null, false, false, null]],
        '/mission' => [[['_route' => 'mission', '_controller' => 'App\\Controller\\MissionController::index'], null, null, null, false, false, null]],
        '/mission-ajout' => [[['_route' => 'mission-ajout', '_controller' => 'App\\Controller\\MissionController::ajout'], null, null, null, false, false, null]],
        '/nationnalite' => [[['_route' => 'nationnalite', '_controller' => 'App\\Controller\\NationnaliteController::index'], null, null, null, false, false, null]],
        '/nationnalite-ajout' => [[['_route' => 'nationnalite-ajout', '_controller' => 'App\\Controller\\NationnaliteController::ajout'], null, null, null, false, false, null]],
        '/pays' => [[['_route' => 'pays', '_controller' => 'App\\Controller\\PaysController::index'], null, null, null, false, false, null]],
        '/pays-ajout' => [[['_route' => 'pays-ajout', '_controller' => 'App\\Controller\\PaysController::ajout'], null, null, null, false, false, null]],
        '/planque' => [[['_route' => 'planque', '_controller' => 'App\\Controller\\PlanqueController::index'], null, null, null, false, false, null]],
        '/planque-ajout' => [[['_route' => 'planque-ajout', '_controller' => 'App\\Controller\\PlanqueController::ajout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'redirect', '_controller' => 'App\\Controller\\RedirectController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/specialite' => [[['_route' => 'specialite', '_controller' => 'App\\Controller\\SpecialiteController::index'], null, null, null, false, false, null]],
        '/specialite-ajout' => [[['_route' => 'specialite-ajout', '_controller' => 'App\\Controller\\SpecialiteController::ajout'], null, null, null, false, false, null]],
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
                .'|/agent\\-(?'
                    .'|suppression/([^/]++)(*:200)'
                    .'|details/([^/]++)(*:224)'
                    .'|modification/([^/]++)(*:253)'
                .')'
                .'|/c(?'
                    .'|ible\\-(?'
                        .'|suppression/([^/]++)(*:296)'
                        .'|details/([^/]++)(*:320)'
                        .'|modification/([^/]++)(*:349)'
                    .')'
                    .'|ontact\\-(?'
                        .'|details/([^/]++)(*:385)'
                        .'|modification/([^/]++)(*:414)'
                        .'|suppression/([^/]++)(*:442)'
                    .')'
                .')'
                .'|/mission\\-(?'
                    .'|details/([^/]++)(*:481)'
                    .'|modification/([^/]++)(*:510)'
                    .'|suppression/([^/]++)(*:538)'
                .')'
                .'|/nationnalite\\-(?'
                    .'|suppression/([^/]++)(*:585)'
                    .'|detail/([^/]++)(*:608)'
                    .'|modification/([^/]++)(*:637)'
                .')'
                .'|/p(?'
                    .'|ays\\-(?'
                        .'|suppression/([^/]++)(*:679)'
                        .'|modification/([^/]++)(*:708)'
                    .')'
                    .'|lanque\\-(?'
                        .'|details/([^/]++)(*:744)'
                        .'|suppression/([^/]++)(*:772)'
                        .'|modification/([^/]++)(*:801)'
                    .')'
                .')'
                .'|/specialite\\-(?'
                    .'|suppression/([^/]++)(*:847)'
                    .'|modification/([^/]++)(*:876)'
                    .'|details/([^/]++)(*:900)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'agent-suppression', '_controller' => 'App\\Controller\\AgentController::suppression'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'agent-details', '_controller' => 'App\\Controller\\AgentController::detail'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'agent-modification', '_controller' => 'App\\Controller\\AgentController::modifier'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'cible-suppression', '_controller' => 'App\\Controller\\CibleController::suppression'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'cible-details', '_controller' => 'App\\Controller\\CibleController::detail'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'cible-modification', '_controller' => 'App\\Controller\\CibleController::modifier'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => 'contact-details', '_controller' => 'App\\Controller\\ContactController::detail'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'contact-modification', '_controller' => 'App\\Controller\\ContactController::modifier'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'contact-suppression', '_controller' => 'App\\Controller\\ContactController::supprimer'], ['id'], null, null, false, true, null]],
        481 => [[['_route' => 'mission-details', '_controller' => 'App\\Controller\\MissionController::detail'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'mission-modification', '_controller' => 'App\\Controller\\MissionController::modification'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'mission-suppression', '_controller' => 'App\\Controller\\MissionController::suppression'], ['id'], null, null, false, true, null]],
        585 => [[['_route' => 'nationnalite-suppression', '_controller' => 'App\\Controller\\NationnaliteController::suppression'], ['id'], null, null, false, true, null]],
        608 => [[['_route' => 'nationnalite-detail', '_controller' => 'App\\Controller\\NationnaliteController::details'], ['id'], null, null, false, true, null]],
        637 => [[['_route' => 'nationnalite-modification', '_controller' => 'App\\Controller\\NationnaliteController::modification'], ['id'], null, null, false, true, null]],
        679 => [[['_route' => 'pays-suppression', '_controller' => 'App\\Controller\\PaysController::supprimer'], ['id'], null, null, false, true, null]],
        708 => [[['_route' => 'pays-modification', '_controller' => 'App\\Controller\\PaysController::modification'], ['id'], null, null, false, true, null]],
        744 => [[['_route' => 'planque-details', '_controller' => 'App\\Controller\\PlanqueController::detail'], ['id'], null, null, false, true, null]],
        772 => [[['_route' => 'planque-suppression', '_controller' => 'App\\Controller\\PlanqueController::suppression'], ['id'], null, null, false, true, null]],
        801 => [[['_route' => 'planque-modification', '_controller' => 'App\\Controller\\PlanqueController::modifier'], ['id'], null, null, false, true, null]],
        847 => [[['_route' => 'specialite-suppression', '_controller' => 'App\\Controller\\SpecialiteController::supprimer'], ['id'], null, null, false, true, null]],
        876 => [[['_route' => 'specialite-modification', '_controller' => 'App\\Controller\\SpecialiteController::modification'], ['id'], null, null, false, true, null]],
        900 => [
            [['_route' => 'specialite-details', '_controller' => 'App\\Controller\\SpecialiteController::details'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
