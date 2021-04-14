


<?php 
    $delimitador = ',';
    $cerca = '"';
    $file = fopen('/home/vinicius/apache_web_servers/testserver/portal_covid19/src/totais_covid.csv','r');
    if($file){
        $cabecalho = fgetcsv($file,0,$delimitador,$cerca);
        $mundialmente = fgetcsv($file,0,$delimitador,$cerca);
        $brasil = fgetcsv($file,0,$delimitador,$cerca);
        $paraiba = fgetcsv($file,0,$delimitador,$cerca);
        $boletim_epidemiologico = array($mundialmente, $brasil, $paraiba);
    }
    fclose($file);
?>