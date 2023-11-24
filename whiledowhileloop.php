<?php 
$title = "While Loop";
include 'includes/header.php' ;
?>
    

<?php 

    $grade = 0;
    while($grade < 10)
    {
        echo '<p>I AM LESS THAN 10!</p>';
        $grade++;
    }

    echo 'EXIT LOOP!';

?>

    <h1>Do-While Loop</h1>

    <?php 

    $grade = 0;
    
    do{
        echo '<p>I AM DO WHILE LOOP</p>';
        $grade++;
    }while($grade < 10);

    ?>
<?php require 'includes/footer.php' ?>