<?php

use Illuminate\Support\Carbon;

function getClass($class)
{
    return (new \ReflectionClass($class))->getShortName();
}

function getLowerClass($class)
{
    return strtolower(getClass($class));
}

function formatDate($value, $datetime = false)
{
    if ($datetime === false) {
        $format = 'd/m/Y';
    } elseif ($datetime === true) {
        $format = 'd/m/Y H:i:s';
    } else {
        $format = $datetime;
    }

    if (empty($value)) {
        return null;
    }

    if ($value instanceof Carbon) {
        $value = $value->format($format);
    } elseif (is_string($value)) {
        $value = Carbon::parse($value)->format($format);
    }

    return $value ?: null;
}
