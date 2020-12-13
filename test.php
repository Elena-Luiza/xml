
<form action="#" method="POST">
  <select name="rss">
<?php

$myText = file_get_contents('rss1.xml');
$xml = new SimpleXMLElement($myText);

foreach ($xml->item as $item) {
    if(! empty($_REQUEST) and isset($_REQUEST['rss']) and $_REQUEST['rss'] == $item->title ){
        $selected = 'selected';
    } else {
        $selected = '';
    }
    print'<option value="'.$item.'" '.$selected.'>'.'<a href="http://www.hotnews.ro/rss/economie">'.$item->title.'</a>'.'</option>';
   print "\n";
 }
// foreach($xml->item as $item){
//   echo "<option value='.$item'>".$item->title."</option>";
// }

// foreach($xml->item as $item){
//
//   echo $item->title;
//   echo "<br>";
//   echo $item->link;
// echo "<br>";
//   echo $item->description;
// echo "<hr>";
// }

 ?>
</select>
<?php
$rss_url = isset($_REQUEST['rss']) ? $_REQUEST['rss'] : 'not found';
print $rss_url;
