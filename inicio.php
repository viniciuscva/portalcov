<h1>Início</h1>

<br>

Seja bem-vindo! Aqui você pode visualizar os números sobre a Covid-19 a nível mundial, 
nacional e no estado da Paraíba, além de ver as notícias mais relevantes sobre o tema. 
Se você deseja nos contactar para algum comentário, crítica, sugestão ou informação 
adicional, você pode utilizar os meios de comunicação apresentados na seção Contatos.

<br><br>
Números da Covid-19. (Atualizado pela última vez em
11/04/2021).
<br><br><br>

<?php
//carrega as variáveis boletim_epidemiológico, mundialmente,brasil e paraíba a partir do csv
require 'ler_csv.php';
?>

<table>
    <thead>
        <?php 
            foreach($cabecalho as $th){
                echo '<th>'. $th . '</th>';
            }
        ?>
    </thead>
    <?php
        foreach($boletim_epidemiologico as $boletim){
            echo '<tr>';
            foreach($boletim as $td){
                echo '<td>'. $td . '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>

<br><br>
Referência: <a href="https://news.google.com/covid19/map?hl=en-US&mid=%2Fm%2F01hdp5&gl=US&ceid=US%3Aen">Google News</a>