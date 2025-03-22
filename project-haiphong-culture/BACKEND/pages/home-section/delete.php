<?php
  require_once './Database.class.php';
  require_once './functions.php';
  $id = '';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $database = 'hai_phong_culture_database';
    $table = 'home_section';
    $getAll = "SELECT * FROM ".$database.".".$table;
    $initServer =[
      'server' => 'localhost',
      'username' => 'root',
      'password' => '',
      'database' => 'hai_phong_culture_database',
      'table' => 'home_section'
    ];
    $user = new Database($initServer);
    $delQuery = "DELETE FROM "."`".$user->getTable()."`"." WHERE `id` = "."'".$id."'";
    // echo $delQuery.'</br>';
    $arr = $user -> query($delQuery);
    header("Location: index.php");
    exit();
  }
?>