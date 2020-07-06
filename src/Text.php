<?php

namespace GbiorczykHelloWorld;

/**
 * Class Text
 */
class Text
{
  /**
   * Returns example text
   */
  public function getText() {
    return __('Hello world!', 'gbiorczyk-hello-world');
  }
}