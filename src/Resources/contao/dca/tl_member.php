<?php

 /* Extend the tl_user palettes */
foreach ($GLOBALS['TL_DCA']['tl_member']['palettes'] as $k => $v) {
    $GLOBALS['TL_DCA']['tl_member']['palettes'][$k] = str_replace('groups;', 'groups;{price_tier_legend},price_tier;', $v);
}

// Text Fields
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
    'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);



// Textarea Fields
$GLOBALS['TL_DCA']['tl_member']['fields']['specialties_or_interest'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['how_hear_about_moss'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['best_time_to_call'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['further_comments'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);




// Checkbox Fields
$GLOBALS['TL_DCA']['tl_member']['fields']['type_of_practitioner'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'checkbox',
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
$GLOBALS['TL_DCA']['tl_member']['fields']['terms_of_use'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'checkbox',
    'options_callback'  => function ()
        {
            return [
                'agree' => 'I agree to the Moss Nutrition <a class="testing">Terms of Use</a>',
            ];
        },
    'eval'                     => array('feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                      => "varchar(32) NOT NULL default ''"
);




// Radio Fields
$GLOBALS['TL_DCA']['tl_member']['fields']['verification_of_licensure'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'radio',
    'options_callback'  => function ()
        {
            return [
                'upload' => 'Upload verification now',
                'email' => 'I will email it to professionals@mossnutrition.com',
                'snail_mail' => 'I will mail it to Moss Nutrition, 380 Russell Street, Suite 114, Hadley MA 01035 USA',
                'fax' => 'I will FAX it to 800-626-0108 (413-587-0331 local/international)',
            ];
        },
    'eval'                     => array('feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                      => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['reason_for_wanting_account'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
    'inputType'               => 'radio',
    'options_callback'  => function ()
        {
            return [
                'resale' => 'Resale - Purchase products for my patients',
                'personal' => 'Personal - Purchase products for myself',
                'education' => 'Education - Access Moss Nutrition educational materials',
                'relationships' => 'Relationships - Access to clinical & technical support/consults with Dr. Moss and team',
                'patient_orders' => 'Patient Orders - Enable my patients to order from Moss Nutrition directly',
            ];
        },
    'eval'                     => array('feEditable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
    'sql'                      => "varchar(32) NOT NULL default ''"
);

// Add fields to tl_user
$GLOBALS['TL_DCA']['tl_member']['fields']['upload_documents'] = [
    'exclude' => true,
    'inputType' => 'fineUploader',
    'eval' => [
        'multiple'          => true,
        'storeFile'         => true,
        'uploadFolder'      => 'files/practitioners',
        'useHomeDir'        => true,
        'doNotOverwrite'    => true,
        'feEditable'        => true,
        'feGroup'           => 'personal',
        'uploadButtonTitle' => 'Fire It Up'
    ],
    'sql' => "blob NULL"
];


