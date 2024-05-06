<?php

 /* Extend the tl_user palettes */
foreach ($GLOBALS['TL_DCA']['tl_member']['palettes'] as $k => $v) {
    $GLOBALS['TL_DCA']['tl_member']['palettes'][$k] = str_replace('groups;', 'groups;{price_tier_legend},price_tier;', $v);
}

$GLOBALS['TL_DCA']['tl_member']['fields']['price_tier'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
