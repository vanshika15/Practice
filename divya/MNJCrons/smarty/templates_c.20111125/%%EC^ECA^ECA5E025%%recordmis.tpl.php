<?php /* Smarty version 2.6.19, created on 2009-02-20 12:17:11
         compiled from ni/nidashboard/recordmis.tpl */ ?>
<html>
<head><title>www.naukrigulf.com-Record MIS</title>
<SCRIPT LANGUAGE="JavaScript" SRC="js/CalendarPopUp.js"></SCRIPT>
        <SCRIPT LANGUAGE="JavaScript">
        var cal = new CalendarPopup();
</SCRIPT>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

    <br><br>
<form name='form1' method='post' action="recordmis.php">
<?php if ($this->_tpl_vars['CLIENT_RECORDS_ARR']): ?>
From : <INPUT TYPE="text" NAME="date1" VALUE="" SIZE=10>
<A HREF="#"
   onClick="cal.select(document.forms['form1'].date1,'anchor1','yyyy-MM-dd'); return false;"
   NAME="anchor1" ID="anchor1">select</A>
&nbsp;&nbsp;&nbsp;To : <INPUT TYPE="text" NAME="date2" VALUE="" SIZE=10>
<A HREF="#"
   onClick="cal.select(document.forms['form1'].date2,'anchor1','yyyy-MM-dd'); return false;"
   NAME="anchor1" ID="anchor1">select</A>
&nbsp;&nbsp;&nbsp;<input type="submit" name="displayMIS" id="button" value="Submit" />

<p align='right'><input name="downloadxl" type="submit" value="Download in Excel" style="width:140px;" /></p>
<table border="2">
	<tr bgcolor="#00BFFF">
	  <td align="center"><b>Company Name</b></td>
	  <td align="center"><b>Company Type</b></td>
	  <td align="center"><b>Username</b></td>
	  <td align="center"><b>Job Posting Pack</b></td>
	  <td align="center"><b>Remaining Credit</b></td>
	  <td align="center"><b>Home page client</b></td>
	  <td align="center"><b>Sale Type</b></td>
	  <td align="center"><b>Sale By</b></td>
	  <td align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	  <td align="center"><b>&nbsp;Remark&nbsp;1&nbsp;</b></td>
	<td align="center"><b>&nbsp;Jobs Aquired&nbsp;</b></td>
	<td align="center"><b>&nbsp;Jobs Edited&nbsp;</b></td>
	<td align="center"><b>&nbsp;Renewal Status&nbsp;</b></td>
	<td align="center"><b>&nbsp;Follow up Date&nbsp;</b></td>
	  <td align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	  <td align="center"><b>&nbsp;Remark&nbsp;2&nbsp;</b></td>
	 <td align="center"><b>&nbsp;Jobs Aquired&nbsp;</b></td>
        <td align="center"><b>&nbsp;Jobs Edited&nbsp;</b></td>
        <td align="center"><b>&nbsp;Renewal Status&nbsp;</b></td>
        <td align="center"><b>&nbsp;Follow up Date&nbsp;</b></td>
	  <td align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	  <td align="center"><b>&nbsp;Remark&nbsp;3&nbsp;</b></td>
	 <td align="center"><b>&nbsp;Jobs Aquired&nbsp;</b></td>
        <td align="center"><b>&nbsp;Jobs Edited&nbsp;</b></td>
        <td align="center"><b>&nbsp;Renewal Status&nbsp;</b></td>
        <td align="center"><b>&nbsp;Follow up Date&nbsp;</b></td>
	  <td align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	  <td align="center"><b>&nbsp;Remark&nbsp;4&nbsp;</b></td>
	 <td align="center"><b>&nbsp;Jobs Aquired&nbsp;</b></td>
        <td align="center"><b>&nbsp;Jobs Edited&nbsp;</b></td>
        <td align="center"><b>&nbsp;Renewal Status&nbsp;</b></td>
        <td align="center"><b>&nbsp;Follow up Date&nbsp;</b></td>
	  <td align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
	  <td align="center"><b>&nbsp;Remark&nbsp;5&nbsp;</b></td>
	 <td align="center"><b>&nbsp;Jobs Aquired&nbsp;</b></td>
        <td align="center"><b>&nbsp;Jobs Edited&nbsp;</b></td>
        <td align="center"><b>&nbsp;Renewal Status&nbsp;</b></td>
        <td align="center"><b>&nbsp;Follow up Date&nbsp;</b></td>
	</tr>
	<?php $_from = $this->_tpl_vars['CLIENT_RECORDS_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details'] => $this->_tpl_vars['a']):
?>
	<tr>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['companyName']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['companytype']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['userName']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['jpTotalQty']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['jpQtyLeft']; ?>
</td>
	  <td align="center"><?php if ($this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['homePageClient'] == ''): ?> NA <?php else: ?> <?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['homePageClient']; ?>
 <?php endif; ?></td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['saleType']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['CLIENT_RECORDS_ARR'][$this->_tpl_vars['details']]['saleBy']; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['a']['arrRemarks'][0]['date']; ?>
</td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][0]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][0]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['jobsaquired'][0]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsaquired'][0]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['jobsedited'][0]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsedited'][0]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['renewalstatus'][0]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['renewalstatus'][0]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['followupdate'][0]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['followupdate'][0]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][1]['date'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][1]['date']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][1]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][1]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['jobsaquired'][1]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsaquired'][1]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['jobsedited'][1]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsedited'][1]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['renewalstatus'][1]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['renewalstatus'][1]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['followupdate'][1]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['followupdate'][1]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][2]['date'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][2]['date']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][2]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][2]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['jobsaquired'][2]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsaquired'][2]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['jobsedited'][2]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsedited'][2]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['renewalstatus'][2]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['renewalstatus'][2]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['followupdate'][2]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['followupdate'][2]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][3]['date'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][3]['date']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][3]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][3]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['jobsaquired'][3]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsaquired'][3]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['jobsedited'][3]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsedited'][3]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['renewalstatus'][3]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['renewalstatus'][3]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['followupdate'][3]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['followupdate'][3]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][4]['date'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][4]['date']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][4]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][4]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['a']['jobsaquired'][4]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsaquired'][4]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['jobsedited'][4]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['jobsedited'][4]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['renewalstatus'][4]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['renewalstatus'][4]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
        <td align="center"><?php if ($this->_tpl_vars['a']['followupdate'][4]['remark'] != ''): ?> <?php echo $this->_tpl_vars['a']['followupdate'][4]['remark']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
<br>
<input name="downloadxl" type="submit" value="Download in Excel" style="width:140px;" />
<br>
<?php echo $this->_tpl_vars['PAGE_LINKS']; ?>

<?php else: ?>
<div style="color:#F00;font-size:150%" align="center">No Data found for the specified criteria..</div>
<?php endif; ?>
</form>
</body>
</html>