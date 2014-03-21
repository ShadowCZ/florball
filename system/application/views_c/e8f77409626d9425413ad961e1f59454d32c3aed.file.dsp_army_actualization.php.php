<?php /* Smarty version Smarty-3.0.7, created on 2012-03-06 16:41:59
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_actualization.php" */ ?>
<?php /*%%SmartyHeaderCode:213704f563047b6cf85-18050854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8f77409626d9425413ad961e1f59454d32c3aed' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_actualization.php',
      1 => 1331048517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213704f563047b6cf85-18050854',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <?php $_template = new Smarty_Internal_Template("block/dsp_menu.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <form method="post" action="<?php echo site_url('ccity/allyArmyActualization');?>
">
            <textarea type="text" name="newArmy" size="40" maxlength="10000" cols=70 rows=7 style="background-color:lightskyblue">Zde může vkládat pouze makro</textarea>
            <input type="submit" value="Aktualizovat" name="submit" cols="500" rows="5">
        </form>
	</div>
</div>
