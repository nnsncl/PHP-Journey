<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <?php
    $stringVariable = 'foo';
    $intergerVariable = 14;
    $booleanVariable = true;
    $floatVariable = 1.88;
    $nullVariable = null;

    echo $stringVariable.': '.gettype($stringVariable).'<br>';
    echo $intergerVariable.': '.gettype($stringVariable).'<br>';
    echo $booleanVariable.': '.gettype($booleanVariable).'<br>';
    echo $floatVariable.': '.gettype($floatVariable).'<br>';
    echo $nullVariable.': '.gettype($nullVariable).'<br>';

    echo '<br>';

    var_dump(
        $stringVariable.'<br>',
        $intergerVariable.'<br>',
        $booleanVariable.'<br>',
        $floatVariable.'<br>',
        $nullVariable.'<br>'
    ).'<br>';

    echo '<br>';

    $stringVariable = false;
    var_dump($stringVariable);
    is_string($stringVariable);
    isset($stringVariable);

    echo '<br>';
    
    // const
    define ('PI', 3.14);
    echo '<br>'.(PI).'<br>';
    echo (SORT_ASC).'<br>';
    echo (PHP_INT_MAX).'<br>';
    
    ?>
</body>

</html>