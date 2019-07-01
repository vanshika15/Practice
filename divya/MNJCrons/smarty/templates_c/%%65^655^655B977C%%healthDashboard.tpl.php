<?php /* Smarty version 2.6.19, created on 2017-02-02 14:29:30
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/healthDashboard.tpl */ ?>
<html>
<head>
<title>Health Dashboard</title>
<body>

<form name="healthDashboard" action="healthDashboard.php" method="get">
<input type=hidden name=dropdown id=dropdown value="">
  <table align="center" border="1" cellspacing=10 cellpadding=2 bordercolor="#CCCCFF" width="85%">
    
<TR>
<TD align=center><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><b><br>DASHBOARD :: OVERVIEW </b><br><br></font></TD>
    </TR>
     <tr><td><table width="70%" border="0" bordercolor="#CCCCFF">
     
     <TR><TD>&nbsp</TD></TR>
     <TR>
      <TD rowspan=2 align=center><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Enter Duration :&nbsp;</font></b></TD>
      <TD width="46">
      <div align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">From :&nbsp;</font></b></div>
      </TD>
      <TD width="10"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="from_date" value="<?php echo $this->_tpl_vars['from_date']; ?>
">
 			<option value="01" <?php if ($this->_tpl_vars['from_date'] == 1): ?> selected <?php endif; ?>>1</option>
                        <option value="02" <?php if ($this->_tpl_vars['from_date'] == 2): ?> selected <?php endif; ?>>2</option>
                        <option value="03" <?php if ($this->_tpl_vars['from_date'] == 3): ?> selected <?php endif; ?>>3</option>
                        <option value="04" <?php if ($this->_tpl_vars['from_date'] == 4): ?> selected <?php endif; ?>>4</option>
                        <option value="05" <?php if ($this->_tpl_vars['from_date'] == 5): ?> selected <?php endif; ?>>5</option>
                        <option value="06" <?php if ($this->_tpl_vars['from_date'] == 6): ?> selected <?php endif; ?>>6</option>
                        <option value="07" <?php if ($this->_tpl_vars['from_date'] == 7): ?> selected <?php endif; ?>>7</option>
                        <option value="08" <?php if ($this->_tpl_vars['from_date'] == 8): ?> selected <?php endif; ?>>8</option>
                        <option value="09" <?php if ($this->_tpl_vars['from_date'] == 9): ?> selected <?php endif; ?>>9</option>
                        <option value="10" <?php if ($this->_tpl_vars['from_date'] == 10): ?> selected <?php endif; ?>>10</option>
                        <option value="11" <?php if ($this->_tpl_vars['from_date'] == 11): ?> selected <?php endif; ?>>11</option>
                        <option value="12" <?php if ($this->_tpl_vars['from_date'] == 12): ?> selected <?php endif; ?>>12</option>
                        <option value="13" <?php if ($this->_tpl_vars['from_date'] == 13): ?> selected <?php endif; ?>>13</option>
                        <option value="14" <?php if ($this->_tpl_vars['from_date'] == 14): ?> selected <?php endif; ?>>14</option>
                        <option value="15" <?php if ($this->_tpl_vars['from_date'] == 15): ?> selected <?php endif; ?>>15</option>
                        <option value="16" <?php if ($this->_tpl_vars['from_date'] == 16): ?> selected <?php endif; ?>>16</option>
                        <option value="17" <?php if ($this->_tpl_vars['from_date'] == 17): ?> selected <?php endif; ?>>17</option>
                        <option value="18" <?php if ($this->_tpl_vars['from_date'] == 18): ?> selected <?php endif; ?>>18</option>
                        <option value="19" <?php if ($this->_tpl_vars['from_date'] == 19): ?> selected <?php endif; ?>>19</option>
                        <option value="20" <?php if ($this->_tpl_vars['from_date'] == 20): ?> selected <?php endif; ?>>20</option>
                        <option value="21" <?php if ($this->_tpl_vars['from_date'] == 21): ?> selected <?php endif; ?>>21</option>
                        <option value="22" <?php if ($this->_tpl_vars['from_date'] == 22): ?> selected <?php endif; ?>>22</option>
                        <option value="23" <?php if ($this->_tpl_vars['from_date'] == 23): ?> selected <?php endif; ?>>23</option>
                        <option value="24" <?php if ($this->_tpl_vars['from_date'] == 24): ?> selected <?php endif; ?>>24</option>
                        <option value="25" <?php if ($this->_tpl_vars['from_date'] == 25): ?> selected <?php endif; ?>>25</option>
                        <option value="26" <?php if ($this->_tpl_vars['from_date'] == 26): ?> selected <?php endif; ?>>26</option>
                        <option value="27" <?php if ($this->_tpl_vars['from_date'] == 27): ?> selected <?php endif; ?>>27</option>
                        <option value="28" <?php if ($this->_tpl_vars['from_date'] == 28): ?> selected <?php endif; ?>>28</option>
                        <option value="29" <?php if ($this->_tpl_vars['from_date'] == 29): ?> selected <?php endif; ?>>29</option>
                        <option value="30" <?php if ($this->_tpl_vars['from_date'] == 30): ?> selected <?php endif; ?>>30</option>
                        <option value="31" <?php if ($this->_tpl_vars['from_date'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        </font></b></TD>
 <TD width="40"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="from_month" value="<?php echo $this->_tpl_vars['from_month']; ?>
">
           <option value="01" <?php if ($this->_tpl_vars['from_month'] == '01'): ?> selected <?php endif; ?>>JAN</option>
           <option value="02" <?php if ($this->_tpl_vars['from_month'] == '02'): ?> selected <?php endif; ?>>FEB</option>
           <option value="03" <?php if ($this->_tpl_vars['from_month'] == '03'): ?> selected <?php endif; ?>>MAR</option>
           <option value="04" <?php if ($this->_tpl_vars['from_month'] == '04'): ?> selected <?php endif; ?>>APR</option>
           <option value="05" <?php if ($this->_tpl_vars['from_month'] == '05'): ?> selected <?php endif; ?>>MAY</option>
           <option value="06" <?php if ($this->_tpl_vars['from_month'] == '06'): ?> selected <?php endif; ?>>JUN</option>
           <option value="07" <?php if ($this->_tpl_vars['from_month'] == '07'): ?> selected <?php endif; ?>>JUL</option>
           <option value="08" <?php if ($this->_tpl_vars['from_month'] == '08'): ?> selected <?php endif; ?>>AUG</option>
           <option value="09" <?php if ($this->_tpl_vars['from_month'] == '09'): ?> selected <?php endif; ?>>SEP</option>
           <option value="10" <?php if ($this->_tpl_vars['from_month'] == '10'): ?> selected <?php endif; ?>>OCT</option>
           <option value="11" <?php if ($this->_tpl_vars['from_month'] == '11'): ?> selected <?php endif; ?>>NOV</option>
           <option value="12" <?php if ($this->_tpl_vars['from_month'] == '12'): ?> selected <?php endif; ?>>DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="from_year" value="<?php echo $this->_tpl_vars['from_year']; ?>
">
          <option value="2004" <?php if ($this->_tpl_vars['from_year'] == 2004): ?> selected <?php endif; ?>>2004</option>
                <option value="2005" <?php if ($this->_tpl_vars['from_year'] == 2005): ?> selected <?php endif; ?>>2005</option>
                <option value="2006" <?php if ($this->_tpl_vars['from_year'] == 2006): ?> selected <?php endif; ?>>2006</option>
                <option value="2007" <?php if ($this->_tpl_vars['from_year'] == 2007): ?> selected <?php endif; ?>>2007</option>
                <option value="2008" <?php if ($this->_tpl_vars['from_year'] == 2008): ?> selected <?php endif; ?>>2008</option>
                <option value="2009" <?php if ($this->_tpl_vars['from_year'] == 2009): ?> selected <?php endif; ?>>2009</option>
                <option value="2010" <?php if ($this->_tpl_vars['from_year'] == 2010): ?> selected <?php endif; ?>>2010</option>
		<option value="2011" <?php if ($this->_tpl_vars['from_year'] == 2011): ?> selected <?php endif; ?>>2011</option>
		<option value="2012" <?php if ($this->_tpl_vars['from_year'] == 2012): ?> selected <?php endif; ?>>2012</option>
		<option value="2013" <?php if ($this->_tpl_vars['from_year'] == 2013): ?> selected <?php endif; ?>>2013</option>
		<option value="2014" <?php if ($this->_tpl_vars['from_year'] == 2014): ?> selected <?php endif; ?>>2014</option>
        </select>
        </font></b></TD>
      </TR>
      <TR>
      <TD width="46">
        <div align="right"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">To : &nbsp;</font></b></div>
      </TD>
      <TD width="10"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="to_date" value="<?php echo $this->_tpl_vars['to_date']; ?>
">
<option value="01" <?php if ($this->_tpl_vars['to_date'] == 1): ?> selected <?php endif; ?>>1</option>
                        <option value="02" <?php if ($this->_tpl_vars['to_date'] == 2): ?> selected <?php endif; ?>>2</option>
                        <option value="03" <?php if ($this->_tpl_vars['to_date'] == 3): ?> selected <?php endif; ?>>3</option>
                        <option value="04" <?php if ($this->_tpl_vars['to_date'] == 4): ?> selected <?php endif; ?>>4</option>
                        <option value="05" <?php if ($this->_tpl_vars['to_date'] == 5): ?> selected <?php endif; ?>>5</option>
                        <option value="06" <?php if ($this->_tpl_vars['to_date'] == 6): ?> selected <?php endif; ?>>6</option>
                        <option value="07" <?php if ($this->_tpl_vars['to_date'] == 7): ?> selected <?php endif; ?>>7</option>
                        <option value="08" <?php if ($this->_tpl_vars['to_date'] == 8): ?> selected <?php endif; ?>>8</option>
                        <option value="09" <?php if ($this->_tpl_vars['to_date'] == 9): ?> selected <?php endif; ?>>9</option>
                        <option value="10" <?php if ($this->_tpl_vars['to_date'] == 10): ?> selected <?php endif; ?>>10</option>
                        <option value="11" <?php if ($this->_tpl_vars['to_date'] == 11): ?> selected <?php endif; ?>>11</option>
                        <option value="12" <?php if ($this->_tpl_vars['to_date'] == 12): ?> selected <?php endif; ?>>12</option>
                        <option value="13" <?php if ($this->_tpl_vars['to_date'] == 13): ?> selected <?php endif; ?>>13</option>
                        <option value="14" <?php if ($this->_tpl_vars['to_date'] == 14): ?> selected <?php endif; ?>>14</option>
                        <option value="15" <?php if ($this->_tpl_vars['to_date'] == 15): ?> selected <?php endif; ?>>15</option>
                        <option value="16" <?php if ($this->_tpl_vars['to_date'] == 16): ?> selected <?php endif; ?>>16</option>
                        <option value="17" <?php if ($this->_tpl_vars['to_date'] == 17): ?> selected <?php endif; ?>>17</option>
                        <option value="18" <?php if ($this->_tpl_vars['to_date'] == 18): ?> selected <?php endif; ?>>18</option>
                        <option value="19" <?php if ($this->_tpl_vars['to_date'] == 19): ?> selected <?php endif; ?>>19</option>
                        <option value="20" <?php if ($this->_tpl_vars['to_date'] == 20): ?> selected <?php endif; ?>>20</option>
                        <option value="21" <?php if ($this->_tpl_vars['to_date'] == 21): ?> selected <?php endif; ?>>21</option>
                        <option value="22" <?php if ($this->_tpl_vars['to_date'] == 22): ?> selected <?php endif; ?>>22</option>
                        <option value="23" <?php if ($this->_tpl_vars['to_date'] == 23): ?> selected <?php endif; ?>>23</option>
                        <option value="24" <?php if ($this->_tpl_vars['to_date'] == 24): ?> selected <?php endif; ?>>24</option>
                         <option value="25" <?php if ($this->_tpl_vars['to_date'] == 25): ?> selected <?php endif; ?>>25</option>
                        <option value="26" <?php if ($this->_tpl_vars['to_date'] == 26): ?> selected <?php endif; ?>>26</option>
                        <option value="27" <?php if ($this->_tpl_vars['to_date'] == 27): ?> selected <?php endif; ?>>27</option>
                        <option value="28" <?php if ($this->_tpl_vars['to_date'] == 28): ?> selected <?php endif; ?>>28</option>
                        <option value="29" <?php if ($this->_tpl_vars['to_date'] == 29): ?> selected <?php endif; ?>>29</option>
                        <option value="30" <?php if ($this->_tpl_vars['to_date'] == 30): ?> selected <?php endif; ?>>30</option>
                        <option value="31" <?php if ($this->_tpl_vars['to_date'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        </font></b></TD>
      <TD width="40"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="to_month" value="<?php echo $this->_tpl_vars['to_month']; ?>
">
 <option value="01" <?php if ($this->_tpl_vars['to_month'] == '01'): ?> selected <?php endif; ?>>JAN</option>
           <option value="02" <?php if ($this->_tpl_vars['to_month'] == '02'): ?> selected <?php endif; ?>>FEB</option>
           <option value="03" <?php if ($this->_tpl_vars['to_month'] == '03'): ?> selected <?php endif; ?>>MAR</option>
           <option value="04" <?php if ($this->_tpl_vars['to_month'] == '04'): ?> selected <?php endif; ?>>APR</option>
           <option value="05" <?php if ($this->_tpl_vars['to_month'] == '05'): ?> selected <?php endif; ?>>MAY</option>
           <option value="06" <?php if ($this->_tpl_vars['to_month'] == '06'): ?> selected <?php endif; ?>>JUN</option>
           <option value="07" <?php if ($this->_tpl_vars['to_month'] == '07'): ?> selected <?php endif; ?>>JUL</option>
           <option value="08" <?php if ($this->_tpl_vars['to_month'] == '08'): ?> selected <?php endif; ?>>AUG</option>
           <option value="09" <?php if ($this->_tpl_vars['to_month'] == '09'): ?> selected <?php endif; ?>>SEP</option>
           <option value="10" <?php if ($this->_tpl_vars['to_month'] == '10'): ?> selected <?php endif; ?>>OCT</option>
           <option value="11" <?php if ($this->_tpl_vars['to_month'] == '11'): ?> selected <?php endif; ?>>NOV</option>
           <option value="12" <?php if ($this->_tpl_vars['to_month'] == '12'): ?> selected <?php endif; ?>>DEC</option>
        </select>
        </font></b></TD>
      <TD width="57"> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        <select name="to_year" value="<?php echo $this->_tpl_vars['to_year']; ?>
">
          <option value="2004" <?php if ($this->_tpl_vars['to_year'] == 2004): ?> selected <?php endif; ?>>2004</option>
                <option value="2005" <?php if ($this->_tpl_vars['to_year'] == 2005): ?> selected <?php endif; ?>>2005</option>
                <option value="2006" <?php if ($this->_tpl_vars['to_year'] == 2006): ?> selected <?php endif; ?>>2006</option>
                <option value="2007" <?php if ($this->_tpl_vars['to_year'] == 2007): ?> selected <?php endif; ?>>2007</option>
                <option value="2008" <?php if ($this->_tpl_vars['to_year'] == 2008): ?> selected <?php endif; ?>>2008</option>
                <option value="2009" <?php if ($this->_tpl_vars['to_year'] == 2009): ?> selected <?php endif; ?>>2009</option>
                <option value="2010" <?php if ($this->_tpl_vars['to_year'] == 2010): ?> selected <?php endif; ?>>2010</option>
		<option value="2011" <?php if ($this->_tpl_vars['to_year'] == 2011): ?> selected <?php endif; ?>>2011</option>
		<option value="2012" <?php if ($this->_tpl_vars['to_year'] == 2012): ?> selected <?php endif; ?>>2012</option>
		<option value="2013" <?php if ($this->_tpl_vars['to_year'] == 2013): ?> selected <?php endif; ?>>2013</option>
		<option value="2014" <?php if ($this->_tpl_vars['to_year'] == 2014): ?> selected <?php endif; ?>>2014</option>
        </select>
        </font></b></TD>
    </TR>
    <tr><td>&nbsp;</td</tr>
<tr><td colspan=2>&nbsp;</td><td><input type="submit" name="Submit" value="submit"></td>
<td>
<?php if ($this->_tpl_vars['showDownload'] != '1'): ?>
<input type="submit" name="download" value="Download"></td></tr>
 <?php endif; ?>
</table></td></tr>
  </table>

</form>

<?php if ($this->_tpl_vars['noRes'] == '1'): ?>
	<b>Sorry, no results found !!!</b>
<?php else: ?>
<table align="center" cellspacing=5 cellpadding=0 border="1" bordercolor="#CCCCFF" width="85%">
<?php echo $this->_tpl_vars['strTable']; ?>

</table>
<?php endif; ?>

</body>
</html>
