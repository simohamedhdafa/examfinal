<?php 
    require_once 'utils.php';   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>détail categorie</h1>
    <?php 
        if(isset($_GET)){ // starts first if
            $cat = $_GET['cat'];
            echo "<h2>".$cat."</h2>";
            $sa = select_all("food.csv");
            $detail = detaille_categorie($sa, $cat);
    ?>
        <table border="1">
            <tr>
                <?php $cols = meta_data($sa); ?>
                <?php foreach($cols as $col){ ?>
                    <td><?php echo $col ?></td>
                <?php } ?>
            </tr>
            <?php foreach($detail as $desc){ ?>
            <tr>
                <?php foreach($desc as $col){ ?>
                <td><?php echo $col ?></td>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
    <?php } // ends the first if ?>
</body>
</html>