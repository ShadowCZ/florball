<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 16:49:32
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_report.php" */ ?>
<?php /*%%SmartyHeaderCode:269534fa53dfcc796d5-90561388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a77a58c9e41c17ac57722ca9119021dadd35b06' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_report.php',
      1 => 1336225813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269534fa53dfcc796d5-90561388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div style="background: lightgray">
    <b>Přehled reportů</b><br>
    <div style="padding-left: 15px">
        <?php echo smarty_function_anchor(array('uri'=>"creport/spyReports",'label'=>"Špehování"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"creport/help/",'label'=>"Návod"),$_smarty_tpl);?>

    </div>
</div>
