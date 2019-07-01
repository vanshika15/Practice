<?php /* Smarty version 2.6.19, created on 2012-01-23 15:40:51
         compiled from ni/nidashboard/dashboard_index_new.tpl */ ?>
<HTML>
<HEAD>
<title>NI Dashboard</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	.table1 {font-face:Verdana,Arial,Helvetica,sans-serif;font-size:12px;width:450px;text-align:left;border:0;}
	a{color:#0000FF;}
	a:visited{color:#0000FF;}
</style>
</head>

<body bgcolor="#EEEEEE" text="#111111" >
<CENTER><b><u>NI DASHBOARD </u></b></CENTER>

<table width="97%" align="center">
	<TR>
		<TD>
			<table class="table1">
				<tr><td colspan="2"><b>DASHBOARD</b></td></tr>
				<tr><td width="5%"></td><td width="95%"></td></tr>
        <?php if ($this->_tpl_vars['TYPE'] == 'sales'): ?>
				<tr><td width="5%">1.</td><td width="95%"><a href="<?php echo $this->_tpl_vars['DBDPATH']; ?>
dash_rdxclientdate_breakup.php">SALES MIS</a></td></tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['TYPE'] == 'marketing'): ?>
				<tr><td width="5%">1.</td><td width="95%"><a href="<?php echo $this->_tpl_vars['DBDPATH']; ?>
dashboard_resume.php?displayMIS=y">MARKETING MIS</a></td></tr>
        <?php endif; ?>

			</table>
		</TD>
  </TR>
</TABLE>
</BODY>
</HTML>