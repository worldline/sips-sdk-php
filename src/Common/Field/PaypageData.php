<?php

namespace Worldline\Sips\Common\Field;


class PaypageData
{
    private $bypassReceiptPage;

    /**
     * @return bool
     */
    public function getBypassReceiptPage(): bool
    {
        if ($this->bypassReceiptPage == "true") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param mixed $bypassReceiptPage
     */
    public function setBypassReceiptPage(bool $bypassReceiptPage)
    {
        if ($bypassReceiptPage) {
            $this->bypassReceiptPage = "true";
        } else {
            $this->bypassReceiptPage = "false";
        }
    }

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
