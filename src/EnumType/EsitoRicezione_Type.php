<?php

namespace SDICoop\RicezioneFatture\EnumType;

/**
 * This class stands for esitoRicezione_Type EnumType
 * @subpackage Enumerations
 */
class EsitoRicezione_Type
{
    /**
     * Constant for value 'ER01'
     * @return string 'ER01'
     */
    const VALUE_ER_01 = 'ER01';
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
     * @uses self::VALUE_ER_01
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ER_01,
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
