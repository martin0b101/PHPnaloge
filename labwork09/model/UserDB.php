<?php

require_once "DBInit.php";

class UserDB {

    // Returns true if a valid combination of a username and a password are provided.
    public static function validLoginAttempt($username, $password) {
        $dbh = DBInit::getInstance();

        // !!! NEVER CONSTRUCT SQL QUERIES THIS WAY !!!
        // INSTEAD, ALWAYS USE PREPARED STATEMENTS AND BIND PARAMETERS!
        $statment = $dbh->prepare("SELECT COUNT(id) FROM user WHERE username=:username AND password=:password");
        //$query = "SELECT COUNT(id) FROM user WHERE username = '$username' AND password = '$password'";
        $statment->bindParam(":username", $username);
        $statment->bindParam(":password", $password);
        //$stmt = $dbh->prepare($query);
        //$stmt->execute();
        $statment->execute();
        return $statment->fetchColumn(0) == 1;
    }
}
