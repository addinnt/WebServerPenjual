<?php

use GuzzleHttp\Client;


defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/foodie/api/'
        ]);
    }

    public function getAllPemesanan()
    {
        $response = $this->_client->request('GET', 'Pemesanan', [
            'query' => [
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getPemesananByID($id)
    {
        $response = $this->_client->request('GET', 'Pemesanan', [
            'query' => [
                'id' => $id,
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function getDetailPemesananByID($id)
    {
        $response = $this->_client->request('GET', 'Detail_pesanan', [
            'query' => [
                'id' => $id,
                'api_key' => 'qazwsx098'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function konfirmasiPemesananByID($id)
    {
        $response = $this->_client->request('PUT', 'Pemesanan', [
            'form_params' => ['id_pemesanan' => $id]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function tambahDataPemesanan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "id_user" => $this->session->userdata('id_user'),
            "tanggal" => date('Y-m-d H:i:s'),
            "total" => $this->cart->total(),
            "api_key" => "qazwsx098"
        ];

        $response = $this->_client->request('POST', 'Pemesanan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['id'];
    }

    public function tambahDetail_pesanan($item, $result_id)
    {
        $data = [
            'id_pemesanan' => $result_id,
            'id_menu' => $item['id'],
            'jumlah' => $item['qty'],
            'api_key' => 'qazwsx098'
        ];

        // var_dump($data);
        $response = $this->_client->request('POST', 'Detail_pesanan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function uploadBuktiPembayaran($foto, $id)
    {
        $data = [
            "bukti_bayar" => $foto,
            "id_pemesanan" => $id,
            "api_key" => "qazwsx098"
        ];

        $config['upload_path'] = 'E:\Application\xampp\htdocs\foodie\assets\bukti-pembayaran';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('bukti_bayar')) {
            echo $this->upload->display_errors();
        }

        $response = $this->_client->request('PUT', 'Pemesanan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}

/* End of file Pemesanan_mdodel.php */
