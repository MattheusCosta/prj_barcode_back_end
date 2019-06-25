<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
                                //servidor      usuario    senha  banco de dados
        $codigo= $_GET['id'];
        
        $query="SELECT teste FROM tb_teste";
        
        $resultado = mysqli_query($conexao,$query);
        
        $i = 0;
            
        while($linha = mysqli_fetch_assoc($resultado)){
            
            $registro = array(
                'produto' => array(
                    'teste' => $linha['teste']
                )
            );
            
            $i++;
        }
    
        echo json_encode($registro);
        
    }catch (Exceotion $e){
        echo "Erro ao conectar: ".$e;
    }