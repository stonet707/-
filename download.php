<?php
    $resume_id=$_GET['number'];
    $dir='./fujian/';
    $dir=$dir.$resume_id;
    $resume_id=$resume_id.".zip";

    if (is_file($resume_id)){
        unlink($resume_id);
    }

function addFileToZip($path,$zip){
    $handler=opendir($path); //打开当前文件夹由$path指定。
    while(($filename=readdir($handler))!==false){
        if($filename != "." &&$filename != ".."){//文件夹文件名字为'.'和‘..’，不要对他们进行操作
            if(is_dir($path."/".$filename)){// 如果读取的某个对象是文件夹，则递归
                addFileToZip($path."/".$filename, $zip);

            }else{ //将文件加入zip对象
                $zip->addFile($path."/".$filename);
                $zip->renameName($path."/".$filename,$filename);
            }
        }
	}
    @closedir($path);
}
$zip=new ZipArchive();
if($zip->open($resume_id, ZipArchive::OVERWRITE)=== TRUE){
    addFileToZip($dir, $zip); //调用方法，对要打包的根目录进行操作，并将ZipArchive的对象传递给方法

    $zip->close(); //关闭处理的zip文件
}

if (file_exists($resume_id)){
    $fp=fopen($resume_id, "r");
    clearstatcache();
    $file_size=filesize($resume_id);   //pdf文件8017723


    Header("application/x-xls");
    Header("Accept-Ranges:bytes");
    Header("Accept-Length:$file_size");
    Header("Content-Disposition:attachment;filename=$resume_id");

    echo file_get_contents($resume_id);
}

?>