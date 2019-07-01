<?php /* Smarty version 2.6.19, created on 2011-12-14 15:44:50
         compiled from ni/nidashboard/dashboard_google_registrations.tpl */ ?>
<html>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <br />
    <?php if ($this->_tpl_vars['USER_DETAILS'] != ""): ?>
    <TABLE WIDTH = "90%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
      <TR>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Source </b></FONT></TD>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page1 Hits</b></FONT></TD>
        <TD WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page1 Views</b></FONT></TD>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page1 Complete</b></FONT></TD>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Average Page1 Load Time (sec.)</b></FONT></TD>
        <TD WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page2 Hits</b></FONT></TD>
        <TD WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page2 Views</b></FONT></TD>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Page2 Complete</b></FONT></TD>
        <TD WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Average Page2 Load Time (sec.)</b></FONT></TD>
      </TR>
      <?php $_from = $this->_tpl_vars['USER_DETAILS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details'] => $this->_tpl_vars['a']):
?>
       <?php $_from = $this->_tpl_vars['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['datearr'] => $this->_tpl_vars['c']):
?>
        <TR>
	        <TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['details'] == 'ar'): ?> Arabic
            <?php elseif ($this->_tpl_vars['details'] == 'aren'): ?>Arabic-English <?php else: ?> English <?php endif; ?></TD>
	        <TD WIDTH = "10%" ALIGN = "CENTER"><?php echo $this->_tpl_vars['datearr']; ?>
</TD>
    	    <TD WIDTH = "7%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['Page1Hits']): ?> <?php echo $this->_tpl_vars['c']['Page1Hits']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
    	    <TD WIDTH = "8%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['Page1Views']): ?> <?php echo $this->_tpl_vars['c']['Page1Views']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['Page1Complete']): ?> <?php echo $this->_tpl_vars['c']['Page1Complete']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
    	    <TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['AvgLoadTimePage1']): ?> <?php echo $this->_tpl_vars['c']['AvgLoadTimePage1']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "7%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['Page2Hits']): ?> <?php echo $this->_tpl_vars['c']['Page2Hits']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "8%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['Page2Views']): ?> <?php echo $this->_tpl_vars['c']['Page2Views']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['Page2Complete']): ?> <?php echo $this->_tpl_vars['c']['Page2Complete']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
        	<TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['c']['AvgLoadTimePage2']): ?> <?php echo $this->_tpl_vars['c']['AvgLoadTimePage2']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
        </TR>
        <?php endforeach; endif; unset($_from); ?>
      <?php endforeach; endif; unset($_from); ?>
    </TABLE> 
    <?php else: ?>
      <center><font color="Maroon"><h3>No Records Found</h3></font></center>
    <?php endif; ?>
  </body>
</html>