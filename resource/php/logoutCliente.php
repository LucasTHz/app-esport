<?php
session_start();
// faz a deslogamento do usuario e redireciona para a home
unset($_SESSION['cliente']);
unset($_SESSION['auth']);
echo "<script type='text/javascript'>javascript:window.location='../../index.php';</script>";