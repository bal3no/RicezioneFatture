<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ricevi ServiceType
 * @subpackage Services
 */
class Ricevi extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RiceviFatture
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdIConMetadati_Type $parametersIn
     * @return \StructType\RispostaRiceviFatture_Type|bool
     */
    public function RiceviFatture(\StructType\FileSdIConMetadati_Type $parametersIn)
    {
        try {
            $this->setResult($this->getSoapClient()->RiceviFatture($parametersIn));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RispostaRiceviFatture_Type
     */
    public function getResult()
    {
        return parent::getResult();
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
