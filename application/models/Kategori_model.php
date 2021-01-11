<?php

use GuzzleHttp\Client;


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/foodie/api/'
        ]);
    }

    public function getAllKategori()
    {
        $response = $this->_client->request('GET', 'Kategori', [
            'query' => [
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getKategoriByID($id)
    {
        $response = $this->_client->request('GET', 'Kategori', [
            'id' => $id,
            'api_key' => 'qazwsx098'
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }
}

/* End of file Kategori_mdodel.php */
