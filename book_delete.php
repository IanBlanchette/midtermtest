<?php
include_once('database.php');

/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/
$bookID = $_GET["bookID"]; // assigns the gameID from the URL
if($bookID != false) {
    $query = "DELETE FROM books WHERE Id = :book_id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":book_id", $bookID);
    $success = $statement->execute(); // execute the prepared query
    $statement->closeCursor(); // close off database
}
// redirect to index page
header('Location: index.php');
