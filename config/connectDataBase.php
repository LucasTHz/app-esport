<?php
Class connectDataBase {
    public function getConnection(): mysqli
    {
        try {
            $conexao = new mysqli('127.0.0.1', 'root', '', 'app_esport');

            mysqli_set_charset($conexao, 'utf8');
        } catch (Exception $e) {
            die("Error" . $e->getMessage());
        }
        return $conexao;
    }
}

