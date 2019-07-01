<?php /* Smarty version 2.6.19, created on 2012-01-23 16:36:55
         compiled from ni/nidashboard/dashboard_mobile.tpl */ ?>
<html>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <br />
    <?php if ($this->_tpl_vars['MOBILE_DETAILS'] != ""): ?>
    <TABLE WIDTH = "90%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
      <!--TR><TD COLSPAN = "5" ALIGN = "CENTER"><b>Applies in last 7 days.</b><TD></TR-->
      <TR>
        <TD ROWSPAN = "2" WIDTH = "5%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "5%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Homepage hits </b></FONT></TD>
        <TD COLSPAN = "4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Search Overview</b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD Page Views</b></FONT></TD>
        <TD COLSPAN = "3" WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Applies Overview</b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> MNJ Page views</b></FONT></TD>
        <TD COLSPAN = "4" WIDTH = "40%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Clicks on</b></FONT></TD>
        <TD ROWSPAN = "2" WIDTH = "5%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of logins </b></FONT></TD>
        </TR>
      <TR>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Total </b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Relevant</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Modified</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Recent</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Total Applies</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Unique Applicants</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Through Recommended Jobs</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Recent Searches</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Recommended Jobs</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply History</b></FONT></TD>
        <TD WIDTH = "4%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Who viewed my CV?</b></FONT></TD>

</TR>
      <?php $_from = $this->_tpl_vars['MOBILE_DETAILS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['details'] => $this->_tpl_vars['a']):
?>
        <TR>
            <TD WIDTH = "6%" ALIGN = "CENTER"><?php echo $this->_tpl_vars['details']; ?>
</TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclHomeHits']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclHomeHits']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsTotalSrch']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsTotalSrch']; ?>
<?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsRelSrch']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsRelSrch']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsModSrch']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsModSrch']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsRecSrch']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsRecSrch']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsPageViews']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmsPageViews']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "7%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['applyTotal']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['applyTotal']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "7%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['applyUniqueUsers']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['applyUniqueUsers']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "7%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['applyMobRec']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['applyMobRec']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "7%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['mnjViewHits']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['mnjViewHits']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclRecentSrch']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclRecentSrch']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclRecommendJob']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclRecommendJob']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "5%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclApplyHistory']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclApplyHistory']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclWhoViewCv']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclWhoViewCv']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>
            <TD WIDTH = "10%" ALIGN = "CENTER"><?php if ($this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclLogins']): ?> <?php echo $this->_tpl_vars['MOBILE_DETAILS'][$this->_tpl_vars['details']]['dmclLogins']; ?>
 <?php else: ?>&nbsp;<?php endif; ?></TD>        </TR>
      <?php endforeach; endif; unset($_from); ?>

    </TABLE>
    <?php else: ?>
      <center><font color="Maroon"><h3>No Records Found</h3></font></center>
    <?php endif; ?>
  </body>
</html>