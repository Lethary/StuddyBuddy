<?php
// Sécurité : un "secret" partagé avec GitHub (configuré dans le webhook)
$secret = "Juliana060706"; 

// Vérifie la signature envoyée par GitHub
$payload = file_get_contents('php://input');
$headers = getallheaders();

if (!isset($headers['X-Hub-Signature-256'])) {
    http_response_code(403);
    exit('Signature manquante');
}

$signature = 'sha256=' . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($signature, $headers['X-Hub-Signature-256'])) {
    http_response_code(403);
    exit('Signature invalide');
}

// Déploiement
$repoPath = "/home/nayi1538/studdy.boudetk.fr/"; // chemin vers ton site
$commands = [
    "cd $repoPath",
    "git reset --hard",       // remet au propre (évite fichiers modifiés)
    "git pull origin main",   // récupère la dernière version (branche main)
];

$output = "";
foreach ($commands as $command) {
    $result = shell_exec($command . ' 2>&1');
    $output .= "\n> $command\n$result\n";
}

// Affiche le résultat
echo "<pre>Déploiement terminé :\n$output</pre>";
