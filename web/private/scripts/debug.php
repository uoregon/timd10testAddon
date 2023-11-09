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
print_r($env);
echo "\n-------- END ENVIRONMENT ----------\n";

passthru('terminus site:info uo-ssem-ssem --fields=upstream 2>&1');
passthru('terminus site:info '.$env['site_id'].' --fields=upstream 2>&1');
passthru('terminus site:info '.$env['PANTHEON_SITE_NAME'].' --fields=upstream 2>&1');
passthru('composer about 2>&1');

//ttimtestmergeupstream