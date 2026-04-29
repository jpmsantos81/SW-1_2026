<?php
    // Array associativo que funciona como um "menu"
    // A chave (ex: Home) é o nome do link
    // O valor é o conteúdo que será exibido na página
    $_MENU = [
        'Home' => ' <h1>Assassin’s Creed</h1>
      <p>Bem-vindo ao universo de Assassin’s Creed, onde história e ação se encontram em uma jornada épica através dos séculos. Explore civilizações antigas, participe de conflitos lendários e descubra os segredos ocultos por trás da luta entre Assassinos e Templários. Prepare-se para mergulhar em uma experiência única que mistura fatos históricos com ficção envolvente.</p>',

        'Sobre' => '<h1>Sobre a franquia</h1>
       <p>Assassin’s Creed é uma franquia de jogos que combina aventura, stealth e narrativa histórica. Desde sua criação, a série transporta os jogadores para diferentes períodos da humanidade, como o Egito Antigo, a Grécia Clássica e a Itália renascentista. A história gira em torno da eterna batalha entre a liberdade defendida pelos Assassinos e o controle imposto pelos Templários.</p>',

        'Personagens' => '<h1>Personagens</h1>
        <p>A franquia apresenta protagonistas memoráveis, cada um com sua própria história e motivações. Desde assassinos habilidosos até líderes carismáticos, os personagens são essenciais para dar vida ao universo do jogo. Além disso, figuras históricas reais frequentemente aparecem, tornando a experiência ainda mais envolvente.</p>',

        'História' => '<h1>História</h1>
        <p>A narrativa de Assassin’s Creed acompanha personagens que acessam memórias genéticas através do Animus, revivendo momentos cruciais da história. Cada jogo apresenta um novo protagonista e cenário, revelando como os conflitos do passado moldaram o presente. A trama é rica em reviravoltas e mistérios que conectam todos os títulos da franquia.</p>',

        'Cenarios' => '<h1>Cenários</h1>
        <p>Uma das marcas registradas da série é a recriação detalhada de cidades históricas. Dos telhados de Florença às pirâmides do Egito, cada ambiente é cuidadosamente construído para proporcionar imersão total. Os jogadores podem explorar livremente esses mundos, interagir com NPCs e descobrir segredos escondidos.</p>'
    ];
?>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>Assassin’s Creed</title>
</head>
    <body>    
        <!-- Cabeçalho da página -->
        <header class="alonso">
            <?php
                
                echo '<div class="container">';
                echo '<a class="logo" href="?page=Home"><img src="imgs/logo.png" alt="Logo"></a>';
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