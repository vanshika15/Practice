<?php /* Smarty version 2.6.19, created on 2011-12-20 14:51:09
         compiled from ni/nidashboard/dashboard_pjpdata.tpl */ ?>
<html>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <br />
    <?php if ($this->_tpl_vars['JOB_DETAILS'] != ""): ?>
    <TABLE WIDTH = "70%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
      <TR>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Standard Job Views</b></FONT></TD>
        <TD WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Premium Job Views</b></FONT></TD>
        <TD WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Standard Job Responses</b></FONT></TD>
        <TD WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Premium Job Responses</b></FONT></TD>
      </TR>
      <?php $_from = $this->_tpl_vars['JOB_DETAILS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details'] => $this->_tpl_vars['a']):
?>
        <TR>
	        <TD WIDTH = "10%" ALIGN = "CENTER"><?php echo $this->_tpl_vars['details']; ?>
</TD>
    	    <TD WIDTH = "15%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['stdPageViews']): ?> <?php echo $this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['stdPageViews']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "15%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['premPageViews']): ?> <?php echo $this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['premPageViews']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "15%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['stdResponse']): ?> <?php echo $this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['stdResponse']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "15%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['premResponse']): ?> <?php echo $this->_tpl_vars['JOB_DETAILS'][$this->_tpl_vars['details']]['premResponse']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        </TR>
      <?php endforeach; endif; unset($_from); ?>
    </TABLE> 
    <?php else: ?>
      <center><font color="Maroon"><h3>No Records Found</h3></font></center>
    <?php endif; ?>
  </body>
</html>