<?php 
$title = "For Loops";
include 'includes/header.php' ;
?>
    
    <?php 
        for($count = 0; $count < 10; $count++)
        {
            echo '<p>HELLO WORLD</p>';
        }

        for($count = 0; $count < 10; $count++)
        {
            echo "<p>The Count is: $count</p>";
        }
    ?>
<?php require 'includes/footer.php' ?>