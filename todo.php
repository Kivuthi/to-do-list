<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
</head>
<body>
    <h2>Welcome to Your To-Do List</h2>

    <div class="to-do">
        <h3>Create your list</h3>
        <form method="POST">

            <input type="checkbox" name="subscribe" value="yes"><br>
            <label for="title" name="title">Title</label><br>
            <input type="text" name="title"> <br><br>
            <label for="newsletter" name="">Description</label><br>
            <textarea name="message"></textarea><br><br>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>