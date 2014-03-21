<?php /* Smarty version Smarty-3.0.7, created on 2012-02-22 08:14:30
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_help.php" */ ?>
<?php /*%%SmartyHeaderCode:110044f4495d6060d56-99154318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1860f93d628f471f6140dc73e27d88ee8367b6c' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_army_help.php',
      1 => 1329894820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110044f4495d6060d56-99154318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <div style="position: absolute; left: 80%">
            <?php echo smarty_function_anchor(array('uri'=>"cmain/logout/",'label'=>"Odhlášení"),$_smarty_tpl);?>
<br>
            <?php echo smarty_function_anchor(array('uri'=>"cmain/news/",'label'=>"Novinky"),$_smarty_tpl);?>
<br>
            <?php $_template = new Smarty_Internal_Template("block/dsp_menu_army.php", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </div>
        <h2>Návod k zprovoznění automatizovaného vkládání stavu army:</h2>
        <b>Co je potřeba:</b>
        <ul>
            <li><a href="#browser">Prohlížeč Firefox (doporučeno)</a></li>
            <li><a href="#plugin">Plugin imacro</a></li>
            <li><a href="#script">Skript pro imacro</a></li>
            <li><a href="#run">Spustit skript</a></li>
        </ul><br>

        <div id="body">
            <a name="browser"></a>
            <b>Instalace prohlížeče</b>
            <p>
                I když je možné plugin imacro použít i pro Chrome a Internet Explorer, je ověřeno, že funguje na 100% správně pouze ve Firefoxu, proto bych doporučil ho na něj použít.
                Firefox lze stáhnout <a href="http://www.mozilla.org/cs/firefox/fx/" target="_blank">zde</a>
            </p>
        </div>
        <div id="body">
            <a name="imacro"></a>
            <b>Instalace imacra</b>
            <p>
                Imacro je plugin, který umožní spouštět skripty, které na uživatelské úrovni pracují s webovými stránkami, tak jak je popsáno ve skriptu.
                Každy prohlížeč má svůj plugin pro imacro. Plugin pro Firefox lze stáhnout <a href="https://addons.mozilla.org/firefox/downloads/latest/3863/addon-3863-latest.xpi?src=dp-btn-primary">zde</a>
            </p>
        </div>
        <div id="body">
            <a name="script"></a>
            <b>Přidání skriptu do pluginu</b>
            <p>
                Skript do imacra lze stáhnout <?php echo smarty_function_anchor(array('uri'=>"ccity/downloadScript/",'label'=>"zde"),$_smarty_tpl);?>
. Zajišťuje automatické kopírování armády z každého vašeho města do druhého okna, kde armádu zpracovává náš systém.
                Stažený skript je třeba umístit do c:\Users\<uživatel>\Documents\iMacros\Macros\prehledArmy.iim
            </p>
        </div>
        <div id="body">
            <a name="run"></a>
            <b>Spuštění skriptu</b>
            <p>
                Vždy se nejdříve přhlaš do tohoto systému.
                Spusť plugin imacro přes ikonku nacházející se vlevo od vstupu pro www adresu.
                Vyběhne okno pluginu, ve kterém vyber stažený skript, do max opakování napiš počet svých měst a spusť skript tlačítkem play(Loop).
                Skript začne překlikávat města a kopírovat z nich army do našeho systému.
            </p>
        </div>
    </div>
</div>