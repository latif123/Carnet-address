<?php

namespace RAFA\carnetAddressBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RAFAcarnetAddressBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
