<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 15:46:47
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_report_user.php" */ ?>
<?php /*%%SmartyHeaderCode:217794fa52f47bbc407-25126162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159651299ac57f00db3eca6d2854d7a678730a9e' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_report_user.php',
      1 => 1336156003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217794fa52f47bbc407-25126162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
var cityEditId = 0;

onload=function(){
    if (document.getElementsByClassName == undefined) {
        document.getElementsByClassName = function(className)
        {
            var hasClassName = new RegExp("(?:^|\\s)" + className + "(?:$|\\s)");
            var allElements = document.getElementsByTagName("*");
            var results = [];

            var element;
            for (var i = 0; (element = allElements[i]) != null; i++) {
                var elementClass = element.className;
                if (elementClass && elementClass.indexOf(className) != -1 && hasClassName.test(elementClass))
                    results.push(element);
            }

            return results;
        }
    }
    $('#formCityName').submit(function() {
        //formCityNameSubmit();
        return false;
    });
}

function allTrim(str) {
    return str.replace(/^\s+|\s+$/g, '');
}

function show(id) {
    //document.getElementById(id).value='somevalue'
    //document.getElementById(id).style.display = 'none';
    elements = document.getElementsByClassName(id);
    for (var i in elements) {
        if (elements[i].style.display == 'none') {
            elements[i].style.display = '';
        } else {
            elements[i].style.display = 'none';
        }
    }
}

function editCityName(element, id) {
    if (element.lastChild.type == undefined) {
        transformInputToTd();

        cityEditId = id;
        var anchor = document.createElement('a');
        anchor.setAttribute('href', "#");
        $(anchor).text('X');
        anchor.style.marginRight = '10px';
        anchor.setAttribute('title', 'Odstranit město');
        $(anchor).bind('click', function(e) {
            removeCity(id);
        });

        var inputbox = document.createElement('input');
        inputbox.setAttribute('name', 'cityName_' + id);
        inputbox.setAttribute('id', 'cityName_' + id);
        inputbox.setAttribute('value', allTrim(element.textContent));
        inputbox.setAttribute('size', '17');
        inputbox.setAttribute('type', 'text');
        $(inputbox).bind('keypress', function(e) {
            if(e.keyCode == 13){
                name = $('#cityName_' + id).attr('value');
                formCityNameSubmit(id, name);
            }
        });
        element.textContent = "";
        element.setAttribute('id', 'tdCityNameEdit_' + id);
        
        element.appendChild(anchor);
        element.appendChild(inputbox);
    }
}

function formCityNameSubmit(id, name) {
    $.post("<?php echo site_url('ccity/ajaxChangeCityName');?>
/" + id, { newCityName: name}, function(data) {
        transformInputToTd();
    });
}

function transformInputToTd() {
    if (cityEditId != 0) {
        var inputbox = $('#cityName_' + cityEditId);
        var value = inputbox.attr('value');
        inputbox.remove();
        var td = $('#tdCityNameEdit_' + cityEditId);
        td.text(value);
    }
}

function removeCity(id) {
    $.get("<?php echo site_url('ccity/ajaxRemoveCity');?>
/" + id, function(data) {
        var tr = $('#tdCityNameEdit_' + cityEditId).parent("tr");
        tr.remove();
    });
}
</script>



<div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <?php $_template = new Smarty_Internal_Template("block/dsp_menu.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

        <h2>Přehled reportů:</h2>
            <table border="1">
                <?php  $_smarty_tpl->tpl_vars['oReport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aReports')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oReport']->key => $_smarty_tpl->tpl_vars['oReport']->value){
?>
                <tr><th><?php echo $_smarty_tpl->getVariable('oReport')->value->reported;?>
 - <?php echo $_smarty_tpl->getVariable('oReport')->value->title;?>
</th></tr>
                <?php }} ?>
            </table>
	</div>
</div>
