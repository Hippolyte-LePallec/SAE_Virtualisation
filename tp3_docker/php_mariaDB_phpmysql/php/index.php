<?php
$host = 'bd'; // Nom du service MySQL dans docker-compose.yml
$user = getenv('database__connection__user');  // Récupérer la variable d'environnement
$password = getenv('database__connection__password');  // Récupérer la variable d'environnement
$db = getenv('database__name');  // Récupérer la variable d'environnement

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    echo "Erreur de connexion à MySQL: " . $conn->connect_error . "<br />";
} else {
    echo "Connexion à MySQL ok<br />";
    mysqli_close($conn);
}
?>
