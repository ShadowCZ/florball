<?php /* Smarty version Smarty-3.0.7, created on 2012-03-25 01:23:55
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_report_user.php" */ ?>
<?php /*%%SmartyHeaderCode:108714f6e659b65bba9-26123872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609d2edee3d96112c219b2c9a01586c4f4abfcc6' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_report_user.php',
      1 => 1332635030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108714f6e659b65bba9-26123872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['oReport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aReports')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oReport']->key => $_smarty_tpl->tpl_vars['oReport']->value){
?>
    <tr><th><?php echo $_smarty_tpl->getVariable('oReport')->value->reported;?>
 - <?php echo $_smarty_tpl->getVariable('oReport')->value->title;?>
</th></tr>
<?php }} ?>
