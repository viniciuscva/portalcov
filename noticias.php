<h1>Notícias</h1>

<br>

<?php 
    
    $noticia1 = (object) [
      'urlImagem' => './src/in1.png',
      'link' => "https://g1.globo.com/bemestar/coronavirus/noticia/2021/04/10/entenda-quanto-tempo-dura-a-protecao-das-vacinas-contra-a-covid-19.ghtml",
      'titulo' => "Quanto tempo dura a proteção das vacinas contra a Covid-19?",
      'data' => '10/04/2021'
    ];
  
    $noticia2 = (object) [
        'urlImagem' => './src/in2.png',
        'link' => "https://www1.folha.uol.com.br/poder/2021/04/cpi-da-covid-da-maior-poder-de-fogo-ao-senado-sobre-bolsonaro.shtml",
        'titulo' => "CPI da Covid dá maior poder de fogo ao Senado sobre Bolsonaro",
        'data' => '10/04/2021'
    ];

      $noticia3 = (object) [
        'urlImagem' => './src/in3.png',
        'link' => "https://portalcorreio.com.br/em-5-meses-10-dos-paraibanos-afastados-do-trabalho-sofreram-doencas-psicologicas-ou-covid-diz-mpt/",
        'titulo' => "Em 5 meses, 10% dos paraibanos afastados do trabalho sofreram doenças psicológicas ou Covid, diz MPT",
        'data' => '08/04/2021'
    ];

    $array_noticias = array($noticia1, $noticia2, $noticia3);

    foreach($array_noticias as $noticia){
        echo '<div class="noticia">' . 
                '<img src="' . $noticia->urlImagem . '" alt="Imagem" />' . 
                '<div>' . 
                    '<a class="titulo_noticia" href="' . $noticia->link . '">' . $noticia->titulo . '</a>' . 
                    '<p>' . $noticia->data . '</p>' . 
                '</div>' . 
            '</div>';
    }
?>

<div class='noticia'>
    <p>Ver mais notícias sobre a Covid-19 na 
    <a href="https://news.google.com/topics/CAAqJggKIiBDQkFTRWdvSkwyMHZNREZqY0hsNUVnVndkQzFDVWlnQVAB?hl=pt-BR&gl=BR&ceid=BR%3Apt-419">
    Página do Google News</a>.</p>
</div>
