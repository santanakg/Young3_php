<?php

include('../connections/connnection.php');

session_start();

if (isset($_SESSION['user']))
{
    header('location: painel.php');
}
else
{
    if(isset($_POST['user']) && isset($_POST['password']) )
    {
        $name_user = $_POST['user'];
        $pass_user = $_POST['password'];

        $sql_code = "SELECT * FROM users WHERE user = '$name_user' AND password = '$pass_user'";

        $sql_result = $mysqli->query($sql_code);

        $quantidade_linhas = $sql_result->num_rows;

        if ($quantidade_linhas >= 1)
        {
            $_SESSION['user'] = $name_user;
            header('Location: painel.php');
        }
        else
        {
            echo ('Location: index.php?erro');
        }
    }
}
?>