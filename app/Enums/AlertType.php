<?php

namespace App\Enums;

use App\Traits\StatusTrait;
use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum as Enum;

class AlertType extends Enum implements LocalizedEnum
{
    use StatusTrait;

    public const SUCCESS = 'success';

    public const DANGER = 'danger';

    public const ERROR = 'error';
}
