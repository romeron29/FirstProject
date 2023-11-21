<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source</title>
</head>
<body>
    
<?php 
    include ("../inc/navBar.php");
    include ("../utils/functions.php");

    ?>

    <div class="container-fluid py-3 px-3">
        <div class="row py-3">
            
            <div class="row">
                <h2>
                    Sources
                </h2>
                <h3>
                    <?php ?>
                </h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $sources = getSources();  
                        
                        foreach ($sources as $source):
                            $id = $source['id'];
                            $name = $source['name'];
                            $category = $source['category'];
                        ?>
                            <tr>
                                <th><?= $id?></th>
                                <th><?=  $name?></th>
                                <th><?=  $category?></th>
                                <th><a href="updateSource.php?id=<?= $id?>">Update</a></th>
                                <th><a href="../logic/dSource.php?id=<?= $id?>">Delete</a></th>
                            </tr>
                        <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">
            <button type="button"><a href="newSource.php">New Source</a></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>
</html>