<?php /* Smarty version 2.6.19, created on 2009-06-19 11:35:09
         compiled from promobar/listPromo.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" />
<title>Naukri.com: Promo Bar Admin</title>
<link href="includes/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>Promo Bar Admin</h1><br /><h2><a href="<?php echo $this->_tpl_vars['addPath']; ?>
">Add New</a></h2>
<br />
<?php $this->assign('exp', 0); ?>
<?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['loop'] = is_array($_loop=$this->_tpl_vars['arrList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['index']['show'] = true;
$this->_sections['index']['max'] = $this->_sections['index']['loop'];
$this->_sections['index']['step'] = 1;
$this->_sections['index']['start'] = $this->_sections['index']['step'] > 0 ? 0 : $this->_sections['index']['loop']-1;
if ($this->_sections['index']['show']) {
    $this->_sections['index']['total'] = $this->_sections['index']['loop'];
    if ($this->_sections['index']['total'] == 0)
        $this->_sections['index']['show'] = false;
} else
    $this->_sections['index']['total'] = 0;
if ($this->_sections['index']['show']):

            for ($this->_sections['index']['index'] = $this->_sections['index']['start'], $this->_sections['index']['iteration'] = 1;
                 $this->_sections['index']['iteration'] <= $this->_sections['index']['total'];
                 $this->_sections['index']['index'] += $this->_sections['index']['step'], $this->_sections['index']['iteration']++):
$this->_sections['index']['rownum'] = $this->_sections['index']['iteration'];
$this->_sections['index']['index_prev'] = $this->_sections['index']['index'] - $this->_sections['index']['step'];
$this->_sections['index']['index_next'] = $this->_sections['index']['index'] + $this->_sections['index']['step'];
$this->_sections['index']['first']      = ($this->_sections['index']['iteration'] == 1);
$this->_sections['index']['last']       = ($this->_sections['index']['iteration'] == $this->_sections['index']['total']);
?>
 <?php $this->assign('newexp', $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['EXPRANGE']); ?>
   <?php if ($this->_tpl_vars['newexp'] != $this->_tpl_vars['exp']): ?>
	<?php $this->assign('exp', $this->_tpl_vars['newexp']); ?>
	<?php if (! $this->_sections['index']['first']): ?>
            </table><br />
	<?php endif; ?>
	<div style="font-weight:bold;font-size:15px;padding:10px;"><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['EXPRANGENAME']; ?>
 years</div>
	<table width="98%" align="center" cellspacing="1">
		<tr>
		  <th>Categories</th>
    		  <th>Link Title</th>
	      	  <th>Supporting  text</th>
	    	  <th>URL  for landing page</th>
	    	  <th>Clicks</th>
	          <th>Edit</th>
	          <th>Delete</th>
	       </tr>
   <?php endif; ?>
   <tr>
        <td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['CATEGORYNAME']; ?>
</td>
    	<td><strong><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMONAME']; ?>
</strong></td>
    	<td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMOTEXT']; ?>
</td>
    	<td><a href="<?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMOURL']; ?>
" target="_new"><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMOURL']; ?>
</a></td>
    	<td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['CLICKCOUNT']; ?>
</td>
    	<td><a href="<?php echo $this->_tpl_vars['addPath']; ?>
?edit=1&pid=<?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMOID']; ?>
">Edit</a></td>
    	<td><a href="<?php echo $this->_tpl_vars['deletePath']; ?>
?pid=<?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMOID']; ?>
" onclick="return confirmDelete('<?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['PROMOID']; ?>
');">Delete</a></td>
    </tr>
<?php endfor; endif; ?>
</table><br />
<br />
<script type="text/javascript">
	function confirmDelete(promoid)
	{
		conBox = confirm("Are you sure you want to delete?");
	        if(conBox)
		{
			return true;
	        }
        	return false;
	}
</script>
</body>
</html>