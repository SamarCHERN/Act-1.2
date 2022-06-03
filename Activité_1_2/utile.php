<?php
// $articles = array(
//     array('name' => "Santé", 'Date' => "14 November 2011", 'Text' => 'England','auteur'=>"Samar"),
//     array('name' => 'Marcus', 'Date' => "14 November 2016", 'Text' => 'England','auteur'=>"Rahali"),
//     array('name' => 'Anthony', 'Date' => "14 November 2010", 'Text' => 'France','auteur'=>"Bruno"),
//     array('name' => "Qu'est-ce qu'un vaccin", 'Date' => "14 November 2020", 'Text' => 'England','auteur'=>"Ahmed"),
//     array('name' => 'Dan', 'Date' => "14 November 2015", 'Text' => 'Wales','auteur'=>"Noel"),
// );

usort($articles, function($x, $y) {
    return strtotime($x['Date']) <=> strtotime($y['Date']);
});
$articles=array_reverse($articles);
$a=count($articles);
$n=count($articles);
function getArticles($n=null){
  global $articles;
  if($n==null or $n>count($articles)){$n=count($articles);}
  $t=array();
  for ($x = 0; $x <$n; $x++) {
    $t[]=$articles[$x];
  }
  return($t);
}
//print_r(getArticles(2));

?>
