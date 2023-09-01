<?php

if (isset($titulo)) {
} else {
    $titulo = "Título padrão";
}
// $titulo = isset($titulo) ? $titulo : "Título padrão";
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $titulo;  ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- <link rel="stylesheet" href="assets/css/reset.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <?php
    include __DIR__ . '/menu.php';
    ?>