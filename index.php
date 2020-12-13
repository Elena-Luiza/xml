<!-- <form action="index.php" method="POST">
  <select name="rss"> -->


<?php
$xml = new SimpleXMLElement("http://www.hotnews.ro/rss/economie",null,true);



foreach($xml->atom->item as $item){
  echo $item->description;
  echo $item->title;

}

// $selection = array (
// 'economie'=>'http://www.hotnews.ro/rss/economie',
// 'general'=>'http://www.hotnews.ro/rss',
// 'life'=>'http://www.hotnews.ro/rss/life'
// );

// foreach ($selection as $title => $url) {
  // if (!empty($_REQUEST) and isset($_REQUEST['rss']) and $_REQUEST['rss'] == $url)
  //   $selected = 'selected';
  //   }else{
  //     $selected = '';
  //   }
    // echo '<option value="'.$url'" >'.$title.'</option>';
    // echo "<br>";


?>
<!--
  </select>
  <input type="submit" value="Select">
</form> -->
