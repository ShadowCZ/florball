<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 16:50:45
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_report_spy.php" */ ?>
<?php /*%%SmartyHeaderCode:13294fa53e45898936-59358137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791c263329da80f0e03fac6773b6e70bbdcb2dd5' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_report_spy.php',
      1 => 1336227449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13294fa53e45898936-59358137',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
onload=function(){
    $('#army, #building').mousemove(function(){
        this.style.cursor='pointer';
    });
    $('#army').click(function() {
        if ($('#army').css('opacity') == '1') {
            $('#army').css('opacity', '0.3');
            $('#army').attr('title', 'Zobrazit army');
            $('.report_army').css('display', 'none');
            $('.report_god2').css('display', '');
        } else {
            $('#army').css('opacity', '1');
            $('#army').attr('title', 'Skrýt army');
            $('.report_army').css('display', '');
            $('.report_god2').css('display', 'none');
        }
    });
    $('#building').click(function() {
        if ($('#building').css('opacity') == '1') {
            $('#building').css('opacity', '0.3');
            $('#building').attr('title', 'Zobrazit budovy');
            $('.report_building').css('display', 'none');
            $('.report_god').attr('rowspan', '1');
        } else {
            $('#building').css('opacity', '1');
            $('#building').attr('title', 'Skrýt budovy');
            $('.report_building').css('display', '');
            $('.report_god').attr('rowspan', '2');
        }
    });
    $('#allies').change(function() {
        if (this.value > 0) {
            $.get("<?php echo site_url('creport/ajaxGetAllyPlayers');?>
/" + this.value, function(data) {
                if (data != 0) {
                    $('#enemies').html(data);
                    $('#enemies div:first').remove(); // reklama
                    $('#enemies').css('display', '');
                    $('#filter_header center b').text('Vyber soupeře');
                } else {
                    $('#enemies').css('display', 'none');
                }
            });
        } else {
            $('#enemies').css('display', 'none');
        }
    });
    $('#enemies').change(function() {
        if (this.value > 0) {
            $.post("<?php echo site_url('creport/ajaxGetPlayerReports');?>
/" + this.value + "/"
                + Math.round($('#army').css('opacity')) + "/" + Math.round($('#building').css('opacity')), function(data) {
                 $('#reports').html(data);
                 //$('.dulezite').parent('div').remove();
                 //$('.partner').parent('div').remove();
                 //$('.trop').parent('div').remove();
                 $('#reports div:first').remove(); // reklama
                 if ($('#reports').text() == "") {
                    $('#reports').text("- žádná data -")
                    $('#army').css('display', 'none');
                    $('#building').css('display', 'none');
                 } else {
                    $('#army').css('display', '');
                    $('#building').css('display', '');
                    $('#filter_header center b').text($('#enemies option:selected').text());
                 }
            });
        } else {
            $('#reports').text("");
            $('#army').css('display', 'none');
            $('#building').css('display', 'none');
        }
    });


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

        <h2>Přehled špehování:</h2>
        <?php if (empty($_smarty_tpl->getVariable('aAllies',null,true,false)->value)){?><b>- žádná data -</b>
        <?php }else{ ?>
            <?php $_template = new Smarty_Internal_Template("block/dsp_filter.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('filterName',"Vyber alianci"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <?php if (empty($_smarty_tpl->getVariable('aEnemies',null,true,false)->value)){?><b>- žádná data -</b>
            <?php }else{ ?>
                <table border="1" id="reports">
                </table>
            <?php }?>
        <?php }?>
	</div>
</div>
