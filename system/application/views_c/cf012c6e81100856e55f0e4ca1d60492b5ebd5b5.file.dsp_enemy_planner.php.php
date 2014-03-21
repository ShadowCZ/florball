<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 12:15:40
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_planner.php" */ ?>
<?php /*%%SmartyHeaderCode:233564fa8f24c91b7f8-01042343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf012c6e81100856e55f0e4ca1d60492b5ebd5b5' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_enemy_planner.php',
      1 => 1336472105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233564fa8f24c91b7f8-01042343',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table id="list" type="city" id_enemy="<?php echo $_smarty_tpl->getVariable('iEnemy')->value;?>
" border="1" style="border-style: solid; border-collapse:collapse; border-color: blue;">
    <tr style="background-color: blue; color: white;">
        <th id="table_header" colspan="1">
            <b id="back" style="color:lightgrey; position:absolute;" onmousemove="backMove(1);" onmouseout="backMove(0);" onclick="backToPlayers()" onmouseover="this.style.cursor='pointer';" title="Zpět na přehled hráčů"><<<</b>
            <b id="enemy_name">x</b>
        </th>
    </tr>
    <tr>
        <td id="planner">
            <?php $_template = new Smarty_Internal_Template("ajax/dsp_enemy_e_cities.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </td>
    </tr>
</table>

<input id="city" name="city" placeholder="Nové město">
<button id="add_enemy_city" onclick="addCity();">Přidat</button>

<div id="detail" style="background: lightgrey; padding: 10px; border: 2px solid blue; -webkit-box-shadow: 0 0 8px #D0D0D0;">

</div>