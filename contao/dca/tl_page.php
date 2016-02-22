<?php

// Palettes
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] .= ';{canonical_legend},enable_canonical_base';

// Fields
$GLOBALS['TL_DCA']['tl_page']['fields']['enable_canonical_base'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['enable_canonical_base'],
    'inputType' => 'checkbox',
    'eval'      => array
    (
        'tl_class'       => 'w50'
    ),
    'sql'       => "char(1) NOT NULL default ''"
);