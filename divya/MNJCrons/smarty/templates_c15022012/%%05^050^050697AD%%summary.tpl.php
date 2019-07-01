<?php /* Smarty version 2.6.19, created on 2012-01-24 12:26:00
         compiled from /usr/local/apache/htdocs/mis/tpl/summary.tpl */ ?>
<html>
  <head>
    <title>MIS Report Generation</title>
  </head>
  </body>
    <br>
    <h2 align='center'>MIS Report Generation</h2>
    <form name='mis' method='post' action='' onsubmit="return validate();">
    <h5 style="color:#ff0000"><?php echo $this->_tpl_vars['ErrMsg']; ?>
</h5>
    <table border='1' cellpadding='2' cellspacing='2' width='50%'>
      <tr>
        <td width='25%'><font color="<?php echo $this->_tpl_vars['TAGCOLORS']['ResultFor']; ?>
">Results for</font></td>
	<td>
	<select name='ResultFor' id='ResultFor' OnChange="onChangeResultFor();">
	<option value='Fresh'>Fresh Resume</option>
	<option value='Mods'>Modifed Resume</option>
	</select>&nbsp;
	<select name='ProfileType' id='ProfileType' disabled>
	<option value='Active'>Active Profile</option>
	<option value='All'>All Profile</option>
	</select>
	</td>
      <tr>
        <td width='25%'><font color="<?php echo $this->_tpl_vars['TAGCOLORS']['StartDate']; ?>
">Start Date</font></td>
	<td>
	<select name='StartDate' id='StartDate' >
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['START_DATE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<option value='<?php echo $this->_tpl_vars['START_DATE'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['START_DATE'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['START_DATE'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
	<?php endfor; endif; ?>
	</select>&nbsp;
	<select name='StartMonth' id='StartMonth' >
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['START_MONTH']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<option value='<?php echo $this->_tpl_vars['START_MONTH'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['START_MONTH'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['START_MONTH'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
	<?php endfor; endif; ?>
	</select>&nbsp;
	<select name='StartYear' id='StartYear' >
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['START_YEAR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<option value='<?php echo $this->_tpl_vars['START_YEAR'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['START_YEAR'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['START_YEAR'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
	<?php endfor; endif; ?>
	</select>
	</td>
      </tr>
      <tr>
        <td width='25%'><font color="<?php echo $this->_tpl_vars['TAGCOLORS']['EndDate']; ?>
">End Date</font></td>
	<td>
	<select name='EndDate' id='EndDate' >
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['END_DATE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<option value='<?php echo $this->_tpl_vars['END_DATE'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['END_DATE'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['END_DATE'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
	<?php endfor; endif; ?>
	</select>&nbsp;
	<select name='EndMonth' id='EndMonth' >
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['END_MONTH']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<option value='<?php echo $this->_tpl_vars['END_MONTH'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['END_MONTH'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['END_MONTH'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
	<?php endfor; endif; ?>
	</select>&nbsp;
	<select name='EndYear' id='EndYear' >
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['END_YEAR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<option value='<?php echo $this->_tpl_vars['END_YEAR'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['END_YEAR'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['END_YEAR'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
	<?php endfor; endif; ?>
	</select>
	</td>
      </tr>
      </tr>
      <tr>
      <td width='25%'><font color="<?php echo $this->_tpl_vars['TAGCOLORS']['Criteria1']; ?>
">Criteria 1</font></td>
      <td>
      <select name='Criteria1' id='Criteria1' onchange="onchangeCriteria1(this,'Criteria2');onchangeCriteria(this,'ResultSetCriteria1');">
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['CRITERIA1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <option value='<?php echo $this->_tpl_vars['CRITERIA1'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['CRITERIA1'][$this->_sections['i']['index']]['SELECTED']; ?>
 <?php echo $this->_tpl_vars['CRITERIA1'][$this->_sections['i']['index']]['DISABLED']; ?>
 ><?php echo $this->_tpl_vars['CRITERIA1'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
      <?php endfor; endif; ?>
      </select>&nbsp;&nbsp;
      <select name='ResultSetCriteria1' id='ResultSetCriteria1' disabled>
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['RESULTSET']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <option value='<?php echo $this->_tpl_vars['RESULTSET'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['RESULTSET'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['RESULTSET'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
      <?php endfor; endif; ?>
      </select>
      </td>
      </tr>
      <tr>
      <td width='25%'><font color="<?php echo $this->_tpl_vars['TAGCOLORS']['Criteria2']; ?>
">Criteria 2</font></td>
      <td>
      <select name='Criteria2' id='Criteria2' onchange="onchangeCriteria1(this,'Criteria1');onchangeCriteria(this,'ResultSetCriteria2');">
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['CRITERIA2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <option value='<?php echo $this->_tpl_vars['CRITERIA2'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['CRITERIA2'][$this->_sections['i']['index']]['SELECTED']; ?>
 <?php echo $this->_tpl_vars['CRITERIA2'][$this->_sections['i']['index']]['DISABLED']; ?>
 ><?php echo $this->_tpl_vars['CRITERIA2'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
      <?php endfor; endif; ?>
      </select>&nbsp;&nbsp;
      <select name='ResultSetCriteria2' id='ResultSetCriteria2' disabled>
      <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['RESULTSET']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <option value='<?php echo $this->_tpl_vars['RESULTSET'][$this->_sections['i']['index']]['VALUE']; ?>
' <?php echo $this->_tpl_vars['RESULTSET'][$this->_sections['i']['index']]['SELECTED']; ?>
 ><?php echo $this->_tpl_vars['RESULTSET'][$this->_sections['i']['index']]['LABEL']; ?>
</option>
      <?php endfor; endif; ?>
      </select>
      </td>
      </tr>
      <tr>
        <td width='25%'>&nbsp;</td>
        <td ><input type='submit' name='Generate' value='Generate MIS' id='Generate' >
      </tr>
    </table>
    </form>
  </body>
  <script language='javascript'>
  function onChangeResultFor()
  {
    var resultfor = document.getElementById('ResultFor');
    var profiletype = document.getElementById('ProfileType');

    var startdate = document.getElementById('StartDate');
    var startmonth = document.getElementById('StartMonth');
    var startyear = document.getElementById('StartYear');

    var enddate = document.getElementById('EndDate');
    var endmonth = document.getElementById('EndMonth');
    var endyear = document.getElementById('EndYear');

    var criteria1 = document.getElementById('Criteria1');
    var resultsetcriteria1 = document.getElementById('ResultSetCriteria1');

    var criteria2 = document.getElementById('Criteria2');
    var resultsetcriteria2 = document.getElementById('ResultSetCriteria2');

    var generate = document.getElementById('Generate');

    /*if ( resultfor.value == -1 ) {
      profiletype.disabled = true;
      startdate.disabled = startmonth.disabled = startyear.disabled = true;
      enddate.disabled = endmonth.disabled = endyear.disabled = true;
      criteria1.value = criteria2.value = -1;
      criteria1.disabled = resultsetcriteria1.disabled = true;
      criteria2.disabled = resultsetcriteria2.disabled = true;
      generate.disabled = true;
    } else/**/ if ( resultfor.value == 'Fresh') {
      profiletype.disabled = true;
      startdate.disabled = startmonth.disabled = startyear.disabled = false;
      enddate.disabled = endmonth.disabled = endyear.disabled = false;
      criteria1.disabled = false;
      criteria2.disabled = false;
      criteria1.value = criteria2.value = -1;
      for(i=0; i<criteria1.length; i++ ) {
        criteria1.options[i].disabled = criteria2.options[i].disabled = false;
      }
      generate.disabled = false;
    } else if ( resultfor.value == 'Mods' ) {
      profiletype.disabled = false;
      startdate.disabled = startmonth.disabled = startyear.disabled = false;
      enddate.disabled = endmonth.disabled = endyear.disabled = true;
      criteria1.disabled = false;
      criteria2.disabled = false;
      criteria1.value = criteria2.value = -1;
      //for(i=0; i< criteria1.length; i++) {
      //  if ( criteria1.options[i].value == 'Src' /*||  criteria1.options[i].value == 'Edu'*/ ) {
//	   criteria1.options[i].disabled = true;
//	   //break;
//	} else {
//	   criteria1.options[i].disabled = false;
//	}
  //    }
    //  for(i=0; i< criteria2.length; i++) {
    //    if ( criteria2.options[i].value == 'Src' /*|| criteria2.options[i].value == 'Edu'*/) {
//	   criteria2.options[i].disabled = true;
//	   //break;
//	  } else {
//	   criteria2.options[i].disabled = false;
//	  }
  //    }
      generate.disabled = false;
    }
  }
  function onchangeCriteria(criteria, resultset )
  {
    if ( criteria.value == 'Src' || criteria.value == 'Loc' ) {
      document.getElementById(resultset).disabled = false;
    } else {
      document.getElementById(resultset).disabled = true;
    }
  }

function onchangeCriteria1(criteria1, criteria2)
{
	var Criteria2 = document.getElementById(criteria2);
	var resultfor = document.getElementById('ResultFor');
	if ( criteria1.value == -1 ) {
		for(i=0; i< Criteria2.length; i++) {
			Criteria2.options[i].disabled = false;
			/*if ( resultfor.value == 'Mods' && (Criteria2.options[i].value == 'Src' )) {
				Criteria2.options[i].disabled = true;
			} else  {
				Criteria2.options[i].disabled = false;
			}*/
		}
	} else {
		for(i=0; i< Criteria2.length; i++) {
			Criteria2.options[i].disabled = false;
			/*if ( resultfor.value == 'Mods' && (Criteria2.options[i].value == 'Src' )) {
				Criteria2.options[i].disabled = true;
			} else*/ if ( criteria1.value == Criteria2.options[i].value ) {
				Criteria2.options[i].disabled = true;
			} else {
				Criteria2.options[i].disabled = false;
			}
		}
	}
	if ( criteria1.value == 'Ctc' || criteria1.value == 'Ctc2x' || criteria1.value == 'Ctc3x')
	{
		var errFlag = false;
		for(i=0; i<Criteria2.length; i++)
		{
			if ( Criteria2.options[i].value == 'Ctc' || Criteria2.options[i].value == 'Ctc2x' || Criteria2.options[i].value == 'Ctc3x')// || Criteria2.options[i].value == 'Src' )
			{
				Criteria2.options[i].disabled = true;
			} else {
				Criteria2.options[i].disabled = false;
			}
			if ( Criteria2.value == 'Ctc' || Criteria2.value == 'Ctc2x' || Criteria2.value == 'Ctc3x' )
			{
				errFlag = true;
			}
		}
		if ( errFlag )
			Criteria2.value = -1;
	}
}

  function validate()
  {
    var resultfor = document.getElementById('ResultFor');
    var profiletype = document.getElementById('ProfileType');
    var startdate = document.getElementById('StartDate');
    var startmonth = document.getElementById('StartMonth');
    var startyear = document.getElementById('StartYear');
    var enddate = document.getElementById('EndDate');
    var endmonth = document.getElementById('EndMonth');
    var endyear = document.getElementById('EndYear');
    var criteria1 = document.getElementById('Criteria1');
    var criteria2 = document.getElementById('Criteria2');
    var errmsg = '';

    if ( resultfor.value == 'Fresh' ) {
      profiletype.disabled = true;
      enddate.disabled = endmonth.disabled = endyear.disabled =false;
//      for(i=0;i<criteria1.length; i++) {
//        if ( criteria1.options[i].value == 'Src' /*|| criteria1.options[i].value == 'Edu'*/ ) {
//	  criteria1.options[i].disabled = false;
//	  criteria2.options[i].disabled = false;
//	 // break;
//	}
//     }
    } else {
      profiletype.disabled = false;
      enddate.disabled = endmonth.disabled = endyear.disabled = true;
      if ( criteria1.value == 'Src' /*|| criteria1.value == 'Edu'*/ ) {
       // criteria1.value = -1;
      }
      if ( criteria2.value == 'Src' /*|| criteria2.value == 'Edu'*/ ) {
       // criteria2.value = -1;
      }
      for(i=0;i<criteria1.length; i++) {
        if ( criteria1.options[i].value == 'Src' /*|| criteria1.options[i].value == 'Edu'*/ ) {
	 // criteria1.options[i].disabled = true;
	 // criteria2.options[i].disabled = true;
	  //break;
	}
      }
    }

    if ( startdate.value == -1 || startmonth.value == -1 || startyear.value == -1 ) {
      errmsg += "Please select valid start date.\n";
    } else if ( isValidDate(startdate.value, startmonth.value, startyear.value) == false ) {
      errmsg += "Please select valid start date.\n";
    }

    if ( resultfor == 'Fresh' ) {
      if ( enddate.value == -1 && endmonth.value == -1 && endyear.value == -1 ) {
      } else if ( enddate.value == -1 || endmonth.value == -1 || endyear.value  == -1 ) {
        errmsg += "Please select valid end date.\n";
      } else if ( isValidDate(enddate.value, endmonth.value, endyear.value) == false) {
        errmsg += "Please select valid end date.\n";
      }
      if( CompareDate(startdate.value, startmonth.value, startyear.value, enddate.value, endmonth.value, endyear.value) == false ) {
        errmsg += "Start date cannot be later than end date.\n";
      }
    }
    if ( criteria1.value == -1 && criteria2.value == -1 ) {
      errmsg += "Please select atlease one criteria.\n";
    } else if ( criteria1.value == criteria2.value ) {
	errmsg += "Both criterias can not have same value.\n";
    }
    if ( errmsg.length > 0 ) {
      alert(errmsg);
      return false;
    } else {
      return true;
    }
  }

  function CompareDate(startdate, startmonth, startyear, enddate, endmonth, endyear)
  {
    if (startyear > endyear ) {
      return false;
    } else if ( startyear == endyear ) {
        if ( startmonth > endmonth ) {
	  return false;
	} else {
	  if  ( startdate > enddate) {
	    return false;
	  }
	}
    }
    return true;
  }

  function isValidDate(Date, Month, Year ) {
    var monthstr = "-01-03-05-07-08-10-12-";
    if ( Year < 1900 || Year > 2100 ) {
      return false;
    } else if ( Month == 2 ) {
      if (( Year%400 == 0 || Year%100 == 0 || Year%4 == 0 ) && Date > 29 ) {
        return false;
      } else if ( Date > 28 ) {
        return false;
      }
    } else if ( monthstr.indexOf('-' + Month + '-') == -1 && Date == 31) {
      return false;
    }
    return true;
  }
  </script>
</html>