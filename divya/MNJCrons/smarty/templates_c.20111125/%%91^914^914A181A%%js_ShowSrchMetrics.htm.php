<?php /* Smarty version 2.6.19, created on 2009-05-25 12:24:21
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/js_ShowSrchMetrics.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/usr/local/apache/htdocs/smarty/templates//dashboard/js_ShowSrchMetrics.htm', 329, false),)), $this); ?>
<html>
<head>
<title>Overall Search Metrics MIS</title>
<h2 align="center" ><u>Search Metrics From <?php echo $this->_tpl_vars['DATE_FROM']; ?>
 To <?php echo $this->_tpl_vars['DATE_TO']; ?>
</u></h2>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th ></th>
<th >Status</th>
<th >Search Count</th>
<tr>
<th rowspan="2" align=center bgcolor="lightblue">Search & No Action</th>
<th >Logged In</th>
<th ><?php echo $this->_tpl_vars['LG_NACT']; ?>
</th>
</tr>
<tr align=center>
<th>Not Logged In</th>
<th><?php echo $this->_tpl_vars['NL_NACT']; ?>
</th>
</tr>
</table>
<hr/>


<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th ></th>
<th >Status</th>
<th >Search Count</th>
<tr>
<th rowspan="2" align=center bgcolor="lightblue">Search & Zero Result</th>
<th >Logged In</th>
<th ><?php echo $this->_tpl_vars['LG_ZR']; ?>
</th>
</tr>
<tr align=center>
<th>Not Logged In</th>
<th><?php echo $this->_tpl_vars['NL_ZR']; ?>
</th>
</tr>
</table>

<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="2"></th>
<th rowspan="2">Status</th>
<th rowspan="2">Search Count</th>
<th rowspan="2">JD Views</th>
<th rowspan="2">Type of Applies</th>
<th rowspan="2">Applies Count</th>
<th colspan="11">Apply Relevance Score</th>
<th colspan="9">Apply Relevance Parameter Wise</th>
<tr align=center bgcolor="lightblue">
<th >0</th><th >10</th><th >20</th><th >30</th><th >40</th><th >50</th><th >60</th><th >70</th><th>80</th><th>90</th><th>100</th>
<th >Exp</th><th >Location</th><th >UG</th><th >PG</th><th >BOTH</th><th >FA</th><th >Industry</th><th >CTC</th><th	>Key Skills</th>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Search & Action</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_ACT']; ?>
</td>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_ACT_JDV']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_ACT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_ACT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC100_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTsingle_RELV_Keyword']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_ACT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_ACT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACT_RELVC100_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['LG_ACTmultiple_RELV_Keyword']; ?>
</td>
</tr>

<tr align=center>
<th rowspan="2">Not Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_ACT']; ?>
</td>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_ACT_JDV']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['NL_ACT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_ACT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC100_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTsingle_RELV_Keyword']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['NL_ACT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_ACT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACT_RELVC100_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['NL_ACTmultiple_RELV_Keyword']; ?>
</td>
</tr>

</table>
<hr/>

<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="2"></th>
<th rowspan="2">Status</th>
<th rowspan="2">Search Count</th>
<th rowspan="2">Type of Applies</th>
<th rowspan="2">Applies Count</th>
<th colspan="11">Apply Relevance Score</th>
<tr align=center bgcolor="lightblue">
<th >0</th><th >10</th><th >20</th><th >30</th><th >40</th><th >50</th><th >60</th><th >70</th><th>80</th><th>90</th><th>100</th>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Total Search</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_TR']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_TR_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_TR_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_TR_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_TR_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TR_RELVC100_MA']; ?>
</td>
</tr>

<tr align=center>
<th rowspan="2">Not Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_TR']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['NL_TR_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_TR_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['NL_TR_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_TR_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TR_RELVC100_MA']; ?>
</td>
</tr>

</table>

<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="2"></th>
<th rowspan="2">Status</th>
<th rowspan="2">Search Count</th>
<th rowspan="2">Type of Applies</th>
<th rowspan="2">Applies Count</th>
<th colspan="9">Apply Relevance Parameter Wise</th>
<tr align=center bgcolor="lightblue">
<th >Exp</th><th >Location</th><th >UG</th><th >PG</th><th >BOTH</th><th >FA</th><th >Industry</th><th >CTC</th><th	>Key Skills</th>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Total Search</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_TR']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_TR_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRsingle_RELV_Keyword']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_TR_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['LG_TRmultiple_RELV_Keyword']; ?>
</td>
</tr>

<tr align=center>
<th rowspan="2">Not Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_TR']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['NL_TR_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRsingle_RELV_Keyword']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['NL_TR_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['NL_TRmultiple_RELV_Keyword']; ?>
</td>
</tr>

</table>
<hr/>


<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="2"></th>
<th rowspan="2">Status</th>
<th rowspan="2">Usage Count</th>
<th rowspan="2">Type of Applies</th>
<th rowspan="2">Applies Count</th>
<th colspan="11">Apply Relevance Score</th>
<tr align=center bgcolor="lightblue">
<th >0</th><th >10</th><th >20</th><th >30</th><th >40</th><th >50</th><th >60</th><th >70</th><th>80</th><th>90</th><th>100</th>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Usage of Date Sort</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2">500</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_DSORT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_DSORT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_DSORT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_DSORT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_DSORT_RELVC100_MA']; ?>
</td>
</tr>

<tr align=center>
<th rowspan="2">Not Logged In</th>
<td rowspan="2">400</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['NL_DSORT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_DSORT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['NL_DSORT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_DSORT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_DSORT_RELVC100_MA']; ?>
</td>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Usage of Relevance Sort</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2">500</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_RSORT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_RSORT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_RSORT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_RSORT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_RSORT_RELVC100_MA']; ?>
</td>
</tr>

<tr align=center>
<th rowspan="2">Not Logged In</th>
<td rowspan="2">400</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['NL_RSORT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_RSORT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['NL_RSORT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_RSORT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_RSORT_RELVC100_MA']; ?>
</td>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Usage of Personalised Sort</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2">500</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_PSORT_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_PSORT_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC100_SA']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_PSORT_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_PSORT_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_PSORT_RELVC100_MA']; ?>
</td>
</tr>


<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="2"></th>
<th rowspan="2">Status</th>
<th rowspan="2">Search Count</th>
<th rowspan="2">Clicks</th>
<th rowspan="2">CTR (Clicks / Searches)</th>
<th rowspan="2">Type of Applies</th>
<th rowspan="2">Applies Count</th>
<th colspan="11">Apply Relevance Score</th>
<th colspan="9">Apply Relevance Parameter Wise</th>
<tr align=center bgcolor="lightblue">
<th >0</th><th >10</th><th >20</th><th >30</th><th >40</th><th >50</th><th >60</th><th >70</th><th>80</th><th>90</th><th>100</th>
<th >Exp</th><th >Location</th><th >UG</th><th >PG</th><th >BOTH</th><th >FA</th><th >Industry</th><th >CTC</th><th	>Key Skills</th>
</tr>

<tr>
<th rowspan="5" align=center bgcolor="lightblue">Searches where 2 or more keywords used</th>
</tr>
<tr align=center>
<th rowspan="2">Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_KWGET']; ?>
</td>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_KWGET_JDV']; ?>
</td>
<td rowspan="2"><?php echo $this->_tpl_vars['LG_CTR']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['LG_KWGET_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_KWGET_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC100_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETsingle_RELV_Keyword']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['LG_KWGET_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_KWGET_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGET_RELVC100_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['LG_KWGETmultiple_RELV_Keyword']; ?>
</td>
</tr>

<tr align=center>
<th rowspan="2">Not Logged In</th>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_KWGET']; ?>
</td>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_KWGET_JDV']; ?>
</td>
<td rowspan="2"><?php echo $this->_tpl_vars['NL_CTR']; ?>
</td>
<th >Single</th>
<td><?php echo $this->_tpl_vars['NL_KWGET_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_KWGET_RELVC0_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC10_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC20_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC30_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC40_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC50_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC60_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC70_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC80_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC90_SA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC100_SA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETsingle_RELV_Keyword']; ?>
</td>
</tr>
<tr align=center><th >Multiple</th>
<td><?php echo $this->_tpl_vars['NL_KWGET_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_KWGET_RELVC0_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC10_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC20_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC30_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC40_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC50_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC60_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC70_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC80_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC90_MA']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGET_RELVC100_MA']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_Exp']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_Location']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_UG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_PG']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_Both']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_Farea']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_INDUSTRY']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_CTC']; ?>
</td><td><?php echo $this->_tpl_vars['NL_KWGETmultiple_RELV_Keyword']; ?>
</td>
</tr>

</table>
<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="8">Logged In</th>
<th>Jobs Quantum on Search Result</th>
<th>Frequency of Search Result Quantum</th>
<th>%age of Search Result Quantum</th>
<th>Action = Apply</th>
<th>Ratio = Action / Freq.</th>
</tr>
<tr align="center">
<th bgcolor="lightblue">0</th>
<td><?php echo $this->_tpl_vars['LG_FQ0']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ0perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ0_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQ0_TA'])."/".($this->_tpl_vars['LG_FQ0']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">1 To 10</th>
<td><?php echo $this->_tpl_vars['LG_FQ10']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ10perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ10_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQ10_TA'])."/".($this->_tpl_vars['LG_FQ10']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">11 To 20</th>
<td><?php echo $this->_tpl_vars['LG_FQ20']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ20perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ20_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQ20_TA'])."/".($this->_tpl_vars['LG_FQ20']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">21 To 50</th>
<td><?php echo $this->_tpl_vars['LG_FQ50']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ50perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ50_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQ50_TA'])."/".($this->_tpl_vars['LG_FQ50']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">51 To 100</th>
<td><?php echo $this->_tpl_vars['LG_FQ100']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ100perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ100_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQ100_TA'])."/".($this->_tpl_vars['LG_FQ100']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">101 To 500</th>
<td><?php echo $this->_tpl_vars['LG_FQ500']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ500perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQ500_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQ500_TA'])."/".($this->_tpl_vars['LG_FQ500']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">Above 500</th>
<td><?php echo $this->_tpl_vars['LG_FQG500']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQG500perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['LG_FQG500_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_FQG500_TA'])."/".($this->_tpl_vars['LG_FQG500']).",3)"), $this);?>
</td>
</tr>
</table>

<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="8">Not Logged In</th>
<th>Jobs Quantum on Search Result</th>
<th>Frequency of Search Result Quantum</th>
<th>%age of Search Result Quantum</th>
<th>Action = Apply</th>
<th>Ratio = Action / Freq.</th>
</tr>
<tr align="center">
<th bgcolor="lightblue">0</th>
<td><?php echo $this->_tpl_vars['NL_FQ0']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ0perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ0_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQ0_TA'])."/".($this->_tpl_vars['NL_FQ0']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">1 To 10</th>
<td><?php echo $this->_tpl_vars['NL_FQ10']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ10perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ10_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQ10_TA'])."/".($this->_tpl_vars['NL_FQ10']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">11 To 20</th>
<td><?php echo $this->_tpl_vars['NL_FQ20']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ20perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ20_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQ20_TA'])."/".($this->_tpl_vars['NL_FQ20']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">21 To 50</th>
<td><?php echo $this->_tpl_vars['NL_FQ50']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ50perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ50_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQ50_TA'])."/".($this->_tpl_vars['NL_FQ50']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">51 To 100</th>
<td><?php echo $this->_tpl_vars['NL_FQ100']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ100perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ100_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQ100_TA'])."/".($this->_tpl_vars['NL_FQ100']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">101 To 500</th>
<td><?php echo $this->_tpl_vars['NL_FQ500']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ500perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQ500_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQ500_TA'])."/".($this->_tpl_vars['NL_FQ500']).",3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">Above 500</th>
<td><?php echo $this->_tpl_vars['NL_FQG500']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQG500perc']; ?>
</td>
<td><?php echo $this->_tpl_vars['NL_FQG500_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_FQG500_TA'])."/".($this->_tpl_vars['NL_FQG500']).",3)"), $this);?>
</td>
</tr>
</table>

<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="8">Logged In</th>
<th>Page No on Search Result</th>
<th>Page Reach</th>
<th>Page Reach %age Breakup</th>
<th>Page wise Applies Count</th>
<th>Page wise Applies %age Breakup</th>
</tr>
<tr align="center">
<th bgcolor="lightblue">1</th>
<td><?php echo $this->_tpl_vars['LG_PB1']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB1'])."/".($this->_tpl_vars['LG_PB1'])."*100)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['LG_PB1_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB1_TA'])."/".($this->_tpl_vars['LG_PB1_TA'])."*100)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">2</th>
<td><?php echo $this->_tpl_vars['LG_PB2']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB2'])."/".($this->_tpl_vars['LG_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['LG_PB2_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB2_TA'])."/".($this->_tpl_vars['LG_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">3</th>
<td><?php echo $this->_tpl_vars['LG_PB3']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB3'])."/".($this->_tpl_vars['LG_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['LG_PB3_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB3_TA'])."/".($this->_tpl_vars['LG_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">4</th>
<td><?php echo $this->_tpl_vars['LG_PB4']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB4'])."/".($this->_tpl_vars['LG_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['LG_PB4_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB4_TA'])."/".($this->_tpl_vars['LG_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">5</th>
<td><?php echo $this->_tpl_vars['LG_PB5']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB5'])."/".($this->_tpl_vars['LG_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['LG_PB5_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PB5_TA'])."/".($this->_tpl_vars['LG_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue"> >5</th>
<td><?php echo $this->_tpl_vars['LG_PBG5']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PBG5'])."/".($this->_tpl_vars['LG_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['LG_PBG5_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['LG_PBG5_TA'])."/".($this->_tpl_vars['LG_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
</table>

<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="8">Not Logged In</th>
<th>Page No on Search Result</th>
<th>Page Reach</th>
<th>Page Reach %age Breakup</th>
<th>Page wise Applies Count</th>
<th>Page wise Applies %age Breakup</th>
</tr>
<tr align="center">
<th bgcolor="lightblue">1</th>
<td><?php echo $this->_tpl_vars['NL_PB1']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB1'])."/".($this->_tpl_vars['NL_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['NL_PB1_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB1_TA'])."/".($this->_tpl_vars['NL_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">2</th>
<td><?php echo $this->_tpl_vars['NL_PB2']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB2'])."/".($this->_tpl_vars['NL_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['NL_PB2_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB2_TA'])."/".($this->_tpl_vars['NL_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">3</th>
<td><?php echo $this->_tpl_vars['NL_PB3']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB3'])."/".($this->_tpl_vars['NL_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['NL_PB3_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB3_TA'])."/".($this->_tpl_vars['NL_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">4</th>
<td><?php echo $this->_tpl_vars['NL_PB4']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB4'])."/".($this->_tpl_vars['NL_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['NL_PB4_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB4_TA'])."/".($this->_tpl_vars['NL_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue">5</th>
<td><?php echo $this->_tpl_vars['NL_PB5']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB5'])."/".($this->_tpl_vars['NL_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['NL_PB5_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PB5_TA'])."/".($this->_tpl_vars['NL_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
<tr align="center">
<th bgcolor="lightblue"> >5</th>
<td><?php echo $this->_tpl_vars['NL_PBG5']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PBG5'])."/".($this->_tpl_vars['NL_PB1'])."*100,3)"), $this);?>
</td>
<td><?php echo $this->_tpl_vars['NL_PBG5_TA']; ?>
</td>
<td><?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['NL_PBG5_TA'])."/".($this->_tpl_vars['NL_PB1_TA'])."*100,3)"), $this);?>
</td>
</tr>
</table>

<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="52">Logged In</th>
<th>Jobs on Page 1</th>
<th>Impression</th>
<th>JD Views</th>
<th>CTR = JD / Impression</th>
<th>Applies</th>
<th>CAR = Applies / JD</th>
<th>0</th>
<th>10</th>
<th>20</th>
<th>30</th>
<th>40</th>
<th>50</th>
<th>60</th>
<th>70</th>
<th>80</th>
<th>90</th>
<th>100</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=50) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 <?php $this->assign('iterate', $this->_sections['i']['iteration']); ?>
<tr align="center"><th bgcolor="lightblue"><?php echo $this->_sections['i']['iteration']; ?>
</th><td><?php  echo $this->_tpl_vars["LG_IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_IM_JDV".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo round($this->_tpl_vars["LG_IM_JDV".$this->_tpl_vars["iterate"]]/$this->_tpl_vars["LG_IM".$this->_tpl_vars["iterate"]],3) ?></td><td><?php  echo $this->_tpl_vars["LG_IM".$this->_tpl_vars["iterate"]."_TA"] ?></td><td><?php  echo round($this->_tpl_vars["LG_IM".$this->_tpl_vars["iterate"]."_TA"]/$this->_tpl_vars["LG_IM_JDV".$this->_tpl_vars["iterate"]],3) ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_0IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_10IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_20IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_30IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_40IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_50IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_60IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_70IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_80IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_90IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["LG_RELVC_100IM".$this->_tpl_vars["iterate"]] ?></td></tr>
<?php endfor; endif; ?>
</table>
<hr/>

<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th rowspan="52">Not Logged In</th>
<th>Jobs on Page 1</th>
<th>Impression</th>
<th>JD Views</th>
<th>CTR = JD / Impression</th>
<th>Applies</th>
<th>CAR = Applies / JD</th>
<th>0</th>
<th>10</th>
<th>20</th>
<th>30</th>
<th>40</th>
<th>50</th>
<th>60</th>
<th>70</th>
<th>80</th>
<th>90</th>
<th>100</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=50) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php $this->assign('iterate', $this->_sections['i']['iteration']); ?>
<tr align="center"><th bgcolor="lightblue"><?php echo $this->_sections['i']['iteration']; ?>
</th><td><?php  echo $this->_tpl_vars["NL_IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_IM_JDV".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo round($this->_tpl_vars["NL_IM_JDV".$this->_tpl_vars["iterate"]]/$this->_tpl_vars["NL_IM".$this->_tpl_vars["iterate"]],3) ?></td><td><?php  echo $this->_tpl_vars["NL_IM".$this->_tpl_vars["iterate"]."_TA"] ?></td><td><?php  echo round($this->_tpl_vars["NL_IM".$this->_tpl_vars["iterate"]."_TA"]/$this->_tpl_vars["NL_IM_JDV".$this->_tpl_vars["iterate"]],3) ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_0IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_10IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_20IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_30IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_40IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_50IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_60IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_70IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_80IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_90IM".$this->_tpl_vars["iterate"]] ?></td><td><?php  echo $this->_tpl_vars["NL_RELVC_100IM".$this->_tpl_vars["iterate"]] ?></td></tr>

<?php endfor; endif; ?>

</table>
<hr/>
<table align=center border=1 >
<tr align=center bgcolor="lightblue">
<th>Search Query</th>
<th>Total Searches</th>
<th>Zero Results</th>
</tr>
<tr align=center>
<th bgcolor="lightblue">Only Keyword</th>
<td><?php echo $this->_tpl_vars['TOTAL_KW']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KW']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Only Functional Area</th>
<td><?php echo $this->_tpl_vars['TOTAL_FA']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_FA']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Functional Area</th>
<td><?php echo $this->_tpl_vars['TOTAL_KF']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KF']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Location</th>
<td><?php echo $this->_tpl_vars['TOTAL_KL']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KL']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Experience</th>
<td><?php echo $this->_tpl_vars['TOTAL_KX']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KX']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Functional Area + Location</th>
<td><?php echo $this->_tpl_vars['TOTAL_FL']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_FL']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Functional Area +  Experience</th>
<td><?php echo $this->_tpl_vars['TOTAL_FX']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_FX']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Functional Area + Location</th>
<td><?php echo $this->_tpl_vars['TOTAL_KFL']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KFL']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Functional Area +  Experience</th>
<td><?php echo $this->_tpl_vars['TOTAL_KFX']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KFX']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Location + Experience</th>
<td><?php echo $this->_tpl_vars['TOTAL_KLX']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KLX']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Functional Area + Location + Experience</th>
<td><?php echo $this->_tpl_vars['TOTAL_FLX']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_FLX']; ?>
</td>
</tr>
<tr align=center>
<th bgcolor="lightblue">Keyword + Functional Area + Location + Experience</th>
<td><?php echo $this->_tpl_vars['TOTAL_KFLX']; ?>
</td>
<td><?php echo $this->_tpl_vars['ZR_KFLX']; ?>
</td>
</tr>
</table>
<hr/>
</body>
</html>