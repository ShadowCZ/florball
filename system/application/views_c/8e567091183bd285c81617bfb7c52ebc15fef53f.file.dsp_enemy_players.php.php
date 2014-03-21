<?php /* Smarty version Smarty-3.0.7, created on 2012-05-07 17:50:35
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_players.php" */ ?>
<?php /*%%SmartyHeaderCode:186104fa7ef4b950c42-80229227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e567091183bd285c81617bfb7c52ebc15fef53f' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_players.php',
      1 => 1336405828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186104fa7ef4b950c42-80229227',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table id="list" type="player" id_ally="<?php echo $_smarty_tpl->getVariable('iAlly')->value;?>
" border="1" style="border-style: solid; border-collapse:collapse; border-color: blue;">
    <tr style="background-color: blue; color: white;">
        <th id="table_header" colspan="5">
            <b id="back" style="color:lightgrey; position:absolute;" onmousemove="backMove(1);" onmouseout="backMove(0);" onclick="backToAllies()" onmouseover="this.style.cursor='pointer';" title="Zpět na přehled aliancí"><<<</b>
            <b id="ally_name"></b>
        </th>
    </tr>
    <tr style="background-color: navy; color: white;">
        <th>Hráč</th>
        <th>Měst celkem</th>
        <th>Pokrytých měst</th>
        <th>Přiřazených hráčů</th>
        <th>Přiřazených měst</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['aEnemy'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aEnemies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aEnemy']->key => $_smarty_tpl->tpl_vars['aEnemy']->value){
?>
        <?php $_smarty_tpl->tpl_vars['oPlayer'] = new Smarty_variable($_smarty_tpl->tpl_vars['aEnemy']->value['player'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iECities'] = new Smarty_variable($_smarty_tpl->tpl_vars['aEnemy']->value['enemy_cities'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iTCities'] = new Smarty_variable($_smarty_tpl->tpl_vars['aEnemy']->value['target_cities'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iAPlayers'] = new Smarty_variable($_smarty_tpl->tpl_vars['aEnemy']->value['assigned_players'], null, null);?>
        <?php $_smarty_tpl->tpl_vars['iACities'] = new Smarty_variable($_smarty_tpl->tpl_vars['aEnemy']->value['assigned_cities'], null, null);?>
        <tr id_player="<?php echo $_smarty_tpl->getVariable('oPlayer')->value->ID;?>
" style="background:#FFFFBB;" onmousemove="rowMove(this);" onclick="rowClick(this);" onmouseover="this.style.cursor='pointer';" title="Detail hráče">
            <th><?php echo $_smarty_tpl->getVariable('oPlayer')->value->name;?>
</th>
            <td><?php echo $_smarty_tpl->getVariable('iECities')->value;?>
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
<input id="player" name="player" placeholder="Nový hráč">
<button id="add_player" onclick="addPlayer();">Přidat</button>