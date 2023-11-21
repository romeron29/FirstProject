<?php 
include("../utils/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateSource</title>
</head>
<body>
    <?php include("../inc/navBar.php");?>

    <div class="container">
        <div class="row">
            <h1>Update Source</h1>
        </div>
        <div class="row">
            <?php $row = getSource($_GET['id']);?>
            <form action="../logic/uSource.php" method="post">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="id">Source ID</label>
                    <input type="text" name="id" readonly  value= "<?= $row['id']?> " >
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="name">Source name</label>
                    <input type="text" name="name" value= "<?= $row['name']?> " >
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="url">URL</label>
                    <input type="text" name="url"  value= "<?= $row['url']?> " >
                </div>
                
                <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="category">Category</label>
                    <select id="" class="form-control" name="category">
                        <?php
                        /*load categories in combo*/
                            $categories = getCategories();
                            foreach($categories as $id => $category) {
                                echo "<option value=\"$id\">$category</option>";
                            }
                            ?>
                            <?php
                        ?>
                    </select>
                </div>
                
                <div>
                    <input type="submit" value="Confirm">
                </div>
            </form>


        </div>
    </div>

    
</body>
</html>