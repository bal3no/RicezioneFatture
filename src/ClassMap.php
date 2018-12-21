<?php

namespace SDICoop/RicezioneFatture;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'fileSdIBase_Type' => '\\SDICoop/RicezioneFatture\\StructType\\FileSdIBase_Type',
            'fileSdI_Type' => '\\SDICoop/RicezioneFatture\\StructType\\FileSdI_Type',
            'fileSdIConMetadati_Type' => '\\SDICoop/RicezioneFatture\\StructType\\FileSdIConMetadati_Type',
            'rispostaRiceviFatture_Type' => '\\SDICoop/RicezioneFatture\\StructType\\RispostaRiceviFatture_Type',
            'rispostaSdINotificaEsito_Type' => '\\SDICoop/RicezioneFatture\\StructType\\RispostaSdINotificaEsito_Type',
        );
    }
}
