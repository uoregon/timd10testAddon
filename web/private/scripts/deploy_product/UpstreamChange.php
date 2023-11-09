<?php
        chdir(getenv('HOME') . '/code');

        print "\n====== Running 'Tim composer require' ======\n\n";
        passthru("composer require 'drupal/pantheon_secrets:^1.0'  2>&1");
