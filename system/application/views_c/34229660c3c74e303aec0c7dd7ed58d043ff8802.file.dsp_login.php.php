<?php /* Smarty version Smarty-3.0.7, created on 2012-05-04 20:30:33
         compiled from "C:/xampp/htdocs/grepCI2/system/application/views/dsp_login.php" */ ?>
<?php /*%%SmartyHeaderCode:306274fa42049445f08-64139567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34229660c3c74e303aec0c7dd7ed58d043ff8802' => 
    array (
      0 => 'C:/xampp/htdocs/grepCI2/system/application/views/dsp_login.php',
      1 => 1336156003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306274fa42049445f08-64139567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_anchor')) include 'C:\xampp\htdocs\grepCI2\system\application\libraries\Smarty-3.0.7\libs\plugins\function.anchor.php';
?><div id="container">
	<h1>Greptool</h1>

	<div id="body">
        <p align="right"><?php echo smarty_function_anchor(array('uri'=>"cmain/registration/",'label'=>"Registrace"),$_smarty_tpl);?>
</p>
        <h2>Login:</h2>
        <form method="post" action="<?php echo site_url('cmain/loginSubmit');?>
">
            <table>
                <tr><th>Login</th><td><input name="login" type="text"></td></tr>
                <tr><th>Heslo</th><td><input name="pass" type="password"></td></tr>
                <tr><td><td align="right"><input type="submit" value="Přihlásit" name="submit"></td></tr>
            </table>
        </form>
	</div>
</div>