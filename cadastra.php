<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
                                //servidor      usuario    senha  banco de dados
        $codigo= $_POST['codigo'];                        
        $nome= $_POST['nome'];
        $valor= $_POST['valor'];
        $descricao= $_POST['descricao'];
        $processador= $_POST['processador'];
        $sistema= $_POST['sistema'];
        $tela= $_POST['tela'];
        $armazenamento= $_POST['armazenamento'];
        $memoria= $_POST['memoria'];
        $frontal= $_POST['frontal'];
        $traseira= $_POST['traseira'];
        
        $query="INSERT INTO tb_produtos VALUES ('$codigo' ,'$nome', '$valor', '$descricao', '$processador', '$sistema', '$tela', '$armazenamento', '$memoria', '$frontal', '$traseira')";
        
        mysqli_query($conexao,$query);
        
        echo "Cadastro realizado com sucesso!";
        
    }catch (Exceotion $e){
        echo "Erro ao conectar: ".$e;
    }