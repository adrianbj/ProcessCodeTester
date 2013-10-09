<?php
/**
 * ProcessWire Code Tester template file
 *
 * ProcessCodeTester is an admin module to help test your code
 * and explore the data and properties within pages.
 *
 * THIS FILE NEEDS TO BE MOVED TO YOUR SITE'S TEMPLATES FOLDER
 *
 * There is only one required line in this file - all the rest can be edited as needed - see below
 *
 * @copyright Copyright (c) 2013, Adrian Jones
 *
 */


include 'head.inc';

/***************************************************************************************************
* These lines are required - you can edit the rest of this template as needed to match the structure of your site
* For example, you may prefer using a single file approach like main.inc at the end, instead of the head.inc and foot.inc files
* Change the name of the $out variable as required, if you use something else in your main.inc file
*/
$out = '';
ob_start();
include $config->paths->files . ($config->pagefileSecure ? $config->pagefileSecurePathPrefix : null) . $pages->get("name=code-tester, template=code_tester, include=all")->id . '/code_tester_code.php';
if($page->id != $pages->get("name=code-tester, template=code_tester, include=all")->id) $session->redirect($page->url);
$out .= ob_get_clean();
/***************************************************************************************************/

$out .= "<h2>Your code was successfully run</h2><p>Depending on what the code was meant to do, this may be the only output you'll see on this page.</p>";
echo $out;

include 'foot.inc';