<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'agent' => [[], ['_controller' => 'App\\Controller\\AgentController::index'], [], [['text', '/agent']], [], []],
    'agent-ajout' => [[], ['_controller' => 'App\\Controller\\AgentController::ajout'], [], [['text', '/agent-ajout']], [], []],
    'agent-suppression' => [['id'], ['_controller' => 'App\\Controller\\AgentController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/agent-suppression']], [], []],
    'agent-details' => [['id'], ['_controller' => 'App\\Controller\\AgentController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/agent-details']], [], []],
    'agent-modification' => [['id'], ['_controller' => 'App\\Controller\\AgentController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/agent-modification']], [], []],
    'cible' => [[], ['_controller' => 'App\\Controller\\CibleController::index'], [], [['text', '/cible']], [], []],
    'cible-ajout' => [[], ['_controller' => 'App\\Controller\\CibleController::ajout'], [], [['text', '/cible-ajout']], [], []],
    'cible-suppression' => [['id'], ['_controller' => 'App\\Controller\\CibleController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cible-suppression']], [], []],
    'cible-details' => [['id'], ['_controller' => 'App\\Controller\\CibleController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cible-details']], [], []],
    'cible-modification' => [['id'], ['_controller' => 'App\\Controller\\CibleController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cible-modification']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'contact-details' => [['id'], ['_controller' => 'App\\Controller\\ContactController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contact-details']], [], []],
    'contact-modification' => [['id'], ['_controller' => 'App\\Controller\\ContactController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contact-modification']], [], []],
    'contact-suppression' => [['id'], ['_controller' => 'App\\Controller\\ContactController::supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contact-suppression']], [], []],
    'contact-ajout' => [[], ['_controller' => 'App\\Controller\\ContactController::ajout'], [], [['text', '/contact-ajout']], [], []],
    'mission' => [[], ['_controller' => 'App\\Controller\\MissionController::index'], [], [['text', '/mission']], [], []],
    'mission-details' => [['id'], ['_controller' => 'App\\Controller\\MissionController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/mission-details']], [], []],
    'mission-modification' => [['id'], ['_controller' => 'App\\Controller\\MissionController::modification'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/mission-modification']], [], []],
    'mission-suppression' => [['id'], ['_controller' => 'App\\Controller\\MissionController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/mission-suppression']], [], []],
    'mission-ajout' => [[], ['_controller' => 'App\\Controller\\MissionController::ajout'], [], [['text', '/mission-ajout']], [], []],
    'nationnalite' => [[], ['_controller' => 'App\\Controller\\NationnaliteController::index'], [], [['text', '/nationnalite']], [], []],
    'nationnalite-ajout' => [[], ['_controller' => 'App\\Controller\\NationnaliteController::ajout'], [], [['text', '/nationnalite-ajout']], [], []],
    'nationnalite-suppression' => [['id'], ['_controller' => 'App\\Controller\\NationnaliteController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/nationnalite-suppression']], [], []],
    'nationnalite-detail' => [['id'], ['_controller' => 'App\\Controller\\NationnaliteController::details'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/nationnalite-detail']], [], []],
    'nationnalite-modification' => [['id'], ['_controller' => 'App\\Controller\\NationnaliteController::modification'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/nationnalite-modification']], [], []],
    'pays' => [[], ['_controller' => 'App\\Controller\\PaysController::index'], [], [['text', '/pays']], [], []],
    'pays-ajout' => [[], ['_controller' => 'App\\Controller\\PaysController::ajout'], [], [['text', '/pays-ajout']], [], []],
    'pays-suppression' => [['id'], ['_controller' => 'App\\Controller\\PaysController::supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/pays-suppression']], [], []],
    'pays-modification' => [['id'], ['_controller' => 'App\\Controller\\PaysController::modification'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/pays-modification']], [], []],
    'planque' => [[], ['_controller' => 'App\\Controller\\PlanqueController::index'], [], [['text', '/planque']], [], []],
    'planque-details' => [['id'], ['_controller' => 'App\\Controller\\PlanqueController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/planque-details']], [], []],
    'planque-suppression' => [['id'], ['_controller' => 'App\\Controller\\PlanqueController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/planque-suppression']], [], []],
    'planque-ajout' => [[], ['_controller' => 'App\\Controller\\PlanqueController::ajout'], [], [['text', '/planque-ajout']], [], []],
    'planque-modification' => [['id'], ['_controller' => 'App\\Controller\\PlanqueController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/planque-modification']], [], []],
    'redirect' => [[], ['_controller' => 'App\\Controller\\RedirectController::index'], [], [['text', '/']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'specialite' => [[], ['_controller' => 'App\\Controller\\SpecialiteController::index'], [], [['text', '/specialite']], [], []],
    'specialite-ajout' => [[], ['_controller' => 'App\\Controller\\SpecialiteController::ajout'], [], [['text', '/specialite-ajout']], [], []],
    'specialite-suppression' => [['id'], ['_controller' => 'App\\Controller\\SpecialiteController::supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/specialite-suppression']], [], []],
    'specialite-modification' => [['id'], ['_controller' => 'App\\Controller\\SpecialiteController::modification'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/specialite-modification']], [], []],
    'specialite-details' => [['id'], ['_controller' => 'App\\Controller\\SpecialiteController::details'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/specialite-details']], [], []],
];
