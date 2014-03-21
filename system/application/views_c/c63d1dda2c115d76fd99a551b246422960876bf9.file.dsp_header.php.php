<?php /* Smarty version Smarty-3.0.7, created on 2014-03-21 12:32:02
         compiled from "C:/xampp/htdocs/floorball/system/application/views/block/dsp_header.php" */ ?>
<?php /*%%SmartyHeaderCode:4414532c2332099a78-49103278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c63d1dda2c115d76fd99a551b246422960876bf9' => 
    array (
      0 => 'C:/xampp/htdocs/floorball/system/application/views/block/dsp_header.php',
      1 => 1395401499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4414532c2332099a78-49103278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Floorball</title>
    <link href="http://www.florbalshop.cz/Fotografie/Zbozi/250px/nalepka_florbalista.jpg" rel="icon" type="image/png" />

    <script type="text/javascript" src="<?php echo base_url('js/jquery-1.5.1.min.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery-ui-custom.min.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.scrollTo-1.4.2.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.superbox.min.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.submit-on-change.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.spinbuttons.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.elastic.js');?>
"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.tablesorter.js');?>
"></script>
    <script type="text/javascript">
        <?php if ($_smarty_tpl->getVariable('bLogout')->value){?>
              window.location = "<?php echo site_url('cmain/');?>
";
        <?php }?>
    </script>

    <style type="text/css">

        ::selection{ background-color: #E13300; color: white; }
        ::moz-selection{ background-color: #E13300; color: white; }
        ::webkit-selection{ background-color: #E13300; color: white; }

        .circle {
            display: block;
            width: 10px;
            height: 10px;
            background: red;
            -moz-border-radius: 40px;
            -webkit-border-radius: 40px;
        }

        body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
        }

        a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
        }

        h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
        }

        code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
        }

        #body{
                margin: 0 15px 0 15px;
        }

        p.footer{
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
        }

        #container{
                margin: 10px;
                border: 1px solid #D0D0D0;
                -webkit-box-shadow: 0 0 8px #D0D0D0;
        }

        #menu{
            width: 13%;
            position: fixed;
            left: 87%;
            top: 0;
        }

        #menu_header{
            background: blue;
            color: white;
                    border: 2px solid black;
                    -webkit-box-shadow: 0 0 8px #D0D0D0;
        }

        #menu_body{
            display: none;
            background: lightblue;
            padding: 10px;
                    border: 2px solid blue;
                    -webkit-box-shadow: 0 0 8px #D0D0D0;
        }

        #filter{
            width: 13%;
            position: fixed;
            left: 0;
            top: 0;
        }

        #filter_header{
            background: gray;
            color: white;
                    border: 2px solid black;
                    -webkit-box-shadow: 0 0 8px #D0D0D0;
        }

        #filter_body{
            display: none;
            background: lightgrey;
            padding: 10px;
                    border: 2px solid grey;
                    -webkit-box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>
<body>

<div id="container">