<?php
// require_once("FirePHP.class.php");
$jsonInit =  $_POST["init"];
//echo $jsonInit;

//$jsonInit = '{"test_accord_old.html":[649,108,104,114,108,133,117,105,111,114,458,157,134,131,148,187,159,104,144,278,148,225,227,170,97,121,193,121,187,129,114,150,182,400,121,197,106,711,148,122,155,421,315,172,107,117,125,155,111,175,97,175,135,175,145,136,133,108,138,96,123,96,171,124,92,112,169,236,122,98,452,143,132,190,165,94,96,323,132,193,108,177,121,130,133,130,96,149,96,170,367,165,165,101,144,137,129,142,172,124,618,168,156,159,96,163,165,134,100,169,162,149,103,187,151,152,131,153,198,122,125,150,98,130,195,164,193,153,168,154,106,170,101,141,129,150,147,94,127,119,120,130,152,265,121,156,100,271,123,150,394,101,101,173,96,133,134,171,141,191,99,125,124,137,153,124,187,140,162,111,142,112,217,109,165,205,105,199,129,135,124,157,191,202,186,214,118,115,159,268,116,150,152,125,303,170,141,187,215,186],"test_accord_new.html":[458,157,134,131,148,187,159,104,144,278,148,225,227,170,97,121,193,121,187,129,114,150,182,400,121,197,106,711,148,122,155,421,315,172,107,117,125,155,111,175,97,175,135,175,145,136,133,108,138,96,123,96,171,124,92,112,169,236,122,98,452,143,132,190,165,94,96,323,132,193,108,177,121,130,133,130,96,149,96,170,367,165,165,101,144,137,129,142,172,124,618,168,156,159,96,163,165,134,100,169,162,149,103,187,151,152,131,153,198,122,125,150,98,130,195,164,193,153,168,154,106,170,101,141,129,150,147,94,127,119,120,130,152,265,121,156,100,271,123,150,394,101,101,173,96,133,134,171,141,191,99,125,124,137,153,124,187,140,162,111,142,112,217,109,165,205,105,199,129,135,124,157,191,202,186,214,118,115,159,268,116,150,152,125,303,170,141,187,215,186,364,286,200,161,183,215,187,133,142,159]}';

$jsonEvent =  $_POST["event"];

echo "INIT: ";
echo $_POST["init"];
echo "EVENT: ";
echo $_POST["event"];

// $json = '{"a":1,"b":2,"c":3s,"d":4,"e":5}';
$init = json_decode($jsonInit, true);
//echo "<pre>";
//print_r($init);
//echo "</pre>";

$event = json_decode($jsonEvent, true);
//echo "<pre>";
//print_r($event);
//echo "</pre>";


/*
 *
 *		EXPORT TO EXCEL
 *
 */


// Error reporting
error_reporting(E_ALL);

// Include path 
//ini_set('include_path', ini_get('include_path').'Classes/');

// PHPExcel 
include 'Classes/PHPExcel.php';

// PHPExcel_Writer_Excel2007 
include 'Classes/PHPExcel/Writer/Excel2007.php';

// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();

// Set properties
//echo date('H:i:s') . " Set properties\n";
//$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
//$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
//$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
//$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
//$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");


// Add some data
echo date('H:i:s') . " Add some data\n";
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'OLD_init');
$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'NEW_init');
$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'OLD_event');
$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'NEW_event');

$indexToAlph = Array("A","B","C","D");

/*
 *	initial time
 */

$col = 0;
$row = 2;
foreach ($init as $doc => $values)
{	
	foreach ($values as $valueId => $value)
	{
		$objPHPExcel->getActiveSheet()->SetCellValue(''.$indexToAlph[$col].$row, $value);
		$row++;
	}
	$row = 2;
	$col++;
}


/*
 *	event time
 */

$col = 2;
$row = 2;
foreach ($event as $doc => $values)
{	
	foreach ($values as $valueId => $value)
	{
		$objPHPExcel->getActiveSheet()->SetCellValue(''.$indexToAlph[$col].$row, $value);
		$row++;
	}
	$row = 2;
	$col++;
}



// Rename sheet
echo date('H:i:s') . " Rename sheet\n";
$objPHPExcel->getActiveSheet()->setTitle('Results Accordion');

		
// Save Excel 2007 file
echo date('H:i:s') . " Write to Excel2007 format\n";
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

// Echo done
echo date('H:i:s') . " Done writing file.\r\n";



// var_dump(($temp->{'test_accord_old.html'}));
// echo($temp);

//$fp = fopen('results.json', 'w');
//fwrite($fp, json_encode($temp));
//fclose($fp);
//echo("HALLO!");

// echo("HI");
?>