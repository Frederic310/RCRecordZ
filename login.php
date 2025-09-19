    <?php
    // Afficher un message de retour si passé en session
    session_start();
    if (isset($_SESSION['message'])) {
      echo "<p style='color:red'>" . $_SESSION['message'] . "</p>";
      unset($_SESSION['message']); // éviter répétition
    }
  ?>






<?php
session_start();

// Si c'est la première tentative, on initialise
if (!isset($_SESSION['essaie'])) {
    $_SESSION['essaie'] = 3;
}

// Identifiants corrects (exemple fixe)
$mail_user = "rcrecordZ310@gmail.com";
$pass_user = "2013"; // en vrai, il faudrait hacher le mot de passe !

// Récupérer données du formulaire
$mail = $_POST['mail_user'] ?? '';
$pass = $_POST['pass_user'] ?? '';

if ($_SESSION['essaie'] <= 0) {
    $_SESSION['message'] = "Trop de tentatives, réinitialisez votre mot de passe.";
    header("Location: home.html");
    exit;
}

if ($mail === $mail_user && $pass === $pass_user) {
    $_SESSION['message'] = "Bienvenue $mail !";
    $_SESSION['essaie'] = 3; // reset en cas de succès
    // Ici tu peux rediriger vers une page protégée
    header("Location: home.html");
    exit;
} else {
    $_SESSION['essaie']--; // décrémentation
    if ($_SESSION['essaie'] > 0) {
        $_SESSION['message'] = "ID ou mot de passe incorrect. Tentatives restantes : " . $_SESSION['essaie'];
    } else {
        $_SESSION['message'] = "Trop de tentatives, réinitialisez votre mot de passe.";
    }
    header("Location: home.html");
    exit;
}
