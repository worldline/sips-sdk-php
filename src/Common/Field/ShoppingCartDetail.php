<?php
namespace Worldline\Sips\Common\Field;

class ShoppingCartDetail extends \Worldline\Sips\Common\Field
{

    protected $discountAmount;              // 
    protected $mainProduct;                 // 
    protected $mainProductCategoryList;     // 
    protected $shoppingCartItemList;        //  List of container shoppingCartItem . See the Containers part
    protected $shoppingCartTotalAmount;     // 
    protected $shoppingCartTotalQuantity;   // 
    protected $shoppingCartTotalTaxAmount;  // 

    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    public function getMainProduct()
    {
        return $this->mainProduct;
    }

    public function getMainProductCategoryList()
    {
        return $this->mainProductCategoryList;
    }

    public function getShoppingCartItemList()
    {
        return $this->shoppingCartItemList;
    }

    public function getShoppingCartTotalAmount()
    {
        return $this->shoppingCartTotalAmount;
    }

    public function getShoppingCartTotalQuantity()
    {
        return $this->shoppingCartTotalQuantity;
    }

    public function getShoppingCartTotalTaxAmount()
    {
        return $this->shoppingCartTotalTaxAmount;
    }

    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    public function setMainProduct($mainProduct)
    {
        $this->mainProduct = $mainProduct;
        return $this;
    }

    public function setMainProductCategoryList($mainProductCategoryList)
    {
        $this->mainProductCategoryList = $mainProductCategoryList;
        return $this;
    }

    public function setShoppingCartItemList($shoppingCartItemList)
    {
        $this->shoppingCartItemList = $shoppingCartItemList;
        return $this;
    }

    public function setShoppingCartTotalAmount($shoppingCartTotalAmount)
    {
        $this->shoppingCartTotalAmount = $shoppingCartTotalAmount;
        return $this;
    }

    public function setShoppingCartTotalQuantity($shoppingCartTotalQuantity)
    {
        $this->shoppingCartTotalQuantity = $shoppingCartTotalQuantity;
        return $this;
    }

    public function setShoppingCartTotalTaxAmount($shoppingCartTotalTaxAmount)
    {
        $this->shoppingCartTotalTaxAmount = $shoppingCartTotalTaxAmount;
        return $this;
    }


}
