
<?php
require 'database.php';
 include 'header.php'; 
 include 'menu.php'; 
$sql = "SELECT * FROM superheroes";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

//print_r ($database_gegevens);
?>

<div class='container'>
<h4 class="display-4">superheroes</h4>
<table class='table table-striped'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Alignment</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($database_gegevens as $superheroes): ?>
        <tr>
            <td> <?php echo $superheroes['ID'] ?> </td>
            <td> <?php echo $superheroes['Title'] ?> </td>
            <td> <?php echo $superheroes['Alignment'] ?> </td>
            <td>   
                <a href="superheroes_show.php?id=<?php echo $superheroes['ID'] ?>"> bekijken</a>
                <a href="superheroes_edit.php?id=<?php echo $superheroes['ID'] ?>"> BEWERKEN</a>
                <a href="superheroes_delete.php?id=<?php echo $superheroes['ID'] ?>"> DELETE</a>
               </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

</body>
</html>