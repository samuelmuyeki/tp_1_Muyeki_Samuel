<!DOCTYPE html>
<html>
<head>
    <title>Résultat de la Validation</title>
</head>
<body>
    <?php
    include("function.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $motDePasseSaisi = $_POST["motDePasse"];
        $resultat = validerMotDePasse($motDePasseSaisi);

        echo "<h1>Résultat de la Validation</h1>";
        echo "<p>$resultat</p>";
    }
    ?>
</body>
</html>
