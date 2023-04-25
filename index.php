<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moldova</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php
$xml = simplexml_load_file("menu.xml") or die("Error: No se pudo cargar el archivo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moldavia</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<style>
  body {
    background-image: url('./img/fondo7.jpg');
  }
</style>
<body>
<img src="./img/moldovanul.png" alt="Logo del restaurante">
    <h1>Entrantes</h1>
    <ul>
        <?php foreach($xml->entrada as $entrada): ?>
            <li>
                <h3><?php echo $entrada->nombre ?></h3>
                <p><?php echo $entrada->descripcion ?></p>
                <img src="<?php echo $entrada->imagen ?>" alt="<?php echo $entrada->nombre ?>" />
                <p><strong>Precio: <?php echo $entrada->precio ?></strong>€ <?php echo $entrada->content ?> </p>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Platos principales</h1>
    <ul>
        <?php foreach($xml->plato as $plato): ?>
            <li>
                <h3><?php echo $plato->nombre ?></h3>
                <p><?php echo $plato->descripcion ?></p>
                <img src="<?php echo $plato->imagen ?>" alt="<?php echo $plato->nombre ?>" />
                <p><strong>Precio: <?php echo $plato->precio ?></strong>€ <?php echo $plato->content ?> </p>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Postres</h1>
    <ul>
        <?php foreach($xml->postre as $postre): ?>
            <li>
                <h3><?php echo $postre->nombre ?></h3>
                <p><?php echo $postre->descripcion ?></p>
                <img src="<?php echo $postre->imagen ?>" alt="<?php echo $postre->nombre ?>" />
                <p><strong>Precio: <?php echo $postre->precio ?></strong>€ <?php echo $postre->content ?> </p>
            </li>
        <?php endforeach; ?>
    </ul>

<h1>Bebidas</h1>
    <ul>
        <?php foreach($xml->bebida as $bebida): ?>
            <li>
                <h3><?php echo $bebida->nombre ?></h3>
                <p><?php echo $bebida->descripcion ?></p>
                <img src="<?php echo $bebida->imagen ?>" alt="<?php echo $bebida->nombre ?>" />
                <p><strong>Precio: <?php echo $bebida->precio ?></strong>€</p>
            </li>
        <?php endforeach; ?>
    </ul>

<div id="klk">
    <p><b>Trigo: 🌾 | Lactosa: 🥛 | Frutos secos: 🥜 | Mariscos: 🦐 | Huevo: 🥚 | Verduras: 🥬 | Frutas: 🍑 | Carne: 🍖</b></p>
</div>
</body>
</html>