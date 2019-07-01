<?php /* Smarty version 2.6.19, created on 2012-01-31 13:08:17
         compiled from ni/nidashboard/dashboard_apply.tpl */ ?>
<html>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <br />
    <?php if ($this->_tpl_vars['APPLY_DETAILS'] != ""): ?>
    <TABLE WIDTH = "70%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
      <!--TR><TD COLSPAN = "5" ALIGN = "CENTER"><b>Applies in last 7 days.</b><TD></TR-->
      <TR>
        <TD ROWSPAN = "2" WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Total Applies</b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Unique Applies</b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Applies Through JA</b></FONT></TD>
        <TD COLSPAN = "2" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Unregistered Applies</b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Applies From Arabic Candidates</b></FONT></TD>
      </TR>
      <TR>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page 1 Applies</b></FONT></TD>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page 2 Applies</b></FONT></TD>
      </TR>
      <?php $_from = $this->_tpl_vars['APPLY_DETAILS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details'] => $this->_tpl_vars['a']):
?>
        <TR>
	        <TD WIDTH = "15%" ALIGN = "CENTER"><?php echo $this->_tpl_vars['details']; ?>
</TD>
    	    <TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Total']): ?> <?php echo $this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Total']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Unique']): ?> <?php echo $this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Unique']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['JAlert']): ?> <?php echo $this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['JAlert']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Page1']): ?> <?php echo $this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Page1']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Page2']): ?> <?php echo $this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Page2']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Arabic']): ?> <?php echo $this->_tpl_vars['APPLY_DETAILS'][$this->_tpl_vars['details']]['Arabic']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        </TR>
      <?php endforeach; endif; unset($_from); ?>
    </TABLE> 
    <?php else: ?>
      <center><font color="Maroon"><h3>No Records Found</h3></font></center>
    <?php endif; ?>
  </body>
</html>