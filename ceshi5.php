<?php

require_once './phpexcel/PHPExcel.php';

//引入PHPExcel库文件（路径根据自己情况）

//创建对象
$excel = new PHPExcel();
$excel->getProperties()->setCreator("Maarten Balliauw")
    ->setLastModifiedBy("Maarten Balliauw")
    ->setTitle("Office 2007 XLSX Test Document")
    ->setSubject("Office 2007 XLSX Test Document")
    ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
    ->setKeywords("office 2007 openxml php")
    ->setCategory("Test result file");
//Excel表格式,这里简略写了8列
$letter = array('A','B','C','D','E','F','G','H','I','J','K','L');
//表头数组
$tableheader = array('简历序号','简历来源','姓名','性别','出生年月','学历','毕业院校','专业','毕业时间','籍贯','联系电话','执业情况');
//填充表头信息
for($i = 0;$i < count($tableheader);$i++) {
    $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
}

$dbc=mysql_connect('localhost','root','root');
mysql_select_db('resume',$dbc);


$query="SELECT a.*,b.*,d.*,e.* FROM jibenxinxi a,study b,work1 d,ability e WHERE a.resume_id=b.resume_id AND b.resume_id=d.resume_id AND d.resume_id=e.resume_id";
$result=mysql_query($query,$dbc);
mysql_query("SET NAMES 'utf8'");
$i=2;
while($row=mysql_fetch_array($result)) {
    print $row['school1'];
    $str=mb_detect_encoding($row['school1']);
    print "$str</br>";
}
 /*
    switch ($row['cengci1'])
    {
        case 1:
            $row['cengci1']=iconv('utf-8','gb2312','中专');
            break;
        case 2:
            $row['cengci1']=iconv('utf-8','gb2312','大专');
            break;
        case 3:
            $row['cengci1']=iconv('utf-8','gb2312','本科');
            break;
        case 4:
            $row['cengci1']=iconv('utf-8','gb2312','硕士');
            break;
        case 5:
            $row['cengci1']=iconv('utf-8','gb2312','中专');
            break;
    }
    switch ($row['cengci2'])
    {
        case 1:
            $row['cengci2']=iconv('utf-8','gb2312','中专');
            break;
        case 2:
            $row['cengci2']=iconv('utf-8','gb2312','大专');
            break;
        case 3:
            $row['cengci2']=iconv('utf-8','gb2312','本科');
            break;
        case 4:
            $row['cengci2']=iconv('utf-8','gb2312','硕士');
            break;
        case 5:
            $row['cengci2']=iconv('utf-8','gb2312','中专');
            break;
    }
    switch ($row['cengci3'])
    {
        case 1:
            $row['cengci3']=iconv('utf-8','gb2312','中专');
            break;
        case 2:
            $row['cengci3']=iconv('utf-8','gb2312','大专');
            break;
        case 3:
            $row['cengci3']=iconv('utf-8','gb2312','本科');
            break;
        case 4:
            $row['cengci3']=iconv('utf-8','gb2312','硕士');
            break;
        case 5:
            $row['cengci3']=iconv('utf-8','gb2312','中专');
            break;
    }
    $resume_id=iconv('gbk','gbk',$row['resume_id']);
    $laiyuan=iconv('utf-8','gbk',$row['laiyuan']);
    $xingming=iconv('utf-8','gbk',$row['xingming']);
    $xingbie=iconv('utf-8','gbk',$row['xingbie']);
    $shengri=iconv('utf-8','gbk',$row['shengri']);
    $school1=iconv('utf-8','gbk',$row['school1']);
    $school2=iconv('utf-8','gbk',$row['school2']);
    $school3=iconv('utf-8','gbk',$row['school3']);
    $major1=iconv('utf-8','gbk',$row['major1']);
    $major2=iconv('utf-8','gbk',$row['major2']);
    $major3=iconv('utf-8','gbk',$row['major3']);
    $endtime1=iconv('utf-8','gbk',$row['endtime1']);
    $endtime2=iconv('utf-8','gbk',$row['endtime2']);
    $endtime3=iconv('utf-8','gbk',$row['endtime3']);
    $jiguan=iconv('utf-8','gbk',$row['jiguan']);
    $dianhua=iconv('utf-8','gbk',$row['dianhua']);
    $zhiyezige=iconv('utf-8','gbk',$row['zhiyezige']);

    $excel->setActiveSheetIndex(0)
        ->setCellValue('A'.$i, $resume_id)
        ->setCellValue('B'.$i, $laiyuan)
        ->setCellValue('C'.$i, $xingming)
        ->setCellValue('D'.$i, $xingbie)
        ->setCellValue('E'.$i, $shengri)
        ->setCellValue('F'.$i, $row['cengci1'])
        ->setCellValue('G'.$i, $school1)
        ->setCellValue('H'.$i, $major1)
        ->setCellValue('I'.$i, $endtime1)
        ->setCellValue('J'.$i, $jiguan)
        ->setCellValue('K'.$i, $dianhua)
        ->setCellValue('L'.$i, $zhiyezige);

    $i++;

}
*/

//创建Excel输入对象
/*
$write = new PHPExcel_Writer_Excel5($excel);
ob_end_clean();
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");;
header('Content-Disposition:attachment;filename="testdata.xls"');
header("Content-Transfer-Encoding:binary");
$write->save('php://output');
*/
?>