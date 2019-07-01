<?php /* Smarty version 2.6.19, created on 2012-08-21 09:53:28
         compiled from ni/nidashboard/dashboard_mnjviews_new.tpl */ ?>
<html>
<head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>


<?php echo $this->_tpl_vars['MESSAGE']; ?>

<table width="99%" border="1" align="center" bordercolor="#CCCCFF">
<tr align="center">
<?php if ($this->_tpl_vars['datefind'] == 'invalid'): ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Server time : </font></b></td>
  <td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b>Note:
      Today's statistics(acc.to server time)</b></font><b></b></td>
<?php else: ?>
  <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Find Date : </font></b></td>
<?php endif; ?>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of Impressions for homepage Served</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of unique users for homepage Served</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of Searches from Homepage</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of clicks for job details page Served from recommends</font></b></td>
     <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Number of clicks from career tools section</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total number of feeds activated till now</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total users with javascript disabled</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total changes in the color</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Applies from Naukrigulf Recommends</font></b></td>
    <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No. of clicks from profile completion links</font></b></td>
	
</tr>

<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['DETAILS_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
<tr align="center">
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageDate']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageTotalviews']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageTotalUniqueviews']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageJobSearches']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageJobPageViews']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageCareerTools']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageFeedsCount']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageJsDisabledHits']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageColorChanges']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageRecommendsApplies']; ?>
</td>
  <td>&nbsp;<?php echo $this->_tpl_vars['DETAILS_ARR'][$this->_sections['cnt']['index']]['mnjHomepageProfileCompleteClicks']; ?>
</td>
</tr>
<?php endfor; endif; ?>


</table>
<br/>

</body>
</html>