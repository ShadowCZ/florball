<?php /* Smarty version Smarty-3.0.7, created on 2012-05-05 20:13:38
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_news.php" */ ?>
<?php /*%%SmartyHeaderCode:228184fa56dd2f17193-13535996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a308849591d0f9b4b608a2d820a59dcde8e6a3d7' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_news.php',
      1 => 1336231265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228184fa56dd2f17193-13535996',
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
        <h2>Novinky:</h2>
        <?php if (!empty($_smarty_tpl->getVariable('aEventsDetail',null,true,false)->value)){?>
            <div id="container" style="background: white; border-style:ridge; border-color: skyblue; border-width: 3px; height: 200px; overflow: auto;">
                <table style="padding: 10px; width: 100%; border-collapse: collapse">
                    <?php  $_smarty_tpl->tpl_vars['aEventDetail'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aEventsDetail')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['aEventDetail']->key => $_smarty_tpl->tpl_vars['aEventDetail']->value){
?>
                        <?php $_smarty_tpl->tpl_vars['oEvent'] = new Smarty_variable($_smarty_tpl->tpl_vars['aEventDetail']->value['oEvent'], null, null);?>
                        <tr style="background: <?php if ($_smarty_tpl->tpl_vars['aEventDetail']->value['fDays']<1){?>lightgreen
                                               <?php }elseif($_smarty_tpl->tpl_vars['aEventDetail']->value['fDays']<3){?>yellow
                                               <?php }else{ ?>lightcoral<?php }?>;
                        ">
                            <td><?php if ($_smarty_tpl->tpl_vars['aEventDetail']->value['bNewAlert']){?><span class="circle"></span><?php }?></td>
                            <td style="width:125px"><?php echo $_smarty_tpl->getVariable('oEvent')->value->created;?>
</td>
                            <th align="left" style="padding-left: 10px; padding-right: 10px; width: 120px">
                                <?php echo $_smarty_tpl->getVariable('oEvent')->value->user->login;?>

                            </th>
                            <td>
                                <?php echo $_smarty_tpl->getVariable('oEvent')->value->_types[$_smarty_tpl->getVariable('oEvent')->value->type];?>
 <?php if ($_smarty_tpl->getVariable('oEvent')->value->message){?>(<?php echo $_smarty_tpl->getVariable('oEvent')->value->message;?>
)<?php }?>
                            </td>
                        </tr>
                    <?php }} ?>
                </table>
            </div>
        <?php }?>

        <table border="1">
            <tr><th colspan="3">Informace o vývoji</th></tr>
            <tr><th>Datum</th><th>Verze</th><th>Komentář</th></tr>
            <tr><td>5.5.2012</td><td>0.7.8</td><td>Evidence speciálních budov (vež apodob.)</td></tr>
            <tr><td>5.5.2012</td><td>0.7.7</td><td>Zpřehlednění přehledu špehování</td></tr>
            <tr><td>4.5.2012</td><td>0.7.6</td><td>Přidán přehled špehování dle vybraného hráče</td></tr>
            <tr><td>3.5.2012</td><td>0.7.5</td><td>Opravena chyba, přehled hráčů v přehledu army v případě špehování neregistrovaného spoluhráče se nyní zobrazuje správně</td></tr>
            <tr><td>24.3.2012</td><td>0.7.4</td><td>Přehled army se nyní zobrazuje dle příslušné aliance</td></tr>
            <tr><td>23.3.2012</td><td>0.7.3</td><td>Přestavěna logika pro zobrazení přehledu army</td></tr>
            <tr><td>22.3.2012</td><td>0.7.2</td><td>Změněno jádro, systém je nyní komplexnější a lépe rozšířitelný</td></tr>
            <tr><td>20.3.2012</td><td>0.7.1</td><td>Evidence špehování umí v systému vytvořit alianci, hráče a nové město a následně přiřadit report</td></tr>
            <tr><td>19.3.2012</td><td>0.7</td><td>Sestaven skript v imacru pro sběr informací ze špehování a následnou evidenci v systému</td></tr>
            <tr><td>11.3.2012</td><td>0.6.4</td><td>Opravena chyba, registrace je opět funkční</td></tr>
            <tr><td>6.3.2012</td><td>0.6.3</td><td>Opravena chyba při evidování army</td></tr>
            <tr><td>5.3.2012</td><td>0.6.2</td><td>Nové události se nyní u autora neoznačují</td></tr>
            <tr><td>26.2.2012</td><td>0.6.1</td><td>Přidáno označení nových událostí</td></tr>
            <tr><td>24.2.2012</td><td>0.6</td><td>Přidány události</td></tr>
            <tr><td>23.2.2012</td><td>0.5.1</td><td>Oprava chyb a vylepšení přehledu</td></tr>
            <tr><td>22.2.2012</td><td>0.5</td><td>Separace armádního přehledu a další funkce pro správu měst</td></tr>
            <tr><td>21.2.2012</td><td>0.4</td><td>Systém přizpůsoben a nasazen na hosting</td></tr>
            <tr><td>20.2.2012</td><td>0.3</td><td>Sestaven skript v imacru pro sběr informací o army ve městech a následnou evidenci v systému</td></tr>
            <tr><td>19.2.2012</td><td>0.2</td><td>Umožněna registrace a přihlašování</td></tr>
            <tr><td>18.2.2012</td><td>0.1</td><td>Pro vývoj vybrán a zprovozněn Codeigniter</td></tr>
            <tr><td>17.2.2012</td><td>0.0</td><td>Zahájen vývoj systému</td></tr>
        </table>
	</div>
</div>