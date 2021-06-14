<?php 
    require_once 'utils.php';    
    $categories = select_all_categories("food.csv");
    sort($categories);

    afficher_die(meta_data(select_all("food.csv")), "Toutes les colonnes.");
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
    <h1>Nutrition</h1>
    <form action="categorie.php" method="GET">
        <select name="cat" id="56" onchange="this.form.submit()">
            <?php foreach($categories as $cat){ ?>
            <option value="<?php echo $cat ?>"><?php echo $cat ?></option>
            <?php } ?>
        </select>
    </form>
</body>
</html>
   