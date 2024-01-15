<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>Titre</title>
    <link rel="stylesheet" href="moduleEvaluation.css"/>
    <script src="moduleEvaluation.js"></script>

</head>

<body>
<header>
    <h1 id="themeFete">Les années Folles</h1>
    <button id="nouvellePage" onclick="displayExplanations()">en savoir +</button>
    <p id="cache">Cette frénésie et cette soif de vivre des années folles passent
         par la musique, il faut se préparer à une soirée endiablé.
    </p>
    <h2 id="organisatrice">Gaïa THOMAS</h2>

</header>

<main>
    <p id="paragraphe1">Je vous invite à venir fêter mon anniversaire
    </p>
    <p id="paragraphe2">
        le 30 Juillet 2024 à 20h à la 
        <a id="salle"
        href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/">salle des fêtes</a>.
    </p>
    

</main>
<form method="post" action="register.php" id="php">

    <input type="text" id="name" name="name" placeholder="Nom"/>

    <input type="number" id="number" name="number"  placeholder="Nombre"/>

    <button id="comm" type="submit" >Envoyer</button>
</form>


<img src="annfolles.jpg"/>

</body>

</html>
