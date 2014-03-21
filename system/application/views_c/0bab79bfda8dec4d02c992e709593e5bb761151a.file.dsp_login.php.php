<?php /* Smarty version Smarty-3.0.7, created on 2014-03-21 12:29:19
         compiled from "C:/xampp/htdocs/floorball/system/application/views/dsp_login.php" */ ?>
<?php /*%%SmartyHeaderCode:16383532c228f10fcd3-47575920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bab79bfda8dec4d02c992e709593e5bb761151a' => 
    array (
      0 => 'C:/xampp/htdocs/floorball/system/application/views/dsp_login.php',
      1 => 1395401305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16383532c228f10fcd3-47575920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="container">
	<h1>Floorball</h1>

	<div id="body">
        <h2>Login:</h2>
        <form method="post" action="<?php echo site_url('cmain/doLogin');?>
">
            <table>
                <tr><th>Login</th><td><input name="login" type="text"></td></tr>
                <tr><th>Heslo</th><td><input name="pass" type="password"></td></tr>
                <tr><td><td align="right"><input type="submit" value="Přihlásit" name="submit"></td></tr>
            </table>
        </form>
	</div>
</div>