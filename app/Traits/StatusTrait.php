<?php

namespace App\Traits;

trait StatusTrait
{
    public static function getOptions($value = false): array
    {
        $collect = collect(self::getInstances());

        if ($value && is_array($value)) {
            $collect = $collect->whereIn('value', $value);
        } elseif ($value && is_int($value)) {
            $collect = $collect->where('value', $value);
        }

        $data = [];
        foreach ($collect as $item) {
            if(!empty($item->value))
            {
                $data[$item->value] = $item->description;
            }
        }

        return $data;
    }
}
