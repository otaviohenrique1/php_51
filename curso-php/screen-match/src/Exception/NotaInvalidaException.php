<?php

namespace ScreenMatch\Exception;

use InvalidArgumentException;

class NotaInvalidaException extends InvalidArgumentException
{
  public function __construct() {
    parent::__construct('Nota precisa ser entre 0 e 10');
  }
}
