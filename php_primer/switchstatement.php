<?php 
$title = "Switch Statements";
include 'includes/header.php' ;
?>
    
    <?php 
        $grade = 'A';

        switch($grade)
        {
            case 'A':
                echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">YOU DID WELL!'; 
                break;
            default:
                echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
                break;
        }
    ?>
<?php require 'includes/footer.php' ?>