<?php

namespace SDICoop\RicezioneFatture\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rispostaSdINotificaEsito_Type StructType
 * @subpackage Structs
 */
class RispostaSdINotificaEsito_Type extends AbstractStructBase
{
    /**
     * The Esito
     * @var string
     */
    public $Esito;
    /**
     * The ScartoEsito
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \SDICoop\RicezioneFatture\StructType\FileSdIBase_Type
     */
    public $ScartoEsito;
    /**
     * Constructor method for rispostaSdINotificaEsito_Type
     * @uses RispostaSdINotificaEsito_Type::setEsito()
     * @uses RispostaSdINotificaEsito_Type::setScartoEsito()
     * @param string $esito
     * @param \SDICoop\RicezioneFatture\StructType\FileSdIBase_Type $scartoEsito
     */
    public function __construct($esito = null, \SDICoop\RicezioneFatture\StructType\FileSdIBase_Type $scartoEsito = null)
    {
        $this
            ->setEsito($esito)
            ->setScartoEsito($scartoEsito);
    }
    /**
     * Get Esito value
     * @return string|null
     */
    public function getEsito()
    {
        return $this->Esito;
    }
    /**
     * Set Esito value
     * @uses \SDICoop\RicezioneFatture\EnumType\EsitoNotifica_Type::valueIsValid()
     * @uses \SDICoop\RicezioneFatture\EnumType\EsitoNotifica_Type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $esito
     * @return \SDICoop\RicezioneFatture\StructType\RispostaSdINotificaEsito_Type
     */
    public function setEsito($esito = null)
    {
        // validation for constraint: enumeration
        if (!\SDICoop\RicezioneFatture\EnumType\EsitoNotifica_Type::valueIsValid($esito)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $esito, implode(', ', \SDICoop\RicezioneFatture\EnumType\EsitoNotifica_Type::getValidValues())), __LINE__);
        }
        $this->Esito = $esito;
        return $this;
    }
    /**
     * Get ScartoEsito value
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIBase_Type|null
     */
    public function getScartoEsito()
    {
        return $this->ScartoEsito;
    }
    /**
     * Set ScartoEsito value
     * @param \SDICoop\RicezioneFatture\StructType\FileSdIBase_Type $scartoEsito
     * @return \SDICoop\RicezioneFatture\StructType\RispostaSdINotificaEsito_Type
     */
    public function setScartoEsito(\SDICoop\RicezioneFatture\StructType\FileSdIBase_Type $scartoEsito = null)
    {
        $this->ScartoEsito = $scartoEsito;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SDICoop\RicezioneFatture\StructType\RispostaSdINotificaEsito_Type
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
