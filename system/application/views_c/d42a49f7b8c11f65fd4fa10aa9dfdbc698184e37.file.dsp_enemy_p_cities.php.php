<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 00:22:37
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_p_cities.php" */ ?>
<?php /*%%SmartyHeaderCode:170324fa84b2d97acf0-32994803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42a49f7b8c11f65fd4fa10aa9dfdbc698184e37' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_p_cities.php',
      1 => 1336429348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170324fa84b2d97acf0-32994803',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="player_header" style="background: blue; color: white; font-weight: bold; padding-bottom: 3px">
    Jméno hráce
</div>
lawngreen
<div id="player_cities" style="background: lightskyblue; font-weight: bold; padding: 2px; padding-left: 10px; border: 2px solid;">
    <?php  $_smarty_tpl->tpl_vars['aCity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aPlayerCities')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aCity']->key => $_smarty_tpl->tpl_vars['aCity']->value){
?>
        <?php $_smarty_tpl->tpl_vars['oCity'] = new Smarty_variable($_smarty_tpl->tpl_vars['aCity']->value['city'], null, null);?>
        <div class="city">
            <?php echo $_smarty_tpl->getVariable('oCity')->value->name;?>

        </div>
    <?php }} ?>
</div>