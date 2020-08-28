<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsArticlesV2Response StructType
 * @subpackage Structs
 */
class GetLubricantsArticlesV2Response extends AbstractStructBase
{
    /**
     * The getLubricantsArticlesV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLubricantGroupArticlesV2[]
     */
    public $getLubricantsArticlesV2Return;
    /**
     * Constructor method for getLubricantsArticlesV2Response
     * @uses GetLubricantsArticlesV2Response::setGetLubricantsArticlesV2Return()
     * @param \StructType\ExtLubricantGroupArticlesV2[] $getLubricantsArticlesV2Return
     */
    public function __construct(array $getLubricantsArticlesV2Return = array())
    {
        $this
            ->setGetLubricantsArticlesV2Return($getLubricantsArticlesV2Return);
    }
    /**
     * Get getLubricantsArticlesV2Return value
     * @return \StructType\ExtLubricantGroupArticlesV2[]|null
     */
    public function getGetLubricantsArticlesV2Return()
    {
        return $this->getLubricantsArticlesV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLubricantsArticlesV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLubricantsArticlesV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLubricantsArticlesV2ReturnForArrayConstraintsFromSetGetLubricantsArticlesV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLubricantsArticlesV2ResponseGetLubricantsArticlesV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getLubricantsArticlesV2ResponseGetLubricantsArticlesV2ReturnItem instanceof \StructType\ExtLubricantGroupArticlesV2) {
                $invalidValues[] = is_object($getLubricantsArticlesV2ResponseGetLubricantsArticlesV2ReturnItem) ? get_class($getLubricantsArticlesV2ResponseGetLubricantsArticlesV2ReturnItem) : sprintf('%s(%s)', gettype($getLubricantsArticlesV2ResponseGetLubricantsArticlesV2ReturnItem), var_export($getLubricantsArticlesV2ResponseGetLubricantsArticlesV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getLubricantsArticlesV2Return property can only contain items of type \StructType\ExtLubricantGroupArticlesV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getLubricantsArticlesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupArticlesV2[] $getLubricantsArticlesV2Return
     * @return \StructType\GetLubricantsArticlesV2Response
     */
    public function setGetLubricantsArticlesV2Return(array $getLubricantsArticlesV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getLubricantsArticlesV2ReturnArrayErrorMessage = self::validateGetLubricantsArticlesV2ReturnForArrayConstraintsFromSetGetLubricantsArticlesV2Return($getLubricantsArticlesV2Return))) {
            throw new \InvalidArgumentException($getLubricantsArticlesV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getLubricantsArticlesV2Return = $getLubricantsArticlesV2Return;
        return $this;
    }
    /**
     * Add item to getLubricantsArticlesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupArticlesV2 $item
     * @return \StructType\GetLubricantsArticlesV2Response
     */
    public function addToGetLubricantsArticlesV2Return(\StructType\ExtLubricantGroupArticlesV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLubricantGroupArticlesV2) {
            throw new \InvalidArgumentException(sprintf('The getLubricantsArticlesV2Return property can only contain items of type \StructType\ExtLubricantGroupArticlesV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getLubricantsArticlesV2Return[] = $item;
        return $this;
    }
}
