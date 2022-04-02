<?php

require_once ("BookDB.php");

if (isset($_GET["query"])) {
    $query = $_GET["query"];
} else {
    $query = "";
}

?><!DOCTYPE html>

<meta charset="UTF-8" />
<title>Search books</title>


<h1>Search for books</h1>

<form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
    <label for="query">Search books:</label>
    <input type="text" name="query" id="query" value="<?= $query ?>" />
    <button type="submit">Search</button>
</form>

<ul>
    <?php foreach (BookDB::find($query) as $book): ?>
        <a href="book-detail.php?id=<?=$book->id?>"><li><?= $book->author ?>: <?= $book->title ?></li></a>
    <?php endforeach; ?>
</ul>

