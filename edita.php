<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
        
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
        
        $query = "update tb_produtos set nm_produto = '$nome',vl_produto = '$valor', ds_produto = '$descricao', processador = '$processador', sistema = '$sistema', tela = '$tela', armazenamento = '$armazenamento', memoria = '$memoria', frontal = '$frontal', traseira = '$traseira' where cd_barra = '$codigo'";
        
        mysqli_query($conexao, $query);
        echo "produto alterado com sucesso";
    } catch (Exception $e){
        echo "Erro ao alterar: ".$e;
    }