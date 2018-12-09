<?php

date_default_timezone_set("Europe/Stockholm");
setlocale(LC_ALL, 'sv_SE');

function connect() {
    // Connection to database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DB);

    if ($conn->connect_errno) {
        echo "Connection to DB failed.";
    die();
    }

    mysqli_set_charset($conn,"utf8");

    return $conn;
}

function delete() {
    // delete content
    if (isset($_GET["delete"])) {
        $messageToDelete = $_GET["delete"];
        $conn=connect();
        $stmt = $conn->stmt_init();
        $query = "DELETE FROM messages WHERE id = '{$messageToDelete}'";
        if ($stmt->prepare($query)) {
            $stmt->execute();
        }
    }
}

?>