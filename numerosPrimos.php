<?php

$n = isset($_POST['number']) ? $_POST['number'] : null;
$flag = isset($n) ? true : false;
function getPrimeNumbers ($n)
{
    $n = intval($n);
   
    for ($i = 2; $i <= $n; $i++) {
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
            }
        }
    }
    return $isPrime;

    
}

$primeNumber = getPrimeNumbers($n);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
</head>

<body>
    <div style="margin: 10px auto; padding: 1rem; background-color: #444; width: 40%; box-sizing: border-box; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); color: #fff;">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" style="width:100%; box-sizing: border-box;">
            <label for="number" style="display:block; margin-bottom:8px; font-weight:bold;">Number:</label>
            <input type="number" name="number" id="number" min="0" placeholder="Insert a number" style="width: 100%; padding: 10px; border-radius: 5px; border: none; margin-bottom: 10px; font-size: 1rem; box-sizing: border-box;">
            <button type="submit" style="width: 100%; padding: 10px; border-radius: 5px; border: none; background-color: #2196f3; color: #fff; font-size: 1rem; cursor: pointer;">Evaluar</button>
        </form>
    </div>
    <?php if ($flag): ?>
        <div style="margin: 10px auto; padding: 1rem; background-color: green; width: 40%; box-sizing: border-box; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); color: #fff;">
            <p><?= ($primeNumber)? 'Es primo' : 'No es primo'; ?></p>
        </div>
    <?php endif; ?>
</body>

</html>