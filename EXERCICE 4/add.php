<?php
// connect to database.
$dsn = 'mysql:host=localhost;dbname=exo4';
$user = 'root';
$pass = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];
try {
    $connexion = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




$forminput = $_POST["forminput"];

$query = 'SELECT id FROM users WHERE pseudo = ?';
$params = array("$forminput");
$stmt = $connexion->prepare($query);
$stmt->execute($params);

$suggestion = "";
if($stmt->rowCount() > 0){
        echo 'this pseudo has already been used';
    }else{
        $query = 'INSERT INTO users( pseudo) values (?)';
        $params = array("$forminput");
        $stmt = $connexion->prepare($query);
        $stmt->execute($params);

        echo 'your pseudo has been added to the database!';

    }



?>