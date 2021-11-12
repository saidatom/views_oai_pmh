<?php

namespace Drupal\views_oai_pmh\Service;

use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory as PsrHttpFactorySymfony;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 *
 */
class PsrHttpFactory {

  /**
   *
   */
  public function createDiactorosFactory(RequestStack $stack) {
    $psr17Factory = new Psr17Factory();
    $request = new PsrHttpFactorySymfony($psr17Factory, $psr17Factory, $psr17Factory, $psr17Factory);

    return $request->createRequest($stack->getCurrentRequest());
  }

}
