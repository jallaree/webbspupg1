<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="tables">
    <table> <tr>
    <?php
    $five = 5; 
    for ($i = 1;$i<11;$i++){
        $result = $five * $i;

        echo "<tr>
            <td>$five X $i=</td> <td>$result</td>
        </tr>";
    }
    
    ?>
    </tr>
    </table>
    <table> <tr>
    <?php
    $ten = 10; 
    for ($i = 1;$i<11;$i++){
        $result = $ten * $i;

        echo "<tr>
            <td>$ten X $i=</td> <td>$result</td>
        </tr>";
    }
    

    ?>
    </tr>
    </table>
    <table> <tr>
    <?php
    $fifteen = 15; 
    for ($i = 1;$i<11;$i++){
        $result = $fifteen * $i;

        echo "<tr>
            <td>$fifteen X $i=</td> <td>$result</td>
        </tr>";
    }
    
    ?>
    </tr>
    </table>
    </div>
</body>
</html>