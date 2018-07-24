<?php

//获取用户的IP地址
function getIP()
{
    if (isset($_SERVER))
    {
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } 
        else if (isset($_SERVER["HTTP_CLIENT_IP"])) 
        {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } 
        else 
        {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } 
    else 
    {
        if (getenv("HTTP_X_FORWARDED_FOR"))
        {
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } 
        else if (getenv("HTTP_CLIENT_IP")) 
        {
            $realip = getenv("HTTP_CLIENT_IP");
        } 
        else 
        {
            $realip = getenv("REMOTE_ADDR");
        } 
    }
    return $realip;
}

function exportExcel($expTitle,$expCellName,$expTableData,$remark = '')
{
    $xlsTitle = iconv('gb2312', 'utf-8', $expTitle);//文件名称
    //$fileName = $_SESSION['loginAccount'].date('YmdHis').$expTitle;//or $xlsTitle 文件名称可根据自己情况设定
    $fileName = $expTitle.date('Y-m-d H:i:s',time()) ;
    $cellNum = count($expCellName);
    $dataNum = count($expTableData);
    vendor("PHPExcel.PHPExcel");
    $objPHPExcel = new PHPExcel();
    $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');

    $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum].'1');//合并单元格
    if (empty($remark)) {
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s')); 
    } else {
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.$remark); 
    }

    for($i=0;$i<$cellNum;$i++){
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', ' '.$expCellName[$i][1]); 
      } 
      // Miscellaneous glyphs, UTF-8   
    for($i=0;$i<$dataNum;$i++){
      for($j=0;$j<$cellNum;$j++){
        $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3),' '.$expTableData[$i][$expCellName[$j][0]]);
        //$objPHPExcel->getActiveSheet()->getColumnDimension($cellName[$j])->setAutoSize(true);  
        $objPHPExcel->getActiveSheet()->getColumnDimension($cellName[$j])->setWidth(20);  
      }             
    }  
    ob_end_clean();
    header('content-Type:application/vnd.ms-excel;charset=utf-8');
    header('pragma:public');
    header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
    header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
    $objWriter->save('php://output'); 
    exit;   
}
