<?php

namespace Worldline\Sips\Common\Field;


/**
 * Class Field
 * @package Worldline\Sips\Common\Field
 */
class Field
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null) {
                $array[$key] = $value;
            }
        }
        ksort($array);
        return $array;
    }
}
