<?php

namespace Tfone\Bundle\AccountViewDemoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TfoneAccountViewDemoBundle extends Bundle
{
    public function getParent()
    {
        return 'OroCRMAccountBundle';
    }
}
