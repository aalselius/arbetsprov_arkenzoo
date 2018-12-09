<?php 
    include "assets/credentials.php";
    include_once "assets/functions.php";
    $active = 'content';
    include_once "header.php";
    $errorMsgEmail = "Required";
    $errorMsgMessage = "Required";
    $newEmail = "";
    $newMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newMessage = $_POST["message"];
        $newEmail = $_POST["email"];
        if (empty($newEmail) ) {
            $errorMsgEmail = "Please enter an email";
        } elseif (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
                $errorMsgEmail = "Invalid email format";
        } elseif (empty($newMessage) ) {
                    $errorMsgMessage = "Please enter a message";
        } else {
            $conn=connect();
            $stmt = $conn->stmt_init(); // prepp av fråga
    
            $query = "INSERT INTO messages VALUES ('', '{$newEmail}', '{$newMessage}')";
            if ($stmt->prepare($query)) {
                $stmt->execute();
            } else {
                echo "failed"; 
            }
        }    
    }

?>

<!-- html -->
    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="sendMessageContainer">
            <label for="email">Email address
                <input type="email" name="email" placeholder="Enter email" value="<?php echo $newEmail; ?>">
                <span class="error">* <?php echo $errorMsgEmail;?></span>
                <br>
            </label>
            <br>
            <label for="message">Message
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your message" value="<?php echo $newMessage; ?>"></textarea>
                <span class="error">* <?php echo $errorMsgMessage;?></span>
                <br>
            </label>
            <br>
            <input type="submit" name="addmessage" value="Submit" id="sendMessage">
        </form>
    </main>
   
<?php
    include_once "footer.php";
?>