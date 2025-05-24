<?php
if (!isset($_SESSION)) {
    session_start();
}

// verrifica cpf


class AdministradorController
{

    public function login($cpf, $senha)
    {
        require_once '../Model/Administrador.php';
        $administrador = new Administrador();
        $administrador->carregarAdministrador($cpf);

        if ($administrador->getSenha() == $senha) {
            $_SESSION['Administrador'] = serialize($administrador);
            return true;
        } else {
            return false;
        }
    }

    // gera a lista
    public function gerarLista()
    {
        require_once '../Model/Administrador.php';
        $adm = new Administrador();
        return $adm->listaCadastrados();
    }

    // inserir
    public function inserir($nome, $cpf, $senha)
    {
        require_once '../Model/Administrador.php';
        $adm = new Administrador();
        $adm->setNome($nome);
        $adm->setCPF($cpf);
        $adm->setSenha($senha);
        return $adm->inserirBD();
    }
}
