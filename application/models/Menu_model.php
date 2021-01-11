<?php

use GuzzleHttp\Client;


defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/foodie/api/'
        ]);
    }

    public function getAllMenu()
    {
        $response = $this->_client->request('GET', 'Menu', [
            'query' => [
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getMenuByID($id)
    {
        $response = $this->_client->request('GET', 'Menu', [
            'query' => [
                'id' => $id,
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function searchMenu($keyword)
    {
        $response = $this->_client->request('GET', 'Menu', [
            'query' => [
                'keyword' => $keyword,
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
}

/* End of file Menu_mdodel.php */
