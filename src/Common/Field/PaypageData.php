<?php

namespace Worldline\Sips\Common\Field;


class PaypageData extends Field
{
    protected $bypassReceiptPage;

    /**
     * @return bool|null
     */
    public function getBypassReceiptPage(): ?bool
    {
        if ($this->bypassReceiptPage == "true") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param bool $bypassReceiptPage
     * @return PaypageData
     */
    public function setBypassReceiptPage(bool $bypassReceiptPage): PaypageData
    {
        if ($bypassReceiptPage) {
            $this->bypassReceiptPage = "true";
        } else {
            $this->bypassReceiptPage = "false";
        }
        return $this;
    }

}
