<?php /* Smarty version 2.6.19, created on 2011-12-01 15:18:09
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/mini_dashboard_new.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/usr/local/apache/htdocs/smarty/templates/dashboard/mini_dashboard_new.tpl', 80, false),)), $this); ?>
<html>
<head>
<title>Quick View - Job Search &amp; related</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="20">
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td>
		<font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3">Date Chosen: <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></b></font>
	</td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3">Job 
      Search Daily Dashboard</font></b></font></td>
  </tr>
</table>
<br>
<!-- code is commented by vishal saxena on 24 jan 2008,to remove home page hits 
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td bgcolor="#CCCCCC" width="17%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Item</font></td>
    <td bgcolor="#9999FF" width="47%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font></td>
    <td bgcolor="#9999FF" width="36%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font></td>
  </tr>
  <tr> 
    <td width="17%">Homepage Hits</td>
    <td width="47%"><?php echo $this->_tpl_vars['homepagehits']; ?>
</td>
    <td width="36%"></td>
  </tr>
</table>
-->
<br>
<strong><font size="1" color="#ff0000">***</font> : Search Sources.</strong>
<table width="90%" border="1" cellspacing="0" cellpadding="5" bordercolor="#CCCCCC">
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td colspan="3" bgcolor="#000066"> 
      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Searches</font></p>
    </td>
    <td colspan="3" bgcolor="#000066"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Final 
        Job Views</font></div>
    </td>
    <td colspan="3" bgcolor="#000066"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Multiple 
        Applies</font></div>
    </td>
    <td colspan="3" bgcolor="#000066"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Single 
        Applies</font></div>
    </td>
    <td bgcolor="#000066"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">CAR (applies/searches)</font></div>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Location/Activity</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">LoggedIn </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non-Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non-Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total for Site </font></div>
    </td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search from homepage</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchhomepage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchhomepage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchhomepage'],'y' => $this->_tpl_vars['nl_quicksrchhomepage']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchhomepage_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchhomepage_jd']; ?>
</font></td>    
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchhomepage_jd'],'y' => $this->_tpl_vars['nl_quicksrchhomepage_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchhomepage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchhomepage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchhomepage'],'y' => $this->_tpl_vars['mn_quicksrchhomepage']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchhomepage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchhomepage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchhomepage'],'y' => $this->_tpl_vars['sn_quicksrchhomepage']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchhomepage']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search from inside pages - Search results page</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchres']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchres']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchres'],'y' => $this->_tpl_vars['nl_quicksrchres']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchres_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchres_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchres_jd'],'y' => $this->_tpl_vars['nl_quicksrchres_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchres']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchres']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchres'],'y' => $this->_tpl_vars['mn_quicksrchres']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchres']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchres']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchres'],'y' => $this->_tpl_vars['sn_quicksrchres']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchres']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search from inside pages - MNJ</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchmynaukri']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchmynaukri']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchmynaukri'],'y' => $this->_tpl_vars['nl_quicksrchmynaukri']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchmynaukri_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchmynaukri_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchmynaukri_jd'],'y' => $this->_tpl_vars['nl_quicksrchmynaukri_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchmynaukri']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchmynaukri']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchmynaukri'],'y' => $this->_tpl_vars['mn_quicksrchmynaukri']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchmynaukri']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchmynaukri']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchmynaukri'],'y' => $this->_tpl_vars['sn_quicksrchmynaukri']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchmynaukri']; ?>
</font></td>
 </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search - (Search Form) </font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchfrm']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchfrm']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchfrm'],'y' => $this->_tpl_vars['nl_quicksrchfrm']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchfrm_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchfrm_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchfrm_jd'],'y' => $this->_tpl_vars['nl_quicksrchfrm_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchfrm']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchfrm']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchfrm'],'y' => $this->_tpl_vars['mn_quicksrchfrm']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchfrm']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchfrm']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchfrm'],'y' => $this->_tpl_vars['sn_quicksrchfrm']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchfrm']; ?>
</font></td>
  </tr>

  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search - Searchagents</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchsearchagents']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchsearchagents']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchsearchagents'],'y' => $this->_tpl_vars['nl_quicksrchsearchagents']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchsearchagents_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchsearchagents_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchsearchagents_jd'],'y' => $this->_tpl_vars['nl_quicksrchsearchagents_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchsearchagents']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchsearchagents']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchsearchagents'],'y' => $this->_tpl_vars['mn_quicksrchsearchagents']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchsearchagents']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchsearchagents']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchsearchagents'],'y' => $this->_tpl_vars['sn_quicksrchsearchagents']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchsearchagents']; ?>
</font></td>
 </tr>


	<!-- Add the following 
		Mid panel on Search results page searchagent
		MNJ - Create search agent
		Quick search - Saved jobs
		MNJ - Saved searches
	-->
<!-- commented by Vishal Saxena on 12 jan 2007,to remove Quick search - Resume RegMail acc to Dashboard SRS lvl2
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search - Resume RegMail</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchresregmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchresregmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchresregmail'],'y' => $this->_tpl_vars['nl_quicksrchresregmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchresregmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchresregmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchresregmail_jd'],'y' => $this->_tpl_vars['nl_quicksrchresregmail_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchresregmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchresregmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchresregmail'],'y' => $this->_tpl_vars['mn_quicksrchresregmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchresregmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchresregmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchresregmail'],'y' => $this->_tpl_vars['sn_quicksrchresregmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchresregmail']; ?>
</font></td>
 </tr>
      commented ends here-->
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search from inside pages - Other</font>&nbsp;<strong><font size="1" color="#ff0000">***</font></strong></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchothers']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchothers']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchothers'],'y' => $this->_tpl_vars['nl_quicksrchothers']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchothers_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchothers_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchothers_jd'],'y' => $this->_tpl_vars['nl_quicksrchothers_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchothers']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchothers']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchothers'],'y' => $this->_tpl_vars['mn_quicksrchothers']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchothers']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchothers']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchothers'],'y' => $this->_tpl_vars['sn_quicksrchothers']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchothers']; ?>
</font></td>
</tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Advanced Search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_newadvsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_newadvsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_newadvsrch'],'y' => $this->_tpl_vars['nl_newadvsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_newadvsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_newadvsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_newadvsrch_jd'],'y' => $this->_tpl_vars['nl_newadvsrch_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_newadvsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_newadvsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_newadvsrch'],'y' => $this->_tpl_vars['mn_newadvsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_newadvsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_newadvsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_newadvsrch'],'y' => $this->_tpl_vars['sn_newadvsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_newadvsrch']; ?>
</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick Search-Saved Jobs</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchsavedjobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchsavedjobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchsavedjobs'],'y' => $this->_tpl_vars['nl_quicksrchsavedjobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchsavedjobs_jd']; ?>
</font></td>   
     <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchsavedjobs_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchsavedjobs_jd'],'y' => $this->_tpl_vars['nl_quicksrchsavedjobs_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_quicksrchsavedjobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_quicksrchsavedjobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_quicksrchsavedjobs'],'y' => $this->_tpl_vars['mn_quicksrchsavedjobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_quicksrchsavedjobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_quicksrchsavedjobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_quicksrchsavedjobs'],'y' => $this->_tpl_vars['sn_quicksrchsavedjobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_quicksrchsavedjobs']; ?>
</font></td>
  </tr>
 
    <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick search- Apply confirmation pages</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_quicksrchb2s']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_quicksrchb2s']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_quicksrchb2s'],'y' => $this->_tpl_vars['nl_quicksrchb2s']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>   
  </tr>

<!-- code is commented by vishal saxena on 24 jan 2008, to remove search within search
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Search within results</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_sws'],'y' => $this->_tpl_vars['nl_sws']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_sws_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_sws_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_sws_jd'],'y' => $this->_tpl_vars['nl_sws_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_sws'],'y' => $this->_tpl_vars['mn_sws']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_sws'],'y' => $this->_tpl_vars['sn_sws']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_sws']; ?>
</font></td>   
  </tr>
-->
   <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse - TOP (homepage)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browsetop']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browsetop']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browsetop'],'y' => $this->_tpl_vars['nl_browsetop']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browsetop_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browsetop_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browsetop_jd'],'y' => $this->_tpl_vars['nl_browsetop_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_browsetop']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_browsetop']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_browsetop'],'y' => $this->_tpl_vars['mn_browsetop']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_browsetop']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_browsetop']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_browsetop'],'y' => $this->_tpl_vars['sn_browsetop']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_browsetop']; ?>
</font></td>   
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse - Right(homepage) & Other</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browseright']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browseright']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browseright'],'y' => $this->_tpl_vars['nl_browseright']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browseright_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browseright_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browseright_jd'],'y' => $this->_tpl_vars['nl_browseright_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_browseright']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_browseright']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_browseright'],'y' => $this->_tpl_vars['mn_browseright']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_browseright']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_browseright']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_browseright'],'y' => $this->_tpl_vars['sn_browseright']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_browseright']; ?>
</font></td>   
  </tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse - View all jobs thru category link without choosing roles</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_vajwsr']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_vajwsr']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_vajwsr'],'y' => $this->_tpl_vars['nl_vajwsr']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_vajwsr_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_vajwsr_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_vajwsr_jd'],'y' => $this->_tpl_vars['nl_vajwsr_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_vajwsr']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_vajwsr']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_vajwsr'],'y' => $this->_tpl_vars['mn_vajwsr']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_vajwsr']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_vajwsr']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_vajwsr'],'y' => $this->_tpl_vars['sn_vajwsr']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_vajwsr']; ?>
</font></td>
  </tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse through search form page</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browsesrchlandingpage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browsesrchlandingpage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browsesrchlandingpage'],'y' => $this->_tpl_vars['nl_browsesrchlandingpage']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browsesrchlandingpage_jd']; ?>
</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browsesrchlandingpage_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browsesrchlandingpage_jd'],'y' => $this->_tpl_vars['nl_browsesrchlandingpage_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_browsesrchlandingpage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_browsesrchlandingpage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_browsesrchlandingpage'],'y' => $this->_tpl_vars['mn_browsesrchlandingpage']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_browsesrchlandingpage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_browsesrchlandingpage']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_browsesrchlandingpage'],'y' => $this->_tpl_vars['sn_browsesrchlandingpage']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_browsesrchlandingpage']; ?>
</font></td>
  </tr>

  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse - Back to Search Result </font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browsesrchb2s']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browsesrchb2s']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browsesrchb2s'],'y' => $this->_tpl_vars['nl_browsesrchb2s']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
  </tr>

  

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse Location</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_browseloc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_browseloc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_browseloc'],'y' => $this->_tpl_vars['nl_browseloc']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
  </tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Recent Searches</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_recentsearches']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_recentsearches']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_recentsearches'],'y' => $this->_tpl_vars['nl_recentsearches']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_recentsearches_jd']; ?>
</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_recentsearches_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_recentsearches_jd'],'y' => $this->_tpl_vars['nl_recentsearches_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_recentsearches']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_recentsearches']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_recentsearches'],'y' => $this->_tpl_vars['mn_recentsearches']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_recentsearches']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_recentsearches']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_recentsearches'],'y' => $this->_tpl_vars['sn_recentsearches']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_recentsearches']; ?>
</font></td>
</tr>
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Related Searches (Less than 20)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_relatedsearches_20']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_relatedsearches_20']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_relatedsearches_20'],'y' => $this->_tpl_vars['nl_relatedsearches_20']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_relatedsearches_20_jd']; ?>
</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_relatedsearches_20_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_relatedsearches_20_jd'],'y' => $this->_tpl_vars['nl_relatedsearches_20_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_relatedsearches_20']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_relatedsearches_20']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_relatedsearches_20'],'y' => $this->_tpl_vars['mn_relatedsearches_20']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_relatedsearches_20']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_relatedsearches_20']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_relatedsearches_20'],'y' => $this->_tpl_vars['sn_relatedsearches_20']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_relatedsearches_20']; ?>
</font></td>
</tr>
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Related Searches (More than 500)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_relatedsearches_500']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_relatedsearches_500']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_relatedsearches_500'],'y' => $this->_tpl_vars['nl_relatedsearches_500']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_relatedsearches_500_jd']; ?>
</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_relatedsearches_500_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_relatedsearches_500_jd'],'y' => $this->_tpl_vars['nl_relatedsearches_500_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_relatedsearches_500']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_relatedsearches_500']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_relatedsearches_500'],'y' => $this->_tpl_vars['mn_relatedsearches_500']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_relatedsearches_500']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_relatedsearches_500']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_relatedsearches_500'],'y' => $this->_tpl_vars['sn_relatedsearches_500']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_relatedsearches_500']; ?>
</font></td>
</tr>
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Recent Searches MNJ</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_recentsearches_MNJ']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_recentsearches_MNJ']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_recentsearches_MNJ'],'y' => $this->_tpl_vars['nl_recentsearches_MNJ']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_recentsearches_MNJ_jd']; ?>
</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_recentsearches_MNJ_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_recentsearches_MNJ_jd'],'y' => $this->_tpl_vars['nl_recentsearches_MNJ_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_recentsearches_MNJ']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_recentsearches_MNJ']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_recentsearches_MNJ'],'y' => $this->_tpl_vars['mn_recentsearches_MNJ']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_recentsearches_MNJ']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_recentsearches_MNJ']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_recentsearches_MNJ'],'y' => $this->_tpl_vars['sn_recentsearches_MNJ']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_recentsearches_MNJ']; ?>
</font></td>
</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Chat API</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_jsapi']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_jsapi']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_jsapi'],'y' => $this->_tpl_vars['nl_jsapi']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_jdapi_jd']; ?>
</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_jdapi_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_jdapi_jd'],'y' => $this->_tpl_vars['nl_jdapi_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_api_chat']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_api_chat']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_api_chat'],'y' => $this->_tpl_vars['mn_api_chat']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_api_chat']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_api_chat']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_api_chat'],'y' => $this->_tpl_vars['sn_api_chat']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_api_chat']; ?>
</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Govt Jobs</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_govt_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_govt_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_govt_jobs'],'y' => $this->_tpl_vars['nl_govt_jobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_govt_jobs_jd']; ?>
</font></td>    
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_govt_jobs_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_govt_jobs_jd'],'y' => $this->_tpl_vars['nl_govt_jobs_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_govt_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_govt_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_govt_jobs'],'y' => $this->_tpl_vars['mn_govt_jobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_govt_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_govt_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_govt_jobs'],'y' => $this->_tpl_vars['sn_govt_jobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_govt_jobs']; ?>
</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Click from Homepage(Govt Jobs)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_govt_hpclick']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_govt_hpclick']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_govt_hpclick'],'y' => $this->_tpl_vars['nl_govt_hpclick']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">-</font></td>
</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Company Search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_comp_srch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_comp_srch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_comp_srch'],'y' => $this->_tpl_vars['nl_comp_srch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>    
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Company Name Click</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_comp_srch_name']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_comp_srch_name']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_comp_srch_name'],'y' => $this->_tpl_vars['nl_comp_srch_name']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_comp_srch_name_jd']; ?>
</font></td>    
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_comp_srch_name_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_comp_srch_name_jd'],'y' => $this->_tpl_vars['nl_comp_srch_name_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_comp_srch_name']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_comp_srch_name']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_comp_srch_name'],'y' => $this->_tpl_vars['mn_comp_srch_name']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_comp_srch_name']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_comp_srch_name']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_comp_srch_name'],'y' => $this->_tpl_vars['sn_comp_srch_name']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_comp_srch_name']; ?>
</font></td>
</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Personalised Search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_personalised_search']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_personalised_search']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_personalised_search'],'y' => $this->_tpl_vars['nl_personalised_search']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_personalised_search_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_personalised_search_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_personalised_search_jd'],'y' => $this->_tpl_vars['nl_personalised_search_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">15 lacs home</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_plus_home']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_plus_home']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_plus_home'],'y' => $this->_tpl_vars['nl_plus_home']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_plus_home_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_plus_home_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_plus_home_jd'],'y' => $this->_tpl_vars['nl_plus_home_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_plus_home']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_plus_home']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_plus_home'],'y' => $this->_tpl_vars['mn_plus_home']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_plus_home']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_plus_home']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_plus_home'],'y' => $this->_tpl_vars['sn_plus_home']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_plus_home']; ?>
</font></td>
</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">15 lacs SRP</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_plus_srchresult']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_plus_srchresult']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_plus_srchresult'],'y' => $this->_tpl_vars['nl_plus_srchresult']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_plus_srchresult_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_plus_srchresult_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_plus_srchresult_jd'],'y' => $this->_tpl_vars['nl_plus_srchresult_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_plus_srchresult']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_plus_srchresult']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_plus_srchresult'],'y' => $this->_tpl_vars['mn_plus_srchresult']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_plus_srchresult']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_plus_srchresult']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_plus_srchresult'],'y' => $this->_tpl_vars['sn_plus_srchresult']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_plus_srchresult']; ?>
</font></td>
</tr>


</table>
<br>
<br>
<strong><font size="1" color="#ff0000">***</font> : Tools.</strong>
<table width="90%" border="1" cellspacing="0" cellpadding="5" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td colspan="3" bgcolor="#000066">
      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Searches</font></p>
    </td>
    <td colspan="3" bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Final
        Job Views</font></div>
    </td>
    <td colspan="3" bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Multiple
        Applies</font></div>
    </td>
    <td colspan="3" bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Single
        Applies</font></div>
    </td>
    <td bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">CAR (applies/searches)</font></div>
    </td>
<tr>
    <td bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Location/Activity</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">LoggedIn </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non-Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non-Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total for Site </font></div>
    </td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">CTC clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_ctcclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_ctcclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_ctcclustering'],'y' => $this->_tpl_vars['nl_ctcclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_ctcclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_ctcclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_ctcclustering_jd'],'y' => $this->_tpl_vars['nl_ctcclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_ctcclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_ctcclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_ctcclustering'],'y' => $this->_tpl_vars['mn_ctcclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_ctcclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_ctcclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_ctcclustering'],'y' => $this->_tpl_vars['sn_ctcclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_ctcclustering']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Location clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_locclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_locclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_locclustering'],'y' => $this->_tpl_vars['nl_locclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_locclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_locclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_locclustering_jd'],'y' => $this->_tpl_vars['nl_locclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_locclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_locclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_locclustering'],'y' => $this->_tpl_vars['mn_locclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_locclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_locclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_locclustering'],'y' => $this->_tpl_vars['sn_locclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_locclustering']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Education clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_educlustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_educlustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_educlustering'],'y' => $this->_tpl_vars['nl_educlustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_educlustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_educlustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_educlustering_jd'],'y' => $this->_tpl_vars['nl_educlustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_educlustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_educlustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_educlustering'],'y' => $this->_tpl_vars['mn_educlustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_educlustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_educlustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_educlustering'],'y' => $this->_tpl_vars['sn_educlustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_educlustering']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">FAREA clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_fareaclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_fareaclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_fareaclustering'],'y' => $this->_tpl_vars['nl_fareaclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_fareaclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_fareaclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_fareaclustering_jd'],'y' => $this->_tpl_vars['nl_fareaclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_fareaclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_fareaclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_fareaclustering'],'y' => $this->_tpl_vars['mn_fareaclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_fareaclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_fareaclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_fareaclustering'],'y' => $this->_tpl_vars['sn_fareaclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_fareaclustering']; ?>
</font></td>
  </tr>

  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Role clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_roleclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_roleclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_roleclustering'],'y' => $this->_tpl_vars['nl_roleclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_roleclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_roleclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_roleclustering_jd'],'y' => $this->_tpl_vars['nl_roleclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_roleclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_roleclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_roleclustering'],'y' => $this->_tpl_vars['mn_roleclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_roleclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_roleclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_roleclustering'],'y' => $this->_tpl_vars['sn_roleclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_roleclustering']; ?>
</font></td>   
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Industry clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_itclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_itclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_itclustering'],'y' => $this->_tpl_vars['nl_itclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_itclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_itclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_itclustering_jd'],'y' => $this->_tpl_vars['nl_itclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_itclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_itclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_itclustering'],'y' => $this->_tpl_vars['mn_itclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_itclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_itclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_itclustering'],'y' => $this->_tpl_vars['sn_itclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_itclustering']; ?>
</font></td>   
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Emp clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_empclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_empclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_empclustering'],'y' => $this->_tpl_vars['nl_empclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_empclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_empclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_empclustering_jd'],'y' => $this->_tpl_vars['nl_empclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_empclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_empclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_empclustering'],'y' => $this->_tpl_vars['mn_empclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_empclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_empclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_empclustering'],'y' => $this->_tpl_vars['sn_empclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_empclustering']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Freshness clusters</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_freshclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_freshclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_freshclustering'],'y' => $this->_tpl_vars['nl_freshclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_freshclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_freshclustering_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_freshclustering_jd'],'y' => $this->_tpl_vars['nl_freshclustering_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_freshclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_freshclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_freshclustering'],'y' => $this->_tpl_vars['mn_freshclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_freshclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_freshclustering']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_freshclustering'],'y' => $this->_tpl_vars['sn_freshclustering']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_freshclustering']; ?>
</font></td>
  </tr>

<!-- label position changes acc to dashboard SRS(Final) by vishal saxena on 18 Feb 2008 -->


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="3">SAP Sources</font></td>
    <td colspan="13"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">MyNaukri</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_nauk_recommends']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_nauk_recommends']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_nauk_recommends'],'y' => $this->_tpl_vars['nl_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_nauk_recommends_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_nauk_recommends_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_nauk_recommends_jd'],'y' => $this->_tpl_vars['nl_nauk_recommends_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_nauk_recommends']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_nauk_recommends']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_nauk_recommends'],'y' => $this->_tpl_vars['mn_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_nauk_recommends']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_nauk_recommends']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_nauk_recommends'],'y' => $this->_tpl_vars['sn_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_nauk_recommends']; ?>
</font></td>
</tr>
<!--
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">SAP From Apply</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_sapapply']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_sapapply']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_sapapply'],'y' => $this->_tpl_vars['nl_sapapply']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_sapapply_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_sapapply_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_sapapply_jd'],'y' => $this->_tpl_vars['nl_sapapply_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_sapapply']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_sapapply']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_sapapply'],'y' => $this->_tpl_vars['mn_sapapply']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_sapapply']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_sapapply']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_sapapply'],'y' => $this->_tpl_vars['sn_sapapply']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_sapapply']; ?>
</font></td>  
  </tr>
-->

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Apply Confirmation</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_apply_confirmation']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_apply_confirmation']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_apply_confirmation'],'y' => $this->_tpl_vars['nl_apply_confirmation']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_apply_confirmation_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_apply_confirmation_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_apply_confirmation_jd'],'y' => $this->_tpl_vars['nl_apply_confirmation_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_apply_confirmation']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_apply_confirmation']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_apply_confirmation'],'y' => $this->_tpl_vars['mn_apply_confirmation']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_apply_confirmation']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_apply_confirmation']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_apply_confirmation'],'y' => $this->_tpl_vars['sn_apply_confirmation']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_apply_confirmation']; ?>
</font></td>  
  </tr>

<tr>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Apply Confirmation(Mulitple)</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_mul_apply_confirmation']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_mul_apply_confirmation']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_mul_apply_confirmation'],'y' => $this->_tpl_vars['nl_mul_apply_confirmation']), $this);?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_mul_apply_confirmation_jd']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_mul_apply_confirmation_jd']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_mul_apply_confirmation_jd'],'y' => $this->_tpl_vars['nl_mul_apply_confirmation_jd']), $this);?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_mul_apply_confirmation']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_mul_apply_confirmation']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_mul_apply_confirmation'],'y' => $this->_tpl_vars['mn_mul_apply_confirmation']), $this);?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_mul_apply_confirmation']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_mul_apply_confirmation']; ?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_mul_apply_confirmation'],'y' => $this->_tpl_vars['sn_mul_apply_confirmation']), $this);?>
</font></td>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_mul_apply_confirmation']; ?>
</font></td>
</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">No Result page</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_noresult_page']; ?>
</font></td>    
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_noresult_page']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_noresult_page'],'y' => $this->_tpl_vars['nl_noresult_page']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_noresult_page_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_noresult_page_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_noresult_page_jd'],'y' => $this->_tpl_vars['nl_noresult_page_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_noresult_page']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_noresult_page']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_noresult_page'],'y' => $this->_tpl_vars['mn_noresult_page']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_noresult_page']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_noresult_page']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_noresult_page'],'y' => $this->_tpl_vars['sn_noresult_page']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_noresult_page']; ?>
</font></td>
  </tr>


  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View Similar jobs (SAP) (search results pages)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewsimilarjobsrch'],'y' => $this->_tpl_vars['nl_viewsimilarjobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewsimilarjobsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewsimilarjobsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewsimilarjobsrch_jd'],'y' => $this->_tpl_vars['nl_viewsimilarjobsrch_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_viewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_viewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_viewsimilarjobsrch'],'y' => $this->_tpl_vars['mn_viewsimilarjobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_viewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_viewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_viewsimilarjobsrch'],'y' => $this->_tpl_vars['sn_viewsimilarjobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_viewsimilarjobsrch']; ?>
</font></td>   
  </tr>


  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View Similar jobs (SAP)(job details page)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewsimilarjobjd'],'y' => $this->_tpl_vars['nl_viewsimilarjobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewsimilarjobjd_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewsimilarjobjd_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewsimilarjobjd_jd'],'y' => $this->_tpl_vars['nl_viewsimilarjobjd_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_viewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_viewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_viewsimilarjobjd'],'y' => $this->_tpl_vars['mn_viewsimilarjobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_viewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_viewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_viewsimilarjobjd'],'y' => $this->_tpl_vars['sn_viewsimilarjobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_viewsimilarjobjd']; ?>
</font></td>   
  </tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View similar jobs(SAP) from Emails</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_vsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_vsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_vsjfrmEmail'],'y' => $this->_tpl_vars['nl_vsjfrmEmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_vsjfrmEmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_vsjfrmEmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_vsjfrmEmail_jd'],'y' => $this->_tpl_vars['nl_vsjfrmEmail_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_vsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_vsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_vsjfrmEmail'],'y' => $this->_tpl_vars['mn_vsjfrmEmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_vsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_vsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_vsjfrmEmail'],'y' => $this->_tpl_vars['sn_vsjfrmEmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_vsjfrmEmail']; ?>
</font></td>

</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View similar jobs(SAP)-Other</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_vsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_vsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_vsjfrmother'],'y' => $this->_tpl_vars['nl_vsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_vsjfrmother_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_vsjfrmother_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_vsjfrmother_jd'],'y' => $this->_tpl_vars['nl_vsjfrmother_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_vsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_vsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_vsjfrmother'],'y' => $this->_tpl_vars['mn_vsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_vsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_vsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_vsjfrmother'],'y' => $this->_tpl_vars['sn_vsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_vsjfrmother']; ?>
</font></td>

</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total(SAP)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totalsapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totalsapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['nl_totalsapsearch'],'y' => $this->_tpl_vars['lg_totalsapsearch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totalsapjobdetail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totalsapjobdetail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_totalsapjobdetail'],'y' => $this->_tpl_vars['nl_totalsapjobdetail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_totalsapapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_totalsapapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_totalsapapplies'],'y' => $this->_tpl_vars['mn_totalsapapplies']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_totalsapapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_totalsapapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_totalsapapplies'],'y' => $this->_tpl_vars['sn_totalsapapplies']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>

</tr>


<!--
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total(SAP sources)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g"), $this);?>

</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e",'a' => $this->_tpl_vars['nl_sapapply'],'b' => $this->_tpl_vars['nl_viewsimilarjobsrch'],'c' => $this->_tpl_vars['nl_viewsimilarjobjd'],'d' => $this->_tpl_vars['nl_vsjfrmEmail'],'e' => $this->_tpl_vars['nl_vsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h+i+j",'a' => $this->_tpl_vars['lg_sapapply'],'b' => $this->_tpl_vars['lg_viewsimilarjobsrch'],'c' => $this->_tpl_vars['lg_viewsimilarjobjd'],'d' => $this->_tpl_vars['lg_vsjfrmEmail'],'e' => $this->_tpl_vars['lg_vsjfrmother'],'f' => $this->_tpl_vars['nl_sapapply'],'g' => $this->_tpl_vars['nl_viewsimilarjobsrch'],'h' => $this->_tpl_vars['nl_viewsimilarjobjd'],'i' => $this->_tpl_vars['nl_vsjfrmEmail'],'j' => $this->_tpl_vars['nl_vsjfrmother']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f",'a' => $this->_tpl_vars['lg_sapapply_jd'],'b' => $this->_tpl_vars['lg_viewsimilarjobsrch_jd'],'c' => $this->_tpl_vars['lg_viewsimilarjobjd_jd'],'d' => $this->_tpl_vars['lg_vsjfrmEmail_jd'],'e' => $this->_tpl_vars['lg_vsjfrmother_jd'],'f' => $this->_tpl_vars['lg_nauk_recommends_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f",'a' => $this->_tpl_vars['nl_sapapply_jd'],'b' => $this->_tpl_vars['nl_viewsimilarjobsrch_jd'],'c' => $this->_tpl_vars['nl_viewsimilarjobjd_jd'],'d' => $this->_tpl_vars['nl_vsjfrmEmail_jd'],'e' => $this->_tpl_vars['nl_vsjfrmother_jd'],'f' => $this->_tpl_vars['nl_nauk_recommends_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h+i+j+k+l",'a' => $this->_tpl_vars['lg_sapapply_jd'],'b' => $this->_tpl_vars['lg_viewsimilarjobsrch_jd'],'c' => $this->_tpl_vars['lg_viewsimilarjobjd_jd'],'d' => $this->_tpl_vars['lg_vsjfrmEmail_jd'],'e' => $this->_tpl_vars['lg_vsjfrmother_jd'],'f' => $this->_tpl_vars['lg_nauk_recommends_jd'],'g' => $this->_tpl_vars['nl_sapapply_jd'],'h' => $this->_tpl_vars['nl_viewsimilarjobsrch_jd'],'i' => $this->_tpl_vars['nl_viewsimilarjobjd_jd'],'j' => $this->_tpl_vars['nl_vsjfrmEmail_jd'],'k' => $this->_tpl_vars['nl_vsjfrmother_jd'],'l' => $this->_tpl_vars['nl_nauk_recommends_jd']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f",'a' => $this->_tpl_vars['mr_sapapply'],'b' => $this->_tpl_vars['mr_viewsimilarjobsrch'],'c' => $this->_tpl_vars['mr_viewsimilarjobjd'],'d' => $this->_tpl_vars['mr_vsjfrmEmail'],'e' => $this->_tpl_vars['mr_vsjfrmother'],'f' => $this->_tpl_vars['mr_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f",'a' => $this->_tpl_vars['mn_sapapply'],'b' => $this->_tpl_vars['mn_viewsimilarjobsrch'],'c' => $this->_tpl_vars['mn_viewsimilarjobjd'],'d' => $this->_tpl_vars['mn_vsjfrmEmail'],'e' => $this->_tpl_vars['mn_vsjfrmother'],'f' => $this->_tpl_vars['mn_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h+i+j+k+l",'a' => $this->_tpl_vars['mr_sapapply'],'b' => $this->_tpl_vars['mr_viewsimilarjobsrch'],'c' => $this->_tpl_vars['mr_viewsimilarjobjd'],'d' => $this->_tpl_vars['mr_vsjfrmEmail'],'e' => $this->_tpl_vars['mr_vsjfrmother'],'f' => $this->_tpl_vars['mr_nauk_recommends'],'g' => $this->_tpl_vars['mn_sapapply'],'h' => $this->_tpl_vars['mn_viewsimilarjobsrch'],'i' => $this->_tpl_vars['mn_viewsimilarjobjd'],'j' => $this->_tpl_vars['mn_vsjfrmEmail'],'k' => $this->_tpl_vars['mn_vsjfrmother'],'l' => $this->_tpl_vars['mn_nauk_recommends']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f",'a' => $this->_tpl_vars['sr_sapapply'],'b' => $this->_tpl_vars['sr_viewsimilarjobsrch'],'c' => $this->_tpl_vars['sr_viewsimilarjobjd'],'d' => $this->_tpl_vars['sr_vsjfrmEmail'],'e' => $this->_tpl_vars['sr_vsjfrmother'],'f' => $this->_tpl_vars['sr_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f",'a' => $this->_tpl_vars['sn_sapapply'],'b' => $this->_tpl_vars['sn_viewsimilarjobsrch'],'c' => $this->_tpl_vars['sn_viewsimilarjobjd'],'d' => $this->_tpl_vars['sn_vsjfrmEmail'],'e' => $this->_tpl_vars['sn_vsjfrmother'],'f' => $this->_tpl_vars['sn_nauk_recommends']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h+i+j+k+l",'a' => $this->_tpl_vars['sr_sapapply'],'b' => $this->_tpl_vars['sr_viewsimilarjobsrch'],'c' => $this->_tpl_vars['sr_viewsimilarjobjd'],'d' => $this->_tpl_vars['sr_vsjfrmEmail'],'e' => $this->_tpl_vars['sr_vsjfrmother'],'f' => $this->_tpl_vars['sr_nauk_recommends'],'g' => $this->_tpl_vars['sn_sapapply'],'h' => $this->_tpl_vars['sn_viewsimilarjobsrch'],'i' => $this->_tpl_vars['sn_viewsimilarjobjd'],'j' => $this->_tpl_vars['sn_vsjfrmEmail'],'k' => $this->_tpl_vars['sn_vsjfrmother'],'l' => $this->_tpl_vars['sn_nauk_recommends']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e",'a' => 'car_sapapply','b' => 'car_viewsimilarjobsrch','c' => 'car_viewsimilarjobjd','d' => 'car_vsjfrmEmail','e' => 'car_vsjfrmother'), $this);?>
</font></td>

</tr>
-->


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="3">VSJ Sources(Old algo)</font></td>
    <td colspan="13"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
</tr>


  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View Similar jobs (Old) (search results pages)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldviewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldviewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldviewsimilarjobsrch'],'y' => $this->_tpl_vars['nl_oldviewsimilarjobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldviewsimilarjobsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldviewsimilarjobsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldviewsimilarjobsrch_jd'],'y' => $this->_tpl_vars['nl_oldviewsimilarjobsrch_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_oldviewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_oldviewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_oldviewsimilarjobsrch'],'y' => $this->_tpl_vars['mn_oldviewsimilarjobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_oldviewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_oldviewsimilarjobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_oldviewsimilarjobsrch'],'y' => $this->_tpl_vars['sn_oldviewsimilarjobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_oldviewsimilarjobsrch']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View Similar jobs (Old)(job details page)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldviewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldviewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldviewsimilarjobjd'],'y' => $this->_tpl_vars['nl_oldviewsimilarjobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldviewsimilarjobjd_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldviewsimilarjobjd_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldviewsimilarjobjd_jd'],'y' => $this->_tpl_vars['nl_oldviewsimilarjobjd_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_oldviewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_oldviewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_oldviewsimilarjobjd'],'y' => $this->_tpl_vars['mn_oldviewsimilarjobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_oldviewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_oldviewsimilarjobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_oldviewsimilarjobjd'],'y' => $this->_tpl_vars['sn_oldviewsimilarjobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_oldviewsimilarjobjd']; ?>
</font></td>
  </tr>



<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View similar jobs(old) from Emails</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldvsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldvsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldvsjfrmEmail'],'y' => $this->_tpl_vars['nl_oldvsjfrmEmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldvsjfrmEmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldvsjfrmEmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldvsjfrmEmail_jd'],'y' => $this->_tpl_vars['nl_oldvsjfrmEmail_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_oldvsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_oldvsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_oldvsjfrmEmail'],'y' => $this->_tpl_vars['mn_oldvsjfrmEmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_oldvsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_oldvsjfrmEmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_oldvsjfrmEmail'],'y' => $this->_tpl_vars['sn_oldvsjfrmEmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_oldvsjfrmEmail']; ?>
</font></td>

</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View similar jobs(old)-Other</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldvsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldvsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldvsjfrmother'],'y' => $this->_tpl_vars['nl_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_oldvsjfrmother_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_oldvsjfrmother_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_oldvsjfrmother_jd'],'y' => $this->_tpl_vars['nl_oldvsjfrmother_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_oldvsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_oldvsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_oldvsjfrmother'],'y' => $this->_tpl_vars['mn_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_oldvsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_oldvsjfrmother']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_oldvsjfrmother'],'y' => $this->_tpl_vars['sn_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_oldvsjfrmother']; ?>
</font></td>

</tr>


</tr>

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total(old)-</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totaloldsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totaloldsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_totaloldsearch'],'y' => $this->_tpl_vars['nl_totaloldsearch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totaloldjobdetail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totaloldjobdetail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_totaloldjobdetail'],'y' => $this->_tpl_vars['nl_totaloldjobdetail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_totaloldapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_totaloldapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_totaloldapplies'],'y' => $this->_tpl_vars['mn_totaloldapplies']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_totaloldapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_totaloldapplies']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_totaloldapplies'],'y' => $this->_tpl_vars['sn_totaloldapplies']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>

</tr>


<!--
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total(VSJ sources-Old algo)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['lg_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['lg_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['lg_oldvsjfrmEmail'],'d' => $this->_tpl_vars['lg_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['nl_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['nl_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['nl_oldvsjfrmEmail'],'d' => $this->_tpl_vars['nl_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h",'a' => $this->_tpl_vars['lg_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['lg_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['lg_oldvsjfrmEmail'],'d' => $this->_tpl_vars['lg_oldvsjfrmother'],'e' => $this->_tpl_vars['nl_oldviewsimilarjobsrch'],'f' => $this->_tpl_vars['nl_oldviewsimilarjobjd'],'g' => $this->_tpl_vars['nl_oldvsjfrmEmail'],'h' => $this->_tpl_vars['nl_oldvsjfrmother']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['lg_oldviewsimilarjobsrch_jd'],'b' => $this->_tpl_vars['lg_oldviewsimilarjobjd_jd'],'c' => $this->_tpl_vars['lg_oldvsjfrmEmail_jd'],'d' => $this->_tpl_vars['lg_oldvsjfrmother_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['nl_oldviewsimilarjobsrch_jd'],'b' => $this->_tpl_vars['nl_oldviewsimilarjobjd_jd'],'c' => $this->_tpl_vars['nl_oldvsjfrmEmail_jd'],'d' => $this->_tpl_vars['nl_oldvsjfrmother_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h",'a' => $this->_tpl_vars['lg_oldviewsimilarjobsrch_jd'],'b' => $this->_tpl_vars['lg_oldviewsimilarjobjd_jd'],'c' => $this->_tpl_vars['lg_oldvsjfrmEmail_jd'],'d' => $this->_tpl_vars['lg_oldvsjfrmother_jd'],'e' => $this->_tpl_vars['nl_oldviewsimilarjobsrch_jd'],'f' => $this->_tpl_vars['nl_oldviewsimilarjobjd_jd'],'g' => $this->_tpl_vars['nl_oldvsjfrmEmail_jd'],'h' => $this->_tpl_vars['nl_oldvsjfrmother_jd']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['mr_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['mr_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['mr_oldvsjfrmEmail'],'d' => $this->_tpl_vars['mr_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['mn_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['mn_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['mn_oldvsjfrmEmail'],'d' => $this->_tpl_vars['mn_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h",'a' => $this->_tpl_vars['mr_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['mr_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['mr_oldvsjfrmEmail'],'d' => $this->_tpl_vars['mr_oldvsjfrmother'],'e' => $this->_tpl_vars['mn_oldviewsimilarjobsrch'],'f' => $this->_tpl_vars['mn_oldviewsimilarjobjd'],'g' => $this->_tpl_vars['mn_oldvsjfrmEmail'],'h' => $this->_tpl_vars['mn_oldvsjfrmother']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['sr_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['sr_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['sr_oldvsjfrmEmail'],'d' => $this->_tpl_vars['sr_oldvsjfrmother']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['sn_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['sn_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['sn_oldvsjfrmEmail'],'d' => $this->_tpl_vars['sn_oldvsjfrmother']), $this);?>
</font></td>   
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d+e+f+g+h",'a' => $this->_tpl_vars['sr_oldviewsimilarjobsrch'],'b' => $this->_tpl_vars['sr_oldviewsimilarjobjd'],'c' => $this->_tpl_vars['sr_oldvsjfrmEmail'],'d' => $this->_tpl_vars['sr_oldvsjfrmother'],'e' => $this->_tpl_vars['sn_oldviewsimilarjobsrch'],'f' => $this->_tpl_vars['sn_oldviewsimilarjobjd'],'g' => $this->_tpl_vars['sn_oldvsjfrmEmail'],'h' => $this->_tpl_vars['sn_oldvsjfrmother']), $this);?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => 'car_oldviewsimilarjobsrch','b' => 'car_oldviewsimilarjobjd','c' => 'car_oldvsjfrmEmail','d' => 'car_oldvsjfrmother'), $this);?>
</font></td>

</tr>

-->
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View all jobs from this advertiser  (search results pages)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewalljobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewalljobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewalljobsrch'],'y' => $this->_tpl_vars['nl_viewalljobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewalljobsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewalljobsrch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewalljobsrch_jd'],'y' => $this->_tpl_vars['nl_viewalljobsrch_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_viewalljobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_viewalljobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_viewalljobsrch'],'y' => $this->_tpl_vars['mn_viewalljobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_viewalljobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_viewalljobsrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_viewalljobsrch'],'y' => $this->_tpl_vars['sn_viewalljobsrch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_viewalljobsrch']; ?>
</font></td>   
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">View all jobs from this advertiser  (job details page)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewalljobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewalljobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewalljobjd'],'y' => $this->_tpl_vars['nl_viewalljobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_viewalljobjd_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_viewalljobjd_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_viewalljobjd_jd'],'y' => $this->_tpl_vars['nl_viewalljobjd_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_viewalljobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_viewalljobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_viewalljobjd'],'y' => $this->_tpl_vars['mn_viewalljobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_viewalljobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_viewalljobjd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_viewalljobjd'],'y' => $this->_tpl_vars['sn_viewalljobjd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_viewalljobjd']; ?>
</font></td>  </tr>


 <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Featured Jobs</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_FeatJobs_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_FeatJobs_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_FeatJobs_jd'],'y' => $this->_tpl_vars['nl_FeatJobs_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_FeatJobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_FeatJobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_FeatJobs'],'y' => $this->_tpl_vars['mn_FeatJobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_FeatJobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_FeatJobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_FeatJobs'],'y' => $this->_tpl_vars['sn_FeatJobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_FeatJobs']; ?>
</font></td>
  </tr>

  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RSS</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2" colspan="2"><?php echo $this->_tpl_vars['rss']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2" colspan="2">&nbsp;</font></td> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['rss']; ?>
</font></td>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_rss_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_rss_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_rss_jd'],'y' => $this->_tpl_vars['nl_rss_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_rss']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_rss']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_rss'],'y' => $this->_tpl_vars['mn_rss']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_rss']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_rss']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_rss'],'y' => $this->_tpl_vars['sn_rss']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_rss']; ?>
</font></td>  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">API's</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['api']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['api'],'y' => 0), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_api_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_api_jd']; ?>
</font></td>  
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_api_jd'],'y' => $this->_tpl_vars['nl_api_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_api']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_api']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_api'],'y' => $this->_tpl_vars['mn_api']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_api']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_api']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_api'],'y' => $this->_tpl_vars['sn_api']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_api']; ?>
</font></td>
</tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Toolbar</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_toolbar']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_toolbar']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_toolbar'],'y' => $this->_tpl_vars['nl_toolbar']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_toolbar_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_toolbar_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_toolbar_jd'],'y' => $this->_tpl_vars['nl_toolbar_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_toolbar']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_toolbar']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_toolbar'],'y' => $this->_tpl_vars['mn_toolbar']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_toolbar']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_toolbar']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_toolbar'],'y' => $this->_tpl_vars['sn_toolbar']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_toolbar']; ?>
</font></td>  
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> CTC (Number of times this Option was used, this is <b>NOT</b> a search) </font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_ctc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_ctc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_ctc'],'y' => $this->_tpl_vars['nl_ctc']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_ctc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_ctc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_ctc'],'y' => $this->_tpl_vars['mn_ctc']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_ctc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_ctc']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_ctc'],'y' => $this->_tpl_vars['sn_ctc']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_ctc']; ?>
</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> KeyWord Suggestor (Number of times keyword suggestor was used) </font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_keyword_suggestor']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_keyword_suggestor']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_keyword_suggestor'],'y' => $this->_tpl_vars['nl_keyword_suggestor']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_keyword_suggestor_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_keyword_suggestor_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_keyword_suggestor_jd'],'y' => $this->_tpl_vars['nl_keyword_suggestor_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Job Messenger</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_job_messenger_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_job_messenger_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_job_messenger_jd'],'y' => $this->_tpl_vars['nl_job_messenger_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_job_messenger']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_job_messenger']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_job_messenger'],'y' => $this->_tpl_vars['mn_job_messenger']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_job_messenger']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_job_messenger']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_job_messenger'],'y' => $this->_tpl_vars['sn_job_messenger']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
         
</tr>   


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Job Alert</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_job_alert_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_job_alert_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_job_alert_jd'],'y' => $this->_tpl_vars['nl_job_alert_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_job_alert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_job_alert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_job_alert'],'y' => $this->_tpl_vars['mn_job_alert']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_job_alert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_job_alert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_job_alert'],'y' => $this->_tpl_vars['sn_job_alert']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>

</tr>


<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Saved Jobs</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_saved_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_saved_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_saved_jobs'],'y' => $this->_tpl_vars['nl_saved_jobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_saved_jobs_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_saved_jobs_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_saved_jobs_jd'],'y' => $this->_tpl_vars['nl_saved_jobs_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_saved_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_saved_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_saved_jobs'],'y' => $this->_tpl_vars['mn_saved_jobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_saved_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_saved_jobs']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_saved_jobs'],'y' => $this->_tpl_vars['sn_saved_jobs']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_saved_jobs']; ?>
</font></td>

</tr>
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Recommendations-SAP</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_reco_sap'],'y' => $this->_tpl_vars['nl_reco_sap']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_reco_sap_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_reco_sap_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_reco_sap_jd'],'y' => $this->_tpl_vars['nl_reco_sap_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_reco_sap'],'y' => $this->_tpl_vars['mn_reco_sap']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_reco_sap'],'y' => $this->_tpl_vars['sn_reco_sap']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_reco_sap']; ?>
</font></td>

</tr>
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> Recommendations-JA</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_reco_jobalert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_reco_jobalert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_reco_jobalert'],'y' => $this->_tpl_vars['nl_reco_jobalert']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_reco_jobalert_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_reco_jobalert_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_reco_jobalert_jd'],'y' => $this->_tpl_vars['nl_reco_jobalert_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_reco_jobalert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_reco_jobalert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_reco_jobalert'],'y' => $this->_tpl_vars['mn_reco_jobalert']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_reco_jobalert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_reco_jobalert']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_reco_jobalert'],'y' => $this->_tpl_vars['sn_reco_jobalert']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_reco_jobalert']; ?>
</font></td>

</tr>

<!--
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">SAP Search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_sapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_sapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_sapsearch'],'y' => $this->_tpl_vars['nl_sapsearch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_sapsearch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_sapsearch_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_sapsearch_jd'],'y' => $this->_tpl_vars['nl_sapsearch_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_sapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_sapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_sapsearch'],'y' => $this->_tpl_vars['mn_sapsearch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_sapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_sapsearch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_sapsearch'],'y' => $this->_tpl_vars['sn_sapsearch']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_sapsearch']; ?>
</font></td>
</tr>
-->
</table>
<br>
<br>
<strong><font size="1" color="#ff0000">***</font> : Paid Products.</strong>
<table width="90%" border="1" cellspacing="0" cellpadding="5" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td colspan="3" bgcolor="#000066">
      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Clicks</font></p>
    </td>
    <td colspan="3" bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Final
        Job Views</font></div>
    </td>
    <td colspan="3" bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Multiple
        Applies</font></div>
    </td>
    <td colspan="3" bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Single
        Applies</font></div>
    </td>
    <td bgcolor="#000066">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">CAR (applies/searches)</font></div>
    </td>
  </tr>
 
 <tr>
    <td bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Location/Activity</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">LoggedIn </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not LoggedIn</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non-Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non-Reg.</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF">
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total for Site </font></div>
    </td>
  </tr>


 
 
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">BPW/Job Gallery/Top Emp</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_BPW_JG_TE']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_BPW_JG_TE']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_BPW_JG_TE'],'y' => $this->_tpl_vars['nl_BPW_JG_TE']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_BPW_JG_TE_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_BPW_JG_TE_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_BPW_JG_TE_jd'],'y' => $this->_tpl_vars['nl_BPW_JG_TE_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_BPW_JG_TE']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_BPW_JG_TE']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_BPW_JG_TE'],'y' => $this->_tpl_vars['mn_BPW_JG_TE']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_BPW_JG_TE']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_BPW_JG_TE']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_BPW_JG_TE'],'y' => $this->_tpl_vars['sn_BPW_JG_TE']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_BPW_JG_TE']; ?>
</font></td>  
</tr>

 
 <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Featured Companies</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_FeatComp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_FeatComp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_FeatComp'],'y' => $this->_tpl_vars['nl_FeatComp']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_FeatComp_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_FeatComp_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_FeatComp_jd'],'y' => $this->_tpl_vars['nl_FeatComp_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_FeatComp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_FeatComp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_FeatComp'],'y' => $this->_tpl_vars['mn_FeatComp']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_FeatComp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_FeatComp']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_FeatComp'],'y' => $this->_tpl_vars['sn_FeatComp']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['car_FeatComp']; ?>
</font></td>
  </tr>


<!-- addition of code ends here -->

<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Hot Vacancy banner(homepage mid)</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_hotvacancy']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_hotvacancy']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_hotvacancy'],'y' => $this->_tpl_vars['nl_hotvacancy']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>

</tr>
<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Recommendations-Header</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_reco_sap']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_reco_sap'],'y' => $this->_tpl_vars['nl_reco_sap']), $this);?>
</font></td>
<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_reco_sap_jd'],'y' => $this->_tpl_vars['lg_reco_jobalert_jd'],'assign' => 'lg_jd'), $this);?>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_jd']; ?>
</font></td>
<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['nl_reco_sap_jd'],'y' => $this->_tpl_vars['nl_reco_jobalert_jd'],'assign' => 'nl_jd'), $this);?>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => ($this->_tpl_vars['lg_jd'])." + ".($this->_tpl_vars['nl_jd'])), $this);?>
</font></td>
<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_reco_sap'],'y' => $this->_tpl_vars['mr_reco_jobalert'],'assign' => 'mr'), $this);?>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr']; ?>
</font></td>
<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mn_reco_sap'],'y' => $this->_tpl_vars['mn_reco_jobalert'],'assign' => 'mn'), $this);?>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => ($this->_tpl_vars['mr'])."+".($this->_tpl_vars['mn'])), $this);?>
</font></td>
<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_reco_sap'],'y' => $this->_tpl_vars['sr_reco_jobalert'],'assign' => 'sr'), $this);?>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr']; ?>
</font></td>
<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sn_reco_sap'],'y' => $this->_tpl_vars['sn_reco_jobalert'],'assign' => 'sn'), $this);?>

    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => ($this->_tpl_vars['sr'])."+".($this->_tpl_vars['sn'])), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "(".($this->_tpl_vars['mr'])."+".($this->_tpl_vars['mn'])."+".($this->_tpl_vars['sr'])."+".($this->_tpl_vars['sn']).")/(".($this->_tpl_vars['lg_reco_sap'])."+".($this->_tpl_vars['nl_reco_sap']).")"), $this);?>
</font></td>

</tr>

	<tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Job Mail</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_jobmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_jobmail_jd']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['lg_jobmail_jd'],'y' => $this->_tpl_vars['nl_jobmail_jd']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mr_jobmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['mn_jobmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['mr_jobmail'],'y' => $this->_tpl_vars['mn_jobmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sr_jobmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['sn_jobmail']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['sr_jobmail'],'y' => $this->_tpl_vars['sn_jobmail']), $this);?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">--</font></td>
  </tr>


</table>
<br>
<strong><font size="1" color="#ff0000">***</font> : Unknown Sources.</strong>
<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="34%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Items</font></td>
    <td width="26%" bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Logged 
      In</font></td>
    <td width="20%" bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Not 
      Logged In</font></td>
    <td width="20%" bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">TOTAL</font></td>
  </tr>
  <tr>
    <td width="34%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total
      Searches (Excluding Browse)</font></td>
    <td width="26%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totalsearches']; ?>
</font></td>
    <td width="20%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totalsearches']; ?>
</font></td>
   <!-- <td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo $this->_tpl_vars['total_searches']; ?>
</b></font></td> -->
    <td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['lg_totalsearches'],'y' => $this->_tpl_vars['nl_totalsearches']), $this);?>
</b></font></td>
  </tr>
  <tr>
    <td width="34%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total
      Browse</font></td>
    <td width="26%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totalbrowse']; ?>
</font></td>
    <td width="20%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totalbrowse']; ?>
</font></td>
<!--    <td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo $this->_tpl_vars['total_browse']; ?>
</b></font></td> -->
<td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['lg_totalbrowse'],'y' => $this->_tpl_vars['nl_totalbrowse']), $this);?>
</b></font></td>

  </tr>
  <tr>
    <td width="34%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Searches(Browse + Relevant)</font></td>
    <td width="26%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_overall_searches']; ?>
</font></td>
    <td width="20%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_overall_searches']; ?>
</font></td>
<!--    <td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo $this->_tpl_vars['overall_total_searches']; ?>
</b></font></td> -->
<td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['lg_overall_searches'],'y' => $this->_tpl_vars['nl_overall_searches']), $this);?>
</b></font></td>

  </tr>
<tr>
    <td width="34%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total
      JobDetailPageView</font></td>
    <td width="26%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['lg_totaljdviews']; ?>
</font></td>
    <td width="20%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nl_totaljdviews']; ?>
</font></td>
<!--    <td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo $this->_tpl_vars['totaljdviews']; ?>
</b></font></td> -->
<td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['lg_totaljdviews'],'y' => $this->_tpl_vars['nl_totaljdviews']), $this);?>
</b></font></td>

  </tr
  <tr> 
    <td width="34%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
    <td width="26%" bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Registered</font></td>
    <td width="20%" bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Non 
      Registered</font></td>
    <td width="20%"><font color='#ff0000' face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;</font></td>
  </tr>
  <tr> 
    <td width="34%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total 
      Applications</font></td>
    <td width="26%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['reg_total']; ?>
</font></td>
    <td width="20%"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['nonreg_total']; ?>
</font></td>
<!--    <td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo $this->_tpl_vars['total_applies']; ?>
</b></font></td> -->
<td width="20%"><font color='#3399FF' face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['reg_total'],'y' => $this->_tpl_vars['nonreg_total']), $this);?>
</b></font></td>

  </tr>
</table>
<br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Items</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Zero 
      Results</font></td>
<!--
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">1-50 
      Results</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">50+ 
      Results</font></td>
-->
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Homepage Quick search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_breakup_homepagequicksrch']; ?>
</font></td>
<!--
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_and_50_breakup_homepagequicksrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['above_50_breakup_homepagequicksrch']; ?>
</font></td>
-->
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Advanced Search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_breakup_advancesrch']; ?>
</font></td>
<!--
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_and_50_breakup_advancesrch']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['above_50_breakup_advancesrch']; ?>
</font></td>
-->
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Browse - search within search</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_breakup_sws']; ?>
</font></td>
<!--
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_and_50_breakup_sws']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['above_50_breakup_sws']; ?>
</font></td>
-->
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Others</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_breakup_others']; ?>
</font></td>
<!--
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_and_50_breakup_others']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['above_50_breakup_others']; ?>
</font></td>
-->
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_breakup_total']; ?>
</font></td>
<!--
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['zero_and_50_breakup_total']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['above_50_breakup_total']; ?>
</font></td>
-->
  </tr>
</table>

<br><br>

<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
<tr>
  </tr>
   <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">Search Agent</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
 
 <tr>        
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Search Agents created on <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_created']; ?>
</font></td>
  </tr>
 
 <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Agents-Quick Edited on <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_edited_quick']; ?>
</font></td>
  </tr> 
 <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Agents-Role Edited on <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_edited_role']; ?>
</font></td>
  </tr>

 <tr>        
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Saved Search Agents on <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_saved']; ?>
</font></td>
  </tr>  

  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total Unique Search Agents <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['unique_saved_searches']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Average number of Search Agents/user <?php echo $this->_tpl_vars['date_chosen']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['avg_saved_searches']; ?>
</font></td>
  </tr>
</table>
<!--
<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr>
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">TOTAL SAVED AGENTS (Active)</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Total</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Edited</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Role</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_saved_role']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_edited_role']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Quick</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_saved_quick']; ?>
</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['searchAgents_edited_quick']; ?>
</font></td>
  </tr>
</table>
<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr>
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">How many unique users have :</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Saved searches</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['unique_saved_searches']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Average number of saved searches/user</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['avg_saved_searches']; ?>
</font></td>
  </tr>
</table>

-->
<!--commented by Vishal Saxena on 12 jan 2007,to remove Block No.5 and Block No.6 acc to Dashboard SRS lvl 2
<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">TOTAL JOBS LIVE ON THE SITE </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['TOTALJOBS']; ?>
</font></td>
  </tr>
</table>

<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">HOW MANY : </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">a) All Word Searches</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['KeywordType_all']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">b) Exact phrase searches</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['KeywordType_exact']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">c) Any of the words searches</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['KeywordType_any']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">d) Boolean searches</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['KeywordType_bool']; ?>
</font></td>
  </tr>
</table>
-->

<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">Usage Of : </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Date Sort</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['SortingType_freshness']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Relevance Sort</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['SortingType_relevance']; ?>
</font></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Personalised Sort</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['SortingType_personalised']; ?>
</font></td>
  </tr>
</table>

<!-- commented by Vishal Saxena on 12 jan 2007,to remove Block No.9 acc to Dashboard SRS lvl 2
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">Average Page Depth : </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Page 2</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['Pagination_2']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Page 3</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['Pagination_2']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Page 4</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['Pagination_2']; ?>
</font></td>
  </tr>
</table>
-->
<!-- code is commented by vishal saxena to remove featcomp and featjobs avg click acc to dashboard SRS lvl 2
<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">Featured Companies : </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">a) Average clicks/day</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['FeatComp']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">b) Average applies/day</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">###</font></td>
  </tr>
</table>

<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">Featured Jobs : </font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">a) Average clicks/day</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo $this->_tpl_vars['FeatJobs']; ?>
</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">b) Average applies/day</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">###</font></td>
  </tr>
</table>
         commented ends here by vishal saxena-->
<!--
<br><br>
<table width="90%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
  <tr> 
    <td width="30%" bgcolor="#CCCCCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" width="30%">TOTAL SAVED AGENTS (Active)</font></td>
    <td bgcolor="#9999FF"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Count</font></td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Heading 1</font></td>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">###</font></td>
  </tr>
</table>
-->

</body>
</html>