<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <?php 
    include ("../inc/navbar.php");
    include ("../utils/functions.php");
    
    ?>

    <div class="container-fluid py-3 px-3">
        <div class="row py-3">
            
            <div class="row">
                <h2>
                    Categories
                </h2>
                <table>
                    <thead>
                        
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $categories = getCategories();  

                        foreach ($categories as $id => $val):
                        ?>
                            <tr>
                                <th><?= $id?></th>
                                <th><?= $val?></th>
                                <th><a href="updateCategory.php?id=<?= $row['id']?>">Update</a></th>
                                <th><a href="delete.php?id=<?= $row['id']?>">Delete</a></th>
                                
                            </tr>
                        <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">
            <button type="button"><a href="newCategory.php">New Category</a></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>