<?php /* Smarty version 2.6.19, created on 2017-10-12 14:52:48
         compiled from apply/apply_relMatch.tpl */ ?>
<html>
<body>
<form method = "post" action = "">

<?php if ($this->_tpl_vars['output'] == ''): ?>
        <table>
        <?php if ($this->_tpl_vars['err'] != ''): ?>
        <tr>
        <td colspan = 4><font color="red"><?php echo $this->_tpl_vars['err']; ?>
</font> </td>
        </tr>
        <?php endif; ?>
        <tr>
        <th> Please select the duration for which you would like to see the reports</th>
        </tr>
        <tr>
        <td>From : &nbsp;&nbsp;<?php echo $this->_tpl_vars['Yesterday_Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Yesterday_Month']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['Yesterday_Year']; ?>
</td>
        </tr>
        <tr>
        <td>To : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['Today_Date']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['Today_Month']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['Today_Year']; ?>
</td>
        </tr>
        </table>
        <br>
        <input type = "submit" name = "submit" value = "submit">
<?php else: ?>
        <?php echo $this->_tpl_vars['output']; ?>

<?php endif; ?>
</form>
</body>
</html>

