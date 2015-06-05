<?php
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  // connect to mongodb
  $m = new MongoClient();
  //echo "Connection to database successfully";

  // select a database
  $db = $m->mydb;
  //echo "Database mydb selected";
  $collection = $db->cliente;
  //echo "Collection selected succsessfully";

  $cursor = $collection->find( array( 'nombre' => $usuario, 'contrasena' => $contraseña ) );
  //array('x' => array( '$gt' => 5, '$lt' => 20 ));

  // iterate cursor to display title of documents
  $namex;
  $passwordx;
  foreach ($cursor as $document){
    $namex = $document["nombre"];
    $passwordx = $document["contrasena"] ;
  }

  if( is_null($namex) && is_null($passwordx) )
    echo json_encode( array( 'result' => 0 ) );
  else{
    //aqui creamos una sesion:
    session_start();
    $_SESSION['cliente']="$namex";
    $_SESSION['psw']="$passwordx";
    echo json_encode( array( 'result' => 1 ) );
  }
?>
