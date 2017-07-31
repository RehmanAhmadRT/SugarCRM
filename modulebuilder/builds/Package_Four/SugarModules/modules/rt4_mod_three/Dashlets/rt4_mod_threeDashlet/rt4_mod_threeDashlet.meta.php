<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
global $app_strings;

$dashletMeta['rt4_mod_threeDashlet'] = array('module'		=> 'rt4_mod_three',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', 'rt4_mod_three'), 
                                          'description' => 'A customizable view into rt4_mod_three',
                                          'icon'        => 'icon_rt4_mod_three_32.gif',
                                          'category'    => 'Module Views');