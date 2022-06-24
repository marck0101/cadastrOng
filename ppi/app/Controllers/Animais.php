<?php

namespace App\Controllers;

use App\Models\AnimaisModel;
use App\Models\HistoricoVacinacaoModel;
use App\Models\StatusModel;


class Animais extends BaseController
{
    public function index()
    {

        $animaisModel = new AnimaisModel();

        $data = array(
            'title' => 'Cadastro ONG',
            'animais' => $animaisModel
            ->join('status', 'animais.cd_status = status.cd_status')
            ->paginate(6),
            'pager' => $animaisModel->pager,
            'msg' => '',
        );

        echo view('templates/html_header', $data);
        echo view('pages/home');
        echo view('templates/html_footer');
    }

    public function edit($cd_animal = false)
    {
        $animaisModel = new AnimaisModel();
        $statusModel = new StatusModel();

        $data = array(
            'title' => 'Editar Animal',
            'animal' => $animaisModel->getAnimais($cd_animal),
            'status' => $statusModel->getStatus(),
            'title_page' => 'Editar Animal',
            'msg' => '',
        );

        echo view('templates/html_header', $data);
        echo view('pages/animal', $data);
        echo view('templates/html_footer');
    }

    public function add()
    {
        $statusModel = new StatusModel();

        $data = array(
            'title' => 'Adicionar Animal',
            'title_page' => 'Adicionar Animal',
            'status' => $statusModel->getStatus(),
            'msg' => '',
        );

        echo view('templates/html_header', $data);
        echo view('pages/animal', $data);
        echo view('templates/html_footer');
    }

    public function save()
    {

        $animaisModel = new AnimaisModel();

        helper('form');

        if ($this->validate([
            'ds_nome_animal' => ['label' => 'Nome do Animal', 'rules' => 'required|min_length[3]|max_length[100]'],
            'ds_raca' => ['label' => 'Raça', 'rules' => 'required|min_length[2]|max_length[50]'],
            'ds_cor' => ['label' => 'Cor do Animal', 'rules' => 'required|min_length[2]|max_length[50]'],
            'ds_sexo' => ['label' => 'Gênero', 'rules' => 'required'],
        ])) {

            // TODO: SE TIVER PROPRIETÁRIO VERIFICAR SE ALGUM CAMPO FALTA

            // ARMAZENA AS VARIÁVEIS ENVIADAS NO FORMULÁRIO
            $id =                    $this->request->getVar('id');
            $ds_nome_animal  =       $this->request->getVar('ds_nome_animal');
            $ds_raca =               $this->request->getVar('ds_raca');
            $ds_cor =                $this->request->getVar('ds_cor');
            $ds_sexo =               $this->request->getVar('ds_sexo');
            $ds_nome_proprietario =  $this->request->getVar('ds_nome_proprietario');
            $nr_cpf_proprietario  =  $this->request->getVar('nr_cpf_proprietario');
            $ds_endereco =           $this->request->getVar('ds_endereco');
            $nr_telefone =           $this->request->getVar('nr_telefone');
            $ds_observacoes =        $this->request->getVar('ds_observacoes');
            $cd_status =             $this->request->getVar('cd_status');

            // $x_ativo =               $this->request->getVar('x_ativo');
            // $x_castrado =            $this->request->getVar('x_castrado');
            // $cd_status =             $this->request->getVar('cd_status');
            // $dt_adocao =             $this->request->getVar('dt_adocao');
            // $dt_encontrado =         $this->request->getVar('dt_encontrado');
            // $dt_morto =              $this->request->getVar('dt_morto');
            // $dt_castrado =           $this->request->getVar('dt_castrado');

            // SALVA NO BANCO DE DADOS
            // SEJA INSERIR OU EDITAR
            $animaisModel->save([
                'id' => $id,
                'ds_nome_animal' => $ds_nome_animal,
                'ds_raca' => $ds_raca,
                'ds_cor' => $ds_cor,
                'ds_sexo' => $ds_sexo,
                'ds_nome_proprietario' => $ds_nome_proprietario,
                'nr_cpf_proprietario'  => $nr_cpf_proprietario,
                'ds_endereco' => $ds_endereco,
                'nr_telefone' => $nr_telefone,
                'ds_observacoes'  => $ds_observacoes,
                'cd_status' => $cd_status
                // 'x_ativo' => $x_ativo,
                // 'x_castrado' => $x_castrado,
                // 'cd_status' => $cd_status,
                // 'dt_adocao' => $dt_adocao,
                // 'dt_encontrado' => $dt_encontrado,
                // 'dt_morto' => $dt_morto,
                // 'dt_castrado' => $dt_castrado,
            ]);

            /**
             * Renderiza página novamente
             */
            $data = array(
                'title' => 'Cadastro ONG',
                'animais' => $animaisModel
                    ->join('status', 'animais.cd_status = status.cd_status')
                    ->paginate(6),
                'pager' => $animaisModel->pager,
                'msg' => 'Animal cadastrado com sucesso!',
            );

            echo view('templates/html_header', $data);
            echo view('pages/home');
            echo view('templates/html_footer');
            
        } else {
            /**
             * Se não validar, redireciona para a 
             * página de categorias com mensagem de erro
             */
            $data = array(
                'title' => 'Cadastro ONG',
                'animais' => $animaisModel
                    ->join('status', 'animais.cd_status = status.cd_status')
                    ->paginate(6),
                'pager' => $animaisModel->pager,
                'msg' => 'Erro ao cadastrar animal!',
            );

            echo view('templates/html_header', $data);
            echo view('pages/home');
            echo view('templates/html_footer');
        }
    }

    public function delete($id = false)
    {
        if($id != null){

            $animaisModel = new AnimaisModel();

            $animaisModel->delete($id);

            return redirect()->to(base_url('/'));

        }
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
