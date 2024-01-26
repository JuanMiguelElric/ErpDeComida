<?php
namespace src\Models;

class Banco{
    public static function bandoDeDados(){  
        $DBServidor = '';
        $DBNome = '';
        $DBUsuario = '';
        $DBSenha = '';

        $conexao = mysqli_connect($DBServidor, $DBNome, $DBUsuario, $DBSenha);
        return $conexao;

    }
}