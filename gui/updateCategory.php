<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateCategory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/secondStyle.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Update category</h1>
        </div>
        <div class="row">
            <form action="../logic/uCategory.php" method="post">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label for="categoryId">Category ID</label>
                    <?php $id = $_GET['id'];?>
                    <input type="text" name="categoryId" readonly  value= "<?= $id?> " >
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 py-3">
                    <label for="categoryName">New Category Name</label>
                    <input type="text" name="categoryName" placeholder="Category Name">
                </div>
                
                <div>
                    <input type="submit" value="Confirm">
                </div>
            </form>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>