<?php /* Smarty version 2.6.19, created on 2009-02-25 14:54:06
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/js_CoreMetrics_MIS.htm */ ?>
<html>
<body>
        <title>Core Search Metrics MIS</title>
                <SCRIPT LANGUAGE="JavaScript" SRC="CalendarPopup.js"></SCRIPT>
                 <SCRIPT LANGUAGE="JavaScript" >
                 var cal1 = new CalendarPopup();
                 var cal2 = new CalendarPopup();
                 function showMessage()
                 {
                 	var path=document.form_umis;
                 	var flag=0;
                 	var arrfrom,arrto;
                 	arrfrom=path.dateFrom.value.split("/");
                 	arrto=path.dateTo.value.split("/");
                 	if(path.dateFrom.value=="")
                 	{
                 		alert("\"From\" date field is empty.");
                 		return false;
                 		flag=1
                 		exit;
                 	}
                 	if(path.dateTo.value=="")
                 	{
                 		alert("\"To\" date field is empty.");
                 		return false;
                 		flag=1
                 		exit;
                 	}

                 	if(arrfrom[2]==arrto[2])
                 	{
                 		if(path.dateFrom.value>path.dateTo.value)
                 		{
                 			alert("To Date should be Greater Than From Date");
                 			return false;
                 			flag=1
                 			exit;
                 		}
                 	}
                 	if(arrfrom[2]>arrto[2])
                 	{
                 		alert("To Date should be Greater Than From Date");
                 		return false;
                 		flag=1
                 		exit;
                 	}
                 }
        </SCRIPT>
       </head>
       <body>
<form name="form_umis" method="post" action="js_CoreMetrics_MIS.php"  onsubmit="return showMessage();">

<table align=center border=0 width="65%">
        <tr align=center bgcolor="lightblue">
                <td colspan=2><b>Select Criteria for MIS</b><br></td>
        </tr>
        <tr bgcolor="lightblue">
                <td>From:&nbsp; <INPUT TYPE="text" NAME="dateFrom" <?php if ($this->_tpl_vars['from'] != ""): ?> value=<?php echo $this->_tpl_vars['from']; ?>
 <?php else: ?> value="" <?php endif; ?> SIZE=10 readonly>
        <A HREF="#" onClick="cal1.select(document.form_umis.dateFrom,'anchor1','MM/dd/yyyy'); return false;"return false;" NAME="anchor1" ID="anchor1">select</A>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>To:&nbsp;<INPUT TYPE="text" NAME="dateTo" <?php if ($this->_tpl_vars['to'] != ""): ?> value=<?php echo $this->_tpl_vars['to']; ?>
 <?php else: ?> value="" <?php endif; ?> SIZE=10 readonly>
                <A HREF="#" onClick="cal2.select(document.form_umis.dateTo,'anchor2','MM/dd/yyyy'); return false;" return false;" NAME="anchor2" ID="anchor2">select</A>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
        </tr>
         <tr align=center bgcolor="lightblue">
                <td colspan=2><INPUT TYPE="submit" NAME="submit" value="Submit"></td>
        </tr>
</table>
</form>
</body>
</html>