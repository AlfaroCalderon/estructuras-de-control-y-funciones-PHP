<?php
include 'navbar.php';
$n = isset($_POST['number']) ? $_POST['number'] : null;
$flag = isset($n) ? true : false;
function generarFibonacci($n)
{
    $n = intval($n);
    $fibonacci = [0, 1];

    if ($n <= 0) {
        return [];
    }

    if ($n === 1) {
        return [0];
    }

    for ($i = 0; $i < $n-2; $i++) {
        $next = $fibonacci[$i] + $fibonacci[$i + 1];
        array_push($fibonacci, $next);
    }


    return $fibonacci;
}

$fibonacci = generarFibonacci($n);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <div style="margin: 10px auto; padding: 1rem; background-color: #444; width: 40%; box-sizing: border-box; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); color: #fff;">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" style="width:100%; box-sizing: border-box;">
            <label for="number" style="display:block; margin-bottom:8px; font-weight:bold;">Number:</label>
            <input type="number" name="number" id="number" min="0" placeholder="Insert a number" style="width: 100%; padding: 10px; border-radius: 5px; border: none; margin-bottom: 10px; font-size: 1rem; box-sizing: border-box;">
            <button type="submit" style="width: 100%; padding: 10px; border-radius: 5px; border: none; background-color: #2196f3; color: #fff; font-size: 1rem; cursor: pointer;">Calcular</button>
        </form>
    </div>
    <?php if ($flag): ?>
        <div style="margin: 10px auto; padding: 1rem; background-color: green; width: 40%; box-sizing: border-box; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); color: #fff;">

            <ul>
                <?php foreach ($fibonacci as $key => $value): ?>
                    <li><?= $value ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</body>

</html>