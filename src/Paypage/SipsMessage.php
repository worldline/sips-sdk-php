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
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value != null && $key != "serviceUrl" && $key != "paymentMeanBrandList") {
                if (is_int($value) || is_string($value)) {
                    $array[$key] = $value;
                } else {
                    $array[$key] = $value->toArray();
                }
            } elseif ($key == "paymentMeanBrandList" && !is_null($value)) {
                $array[$key] = $value;
            }
        }
        ksort($array);

        return $array;
    }
}