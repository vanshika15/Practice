<?php /* Smarty version 2.6.19, created on 2015-01-08 18:36:06
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_apply_summary.tpl */ ?>
<html>
<head>
<title>
  Apply dashboard
</title>
</head>
<body>
 <form name="applyDashboard" action="dashboard_apply_summary.php" method="post">
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="85%">
    <TR>
      <TD width="178"></TD>
      <TD width="10"></TD>
      <TD width="57"></TD>
      <TD width="57"></TD>
      <TD width="46"></TD>
      <TD width="46"></TD>
      <TD width="57"></TD>
      <TD width="57"></TD>
    </TR>
    <TR>
      <TD width="178"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Enter 
        Duration</font></b></TD>
      <TD width="10"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startday" value="<?php echo $this->_tpl_vars['startday']; ?>
">
                          <option value="01" <?php if ($this->_tpl_vars['startday'] == 1): ?> selected <?php endif; ?>>1</option>
                        <option value="02" <?php if ($this->_tpl_vars['startday'] == 2): ?> selected <?php endif; ?>>2</option>
                        <option value="03" <?php if ($this->_tpl_vars['startday'] == 3): ?> selected <?php endif; ?>>3</option>
                        <option value="04" <?php if ($this->_tpl_vars['startday'] == 4): ?> selected <?php endif; ?>>4</option>
                        <option value="05" <?php if ($this->_tpl_vars['startday'] == 5): ?> selected <?php endif; ?>>5</option>
                        <option value="06" <?php if ($this->_tpl_vars['startday'] == 6): ?> selected <?php endif; ?>>6</option>
                        <option value="07" <?php if ($this->_tpl_vars['startday'] == 7): ?> selected <?php endif; ?>>7</option>
                        <option value="08" <?php if ($this->_tpl_vars['startday'] == 8): ?> selected <?php endif; ?>>8</option>
                        <option value="09" <?php if ($this->_tpl_vars['startday'] == 9): ?> selected <?php endif; ?>>9</option>
                        <option value="10" <?php if ($this->_tpl_vars['startday'] == 10): ?> selected <?php endif; ?>>10</option>
                        <option value="11" <?php if ($this->_tpl_vars['startday'] == 11): ?> selected <?php endif; ?>>11</option>
                        <option value="12" <?php if ($this->_tpl_vars['startday'] == 12): ?> selected <?php endif; ?>>12</option>
                        <option value="13" <?php if ($this->_tpl_vars['startday'] == 13): ?> selected <?php endif; ?>>13</option>
                        <option value="14" <?php if ($this->_tpl_vars['startday'] == 14): ?> selected <?php endif; ?>>14</option>
                        <option value="15" <?php if ($this->_tpl_vars['startday'] == 15): ?> selected <?php endif; ?>>15</option>
                        <option value="16" <?php if ($this->_tpl_vars['startday'] == 16): ?> selected <?php endif; ?>>16</option>
                        <option value="17" <?php if ($this->_tpl_vars['startday'] == 17): ?> selected <?php endif; ?>>17</option>
                        <option value="18" <?php if ($this->_tpl_vars['startday'] == 18): ?> selected <?php endif; ?>>18</option>
                        <option value="19" <?php if ($this->_tpl_vars['startday'] == 19): ?> selected <?php endif; ?>>19</option>
                        <option value="20" <?php if ($this->_tpl_vars['startday'] == 20): ?> selected <?php endif; ?>>20</option>
                        <option value="21" <?php if ($this->_tpl_vars['startday'] == 21): ?> selected <?php endif; ?>>21</option>
                        <option value="22" <?php if ($this->_tpl_vars['startday'] == 22): ?> selected <?php endif; ?>>22</option>
                        <option value="23" <?php if ($this->_tpl_vars['startday'] == 23): ?> selected <?php endif; ?>>23</option>
                        <option value="24" <?php if ($this->_tpl_vars['startday'] == 24): ?> selected <?php endif; ?>>24</option>
                        <option value="25" <?php if ($this->_tpl_vars['startday'] == 25): ?> selected <?php endif; ?>>25</option>
                        <option value="26" <?php if ($this->_tpl_vars['startday'] == 26): ?> selected <?php endif; ?>>26</option>
                        <option value="27" <?php if ($this->_tpl_vars['startday'] == 27): ?> selected <?php endif; ?>>27</option>
                        <option value="28" <?php if ($this->_tpl_vars['startday'] == 28): ?> selected <?php endif; ?>>28</option>
                        <option value="29" <?php if ($this->_tpl_vars['startday'] == 29): ?> selected <?php endif; ?>>29</option>
                        <option value="30" <?php if ($this->_tpl_vars['startday'] == 30): ?> selected <?php endif; ?>>30</option>
                        <option value="31" <?php if ($this->_tpl_vars['startday'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startmonth" value="<?php echo $this->_tpl_vars['startmonth']; ?>
">
           <option value="01" <?php if ($this->_tpl_vars['startmonth'] == '01'): ?> selected <?php endif; ?>>JAN</option>
           <option value="02" <?php if ($this->_tpl_vars['startmonth'] == '02'): ?> selected <?php endif; ?>>FEB</option>
           <option value="03" <?php if ($this->_tpl_vars['startmonth'] == '03'): ?> selected <?php endif; ?>>MAR</option>
           <option value="04" <?php if ($this->_tpl_vars['startmonth'] == '04'): ?> selected <?php endif; ?>>APR</option>
           <option value="05" <?php if ($this->_tpl_vars['startmonth'] == '05'): ?> selected <?php endif; ?>>MAY</option>
           <option value="06" <?php if ($this->_tpl_vars['startmonth'] == '06'): ?> selected <?php endif; ?>>JUN</option>
           <option value="07" <?php if ($this->_tpl_vars['startmonth'] == '07'): ?> selected <?php endif; ?>>JUL</option>
           <option value="08" <?php if ($this->_tpl_vars['startmonth'] == '08'): ?> selected <?php endif; ?>>AUG</option>
           <option value="09" <?php if ($this->_tpl_vars['startmonth'] == '09'): ?> selected <?php endif; ?>>SEP</option>
           <option value="10" <?php if ($this->_tpl_vars['startmonth'] == '10'): ?> selected <?php endif; ?>>OCT</option>
           <option value="11" <?php if ($this->_tpl_vars['startmonth'] == '11'): ?> selected <?php endif; ?>>NOV</option>
           <option value="12" <?php if ($this->_tpl_vars['startmonth'] == '12'): ?> selected <?php endif; ?>>DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="startyear" value="<?php echo $this->_tpl_vars['startyear']; ?>
">
          <option value="2004" <?php if ($this->_tpl_vars['startyear'] == 2004): ?> selected <?php endif; ?>>2004</option>
                <option value="2005" <?php if ($this->_tpl_vars['startyear'] == 2005): ?> selected <?php endif; ?>>2005</option>
                <option value="2006" <?php if ($this->_tpl_vars['startyear'] == 2006): ?> selected <?php endif; ?>>2006</option>
                <option value="2007" <?php if ($this->_tpl_vars['startyear'] == 2007): ?> selected <?php endif; ?>>2007</option>
                <option value="2008" <?php if ($this->_tpl_vars['startyear'] == 2008): ?> selected <?php endif; ?>>2008</option>
                <option value="2009" <?php if ($this->_tpl_vars['startyear'] == 2009): ?> selected <?php endif; ?>>2009</option>
                <option value="2010" <?php if ($this->_tpl_vars['startyear'] == 2010): ?> selected <?php endif; ?>>2010</option>
		<option value="2011" <?php if ($this->_tpl_vars['startyear'] == 2011): ?> selected <?php endif; ?>>2011</option>
		<option value="2012" <?php if ($this->_tpl_vars['startyear'] == 2012): ?> selected <?php endif; ?>>2012</option>
		<option value="2013" <?php if ($this->_tpl_vars['startyear'] == 2013): ?> selected <?php endif; ?>>2013</option>
		<option value="2014" <?php if ($this->_tpl_vars['startyear'] == 2014): ?> selected <?php endif; ?>>2014</option>
		<option value="2015" <?php if ($this->_tpl_vars['startyear'] == 2015): ?> selected <?php endif; ?>>2015</option>
        </select>
        </font></b></TD>
      <TD width="46">
        <div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To</font></b></div>
      </TD>
      <TD width="46"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endday" value="<?php echo $this->_tpl_vars['endday']; ?>
">
                          <option value="01" <?php if ($this->_tpl_vars['endday'] == 1): ?> selected <?php endif; ?>>1</option>
                        <option value="02" <?php if ($this->_tpl_vars['endday'] == 2): ?> selected <?php endif; ?>>2</option>
                        <option value="03" <?php if ($this->_tpl_vars['endday'] == 3): ?> selected <?php endif; ?>>3</option>
                        <option value="04" <?php if ($this->_tpl_vars['endday'] == 4): ?> selected <?php endif; ?>>4</option>
                        <option value="05" <?php if ($this->_tpl_vars['endday'] == 5): ?> selected <?php endif; ?>>5</option>
                        <option value="06" <?php if ($this->_tpl_vars['endday'] == 6): ?> selected <?php endif; ?>>6</option>
                        <option value="07" <?php if ($this->_tpl_vars['endday'] == 7): ?> selected <?php endif; ?>>7</option>
                        <option value="08" <?php if ($this->_tpl_vars['endday'] == 8): ?> selected <?php endif; ?>>8</option>
                        <option value="09" <?php if ($this->_tpl_vars['endday'] == 9): ?> selected <?php endif; ?>>9</option>
                        <option value="10" <?php if ($this->_tpl_vars['endday'] == 10): ?> selected <?php endif; ?>>10</option>
                        <option value="11" <?php if ($this->_tpl_vars['endday'] == 11): ?> selected <?php endif; ?>>11</option>
                        <option value="12" <?php if ($this->_tpl_vars['endday'] == 12): ?> selected <?php endif; ?>>12</option>
                        <option value="13" <?php if ($this->_tpl_vars['endday'] == 13): ?> selected <?php endif; ?>>13</option>
                        <option value="14" <?php if ($this->_tpl_vars['endday'] == 14): ?> selected <?php endif; ?>>14</option>
                        <option value="15" <?php if ($this->_tpl_vars['endday'] == 15): ?> selected <?php endif; ?>>15</option>
                        <option value="16" <?php if ($this->_tpl_vars['endday'] == 16): ?> selected <?php endif; ?>>16</option>
                        <option value="17" <?php if ($this->_tpl_vars['endday'] == 17): ?> selected <?php endif; ?>>17</option>
                        <option value="18" <?php if ($this->_tpl_vars['endday'] == 18): ?> selected <?php endif; ?>>18</option>
                        <option value="19" <?php if ($this->_tpl_vars['endday'] == 19): ?> selected <?php endif; ?>>19</option>
                        <option value="20" <?php if ($this->_tpl_vars['endday'] == 20): ?> selected <?php endif; ?>>20</option>
                        <option value="21" <?php if ($this->_tpl_vars['endday'] == 21): ?> selected <?php endif; ?>>21</option>
                        <option value="22" <?php if ($this->_tpl_vars['endday'] == 22): ?> selected <?php endif; ?>>22</option>
                        <option value="23" <?php if ($this->_tpl_vars['endday'] == 23): ?> selected <?php endif; ?>>23</option>
                        <option value="24" <?php if ($this->_tpl_vars['endday'] == 24): ?> selected <?php endif; ?>>24</option>
                         <option value="25" <?php if ($this->_tpl_vars['endday'] == 25): ?> selected <?php endif; ?>>25</option>
                        <option value="26" <?php if ($this->_tpl_vars['endday'] == 26): ?> selected <?php endif; ?>>26</option>
                        <option value="27" <?php if ($this->_tpl_vars['endday'] == 27): ?> selected <?php endif; ?>>27</option>
                        <option value="28" <?php if ($this->_tpl_vars['endday'] == 28): ?> selected <?php endif; ?>>28</option>
                        <option value="29" <?php if ($this->_tpl_vars['endday'] == 29): ?> selected <?php endif; ?>>29</option>
                        <option value="30" <?php if ($this->_tpl_vars['endday'] == 30): ?> selected <?php endif; ?>>30</option>
                        <option value="31" <?php if ($this->_tpl_vars['endday'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endmonth" value="<?php echo $this->_tpl_vars['endmonth']; ?>
">
           <option value="01" <?php if ($this->_tpl_vars['endmonth'] == '01'): ?> selected <?php endif; ?>>JAN</option>
           <option value="02" <?php if ($this->_tpl_vars['endmonth'] == '02'): ?> selected <?php endif; ?>>FEB</option>
           <option value="03" <?php if ($this->_tpl_vars['endmonth'] == '03'): ?> selected <?php endif; ?>>MAR</option>
           <option value="04" <?php if ($this->_tpl_vars['endmonth'] == '04'): ?> selected <?php endif; ?>>APR</option>
           <option value="05" <?php if ($this->_tpl_vars['endmonth'] == '05'): ?> selected <?php endif; ?>>MAY</option>
           <option value="06" <?php if ($this->_tpl_vars['endmonth'] == '06'): ?> selected <?php endif; ?>>JUN</option>
           <option value="07" <?php if ($this->_tpl_vars['endmonth'] == '07'): ?> selected <?php endif; ?>>JUL</option>
           <option value="08" <?php if ($this->_tpl_vars['endmonth'] == '08'): ?> selected <?php endif; ?>>AUG</option>
           <option value="09" <?php if ($this->_tpl_vars['endmonth'] == '09'): ?> selected <?php endif; ?>>SEP</option>
           <option value="10" <?php if ($this->_tpl_vars['endmonth'] == '10'): ?> selected <?php endif; ?>>OCT</option>
           <option value="11" <?php if ($this->_tpl_vars['endmonth'] == '11'): ?> selected <?php endif; ?>>NOV</option>
           <option value="12" <?php if ($this->_tpl_vars['endmonth'] == '12'): ?> selected <?php endif; ?>>DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="endyear" value="<?php echo $this->_tpl_vars['endyear']; ?>
">
          <option value="2004" <?php if ($this->_tpl_vars['endyear'] == 2004): ?> selected <?php endif; ?>>2004</option>
                <option value="2005" <?php if ($this->_tpl_vars['endyear'] == 2005): ?> selected <?php endif; ?>>2005</option>
                <option value="2006" <?php if ($this->_tpl_vars['endyear'] == 2006): ?> selected <?php endif; ?>>2006</option>
                <option value="2007" <?php if ($this->_tpl_vars['endyear'] == 2007): ?> selected <?php endif; ?>>2007</option>
                <option value="2008" <?php if ($this->_tpl_vars['endyear'] == 2008): ?> selected <?php endif; ?>>2008</option>
                <option value="2009" <?php if ($this->_tpl_vars['endyear'] == 2009): ?> selected <?php endif; ?>>2009</option>
                <option value="2010" <?php if ($this->_tpl_vars['endyear'] == 2010): ?> selected <?php endif; ?>>2010</option>
		<option value="2011" <?php if ($this->_tpl_vars['endyear'] == 2011): ?> selected <?php endif; ?>>2011</option>
		<option value="2012" <?php if ($this->_tpl_vars['endyear'] == 2012): ?> selected <?php endif; ?>>2012</option>
		<option value="2013" <?php if ($this->_tpl_vars['endyear'] == 2013): ?> selected <?php endif; ?>>2013</option>
		<option value="2014" <?php if ($this->_tpl_vars['endyear'] == 2014): ?> selected <?php endif; ?>>2014</option>
		<option value="2015" <?php if ($this->_tpl_vars['endyear'] == 2015): ?> selected <?php endif; ?>>2015</option>
        </select>
        </font></b></TD>
    </TR>
  </table>
<table>
 <tr><td><input type="submit" name="submit" value="submit"></td><td> 
  </table>
 
<br>
<!-- Apply summary dashboard -->
<?php echo $this->_tpl_vars['str']; ?>

<table><tr><td><input type="submit" name="download" value="Download"></td></tr></table>
</form>
<!--
<table border="1">
 <caption>Apply Summary Dashboard</caption>
 <tr><th colspan="9"><?php echo $this->_tpl_vars['title_apply_dashboard']; ?>
</th><tr>
 <tr><td align="center">Date</td><td>Single Applies</td><td>Multiple Applies</td><td>Total</td><td>Unique Users</td><td>Normal Applies</td>
<td>Eapps Applies</td><td>Total</td><td>Unique User</td></tr>
 <?php $_from = $this->_tpl_vars['apply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
   <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['single']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_single_multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_single_multiple']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['normal']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['eapps']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_normal_eapps']; ?>
</td>
                       <td><?php echo $this->_tpl_vars['columnheading']['total_unique_user']; ?>
</td></tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
-->
<!-- Apply summary dashboard (ends here)--> 
</body>
</html>
