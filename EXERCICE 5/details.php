<?php

// connect to database.
$dsn = 'mysql:host=localhost;dbname=world';
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

$query = 'SELECT * FROM city WHERE name = ?';
$params = array("$forminput");
$stmt = $connexion->prepare($query);
$stmt->execute($params);

$suggestion = "";
if($stmt->rowCount() > 0){
    echo "<ul>";
    while($row = $stmt->fetch(mode:PDO::FETCH_ASSOC)){
        echo "<li>"."ville       :".$row["Name"]."</li>";
        echo "<li>"."Population  :".$row["Population"]."</li>";
        echo "<li>"."District    :".$row["District"]."</li>";
        
    }
    echo "</ul>";

//<select value=' " .$row["name"]. " '>
}else{
    echo "empty";
}



?>

