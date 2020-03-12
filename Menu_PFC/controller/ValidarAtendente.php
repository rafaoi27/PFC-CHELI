<?php 
session_start();

require_once "../Model/conexao.php";

$con =   Conexao();

$credencialAdmin =  filter_input(INPUT_POST, 'credencialAdmin', FILTER_SANITIZE_SPECIAL_CHARS);
$credencialFuncionario =  filter_input(INPUT_POST, 'credencialFuncionario', FILTER_SANITIZE_SPECIAL_CHARS);

if ($credencialAdmin){
$query = $con->query("SELECT * FROM atendente WHERE codigoAtendente = '{$codigoAtendente}'");

$query->execute();
  
        if($query->rowCount() > 0){
        $query = $con->prepare("SELECT * FROM atendente WHERE codigoAtendente = :codigoAtendente");
        $query->bindValue(":codigoAtendente", $codigoAtendente);
        $query->execute();

        header('Location: ../View/menu.php');
        }
        
        if($query->rowCount() != 0){
        //Manipulação de informações que foram retirados do banco
            foreach($query->fetchAll() as $valor){
          
             $_SESSION['nomeAtendente'] =               $valor['nomeAtendente'];
             $_SESSION['codigoAtendente'] =             $valor['codigoAtendente'];

            }header("location: ../View/menu.php");
         }else{            
            header("location: ../View/index.php?sessao=false");
     }
} else ($credencialFuncionario){
   $query = $con->query("SELECT * FROM atendente WHERE codigoAtendente = '{$codigoAtendente}'");

$query->execute();
  
        if($query->rowCount() > 0){
        $query = $con->prepare("SELECT * FROM atendente WHERE codigoAtendente = :codigoAtendente");
        $query->bindValue(":codigoAtendente", $codigoAtendente);
        $query->execute();

        header('Location: ../View/menu.php');
        }
        
        if($query->rowCount() != 0){
        //Manipulação de informações que foram retirados do banco
            foreach($query->fetchAll() as $valor){
          
             $_SESSION['nomeAtendente'] =               $valor['nomeAtendente'];
             $_SESSION['codigoAtendente'] =             $valor['codigoAtendente'];

            }header("location: ../View/menu.php");
         }else{            
            header("location: ../View/index.php?sessao=false");
     }
}
?>