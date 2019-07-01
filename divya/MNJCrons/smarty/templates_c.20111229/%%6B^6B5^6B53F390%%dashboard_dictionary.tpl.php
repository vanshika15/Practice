<?php /* Smarty version 2.6.19, created on 2011-12-09 10:26:58
         compiled from ni/nidashboard/dashboard_dictionary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'ni/nidashboard/dashboard_dictionary.tpl', 41, false),)), $this); ?>
<html lang="ar" xml:lang="ar" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.style1 {font-weight:bold;}
</style>
</head>
<body>
<?php echo $this->_tpl_vars['DASHBOARD_HEADER']; ?>

<?php if ($this->_tpl_vars['NORECORDS']): ?>
    <div align="center" style="color:red;font-size:24px">No Records Found</div>
<?php else: ?>
    <form name=myform action="dashboard_dictionary.php" method="POST">
    <div style="float:right;margin-right:33px;">Pages: <?php echo $this->_tpl_vars['PAGES']; ?>
</div>
    <div style="clear:both;height:10px"></div>
    <table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#ccccff">
      <tr bgcolor="#c4c4c4">
       <td width="4%" align="center" class="style1"></td>
       <td width="4%" align="center" class="style1">S.No.</td>
       <td width="15%" align="center" class="style1">Field Name</td>
       <td width="15%" align="center" class="style1">User Entry <br/>(Arabic)</td>
       <td width="4%" align="center" class="style1"></td>
       <td width="15%" align="center" class="style1">Translated Text <br/>(Translator / User) <br/>(English)</td>
       <td width="4%" align="center" class="style1"></td>
       <td width="15%" align="center" class="style1">User Modification <br/> (English)</td>
       <td width="4%" align="center" class="style1"></td>
       <td width="15%" align="center" class="style1">Admin Entry <br/>(English)</td>
       <td width="5%" align="center" class="style1"></td>
      </tr>

    <?php unset($this->_sections['count']);
$this->_sections['count']['name'] = 'count';
$this->_sections['count']['loop'] = is_array($_loop=$this->_tpl_vars['DATA']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['count']['show'] = true;
$this->_sections['count']['max'] = $this->_sections['count']['loop'];
$this->_sections['count']['step'] = 1;
$this->_sections['count']['start'] = $this->_sections['count']['step'] > 0 ? 0 : $this->_sections['count']['loop']-1;
if ($this->_sections['count']['show']) {
    $this->_sections['count']['total'] = $this->_sections['count']['loop'];
    if ($this->_sections['count']['total'] == 0)
        $this->_sections['count']['show'] = false;
} else
    $this->_sections['count']['total'] = 0;
if ($this->_sections['count']['show']):

            for ($this->_sections['count']['index'] = $this->_sections['count']['start'], $this->_sections['count']['iteration'] = 1;
                 $this->_sections['count']['iteration'] <= $this->_sections['count']['total'];
                 $this->_sections['count']['index'] += $this->_sections['count']['step'], $this->_sections['count']['iteration']++):
$this->_sections['count']['rownum'] = $this->_sections['count']['iteration'];
$this->_sections['count']['index_prev'] = $this->_sections['count']['index'] - $this->_sections['count']['step'];
$this->_sections['count']['index_next'] = $this->_sections['count']['index'] + $this->_sections['count']['step'];
$this->_sections['count']['first']      = ($this->_sections['count']['iteration'] == 1);
$this->_sections['count']['last']       = ($this->_sections['count']['iteration'] == $this->_sections['count']['total']);
?>
      <tr> 
      <?php $this->assign('idx', $this->_sections['count']['index']); ?>
      <?php if ($this->_tpl_vars['page'] == '' || $this->_tpl_vars['page'] == '1'): ?>
          <?php $this->assign('pgno', 1); ?>
      <?php else: ?>
          <?php $this->assign('pgno', $this->_tpl_vars['page']); ?>
      <?php endif; ?>
       <td width="4%" align="center"><input type="checkbox" name="CHECKBOX[]" value="<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
"></td>
<!--       <td width="4%" align="center"><?php $this->assign('idx', $this->_sections['count']['index']); ?><?php $this->assign('iSum', ($this->_tpl_vars['RPP'])."*(".($this->_tpl_vars['pgno'])."-1)+(".($this->_tpl_vars['idx'])."+1)"); ?> <?php echo $this->_tpl_vars['iSum']; ?>
</td>-->
       <td width="4%" align="center"><?php $this->assign('idx', $this->_sections['count']['index']); ?><?php echo smarty_function_math(array('equation' => ($this->_tpl_vars['RPP'])."*(".($this->_tpl_vars['pgno'])."-1)+(".($this->_tpl_vars['idx'])."+1)"), $this);?>
</td>

       <input type="hidden" name="TEXT1<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" value="<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" >
       <td width="15%" align="center"><?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['FieldName']; ?>
</td>
       <input type="hidden" name="TEXT2<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" value="<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['FieldName']; ?>
">
       <td width="15%" align="center"><?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['ArabicText']; ?>
</td>
       <input type="hidden" name="TEXT3<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" value="<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['ArabicText']; ?>
">
       <td width="4%" align="center">
            <input type="radio" checked="" name="RADIO<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
"  value="gt">
            <input type="hidden" name="TEXT4<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
"  value="<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['TextEN']; ?>
">
       </td>
       <td width="15%" align="center"><?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['TextEN']; ?>
</td>
       <td width="4%" align="center">
          <input type="radio" name="RADIO<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" value="user">
          <input type="hidden" name="TEXT5<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" value="<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['UserTextEN']; ?>
" >
       </td>
       <td width="15%" align="center"><?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['UserTextEN']; ?>
</td>
       <td width="4%" align="center">
          <input type="radio" name="RADIO<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" value="admin"></td>
       <td width="15%" align="center">
          <input type="text" name="TEXT6<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
" onFocus="document.myform.RADIO<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']; ?>
[2].checked = true">
       <?php $this->assign('cntr', $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['Id']); ?>
       <?php if ($this->_tpl_vars['ERROR'][$this->_tpl_vars['cntr']]['Error'] != ""): ?><br/><span style="color:red"><?php echo $this->_tpl_vars['ERROR'][$this->_tpl_vars['cntr']]['Error']; ?>
</span><br/><?php endif; ?></td>
       <td width="5%" align="center"><?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['ResId']; ?>
 &nbsp;<a href="http://naukrigulf.com/ni/nidashboard/dashboard_res_preview.php?resumeid=<?php echo $this->_tpl_vars['DATA'][$this->_sections['count']['index']]['ResId']; ?>
" target="_blank">view</a></td
      </tr>
     <?php endfor; endif; ?>
     </table>
     <?php if ($this->_tpl_vars['checkbox'] != ''): ?><br/><span style="color:red">Please select a row</span><br/><?php endif; ?>
    <div style="height:30px"></div>
    <div align="center"><input type="submit" name="save" value="SAVE"><div style="width:20px;float:left;">&nbsp;</div><input type="submit" name="discard" value="DISCARD" ></div>
    
    <input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page']; ?>
">
    </form>
<?php endif; ?>
</body>
</html>