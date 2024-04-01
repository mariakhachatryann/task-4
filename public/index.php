<?php
require_once 'assets/layouts/banner.php';
require_once 'assets/layouts/nav.php';

require_once '../controllers/ApiController.php';
require_once '../models/ApiModel.php';

$action = $_GET['action'] ?? null;
$characterId = $_GET['character_id'] ?? null;
$comicId = $_GET['comic_id'] ?? null;

switch ($action) {
    case 'characters':
        $controller = new ApiController();
        $controller->characters();
    break;
    case 'character':
        $controller = new ApiController();
        $controller->characterById($characterId);
        break;
    case 'comics':
        $controller = new ApiController();
        $controller->comics();
    break;
    case 'comic':
        $controller = new ApiController();
        $controller->comicById($comicId);
    break;
    default:
        $controller = new ApiController();
        $controller->index();
}