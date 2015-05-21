<?php
  $id_renta = $_POST['id_renta'];
  // connect to mongodb
  $m = new MongoClient();
  //echo "Connection to database successfully";

  // select a database
  $db = $m->mydb;
  //echo "Database mydb selected";
  $collection = $db->persona;
  //echo "Collection selected succsessfully";

  $cursor = $collection->find( array('id_renta' => $id_renta) );

  // iterate cursor to display title of documents
  $idx;
  foreach ($cursor as $document)
    $idx = $document["id_renta"];

  if( $idx == $id_renta )
    echo 1;
  else
    echo 0;
?>
