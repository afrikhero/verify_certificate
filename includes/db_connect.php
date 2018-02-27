<?php

try {
  $dbConnect = new PDO('mysql:host=127.0.0.1;dbname=certificates', 'root', 'noble555666888');

} catch (PDOException $e) {
  die($e->getMessage());
};

$dbConnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$rows = $dbConnect->query('SELECT * FROM issuedCert ORDER BY serial');
foreach($rows as $row){
  
};
?>
