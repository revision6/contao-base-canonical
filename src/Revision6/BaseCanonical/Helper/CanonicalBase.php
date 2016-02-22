<?php

namespace Revision6\BaseCanonical\Helper;

class CanonicalBase
{
    public function addBaseCanonical(\PageModel $objPage)
    {
        if ($objPage->enable_canonical_base) {
            $GLOBALS['TL_HEAD'][] = '<link rel="canonical" href="' . \Environment::get('base') . '"/>';
        }
    }
}