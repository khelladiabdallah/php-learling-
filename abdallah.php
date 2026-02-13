<?php
echo"on a commencé go "; 
//si j'ai un code lourd pour rappelé ou je suis //
/* commentaire avec etoile il a arrive a la fin avec */
// nn pas de fin 
echo gettype(true);// booléen
echo '<br>';
echo gettype(100);//intger
 echo '<br>';
echo gettype(-200);// get type c une fonction qui affiche le type qui est entre parenthese 
echo '<br>';
echo gettype("string ");
echo '<br>';
echo gettype(true +true );//il afiche 2 addition
 echo '<br>';
echo true ; // affiché 1
 echo '<br>';
echo gettype(5+'5');// 10
echo '<br>';
//echo gettype(5+'5 abdallah ');// warning
// ligne précedent j'ai fait un  commentaire pour le chrome ne me affiche pas warning //
 echo '<br>';
// cours 08 casting'abdallah 





echo 5 +(int) '5+ abdallah '; // c pas logique mais quand on définit le type de variable donne
echo '<br>';
echo 10 + 10.5;
echo '<br>';
echo gettype (10 + (int)10.5); 
echo '<br>';





//cours 09 booleén 
var_dump ((bool) ""); // croché pour string mais vide il a affiche false 
 echo '<br>';
var_dump((bool) []);// false aussi contient pas des valeurs
 echo '<br>';
var_dump((bool) "bonsoir ");// true car stirng contient des caractére
 echo '<br>';
var_dump((bool)array());// aussi false revien voir cette fonction elle fait quoi ? 
 echo '<br>';
//COURS 10 







echo 'bonsoir  php ';// afhiche hello php simple croché 
 echo '<br>';
 echo "bonsoir php ";// """"""""""" php double croché 
 echo '<br>'; 
echo "bonsoir 'php' ";// php seul simple croché 
 echo '<br>';
 echo 'bonsoir "php" ';
 echo '<br>';
 echo 'bonsoir \'php\' ';// si tu veux utilisé le meme crhoché 
  echo '<br>';
  echo " bonsoir \"php\" ";// utilise le meme double coché 
  echo '<br>';
echo "bonsoir 
abdallah
tu vas bien ";// il afiche dans la meme ligne 
 echo '<br>';
echo  nl2br( "bonsoir 
abdallah 
tu vas bien" );// saut les lignes nl2br = new ligne to br 



