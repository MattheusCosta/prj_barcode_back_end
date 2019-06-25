<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
                                //servidor      usuario    senha  banco de dados
        
        $id = $_GET['id'];
        
        $query="SELECT cd_barra FROM tb_produtos";
        
        $resultado = mysqli_query($conexao,$query);
        
        $i = 0;
            
        while($linha = mysqli_fetch_assoc($resultado)){
        
            $codigo = $linha['cd_barra'];
            
            if($codigo == $id){
                
                $registro = array(
                    'produto' => array(
                        'situacao' => '1'
                    )
                );
                break;
            
            }else{
                
                $registro = array(
                    'produto' => array(
                        'situacao' => '2'
                    )
                );
                break;
            }
            
            $i++;
        }
    
        echo json_encode($registro);
        
        
        
    }catch (Exception $e){
        echo "Erro ao conectar: ".$e;
    }