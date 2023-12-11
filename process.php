<?php

$paragraph = $_POST['paragraph'];
$censoredWord = $_POST['censoredWord'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    echo "<h2>Paragrafo originale</h2>";
    echo "<p>$paragraph</p>";
    echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

        
    $censoredParagraph = str_replace($censoredWord, '***', $paragraph);

    echo "<h2>Paragrafo censurato</h2>";
    echo "<p>$censoredParagraph</p>";
    echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri</p>";
    
?>  
    
</body>
</html>