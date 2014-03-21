<?php /* Smarty version Smarty-3.0.7, created on 2012-03-06 16:29:55
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_equipment.php" */ ?>
<?php /*%%SmartyHeaderCode:26724f562d738f1837-70304981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf563fccfee02e6886611489baf836e631799091' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_equipment.php',
      1 => 1331047745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26724f562d738f1837-70304981',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div style="background: aquamarine">
    <?php echo smarty_function_anchor(array('uri'=>"cequipment/allyEquipment/",'label'=>"Přehled vybavení měst"),$_smarty_tpl);?>
<br>
    <div style="padding-left: 15px">
        <?php echo smarty_function_anchor(array('uri'=>"cequipment/userBuildings",'label'=>"Moje stavby"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"cequipment/userResearches",'label'=>"Moje výzkumy"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"cequipment/allyBuildings",'label'=>"Alianční stavby"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"cequipment/allyResearches",'label'=>"Alianční výzkumy"),$_smarty_tpl);?>
<br>

        <?php echo smarty_function_anchor(array('uri'=>"ccity/allyArmyHelp/",'label'=>"Návod"),$_smarty_tpl);?>

    </div>
</div>
