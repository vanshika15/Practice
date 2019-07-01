<?php /* Smarty version 2.6.19, created on 2008-06-26 12:44:37
         compiled from /usr/local/apache/htdocs/smarty/templates//dashboard/dashboard_browse_othdetail.tpl */ ?>
<html>
<head>
<title>
 Other browse detail
</title>
</head>
<body>
<form name="showOthDetail_browse" action="dashboard_browse_showOthDetail.php" method="get">
<table border="1">
  <caption><strong><?php echo $this->_tpl_vars['cat_label']; ?>
-<?php echo $this->_tpl_vars['cat_type']; ?>
 Category from <?php echo $this->_tpl_vars['date1']; ?>
 to <?php echo $this->_tpl_vars['date2']; ?>
</strong></caption>
  <tr><td>Total Searches in -- <?php echo $this->_tpl_vars['cat_label']; ?>
 </td><td><?php echo $this->_tpl_vars['total_searches']; ?>
</td></tr>  
  <tr><td>Total Applies for -- <?php echo $this->_tpl_vars['cat_label']; ?>
 </td><td><?php echo $this->_tpl_vars['total_applies']; ?>
</td></tr>
  <tr><td>Total Zero result for -- <?php echo $this->_tpl_vars['cat_label']; ?>
</td><td> <?php echo $this->_tpl_vars['browse_zero']; ?>
</td></tr>
  <tr><td>Total Search within result for -- <?php echo $this->_tpl_vars['cat_label']; ?>
</td><td> <?php echo $this->_tpl_vars['sws_nonzero']; ?>
</td></tr>
  <tr><td>Total Zero results for search within results for -- <?php echo $this->_tpl_vars['cat_label']; ?>
</td><td><?php echo $this->_tpl_vars['sws_zero']; ?>
</td></tr>
   <?php if ($this->_tpl_vars['cat_type'] != 'Farea'): ?>
     </table>
   <?php else: ?> 
     <tr><td>Total role selected/Total searches in -- <?php echo $this->_tpl_vars['cat_label']; ?>
</td><td><?php echo $this->_tpl_vars['total_role_searches']; ?>
</td><tr>
    </table>
   <?php endif; ?>
  <?php if ($this->_tpl_vars['show_download'] == 'Yes'): ?>
   <table><tr><td><input type="button" name="download" value="Download" onClick="window.location.href='dashboard_browse_showOthDetail.php?catid=<?php echo $this->_tpl_vars['catid']; ?>
&browse_zero=<?php echo $this->_tpl_vars['browse_zero']; ?>
&browse_nonzero=<?php echo $this->_tpl_vars['browse_nonzero']; ?>
&sws_zero=<?php echo $this->_tpl_vars['sws_zero']; ?>
&sws_nonzero=<?php echo $this->_tpl_vars['sws_nonzero']; ?>
&cat_label=<?php echo $this->_tpl_vars['cat_label']; ?>
&cat_type=<?php echo $this->_tpl_vars['cat_type']; ?>
&role_selected=<?php echo $this->_tpl_vars['role_selected']; ?>
&hometop_applies=<?php echo $this->_tpl_vars['hometop_applies']; ?>
&homeright_applies=<?php echo $this->_tpl_vars['homeright_applies']; ?>
&srchfrm_applies=<?php echo $this->_tpl_vars['srchfrm_applies']; ?>
&others_applies=<?php echo $this->_tpl_vars['others_applies']; ?>
&date1=<?php echo $this->_tpl_vars['date1']; ?>
&date2=<?php echo $this->_tpl_vars['date2']; ?>
&show_download=No&download=1'"></td></tr></table>
  <?php endif; ?>
</form>
</body>
</html>