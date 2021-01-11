<?php

use GuzzleHttp\Client;


defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/foodie/api/'
        ]);
    }

    public function login($email, $password)
    {
        $response = $this->_client->request('GET', 'User', [
            'query' => [
                'email' => $email,
                'password' => $password,
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function registrasiDataUser()
    {
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password1'),
            "api_key" => "qazwsx098"
        ];

        $response = $this->_client->request('POST', 'User', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getAllUser()
    {
        $response = $this->_client->request('GET', 'User', [
            'query' => [
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getUserByID($id)
    {
        $response = $this->_client->request('GET', 'User', [
            'query' => [
                'id' => $id,
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function verifikasiuserByID($id)
    {
        $response = $this->_client->request('PUT', 'User', [
            'form_params' => ['id' => $id, 'api_key' => 'qazwsx098']
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function ubahDataUser($id)
    {
        $foto = $_FILES['foto']['name'];

        if (!$foto) {
            $data = [
                "nama_user" => $this->input->post('nama_user', true),
                "alamat" => $this->input->post('alamat', true),
                "telepon" => $this->input->post('telepon', true),
                "password" => $this->input->post('password', true),
                "foto" => $this->input->post('old_foto', true),
                "id" => $id,
                "api_key" => "qazwsx098"
            ];
        } else {
            $config['upload_path'] = 'E:\Application\xampp\htdocs\foodie\assets\foto-profil';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $data = [
                "nama_user" => $this->input->post('nama_user', true),
                "alamat" => $this->input->post('alamat', true),
                "telepon" => $this->input->post('telepon', true),
                "password" => $this->input->post('password', true),
                "foto" => $foto,
                "id" => $id,
                "api_key" => "qazwsx098"
            ];

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            }
        }

        $response = $this->_client->request('PUT', 'User', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}

/* End of file User_mdodel.php */
