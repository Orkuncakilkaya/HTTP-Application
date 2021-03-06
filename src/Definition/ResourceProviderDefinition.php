<?php

namespace Fabstract\Component\Http\Definition;

use Fabstract\Component\DependencyInjection\Definition;
use Fabstract\Component\Http\ResourceProviderInterface;

class ResourceProviderDefinition extends Definition
{
    protected final function getAssertType()
    {
        return ResourceProviderInterface::class;
    }
}
