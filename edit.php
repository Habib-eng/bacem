<?php 
$dbConnexion = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bacem_db", "root", "");

$id = $_GET['id'];
if(!empty($_POST)){
    $query = "UPDATE users SET id = ?, name = ? WHERE id = ?";
    $stmt = $dbConnexion->prepare($query);
    $test=$stmt->execute([(int)$_POST['id'],$_POST['name'],$id]);
    var_dump($test);
    // header("location:index.php") ;
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="id"  placeholder="EDIT YOUR ID">
        <input type="text" name="name" placeholder="EDIT YOUR NAME"></input>
        <BUtton>Submit</BUtton>
    </form>
    
</body>
</html>