<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Perpustakaan_model extends CI_Model {
    private $_client;

    public function __construct()  {
        $this->_client = new Client([
        'base_uri' =>'http://localhost/restFull/index.php/',
        'auth' => ['',''],
        'headers' => ['API-TOKEN' => 'QWERTY']
        ]);
    }

  public function getAllBuku($page){
    $response = $this->_client->request('GET','Buku?page='.$page);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
  }

  public function getAllPage(){
    $response = $this->_client->request('GET','Buku');
    $result = json_decode($response->getBody()->getContents(), true);
    return $result['total_page'];
  }

  public function getBukuById($id){
    $response = $this->_client->request('GET','Buku',
    [   
        'query' => [
            'id' => $id
        ],
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'][0];
  }

  public function hapusDataBuku($id){
    $response = $this->_client->request('DELETE', 'buku', [
        'form_params' =>[
            'id' => $id
        ]
    ]);
    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }

  public function tambahDataBuku(){
    $data = [
        "id" => $this->input->post('id', true), 
        "Judul" => $this->input->post('judul', true),
        "Penulis" => $this->input->post('penulis', true),
        "Edisi" => $this->input->post('edisi', true),
        "Penerbit" => $this->input->post('penerbit', true),
        "Tahun" => $this->input->post('tahun', true),  
    ];

    $response = $this->_client->request('POST','buku',[
        'form_params' => $data
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
    }

  public function ubahDataBuku(){
        $data = [
            "id" => $this->input->post('id', true), 
            "Judul" => $this->input->post('judul', true),
            "Penulis" => $this->input->post('penulis', true),
            "Edisi" => $this->input->post('edisi', true),
            "Penerbit" => $this->input->post('penerbit', true),
            "Tahun" => $this->input->post('tahun', true),  
        ];

        $response = $this->_client->request('PUT','buku',[
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
  }

}