<?php
// WARNING: The contents of this file are auto-generated.



$viewdefs['base']['layout']['subpanel']  = array (
    'components' => array (
        array (
            'view' => 'panel-top',
        )
        array (
            'view' => 'subpanel-list',
        ),
        array (
            'view' => 'list-bottom',
        ),
    ),
    'span' => 12,
    'last_state' => array(
        'id' => 'subpanel'
    ),
);



$viewdefs['three_cee']['base']['layout']['subpanels'] = array (
  'components' => array (
      array (
          'layout' => 'subpanel',
          'label' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
          'context' => array (
              'link' => 'documents',
          ),
      ),
      array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTACTS_SUBPANEL_TITLE',
          'context' => array (
              'link' => 'contacts',
          ),
      ),
      array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_SUBPANEL_TITLE',
          'context' => array (
              'link' => 'accounts',
          ),
      ),
      array (
          'layout' => 'subpanel',
          'label' => 'LBL_CASES_SUBPANEL_TITLE',
          'context' => array (
              'link' => 'cases',
          ),
      ),
  ),
  'type' => 'subpanels',
  'span' => 12,
);
