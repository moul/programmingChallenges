<?php

function getBotsArray(){
  //Recupérer la liste des Bots
  $bots=array();
  $botsList=explode("\n",file_get_contents("listOfBots.txt"));
  
  foreach($botsList as $botLigne){
    if(preg_match("/\ (http|https):\/\//", $botLigne)){
      list($name,$url)=explode(" ",$botLigne);
      $bots[]=array("name" => $name, "url" =>$url);
    }
  }
  return $bots;
}
function getIAResponse($youChar,$iaBaseUrl,$grille){
  /*transforme la grille en parametres http GET
  * et fait la requete vers $iaBaseUrl
  * Retourne la réponse de l'IA
  */
    $paramsGrille="";
    foreach($grille as $key => $case){
        $paramsGrille.="&".$key."=".$case;
    }
    $url=$iaBaseUrl."?you=".$youChar.$paramsGrille;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);   
    return htmlentities($output);
}