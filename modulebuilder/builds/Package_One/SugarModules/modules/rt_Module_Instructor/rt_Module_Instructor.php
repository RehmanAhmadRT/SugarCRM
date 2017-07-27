<?PHP
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
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/rt_Module_Instructor/rt_Module_Instructor_sugar.php');
class rt_Module_Instructor extends rt_Module_Instructor_sugar {

    /**
     * @deprecated Use __construct() instead
     */
    public function rt_Module_Instructor()
    {
        self::__construct();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
}