<?php
include_once('database.php');
/*
File Name: book_delete.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://comp1006-100139251midterm.azurewebsites.net/index.php
Description: Php script to delete the selected book
*/
/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/
#script to delete the seleted book
$bookID = $_GET["bookID"]; #assign the variable to the book id
if($bookID != false) {
    $query = "DELETE FROM books WHERE Id = :book_id "; #sql statement to delete the selected id 
    $statement = $db->prepare($query);
    $statement->bindValue(":book_id", $bookID);
    $success = $statement->execute(); // execute the prepared query
    $statement->closeCursor(); // close off database
}
// redirect to index page
header('Location: index.php');
