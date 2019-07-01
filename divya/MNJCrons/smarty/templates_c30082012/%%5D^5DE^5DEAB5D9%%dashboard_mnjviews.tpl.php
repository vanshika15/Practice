<?php /* Smarty version 2.6.19, created on 2012-08-21 09:53:11
         compiled from ni/nidashboard/dashboard_mnjviews.tpl */ ?>
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

	link = link+"&sday="+sday+"&smonth="+smonth+"&syear="+syear+"&eday="+eday+"&emonth="+emonth+"&eyear="+eyear;
	window.open(link);
}

</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<font color="red"><?php echo $this->_tpl_vars['MESSAGE']; ?>
</font>
<form name="formmain" method = "post" onsubmit = "openNewWindow('dashboard_mnjviews.php?action=overview')" action = "dashboard_mnjviews.php">
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
<table width="85%" border="1" align="center" bordercolor="#CCCCFF">
<?php if ($this->_tpl_vars['datefind'] != 'invalid'): ?>
  <tr> 
 <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
  <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<b><?php echo $this->_tpl_vars['finddate']; ?>
</b></font></td>
 </tr>
 <tr> 
 <?php else: ?>
  <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server 
      time : </font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['servertime']; ?>
</font></td>
	</tr>
	<tr> 
    <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note: 
      Today's statistics(acc.to server time)</b></font><b></b></td>
  </tr>
<?php endif; ?>
	
  
  <tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageDate']; ?>
</font></td>
  </tr>
   <tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of Impressions for homepage Served</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageTotalviews']; ?>
</font></td>
  </tr><tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of unique users for homepage Served</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageTotalUniqueviews']; ?>
</font></td>
  </tr><tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of Searches from Homepage</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageJobSearches']; ?>
</font></td>
  </tr><tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of clicks for job details page Served from recommends</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageJobPageViews']; ?>
</font></td>
    </tr>
    <tr> 
    <tr> 
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of clicks from career tools section</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageCareerTools']; ?>
</font></td>
    </tr>
    <tr> 
    
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total number of feeds activated till now</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageFeedsCount']; ?>
</font></td>
  </tr>
   
  <tr> 
    
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total users with javascript disabled</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageJsDisabledHits']; ?>
</font></td>
  </tr>
  
  <tr> 
    
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total changes in the color</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageColorChanges']; ?>
</font></td>
  </tr>
  
  <tr> 
    
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Applies from Naukrigulf Recommends</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageRecommendsApplies']; ?>
</font></td>
  </tr>
 
  <tr> 
    
    <td width="46%"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of clicks from profile completion links</font></b></td>
    <td width="54%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][0]['mnjHomepageProfileCompleteClicks']; ?>
</font></td>
  </tr>

</table>
<br />

</body>
</html>