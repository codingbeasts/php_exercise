<?php $title= 'homepage'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../php.ico" type="image/x-icon">
    <title><?= isset($title) ? $title : 'PHP Course Learning'; ?></title>
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>
    <body class="py-5 px-4 bg-dark bg-opacity-75">
        <div class="bg-secondary-subtle bg-opacity-25 rounded-3 shadow-lg d-grid h-100 overflow-y-scroll" style="place-items:center;">
            <div class="container">
