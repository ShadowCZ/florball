<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 22:23:34
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_filter.php" */ ?>
<?php /*%%SmartyHeaderCode:128434fa58c462941d6-26240332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8cc3a57b882a54289b7b4a5d944a1dbf6bbeb4' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/block/dsp_filter.php',
      1 => 1336241803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128434fa58c462941d6-26240332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
    function showMenu() {
        menu = document.getElementById('menu_body');
        if (menu.style.display == 'none') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }
</script>


<div id="filter" onmouseover="document.getElementById('filter_body').style.display='block'"
                 onmouseout="document.getElementById('filter_body').style.display='none'">
    <div id="filter_header">
        <center>
            <b style="padding: 5px"><?php echo $_smarty_tpl->getVariable('filterName')->value;?>
</b>
        </center>
    </div>
    <div id="filter_body">
        <select id="allies" name="allies">
            <option value="0">--- Aliance ---</option>
            <?php  $_smarty_tpl->tpl_vars['oAlly'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aAllies')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oAlly']->key => $_smarty_tpl->tpl_vars['oAlly']->value){
?>
                <option value="<?php echo $_smarty_tpl->getVariable('oAlly')->value->ID;?>
"><?php echo $_smarty_tpl->getVariable('oAlly')->value->name;?>
</option>
            <?php }} ?>
        </select>
        <select id="enemies" name="enemies" style="display: none;">
        </select>
        <br>
        <img id="army" src="http://wiki.cz.grepolis.com/images/9/9c/Sword_40x40.png" style="display: none" title="Skrýt army">
        <img id="building" src="http://wiki.cz.grepolis.com/images/f/f8/Main_50x50.png" width="40" height="40" style="display: none" title="Skrýt budovy">
    </div>
</div>