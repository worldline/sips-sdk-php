<?php
namespace Worldline\Sips\Common\Field;

class ShoppingCartItem extends \Worldline\Sips\Common\Field
{

    protected $productName;
    protected $productDescription;
    protected $productCode;
    protected $productSKU;
    protected $productUnitAmount;
    protected $productQuantity;
    protected $productTaxRate;
    protected $productUnitTaxAmount;
    protected $productCategory;
    protected $productTaxCategory;

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function getProductSKU()
    {
        return $this->productSKU;
    }

    public function getProductUnitAmount()
    {
        return $this->productUnitAmount;
    }

    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    public function getProductTaxRate()
    {
        return $this->productTaxRate;
    }

    public function getProductUnitTaxAmount()
    {
        return $this->productUnitTaxAmount;
    }

    public function getProductCategory()
    {
        return $this->productCategory;
    }

    public function getProductTaxCategory()
    {
        return $this->productTaxCategory;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function setProductSKU($productSKU)
    {
        $this->productSKU = $productSKU;
        return $this;
    }

    public function setProductUnitAmount($productUnitAmount)
    {
        $this->productUnitAmount = $productUnitAmount;
        return $this;
    }

    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;
        return $this;
    }

    public function setProductTaxRate($productTaxRate)
    {
        $this->productTaxRate = $productTaxRate;
        return $this;
    }

    public function setProductUnitTaxAmount($productUnitTaxAmount)
    {
        $this->productUnitTaxAmount = $productUnitTaxAmount;
        return $this;
    }

    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    public function setProductTaxCategory($productTaxCategory)
    {
        $this->productTaxCategory = $productTaxCategory;
        return $this;
    }
}
