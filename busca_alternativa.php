<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
                                //servidor      usuario    senha  banco de dados
        
        $id = $_GET['id'];
        
        $query="SELECT * FROM tb_produtos WHERE cd_barra = '$id'";
        
        $resultado = mysqli_query($conexao,$query);
        
        $i = 0;
            
        while($linha = mysqli_fetch_assoc($resultado)){
        
            $registro = array(
                'produto' => array(
                    'codigo' => $linha['cd_barra'],
                    'nome' => $linha['nm_produto'],
                    'valor' => $linha['vl_produto'],
                    'descricao' => $linha['ds_produto'],
                    'processador' => $linha['processador'],
                    'sistema' => $linha['sistema'],
                    'tela' => $linha['tela'],
                    'armazenamento' => $linha['armazenamento'],
                    'memoria' => $linha['memoria'],
                    'frontal' => $linha['frontal'],
                    'traseira' => $linha['traseira'],
                )
            );
            
            $i++;
        }
    
        echo json_encode($registro);
        
        
        
    }catch (Exception $e){
        echo "Erro ao conectar: ".$e;
    }