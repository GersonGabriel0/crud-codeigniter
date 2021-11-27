<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\vendasModel;

class vendas extends Controller{

    public function index(){
        $model = new vendasModel();
        $data = [
            'vendas' => $model->getVendas()
        ];
        
        echo view('templates/header');
        echo view('vendas/overview', $data);
        echo view('templates/footer');
    }

    public function view($id = null){
        $model = new VendasModel();
        $data['vendas'] = $model->getvendas($id);

        if(empty($data['vendas'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Não foi possivel Localizar nenhum registro no Banco de Dados: ".$id);
        }

        $data['Cliente'] = $data['vendas']['Cliente'];

        echo view('templates/header');
        echo view('vendas/view', $data);
        echo view('templates/footer');
    }

    public function create(){
        helper('form');
        echo view('templates/header');
        echo view('vendas/form');
        echo view('templates/footer');
    }

    public function store(){
        helper('form');

        $model = new vendasModel();

        $rules = [
            'Cliente' => 'required|min_length[2]|max_length[100]',
            'valor_venda' => 'required',
            'quantidade_estoque' => 'required',
            'quantidade' => 'required'
        ];

        if($this->validate($rules)){
            $model->save([
                'id' => $this->request->getVar('id'),
                'Cliente' => $this->request->getVar('Cliente'),
                'valor_venda' => $this->request->getVar('valor_venda'),
                'quantidade_estoque' => $this->request->getVar('quantidade_estoque'),
                'quantidade' => $this->request->getVar('quantidade')
            ]);

            echo view('templates/header');
            echo view('vendas/success');
            echo view('templates/footer');
        }else{
            echo view('templates/header');
            echo view('vendas/form');
            echo view('templates/footer');
        }
    }

    public function edit($id = null){
        $model = new vendasModel();
        $data['vendas'] = $model->getvendas($id);

        if(empty($data['vendas'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Registro não encontrado: '.$id);
        }

        $data = [
            'id' => $data['vendas']['id'],
            'Cliente' => $data['vendas']['Cliente'],
            'valor_venda' => $data['vendas']['valor_venda'],
            'quantidade_estoque' => $data['vendas']['quantidade_estoque'],
            'quantidade' => $data['vendas']['quantidade']
        ];

        echo view('templates/header');
        echo view('vendas/form', $data);
        echo view('templates/footer');
    }

    public function delete($id = null){
        $model = new vendasModel();
        $model->delete($id);
        echo view('templates/header');
        echo view('vendas/delete_success');
        echo view('templates/footer');
    }

}