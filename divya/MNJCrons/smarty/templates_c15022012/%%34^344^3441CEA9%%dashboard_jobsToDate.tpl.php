<?php /* Smarty version 2.6.19, created on 2012-02-09 15:32:56
         compiled from ni/nidashboard/dashboard_jobsToDate.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


Jobs deleted from Dump table will not be shown (basically posted in last 3 months).<br>
File id shown in red are <font color="red">deleted jobs</font>.<br>
Rest are <font color="blue">new and refreshed jobs</font>.<br>

<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
  <tr align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="4"> Date : <?php echo $this->_tpl_vars['JOBDATE']; ?>
  </font></b></tr>
  <tr><td colspan="12" align="right"><a href="dashboard_postcount.php?action=showinfo&date=<?php echo $this->_tpl_vars['JOBDATE']; ?>
&format=xls"><font face="Verdana, Arial, Helvetica, sans-serif" size="3" color="#007700">Download in Excel Format <img src="<?php echo $this->_tpl_vars['BASE_IMAGES_PATH']; ?>
/excel.gif" border="0"></font></a></td></tr>
  <tr>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JOB ID  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JOB TITLE  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> COMPANY NAME  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> EXPERIENCE (YEARS)  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> COUNTRY  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> CITY  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> FAREA  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> INDUSTRY  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> KEYWORDS  </font></b></td>
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> NATIONALITY  </font></b></td>
<!--   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> DESIRED LOCATION  </font></b></td>-->
   <td align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of Results in RESDEX<br>(Cross Promotion)  </font></b></td>
 </tr>
<?php unset($this->_sections['jobs']);
$this->_sections['jobs']['name'] = 'jobs';
$this->_sections['jobs']['loop'] = is_array($_loop=$this->_tpl_vars['JOBSTODATE_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jobs']['show'] = true;
$this->_sections['jobs']['max'] = $this->_sections['jobs']['loop'];
$this->_sections['jobs']['step'] = 1;
$this->_sections['jobs']['start'] = $this->_sections['jobs']['step'] > 0 ? 0 : $this->_sections['jobs']['loop']-1;
if ($this->_sections['jobs']['show']) {
    $this->_sections['jobs']['total'] = $this->_sections['jobs']['loop'];
    if ($this->_sections['jobs']['total'] == 0)
        $this->_sections['jobs']['show'] = false;
} else
    $this->_sections['jobs']['total'] = 0;
if ($this->_sections['jobs']['show']):

            for ($this->_sections['jobs']['index'] = $this->_sections['jobs']['start'], $this->_sections['jobs']['iteration'] = 1;
                 $this->_sections['jobs']['iteration'] <= $this->_sections['jobs']['total'];
                 $this->_sections['jobs']['index'] += $this->_sections['jobs']['step'], $this->_sections['jobs']['iteration']++):
$this->_sections['jobs']['rownum'] = $this->_sections['jobs']['iteration'];
$this->_sections['jobs']['index_prev'] = $this->_sections['jobs']['index'] - $this->_sections['jobs']['step'];
$this->_sections['jobs']['index_next'] = $this->_sections['jobs']['index'] + $this->_sections['jobs']['step'];
$this->_sections['jobs']['first']      = ($this->_sections['jobs']['iteration'] == 1);
$this->_sections['jobs']['last']       = ($this->_sections['jobs']['iteration'] == $this->_sections['jobs']['total']);
?>
  <tr> 
    <td><a href="<?php echo $this->_tpl_vars['JOB_PREVIEW_PATH']; ?>
?filename=<?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jdFileid']; ?>
&action=jobEdit" target="_blank"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" <?php if ($this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jpFileid'] == ""): ?>color=red <?php endif; ?>><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jdFileid']; ?>
</font></a></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobPost']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobComName']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobExp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobCountry']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobCity']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobFarea']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobIndtype']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobKeywords']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobNationality']; ?>
</font></td>
<!--    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['jobCandLoc']; ?>
</font></td>-->
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBSTODATE_ARR'][$this->_sections['jobs']['index']]['rajResult']; ?>
</font></td>
  </tr>
<?php endfor; endif; ?>
   
</table>
<br />

</body>
</html>