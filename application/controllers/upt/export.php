<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
excel ci  spout
*/
//load spout library
require_once APPPATH.'/third_party/spout/src/Spout/Autoloader/autoload.php';
//lets use the spout namespaces

use BOX\Spout\reader\ReaderFactory;
use Box\Spout\Common\Type;
  class Export extends CI_Controller {
    public function readExcelFile() {
      try {
        //Lokasi file excel
        $file_path = "C:\file_excel.xlsx";
        $reader = ReaderFactory::create(Type::XLSX); //set Type file xlsx
        $reader->open($file_path); //open the file
          echo "<pre>";
          $i = 0;
          /**
          * Sheets Iterator. Kali aja multiple sheets
          **/
          foreach ($reader->getSheetIterator() as $sheet) {
            //Rows iterator
            foreach ($sheet->getRowIterator() as $row) {
              print_r($row);
              ++$i;
            }
          }
          echo "<br> Total Rows : ".$i." <br>";
          $reader->close();
          echo "Peak memory:", (memory_get_peak_usage(true) / 1024 / 1024), " MB" ,"<br>";
      }
      catch (Exception $e) {
        echo $e->getMessage();
        exit;
      }
    }//end of function
  }//end of class
 ?>
