
<?php
    $conn=connect();
    $stmt = $conn->stmt_init(); // preparation of the query
    $query = "SELECT * FROM messages ORDER BY id"; // query to DB
    if ($stmt->prepare($query)) { // check query
        $stmt->execute();           // execute query
        $stmt->bind_result($id, $email, $message);
    }
?>