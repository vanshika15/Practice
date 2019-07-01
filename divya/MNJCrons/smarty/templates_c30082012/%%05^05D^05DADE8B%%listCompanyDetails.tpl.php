<?php /* Smarty version 2.6.19, created on 2012-08-17 13:09:25
         compiled from seniorjobs/listCompanyDetails.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" />
<title>Naukri.com: 15 Lac Plus Admin</title>
<link href="includes/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>15 Lac Plus Admin</h1><br /><h2><a href="<?php echo $this->_tpl_vars['addPath']; ?>
">Add New</a></h2>
<br />
<?php if ($this->_tpl_vars['arrList']): ?>
<table width="98%" align="center" cellspacing="1">
		<tr>
		  <th>Company Id</th>
    		  <th>Company Name 1</th>
    		  <th>Company Name 2</th>
    		  <th>Company Name 3</th>
	      	  <th>Address Line 1</th>
	    	  <th>Address Line 2</th>
	    	  <th>Logo Url</th>
	    	  <th>City</th>
	    	  <th>Industry Type</th>
	          <th>Edit</th>
	       </tr>
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
   <tr>
        <td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMID']; ?>
</td>
    	<td><strong><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMNAME1']; ?>
</strong></td>
    	<td><strong><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMNAME2']; ?>
</strong></td>
    	<td><strong><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMNAME3']; ?>
</strong></td>
    	<td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMADDR1']; ?>
</td>
    	<td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMADDR2']; ?>
</td>
    	<td><a href="<?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['LOGOURL']; ?>
" target="_new"><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['LOGOURL']; ?>
</a></td>
    	<td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMCITY']; ?>
</td>
    	<td><?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMINDUSTRY']; ?>
</td>
    	<td><a href="<?php echo $this->_tpl_vars['addPath']; ?>
?edit=1&comid=<?php echo $this->_tpl_vars['arrList'][$this->_sections['index']['index']]['COMID']; ?>
">Edit</a></td>
    </tr>
<?php endfor; endif; ?>
</table><br />
<br />
<?php endif; ?>
</body>
</html>