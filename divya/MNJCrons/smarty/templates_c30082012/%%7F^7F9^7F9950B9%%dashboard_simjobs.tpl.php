<?php /* Smarty version 2.6.19, created on 2012-08-16 17:28:59
         compiled from ni/nidashboard/dashboard_simjobs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'ni/nidashboard/dashboard_simjobs.tpl', 7, false),)), $this); ?>
<html>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <br />
    <?php if ($this->_tpl_vars['mistype'] == 'pageview'): ?>
   <!---TODO:Put check for no results found-->
    <TABLE WIDTH = "80%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
        <?php if (count($this->_tpl_vars['simJobsPageViewsArr']) > 0): ?>
      <TR>
        <TD ROWSPAN = "2" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> SAP </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> LSI </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> TOTAL </b></FONT></TD>
        <TR>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD </b></FONT></TD>
            <!--Enhancement 60332-->
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation including mobile </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation Mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Similar Jobs </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation including mobile </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation Mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Similar Jobs </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation including mobile </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation Mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Similar Jobs </b></FONT></TD>
        </TR>
        <?php $_from = $this->_tpl_vars['simJobsPageViewsArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pKey'] => $this->_tpl_vars['pItem']):
?>
        <TR>
        <TD ROWSPAN = "1" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pKey']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['JD']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['APPCONF']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['APPCONF']['mviews']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['SIM']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['JD']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['APPCONF']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['APPCONF']['mviews']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['SIM']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['JD']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONF']['views']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONF']['mviews']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "8%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['SIM']['views']; ?>
 </b></FONT></TD>
        </TR>
        <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <TR ROWSPAN = "1" ALIGN = "CENTER"> No results found</TR>
        <?php endif; ?>

    </TABLE> 
    <?php endif; ?>
    <?php if ($this->_tpl_vars['mistype'] == 'clicks'): ?>
    <TABLE WIDTH = "80%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
        <?php if (count($this->_tpl_vars['simJobsClicksArr']) > 0): ?>
      <TR>
        <TD ROWSPAN = "2" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="2" WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> SAP  </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="2" WIDTH = "15%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> LSI </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="3" WIDTH = "30%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total  </b></FONT></TD>
        <TR>
            <TD ROWSPAN = "1" WIDTH = "12%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> SRP View All </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD View All </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "12%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> SRP View All </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD View All </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "12%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> SRP View All </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD View All </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation View All </b></FONT></TD>
        </TR>
        <?php $_from = $this->_tpl_vars['simJobsClicksArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pKey'] => $this->_tpl_vars['pItem']):
?>
        <?php $this->assign('p', "~".($this->_tpl_vars['pItem']).".SAP.APPCONFVA.clicks"); ?>
        <?php $this->assign('q', "~".($this->_tpl_vars['pItem']).".LSI.APPCONFVA.clicks"); ?>
        <TR>
        <TD ROWSPAN = "1" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pKey']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "12%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['SRPVA']['clicks']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['JDVA']['clicks']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "12%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['SRPVA']['clicks']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['JDVA']['clicks']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "12%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['SRPVA']['clicks']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "13%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['JDVA']['clicks']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "10%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONFVA']['clicks']; ?>
 </b></FONT></TD>
        </TR>
        <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <TR ROWSPAN = "1" ALIGN = "CENTER"> No results found</TR>
        <?php endif; ?>

    </TABLE> 
    <?php endif; ?>
    <?php if ($this->_tpl_vars['mistype'] == 'simjobsNF'): ?>
    <TABLE WIDTH = "80%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
        <?php if (count($this->_tpl_vars['simJobsNFCountArr']) > 0): ?>
    <TR>
        <TD ROWSPAN = "1" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="1" WIDTH = "30%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> PageViews No simjobs </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="1" WIDTH = "30%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Applies No simjobs </b></FONT></TD>
    </TR>
        <?php $_from = $this->_tpl_vars['simJobsNFCountArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pKey'] => $this->_tpl_vars['pItem']):
?>
        <TR>
        <TD ROWSPAN = "1" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pKey']; ?>
 </b></FONT></TD>
        <TD ROWSPAN = "1" WIDTH = "30%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['JdNoSimJobs']['cnt']; ?>
 </b></FONT></TD>
        <TD ROWSPAN = "1" WIDTH = "30%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['ApplyNoSimJobs']['cnt']; ?>
 </b></FONT></TD>
        </TR>
        <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <TR ROWSPAN = "1" ALIGN = "CENTER"> No results found</TR>
        <?php endif; ?>
    </TABLE>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['mistype'] == 'apply'): ?>
    <TABLE WIDTH = "80%" BORDER = "1" ALIGN = "CENTER" BORDERCOLOR = "#CCCCFF">
        <?php if (count($this->_tpl_vars['simJobsAppliesArr']) > 0): ?>
    <TR ALIGN="CENTER"> **count1|X|count2 count1 = total count,count2= unique count</TR>
      <TR>
        <TD ROWSPAN = "2" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> SAP </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> LSI </b></FONT></TD>
        <TD ROWSPAN = "1" COLSPAN="4" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> TOTAL </b></FONT></TD>
        <TR>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation including mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation Mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Similar Jobs</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation including mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation  Mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Similar Jobs</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> JD </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation including mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Apply confirmation Mobile</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Similar Jobs</b></FONT></TD>
        </TR>
        <?php $_from = $this->_tpl_vars['simJobsAppliesArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pKey'] => $this->_tpl_vars['pItem']):
?>
        <TR>
        <TD ROWSPAN = "1" WIDTH = "20%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pKey']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['JD']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['SAP']['JD']['uniqcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['APPCONF']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['SAP']['APPCONF']['uniqcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['APPCONF']['totmobcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['SAP']['APPCONF']['uniqmobcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['SAP']['SIM']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['SAP']['SIM']['uniqcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['JD']['totcnt']; ?>
|X| <?php echo $this->_tpl_vars['pItem']['LSI']['JD']['uniqcnt']; ?>
</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['APPCONF']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['LSI']['APPCONF']['uniqcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['APPCONF']['totmobcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['LSI']['APPCONF']['uniqmobcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['LSI']['SIM']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['LSI']['SIM']['uniqcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['JD']['totcnt']; ?>
|X| <?php echo $this->_tpl_vars['pItem']['TOTAL']['JD']['uniqcnt']; ?>
</b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONF']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONF']['uniqcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONF']['totmobcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['TOTAL']['APPCONF']['uniqmobcnt']; ?>
 </b></FONT></TD>
            <TD ROWSPAN = "1" WIDTH = "7%" ALIGN = "CENTER"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <?php echo $this->_tpl_vars['pItem']['TOTAL']['SIM']['totcnt']; ?>
|X|<?php echo $this->_tpl_vars['pItem']['TOTAL']['SIM']['uniqcnt']; ?>
 </b></FONT></TD>
        </TR>
        <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <TR ROWSPAN = "1" ALIGN = "CENTER"> No results found</TR>
        <?php endif; ?>

    </TABLE> 
    <?php endif; ?>
  </body>
</html>