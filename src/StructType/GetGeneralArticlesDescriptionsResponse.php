<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralArticlesDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetGeneralArticlesDescriptionsResponse extends AbstractStructBase
{
    /**
     * The getGeneralArticlesDescriptionsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtGeneralArticleDescription[]
     */
    public $getGeneralArticlesDescriptionsReturn;
    /**
     * Constructor method for getGeneralArticlesDescriptionsResponse
     * @uses GetGeneralArticlesDescriptionsResponse::setGetGeneralArticlesDescriptionsReturn()
     * @param \StructType\ExtGeneralArticleDescription[] $getGeneralArticlesDescriptionsReturn
     */
    public function __construct(array $getGeneralArticlesDescriptionsReturn = array())
    {
        $this
            ->setGetGeneralArticlesDescriptionsReturn($getGeneralArticlesDescriptionsReturn);
    }
    /**
     * Get getGeneralArticlesDescriptionsReturn value
     * @return \StructType\ExtGeneralArticleDescription[]|null
     */
    public function getGetGeneralArticlesDescriptionsReturn()
    {
        return $this->getGeneralArticlesDescriptionsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetGeneralArticlesDescriptionsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetGeneralArticlesDescriptionsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetGeneralArticlesDescriptionsReturnForArrayConstraintsFromSetGetGeneralArticlesDescriptionsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGeneralArticlesDescriptionsResponseGetGeneralArticlesDescriptionsReturnItem) {
            // validation for constraint: itemType
            if (!$getGeneralArticlesDescriptionsResponseGetGeneralArticlesDescriptionsReturnItem instanceof \StructType\ExtGeneralArticleDescription) {
                $invalidValues[] = is_object($getGeneralArticlesDescriptionsResponseGetGeneralArticlesDescriptionsReturnItem) ? get_class($getGeneralArticlesDescriptionsResponseGetGeneralArticlesDescriptionsReturnItem) : sprintf('%s(%s)', gettype($getGeneralArticlesDescriptionsResponseGetGeneralArticlesDescriptionsReturnItem), var_export($getGeneralArticlesDescriptionsResponseGetGeneralArticlesDescriptionsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getGeneralArticlesDescriptionsReturn property can only contain items of type \StructType\ExtGeneralArticleDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getGeneralArticlesDescriptionsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtGeneralArticleDescription[] $getGeneralArticlesDescriptionsReturn
     * @return \StructType\GetGeneralArticlesDescriptionsResponse
     */
    public function setGetGeneralArticlesDescriptionsReturn(array $getGeneralArticlesDescriptionsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getGeneralArticlesDescriptionsReturnArrayErrorMessage = self::validateGetGeneralArticlesDescriptionsReturnForArrayConstraintsFromSetGetGeneralArticlesDescriptionsReturn($getGeneralArticlesDescriptionsReturn))) {
            throw new \InvalidArgumentException($getGeneralArticlesDescriptionsReturnArrayErrorMessage, __LINE__);
        }
        $this->getGeneralArticlesDescriptionsReturn = $getGeneralArticlesDescriptionsReturn;
        return $this;
    }
    /**
     * Add item to getGeneralArticlesDescriptionsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtGeneralArticleDescription $item
     * @return \StructType\GetGeneralArticlesDescriptionsResponse
     */
    public function addToGetGeneralArticlesDescriptionsReturn(\StructType\ExtGeneralArticleDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtGeneralArticleDescription) {
            throw new \InvalidArgumentException(sprintf('The getGeneralArticlesDescriptionsReturn property can only contain items of type \StructType\ExtGeneralArticleDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getGeneralArticlesDescriptionsReturn[] = $item;
        return $this;
    }
}
