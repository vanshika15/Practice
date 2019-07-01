<?php /* Smarty version 2.6.19, created on 2012-01-31 10:54:02
         compiled from ni/nidashboard/dashboard_postcount.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


<font color="red"><?php echo $this->_tpl_vars['Message']; ?>
</font>
<form name="formmain" action="dashboard_postcount.php" method="post">
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="90%" >
    <TR> 
      <TD>Enter Duration</TD>
<TD>
        <select name="sday">
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
        <select name="smonth">
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
        <select name="syear">
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
        <select name="eday">
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
        <select name="emonth">
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
        <select name="eyear">
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
          <option value="date">datewise</option>
          <option value="mailer">Mailer Wise</option>
        </select>
      </TD>
    </TR>
    <TR>  <TD><input type="submit" name="btngo" value="GO">  </TD> <TD>&nbsp;</TD> </TR>
  </table>
</form>

<br />
<?php if ($this->_tpl_vars['durcriteria'] == 'date'): ?>
<?php if ($this->_tpl_vars['countrow'] != 0): ?>
<table width="80%" border="1" align="center" bordercolor="#CCCCFF">
  <tr> 
  <td width="12%" align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date  </font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of jobs Posted(new job posted)</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of jobs Posted(paid clients)</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of jobs Refreshed</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of times the AutoFil used(populate)</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of times the AutoFil used(post)</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of jobs Deleted</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of jobs Expired</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of jobs posted from zero results</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of jobs posted from few results</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of Offline Jobs Posted</font></b></td>
  <td width="13%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> No. of Jobs Edited</font></b></td>
 </tr>
<?php unset($this->_sections['jc']);
$this->_sections['jc']['name'] = 'jc';
$this->_sections['jc']['loop'] = is_array($_loop=$this->_tpl_vars['JOBINFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jc']['show'] = true;
$this->_sections['jc']['max'] = $this->_sections['jc']['loop'];
$this->_sections['jc']['step'] = 1;
$this->_sections['jc']['start'] = $this->_sections['jc']['step'] > 0 ? 0 : $this->_sections['jc']['loop']-1;
if ($this->_sections['jc']['show']) {
    $this->_sections['jc']['total'] = $this->_sections['jc']['loop'];
    if ($this->_sections['jc']['total'] == 0)
        $this->_sections['jc']['show'] = false;
} else
    $this->_sections['jc']['total'] = 0;
if ($this->_sections['jc']['show']):

            for ($this->_sections['jc']['index'] = $this->_sections['jc']['start'], $this->_sections['jc']['iteration'] = 1;
                 $this->_sections['jc']['iteration'] <= $this->_sections['jc']['total'];
                 $this->_sections['jc']['index'] += $this->_sections['jc']['step'], $this->_sections['jc']['iteration']++):
$this->_sections['jc']['rownum'] = $this->_sections['jc']['iteration'];
$this->_sections['jc']['index_prev'] = $this->_sections['jc']['index'] - $this->_sections['jc']['step'];
$this->_sections['jc']['index_next'] = $this->_sections['jc']['index'] + $this->_sections['jc']['step'];
$this->_sections['jc']['first']      = ($this->_sections['jc']['iteration'] == 1);
$this->_sections['jc']['last']       = ($this->_sections['jc']['iteration'] == $this->_sections['jc']['total']);
?>
  <tr> 
    <td width="12%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['date']; ?>
</font></td>
    <td width="13%">&nbsp;<a href="dashboard_postcount.php?action=showinfo&date=<?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['date']; ?>
" target="_blank"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['count']; ?>
</font></a></td>
	<td width="13%"><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['count_paid']; ?>
</td>

    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['refreshed']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['refreshed']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['afused']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['afused']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['afpost']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['afpost']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['deleted']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['deleted']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['expired']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['expired']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jobsfrm0resrdx']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jobsfrm0resrdx']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jobsfrmfewresrdx']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jobsfrmfewresrdx']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['offJobPost']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['offJobPost']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    <td width="13%">&nbsp;<?php if ($this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jobEdit']): ?><?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jobEdit']; ?>
 <?php else: ?>0 <?php endif; ?></td>
    
  </tr>
<?php endfor; endif; ?>
<tr><b><td align="right"> Total Jobs : </b></td><td>&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['total']; ?>
</td><td><?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['total_paid']; ?>
</td><td><?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['totalrefreshed']; ?>
</td><td><?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['totalafused']; ?>
</td><td><?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['totalafpost']; ?>
</td><td>&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['totaldeleted']; ?>
</td><td>&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['jobsfrm0resrdx']; ?>
</td><td>&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][0]['jobsfrmfewresrdx']; ?>
</td></tr>
</table>
<?php endif; ?>
<?php endif; ?>
<br/>
<?php if ($this->_tpl_vars['durcriteria'] != 'date'): ?>
<?php if ($this->_tpl_vars['countrow'] != 0): ?>
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr>
  <td width="30%" align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Date  </font></b></td>
  <td width="40%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of jobs Posted(Job Expiry Mailer)</font></b></td>
  <td width="40%" align-"center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Number of Mails sent</font></b></td>
 </tr>
<?php unset($this->_sections['jc']);
$this->_sections['jc']['name'] = 'jc';
$this->_sections['jc']['loop'] = is_array($_loop=$this->_tpl_vars['JOBINFO_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['jc']['show'] = true;
$this->_sections['jc']['max'] = $this->_sections['jc']['loop'];
$this->_sections['jc']['step'] = 1;
$this->_sections['jc']['start'] = $this->_sections['jc']['step'] > 0 ? 0 : $this->_sections['jc']['loop']-1;
if ($this->_sections['jc']['show']) {
    $this->_sections['jc']['total'] = $this->_sections['jc']['loop'];
    if ($this->_sections['jc']['total'] == 0)
        $this->_sections['jc']['show'] = false;
} else
    $this->_sections['jc']['total'] = 0;
if ($this->_sections['jc']['show']):

            for ($this->_sections['jc']['index'] = $this->_sections['jc']['start'], $this->_sections['jc']['iteration'] = 1;
                 $this->_sections['jc']['iteration'] <= $this->_sections['jc']['total'];
                 $this->_sections['jc']['index'] += $this->_sections['jc']['step'], $this->_sections['jc']['iteration']++):
$this->_sections['jc']['rownum'] = $this->_sections['jc']['iteration'];
$this->_sections['jc']['index_prev'] = $this->_sections['jc']['index'] - $this->_sections['jc']['step'];
$this->_sections['jc']['index_next'] = $this->_sections['jc']['index'] + $this->_sections['jc']['step'];
$this->_sections['jc']['first']      = ($this->_sections['jc']['iteration'] == 1);
$this->_sections['jc']['last']       = ($this->_sections['jc']['iteration'] == $this->_sections['jc']['total']);
?>
  <tr>
    <td width="30%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['date']; ?>
</font></td>
    <td width="30%">&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['jpcount']; ?>
</td>
 <td width="30%">&nbsp;<?php echo $this->_tpl_vars['JOBINFO_ARR'][$this->_sections['jc']['index']]['mailercount']; ?>
</td>

  </tr>
<?php endfor; endif; ?>
</table>
<?php endif; ?>
<?php endif; ?>
<br/>

</body>
</html>