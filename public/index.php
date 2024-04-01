<?php
require_once '../views/layouts/_banner.php';
require_once '../views/layouts/_nav.php';

require_once '../controllers/CharacterController.php';
require_once '../models/ApiModel.php';

$action = $_GET['action'] ?? null;
$characterId = $_GET['character_id'] ?? null;
$comicId = $_GET['comic_id'] ?? null;

switch ($action) {
    case 'characters':
        $controller = new CharacterController();
        $controller->characters();
    break;
    case 'character':
        $controller = new CharacterController();
        $controller->characterById($characterId);
        break;
    case 'comics':
        $controller = new CharacterController();
        $controller->comics();
    break;
    case 'comic':
        $controller = new CharacterController();
        $controller->comicById($comicId);
    break;
    default:
        $controller = new CharacterController();
        $controller->index();
}