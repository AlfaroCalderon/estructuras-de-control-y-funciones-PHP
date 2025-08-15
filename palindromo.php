<?php
include 'navbar.php';
$text = isset($_POST['text']) ? $_POST['text'] : null;
$flag = isset($text) ? true : false;
function getPalindromo ($text)
{  
    $text = trim($text);
    $text = strtolower($text);
    $text = str_replace(' ', '', $text);
    $text = preg_replace('/[^a-z0-9]+/i','', $text);
    $textArrayNormal = str_split($text);
    $textArrayReverse = array_reverse($textArrayNormal);
    $palindromoCounter = 0;

    for ($i = 0; $i < count($textArrayNormal); $i++){

        if( $textArrayNormal[$i] === $textArrayReverse[$i]){
            $palindromoCounter = $palindromoCounter + 1;
        }
    }

    if($palindromoCounter ===  count($textArrayNormal)){
        return true;
    }else{
        return false;
    }

    
}

$palindromo = getPalindromo($text);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>

<body>
    <div style="margin: 10px auto; padding: 1rem; background-color: #444; width: 40%; box-sizing: border-box; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); color: #fff;">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" style="width:100%; box-sizing: border-box;">
            <label for="text" style="display:block; margin-bottom:8px; font-weight:bold;">Texto:</label>
            <input type="text" name="text" id="text" min="0" placeholder="Insert a text" style="width: 100%; padding: 10px; border-radius: 5px; border: none; margin-bottom: 10px; font-size: 1rem; box-sizing: border-box;">
            <button type="submit" style="width: 100%; padding: 10px; border-radius: 5px; border: none; background-color: #2196f3; color: #fff; font-size: 1rem; cursor: pointer;">Evaluar</button>
        </form>
    </div>
    <?php if ($flag): ?>
        <div style="margin: 10px auto; padding: 1rem; background-color: green; width: 40%; box-sizing: border-box; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); color: #fff;">
            <p><?= ($palindromo)? 'Es palindromo' : 'No es palindromo' ; ?></p>
        </div>
    <?php endif; ?>
</body>

</html>