




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/secondStyle.css">
</head>
<body>
    <?php
    include("../inc/navAdmin.php");
    ?>
    
    <div class="container-fluid">

    <?php
        $feed_url = "https://feeds.feedburner.com/crhoy/wSjk"; // URL del feed RSS que deseas cargar.
        https://feeds.feedburner.com/crhoy/wSjk

        // Carga el feed RSS y crea un objeto SimpleXMLElement.
        $feed = simplexml_load_file($feed_url);

        if ($feed === false) {
            echo "No se pudo cargar el feed RSS.";
        } else {
            // Itera a través de las entradas (elementos <item>) del feed y muestra su contenido.
            $cont = 1;
            $last = 1;
            foreach ($feed->channel->item as $item) {
                
                $imagenes = [];
                foreach ($item->children('media', true)->content as $media) {
                    $imagenes[] = $media['url'];
                }
            

                // Mostrar las imágenes en el div si están disponibles
                foreach ($imagenes as $imagen) {
                    echo"<div>$imagen</div>";
                    echo "<img with = 200 src='$imagen' alt='Imagen noticia'>";
                }
                if($last==1){
                    echo "<div row>";
                    $last = 0;
                }
                if($cont < 3){
                    echo"<div col-sm-4 col-md-4 col-lg-4 col-xl-4>
                            <h2>{$item->title}</h2>
                            <h2>{$item->pubDate}</h2>
                            <p >{$item->description}</p>
                            
                            <p>Enlace: <a href='{$item->link}'>Leer más</a></p>
                        </div>";
                    $cont +=1;
                }
                else {
                    echo"<div col-sm-4 col-md-4 col-lg-4 col-xl-4>
                            <h2>{$item->title}</h2>
                            <h2>{$item->pubDate}</h2>
                            <p >{$item->description}</p>
                            <p>Enlace: <a href='{$item->link}'>Leer más</a></p>
                        </div>";
                    echo "</div>";
                    $cont = 1;
                    $last = 1;
                }
            

            }
        }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
