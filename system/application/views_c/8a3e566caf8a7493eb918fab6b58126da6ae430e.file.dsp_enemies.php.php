<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 10:50:28
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_enemies.php" */ ?>
<?php /*%%SmartyHeaderCode:11584fa8de5418a3b8-89398254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3e566caf8a7493eb918fab6b58126da6ae430e' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_enemies.php',
      1 => 1336467020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11584fa8de5418a3b8-89398254',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
onload=function(){

}
var lastElementMove;
var iAlly;
var allyName;
var enemyName;

function addAlly() {
    $.post("<?php echo site_url('cplanning/ajaxAddAlly');?>
/", { ally : $('#ally').val() }, function(data) {
        $('#view').html(data);
        $('#view div:first').remove(); // reklama
    });
}
function addPlayer() {
    $.post("<?php echo site_url('cplanning/ajaxAddPlayer');?>
/" + $('#list').attr('id_ally'), { player : $('#player').val() }, function(data) {
        $('#view').html(data);
        $('#view div:first').remove(); // reklama
        makeAllyHeader();
    });
}
function rowMove(element) {
    $(lastElementMove).children().css('background', '#FFFFBB');
    lastElementMove = element;
    $(element).children().css('background', '#AAFFAA');
}
function rowClick(element) {
    var url = "";
    var param = 0;
    var type = $('#list').attr('type');
    if (type == "ally"){
        url = "<?php echo site_url('cplanning/ajaxGetEnemies');?>
/"
        iAlly = $(element).attr('id_ally');
        id = iAlly;
        allyName = $(element).children('th').text();
    } else if ($('#list').attr('type') == "player") {
        url = "<?php echo site_url('cplanning/ajaxGetEnemyPlanner');?>
/"
        id = $(element).attr('id_player');
        enemyName = $(element).children('th').text();
    }
    $.get(url + id, function(data) {
        if (type == "ally"){
            allyHandler(data);
        } else {
            playerHandler(data);
        }
    });
}

function allyHandler(data) {
    $('#view').html(data);
    $('#view div:first').remove(); // reklama
    makeAllyHeader();
}

function playerHandler(data) {
    $('#view').html(data);
    //$('#view div:first').remove(); // reklama
    makePlayerHeader();
}

function backMove(active) {
    if (active) {
        $('#back').css('background', 'black')
    } else {
        $('#back').css('background', 'blue')
    }

}

function backToAllies() {
    $.get("<?php echo site_url('cplanning/ajaxEnemies');?>
/", function(data) {
        $('#view').html(data);
        $('#view div:first').remove(); // reklama
    });
}

function backToPlayers() {
    $.get("<?php echo site_url('cplanning/ajaxGetEnemies');?>
/" + iAlly, function(data) {
        $('#view').html(data);
        $('#view div:first').remove(); // reklama
        makeAllyHeader();
    });
}

function makeAllyHeader() {
    $('#ally_name').text(allyName);
    var pos = $('#table_header').position();
    $('#back').css({"left" : pos.left + "px", "top" : pos.top + "px"});
}

function makePlayerHeader() {
    $('#enemy_name').text(enemyName);
    var pos = $('#table_header').position();
    $('#back').css({"left" : pos.left + "px", "top" : pos.top + "px"});
}
</script>

<style type="text/css">
    td { min-width: 41px; }
</style>


<div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <?php $_template = new Smarty_Internal_Template("block/dsp_menu.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

        <h2>Přehled soupeřů:</h2>
        <div id="view">
            <?php $_template = new Smarty_Internal_Template("ajax/dsp_enemy_allies.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </div>
	</div>
</div>
