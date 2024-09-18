<!DOCTYPE html>
<html lang="en">
<style>
    #his{
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
        <div class="labelala">
            <h1>Offices</h1>
        </div>
        <?php
            $offices = 1;
            if(isset($offices)){
                ?>
                <div class="office-list">
                    <a href="details.php?office_id=567">
                        <div class="containsr">
                            <div class="ghhjs">Naivasha</div>
                        </div>
                    </a>
                    <a href="details.php?office_id=567">
                        <div class="containsr">
                            <div class="ghhjs">Naivasha</div>
                        </div>
                    </a>
                    <a href="details.php?office_id=567">
                        <div class="containsr">
                            <div class="ghhjs">Naivasha</div>
                        </div>
                    </a>
                    <a href="details.php?office_id=567">
                        <div class="containsr">
                            <div class="ghhjs">Naivasha</div>
                        </div>
                    </a>
                    <a href="details.php?office_id=567">
                        <div class="containsr">
                            <div class="ghhjs">Naivasha</div>
                        </div>
                    </a>
                </div>
                <?php
            }else{
                ?>
                <div class="createoffices">
                    <a href="add.php?ref=homeoffice"><div class="creATE">Setup Offices</div></a>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>
