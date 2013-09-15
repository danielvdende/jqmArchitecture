<?php
$jsonInit =  $_POST["init"];

$jsonEvent =  $_POST["event"];

$userAgent = $_SERVER['HTTP_USER_AGENT'];

$init = json_decode($jsonInit, true);

$event = json_decode($jsonEvent, true);

$docName = $_POST['doc'];

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
// echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();

// Add some data
// echo date('H:i:s') . " Add some data\n";
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
$objPHPExcel->getActiveSheet()->setTitle('Results ' . $docName);
		
// Save Excel 2007 file
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
?>