<?php

define('DB_DATABASE', 'test_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'x718y59a');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
    $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // insert
    $db->exec("insert into users (name, score) values ('name1', 55)");
    echo "user added!";
    
    // disconnect
    $db = null;
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
?>