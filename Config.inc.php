<?php 
    /**
     * Configurações do Sistema
     * 
     * @author Allan Camargo, 25/09/2019
     */


    require 'environment.php'; // Realizando o require do environment

    global $config; 
    $config = array(); 
    
    if(ENVIRONMENT == 'development') { // Verificando se esta no ambiente de desenvolvimento ou Produção
        $config['DB_NAME'] = 'db_4results'; // Definindo nome do Banco de dados.
        $config['DB_HOST'] = 'localhost'; // Definindo Caminho do Banco de dados.
        $config['DB_USER'] = 'root'; // Definindo Usuario do Banco de dados.
        $config['DB_PASS'] = ''; // Definindo Senha do Banco de dados.
    } else { // Caso estiver no ambiente de produção
        $config['DB_NAME'] = ""; 
        $config['DB_HOST'] = ""; 
        $config['DB_USER'] = ""; 
        $config['DB_PASS'] = ""; 
    }

?>