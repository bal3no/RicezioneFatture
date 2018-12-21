<?php

namespace SDICoop/RicezioneFatture\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Notifica ServiceType
 * @subpackage Services
 */
class Notifica extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named NotificaDecorrenzaTermini
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SDICoop/RicezioneFatture\StructType\FileSdI_Type $parametersNotifica
     * @return void|bool
     */
    public function NotificaDecorrenzaTermini(\SDICoop/RicezioneFatture\StructType\FileSdI_Type $parametersNotifica)
    {
        try {
            $this->setResult($this->getSoapClient()->NotificaDecorrenzaTermini($parametersNotifica));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void
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
