<?php

/**
 * @file
 * Contains \DrupalComposerManaged\ComposerScripts.
 *
 * Custom Composer scripts and implementations of Composer hooks.
 */

namespace UoDrupalComposer;

use Composer\IO\IOInterface;
use Composer\Script\Event;
use Composer\Util\Filesystem;
use Composer\Util\ProcessExecutor;

/**
 * Implementation for Composer scripts and Composer hooks.
 */
class UpstreamChange {

    public static function changeUpstream(Event $event) {
        chdir(getenv('HOME') . '/code');

        print "\n====== Running 'Tim composer require' ======\n\n";
        passthru("composer require 'drupal/pantheon_secrets:^1.0'  2>&1");
      }
}