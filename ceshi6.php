<html>
<head>
    <script language="javascript">
        function printdiv(printpage)
        {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr+newstr+footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>
    <title>div print</title>
</head>

<body>
//HTML Page
//Other content you wouldn't like to print
<input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">

<div id="div_print">

    <h1 style="Color:Red">The Div content which you want to print</h1>

</div>
//Other content you wouldn't like to print
//Other content you wouldn't like to print
</body>

</html>


<input type='button' name='dayin' value='打印' onClick='printdiv('div_print')'>