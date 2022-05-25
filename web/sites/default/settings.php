<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Include the UO-specific settings file.
 *
 * n.b. The settings.uo.php file makes some changes
 *      that affect all environments that this site
 *      exists in and are global to websites that are
 *      within the University of Oregon's Drupal Cloud
 *      Hosting service.  Always include this file,
 *      even in a local development environment, to
 *      ensure the site settings remain consistent.
 */
$uo_settings = __DIR__ . "/settings.uo.php";
if (file_exists($uo_settings)) {
  include $uo_settings;
}

/**
 * If there is a custom settings file, then include it.
 * This file can be used for site-specific settings
 * that will affect all environments and local
 * development.
 */
$custom_settings = __DIR__ . "/settings.custom.php";
if (file_exists($custom_settings)) {
  include $custom_settings;
}

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
