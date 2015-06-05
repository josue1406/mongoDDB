<?php
  session_start();
  if ( !isset( $_SESSION['cliente'] ) )
    header("location:index.html");
  else{
    $controlador = (int)$_POST['controlador'];

    if( $controlador == 1 ){
      $id = (int)$_POST['id'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $nickname = $_POST['nickname'];
      $edad = (int)$_POST['edad'];
      $email = $_POST['email'];
      $contrasena = $_POST['contrasena'];
      $telefono = (int)$_POST['telefono'];
      $tipoUsuario = $_POST['tipoUsuario'];

      $m = new MongoClient();
      $db = $m->mydb;
      $collection = $db->cliente;
      $document = array(
       "id" => $id,
       "nombre" => $nombre,
       "apellido" => $apellido,
       "nickname" => $nickname,
       "edad" => $edad,
       "email" => $email,
       "contrasena" => $contrasena,
       "telefono" => $telefono,
       "tipo_usuario" => $tipoUsuario
      );
      $collection->insert($document);
      echo json_encode( array( 'result' => 'Registrado' ) );
    }
    else if( $controlador == 2 ){
      //include 'ChromePhp.php';
      $id = (int)$_POST['id'];
      $m = new MongoClient();
      $db = $m->mydb;
      $collection = $db->cliente;
      //$cursor = $collection->find( array("id" => $id) );
      /*$objectid = "";
      foreach ($cursor as $doc){
         if( $doc["id"] == $id ){
            $objectid = (String)$doc["_id"];
            break;
         }
      }*/

      //ChromePhp::log( $db->lastError() );
      //$collection->remove( array( "_id" => new MongoId($objectid) ) );
      $collection->remove( array( "id" => $id ) );
      echo json_encode( array( 'result' => 'Eliminado' ) );
    }
    else if( $controlador == 3 ){
      $campo = $_POST['campo'];
      $valor = $_POST['valor'];

      if( $campo == "id" or $campo == "edad" or $campo == "telefono" )
          $valor = (int)$valor;

      $m = new MongoClient();
      $db = $m->mydb;
      $collection = $db->cliente;
      $conditions = array( '$and' => array( array('nombre' => $_SESSION['cliente'] ), array('contrasena' => $_SESSION['psw'] ) ) );
      $collection->update( $conditions, array('$set' => array( $campo => $valor)));

      echo json_encode( array( 'result' => 'Actualizado' ) );
    }
    else if( $controlador == 4 ){
      
    }

  }

?>
