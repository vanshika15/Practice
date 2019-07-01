<?php /* Smarty version 2.6.19, created on 2011-11-28 09:36:58
         compiled from ni/nidashboard/dashboard_logsummary.tpl */ ?>
<html>
<head>
<script>
function openNewWindow(link)
{
	var docF = document.formmain;
//	var stday=document.formmain.startday.options[document.formmain.startday.selectedIndex].value;
	var sday,smonth,syear,eday,emonth,eyear;
	
	sday = docF.startday.value;
	smonth = docF.startmonth.value;
	syear = docF.startyear.value;
	eday = docF.endday.value;
	emonth = docF.endmonth.value;
	eyear = docF.endyear.value;

	link=link+"&sday="+sday+"&smonth="+smonth+"&syear="+syear+"&eday="+eday+"&emonth="+emonth+"&eyear="+eyear;
	window.open(link);
}

</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


<font color="red"><?php echo $this->_tpl_vars['MESSAGE']; ?>
</font>
<form name="formmain" method = "post" onsubmit = "openNewWindow('dashboard_logsummary.php?action=overview')" action = "dashboard_logsummary.php">
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="90%" >
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
    <TR><TD> <input type="submit" name="btngo" value="Go"> </TD> <TD>&nbsp;</TD> </TR>
  </table>
</form>

<br />
<table width="70%" border="1" align="center" bordercolor="#CCCCFF">
  <tr> 
 <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
  <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<b><?php echo $this->_tpl_vars['TOT_ARR']['date']; ?>
</b></font></td>
 </tr>
  <tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Total Searches </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['TOT_ARR']['sumCount']; ?>
</font></td>
  </tr>
<!--
changes to bring it in sync with the tpl on live server..Ajay Sharma 12 oct 10
-->
   <tr>
      <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Total Searches For Logged in user</font></b></td>
      <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['TOT_ARR']['sumLoggedCount']; ?>
</font></td>
  </tr>
  <tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Relevance Searches</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['TOT_ARR']['sumRelCount']; ?>
</font></td>
  </tr>
<!--
changes for the google bot by Ajay Sharma on 12oct10..added new field in tpl for showing results related to google..

-->
  <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total google Searches</font></b></td>
      <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['TOT_ARR']['srchGoogleCount']; ?>
</font></td>
        </tr>

 <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Page Views</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['TOT_ARR']['sumPrev']; ?>
</font></td>
  </tr>
 <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Page Views Premium HomePage</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['TOT_ARR']['premiumjob_homepage']; ?>
</font></td>
  </tr>
  <tr><td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Home Page search</font></b></td><td>&nbsp;</td> </tr>
  <tr> 
    <td width="46%" align ="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Search bar</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['srchbar']): ?><?php echo $this->_tpl_vars['TOT_ARR']['srchbar']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr> 
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse job category Real</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['browsjc']): ?><?php echo $this->_tpl_vars['TOT_ARR']['browsjcr']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
      <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse job category Google</font></b></td>
      <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['browsjc']): ?><?php echo $this->_tpl_vars['TOT_ARR']['browsjcg']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>

<!--  <tr> 
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Featured Company</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['fcompany']): ?><?php echo $this->_tpl_vars['TOT_ARR']['fcompany']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>-->
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Job Zone</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['jbc']): ?><?php echo $this->_tpl_vars['TOT_ARR']['jbc']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <!--<tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Top Employer</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['temployer']): ?><?php echo $this->_tpl_vars['TOT_ARR']['temployer']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>-->
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Top Employer</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['fcompany']): ?><?php echo $this->_tpl_vars['TOT_ARR']['fcompany']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Featured Employer</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['femployer']): ?><?php echo $this->_tpl_vars['TOT_ARR']['femployer']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr> 
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse Location</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['browseloc']): ?><?php echo $this->_tpl_vars['TOT_ARR']['browseloc']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr> 
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica,
    sans-serif" size="2">Premium jobs view all</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif"
    size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['premViewAll']): ?><?php echo $this->_tpl_vars['TOT_ARR']['premViewAll']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Innerpage search</font></b></td><td>&nbsp;</td> </tr>
  <tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search bar</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['qsbar']): ?><?php echo $this->_tpl_vars['TOT_ARR']['qsbar']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search form</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['qsform']): ?><?php echo $this->_tpl_vars['TOT_ARR']['qsform']; ?>
<?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Location Cluster</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['clsLoc']): ?><?php echo $this->_tpl_vars['TOT_ARR']['clsLoc']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Industry Cluster</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['clsInd']): ?><?php echo $this->_tpl_vars['TOT_ARR']['clsInd']; ?>
<?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Freshness Cluster</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['clsFresh']): ?><?php echo $this->_tpl_vars['TOT_ARR']['clsFresh']; ?>
 <?php else: ?>0<?php endif; ?></font></td>
  </tr>
  <tr>
    <td width="46%" align = "center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Employer Cluster</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php if ($this->_tpl_vars['TOT_ARR']['clsEmpl']): ?><?php echo $this->_tpl_vars['TOT_ARR']['clsEmpl']; ?>
<?php else: ?>0<?php endif; ?></font></td>
  </tr>
</table>
<br />

</body>
</html>