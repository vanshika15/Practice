<?php /* Smarty version 2.6.19, created on 2008-11-19 11:11:52
         compiled from /usr/local/apache/htdocs/smarty/templates/dashboard/dashboard_click_mis.tpl */ ?>
<table border="1" align="center">
  <caption>Search and More Search Option Click</caption>
  <tr><th colspan="4"><?php echo $this->_tpl_vars['title_viewsimilar']; ?>
</th></tr>
  <tr><td>Search Jobs</td><td>HomePage</td><td>MNJ</td><td>Search Result Page</td><td>Jobs By Category</td><td>Search Form</td></tr>
 <?php $_from = $this->_tpl_vars['clickArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
    <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['basHomepage']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['basMNJ']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['basSrchRes']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['basJobCat']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['basSearchFrm']; ?>
</td>
                        </tr>
 <?php endforeach; endif; unset($_from); ?>
  <tr><td>More Search Option</td><td>HomePage</td><td>MNJ</td><td>Search Result Page</td><td>Search Form</td></tr>
 <?php $_from = $this->_tpl_vars['clickArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['columnheading']):
?>
    <tr><td><?php echo $this->_tpl_vars['date']; ?>
</td><td><?php echo $this->_tpl_vars['columnheading']['advHomepage']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['advMNJ']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['advSrchRes']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['columnheading']['advSearchFrm']; ?>
</td>
                        </tr>
 <?php endforeach; endif; unset($_from); ?>
 </table>