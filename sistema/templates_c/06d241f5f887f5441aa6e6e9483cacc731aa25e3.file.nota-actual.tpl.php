<?php /* Smarty version Smarty3-b7, created on 2017-10-04 02:56:46
         compiled from "C:/wamp/www/siv/sistema/templates/forms/nota-actual.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109459d4943e0f5060-25211043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d241f5f887f5441aa6e6e9483cacc731aa25e3' => 
    array (
      0 => 'C:/wamp/www/siv/sistema/templates/forms/nota-actual.tpl',
      1 => 1507066337,
    ),
  ),
  'nocache_hash' => '109459d4943e0f5060-25211043',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <div class="col-md-12">
     <div class="blog-single-content bordered blog-container">
        <div class="blog-single-head">
            <h1 class="blog-single-head-title"><?php echo $_smarty_tpl->getVariable('info')->value['titulo'];?>
</h1>
            <div class="blog-single-head-date">
                <i class="icon-calendar font-blue"></i>
                <a href="javascript:;">Fecha publicacion <?php echo $_smarty_tpl->getVariable('info')->value['fechaPublicacion'];?>
</a>
            </div>
        </div>
        <div class="blog-single-img">
            <img src="<?php echo $_smarty_tpl->getVariable('info')->value['rutaImagen'];?>
" /> 
        </div>
        <div class="blog-single-desc">
            <?php echo $_smarty_tpl->getVariable('info')->value['texto'];?>

        </div>
     </div>
 </div>