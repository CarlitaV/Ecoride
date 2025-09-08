<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ASSET/CSS/styles.css"
</head>

<body>
    <!--Ce fichier va contenir toutes les bases de mes pages 
    afin d'inclure au centre les elements de chaques pages-->
    <?php include 'navbar.php'; ?>

    <main>
        <!--Ici que le contenu de la page appeller sera inséré-->
        <?php include $fichier_a_inclure;?>
    </main>

    <?php include 'footer.php'; ?>

    
</body>
</html>












