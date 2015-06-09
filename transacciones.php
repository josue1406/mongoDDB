<?php
  session_start();
  if ( !isset( $_SESSION['cliente'] ) )
    header("location:index.html");
  else{
    $controlador = (int)$_POST['controlador'];
    //$controlador = $_REQUEST['controlador'];
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
       "tipo_usuario" => $tipoUsuario,
       "monto" => (int)0,
       "peliculas" => []
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
      $movies = $_POST['peliculas'];

      $m = new MongoClient();
      $db = $m->mydb;
      $collection = $db->cliente;
      $where = array( '$and' => array( array('nombre' => $_SESSION['cliente'] ), array('contrasena' => $_SESSION['psw'] ) ) );
      /*
      $cursor = $collection->find( $where );
      $peliculasDB = "";
      foreach ($cursor as $doc){
         if( $doc["nombre"] == $_SESSION['cliente'] and $doc["contrasena"] == $_SESSION['psw'] ){
            $peliculasDB = $doc["peliculas"];
            break;
         }
      }
      $suma_peliculas = array_merge($peliculasDB,$movies);
      $monto =  (sizeof($peliculasDB) + sizeof($movies)) * 49;
      $collection->update( $where, array('$set' => array( 'peliculas' => $suma_peliculas,  )));
      */
      $cursor = $collection->find( $where );
      $montoDB = 0;
      foreach ($cursor as $doc){
         if( $doc["nombre"] == $_SESSION['cliente'] and $doc["contrasena"] == $_SESSION['psw'] ){
            $montoDB = $doc["monto"];
            break;
         }
      }
      $monto =  (int)( $montoDB + (sizeof($movies) * 49 ) ) ;
      $collection->update( $where, array('$set' => array( 'monto' => $monto )));
      for( $i = 0 ; $i < sizeof($movies) ; $i++ )
        $collection->update( $where, array('$push' => array( 'peliculas' => $movies[$i] )));
      echo json_encode( array( 'result' => 'Rentada(s)' ) );
    }
    else if( $controlador == 5 ){
      $idb = $_POST['idBuscar'];
      //$idb = $_REQUEST['idBuscar'];

      $m = new MongoClient();
      $db = $m->mydb;
      $collection = $db->cliente;
      $cursor = $collection->find( array("id" => (int)$idb) );

      $people = [];
      foreach ($cursor as $doc){
        $monoarray = [];
        if( $doc["id"] == $idb ){
          $monoarray["nombre"] = $doc["nombre"];
          $monoarray["apellido"] = $doc["apellido"];
          $monoarray["nickname"] = $doc["nickname"];
          $monoarray["edad"] = $doc["edad"];
          $monoarray["email"] = $doc["email"];
          $monoarray["telefono"] = $doc["telefono"];
          $monoarray["tipo_usuario"] = $doc["tipo_usuario"];
          $monoarray["id"] = $doc["id"];
          $monoarray["monto"] = $doc["monto"];
          $people[] = $monoarray;
          break;
        }
      }
      echo json_encode( $people );
      //echo "{datavalues:".json_encode($people)."}";
    }

  }

?>
