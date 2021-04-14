


<?php 
    $delimitador = ',';
    $cerca = '"';
    $file = fopen('./src/totais_covid.csv','r');
    if($file){
        $cabecalho = fgetcsv($file,0,$delimitador,$cerca);
        $mundialmente = fgetcsv($file,0,$delimitador,$cerca);
        $brasil = fgetcsv($file,0,$delimitador,$cerca);
        $paraiba = fgetcsv($file,0,$delimitador,$cerca);
        $boletim_epidemiologico = array($mundialmente, $brasil, $paraiba);
    }
    fclose($file);
?>