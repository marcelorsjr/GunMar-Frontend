<?php
 
require_once("lib/Template.class.php");
include('lib/httpful.phar');
 
global $tpl;
$tpl = new Template("results.html");
      
$tpl->SEARCH_QUERY = $_GET['query'];


// CRIA OS BLOCOS COM OS RESULTADOS DA PESQUISA
$tpl->RESULT_TITLE ="Wladmir Cardoso Brandão";
$tpl->RESULT_URL = "www.wladmirbrandao.com/";
$tpl->RESULT_DESCRIPTION = "Wladmir Cardoso Brandão, professor e pesquisador em Ciência da Computação e Ciência da Informação. Empreendedor e consultor em Tecnologia da ...";
$tpl->block("BLOCK_RESULT");
//



$tpl->show();


function getResultsFromQuery ($query) {
    $url = "https://jsonplaceholder.typicode.com/posts/1";
    $response = \Httpful\Request::get($url)
    ->expectsJson()
    ->send();
    return $response->body;
}


?>