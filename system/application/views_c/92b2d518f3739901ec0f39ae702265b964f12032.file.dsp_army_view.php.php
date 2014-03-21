<?php /* Smarty version Smarty-3.0.7, created on 2012-02-19 19:53:54
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_view.php" */ ?>
<?php /*%%SmartyHeaderCode:121394f4145427babf3-98031751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b2d518f3739901ec0f39ae702265b964f12032' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_view.php',
      1 => 1329677627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121394f4145427babf3-98031751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <div align="right">
            <?php echo smarty_function_anchor(array('uri'=>"cmain/logout/",'label'=>"Odhlášení"),$_smarty_tpl);?>
<br>
            <?php echo smarty_function_anchor(array('uri'=>"cmain/news/",'label'=>"Novinky"),$_smarty_tpl);?>

        </div>
        <form method="post" action="<?php echo site_url('carmy/armyActualization');?>
">
            <textarea type="text" name="newArmy" size="40" maxlength="10000" cols=70 rows=7 style="background-color:lightblue"></textarea>
            <input type="submit" value="Aktualizovat" name="submit" cols="500" rows="5">
        </form>
        <h2>Přehled army:</h2>
        <table border="1">
            <tr><th colspan="12">Hráč</th></tr>
            <tr><th>Město</th>
                <th><img src="http://cdn.grepolis.com/images/game/units/attack_ship_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/small_transporter_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/big_transporter_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/slinger_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/hoplite_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/rider_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/sword_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/archer_40x40.png"></th>
                <th><img src="http://cdn.grepolis.com/images/game/units/chariot_40x40.png"></th>
                <th>-</th>
                <th>Aktualizováno</th>
            </tr>
            <tr><td>Pevnost</td><td>ohn</td><td>rychl trans</td><td>pom trans</td><td>praky</td><td>hop</td><td>jízdy</td><td>šerm</td><td>luk</td><td>vůz</td><td>poznámka</td><td>čas</td></tr>
        </table>
	</div>
</div>