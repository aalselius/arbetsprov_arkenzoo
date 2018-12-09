<?php 
    include "assets/credentials.php";
    include_once "assets/functions.php";
   // delete();
    $active = 'message';
    include_once "header.php";
?>
    <main>
        <?php
            include "getmessages.php";
            $counter = 0;    
            while(mysqli_stmt_fetch($stmt)) {
                $counter++;            
        ?>
       <!-- html -->
        <div class="content">
            <div class="contentContainer">
                <div id="contentEmail">
                    Email: <span id="contentEmail"><?php echo $email ?></span>
                </div>
                <div class="contentMessage">
                    Message: <span id="contentMessage"><?php echo $message ?></span>
                </div>
            </div>
            <div class="contentDelete">
                <div class="deletebtn"><a href="message.php?delete=<?php echo $id; ?>">X</a></div>
            </div>
        </div>
        <?php
        }
        if($counter == 0) {
            ?>
                <div id="noMessage">NO MESSAGE</div>
            <?php
        }
        ?>
    </main>
<?php
    include_once "footer.php";
?>