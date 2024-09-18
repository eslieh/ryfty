<!DOCTYPE html>
<html lang="en">
<style>
    #is{
        background-color: white;
        color: black;
    }
</style>
<?php
    include('../req/root-head.php');
?>
<body>
    <?php
        include('../req/rootnavs.php');
    ?>
    <div class="body-content">
        <div class="station-name">
            <h2>Victor Movers And CO.</h2><br>
            <h1>Account Center</h1>
        </div>
        <?php
            if(!isset($_GET['task'])){
               ?>
                <script>location.href='./'</script>
               <?php
            }else{
                $task = $_GET['task'];
                include("tasks/$task.php");
            }
        ?>
    </div>
</body>
</html>