<?php /* Smarty version Smarty-3.0.7, created on 2012-05-06 23:38:42
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_allies.php" */ ?>
<?php /*%%SmartyHeaderCode:271424fa6ef62a777d0-39457178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baddb0b5998f0f13f62301910fad3b862688fe3d' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_allies.php',
      1 => 1336339281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271424fa6ef62a777d0-39457178',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table id="list" type="ally" border="1" style="border-style: solid; border-collapse:collapse; border-color: blue;">
    <tr style="background-color: blue; color: white;">
        <th colspan="7">Seznam aliancí</th>
    </tr>
    <tr style="background-color: navy; color: white;">
        <th>Aliance</th>
        <th>Hráčů celkem</th>
        <th>Měst celkem</th>
        <th>Pokrytých hráčů</th>
        <th>Pokrytých měst</th>
        <th>Přiřazených hráčů</th>
        <th>Přiřazených měst</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['aAlly'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aAllies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aAlly']->key => $_smarty_tpl->tpl_vars['aAlly']->value){
?>
        <?php $_smarty_tpl->tpl_vars['oAlly'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['ally'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iEPlayers'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['enemy_players'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iECities'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['enemy_cities'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iTPlayers'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['target_players'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iTCities'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['target_cities'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iAPlayers'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['assigned_players'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iACities'] = new Smarty_variable($_smarty_tpl->tpl_vars['aAlly']->value['assigned_cities'], null, null);?>
        <tr id_ally="<?php echo $_smarty_tpl->getVariable('oAlly')->value->ID;?>
" style="background:#FFFFBB;" onmousemove="rowMove(this);" onclick="rowClick(this);" onmouseover="this.style.cursor='pointer';" title="Detail aliance">
            <th><?php echo $_smarty_tpl->getVariable('oAlly')->value->name;?>
</th>
            <td><?php echo $_smarty_tpl->getVariable('iEPlayers')->value;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('iECities')->value;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('iTPlayers')->value;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('iTCities')->value;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('iAPlayers')->value;?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('iACities')->value;?>
</td>
        </tr>
    <?php }} ?>
</table>
<input id="ally" name="ally" placeholder="Nová aliance">
<button id="add_ally" onclick="addAlly();">Přidat</button>