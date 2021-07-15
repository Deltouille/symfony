<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/agent\\-(?'
                    .'|suppression/([^/]++)(*:38)'
                    .'|details/([^/]++)(*:61)'
                    .'|modification/([^/]++)(*:89)'
                .')'
                .'|/c(?'
                    .'|ible\\-(?'
                        .'|suppression/([^/]++)(*:131)'
                        .'|details/([^/]++)(*:155)'
                        .'|modification/([^/]++)(*:184)'
                    .')'
                    .'|ontact\\-(?'
                        .'|details/([^/]++)(*:220)'
                        .'|modification/([^/]++)(*:249)'
                        .'|suppression/([^/]++)(*:277)'
                    .')'
                .')'
                .'|/mission\\-(?'
                    .'|details/([^/]++)(*:316)'
                    .'|modification/([^/]++)(*:345)'
                    .'|suppression/([^/]++)(*:373)'
                .')'
                .'|/nationnalite\\-(?'
                    .'|suppression/([^/]++)(*:420)'
                    .'|detail/([^/]++)(*:443)'
                    .'|modification/([^/]++)(*:472)'
                .')'
                .'|/p(?'
                    .'|ays\\-(?'
                        .'|suppression/([^/]++)(*:514)'
                        .'|modification/([^/]++)(*:543)'
                    .')'
                    .'|lanque\\-(?'
                        .'|details/([^/]++)(*:579)'
                        .'|suppression/([^/]++)(*:607)'
                        .'|modification/([^/]++)(*:636)'
                    .')'
                .')'
                .'|/specialite\\-(?'
                    .'|suppression/([^/]++)(*:682)'
                    .'|modification/([^/]++)(*:711)'
                    .'|details/([^/]++)(*:735)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'agent-suppression', '_controller' => 'App\\Controller\\AgentController::suppression'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'agent-details', '_controller' => 'App\\Controller\\AgentController::detail'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'agent-modification', '_controller' => 'App\\Controller\\AgentController::modifier'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'cible-suppression', '_controller' => 'App\\Controller\\CibleController::suppression'], ['id'], null, null, false, true, null]],
        155 => [[['_route' => 'cible-details', '_controller' => 'App\\Controller\\CibleController::detail'], ['id'], null, null, false, true, null]],
        184 => [[['_route' => 'cible-modification', '_controller' => 'App\\Controller\\CibleController::modifier'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'contact-details', '_controller' => 'App\\Controller\\ContactController::detail'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'contact-modification', '_controller' => 'App\\Controller\\ContactController::modifier'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'contact-suppression', '_controller' => 'App\\Controller\\ContactController::supprimer'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'mission-details', '_controller' => 'App\\Controller\\MissionController::detail'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'mission-modification', '_controller' => 'App\\Controller\\MissionController::modification'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'mission-suppression', '_controller' => 'App\\Controller\\MissionController::suppression'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'nationnalite-suppression', '_controller' => 'App\\Controller\\NationnaliteController::suppression'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'nationnalite-detail', '_controller' => 'App\\Controller\\NationnaliteController::details'], ['id'], null, null, false, true, null]],
        472 => [[['_route' => 'nationnalite-modification', '_controller' => 'App\\Controller\\NationnaliteController::modification'], ['id'], null, null, false, true, null]],
        514 => [[['_route' => 'pays-suppression', '_controller' => 'App\\Controller\\PaysController::supprimer'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'pays-modification', '_controller' => 'App\\Controller\\PaysController::modification'], ['id'], null, null, false, true, null]],
        579 => [[['_route' => 'planque-details', '_controller' => 'App\\Controller\\PlanqueController::detail'], ['id'], null, null, false, true, null]],
        607 => [[['_route' => 'planque-suppression', '_controller' => 'App\\Controller\\PlanqueController::suppression'], ['id'], null, null, false, true, null]],
        636 => [[['_route' => 'planque-modification', '_controller' => 'App\\Controller\\PlanqueController::modifier'], ['id'], null, null, false, true, null]],
        682 => [[['_route' => 'specialite-suppression', '_controller' => 'App\\Controller\\SpecialiteController::supprimer'], ['id'], null, null, false, true, null]],
        711 => [[['_route' => 'specialite-modification', '_controller' => 'App\\Controller\\SpecialiteController::modification'], ['id'], null, null, false, true, null]],
        735 => [
            [['_route' => 'specialite-details', '_controller' => 'App\\Controller\\SpecialiteController::details'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
