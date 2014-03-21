<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 12:04:45
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_list.php" */ ?>
<?php /*%%SmartyHeaderCode:85084fa4fb3d536498-12946443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5ebf09bf5b86b073486d1136dd7e893c6ed1901' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_list.php',
      1 => 1336212279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85084fa4fb3d536498-12946443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('aOptions')->value;?>

<?php if (isset($_smarty_tpl->getVariable('aOptions',null,true,false)->value)){?>
    <?php  $_smarty_tpl->tpl_vars['sOption'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aOptions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sOption']->key => $_smarty_tpl->tpl_vars['sOption']->value){
 $_smarty_tpl->tpl_vars['sKey']->value = $_smarty_tpl->tpl_vars['sOption']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['sKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sOption']->value;?>
</option>
    <?php }} ?>
<?php }else{ ?>
    0
<?php }?>
