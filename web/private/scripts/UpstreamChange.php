<?php
// Import all config changes.
echo "NOT Importing configuration from yml files...\n";
echo "NOT Import of configuration complete.\n";
//Clear all cache
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";
chdir(getenv('HOME') . '/code');

print "\n====== Running 'composer update' ======\n\n";
passthru('composer update 2>&1');