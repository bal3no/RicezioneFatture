<?php

namespace SDICoop\RicezioneFatture\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fileSdIConMetadati_Type StructType
 * @subpackage Structs
 */
class FileSdIConMetadati_Type extends AbstractStructBase
{
    /**
     * The IdentificativoSdI
     * Meta informations extracted from the WSDL
     * - totalDigits: 12
     * @var int
     */
    public $IdentificativoSdI;
    /**
     * The NomeFile
     * Meta informations extracted from the WSDL
     * - pattern: [a-zA-Z0-9_\.]{9,50}
     * @var string
     */
    public $NomeFile;
    /**
     * The File
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: *[:slash:]*
     * @var string
     */
    public $File;
    /**
     * The NomeFileMetadati
     * Meta informations extracted from the WSDL
     * - pattern: [a-zA-Z0-9_\.]{9,50}
     * @var string
     */
    public $NomeFileMetadati;
    /**
     * The Metadati
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: *[:slash:]*
     * @var string
     */
    public $Metadati;
    /**
     * Constructor method for fileSdIConMetadati_Type
     * @uses FileSdIConMetadati_Type::setIdentificativoSdI()
     * @uses FileSdIConMetadati_Type::setNomeFile()
     * @uses FileSdIConMetadati_Type::setFile()
     * @uses FileSdIConMetadati_Type::setNomeFileMetadati()
     * @uses FileSdIConMetadati_Type::setMetadati()
     * @param int $identificativoSdI
     * @param string $nomeFile
     * @param string $file
     * @param string $nomeFileMetadati
     * @param string $metadati
     */
    public function __construct($identificativoSdI = null, $nomeFile = null, $file = null, $nomeFileMetadati = null, $metadati = null)
    {
        $this
            ->setIdentificativoSdI($identificativoSdI)
            ->setNomeFile($nomeFile)
            ->setFile($file)
            ->setNomeFileMetadati($nomeFileMetadati)
            ->setMetadati($metadati);
    }
    /**
     * Get IdentificativoSdI value
     * @return int|null
     */
    public function getIdentificativoSdI()
    {
        return $this->IdentificativoSdI;
    }
    /**
     * Set IdentificativoSdI value
     * @param int $identificativoSdI
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type
     */
    public function setIdentificativoSdI($identificativoSdI = null)
    {
        // validation for constraint: totalDigits
        if (is_float($identificativoSdI) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $identificativoSdI)) !== 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 12 digits, "%d" given', strlen(substr($identificativoSdI, strpos($identificativoSdI, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($identificativoSdI) && !is_numeric($identificativoSdI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($identificativoSdI)), __LINE__);
        }
        $this->IdentificativoSdI = $identificativoSdI;
        return $this;
    }
    /**
     * Get NomeFile value
     * @return string|null
     */
    public function getNomeFile()
    {
        return $this->NomeFile;
    }
    /**
     * Set NomeFile value
     * @param string $nomeFile
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type
     */
    public function setNomeFile($nomeFile = null)
    {
        // validation for constraint: pattern
        if (is_scalar($nomeFile) && !preg_match('/[a-zA-Z0-9_\\.]{9,50}/', $nomeFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9_\.]{9,50}", "%s" given', var_export($nomeFile, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($nomeFile) && !is_string($nomeFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nomeFile)), __LINE__);
        }
        $this->NomeFile = $nomeFile;
        return $this;
    }
    /**
     * Get File value
     * @return string|null
     */
    public function getFile()
    {
        return $this->File;
    }
    /**
     * Set File value
     * @param string $file
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type
     */
    public function setFile($file = null)
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($file)), __LINE__);
        }
        $this->File = $file;
        return $this;
    }
    /**
     * Get NomeFileMetadati value
     * @return string|null
     */
    public function getNomeFileMetadati()
    {
        return $this->NomeFileMetadati;
    }
    /**
     * Set NomeFileMetadati value
     * @param string $nomeFileMetadati
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type
     */
    public function setNomeFileMetadati($nomeFileMetadati = null)
    {
        // validation for constraint: pattern
        if (is_scalar($nomeFileMetadati) && !preg_match('/[a-zA-Z0-9_\\.]{9,50}/', $nomeFileMetadati)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9_\.]{9,50}", "%s" given', var_export($nomeFileMetadati, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($nomeFileMetadati) && !is_string($nomeFileMetadati)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nomeFileMetadati)), __LINE__);
        }
        $this->NomeFileMetadati = $nomeFileMetadati;
        return $this;
    }
    /**
     * Get Metadati value
     * @return string|null
     */
    public function getMetadati()
    {
        return $this->Metadati;
    }
    /**
     * Set Metadati value
     * @param string $metadati
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type
     */
    public function setMetadati($metadati = null)
    {
        // validation for constraint: string
        if (!is_null($metadati) && !is_string($metadati)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($metadati)), __LINE__);
        }
        $this->Metadati = $metadati;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SDICoop\RicezioneFatture\StructType\FileSdIConMetadati_Type
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
