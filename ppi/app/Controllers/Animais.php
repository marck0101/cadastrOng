<?php

namespace App\Controllers;

use App\Models\AnimaisModel;
use App\Models\HistoricoVacinacaoModel;
use App\Models\StatusModel;


class Animais extends BaseController{


    public function index(){

        $animaisModel = new AnimaisModel();

        $data = array(
            'title' => 'Cadastro ONG',
            'animais' => $animaisModel->paginate(6),
            'pager' => $animaisModel->pager,
        );

        echo view('templates/html_header', $data);
        echo view('pages/home');
        echo view('templates/html_footer');

    }

    public function edit($id = false){
        $animaisModel = new AnimaisModel();

        $data = array(
            'title' => 'Editar Animal',
            'animal' => $animaisModel->getAnimais($id),
            'title_page' => 'Editar Animal'
        );

        echo view('templates/html_header', $data);
        echo view('pages/animal', $data);
        echo view('templates/html_footer');
    }

    public function add($id = false){
        $animaisModel = new AnimaisModel();

        $data = array(
            'title' => 'Editar Animal',
            'animal' => $animaisModel->getAnimais($id),
            'title_page' => 'Editar Animal',
            'msg' => '',
        );

        echo view('templates/html_header', $data);
        echo view('pages/animal', $data);
        echo view('templates/html_footer');
    }


    public function debug()
    {
        /**
         * Animais Model
         */
        

        echo "
            <h1>Animais</h1>
        ";

        $animalModel = new AnimaisModel();

        $result = $animalModel->getAnimais();

        print_r($result);

        /**
         * Histórico Vacinação Model
         */
        echo "
            <h1>Historico Vacinação</h1>
        ";

        $historicoVacinacaoModel = new HistoricoVacinacaoModel();

        $result = $historicoVacinacaoModel->getHistoricoVacinacao();
        print_r($result);

         /**
         * Status Model
         */
        echo "
            <h1>Status:</h1>
        ";

        $statusModel = new StatusModel();

        $result = $statusModel->getStatus();

        print_r($result);

    }
}