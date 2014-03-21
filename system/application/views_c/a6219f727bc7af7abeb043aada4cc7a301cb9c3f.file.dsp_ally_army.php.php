<?php /* Smarty version Smarty-3.0.7, created on 2012-02-21 18:12:46
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_ally_army.php" */ ?>
<?php /*%%SmartyHeaderCode:127424f43d08e9bb052-74826773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6219f727bc7af7abeb043aada4cc7a301cb9c3f' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_ally_army.php',
      1 => 1329844364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127424f43d08e9bb052-74826773',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><script type="text/javascript">
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
</script>



<div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <div align="right">
            <?php echo smarty_function_anchor(array('uri'=>"cmain/logout/",'label'=>"Odhlášení"),$_smarty_tpl);?>
<br>
            <?php echo smarty_function_anchor(array('uri'=>"cmain/news/",'label'=>"Novinky"),$_smarty_tpl);?>
<br>
            <?php echo smarty_function_anchor(array('uri'=>"ccity/allyArmyHelp/",'label'=>"Návod"),$_smarty_tpl);?>

        </div>
        <form method="post" action="<?php echo site_url('ccity/allyArmyActualization');?>
">
            <textarea type="text" name="newArmy" size="40" maxlength="10000" cols=70 rows=7 style="background-color:lightblue">Zde může vkládat pouze makro</textarea>
            <input type="submit" value="Aktualizovat" name="submit" cols="500" rows="5">
        </form>
        <h2>Přehled army:</h2>
        <table border="1">
            <?php  $_smarty_tpl->tpl_vars['aPlayerDetail'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aAllyCities')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aPlayerDetail']->key => $_smarty_tpl->tpl_vars['aPlayerDetail']->value){
?>
                <?php $_smarty_tpl->tpl_vars['login'] = new Smarty_variable($_smarty_tpl->getVariable('aPlayerDetail')->value['user']->login, null, null);?>
                <tr onclick="show('tr_<?php echo $_smarty_tpl->getVariable('login')->value;?>
')" onmouseover="this.style.cursor='pointer';" title="zobrazit / schovat">
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
                    <th>Poznámka</th>
                    <th>Aktualizováno</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['cityInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aPlayerDetail']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cityInfo']->key => $_smarty_tpl->tpl_vars['cityInfo']->value){
?>
                <?php $_smarty_tpl->tpl_vars['city'] = new Smarty_variable($_smarty_tpl->tpl_vars['cityInfo']->value['city'], null, null);?>
                    <tr class="tr_<?php echo $_smarty_tpl->getVariable('login')->value;?>
" style="height:42px; background: <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']<500){?>#CCCCFF<?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>499&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<1000){?>#BBFFBB<?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>999&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<2000){?>#FFFF99<?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>1999){?>#FFCCCC<?php }?>"
                    >
                        <td style="background: <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']<500){?>lightskyblue<?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>499&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<1000){?>lightgreen<?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>999&&$_smarty_tpl->tpl_vars['cityInfo']->value['pop']<2000){?>yellow<?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['pop']>1999){?>lightcoral<?php }?>
                        ">
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
                        <td><?php echo $_smarty_tpl->getVariable('city')->value->note;?>
</td>
                        <td><?php echo $_smarty_tpl->getVariable('city')->value->actualization;?>
</td>
                    </tr>
                <?php }} ?>
                <tr><th>Celkem</th>
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
                </tr>
            <?php }} ?>
            <tr><th colspan="20" style="background-color: black; color: white">Aliance celkem</th>
            <tr><th></th>
                <th></th>
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
                <th></th>
                <th></th>
            </tr>
            <tr><th></th>
                <th></th>
                <th><?php echo $_smarty_tpl->getVariable('aAllyTotalArmy')->value['attackShip'];?>
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
        </table>
	</div>
</div>
<img src="" style="opacity:0.15;position:absolute; top:-15px;">