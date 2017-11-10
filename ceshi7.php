<?php

require_once './phpexcel/PHPExcel.php';
$excel = new PHPExcel();
$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M');
//表头数组
$tableheader = array('简历序号','简历来源','姓名','性别','身份证','出生年月','学历','毕业院校','专业','毕业时间','籍贯','联系电话','执业情况');
//填充表头信息
for($i = 0;$i < count($tableheader);$i++) {
    $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
}
//设置居中
$excel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
//设置E列文本
$excel->getActiveSheet()->getStyle('E')->getNumberFormat()
    ->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);

$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(50);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(14);
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
$dbc=mysql_connect('localhost','root','root');
mysql_select_db('resume',$dbc);
mysql_query("SET NAMES 'utf8'");

$query="SELECT a.*,b.*,d.*,e.* FROM jibenxinxi a,study b,work1 d,ability e WHERE a.resume_id=b.resume_id AND b.resume_id=d.resume_id AND d.resume_id=e.resume_id";
if ($result=mysql_query($query,$dbc)){
    $i=2;
    while ($row=mysql_fetch_array($result)){
        if ($row['cengci1']==1){
            $row['cengci1']="中专";
        }elseif($row['cengci1']==2){
            $row['cengci1']="大专";
        }elseif($row['cengci1']==3){
            $row['cengci1']="本科";
        }elseif ($row['cengci1']==4){
            $row['cengci1']="硕士";
        }elseif($row['cengci1']==5){
            $row['cengci1']="博士";
        }

        if ($row['cengci2']==1){
            $row['cengci2']="中专";
        }elseif($row['cengci2']==2){
            $row['cengci2']="大专";
        }elseif($row['cengci2']==3){
            $row['cengci2']="本科";
        }elseif ($row['cengci2']==4){
            $row['cengci2']="硕士";
        }elseif($row['cengci2']==5){
            $row['cengci2']="博士";
        }

        if ($row['cengci3']==1){
            $row['cengci3']="中专";
        }elseif($row['cengci3']==2){
            $row['cengci3']="大专";
        }elseif($row['cengci3']==3){
            $row['cengci3']="本科";
        }elseif ($row['cengci3']==4){
            $row['cengci3']="硕士";
        }elseif($row['cengci3']==5){
            $row['cengci3']="博士";
        }


        $excel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i,$row['resume_id'])
            ->setCellValue('B'.$i,$row['laiyuan'])
            ->setCellValue('C'.$i,$row['xingming'])
            ->setCellValue('D'.$i,$row['xingbie'])
            ->setCellValue('E'.$i,$row['shenfenzheng'])
            ->setCellValue('F'.$i, $row['shengri'])
            ->setCellValue('G'.$i, $row['cengci1']."\r".$row['cengci2']."\r".$row['cengci3'])
            ->setCellValue('H'.$i, $row['school1']."\r".$row['school2']."\r".$row['school3'])
            ->setCellValue('I'.$i, $row['major1']."\r".$row['major2']."\r".$row['major3'])
            ->setCellValue('J'.$i, $row['endtime1']."\r".$row['endtime2']."\r".$row['endtime3'])
            ->setCellValue('K'.$i, $row['jiguan'])
            ->setCellValue('L'.$i, $row['dianhua'])
            ->setCellValue('M'.$i, $row['zhiyezige']);

    }




}
$excel->getActiveSheet()->setTitle('Simple');
$excel->setActiveSheetIndex(0);


$write = new PHPExcel_Writer_Excel5($excel);
ob_end_clean();
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");
header('Content-Disposition:attachment;filename="testdata.xls"');
header("Content-Transfer-Encoding:binary");
$write->save('php://output');

?>