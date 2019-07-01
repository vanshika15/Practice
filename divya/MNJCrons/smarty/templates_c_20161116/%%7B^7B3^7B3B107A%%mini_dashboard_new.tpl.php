<?php /* Smarty version 2.6.19, created on 2014-06-10 15:20:30
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
<!-- commented by Vishal Saxena on 12 jan 2