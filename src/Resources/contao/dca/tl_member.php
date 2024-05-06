<?php

 /* Extend the tl_user palettes */
foreach ($GLOBALS['TL_DCA']['tl_member']['palettes'] as $k => $v) {
    $GLOBALS['TL_DCA']['tl_member']['palettes'][$k] = str_replace('groups;', 'groups;{price_tier_legend},price_tier;', $v);
}

$GLOBALS['TL_DCA']['tl_member']['fields']['price_tier'] = array
(
    'sql'                     => "varchar(255) NOT NULL default ''",
    'inputType'               => 'text',
    'default'                 => '',
    'search'                  => true,
    'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
