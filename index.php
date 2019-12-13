<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet"> 
    <title>TO-DO LIST</title>
</head>
<body>
<?php include("contenu.php"); ?>  <!-- import fonction -->
    <div id="container">
        <header>
            <div id="title">
                <h1>TO DO</h1>
            </div>
            <h2>List</h2>
        </header>
        <hr>
        <section id="todo">
            <h3>To Do</h3>
            <div id="todo-area">
                <form action="formulaire.php" method="post">
                <!-- zone to do  -->
                <ul>
                    <?php add_task($url);?>
                </ul>
            <!-- bouton valider un todo -->
                <input type="submit" name="submit" value="Done"/>
                </form>
            </div>
            <h3>Archive</h3> 
            <div id="archive-area">
                <!-- zone archive -->
                <ul>
                    <?php add_archive($url);?>
                </ul>
            </div>
        </section>
        <section id="add-area">

            <h3>Add something to do (you fat ass)</h3>
            <form action="formulaire.php" method="post">
                <input type="text" name="to_do">
                <input type="submit" name="submit" value="Add"/>
            </form>
        </section>
    </div>
</body>
</html>