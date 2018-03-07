<?php

namespace Fabs\Component\Http;

use Fabs\Component\Router\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Injectable
 * @package Fabs\Component\Http
 *
 * @property Request request
 * @property Response response
 * @property Router router
 */
class Injectable extends \Fabs\Component\DependencyInjection\Injectable
{

}