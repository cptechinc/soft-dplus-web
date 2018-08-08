<?php

/**
 * Initialization file for template files
 *
 * This file is automatically included as a result of $config->prependTemplateFile
 * option specified in your /site/config.php.
 *
 * You can initialize anything you want to here. In the case of this beginner profile,
 * we are using it just to include another file with shared functions.
 *
 */

include_once("./_func.php"); // include our shared functions
include_once("./_dbfunc.php");
include_once($config->paths->vendor."cptechinc/dplus-processwire/vendor/autoload.php");
include_once($config->paths->vendor."cptechinc/dplus-base/vendor/autoload.php");
include_once($config->paths->vendor."cptechinc/dplus-processwire/src/ContactLeads.class.php");
$appconfig = $pages->get('/config/');

$config->styles->append(hash_templatefile('styles/main.css'));
$config->styles->append(hash_templatefile('styles/bootstrap.min.css'));
$config->styles->append(hash_templatefile('styles/bootstrap-grid.min.css'));
$config->styles->append(hash_templatefile('styles/bootstrap-reboot.min.css'));

$config->scripts->append(hash_templatefile('scripts/main.js'));
$config->scripts->append(hash_templatefile('scripts/bootstrap.bundle.min.js'));
$config->scripts->append(hash_templatefile('scripts/bootstrap.min.js'));
$config->scripts->append(hash_templatefile('scripts/contact_me.js'));
$config->scripts->append(hash_templatefile('scripts/jqBootstrapValidation.js'));
