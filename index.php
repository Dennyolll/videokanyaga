
<?php 
$title = "Index";
include 'includes/header.php' ;
?>

    
    <br/>
    <?php 
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php 
        $name = 'Kocsis Daniel';
        $age = 15;
        echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';
        echo "<h1>My name is: $name</h1>";
        
    ?>
    <button type="button" class="btn-dark">CLICK ME!</button>
    <button type="button" class="btn-primary">CLICK ME!</button>
    <button type="button" class="btn-success">CLICK ME!</button>
<?php require 'includes/footer.php' ?>