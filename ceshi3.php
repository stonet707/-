<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>查看附件</title>
    <script type="text/javascript" src="member/templets/js/pdfobject.js"></script>
     <script type="text/javascript">

            window.onload = function (){
                var success = new PDFObject({ url: "1.pdf" }).embed("pdf");
                var succes = new PDFObject({ url: "2.pdf" }).embed("ttt");
            };

    </script>
</head>

<body>

<div id="pdf"><a href="1.pdf" target="_blank">Click here to download the PDF</a></p></div>
<div id="ttt"><a href="2.pdf" target="_blank">Click here to download the PDF</a></p></div>
<input type="text" name="aaaa"/>
</body>
</html>
