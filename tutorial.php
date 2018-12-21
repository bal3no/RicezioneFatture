<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'RicezioneFatture_v1.0.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'RicezioneFatture_v1.0.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \SDICoop\RicezioneFatture\ClassMap::get(),
);
/**
 * Samples for Ricevi ServiceType
 */
$ricevi = new \SDICoop\RicezioneFatture\ServiceType\Ricevi($options);
/**
 * Sample call for RiceviFatture operation/method
 */
if ($ricevi->RiceviFatture(new \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type()) !== false) {
    print_r($ricevi->getResult());
} else {
    print_r($ricevi->getLastError());
}
/**
 * Samples for Notifica ServiceType
 */
$notifica = new \SDICoop\RicezioneFatture\ServiceType\Notifica($options);
/**
 * Sample call for NotificaDecorrenzaTermini operation/method
 */
if ($notifica->NotificaDecorrenzaTermini(new \SDICoop\RicezioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($notifica->getResult());
} else {
    print_r($notifica->getLastError());
}
