<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 07/02/19
 * Time: 21:39
 */

namespace Worldline\Sips\Paypage;


class SipsMessage extends \Worldline\Sips\SipsRequest
{
    /**
     *
     * @param string $prefixKey Prefix to add in the beginning of each key
     * @return array
     */
    public function toArray($prefixKey = ''): array
    {
        $array    = [];
        foreach ($this as $key => $value) {
            if (is_null($value) || $key === 'serviceUrl') {
                // null values are excluded from the array export
                continue;
            }
            if ($value instanceof SipsRequest) {
                // Every value in the sub object must be prefixed by the current key
                $array = array_merge($array, $value->toArray($key));
            } else {
                $array[$prefixKey . $key] = $value;
            }
        }
        ksort($array);

        return $array;
    }
}