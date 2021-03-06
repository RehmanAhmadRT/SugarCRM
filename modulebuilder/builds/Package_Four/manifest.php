<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'rt4',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Package_Four',
  'published_date' => '2017-07-28 05:07:51',
  'type' => 'module',
  'version' => 1501218471,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Package_Four',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'rt4_mod_three',
      'class' => 'rt4_mod_three',
      'path' => 'modules/rt4_mod_three/rt4_mod_three.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'rt4_mod_two',
      'class' => 'rt4_mod_two',
      'path' => 'modules/rt4_mod_two/rt4_mod_two.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'rt4_mod_one',
      'class' => 'rt4_mod_one',
      'path' => 'modules/rt4_mod_one/rt4_mod_one.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rt4_mod_three',
      'to' => 'modules/rt4_mod_three',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rt4_mod_two',
      'to' => 'modules/rt4_mod_two',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rt4_mod_one',
      'to' => 'modules/rt4_mod_one',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);