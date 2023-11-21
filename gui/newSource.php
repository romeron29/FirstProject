<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewSource</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/secondStyle.css">
</head>
<body>
    <?php 
    include("../inc/navBar.php");
    include("../utils/functions.php");
    var_dump($_SESSION);
    ?>
    <div class="container">
        <form action="../logic/cSource.php" method = "post">
            <div class="row" >
                <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="sourceName">Source Name</label>
                    <input id="" class="form-control" type="text" name="sourceName" required placeholder="Source Name">
                </div>
                <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="password">RSS URL</label>
                    <input id="" class="form-control" type="text" name="url" required placeholder="RSS url">
                </div>
            </div>
            <div class="row">
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
                <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6 py-4">
                    <button type="submit" class="btn btn-primary"> Save </button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>