<?php

    namespace App\Classes\Files;

    class FileXml extends File implements Filechange
    {
        private $xml_data;

        public function __construct(string $path, $mode)
        {
            parent::__construct($path, $mode);
            $this->xml_data = new \SimpleXMLElement('<?xml version="1.0"?><data></data>');
        }
        public function read()
        {
            
        }

        public function write(array $data = [])
        {
            $this->array_to_xml($data);

            $result = $this->xml_data->asXML($this->path);
        }


        private function array_to_xml($data)
        {
            foreach( $data as $key => $value ) {
                if( is_numeric($key) ){
                    $key = 'item'.$key; //dealing with <0/>..<n/> issues
                }
                if( is_array($value) ) {
                    $subnode = $this->xml_data->addChild($key);
                    array_to_xml($value, $subnode);
                } else {
                    $this->xml_data->addChild("$key",htmlspecialchars("$value"));
                }
             }
        }
    }