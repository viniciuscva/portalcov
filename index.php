<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Covid-19</title>
    <link rel="stylesheet" href="/portal_covid19/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
</head>




<body>
    <header>
        <img src="/portal_covid19/src/bg.png" alt="Imagem" />
    </header>


    

    <nav>
        <ul>
            <?php 
                $menuItem1 = (object) [
                    'href' => '/portal_covid19/inicio.php',
                    'label' => 'Início'
                  ];
                $menuItem2 = (object) [
                    'href' => '/portal_covid19/sobre_covid.php',
                    'label' => 'Sobre a Covid-19'
                  ];
                $menuItem3 = (object) [
                    'href' => '/portal_covid19/noticias.php',
                    'label' => 'Notícias'
                  ];
                $menuItem4 = (object) [
                    'href' => '/portal_covid19/contatos.php',
                    'label' => 'Contatos'
                  ];
                $menuItem5 = (object) [
                    'href' => '/portal_covid19/sobre_nos.php',
                    'label' => 'Sobre'
                  ];
                $menu = array($menuItem1, $menuItem2, $menuItem3, $menuItem4, $menuItem5);

                foreach($menu as $menuItem){
                    echo '<li>' . 
                            '<a href="' . $menuItem->href . '">' . $menuItem->label . '</a>' .
                         '</li>';
                }
            ?>
        </ul>
    </nav>
    <section id='conteudo'></section>
    <footer>
        <?php 
            $nome_autor = 'Carlos Vinicius';
            $email_autor = 'minervinocva@gmail.com';
            echo '<p>' . 
                 'Copyright © 2021 ' . $nome_autor . 
                 '.</p><br>';
            echo '<p>' . $email_autor . 
                 '</p>';
        ?>
    
    </footer>


    <script>
        const secao = document.getElementById('conteudo')
        fetch("/portal_covid19/inicio.php")
            .then(resp => resp.text())
            .then(html => secao.innerHTML = html)

        document.querySelectorAll('a').forEach(link => {
            link.onclick = function(e){
                e.preventDefault()
                document.querySelectorAll('nav .selected').forEach(elemento => {
                    if (elemento.classList.contains('selected')){
                        elemento.classList.remove('selected')
                    } 
                })
                link.classList.add('selected')
                const conteudo = document.getElementById('conteudo')
                fetch(link.href)
                    .then(resp => resp.text())
                    .then(html => conteudo.innerHTML = html)
            }
        })
    </script>
</body>




</html> 
