<?php
/* Smarty version 4.2.1, created on 2023-05-04 05:48:39
  from 'C:\wamp64\www\four\admin033jedjqi28c17sm3bl\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64532b17d72993_83842810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '286d2737b4b99483377aba90bf9b8aff5d6169a1' => 
    array (
      0 => 'C:\\wamp64\\www\\four\\admin033jedjqi28c17sm3bl\\themes\\default\\template\\content.tpl',
      1 => 1683171621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64532b17d72993_83842810 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
