<?php /* Smarty version 2.6.19, created on 2012-02-13 10:39:38
         compiled from ni/nidashboard/dashboard_rm_automatch_mis.tpl */ ?>
<html>
<br />
<!--Code from dashboard_date.tpl Starts -->
<style> 
  .style1
  {
    font-weight:bold;
    background-color:#DDDDDD;
  }
  .gobutton{color:#ffffff;background-color:#0E5BA8;font-weight:bold;CURSOR:hand;width:50px;margin-top:1px;margin-bottom:1px;}
</style>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<font color="red"><?php echo $this->_tpl_vars['MESSAGE']; ?>
</font>
<form name="formmain" method = "post" action = "">
   <TABLE align="center" border="1" bordercolor="#CCCCFF" width="95%" >
    <TR>
      <TD class="style1">Enter Duration</TD>
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
    
    &nbsp;&nbsp;
    
    <?php if ($this->_tpl_vars['SHOW_SINGLE_DATE'] == ""): ?>
    TO&nbsp;
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
    <?php endif; ?>
      </TD>
    </TR>
    
<!--<TR>
<TD class="style1">Select the type of mailer</TD>
    <TD>
      <select name="mailtype">
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['MAIL_TYPE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <option value="<?php echo $this->_tpl_vars['MAIL_TYPE'][$this->_sections['i']['index']]['value']; ?>
" <?php echo $this->_tpl_vars['MAIL_TYPE'][$this->_sections['i']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['MAIL_TYPE'][$this->_sections['i']['index']]['label']; ?>
</option>
      <?php endfor; endif; ?>
    </select>
   </TD>
</TR>-->

    <TR><TD colspan="2" align="center"><input type="submit" name="btngo" value="GO" class="gobutton"></TD></TR>
  </table>
  <h3><center><font color="RED"><i> <?php echo $this->_tpl_vars['ErrorMsg']; ?>
</i></font></center></h3>
</form> 

<!--Code from dashboard_date.tpl ENDs -->
<?php if ($this->_tpl_vars['ERROR_MSG']): ?>
<center><font color="Maroon"><h3><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</h3></font></center>
<?php endif; ?>
<br />
<?php if ($this->_tpl_vars['SUMMARY_ARR']): ?>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Summary:</b></b><br>
<table width="95%" border="1" align="center" bordercolor="#CCCCFF">
<!--Index 0=dmmail , 1=jamail ,2=temail -->
<tr>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif"  size="2"><center>Date</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif"  size="2"><center>Clicks on Rdx CV Folder</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif"  size="2"><center>Rdx pages with 0 CVs</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif"  size="2"><center>Rdx pages with more than 0 CVs</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>New Searches from Rdx CV page</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Modified Searches from Rdx CV page</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>Clicks on CV Preview Page</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of times View Box opened</center></font></b></td>
 <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center>No. of times View All clicked</center></font></b></td>
</tr>

<?php $_from = $this->_tpl_vars['SUMMARY_ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrKey'] => $this->_tpl_vars['data']):
?>
<tr>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php echo $this->_tpl_vars['arrKey']; ?>
</center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['rdxtab']): ?> <?php echo $this->_tpl_vars['data']['rdxtab']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['zerocv']): ?> <?php echo $this->_tpl_vars['data']['zerocv']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>

   <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['nonzerocv']): ?> <?php echo $this->_tpl_vars['data']['nonzerocv']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['newsrch']): ?> <?php echo $this->_tpl_vars['data']['newsrch']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['modsrch']): ?> <?php echo $this->_tpl_vars['data']['modsrch']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['preview']): ?> <?php echo $this->_tpl_vars['data']['preview']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['viewbox']): ?> <?php echo $this->_tpl_vars['data']['viewbox']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><center><?php if ($this->_tpl_vars['data']['viewall']): ?> <?php echo $this->_tpl_vars['data']['viewall']; ?>
 <?php else: ?> 0 <?php endif; ?></center></font></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>

<br />
<?php endif; ?>
</body>
</html>