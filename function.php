<?php
// Fonction de validation du mot de passe
function validerMotDePasse($motDePasseSaisi) {
    $motDePasseValide = "MotDePasseValide123"; // Mot de passe valide
    $salt = "BCA 4321@"; // Sel statique

    // Vérifier la longueur du mot de passe
    if (strlen($motDePasseSaisi) < 6 || strlen($motDePasseSaisi) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    $motDePasseConcatene = $motDePasseSaisi . $salt;
    $motDePasseChiffre = hash("sha256", $motDePasseConcatene);

    // Comparer le mot de passe saisi au mot de passe valide (après ajout du sel)
    if ($motDePasseChiffre === hash("sha256", $motDePasseValide . $salt)) {
        return "Le mot de passe est correct";
    } else {
        return "Le mot de passe est incorrect";
    }
}
?>
