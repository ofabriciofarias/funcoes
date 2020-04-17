<?php
$hierarquia = array(
    array(
        'nome_cargo'    => 'CEO', // Esse é o cargo principal da hierarquia
        'subordinados'  => array( // Aqui temos um array pois podem haver mais de um subordinado
            // Inicio: Diretor Comercial
            array(
                'nome_cargo'    => 'Diretor Comercial',
                'subordinados'  => array( // Inicio dos Subordinados
                    // Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas',                 
                    ),
                    // Término: Gerente de Vendas
                    
                ) // Término dos Subordinados
            ),
            // Término: Diretor Comercial
            
            // Inicio: Diretor Financeiro
            array(
                'nome_cargo'    => 'Diretor Financeiro',
                'subordinados'  => array( // Inicio dos Subordinados
                    // Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados'=>array(
                            array(
                                'nome_cargo' =>'Supervisor de Suprimentos',
                                
                            )
                        )
                    ),      
                    
                    // Término: Gerente de Compras
                    
                ) // Término dos Subordinados
            ),
            // Término: Diretor Financeiro
            
        )
    )
);

function exibe($cargos){
    
    $html = '<ul>'; // aqui está definindo
    
    foreach ($cargos as $cargo) { // para cada cargo em $cargos, cria um novo $cargo 
        
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
       
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            
            $html .= exibe($cargo['subordinados']);
            
        }
        $html .= "</li>";
    }
    
    $html .= "</ul>"; // aqui concatenando
    
    return $html;
}

echo exibe($hierarquia);
?>