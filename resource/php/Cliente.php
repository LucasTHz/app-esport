<?php
include_once '../config/connectDataBase.php';
include_once '../../config/connectDataBase.php';
session_start();

class Cliente
{
    // metodo que retorna os dados de um cliente logado
    public function show($idCliente): array
    {
        $query = "SELECT * FROM cliente WHERE id = $idCliente";
        $db = new connectDataBase();
        $conexao = $db->getConnection();

        $result = $conexao->query($query);

        foreach($result as $row) {
            $dados['email'] = $row['email'];
            $dados['nome'] = $row['nome'];
            $dados['cpf'] = $row['cpf'];
            $dados['rua'] = $row['rua'];
            $dados['cidade'] = $row['cidade'];
            $dados['complemento'] = $row['complemento'];
            $dados['bairro'] = $row['bairro'];
            $dados['estado'] = $row['estado'];
            $dados['numero'] = $row['numero'];
            $dados['celular'] = $row['celular'];
        }
        $conexao->close();
        return $dados;
    }

    // metodo para atualização dos dados de um cliente logado
    public function update($idCliente)
    {
        $db = new connectDataBase();
        $conexao = $db->getConnection();

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];
        $numero = $_POST['numero'];
        $celular = $_POST['celular'];

        $query_nome = "UPDATE cliente SET nome = '$nome', email = '$email', rua = '$rua', cidade = '$cidade'
        , complemento = '$complemento', bairro = '$bairro', estado = '$estado', numero = '$numero', celular = '$celular'
        WHERE id = $idCliente";

        $conexao->query($query_nome);
        $conexao->close();
    }

    // metodo para deleção de um cliente logado
    public function deletar($idCliente)
    {
        try {
            $db = new connectDataBase();
            $conexao = $db->getConnection();
            $query = "DELETE FROM cliente WHERE id = $idCliente";

            $conexao->query($query);
            $conexao->close();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}