<?php

namespace EnumType;

/**
 * This class stands for esitoNotifica_Type EnumType
 * @subpackage Enumerations
 */
class EsitoNotifica_Type
{
    /**
     * Constant for value 'ES00'
     * @return string 'ES00'
     */
    const VALUE_ES_00 = 'ES00';
    /**
     * Constant for value 'ES01'
     * @return string 'ES01'
     */
    const VALUE_ES_01 = 'ES01';
    /**
     * Constant for value 'ES02'
     * @return string 'ES02'
     */
    const VALUE_ES_02 = 'ES02';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ES_00
     * @uses self::VALUE_ES_01
     * @uses self::VALUE_ES_02
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ES_00,
            self::VALUE_ES_01,
            self::VALUE_ES_02,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
