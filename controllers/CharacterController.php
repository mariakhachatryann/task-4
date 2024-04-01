<?php
class CharacterController
{
    public function index(): void
    {
       $apiModel = new ApiModel();
       $character = $apiModel->index(1);
       require_once '../views/index.php';
    }

    public function characters(): void
    {
        $apiModel = new ApiModel();
        $characters = $apiModel->index(20);
        require_once '../views/characters.php';
    }

    public function comics(): void
    {
        $apiModel = new ApiModel();
        $comics = $apiModel->comics(20);
        require_once '../views/comics.php';
    }

    public function characterById(int $characterId): void
    {
        $apiModel = new ApiModel();
        $character = $apiModel->getCharacterById($characterId);
        require_once '../views/index.php';
    }

    public function comicById(int $comicId): void
    {
        $apiModel = new ApiModel();
        $comic = $apiModel->getComicById($comicId);
        require_once '../views/comic.php';
    }
}