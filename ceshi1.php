<?php
    $dbc=mysql_connect('localhost','root','root');
    mysql_select_db('resume',$dbc);
    mysql_query("SET NAMES 'utf8'");

    $query="SELECT * FROM study WHERE resume_id=1";
    if ($result=mysql_query($query,$dbc)){
        while ($row=mysql_fetch_array($result)){
            print $row['school1'];
            $str=mb_detect_encoding($row['school1']);
           print  "$str</br>";
    }




}
?>