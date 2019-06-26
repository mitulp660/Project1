<?php

class File {

//define three properties in bellow
    public  $fileName;// property path
    private $fileHeader;
    private $data = [];

    public function __construct($fileName = '')//this will check the file path if it exist
    {

        if($fileName !='')
        {

            $this->fileName = $fileName;
        }
    }

    public function read()
    {

        $file = fopen($this->fileName,'r');// this will read the file 'r'
        while(!feof($file))
        {

            $row = fgetcsv($file,0,',');//file argument to check

            if(!$this->fileHeader)
            {

                $this->fileHeader = $row;

            }
            else
            {

                $this->data[] = array_combine($this->fileHeader,$row);//setting array for the keys and value
            }
        }

        fclose($file);//closing the file

        return $this->data;
    }


}






?>