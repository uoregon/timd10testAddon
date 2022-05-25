<?php

/**
 *  This is needed so that the logout redirection for SimpleSAMLphp isn't made to a
 *  non-standard port that is used in Pantheon's back-end.  See
 *
 *  https://pantheon.io/docs/server_name-and-server_port#set-server_port-correctly
 */
if (isset($_ENV['PANTHEON_ENVIRONMENT'])) {
  if (isset($_SERVER['HTTP_USER_AGENT_HTTPS']) && $_SERVER['HTTP_USER_AGENT_HTTPS'] === 'ON') {
    $_SERVER['SERVER_PORT'] = 443;
  }
  else {
    $_SERVER['SERVER_PORT'] = 80;
  }
}
