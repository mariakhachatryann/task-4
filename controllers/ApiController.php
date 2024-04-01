<?php
class ApiController
{
    public function index()
    {
       $apiModel = new ApiModel();
       $character = $apiModel->index(1);
       require_once '../views/index.php';
    }

    public function characters()
    {
        $apiModel = new ApiModel();
        $character = $apiModel->index(20);
        require_once '../views/characters.php';
    }

    public function comics()
    {
        $apiModel = new ApiModel();
        $comics = $apiModel->comics(20);
        require_once '../views/comics.php';
    }

    public function characterById($characterId)
    {
        $apiModel = new ApiModel();
        $character = $apiModel->getCharacterById($characterId);
        require_once '../views/index.php';
    }

    public function comicById($comicId)
    {
        $apiModel = new ApiModel();
        $comic = $apiModel->getComicById($comicId);
        require_once '../views/comic.php';
    }
}