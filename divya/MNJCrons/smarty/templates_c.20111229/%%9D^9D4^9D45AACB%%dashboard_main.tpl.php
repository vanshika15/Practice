<?php /* Smarty version 2.6.19, created on 2011-11-28 10:38:34
         compiled from ni/nidashboard/dashboard_main.tpl */ ?>
<html>
<head>
<title>NI Dashboard</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="javascript">
// Description: Checks or unchecks all checkboxes of the module moduleName when user clicks "Select All"
function dashboard_checkAll(theForm, moduleName, checkUncheck) {
	var len = theForm.elements.length;
	var tmp_arr, i;

	for (i = 0; i < len; i++)	{
		if ("checkbox" == theForm.elements[i].type) {
			tmp_arr = theForm.elements[i].value.split("|X|");
			if (tmp_arr[0] == moduleName) {
				theForm.elements[i].checked = checkUncheck;
			}
		}
	}
}
</script>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<form name="myform" action="dashboard_process_main.php" method="post">
   <TABLE align="center" border="1" bordercolor="#CCCCFF" width="95%" >
    <TR>
      <TD>Enter Duration</TD>
      <TD>
        <select name="startday">
	        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FROM_DAY_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	        <option value="<?php echo $this->_tpl_vars['FROM_DAY_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['FROM_DAY_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['FROM_DAY_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
	          <?php endfor; endif; ?>
	        </select>
	        <select name="startmonth">
	          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FROM_MONTH_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	        <option value="<?php echo $this->_tpl_vars['FROM_MONTH_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['FROM_MONTH_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['FROM_MONTH_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
	          <?php endfor; endif; ?>
	        </select>
	        <select name="startyear">
	        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['FROM_YEAR_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	       		<option value="<?php echo $this->_tpl_vars['FROM_YEAR_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['FROM_YEAR_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['FROM_YEAR_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
	         <?php endfor; endif; ?>
			</select>
        &nbsp;&nbsp;TO&nbsp;
        <select name="endday">
         <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TO_DAY_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['TO_DAY_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['TO_DAY_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['TO_DAY_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>

        <select name="endmonth">
       <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TO_MONTH_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['TO_MONTH_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['TO_MONTH_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['TO_MONTH_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>

        <select name="endyear">
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TO_YEAR_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['TO_YEAR_ARR'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['TO_YEAR_ARR'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['TO_YEAR_ARR'][$this->_sections['i']['index']]['label']; ?>
</option>
          <?php endfor; endif; ?>
        </select>

      </TD>
    </TR>
  <TR>
      <TD>AND (select duration criteria)</TD>
      <TD>
        <select name="durcriteria">
          <option value="date" >datewise</option>
        </select>
      </TD>
    </TR>
    <TR><TD> <input type="submit" name="btngo_dm" value="Go" > </TD> <TD>&nbsp;</TD> </TR>
  </table>


<CENTER><b><u>NI DASHBOARD </u></b></CENTER>
<p>&nbsp;</p>
<table width="90%" border="0" align="center">
	<tr>
		<td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif" color="Navy" size="3"><b><u><a name="rdx">RESDEX</a></u></b></font></td>
	</tr>
	<tr>
		<td width="5%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">1.</font></td>
		<td width="95%" colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>General MIS</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_selectAll" value="rdx" onclick="dashboard_checkAll(this.form, this.value, this.checked);"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="Maroon"><b>Select All</b></font></td>
	</tr>
	
<!--	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxLogin|X|Resdex - No. of Logins"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Logins</font></td>
	</tr>
-->
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxActiveSubs|X|Rdx - No. of Active Subscriptions"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Active Subscriptions</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxResumeView|X|Rdx - No. of Resumes Viewed"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Resumes Viewed</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxRelevantQuickSearch|X|Rdx - No. of Relevant Quick Searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Relevant Quick Searches</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxRelevantAdvSearch|X|Rdx - No. of Relevant Advance Searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Relevant Advance Searches</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxRelevantSearch|X|Rdx - No. of Relevant Searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Relevant Searches</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxTotalSearch|X|Rdx - No. of Total Searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Total Searches</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxSearchAgentCount|X|Rdx - No. of Search Agents Created"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Search Agents Created</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxSearchAgentUniqueCount|X|Rdx - No. of Unique users who created Agents"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Unique users who created Agents</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxCVAlertCount|X|Rdx - No. of CV Alerts Activated"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CV Alerts Activated</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxCVAlertUniqueCount|X|Rdx - No. of People opting for CV Alert"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of People opting for CV Alert</font></td>
	</tr>
	
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxEmailContacted|X|Rdx - No. of Contacts Through Email"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Contacts Through Email</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxFolderCreated|X|Rdx - No. of Folders Created"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Folders Created</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxRelevantModifySearch|X|Rdx - No. of Relevant Modified Searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Relevant Modified Searches</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxRelevantSearchWithin|X|Rdx - No. of Relevant Search Withins"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Relevant Search Withins</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxDownloadNaukriCv|X|Rdx - No. of CVs Downloaded in Naukri Format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Downloaded in Naukri Format</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxDownloadOriginalCv|X|Rdx - No. of CVs Downloaded in Original Doc Format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Downloaded in Original Doc Format</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxDownloadNaukriPdf|X|Rdx - No. of CVs Downloaded in Naukri PDF Format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Downloaded in Naukri PDF Format</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxForwardSent|X|Rdx - No. of CVs Forwarded"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Forwarded</font></td>
	</tr>
	 <tr>
                <td width="5%">&nbsp;</td>
                <td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxPrintCvCount|X|Rdx - No. of CVs Printed"></td>
                <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Printed</font></td>
        </tr>

	<tr>
                <td width="5%">&nbsp;</td>
                <td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxEtempCount|X|Rdx - No. of Email Templates"></td>
                <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Email Templates</font></td>
        </tr>
        <tr>
                <td width="5%">&nbsp;</td>
                <td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxEtempClientCount|X|Rdx - Unique Users(E-templates)"></td>
                <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Unique Users(E-templates)</font></td>
        </tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxFolderRenamed|X|Rdx - No. of Times Folders Renamed"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Folders Renamed</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxCommentCount|X|Rdx - No. of Comments Added"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of comments added</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxUniqueCommentUser|X|Rdx - No. of unique users who added these comments"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users who added these comments</font></td>
	</tr>

  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxSimCvLink|X|Rdx - Clicks on Sim CV (SRP | View All | SimCV Page)"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Rdx - Clicks on Sim CV (SRP | View All | SimCV Page)</font></td>
  </tr>

  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rdx_general[]" value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxSimCvViewed|X|Rdx - Sim CV views"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Rdx - Sim CV views</font></td>
  </tr>


	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td width="5%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">2.</font></td>
		<td width="95%" colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Search MIS</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rdx_get_search" value="rdx|X|1">Search:</td>
		<td width="90%">
		<select name="rdx_search[]" multiple size="6">
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssKeyword|X|Rdx - Keyword" selected>Keyword</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssIndType|X|Rdx - Industry" selected>Industry</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssFarea|X|Rdx - Functional Area" selected>Functional Area</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssExp|X|Rdx - Years of Experience" selected>Years of Experience</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssCtc|X|Rdx - Monthly Salary" selected>Monthly Salary</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssCountry|X|Rdx - Country" selected>Country</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssCity|X|Rdx - City" selected>City</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssNationality|X|Rdx - Nationality" selected>Nationality</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssLangsKnown|X|Rdx - Languages" selected>Languages</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssGender|X|Rdx - Gender" selected>Gender</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssGradCourse|X|Rdx - Basic Education" selected>Basic Education</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssGradCourseSpec|X|Rdx - Basic Education Spec" selected>Basic Education Specialization</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssPgCourse|X|Rdx - Post Graduation" selected>Post Graduation</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssPgCourseSpec|X|Rdx - Post Graduation Spec" selected>Post Graduation Specialization</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssPpgCourse|X|Rdx - Doctorate" selected>Doctorate</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssPpgCourseSpec|X|Rdx - Doctorate Spec" selected>Doctorate Specialization</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssDesig|X|Rdx - Designation" selected>Designation</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssOrgn|X|Rdx - Organisation" selected>Organisation/Employer</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssVisa|X|Rdx - Visa Status" selected>Visa Status</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssUpdatedWithIn|X|Rdx - Search by new &amp; updated" selected>Search by new &amp; updated</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssRegisteredWithIn|X|Rdx - Search by new only" selected>Search by new only</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssSortByFreshness|X|Rdx - Sort by Freshness" selected>Sort by Freshness</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssSortByRelevance|X|Rdx - Sort by Relevance" selected>Sort by Relevance</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssClusterNationality|X|Rdx - Nationality Cluster" selected> Nationality Cluster</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssClusterLocation|X|Rdx - Location Cluster" selected>Location Cluster</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssClusterIndType|X|Rdx - Industry Cluster" selected>Industry Cluster</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssClusterFarea|X|Rdx - Farea Cluster" selected>Farea Cluster</option>
      <option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssDrivingLicCountry|X|Rdx - Driving Licence" selected>Driving Licence</option>
      <option value="rdx|X|default|X|DASHBOARD_RDX_SEARCH_SUMMARY|X|rssDate|X|rssNoticePeriod|X|Rdx - Notice Period" selected>Notice Period</option>
			<option value="rdx|X|default|X|DASHBOARD_RDX|X|rdxDate|X|rdxAgentSearchCount|X|Rdx - Agent Search" selected>Agent Search</option>
		</select>
		</td>
	</tr>
	

	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif" color="Navy" size="3"><b><u><a name="rsp">Response Manager</a></u></b></font></td>
	</tr>
	<tr>
		<td width="5%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">1.</font></td>
		<td width="95%" colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>General MIS</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_selectAll" value="rsp" onclick="dashboard_checkAll(this.form, this.value, this.checked);"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="Maroon"><b>Select All</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspActiveSubs|X|RM - No. of Active Subscriptions"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Active Subscriptions</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspJobsPosted|X|RM - No. Jobs Posted"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. Jobs Posted</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFilteredJobs|X|RM - No. of Jobs with Filters"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Jobs with Filters</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspResponses|X|RM - No. of Responses"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Responses</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspRelevantResponses|X|RM - No. of Relevant Responses"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Relevant Responses</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspEmailContacted|X|RM - No. of Contacts Through Email"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Contacts Through Email</font></td>
	</tr>
	
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFlagsCount|X|RM - No. of Flags created (inbox -- shortlisted -- rejected -- Onhold -- Junk)"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Flags created count</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspXLSDownload|X|RM - Count of XLS Download"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count of XLS Download</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspRspTypeCount|X|RM - Count of Response Type (RM Only | Offline | RMEmail FullCV | RMEmail DailySummary))"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count of Response Type</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspDownloadNaukriCv|X|RM - No. of CVs Downloaded in Naukri Format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Downloaded in Naukri Format</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspDownloadOriginalCv|X|RM - No. of CVs Downloaded in Original Doc Format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Downloaded in Original Doc Format</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspDownloadNaukriPdf|X|RM - No. of CVs Downloaded in Naukri PDF Format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of CVs Downloaded in Naukri PDF Format</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspEmailNotShowCount|X|RM - No. of Jobs with Hide Email"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Jobs with Hide Email</font></td>
	</tr>
	
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspKeyword|X|RM - No. Keyword searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. Keyword searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqKeyword|X|RM - No. of unique users performing Keyword searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users performing Keyword searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspExperience|X|RM - No. Experience searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. Experience searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqExperience|X|RM - No. of unique users performing Experience searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users performing Experience searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspCityCluster|X|RM - No. of City cluster searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of City cluster searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqCityCluster|X|RM - No. of unique users performing City cluster searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users performing City cluster searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspCountryCluster|X|RM - No. of Country cluster searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Country cluster searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqCountryCluster|X|RM - No. of unique users performing Country cluster searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users performing Country cluster searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspNationalityCluster|X|RM - No. of Nationality cluster searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of Nationality cluster searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqNationalityCluster|X|RM - No. of unique users performing Nationality cluster searches"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users performing Nationality cluster searches</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspNewMyFolder|X|RM - No. of new My Folders created"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of new My Folders created</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqNewMyFolder|X|RM -  No. of unique users creating new My Folders"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users creating new My Folders</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspLstXLSDownload|X|RM - No. of downloads from Response Listing page in excel format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of downloads from Response Listing page in excel format</font></td>
	</tr>

	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspLstWordDownload|X|RM - No. of downloads from Response Listing page in word format"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of downloads from Response Listing page in word format</font></td>
	</tr>
        <tr>
                <td width="5%">&nbsp;</td>
                <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspUnqClients|X|RM - No. of unique users"></td>
                <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of unique users</font></td>
        </tr>


  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltFA|X|RM - No. of jobs with Functional Area Filter"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with Functional Area Filter</font></td>
  </tr>
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltIT|X|RM - No. of jobs with  Industry Type"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with  Industry Type</font></td>
  </tr>

  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltWE|X|RM - No. of jobs with  Work Experience filter"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with  Work Experience filter</font></td>
  </tr>
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltJL|X|RM - No. of jobs with  Job Location filter"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with  Job Location filter</font></td>
  </tr>

  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltBC|X|RM - No. of jobs with Basic Education Course filter"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with Basic Education Course filter</font></td>
  </tr>
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltBS|X|RM - No. of jobs with Basic Education Specialization filter"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with Basic Education Specialization filter</font></td>
  </tr>

   <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspFiltN|X|RM - No. of jobs with  Nationality filter"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of jobs with  Nationality filter</font></td>
  </tr>

   <tr>
    <td width="5%">&nbsp;</td>
    <td width="5%"><input type="checkbox" name="rsp_general[]" value="rsp|X|default|X|DASHBOARD_RSP|X|rspDate|X|rspLB|X|RM - No. of clients who closed Light box for filters"></td>
    <td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of clients closing Light box for filters</font></td>
  </tr> 

  <tr><td colspan="3">&nbsp;</td></tr>
  <tr><td colspan="3">&nbsp;</td></tr>

  <tr>







		<td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif" color="Navy" size="3"><b><u><a name="resPrivacy">Resman Privacy Settings</a></u></b></font></td>
	</tr>
	<tr>
		<td width="5%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">1.</font></td>
		<td width="95%" colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Privacy MIS (Cumulative)</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="resPrivacy_selectAll" value="resPrivacy" onclick="dashboard_checkAll(this.form, this.value, this.checked);"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="Maroon"><b>Select All</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdResdexS|X|RES - Searchable CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Searchable CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdResdexN|X|RES - Not Searchable CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not Searchable CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdResdexA|X|RES - Confidential CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Confidential CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdHideEmail|X|RES - Email Confidential CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Email Confidential CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdHideName|X|RES - Name Confidential CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Name Confidential CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdHideConnum|X|RES - Contact No. Confidential CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Contact No. Confidential CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdHideCuremp|X|RES - Current Employer Confidential CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Current Employer Confidential CVs</font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="checkbox" name="res_privacy[]" value="resPrivacy|X|default|X|DASHBOARD_RESUME_PRIVACY|X|resDate|X|resPswdHideDoctextcv|X|RES - Attached/Pasted Confidential CVs"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Attached/Pasted Confidential CVs</font></td>
	</tr>


	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3"><hr></td>
	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="radio" name="viewType" value="html" checked></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>View In Browser</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="radio" name="viewType" value="xls"></td>
		<td width="90%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Download Excel Sheet</b></font></td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="5%"><input type="radio" name="viewType" value="img"></td>
		<td width="90%">
			<font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>View Graph</b></font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="imgShowValues">&nbsp;Show Values
		</td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td width="90%" colspan="2"><input type="submit" value="Generate MIS" name="submit_dm"></td>
	</tr>
</table>
</form>
</body>
</html>