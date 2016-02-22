<?php

namespace Revision6\HomeCanonical\Helper;

class CanonicalBase
{

    public function addHomeCanonical(
        \Database_Result $objPage,
        \Database_Result $objLayout,
        \PageRegular $objPageRegular
    ) {

        if ($objPage->enable_canonical_base) {
            $GLOBALS['TL_HEAD'][] = '<link rel="canonical" href="' . \Environment::get('base') . '"/>';
        }
    }
}