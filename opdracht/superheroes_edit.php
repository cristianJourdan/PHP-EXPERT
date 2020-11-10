<?php
$sql = "UPDATE * SET firstname = :ph_firstname WHERE id = :id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":firstname", $form_firstname );
$stmt->bindParam(":id", $form_id );
$stmt->execute();
?>