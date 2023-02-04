<?php

$dbConnexion = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bacem_db", "root", "");
$query = "SELECT * FROM users";
$stmt = $dbConnexion->query($query);
$data = $stmt->fetchAll();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($data as $item ){
    echo "<tr>
        <th scope='row'>1</th>
        <td>".$item['id']."</td>
        <td>".$item['name']."</td>
        <td><a class='btn btn-danger' href='delete.php?id=".$item['id']."'>Delete</a></td>
        <td><a class='btn btn-success' href='edit.php?id=".$item['id']."'>edit</a></td>
    </tr>";
    }  
    ?>

  </tbody>
</table>  
</body>

</html>