<?php /* Smarty version Smarty-3.0.7, created on 2012-02-19 00:53:48
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_registration.php" */ ?>
<?php /*%%SmartyHeaderCode:77334f403a0c63d1f6-20997965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd060efb3b34cc77a1581a9d09da5a6753ed735c' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_registration.php',
      1 => 1329609224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77334f403a0c63d1f6-20997965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <p align="right"><?php echo smarty_function_anchor(array('uri'=>"cmain/login/",'label'=>"Přihlášení"),$_smarty_tpl);?>
</p>
        <h2>Registrace:</h2>
        <form method="post" action="<?php echo site_url('cmain/registrationSubmit');?>
">
            <table>
                <tr><th>Login</th><td><input name="login" type="text"></td></tr>
                <tr><th>Heslo</th><td><input name="pass1" type="password"></td></tr>
                <tr><th>Heslo znovu</th><td><input name="pass2" type="password"></td></tr>
                <tr><th>Skype</th><td><input name="skype" type="text"></td></tr>
                <tr><th>ICQ</th><td><input name="icq" type="text"></td></tr>
                <tr><td><td align="right"><input type="submit" value="Registrovat" name="submit"></td></tr>
            </table>
        </form>
	</div>
</div>