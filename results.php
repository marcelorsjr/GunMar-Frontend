<?php
 
require_once("lib/Template.class.php");

//include('lib/httpful.phar');
 


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
  $url = 'https://jsonplaceholder.typicode.com/posts/'+$query;

  $ch = curl_init();

  //Set the URL that you want to GET by using the CURLOPT_URL option.
  curl_setopt($ch, CURLOPT_URL, $url);
   
  //Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   
  //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   
  //Execute the request.
  $data = curl_exec($ch);
   
  //Close the cURL handle.
  curl_close($ch);
   
  $json = json_decode($data, true);
  return $json;
}


?>