<?php
$html = "";
$xmlText = file_get_contents("rss1.xml");
$xml = new SimpleXMLElement($xmlText);
for($i = 0; $i < 10; $i++){
  $title = $xml->item[$i]->title;
  $html .= "<p>$title</p>";
}
 
 ?>
