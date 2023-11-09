<?php
// Import all config changes.
echo "NOT Importing configuration from yml files...\n";
echo "NOT Import of configuration complete.\n";
//Clear all cache
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";