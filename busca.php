<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
                                //servidor      usuario    senha  banco de dados
        
        $id = $_GET['id'];
        
        $query="SELECT * FROM tb_produtos WHERE cd_barra = '$id'";
        
        $resultado = mysqli_query($conexao,$query);
        
        $row = mysqli_num_rows($resultado);
        
        $i = 0;
        
        if($row == 1){
            
            $registro = array(
                'produto' => array(
                    'situacao' => '1',
                    'teste' => "$id"
                )
            );
            
        }else{
            $registro = array(
                'produto' => array(
                    'situacao' => '2',
                    'teste' => "$id"
                )
            );
        }
    
        echo json_encode($registro);
        
        
        
    }catch (Exception $e){
        echo "Erro ao conectar: ".$e;
    }