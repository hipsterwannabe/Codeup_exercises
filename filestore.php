<?php

class Filestore {

    public $filename = '';

    function __construct($filename = '') 
    {
        // Sets $this->filename
        $this->filename = $filename;
    }

    /**
     * Returns array of lines in $this->filename
     */
    function read_lines()
    {
    	 //if (is_readable($givenFile) && filesize($givenFile) > 0){
            $filename = $givenFile;
            // $handle is pointer to file
            $handle = fopen($givenFile, 'r');
            // $contents is the actual list, contained in $givenFile, as a string
            $contents = fread($handle, filesize($givenFile));
            $contents = trim($contents);
            // exploding $contents into array $list
            $list = explode("\n", $contents);
            // closing file
            fclose($handle);
            //}
            // returning the $list array
            return $list;
    }

    /**
     * Writes each element in $array to a new line in $this->filename
     */
    function write_lines($array)
    {
    	//taking $todo_list array and saving to $filename
            //$filecontents is what will be written to file
            if (is_writable($filename)){
            $filecontents = implode(PHP_EOL, $todo_list);
            //opening $filename
            $handle = fopen($filename, 'w');
            fwrite($handle, $filecontents);
            fclose($handle);
            }
    }

    /**
     * Reads contents of csv $this->filename, returns an array
     */
    function read_csv()
    {
    	$handle = fopen($this->filename, 'r');
			$address_book = [];
			while (!feof($handle)){
				$row = fgetcsv($handle);
				if (is_array($row)) {
					$address_book[] = $row;
				}
			}
			fclose($handle);
			return $address_book;	
    }

    /**
     * Writes contents of $array to csv $this->filename
     */
    function write_csv($array)
    {
    	if (is_writeable($this->filename)) {
				$handle = fopen($this->filename, 'w');
				foreach ($addresses_array as $fields) {
					fputcsv($handle, $fields);
				}
				fclose($handle);
			}
    }

}