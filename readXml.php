<?php

$feed_url = "https://feeds.feedburner.com/crhoy/wSjk"; // URL del feed RSS que deseas cargar.

// Carga el feed RSS y crea un objeto SimpleXMLElement.
$feed = simplexml_load_file($feed_url);

if ($feed === false) {
    echo "No se pudo cargar el feed RSS.";
} else {
    // Itera a través de las entradas (elementos <item>) del feed y muestra su contenido.
    foreach ($feed->channel->item as $item) {
        echo "<h2>{$item->title}</h2>";
        echo "<p>{$item->description}</p>";
        echo "<p>Enlace: <a href='{$item->link}'>Leer más</a></p>";
        echo "<hr>";
    }
}
?>