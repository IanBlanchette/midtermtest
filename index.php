<?php
include_once('database.php');

$query = "SELECT * FROM books"; // SQL statement
$statement = $db->prepare($query); // encapsulate the sql statement
$statement->execute(); // run on the db server
$books = $statement->fetchAll(); // returns an array
$statement->closeCursor(); // close the connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book List</title>
    <!-- CSS Section -->
    <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="./Content/app.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h1>Books List</h1>

            <!-- /////////////////////////// -->
            <!-- FIX THE ADD NEW BOOK BUTTON -->
            <!-- /////////////////////////// -->

            <a class="btn btn-primary" href="book_details.php?gameID=0">
                <i class="fa fa-plus"></i> Add New Book</a>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Genre</th>
                    <th></th>
                    <th></th>
                </tr>
                    <?php foreach($books as $book) : ?>
                        <tr>
                            <td><?php echo $book['Title'] ?></td>
                            <td><?php echo $book['Author'] ?></td>
                            <td><?php echo $book['Price'] ?></td>
                            <td><?php echo $book['Genre'] ?></td>

                            <!-- //////////////////// -->
                            <!-- MODIFY SECTION BELOW -->
                            <!-- //////////////////// -->

                            <td><a class="btn btn-primary" href="book_details.php?bookID=<?php echo $book['Id'] ?>"><i class="fa fa-pencil-square-o"></i> Edit</a></td>

                            <td><a class="btn btn-danger" href="book_delete.php?bookID=<?php echo $book['Id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>

        </div>
    </div>
</div>

<!-- JavaScript Section -->
<script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
<script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Scripts/app.js"></script>
</body>
</html>
