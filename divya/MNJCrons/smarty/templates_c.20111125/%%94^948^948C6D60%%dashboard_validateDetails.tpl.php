<?php /* Smarty version 2.6.19, created on 2011-02-02 16:56:28
         compiled from /usr/local/apache/htdocs//smarty/templates/dashboard/dashboard_validateDetails.tpl */ ?>
 <html>
<head>
<title>Email Validation</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="85%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
  <tr>
    <td width="552">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="5"><b><font color="#66CCFF">DASHBOARD</font>
        :: VALIDATE DETAILS </b></font></div>
    </td>
    <td width="225">
      <div align="right"><img src="http://w10.naukri.com/gifs/jobs-india.gif"></div>
    </td>
  </tr>
</table>
<BR />
<form method="post">
   <INPUT type="hidden" name="scripttocall" >
  <TABLE align="center" border="1" bordercolor="#CCCCFF" width="85%" >
	<TR>
      <TD>
        <input type="submit" name="SUBMIT" value="View Dashboard Datewise">
      </TD>
      <TD>From Date :-&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="DD">
          <option value="01" <?php if ($this->_tpl_vars['DD'] == '01'): ?> selected <?php endif; ?>>1</option>
          <option value="02" <?php if ($this->_tpl_vars['DD'] == '02'): ?> selected <?php endif; ?>>2</option>
          <option value="03" <?php if ($this->_tpl_vars['DD'] == '03'): ?> selected <?php endif; ?>>3</option>
          <option value="04" <?php if ($this->_tpl_vars['DD'] == '04'): ?> selected <?php endif; ?>>4</option>
          <option value="05" <?php if ($this->_tpl_vars['DD'] == '05'): ?> selected <?php endif; ?>>5</option>
          <option value="06" <?php if ($this->_tpl_vars['DD'] == '06'): ?> selected <?php endif; ?>>6</option>
          <option value="07" <?php if ($this->_tpl_vars['DD'] == '07'): ?> selected <?php endif; ?>>7</option>
          <option value="08" <?php if ($this->_tpl_vars['DD'] == '08'): ?> selected <?php endif; ?>>8</option>
          <option value="09" <?php if ($this->_tpl_vars['DD'] == '09'): ?> selected <?php endif; ?>>9</option>
          <option value="10" <?php if ($this->_tpl_vars['DD'] == 10): ?> selected <?php endif; ?>>10</option>
          <option value="11" <?php if ($this->_tpl_vars['DD'] == 11): ?> selected <?php endif; ?>>11</option>
          <option value="12" <?php if ($this->_tpl_vars['DD'] == 12): ?> selected <?php endif; ?>>12</option>
          <option value="13" <?php if ($this->_tpl_vars['DD'] == 13): ?> selected <?php endif; ?>>13</option>
          <option value="14" <?php if ($this->_tpl_vars['DD'] == 14): ?> selected <?php endif; ?>>14</option>
          <option value="15" <?php if ($this->_tpl_vars['DD'] == 15): ?> selected <?php endif; ?>>15</option>
          <option value="16" <?php if ($this->_tpl_vars['DD'] == 16): ?> selected <?php endif; ?>>16</option>
          <option value="17" <?php if ($this->_tpl_vars['DD'] == 17): ?> selected <?php endif; ?>>17</option>
          <option value="18" <?php if ($this->_tpl_vars['DD'] == 18): ?> selected <?php endif; ?>>18</option>
          <option value="19" <?php if ($this->_tpl_vars['DD'] == 19): ?> selected <?php endif; ?>>19</option>
          <option value="20" <?php if ($this->_tpl_vars['DD'] == 20): ?> selected <?php endif; ?>>20</option>
          <option value="21" <?php if ($this->_tpl_vars['DD'] == 21): ?> selected <?php endif; ?>>21</option>
          <option value="22" <?php if ($this->_tpl_vars['DD'] == 22): ?> selected <?php endif; ?>>22</option>
          <option value="23" <?php if ($this->_tpl_vars['DD'] == 23): ?> selected <?php endif; ?>>23</option>
          <option value="24" <?php if ($this->_tpl_vars['DD'] == 24): ?> selected <?php endif; ?>>24</option>
          <option value="25" <?php if ($this->_tpl_vars['DD'] == 25): ?> selected <?php endif; ?>>25</option>
          <option value="26" <?php if ($this->_tpl_vars['DD'] == 26): ?> selected <?php endif; ?>>26</option>
          <option value="27" <?php if ($this->_tpl_vars['DD'] == 27): ?> selected <?php endif; ?>>27</option>
          <option value="28" <?php if ($this->_tpl_vars['DD'] == 28): ?> selected <?php endif; ?>>28</option>
          <option value="29" <?php if ($this->_tpl_vars['DD'] == 29): ?> selected <?php endif; ?>>29</option>
          <option value="30" <?php if ($this->_tpl_vars['DD'] == 30): ?> selected <?php endif; ?>>30</option>
          <option value="31" <?php if ($this->_tpl_vars['DD'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        <select name="MM">
          <option value="01" <?php if ($this->_tpl_vars['MM'] == '01'): ?> selected <?php endif; ?>>Jan</option>
          <option value="02" <?php if ($this->_tpl_vars['MM'] == '02'): ?> selected <?php endif; ?>>Feb</option>
          <option value="03" <?php if ($this->_tpl_vars['MM'] == '03'): ?> selected <?php endif; ?>>Mar</option>
          <option value="04" <?php if ($this->_tpl_vars['MM'] == '04'): ?> selected <?php endif; ?>>Apr</option>
          <option value="05" <?php if ($this->_tpl_vars['MM'] == '05'): ?> selected <?php endif; ?>>May</option>
          <option value="06" <?php if ($this->_tpl_vars['MM'] == '06'): ?> selected <?php endif; ?>>Jun</option>
          <option value="07" <?php if ($this->_tpl_vars['MM'] == '07'): ?> selected <?php endif; ?>>Jul</option>
          <option value="08" <?php if ($this->_tpl_vars['MM'] == '08'): ?> selected <?php endif; ?>>Aug</option>
          <option value="09" <?php if ($this->_tpl_vars['MM'] == '09'): ?> selected <?php endif; ?>>Sep</option>
          <option value="10" <?php if ($this->_tpl_vars['MM'] == '10'): ?> selected <?php endif; ?>>Oct</option>
          <option value="11" <?php if ($this->_tpl_vars['MM'] == '11'): ?> selected <?php endif; ?>>Nov</option>
          <option value="12" <?php if ($this->_tpl_vars['MM'] == '12'): ?> selected <?php endif; ?>>Dec</option>
        </select>
        <select name="YYYY">
          <option value="2008" <?php if ($this->_tpl_vars['YYYY'] == 2008): ?> selected <?php endif; ?>>2008</option>
          <option value="2009" <?php if ($this->_tpl_vars['YYYY'] == 2009): ?> selected <?php endif; ?>>2009</option>
          <option value="2010" <?php if ($this->_tpl_vars['YYYY'] == 2010): ?> selected <?php endif; ?>>2010</option>
          <option value="2011" <?php if ($this->_tpl_vars['YYYY'] == 2011): ?> selected <?php endif; ?>>2011</option>


        </select>
       </TD>
      <TD>To Date :-&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="DD2">
          <option value="01" <?php if ($this->_tpl_vars['DD2'] == '01'): ?> selected <?php endif; ?>>1</option>
          <option value="02" <?php if ($this->_tpl_vars['DD2'] == '02'): ?> selected <?php endif; ?>>2</option>
          <option value="03" <?php if ($this->_tpl_vars['DD2'] == '03'): ?> selected <?php endif; ?>>3</option>
          <option value="04" <?php if ($this->_tpl_vars['DD2'] == '04'): ?> selected <?php endif; ?>>4</option>
          <option value="05" <?php if ($this->_tpl_vars['DD2'] == '05'): ?> selected <?php endif; ?>>5</option>
          <option value="06" <?php if ($this->_tpl_vars['DD2'] == '06'): ?> selected <?php endif; ?>>6</option>
          <option value="07" <?php if ($this->_tpl_vars['DD2'] == '07'): ?> selected <?php endif; ?>>7</option>
          <option value="08" <?php if ($this->_tpl_vars['DD2'] == '08'): ?> selected <?php endif; ?>>8</option>
          <option value="09" <?php if ($this->_tpl_vars['DD2'] == '09'): ?> selected <?php endif; ?>>9</option>
          <option value="10" <?php if ($this->_tpl_vars['DD2'] == 10): ?> selected <?php endif; ?>>10</option>
          <option value="11" <?php if ($this->_tpl_vars['DD2'] == 11): ?> selected <?php endif; ?>>11</option>
          <option value="12" <?php if ($this->_tpl_vars['DD2'] == 12): ?> selected <?php endif; ?>>12</option>
          <option value="13" <?php if ($this->_tpl_vars['DD2'] == 13): ?> selected <?php endif; ?>>13</option>
          <option value="14" <?php if ($this->_tpl_vars['DD2'] == 14): ?> selected <?php endif; ?>>14</option>
          <option value="15" <?php if ($this->_tpl_vars['DD2'] == 15): ?> selected <?php endif; ?>>15</option>
          <option value="16" <?php if ($this->_tpl_vars['DD2'] == 16): ?> selected <?php endif; ?>>16</option>
          <option value="17" <?php if ($this->_tpl_vars['DD2'] == 17): ?> selected <?php endif; ?>>17</option>
          <option value="18" <?php if ($this->_tpl_vars['DD2'] == 18): ?> selected <?php endif; ?>>18</option>
          <option value="19" <?php if ($this->_tpl_vars['DD2'] == 19): ?> selected <?php endif; ?>>19</option>
          <option value="20" <?php if ($this->_tpl_vars['DD2'] == 20): ?> selected <?php endif; ?>>20</option>
          <option value="21" <?php if ($this->_tpl_vars['DD2'] == 21): ?> selected <?php endif; ?>>21</option>
          <option value="22" <?php if ($this->_tpl_vars['DD2'] == 22): ?> selected <?php endif; ?>>22</option>
          <option value="23" <?php if ($this->_tpl_vars['DD2'] == 23): ?> selected <?php endif; ?>>23</option>
          <option value="24" <?php if ($this->_tpl_vars['DD2'] == 24): ?> selected <?php endif; ?>>24</option>
          <option value="25" <?php if ($this->_tpl_vars['DD2'] == 25): ?> selected <?php endif; ?>>25</option>
          <option value="26" <?php if ($this->_tpl_vars['DD2'] == 26): ?> selected <?php endif; ?>>26</option>
          <option value="27" <?php if ($this->_tpl_vars['DD2'] == 27): ?> selected <?php endif; ?>>27</option>
          <option value="28" <?php if ($this->_tpl_vars['DD2'] == 28): ?> selected <?php endif; ?>>28</option>
          <option value="29" <?php if ($this->_tpl_vars['DD2'] == 29): ?> selected <?php endif; ?>>29</option>
          <option value="30" <?php if ($this->_tpl_vars['DD2'] == 30): ?> selected <?php endif; ?>>30</option>
          <option value="31" <?php if ($this->_tpl_vars['DD2'] == 31): ?> selected <?php endif; ?>>31</option>
        </select>
        <select name="MM2">
          <option value="01" <?php if ($this->_tpl_vars['MM2'] == '01'): ?> selected <?php endif; ?>>Jan</option>
          <option value="02" <?php if ($this->_tpl_vars['MM2'] == '02'): ?> selected <?php endif; ?>>Feb</option>
          <option value="03" <?php if ($this->_tpl_vars['MM2'] == '03'): ?> selected <?php endif; ?>>Mar</option>
          <option value="04" <?php if ($this->_tpl_vars['MM2'] == '04'): ?> selected <?php endif; ?>>Apr</option>
          <option value="05" <?php if ($this->_tpl_vars['MM2'] == '05'): ?> selected <?php endif; ?>>May</option>
          <option value="06" <?php if ($this->_tpl_vars['MM2'] == '06'): ?> selected <?php endif; ?>>Jun</option>
          <option value="07" <?php if ($this->_tpl_vars['MM2'] == '07'): ?> selected <?php endif; ?>>Jul</option>
          <option value="08" <?php if ($this->_tpl_vars['MM2'] == '08'): ?> selected <?php endif; ?>>Aug</option>
          <option value="09" <?php if ($this->_tpl_vars['MM2'] == '09'): ?> selected <?php endif; ?>>Sep</option>
          <option value="10" <?php if ($this->_tpl_vars['MM2'] == '10'): ?> selected <?php endif; ?>>Oct</option>
          <option value="11" <?php if ($this->_tpl_vars['MM2'] == '11'): ?> selected <?php endif; ?>>Nov</option>
          <option value="12" <?php if ($this->_tpl_vars['MM2'] == '12'): ?> selected <?php endif; ?>>Dec</option>
        </select>
        <select name="YYYY2">
          <option value="2008" <?php if ($this->_tpl_vars['YYYY2'] == 2008): ?> selected <?php endif; ?>>2008</option>
          <option value="2009" <?php if ($this->_tpl_vars['YYYY2'] == 2009): ?> selected <?php endif; ?>>2009</option>
          <option value="2010" <?php if ($this->_tpl_vars['YYYY2'] == 2010): ?> selected <?php endif; ?>>2010</option>
          <option value="2011" <?php if ($this->_tpl_vars['YYYY2'] == 2011): ?> selected <?php endif; ?>>2011</option>
        </select>
       </TD>
    </TR>
  </table>
</form>
<br />
<?php if ($this->_tpl_vars['ERROR_MSG']): ?><center><font color="red"><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</font></center><br><?php endif; ?>
<?php if ($this->_tpl_vars['ARR_VALIDATE_DETAILS']): ?>
<table width="85%" border="1" align="center" bordercolor="#CCCCFF">
<tr>
	<th>Date</th>
	<th>Resman Validated Count (Email Sent)</th>
	<th>Resman Verified Count</th>
	<th>MyNaukri Email Validated Count (Email Sent)</th>
	<th>MyNaukri Verified Count</th>
</tr>
<?php $_from = $this->_tpl_vars['ARR_VALIDATE_DETAILS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
<tr>
	<td align="center"><b><?php echo $this->_tpl_vars['k']; ?>
</b></td>
	<td align="center"><?php if ($this->_tpl_vars['v']['VALIDATE']['RESMAN']): ?><?php echo $this->_tpl_vars['v']['VALIDATE']['RESMAN']; ?>
<?php else: ?>0<?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['v']['VERIFY']['RESMAN']): ?><?php echo $this->_tpl_vars['v']['VERIFY']['RESMAN']; ?>
<?php else: ?>0<?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['v']['VALIDATE']['MNJ']): ?><?php echo $this->_tpl_vars['v']['VALIDATE']['MNJ']; ?>
<?php else: ?>0<?php endif; ?></td>
	<td align="center"><?php if ($this->_tpl_vars['v']['VERIFY']['MNJ']): ?><?php echo $this->_tpl_vars['v']['VERIFY']['MNJ']; ?>
<?php else: ?>0<?php endif; ?></td>
</tr>

<?php endforeach; endif; unset($_from); ?>
</table>
<?php else: ?>
<center><font color="red" size="+1">No Results Found</font></center>
<?php endif; ?>
</body>
</html>