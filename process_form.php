<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php include_once("funciones_generales.php"); ?>
<?php errorLog("Name: ".$_POST['name']." Subject: ".$_POST['subject']."Email: ".$_POST['email']); ?>
    <h1>Processed Form!</h1>
    <h2>Result</h2>
    <p><?php print_r($_POST) ?></p>
<?php if (!isset($_POST['name']) || ($_POST['name'] == "")) { ?>
    <h2>Falto Nombre</h2>
<?php } elseif (!isset($_POST['subject']) || ($_POST['subject'] == "")) { ?>
    <h2>Falto Sujeto</h2>
<?php } elseif (!isset($_POST['email']) || ($_POST['email'] == "")) { ?>
    <h2>falto mail</h2>
<?php } else { ?>
    <h2>Todos los campos obligatorios completos</h2>
<?php } ?>
</body>
</html>
