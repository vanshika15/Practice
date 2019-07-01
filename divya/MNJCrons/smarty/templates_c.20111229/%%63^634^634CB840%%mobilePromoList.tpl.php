<?php /* Smarty version 2.6.19, created on 2011-12-01 15:45:12
         compiled from /usr/local/apache/htdocs/smarty/templates/mobilePromo//mobilePromoList.tpl */ ?>
<html>
<head>
<title>Mobile Promo Interface for naukri mailer</title>
</head>
<body>
<table border="1" align="center">
<tr><td colspan="8"><a href="<?php echo $this->_tpl_vars['appURL']; ?>
?addNewPromo=1">Add New Promotion for Mailer</a></td></tr>
<tr><th>Serial No</th><th>Promo Creation Date</th><th>Promotion Name</th><th>Promotion Text on Mailer</th><th>Promo On</th><th>Edit</th><th>Delete</th></tr>
<?php $_from = $this->_tpl_vars['resultSet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['i']):
?>
<tr>
<td><?php echo $this->_tpl_vars['id']; ?>
</td>
<td><?php echo $this->_tpl_vars['i']['PROMO_DATE']; ?>
</td>
<td><?php echo $this->_tpl_vars['i']['PROMONAME']; ?>
</td>
<td><?php echo $this->_tpl_vars['i']['PROMOTEXT']; ?>
</td>
<!-- <td><?php echo $this->_tpl_vars['i']['PROMOURL']; ?>
</td> -->
<td><?php echo $this->_tpl_vars['i']['PROMO_ON_STR']; ?>
</td>
<td><a href="<?php echo $this->_tpl_vars['appURL']; ?>
?editPromo=1&promoID=<?php echo $this->_tpl_vars['i']['PROMOID']; ?>
">Edit</a></td>
<td><a href="<?php echo $this->_tpl_vars['appURL']; ?>
?deletePromo=1&promoID=<?php echo $this->_tpl_vars['i']['PROMOID']; ?>
">Delete</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>