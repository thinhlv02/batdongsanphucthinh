<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
/** add by thinhlv */
/** add by thinhlv */
/** add by thinhlv */

$hook['pre_controller'] = array(
    'class' => 'MyClass',
    'function' => 'Myfunction',
    'filename' => 'Myclass.php',
    'filepath' => 'hooks',
    'params' => array('beer', 'wine', 'snacks')
);