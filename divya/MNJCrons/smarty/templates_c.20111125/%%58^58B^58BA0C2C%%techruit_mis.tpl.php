<?php /* Smarty version 2.6.19, created on 2008-06-25 14:10:16
         compiled from /usr/local/apache/htdocs/smarty/templates/techruit/techruit_mis.tpl */ ?>
<html>
<head>
<TITLE>Techruit MIS Page</TITLE>

<LINK REL="stylesheet" HREF="style.css" TYPE="text/css">

</head>
<body>


<form method="post" name="getresponse" action="techruit_mis.php">
 <table width="99%" border="1" align="left">
 <tr>

 <td width="10%" valign="top" height="32" class="label">Responses From<font color="#ff1100">*</font></td>
 <td width="6%" valign="top" align="left" height="32" bgcolor="#F4F4F4" class="gray1">
  <SELECT name="dd" class="fields">
  <OPTION value=0>Day</OPTION>
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dayList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<OPTION value=<?php echo $this->_tpl_vars['dayList'][$this->_sections['i']['index']]['daysvalue']; ?>
 <?php if ($this->_tpl_vars['DOB_DD1'] == $this->_tpl_vars['dayList'][$this->_sections['i']['index']]['daysvalue']): ?> selected <?php else: ?> <?php endif; ?>> <?php echo $this->_tpl_vars['dayList'][$this->_sections['i']['index']]['daysvalue']; ?>
 </OPTION>
        <?php endfor; endif; ?>
  </SELECT>
  </td>

<td width="8%" valign="top" align="center" height="32" bgcolor="#F4F4F4" class="gray1">
  <select name="mm" class="fields">
  <option value=""  Selected>Month</option>
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['monthList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<OPTION value=<?php echo $this->_tpl_vars['monthList'][$this->_sections['i']['index']]['monthvalue']; ?>
 <?php if ($this->_tpl_vars['DOB_MM1'] == $this->_tpl_vars['monthList'][$this->_sections['i']['index']]['monthvalue']): ?> selected <?php else: ?> <?php endif; ?>> <?php echo $this->_tpl_vars['monthList'][$this->_sections['i']['index']]['monthname']; ?>
 </OPTION>
	<?php endfor; endif; ?>
  </select>
 </td>

<td valign="top" align="left" height="32" bgcolor="#F4F4F4" class="gray1">
<select name="yy" class="fields">
<option value="" >Year</option>
	<?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['max'] = (int)3;
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['year']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$this->_sections['foo']['show'] = true;
if ($this->_sections['foo']['max'] < 0)
    $this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
		<OPTION value=<?php echo $this->_sections['foo']['index']; ?>
 <?php if ($this->_tpl_vars['DOB_YY1'] == $this->_sections['foo']['index']): ?> selected <?php else: ?> <?php endif; ?> ><?php echo $this->_sections['foo']['index']; ?>
 
		</OPTION>
	 <?php endfor; endif; ?>
</select>
</td>


<td width="5%" valign="top" align="middle" height="32" class="label">To </td>
<td width="6%" valign="top" align="left" height="32" bgcolor="#F4F4F4" class="gray1">

<SELECT name="dd1" class="fields">
<OPTION value=0>Day</OPTION>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dayList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <OPTION value=<?php echo $this->_tpl_vars['dayList'][$this->_sections['i']['index']]['daysvalue']; ?>
 <?php if ($this->_tpl_vars['DOB_DD2'] == $this->_tpl_vars['dayList'][$this->_sections['i']['index']]['daysvalue']): ?> selected <?php else: ?> <?php endif; ?>> <?php echo $this->_tpl_vars['dayList'][$this->_sections['i']['index']]['daysvalue']; ?>
 </OPTION>
        <?php endfor; endif; ?>
</SELECT>


</td>
<td width="8%" valign="top" align="center" height="32" bgcolor="#F4F4F4" class="gray1">
<select name="mm1" class="fields">
<option value=""  Selected>Month</option>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['monthList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <OPTION value=<?php echo $this->_tpl_vars['monthList'][$this->_sections['i']['index']]['monthvalue']; ?>
 <?php if ($this->_tpl_vars['DOB_MM2'] == $this->_tpl_vars['monthList'][$this->_sections['i']['index']]['monthvalue']): ?> selected <?php else: ?> <?php endif; ?>> <?php echo $this->_tpl_vars['monthList'][$this->_sections['i']['index']]['monthname']; ?>
 </OPTION>
                        <?php endfor; endif; ?>
</select>

</td>
<td valign="top" align="left" height="32" bgcolor="#F4F4F4" class="gray1">
<select name="yy1" class="fields">
<option value="" >Year</option>
        <?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['max'] = (int)3;
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['year']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$this->_sections['foo']['show'] = true;
if ($this->_sections['foo']['max'] < 0)
    $this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
                <OPTION value=<?php echo $this->_sections['foo']['index']; ?>
 <?php if ($this->_tpl_vars['DOB_YY2'] == $this->_sections['foo']['index']): ?> selected <?php else: ?> <?php endif; ?> ><?php echo $this->_sections['foo']['index']; ?>

                </OPTION>
         <?php endfor; endif; ?>
</select>
</td>




<td valign="top" align="left" class="label"><b>Source: &nbsp;&nbsp;&nbsp;</b></td>
<td valign="top" align="left" class="label">
<SELECT name="source[]" class="fields" size="5" multiple>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['SOURCELIST']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<OPTION value="<?php echo $this->_tpl_vars['SOURCELIST'][$this->_sections['i']['index']]['sourceValue']; ?>
" <?php if ($this->_tpl_vars['SOURCELIST'][$this->_sections['i']['index']]['sourceValue'] == 3340): ?> selected<?php endif; ?> > <?php echo $this->_tpl_vars['SOURCELIST'][$this->_sections['i']['index']]['sourceName']; ?>
 </OPTION>
<?php endfor; endif; ?>
</SELECT>
</td>

<td valign="top" align="center" class="label1" bgcolor="#F4F4F4"><b>Source Wise: &nbsp;&nbsp;&nbsp;</b>
<input type="checkbox" name="reporttype" value="sourcewise"> </input>
</td>

<td valign="top" align="center" class="label1" bgcolor="#F4F4F4"><b>Course Wise: &nbsp;&nbsp;&nbsp;</b>
<input type="checkbox" name="reporttype" value="coursewise"> </input>
</td>


<td valign="top" align="left" class="label">
<input type="hidden" name="action" value="submit" >
<input type="submit" name="cmdSearch" value="View"  class="buttons1">
</td></tr>
<tr>
<td colspan="12" valign="top" align="left" class="label"><font color="red"><b><?php echo $this->_tpl_vars['ERROR_DATE']; ?>
</b></red></td></tr>
</form>
</table>
<br><br><br><br><br>
<p><span class="label1">Use the check box for source wise report.</span></p>

<?php if ($this->_tpl_vars['FLAG1'] == 0): ?>

        <TABLE BORDER ="0" align="center">
        <TR valign="middle" align="left" height="32" bgcolor="#F4F4F4" class="gray1">
                <TD class="label" align="center">No.</TD>
                <TD class="label" align="center">SOURCE</TD>
                <TD class="label" align="center">ENTRY_DT</TD>
                <TD class="label" align="center">COURSE</TD>
                <TD class="label" align="center">COUNT</TD>
                <TD class="label" align="center">CUMULATIVE</TD>
	</TR>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TBL_UG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
           <TR ALIGN="LEFT" VALIGN = "TOP" class="label1">
                <TD class="label1" align="LEFT" valign="TOP"><B> <?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['CTR']; ?>
</B></TD>
                <TD class="label1" align="LEFT"><B><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['TSINITIATE']; ?>
</B></TD>
                <TD class="label1" align="center"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['ENTRY_DT']; ?>
</TD>
                <TD class="label1" align="left"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['UGCOURSE']; ?>
</TD>
                <TD class="label1" align="center"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['COUNT']; ?>
</TD>
                <TD class="label1" align="center"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['CUMULATIVE']; ?>
</TD>
           </TR>
        <?php endfor; endif; ?>

        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TBL_PG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
           <TR ALIGN="LEFT" VALIGN = "TOP" bgcolor="red">
                <TD class="label2"  align="LEFT" valign="TOP"><B> <?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['CTR']; ?>
</B></TD>
                <TD class="label2" align="LEFT"><B><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['TSINITIATE']; ?>
</B></TD>
                <TD class="label2" align="center"><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['ENTRY_DT']; ?>
</TD>
                <TD class="label2" align="left"><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['PGCOURSE']; ?>
</TD>
                <TD class="label2" align="center"><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['COUNT']; ?>
</TD>
                <TD class="label2" align="center"><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['CUMULATIVE']; ?>
</TD>
           </TR>
        <?php endfor; endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['FLAG1'] == 1): ?>
        <TABLE BORDER ="0" align="center">
        <TR valign="middle" align="left" height="32" bgcolor="#F4F4F4" class="gray1">
                <TD class="label" align="center">No.</TD>
		<TD class="label" align="center">SOURCE</TD>
                <TD class="label" align="center">COUNT</TD>
        </TR>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TBL_UG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
           <TR ALIGN="LEFT" VALIGN = "TOP">
                <TD class="label1" align="LEFT" valign="TOP"><B> <?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['CTR']; ?>
</B></TD>
                <TD class="label1" align="left"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['TSINITIATE']; ?>
</TD>
                <TD class="label1" align="center"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['COUNT']; ?>
</TD>
           </TR>
	<?php endfor; endif; ?>
	 </TABLE>
<?php endif; ?>

<?php if ($this->_tpl_vars['FLAG1'] == 2): ?>
        <TABLE BORDER ="0" align="center">
        <TR valign="middle" align="left" height="32" bgcolor="#F4F4F4" class="gray1">
                <TD class="label" align="center">No.</TD>
                <TD class="label" align="center">COURSE</TD>
                <TD class="label" align="center">COUNT</TD>
        </TR>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TBL_UG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
           <TR ALIGN="LEFT" VALIGN = "TOP">
                <TD class="label1" align="LEFT" valign="TOP"><B> <?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['CTR']; ?>
</B></TD>
                <TD class="label1" align="left"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['UGCOURSE']; ?>
</TD>
                <TD class="label1" align="center"><?php echo $this->_tpl_vars['TBL_UG'][$this->_sections['i']['index']]['COUNT']; ?>
</TD>
           </TR>
	<?php endfor; endif; ?>

        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['TBL_PG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
           <TR ALIGN="LEFT" VALIGN = "TOP">
                <TD class="label2" align="LEFT" valign="TOP"><B> <?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['CTR']; ?>
</B></TD>
                <TD class="label2" align="left"><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['PGCOURSE']; ?>
</TD>
                <TD class="label2" align="center"><?php echo $this->_tpl_vars['TBL_PG'][$this->_sections['i']['index']]['COUNT']; ?>
</TD>
           </TR>
        <?php endfor; endif; ?>


	 </TABLE>
<?php endif; ?>

</body>
</html>
