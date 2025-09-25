<?php

$repoPath = "/home/nayi1538/studdy.boudetk.fr";
$gitPath = "/usr/bin/git"; // chemin complet vers git (souvent /usr/bin/git)

$command = "cd $repoPath && $gitPath pull origin main 2>&1";
$output = shell_exec($command);

echo "<pre>$output</pre>";

?>