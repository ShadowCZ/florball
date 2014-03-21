<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 23:49:00
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_ally.php" */ ?>
<?php /*%%SmartyHeaderCode:47794fa5a04c47b6d9-50300230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929ddb2a0af84f9484837dcf3dd43327a12d13b0' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_ally.php',
      1 => 1336156003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47794fa5a04c47b6d9-50300230',
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

        <h2>Přehled army:</h2>
        <form id="formCityName" method="post">
            <table border="1">
                <?php  $_smarty_tpl->tpl_vars['aPlayerDetail'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aAllyCities')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aPlayerDetail']->key => $_smarty_tpl->tpl_vars['aPlayerDetail']->value){
?>
                    <?php $_smarty_tpl->tpl_vars['login'] = new Smarty_variable($_smarty_tpl->getVariable('aPlayerDetail')->value['user']->login, null, null);?>
                    <tr onclick="show('tr_<?php echo $_smarty_tpl->getVariable('login')->value;?>
')" onmouseover="this.style.cursor='pointer';" title="Zobrazit / schovat města hráče">
                        <th colspan="21" style="background-color: blue; color: white">
                            <?php echo $_smarty_tpl->getVariable('login')->value;?>

                             <small style="color:lightgrey; position:absolute; left: 7%">
                                <?php if ($_smarty_tpl->getVariable('aPlayerDetail')->value['user']->skype!=''){?>skype:<?php echo $_smarty_tpl->getVariable('aPlayerDetail')->value['user']->skype;?>
<?php }?>
                                <?php if ($_smarty_tpl->getVariable('aPlayerDetail')->value['user']->icq!=''){?>icq:<?php echo $_smarty_tpl->getVariable('aPlayerDetail')->value['user']->icq;?>
<?php }?>
                            </small>
                        </th>
                    </tr>
                    <tr><th>Město</th>
                        <th>Bůh</th>
                        <th>Pop</th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/attack_ship_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/small_transporter_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/big_transporter_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/bireme_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/slinger_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/hoplite_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/rider_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/catapult_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/sword_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/archer_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/chariot_40x40.png"></th>
                        <th>myth1</th>
                        <th>myth2</th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/colonize_ship_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/demolition_ship_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/trireme_40x40.png"></th>
                        <th>Aktualizováno</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['cityInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aPlayerDetail']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cityInfo']->key => $_smarty_tpl->tpl_vars['cityInfo']->value){
?>
                    <?php $_smarty_tpl->tpl_vars['city'] = new Smarty_variable($_smarty_tpl->tpl_vars['cityInfo']->value['city'], null, null);?>
                        <tr class="tr_<?php echo $_smarty_tpl->getVariable('login')->value;?>
" style="
                                                   <?php if (count($_smarty_tpl->getVariable('aAllyCities')->value)>1){?>display: none;<?php }?>
                                                   height:42px; background:
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']<500){?>#CCCCFF<?php }?>
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>499&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<1000){?>#BBFFBB<?php }?>
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>999&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<2000){?>#FFFF99<?php }?>
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>1999){?>#FFCCCC<?php }?>"
                        >
                            <td style="background: <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']<500){?>lightskyblue<?php }?>
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>499&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<1000){?>lightgreen<?php }?>
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>999&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<2000){?>yellow<?php }?>
                                                   <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>1999){?>lightcoral<?php }?>"
                                <?php if ($_smarty_tpl->tpl_vars['aPlayerDetail']->value['canAdmin']){?>
                                    onclick="editCityName(this, <?php echo $_smarty_tpl->getVariable('city')->value->ID;?>
);" onmouseover="this.style.cursor='pointer';" title="Editovat město"
                                <?php }?>
                            >
                                <?php echo $_smarty_tpl->getVariable('city')->value->name;?>

                            </td>
                            <td>
                                <?php if ($_smarty_tpl->getVariable('city')->value->god!=0){?>
                                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('city')->value->god-1;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('city')->value->_godPict[$_tmp1];?>
" style="width:30px;height:30px;">
                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['pop'];?>
</td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->attackShip==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/attack_ship_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->attackShip;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->smallTrans==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/small_transporter_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->smallTrans;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->bigTrans==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/big_transporter_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->bigTrans;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->bireme==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/bireme_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->bireme;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->slinger==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/slinger_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->slinger;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->hoplite==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/hoplite_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->hoplite;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->rider==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/rider_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->rider;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->catapult==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/catapult_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->catapult;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->sword==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/sword_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->sword;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->archer==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/archer_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->archer;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->chariot==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/chariot_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->chariot;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <?php if ($_smarty_tpl->getVariable('city')->value->god!=0){?>
                                    <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->myth1==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                        <img src="http://cdn.grepolis.com/images/game/units/<?php ob_start();?><?php echo $_smarty_tpl->getVariable('city')->value->god-1;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('city')->value->_myth1[$_tmp2];?>
_40x40.png">
                                    </div>
                                    <div style="position: relative; top:10px;">
                                        <?php echo $_smarty_tpl->getVariable('city')->value->myth1;?>

                                    </div>
                                <?php }?>
                            </td>
                            <td style="vertical-align: top">
                                <?php if ($_smarty_tpl->getVariable('city')->value->god!=0){?>
                                    <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->myth2==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                        <img src="http://cdn.grepolis.com/images/game/units/<?php ob_start();?><?php echo $_smarty_tpl->getVariable('city')->value->god-1;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('city')->value->_myth2[$_tmp3];?>
_40x40.png">
                                    </div>
                                    <div style="position: relative; top:10px;">
                                        <?php echo $_smarty_tpl->getVariable('city')->value->myth2;?>

                                    </div>
                                <?php }?>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->colonizeShip==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/colonize_ship_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->colonizeShip;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->demolitionShip==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/demolition_ship_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->demolitionShip;?>

                                </div>
                            </td>
                            <td style="vertical-align: top">
                                <div style="position: absolute; opacity:<?php if ($_smarty_tpl->getVariable('city')->value->trireme==0){?>0.15<?php }else{ ?>0.3<?php }?>;">
                                    <img src="http://cdn.grepolis.com/images/game/units/trireme_40x40.png">
                                </div>
                                <div style="position: relative; top:10px;">
                                    <?php echo $_smarty_tpl->getVariable('city')->value->trireme;?>

                                </div>
                            </td>
                            <td><?php echo $_smarty_tpl->getVariable('city')->value->actualization;?>
</td>
                        </tr>
                    <?php }} ?>
                    <tr><th>Celkem</th>
                        <th></th>
                        <th></th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['attackShip'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['smallTrans'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['bigTrans'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['bireme'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['slinger'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['hoplite'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['rider'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['catapult'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['sword'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['archer'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['chariot'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['myth1'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['myth2'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['colonizeShip'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['demolitionShip'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['total']['trireme'];?>
</th>
                        <th style="background: <?php if ($_smarty_tpl->tpl_vars['aPlayerDetail']->value['actualizationOld']<1){?>lightgreen
                                               <?php }elseif($_smarty_tpl->tpl_vars['aPlayerDetail']->value['actualizationOld']<3){?>yellow
                                               <?php }else{ ?>lightcoral<?php }?>;
                        ">
                            <?php if ($_smarty_tpl->tpl_vars['aPlayerDetail']->value['lastActualization']!=0){?><?php echo $_smarty_tpl->tpl_vars['aPlayerDetail']->value['lastActualization'];?>

                            <?php }else{ ?>/<?php }?>
                        </th>
                    </tr>
                <?php }} ?>
                <?php if (isset($_smarty_tpl->getVariable('aAllyTotalArmy',null,true,false)->value)){?>
                    <tr><th colspan="20" style="background-color: black; color: white;">Aliance celkem</th>
                    <tr><th colspan="3" rowspan="2"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/attack_ship_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/small_transporter_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/big_transporter_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/bireme_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/slinger_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/hoplite_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/rider_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/catapult_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/sword_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/archer_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/chariot_40x40.png"></th>
                        <th>myth1</th>
                        <th>myth2</th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/colonize_ship_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/demolition_ship_40x40.png"></th>
                        <th><img src="http://cdn.grepolis.com/images/game/units/trireme_40x40.png"></th>
                        <th rowspan="2"></th>
                    </tr>
                    <tr><th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['attackShip'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['smallTrans'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['bigTrans'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['bireme'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['slinger'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['hoplite'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['rider'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['catapult'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['sword'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['archer'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['chariot'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['myth1'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['myth2'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['colonizeShip'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['demolitionShip'];?>
</th>
                        <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['trireme'];?>
</th>
                    </tr>
                <?php }?>
            </table>
        </form>
	</div>
</div>
