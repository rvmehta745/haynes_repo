<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralArticlesByComponentNumberResponse StructType
 * @subpackage Structs
 */
class GetGeneralArticlesByComponentNumberResponse extends AbstractStructBase
{
    /**
     * The getGeneralArticlesByComponentNumberReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtComponentGenrats[]
     */
    public $getGeneralArticlesByComponentNumberReturn;
    /**
     * Constructor method for getGeneralArticlesByComponentNumberResponse
     * @uses GetGeneralArticlesByComponentNumberResponse::setGetGeneralArticlesByComponentNumberReturn()
     * @param \StructType\ExtComponentGenrats[] $getGeneralArticlesByComponentNumberReturn
     */
    public function __construct(array $getGeneralArticlesByComponentNumberReturn = array())
    {
        $this
            ->setGetGeneralArticlesByComponentNumberReturn($getGeneralArticlesByComponentNumberReturn);
    }
    /**
     * Get getGeneralArticlesByComponentNumberReturn value
     * @return \StructType\ExtComponentGenrats[]|null
     */
    public function getGetGeneralArticlesByComponentNumberReturn()
    {
        return $this->getGeneralArticlesByComponentNumberReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetGeneralArticlesByComponentNumberReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetGeneralArticlesByComponentNumberReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetGeneralArticlesByComponentNumberReturnForArrayConstraintsFromSetGetGeneralArticlesByComponentNumberReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGeneralArticlesByComponentNumberResponseGetGeneralArticlesByComponentNumberReturnItem) {
            // validation for constraint: itemType
            if (!$getGeneralArticlesByComponentNumberResponseGetGeneralArticlesByComponentNumberReturnItem instanceof \StructType\ExtComponentGenrats) {
                $invalidValues[] = is_object($getGeneralArticlesByComponentNumberResponseGetGeneralArticlesByComponentNumberReturnItem) ? get_class($getGeneralArticlesByComponentNumberResponseGetGeneralArticlesByComponentNumberReturnItem) : sprintf('%s(%s)', gettype($getGeneralArticlesByComponentNumberResponseGetGeneralArticlesByComponentNumberReturnItem), var_export($getGeneralArticlesByComponentNumberResponseGetGeneralArticlesByComponentNumberReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getGeneralArticlesByComponentNumberReturn property can only contain items of type \StructType\ExtComponentGenrats, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getGeneralArticlesByComponentNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtComponentGenrats[] $getGeneralArticlesByComponentNumberReturn
     * @return \StructType\GetGeneralArticlesByComponentNumberResponse
     */
    public function setGetGeneralArticlesByComponentNumberReturn(array $getGeneralArticlesByComponentNumberReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getGeneralArticlesByComponentNumberReturnArrayErrorMessage = self::validateGetGeneralArticlesByComponentNumberReturnForArrayConstraintsFromSetGetGeneralArticlesByComponentNumberReturn($getGeneralArticlesByComponentNumberReturn))) {
            throw new \InvalidArgumentException($getGeneralArticlesByComponentNumberReturnArrayErrorMessage, __LINE__);
        }
        $this->getGeneralArticlesByComponentNumberReturn = $getGeneralArticlesByComponentNumberReturn;
        return $this;
    }
    /**
     * Add item to getGeneralArticlesByComponentNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtComponentGenrats $item
     * @return \StructType\GetGeneralArticlesByComponentNumberResponse
     */
    public function addToGetGeneralArticlesByComponentNumberReturn(\StructType\ExtComponentGenrats $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtComponentGenrats) {
            throw new \InvalidArgumentException(sprintf('The getGeneralArticlesByComponentNumberReturn property can only contain items of type \StructType\ExtComponentGenrats, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getGeneralArticlesByComponentNumberReturn[] = $item;
        return $this;
    }
}
