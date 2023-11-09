<?php

echo "Quicksilver Debugging Output";
echo "\n\n";
echo "\n========= START PAYLOAD ===========\n";
print_r($_POST);
echo "\n========== END PAYLOAD ============\n";

echo "\n------- START ENVIRONMENT ---------\n";
$env = $_ENV;
foreach ($env as $key => $value) {
  if (preg_match('#(PASSWORD|SALT|AUTH|SECURE|NONCE|LOGGED_IN)#', $key)) {
    $env[$key] = '[REDACTED]';
  }
}
//print_r($env);
echo "\n-------- END ENVIRONMENT ----------\n";

//chdir(getenv('HOME') . '/code');
chdir('/code');
print "\n====== Running 'composer update' ======\n\n";
passthru('composer update 2>&1');