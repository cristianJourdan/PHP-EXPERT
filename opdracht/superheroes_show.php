<?php
require 'database.php';

$sql = "SELECT * FROM superheroes";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

//print_r ($database_gegevens);
?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
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
            <th>identify</th>
            <th>MaritalStatus</th>
            <th>eyes</th>
            <th>hair</th>
            <th>PlaceofBirth</th>
            <th>PlaceofDeath</th>
            <th>citizenship</th>
            <th>occupation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $superheroes['ID'] ?> </td>
            <td> <?php echo $superheroes['Title'] ?> </td>
            <td> <?php echo $superheroes['Alignment'] ?> </td>
            <td> <?php echo $superheroes['Gender'] ?> </td>
            <td> <?php echo $superheroes['height'] ?> </td>
            <td> <?php echo $superheroes['weight'] ?> </td>
            <td> <?php echo $superheroes['identify'] ?> </td>
            <td> <?php echo $superheroes['MaritalStatus'] ?> </td>
            <td> <?php echo $superheroes['eyes'] ?> </td>
            <td> <?php echo $superheroes['hair'] ?> </td>
            <td> <?php echo $superheroes['PlaceOfBirth'] ?> </td>
            <td> <?php echo $superheroes['PlaceOfDeath'] ?> </td>
            <td> <?php echo $superheroes['citizenship'] ?> </td>
            <td> <?php echo $superheroes['occupation'] ?> </td>
            <td> 
                <a href="superheroes_delete.php?id=<?php echo $superheroes['ID'] ?>"> DELETE</a>
               </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</body>
</html>