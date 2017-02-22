<?php
include_once('database.php');

/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/
$book = $_GET['Id'];
if($book != false)
	$query = "DELETE FROM books WHERE id = :id";
	$statement = $db->prepare($query);
	$statement->bindValue(":id", $book);
	$success = $statement->execute();
	$statement->closeCursor();
// redirect to index page
header('Location: index.php');

?>
