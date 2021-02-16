<?php

namespace Worldline\Sips\Common\Field;


/**
 * Class Field
 * @package Worldline\Sips\Common\Field
 */
class Field
{

    /**
     * @return Field
     */
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null) {
                if ($value instanceof Field) {
                    $array[$key] = $value->toArray();
                } elseif (is_bool($value)) {
                    $array[$key] = ($value ? 'true' : 'false');
                } else {
                    $array[$key] = $value;
                }
            }
        }
        ksort($array);
        return $array;
    }
}
