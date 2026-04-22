<?php
    // Array associativo que funciona como um "menu"
    // A chave (ex: Home) é o nome do link
    // O valor é o conteúdo que será exibido na página
    $_MENU = [
        'Home' => '<h1>Pagina inicial</h1>',
        'Sobre' => '<h1>Sobre</h1>',
        'Contato' => '<h1>Contato</h1>',
        'Experiencias' => '<h1>Experiências</h1>',
        'Projetos' => '<h1>Projetos</h1>'
    ];
?>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portifólio</title>
</head>

<body>    
    <!-- Cabeçalho da página -->
    <header class="alonso">
        <?php
            
            echo '<div class="container">';
            echo '<a class="logo" href="?page=Home"><img src="imgs/logo.webp" alt="Logo"></a>';
            echo '<nav><ul>';
            foreach($_MENU as $key => $value){
                echo '<li><a href="?page='.$key.'">'.$key.'</a></li>';
            }
            echo '</ul></nav></div>';
        ?>
    </header>
    <?php
        // Verifica se existe um parâmetro "page" na URL
        // Se existir, usa ele
        // Caso contrário, define como "Home" (padrão)
        $_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

        // Verifica se a página existe dentro do array $_MENU
        if(array_key_exists($_pagina, $_MENU))
            echo $_MENU[$_pagina];
        else 
            // Caso não exista, mostra mensagem de erro
            echo '<h1>Página não encontrada</h1>';
    ?>  
</body>
</html>
