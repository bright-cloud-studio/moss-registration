<?php

 /* Extend the tl_user palettes */
foreach ($GLOBALS['TL_DCA']['tl_member']['palettes'] as $k => $v) {
    $GLOBALS['TL_DCA']['tl_member']['palettes'][$k] = str_replace('groups;', 'groups;{price_tier_legend},price_tier;', $v);
}

$GLOBALS['TL_DCA']['tl_member']['fields']['address_1'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['address_2'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);





$GLOBALS['TL_DCA']['tl_member']['fields']['type_of_practitioner'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'                => 'checkbox',
    'options_callback'  => function ()
        {
            return [
                'option_1' => 'Option One',
                'option_2' => 'Option Two',
                'option_3' => 'Option Three',
            ];
        },
    'eval'                     => array('feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                      => "varchar(32) NOT NULL default ''"
);
