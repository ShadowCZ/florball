<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 15:45:58
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_army.php" */ ?>
<?php /*%%SmartyHeaderCode:142134fa52f16172922-35818183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd32362ba68e9ea1a47a089174983938ada547a' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_army.php',
      1 => 1336225520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142134fa52f16172922-35818183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div style="background: lightskyblue">
    <b>Přehled army</b><br>
    <div style="padding-left: 15px">
        <?php echo smarty_function_anchor(array('uri'=>"ccity/allyArmyUser",'label'=>"Moje army"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"ccity/allyArmyAll",'label'=>"Alianční army"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"ccity/help/",'label'=>"Návod"),$_smarty_tpl);?>

    </div>
</div>
