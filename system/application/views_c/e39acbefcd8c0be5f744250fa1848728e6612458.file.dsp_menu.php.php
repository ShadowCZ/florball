<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 22:23:34
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu.php" */ ?>
<?php /*%%SmartyHeaderCode:98934fa58c46114566-19182401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e39acbefcd8c0be5f744250fa1848728e6612458' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_menu.php',
      1 => 1336249309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98934fa58c46114566-19182401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><script type="text/javascript">
    function showMenu() {
        menu = document.getElementById('menu_body');
        if (menu.style.display == 'none') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }
</script>

<div id="menu" onmouseover="document.getElementById('menu_body').style.display='block'"
               onmouseout="document.getElementById('menu_body').style.display='none'">
    <div id="menu_header">
        <center>
            <b style="padding: 5px">Menu</b>
        </center>
    </div>
    <div id="menu_body">
        <?php echo smarty_function_anchor(array('uri'=>"cmain/logout/",'label'=>"Odhlášení"),$_smarty_tpl);?>
<br>
        <?php echo smarty_function_anchor(array('uri'=>"cmain/news/",'label'=>"Novinky"),$_smarty_tpl);?>
<br>
        <?php $_template = new Smarty_Internal_Template("block/dsp_menu_army.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <?php $_template = new Smarty_Internal_Template("block/dsp_menu_report.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <?php $_template = new Smarty_Internal_Template("block/dsp_menu_planning.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
</div>