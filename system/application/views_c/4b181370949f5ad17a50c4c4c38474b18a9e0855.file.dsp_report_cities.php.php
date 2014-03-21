<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 16:50:54
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_report_cities.php" */ ?>
<?php /*%%SmartyHeaderCode:203564fa53e4e296049-91784757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b181370949f5ad17a50c4c4c38474b18a9e0855' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/ajax/dsp_report_cities.php',
      1 => 1336227753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203564fa53e4e296049-91784757',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['aCity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aCities')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aCity']->key => $_smarty_tpl->tpl_vars['aCity']->value){
?>
    <?php $_smarty_tpl->tpl_vars['oCity'] = new Smarty_variable($_smarty_tpl->tpl_vars['aCity']->value['city'], null, null);?>
    <tr><th colspan="17" style="background-color: grey; color: white"><?php echo $_smarty_tpl->getVariable('oCity')->value->name;?>
</th></tr>
    <?php  $_smarty_tpl->tpl_vars['oReport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aCity']->value['reports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['oReport']->key => $_smarty_tpl->tpl_vars['oReport']->value){
?>
        <tr><th colspan="17" style="background-color: lightgray;" align="left"><?php echo $_smarty_tpl->getVariable('oReport')->value->reported;?>
 - <?php echo $_smarty_tpl->getVariable('oReport')->value->title;?>
</th></tr>
        <tr class="report_army" style="height:42px; display: <?php if ($_smarty_tpl->getVariable('bArmyDisplay')->value){?>''<?php }else{ ?>none<?php }?>;">
            <td class="report_god" rowspan="2">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->god!=0){?>
                    <img src="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('oReport')->value->god-1;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('oReport')->value->_godPict[$_tmp1];?>
" style="width:30px;height:30px;">
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->attackShip>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/attack_ship_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->attackShip;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->smallTrans>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/small_transporter_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->smallTrans;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->bigTrans>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/big_transporter_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->bigTrans;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->bireme>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/bireme_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->bireme;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->slinger>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/slinger_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->slinger;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->hoplite>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/hoplite_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->hoplite;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->rider>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/rider_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->rider;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->catapult>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/catapult_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->catapult;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->sword>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/sword_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->sword;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->archer>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/archer_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->archer;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->chariot>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/chariot_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->chariot;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->god!=0&&$_smarty_tpl->getVariable('oReport')->value->myth1>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/<?php ob_start();?><?php echo $_smarty_tpl->getVariable('oReport')->value->god-1;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('oReport')->value->_myth1[$_tmp2];?>
_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->myth1;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->god!=0&&$_smarty_tpl->getVariable('oReport')->value->myth2>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/<?php ob_start();?><?php echo $_smarty_tpl->getVariable('oReport')->value->god-1;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('oReport')->value->_myth2[$_tmp3];?>
_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->myth2;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->colonizeShip>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/colonize_ship_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->colonizeShip;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->demolitionShip>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/demolition_ship_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->demolitionShip;?>

                    </div>
                <?php }?>
            </td>
            <td style="vertical-align: top">
                <?php if ($_smarty_tpl->getVariable('oReport')->value->trireme>0){?>
                    <div style="position: absolute; opacity:0.4;">
                        <img src="http://cdn.grepolis.com/images/game/units/trireme_40x40.png">
                    </div>
                    <div style="position: relative; top:10px;">
                        <?php echo $_smarty_tpl->getVariable('oReport')->value->trireme;?>

                    </div>
                <?php }?>
            </td>
        </tr>
        <tr class="report_building" style="height:42px; display: <?php if ($_smarty_tpl->getVariable('bBuildingDisplay')->value){?>''<?php }else{ ?>none<?php }?>;">
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/e/ef/Docks_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->docks;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/3/38/Barracks_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->barracks;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/d/da/Farm_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->farm;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/b/bb/Academy_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->academy;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/d/d3/Temple_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->temple;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/f/f8/Main_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->main;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/6/6a/Lumber_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->lumber;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/f/f8/Stoner_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->stoner;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/6/67/Ironer_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->ironer;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/d/dc/Market_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->market;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/1/1e/Storage_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->storage;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <?php if ($_smarty_tpl->getVariable('oReport')->value->special1>0){?><img src="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('oReport')->value->special1-1;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('oReport')->value->_special1Pict[$_tmp4];?>
" width="84%" height="84%"><?php }?>
                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <?php if ($_smarty_tpl->getVariable('oReport')->value->special2>0){?><img src="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('oReport')->value->special2-1;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('oReport')->value->_special2Pict[$_tmp5];?>
" width="84%" height="84%"><?php }?>
                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/0/0b/Wall_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->wall;?>

                </div>
            </td>
            <td style="vertical-align: top">
                <div style="position: absolute; opacity:0.4;">
                    <img src="http://wiki.cz.grepolis.com/images/5/5d/Hide_50x50.png" width="84%" height="84%">
                </div>
                <div style="position: relative; top:10px;">
                    <?php echo $_smarty_tpl->getVariable('oReport')->value->hide;?>

                </div>
            </td>
            <td>
            </td>
        </tr>
    <?php }} ?>
<?php }} ?>