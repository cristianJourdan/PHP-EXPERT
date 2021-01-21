<?php

$_GET['id'];
$id = $_GET['id'];

require 'database.php';
include 'header.php';
include 'menu.php'; 

$sql = "SELECT * FROM superheroes WHERE id = $id";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<div class='container'>
<h4 class="display-4">superheroes</h4>
<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Alignment</th>
            <th>Gender</th>
            <th>height</th>
            <th>weight</th>
            <th>MaritalStatus</th>
            <th>eyes</th>
            <th>hair</th>
            <th>citizenship</th>
            <th>occupation</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($database_gegevens as $superheroes): ?>
        <tr>
            <td> <?php echo $superheroes['ID'] ?> </td>
            <td> <?php echo $superheroes['Title'] ?> </td>
            <td> <?php echo $superheroes['Alignment'] ?> </td>
            <td> <?php echo $superheroes['Gender'] ?> </td>
            <td> <?php echo $superheroes['Height'] ?> </td>
            <td> <?php echo $superheroes['Weight'] ?> </td>
            <td> <?php echo $superheroes['MaritalStatus'] ?> </td>
            <td> <?php echo $superheroes['Eyes'] ?> </td>
            <td> <?php echo $superheroes['Hair'] ?> </td>
            <td> <?php echo $superheroes['Citizenship'] ?> </td>
            <td> <?php echo $superheroes['Occupation'] ?> </td>
            <td> 
                <a href="superheroes_delete.php?id=<?php echo $superheroes['ID']; ?>"> DELETE</a>
               </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>