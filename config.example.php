<?php

/**
 * CrowdmapID Configuration
 *
 * @package    CrowdmapID
 * @author     Ushahidi Team <team@ushahidi.com>
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL)
 */

if(!defined('LOADED_SAFELY')) die('You cannot access this file directly.');

// Enable for troubleshooting. Disable for improved performance.
define(    'CFG_DEBUG_ENV',  true );

// A large, randomized string of characters to salt your passwords with.
define(         'CFG_SALT',  '' );

// Identity of your installation.
define(         'CFG_NAME',  'YourID' );
define(          'CFG_URL',  'http://yourdomain.com' );
define(    'CFG_MAIL_FROM',  'You <you@yourdomain.com>' );

// Memcached connectivity.
define(    'CFG_MEMCACHED',  '127.0.0.1' );

// Database connectivity.
define(     'CFG_SQL_HOST',  '127.0.0.1' );
define(     'CFG_SQL_USER',  'root' );
define( 'CFG_SQL_PASSWORD',  'root' );
define( 'CFG_SQL_DATABASE',  'riverid' );

// How long an API hit should count against an app's cap.
define('CFG_RATELIMIT_SEC',  3600 );

// How long before an emailed token expires.
define('CFG_TOKEN_EXPIRES',  172800 );

// How long before a user session expires.
define('CFG_USER_SESSION_EXPIRES',  86400 );

// Use the Sendgrid.com API to send mail?
define(  'CFG_USE_SENDGRID',  false );
define( 'CFG_SENDGRID_USER',  '' );
define(  'CFG_SENDGRID_KEY',  '' );

// Enable Twilio API for phone/SMS methods:
define('CFG_TWILIO_NUMBER',  '' );
define(    'CFG_TWILIO_ID',  '' );
define( 'CFG_TWILIO_TOKEN',  '' );

// If you're going to use the optional Yubikey plugin, uncomment these.
// These can be generated at https://upgrade.yubico.com/getapikey/
//define('YUBIKEY_CLIENT_ID', 0);
//define('YUBIKEY_CLIENT_KEY', '');
