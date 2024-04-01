<?php
class ApiModel
{
    private $secretKey = '0afa3195620fa57220e024692f7d62a4aae9aed1';
    private $publicKey = 'acfafd17b7766f992b5bad7c00c68524';
    private function makeRequest($url)
    {
        $timestamp = time();
        $offset = ceil(random_int(0, 2000));
        $hash = md5("{$timestamp}{$this->secretKey}{$this->publicKey}");
        $url .= "&ts={$timestamp}&hash={$hash}&offset={$offset}";

        $resource = curl_init($url);
        curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($resource);
        curl_close($resource);
        return json_decode($result, true);
    }

    public function index($limit)
    {
        $url = "https://gateway.marvel.com/v1/public/characters?apikey={$this->publicKey}&limit={$limit}";
        $data = $this->makeRequest($url);
        return $this->processResponse($data);
    }

    public function comics($limit)
    {
        $url = "https://gateway.marvel.com/v1/public/comics?apikey={$this->publicKey}&limit={$limit}";
        $data = $this->makeRequest($url);
        return $this->processResponse($data);
    }

    public function getCharacterById($characterId)
    {
        $url = "https://gateway.marvel.com/v1/public/characters/{$characterId}?apikey={$this->publicKey}";
        $data = $this->makeRequest($url);

        if ($data && $data['code'] == 200 && isset($data['data']['results'][0])) {
            return $data['data']['results'];
        } else {
            throw new Exception('Character not found.');
        }
    }

    public function getComicById($comicId)
    {
        $url = "https://gateway.marvel.com/v1/public/comics/{$comicId}?apikey={$this->publicKey}";
        $data = $this->makeRequest($url);

        if ($data && $data['code'] == 200 && isset($data['data']['results'][0])) {
            return $data['data']['results'];
        } else {
            throw new Exception('Character not found.');
        }
    }

    private function processResponse($data)
    {
        if ($data && $data['code'] == 200 && isset($data['data']['results'][0])) {
            return $data['data']['results'];
        } else {
            $errorMessage = "Error: Unable to fetch data from the Marvel API.\n";
            if ($data && isset($data['status'])) {
                $errorMessage .= "Status: " . $data['status'] . "\n";
            }
            if ($data && isset($data['message'])) {
                $errorMessage .= "Message: " . $data['message'] . "\n";
            }
            throw new Exception($errorMessage);
        }
    }
}
