<?php
$templateFile = "/data/generated.txt";

if (file_exists($templateFile)) {
    $content = file_get_contents($templateFile);
    echo "<h1>Vygenerovaný súbor:</h1><pre>$content</pre>";
} else {
    echo "Súbor neexistuje.";
}
?>
