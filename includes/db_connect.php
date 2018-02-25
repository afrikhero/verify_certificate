<?php

try {
  $dbConnect = new PDO('mysql:host=127.0.0.1;dbname=certificates', 'root', 'noble555666888');
  echo "connection successful";
} catch (PDOException $e) {
  die($e->getMessage());
};

$dbConnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>
