<?php /* Smarty version 2.6.19, created on 2008-06-28 17:01:01
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_browse_detail.tpl */ ?>
<html>
<head>
 <title>
   Browse Detail
 </title>
<script>
function showOthDetail(catid,browse_data)
 {
 var OthDetail= new Array();
 // alert(catid);
 // alert(browse_data.length);
    alert(browse_data[0]);
    OthDetail[]=
  
 }
</script>

</head>
<form action="dashboard_browse_new.php" method="post">
<body>
<table border="1">
  <tr><th colspan="11"><?php echo $this->_tpl_vars['labelForDetailTab']; ?>
</th></tr>
  <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
      <td colspan="2">HomePage Top</td> 
      <td colspan="2">HomePage Right</td>
      <td colspan="2">Landing Page</td>
      <td colspan="2">Other Links</td></tr>
  <tr><td>S.No</td><td>Category Name</td>
                   <td>Category Type</td>
                   <td>Hits</td>
                   <td>Applies</td>
                   <td>Hits</td>
                   <td>Applies</td>
                   <td>Hits</td>
                   <td>Applies</td>
                   <td>Hits</td>
                   <td>Applies</td></tr>
  <input type="hidden" name="submit" value="<?php echo $this->_tpl_vars['submit']; ?>
">
  <input type="hidden" name="dropdown" value="<?php echo $this->_tpl_vars['dropdown']; ?>
">
  <input type="hidden" name="from" value="<?php echo $this->_tpl_vars['date1']; ?>
">
  <input type="hidden" name="to" value="<?php echo $this->_tpl_vars['date2']; ?>
">
  <input type="hidden" name="catid_entered1" value="<?php echo $this->_tpl_vars['catid_entered1']; ?>
">
  <input type="hidden" name="catid_entered2" value="<?php echo $this->_tpl_vars['catid_entered2']; ?>
">


  <?php $_from = $this->_tpl_vars['browse_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['catid'] => $this->_tpl_vars['element']):
?>
  <?php $this->assign('index', $this->_tpl_vars['index']+1); ?>
   <tr><td><?php echo $this->_tpl_vars['index']; ?>
</td><td><a href="dashboard_browse_showOthDetail.php?catid=<?php echo $this->_tpl_vars['catid']; ?>
&browse_zero=<?php echo $this->_tpl_vars['element']['browse_zero']; ?>
&browse_nonzero=<?php echo $this->_tpl_vars['element']['browse_nonzero']; ?>
&sws_zero=<?php echo $this->_tpl_vars['element']['sws_zero']; ?>
&sws_nonzero=<?php echo $this->_tpl_vars['element']['sws_nonzero']; ?>
&cat_label=<?php echo $this->_tpl_vars['element']['label']; ?>
&cat_type=<?php echo $this->_tpl_vars['element']['type']; ?>
&role_selected=<?php echo $this->_tpl_vars['element']['role_selected']; ?>
&hometop_applies=<?php echo $this->_tpl_vars['element']['hometop_applies']; ?>
&homeright_applies=<?php echo $this->_tpl_vars['element']['homeright_applies']; ?>
&srchfrm_applies=<?php echo $this->_tpl_vars['element']['srchfrm_applies']; ?>
&others_applies=<?php echo $this->_tpl_vars['element']['others_applies']; ?>
&date1=<?php echo $this->_tpl_vars['date1']; ?>
&date2=<?php echo $this->_tpl_vars['date2']; ?>
&show_download=Yes" target="_blank" ><?php echo $this->_tpl_vars['element']['label']; ?>
</a></td>
                      <td><?php echo $this->_tpl_vars['element']['type']; ?>
</td>
                      <td><?php if ($this->_tpl_vars['element']['hometop_clicks'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['hometop_clicks']; ?>
 <?php endif; ?></td>
                      <td><?php if ($this->_tpl_vars['element']['hometop_applies'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['hometop_applies']; ?>
<?php endif; ?></td>
                      <td><?php if ($this->_tpl_vars['element']['homeright_clicks'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['homeright_clicks']; ?>
 <?php endif; ?></td>
                      <td><?php if ($this->_tpl_vars['element']['homeright_applies'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['homeright_applies']; ?>
 <?php endif; ?></td>
                      <td><?php if ($this->_tpl_vars['element']['srchfrm_clicks'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['srchfrm_clicks']; ?>
 <?php endif; ?></td>
                      <td><?php if ($this->_tpl_vars['element']['srchfrm_applies'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['srchfrm_applies']; ?>
 <?php endif; ?></td>
                      <td><?php if ($this->_tpl_vars['element']['others_clicks'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['others_clicks']; ?>
 <?php endif; ?> </td>
                      <td><?php if ($this->_tpl_vars['element']['others_applies'] == ''): ?> -- <?php else: ?> <?php echo $this->_tpl_vars['element']['others_applies']; ?>
 <?php endif; ?></td>

 </tr>  
    <?php endforeach; endif; unset($_from); ?> 
<?php if ($this->_tpl_vars['show_download'] == 'Yes'): ?> <tr><td><input type="submit" name="download2" value="Download"></td></tr> <?php endif; ?>
</table>

</form>
</body>
</html>