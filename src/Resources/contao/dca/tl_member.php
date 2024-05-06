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
                'dr_of_chiropractic' => 'Doctor of Chiropractic',
                'licensed_acupuncturist' => 'Licensed Acupuncturist',
                'medical_doctor' => 'Medical Doctor',
                'masters_in_nutrition_field' => 'Master’s Degree in Nutrition-Related Field',
                'certified_nutritionist' => 'Certified Nutritionist',
                'dr_of_vet_medicine' => 'Doctor of Veterinary Medicine',
                'registered_dietitian' => 'Registered Dietitian',
                'cert_clinical_nutritionist' => 'Certified Clinical Nutritionist',
                'student' => 'Student',
                'licensed_dietitian' => 'Licensed Dietitian / Nutritionist',
                'dr_of_osteopathy' => 'Doctor of Osteopathy',
                'dr_of_philosophy' => 'Doctor of Philosophy in Nutrition-Related Field',
                'dr_of_naturopathy' => 'Doctor of Naturopathy',
                'other' => 'Other',
            ];
        },
    'eval'                     => array('feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                      => "varchar(32) NOT NULL default ''"
);
