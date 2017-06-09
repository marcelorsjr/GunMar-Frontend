<?php
 
require_once("lib/Template.class.php");
include('lib/httpful.phar');
 


global $tpl;
$tpl = new Template("results.html");
      
$tpl->SEARCH_QUERY = $_GET['query'];






// CRIA OS BLOCOS COM OS RESULTADOS DA PESQUISA
$tpl->RESULT_TITLE ="The Office of Barack and Michelle Obama";
$tpl->RESULT_URL = "https://www.barackobama.com/";
$tpl->RESULT_DESCRIPTION = "Traduzir esta página
Welcome to the Office of Barack and Michelle Obama. We Love You Back. Play video. The Office of Barack and Michelle Obama. © 2017 | Legal & Privacy.";
$tpl->block("BLOCK_RESULT");

$tpl->RESULT_TITLE ="Barack Obama – Wikipédia, a enciclopédia livre";
$tpl->RESULT_URL = "https://www.barackobama.com/";
$tpl->RESULT_DESCRIPTION = "Traduzir esta página
Welcome to the Office of Barack and Michelle Obama. We Love You Back. Play video. The Office of Barack and Michelle Obama. © 2017 | Legal & Privacy.";
$tpl->block("BLOCK_RESULT");

$tpl->RESULT_TITLE ="Barack Obama - Wikipedia";
$tpl->RESULT_URL = "https://www.barackobama.com/";
$tpl->RESULT_DESCRIPTION = "Traduzir esta página
Welcome to the Office of Barack and Michelle Obama. We Love You Back. Play video. The Office of Barack and Michelle Obama. © 2017 | Legal & Privacy.";
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