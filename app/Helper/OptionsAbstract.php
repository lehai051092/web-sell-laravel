<?php
declare(strict_types=1);

namespace App\Helper;

abstract class OptionsAbstract
{
    abstract protected function optionArray($request);
}
