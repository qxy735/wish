<?php
/* Smarty version 3.1.30-dev/66, created on 2016-05-17 17:08:39
  from "/var/www/dev/test/wish/app/views/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/66',
  'unifunc' => 'content_573adf97323a20_22087087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36392409a62759e6920c383b7050533069954934' => 
    array (
      0 => '/var/www/dev/test/wish/app/views/index.html',
      1 => 1463476116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573adf97323a20_22087087 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/dev/test/wish/vendor/yuyiphp/framework/src/System/View/plugins/modifier.date_format.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>禹译许愿墙</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/css/index.css"/>
</head>
<body>
<div id='top'>
    <span id='send'></span>
</div>
<div id='main'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishs']->value, 'wish');
foreach ($_from as $_smarty_tpl->tpl_vars['wish']->value) {
$_smarty_tpl->tpl_vars['wish']->_loop = true;
$__foreach_wish_0_saved = $_smarty_tpl->tpl_vars['wish'];
?>
    <dl class='paper a1'>
        <dt>
            <span class='username'>访客</span>
            <span class='num'>No.<?php echo $_smarty_tpl->tpl_vars['wish']->value['id'];?>
</span>
        </dt>
        <dd class='content'><?php echo $_smarty_tpl->tpl_vars['wish']->value['content'];?>
</dd>
        <dd class='bottom'>
            <span class='time'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['wish']->value['time'],"%Y-%m-%d %H:%M:%S");?>
</span>
            <a href="" class='close'></a>
        </dd>
    </dl>
    <?php
$_smarty_tpl->tpl_vars['wish'] = $__foreach_wish_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>

<div id='send-form'>
    <p class='title'><span>许下你的愿望吧!</span><a href="" id='close'></a></p>

    <form action="/index/wish" name='wish' method="post">
        <p>
            <label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>300</span>&nbsp;个字)</label>
            <textarea name="content" id='content'></textarea>

        <div id='phiz'>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/zhuakuang.gif" alt="抓狂"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/baobao.gif" alt="抱抱"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/haixiu.gif" alt="害羞"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/ku.gif" alt="酷"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/xixi.gif" alt="嘻嘻"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/taikaixin.gif" alt="太开心"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/touxiao.gif" alt="偷笑"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/qian.gif" alt="钱"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/huaxin.gif" alt="花心"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/image/phiz/jiyan.gif" alt="挤眼"/>
        </div>
        </p>
       <input type="submit" value="许愿" id="send-btn"/>
    </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/js/jquery-1.7.2.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/js/index.js'><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__RESOURCE__']->value;?>
/js/iepng.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    DD_belatedPNG.fix('#send,#close,.close', 'background');
<?php echo '</script'; ?>
>
<![endif]-->
</body>
</html><?php }
}
