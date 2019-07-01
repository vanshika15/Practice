<?php /* Smarty version 2.6.19, created on 2012-01-25 09:57:24
         compiled from ni/nidashboard/ops/index.tpl */ ?>
<html>
<head>
<title>NI Dashboard</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<CENTER><b><u>NI OPS DASHBOARD </u></b></CENTER>
<p>&nbsp;</p>
<table width="80%" border="0" align="center">
  
 <tr>
    <td width="11%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">1.</font></td>
    <td width="89%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="<?php echo $this->_tpl_vars['DBDPATH']; ?>
ops/je_jobsqueue.php" ><b>Daywise list of all jobs that come in queue </b></a></font></td>
  </tr>
  
    <td width="11%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">2.</font></td>
    <td width="89%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="<?php echo $this->_tpl_vars['DBDPATH']; ?>
ops/je_daywiselist.php" >Daywise or datewise list of jobs deleted, refreshed. </a></font></td>
  </tr>
  <tr>
    <td width="11%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">3.</font></td>
    <td width="89%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="<?php echo $this->_tpl_vars['DBDPATH']; ?>
ops/je_fareaqced.php" >FAREA wise jobs QCed/uploaded on the site. </a></font></td>
  </tr>
   <tr>
    <td width="11%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">4.</font></td>
    <td width="89%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="<?php echo $this->_tpl_vars['DBDPATH']; ?>
ops/je_qcedjobs.php" >Jobs that have been qced on a particular day. </a></font></td>
  </tr>
  
</table>
</body>
</html>