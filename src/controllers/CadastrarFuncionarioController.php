<?php
namespace src\controllers;

class CadastrarFuncionarioController extends Controller
{
    public function index(){
        $this->view('CadastrarFuncionario');
    }
    public function funcionario(){
        $this->view('funcionario');
    }

    
}