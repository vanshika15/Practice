<?php /* Smarty version 2.6.19, created on 2012-01-27 14:55:38
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_browse_new.tpl */ ?>
<html>
<head>
 <title>
  Browse Dashboard
 </title>
<script>
function dropDownSelected(id)
 {
  var dropdown;
  if(id=='catid_entered1')
    dropdown='1';
  else
    dropdown='2';
document.getElementById('dropdown').value=dropdown;
return dropdown;
 } 

</script>
</head>
<body>
<form name="browseDashboard" action="dashboard_browse_new.php" method="post">
<input type=hidden name=dropdown id=dropdown value="">
  <table align="center" border="1" bordercolor="#CCCCFF" width="85%">
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
        </select>
        </font></b></TD>
    </TR>
  </table>
<table>
 <tr><td><input type="submit" name="submit" value="submit"></td><td><input type="submit" name="download1" value="Download"></td><tr> 
 
  </table>
 
<br>
<table align="center" border="1">
       <tr><td>Type Of MIS(Select One)</td></tr>
       <tr><td>Hits and Applies summary</td><td><?php echo $this->_tpl_vars['catiddropdown1']; ?>
</td></tr>
       <tr><td>Category Wise-Detailed</td><td><?php echo $this->_tpl_vars['catiddropdown2']; ?>
</td></tr>
</table>

<?php if ($this->_tpl_vars['str']): ?>
   <?php echo $this->_tpl_vars['str']; ?>

<?php endif; ?>
<!--<table><tr><td><input type="submit" name="download" value="Download"></td></tr></table> -->
</form>
</body>
</html>