<?php /* Smarty version 2.6.19, created on 2012-02-08 13:16:32
         compiled from ni/nidashboard/dashboard_chasingp1.tpl */ ?>
<html>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <br />
    <?php if ($this->_tpl_vars['UPDATE_DETAILS'] != ""): ?>
    <TABLE WIDTH = "40%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
      <!--TR><TD COLSPAN = "5" ALIGN = "CENTER"><b>Applies in last 7 days.</b><TD></TR-->
      <TR>
        <TD ROWSPAN = "1" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "1" WIDTH = "40%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Clicks on the Update button </b></FONT></TD>
        <TD ROWSPAN = "1" WIDTH = "40%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of users updated</b></FONT></TD>
      </TR>
      <?php $_from = $this->_tpl_vars['UPDATE_DETAILS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details']):
?>
        <TR>
            <TD WIDTH = "6%" ALIGN = "CENTER"><?php echo $this->_tpl_vars['details']['duluDate']; ?>
</TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['details']['duluUpdateClicks']): ?> <?php echo $this->_tpl_vars['details']['duluUpdateClicks']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['details']['duluUpdated']): ?> <?php echo $this->_tpl_vars['details']['duluUpdated']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>

      <?php endforeach; endif; unset($_from); ?>
    </TABLE>
    <?php else: ?>
      <center><font color="Maroon"><h3>No Records Found</h3></font></center>
    <?php endif; ?>
  </body>
</html>
