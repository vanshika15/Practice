<?php /* Smarty version 2.6.19, created on 2009-06-15 17:55:08
         compiled from ni/nidashboard/dashboard_recordmisxl.tpl */ ?>
<html>
<HEAD>
    
    <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
    <TITLE></TITLE>
    <META NAME="GENERATOR" CONTENT="OpenOffice.org 2.0  (Linux)">
    <META NAME="AUTHOR" CONTENT="naukri.com">
    <!<META NAME="CREATED" CONTENT="20070402;12144400">
    
    
    <STYLE>
        <!--
        BODY,DIV,TABLE,THEAD,TBODY,TFOOT,TR,TH,TD,P { font-family:"Arial"; font-size:x-small }
         -->
    </STYLE>
    
</HEAD>

<body>
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
	  <td align="center"><b>Date 1</b></td>
	  <td align="center"><b>Remark 1</b></td>
	  <td align="center"><b>Jobs Aquired</b></td>
        <td align="center"><b>Jobs Edited</b></td>
        <td align="center"><b>Renewal Status</b></td>
        <td align="center"><b>Follow up Date</b></td>
	  <td align="center"><b>Date 2</b></td>
	  <td align="center"><b>Remark 2</b></td>
	<td align="center"><b>Jobs Aquired</b></td>
        <td align="center"><b>Jobs Edited</b></td>
        <td align="center"><b>Renewal Status</b></td>
        <td align="center"><b>Follow up Date</b></td>
	  <td align="center"><b>Date 3</b></td>
	  <td align="center"><b>Remark 3</b></td>
	<td align="center"><b>Jobs Aquired</b></td>
        <td align="center"><b>Jobs Edited</b></td>
        <td align="center"><b>Renewal Status</b></td>
        <td align="center"><b>Follow up Date</b></td>
	  <td align="center"><b>Date 4</b></td>
	  <td align="center"><b>Remark 4</b></td>
	<td align="center"><b>Jobs Aquired</b></td>
        <td align="center"><b>Jobs Edited</b></td>
        <td align="center"><b>Renewal Status</b></td>
        <td align="center"><b>Follow up Date</b></td>
	  <td align="center"><b>Date 5</b></td>
	  <td align="center"><b>Remark 5</b></td>
	<td align="center"><b>Jobs Aquired</b></td>
        <td align="center"><b>Jobs Edited</b></td>
        <td align="center"><b>Renewal Status</b></td>
        <td align="center"><b>Follow up Date</b></td>
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
	  <td align="center"><?php if ($this->_tpl_vars['a']['arrRemarks'][0]['date'] != ''): ?> <?php echo $this->_tpl_vars['a']['arrRemarks'][0]['date']; ?>
 <?php else: ?> &nbsp; <?php endif; ?></td>
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

</body>
</html>