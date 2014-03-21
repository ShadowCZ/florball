<?php /* Smarty version Smarty-3.0.7, created on 2012-02-24 04:23:23
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_group.php" */ ?>
<?php /*%%SmartyHeaderCode:194f4702ab4eb867-42243594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ee4b7a6aef066b9acb3bad43f538fe49fab37d2' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu_group.php',
      1 => 1330053332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194f4702ab4eb867-42243594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div style="background: lightgreen">
    <?php echo smarty_function_anchor(array('uri'=>"cgroup/group/",'label'=>"Přehled skupin"),$_smarty_tpl);?>
<br>
    <div style="padding-left: 15px">
        <?php echo smarty_function_anchor(array('uri'=>"cgroup/userGroup",'label'=>"Moje skupina"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"cgroup/allyGroup",'label'=>"Alianční skupina"),$_smarty_tpl);?>
<br>
    </div>
</div>
