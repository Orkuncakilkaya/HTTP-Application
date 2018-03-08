<?php

namespace Fabs\Component\Http\Definition;

use Fabs\Component\DependencyInjection\Definition;
use Fabs\Component\Http\ResourceProviderInterface;

class ResourceProviderDefinition extends Definition
{
    protected final function getAssertType()
    {
        return ResourceProviderInterface::class;
    }
}
