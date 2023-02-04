<?php
$db_connexion= new PDO("mysql:host=127.0.0.1;port=3306;dbname=bacem_db", "root" ,"" ) ;

if(!empty($_POST)){
    $query = "INSERT INTO `users` values (?,?)";
    $stmt = $db_connexion->prepare($query);
    $stmt->execute([$_POST['id'],$_POST['name']]);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <input class="form-control" type="number" name="id" placeholder="donner votre id">
        <input class="form-control" type="text" name="name" placeholder="donner votre nom ">
        <button>submit</button>
    </form>

</body>
</html>