<?php /* Smarty version Smarty-3.0.7, created on 2012-05-04 21:41:52
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_report_new.php" */ ?>
<?php /*%%SmartyHeaderCode:224434fa431008b35d5-17478787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac50e549832423f0d50def1ac2e062a9af658fc' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_report_new.php',
      1 => 1336156003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224434fa431008b35d5-17478787',
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
        <form method="post" action="<?php echo site_url('creport/allyReportNew');?>
">
            <textarea type="text" name="newReport" size="40" maxlength="20000" cols=70 rows=7 style="background-color:lightgray">Zde může vkládat pouze makro</textarea>
            <input type="submit" value="Aktualizovat" name="submit" cols="500" rows="5">
        </form>
	</div>
</div>
