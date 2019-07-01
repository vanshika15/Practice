<?php /* Smarty version 2.6.19, created on 2016-04-12 11:55:17
         compiled from /usr/local/apache/htdocs/dashboard/MIS/icops.tpl */ ?>
<html>
<head>
<title>icops MIS</title>
<script type="text/javascript" src="datepicker.js"></script> 
<link href="datepicker.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<h1 align="center">ICOPS MIS</h1>
<form name="frmSubmit" action="" method="post">
<table border="1" align="center">
<tr><td>From : </td><td><input type="text" name="fromdate" value="<?php echo $this->_tpl_vars['fromdate']; ?>
" class="w16em dateformat-Y-ds-m-ds-d"/></td></tr>
<tr><td>To :</td><td><input type="text" name="todate" value="<?php echo $this->_tpl_vars['todate']; ?>
" class="w16em dateformat-Y-ds-m-ds-d"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>

<br></br>
<br></br>

<h2 align="center">Date Interval  :     <?php echo $this->_tpl_vars['fromDate']; ?>
      -      <?php echo $this->_tpl_vars['toDate']; ?>
</h2>

<table border="0" align="center">
<tr><td>1. Total cv to be processed      </td><td>:  <?php echo $this->_tpl_vars['cvtoprocessed']; ?>
</td></tr>
<tr><td>2. cv submitted                  </td><td>:  <?php echo $this->_tpl_vars['cvsubmitted']; ?>
</td></tr>
<tr><td>3. cv rejected                   </td><td>:  <?php echo $this->_tpl_vars['cvrejected']; ?>
</td></tr>
<tr><td>4. Total Mail Send               </td><td>:  <?php echo $this->_tpl_vars['cvsubmitted']; ?>
</td></tr>
<tr><td>5. clicked on edit link mailer   </td><td>:  <?php echo $this->_tpl_vars['editlink']; ?>
</td></tr>
<tr><td>6. clicked on save link mailer   </td><td>:  <?php echo $this->_tpl_vars['savelink']; ?>
</td></tr>

</table>

</body>
</html>