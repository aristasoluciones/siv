<?php /* Smarty version Smarty3-b7, created on 2017-10-04 17:19:28
         compiled from "C:/wamp/www/siv/sistema/templates/lists/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1945959d55e70a354f0-46497511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7648985645687deb980b9f485ea66185ce50755b' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/lists/pages.tpl',
      1 => 1506726201,
    ),
  ),
  'nocache_hash' => '1945959d55e70a354f0-46497511',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('registros')->value['result'])>0){?>
<div class="fLeft">
    <?php echo $_smarty_tpl->getVariable('info')->value;?>

</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('search')->value==1){?>
    <?php $_smarty_tpl->assign("function","Search",null,null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->assign("function","LoadPage",null,null);?>
<?php }?>


<?php if (count($_smarty_tpl->getVariable('pages')->value['numbers'])){?>
<div class="btn-toolbar margin-bottom-10">
    <ul>
        <?php if ($_smarty_tpl->getVariable('pages')->value['first']){?>
         <button class="btn btn-default" type="button" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['first'];?>
)"> &laquo; </button>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('pages')->value['prev']){?>
         <button class="btn btn-default" type="button" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['prev'];?>
)"> &lt; </button>
        <?php }?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value['numbers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
            <?php if ($_smarty_tpl->getVariable('pages')->value['current']==$_smarty_tpl->getVariable('key')->value){?>
               <button class=" active btn btn-default" type="button"><?php echo $_smarty_tpl->getVariable('key')->value;?>
</button>
            <?php }else{ ?>
               <button class="btn btn-default"  onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('key')->value-1;?>
)"><?php echo $_smarty_tpl->getVariable('key')->value;?>
</button>
            <?php }?>
        <?php }} ?>
        
        <?php if ($_smarty_tpl->getVariable('pages')->value['next']){?>
            <button class="btn btn-default" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['next'];?>
)"> &gt; </button>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('pages')->value['last']){?>
             <button class="btn btn-default" onclick="<?php echo $_smarty_tpl->getVariable('function')->value;?>
(<?php echo $_smarty_tpl->getVariable('pages')->value['last'];?>
)"> &raquo; </button>
        <?php }?>
    </ul>
</div>
<input type="hidden" name="page" id="page" value="<?php echo $_smarty_tpl->getVariable('pages')->value['current']-1;?>
" />
<?php }?>
 
<div class="clearfix"></div>