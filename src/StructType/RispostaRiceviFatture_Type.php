<?php

namespace SDICoop/RicezioneFatture\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rispostaRiceviFatture_Type StructType
 * @subpackage Structs
 */
class RispostaRiceviFatture_Type extends AbstractStructBase
{
    /**
     * The Esito
     * @var string
     */
    public $Esito;
    /**
     * Constructor method for rispostaRiceviFatture_Type
     * @uses RispostaRiceviFatture_Type::setEsito()
     * @param string $esito
     */
    public function __construct($esito = null)
    {
        $this
            ->setEsito($esito);
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
     * @uses \SDICoop/RicezioneFatture\EnumType\EsitoRicezione_Type::valueIsValid()
     * @uses \SDICoop/RicezioneFatture\EnumType\EsitoRicezione_Type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $esito
     * @return \SDICoop/RicezioneFatture\StructType\RispostaRiceviFatture_Type
     */
    public function setEsito($esito = null)
    {
        // validation for constraint: enumeration
        if (!\SDICoop/RicezioneFatture\EnumType\EsitoRicezione_Type::valueIsValid($esito)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $esito, implode(', ', \SDICoop/RicezioneFatture\EnumType\EsitoRicezione_Type::getValidValues())), __LINE__);
        }
        $this->Esito = $esito;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SDICoop/RicezioneFatture\StructType\RispostaRiceviFatture_Type
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
