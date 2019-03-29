<?php
/* Smarty version 3.1.33, created on 2019-03-29 12:12:53
  from '/Applications/MAMP/htdocs/prestashop/modules/paypal/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9dfdb58ae7a9_83256692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '026693098c5f3f1088773baa0239b386c8160fc1' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/paypal/views/templates/admin/configuration.tpl',
      1 => 1552371816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9dfdb58ae7a9_83256692 (Smarty_Internal_Template $_smarty_tpl) {
?><div dir="ltr" style="text-align: left;" trbidi="on">
    <?php echo '<script'; ?>
 type="text/javascript">
         (function(d, s, id){
         var js, ref = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)){
                js = d.createElement(s); js.id = id; js.async = true;
                js.src = "https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js";
                ref.parentNode.insertBefore(js, ref);
            }
         }(document, "script", "paypal-js"));
    <?php echo '</script'; ?>
>
</div>

<div class="container-fluid paypal-nav">
    <ul class="nav nav-pills navbar-separator">
        <li <?php if (!isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) && !isset($_smarty_tpl->tpl_vars['ec_card_active']->value) && !isset($_smarty_tpl->tpl_vars['bt_active']->value) && !isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>class="active"<?php }?>><a data-toggle="pill" href="#paypal_conf"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'paypal'),$_smarty_tpl ) );?>
</span></a></li>
        <li <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) || isset($_smarty_tpl->tpl_vars['ec_card_active']->value) || isset($_smarty_tpl->tpl_vars['bt_active']->value) || isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>class="active"<?php }?>><a data-toggle="pill" href="#paypal_params"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','mod'=>'paypal'),$_smarty_tpl ) );?>
</span></a></li>
    </ul>
    <div class="tab-content">
        <div id="paypal_conf"  class="tab-pane fade <?php if (!isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) && !isset($_smarty_tpl->tpl_vars['ec_card_active']->value) && !isset($_smarty_tpl->tpl_vars['bt_active']->value) && !isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>in active<?php }?>">
        <div class="box half left">
            <div class="logo">
                 <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal_btm.png" alt=""  />
                <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The smart choice for business','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
            </div>
            <ul class="tick">
                <li><span class="paypal-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Target more customers','mod'=>'paypal'),$_smarty_tpl ) );?>
</span><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More than 200 million PayPal active users worldwide','mod'=>'paypal'),$_smarty_tpl ) );?>
.</li>
                <li><span class="paypal-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Truly global','mod'=>'paypal'),$_smarty_tpl ) );?>
</span><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access a whole world of customers. PayPal is available in more than 200 markets and in 25 currencies','mod'=>'paypal'),$_smarty_tpl ) );?>
.</li>
                <li><span class="paypal-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept all types of payments','mod'=>'paypal'),$_smarty_tpl ) );?>
</span><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use PayPal with simple buy button or also payment by card due to Braintree (un service PayPal)','mod'=>'paypal'),$_smarty_tpl ) );?>
.</li>
                <li><span class="paypal-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Safety','mod'=>'paypal'),$_smarty_tpl ) );?>
</span><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Protect your profit from the risks of fraud thanks to our program of','mod'=>'paypal'),$_smarty_tpl ) );?>
 <a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/ua/useragreement-full#011"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller Protection','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>.</li>
            </ul>

        </div>

        <div class="box half right">
            <div class="info">
                <p class="paypal-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant Country','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country']->value,'html','UTF-8' ));?>
</p>
                <p><i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To modify country : ','mod'=>'paypal'),$_smarty_tpl ) );?>

                        <a target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localization']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'International > Localization','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>
                    </i></p>
            </div>
        </div>
        <div style="clear:both;"></div>

        <div class="active-products">
            <p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2 PayPal products selected for you','mod'=>'paypal'),$_smarty_tpl ) );?>
</b></p>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) && $_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>active-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png">
                    <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept PayPal payments, you can optimize your conversion rate.','mod'=>'paypal'),$_smarty_tpl ) );?>

                    </p>
                    <p><ul>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in theme of comScore, 4th trilestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With our Seller Protection Program and advanced fraud screening, xe can protect your business','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                    </ul></p>
                    <p>
                        <a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/express-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>
                    </p>
                    <div class="bottom">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_checkout']->value,'html','UTF-8' ));?>
" class="product-img">
                        <a class="btn btn-default pull-right" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8' ));?>
&method=EC&with_card=0<?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) && $_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>&modify=1<?php }?>" ><?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) && $_smarty_tpl->tpl_vars['ec_paypal_active']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl ) );
}?></a>
                    </div>
                </div>
            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['braintree_available']->value) && !isset($_smarty_tpl->tpl_vars['ppp_available']->value)) {?>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['ec_active']->value) && $_smarty_tpl->tpl_vars['ec_active']->value && isset($_smarty_tpl->tpl_vars['ec_card_active']->value) && $_smarty_tpl->tpl_vars['ec_card_active']->value) {?>actvie-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png">
                    <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept credit cards, debit cards and PayPal payments','mod'=>'paypal'),$_smarty_tpl ) );?>

                    </p>
                    <p><ul>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in theme of comScore, 4th trilestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With our Seller Protection Program and advanced fraud screening, xe can protect your business','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                    </ul></p>
                    <p><a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/express-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <div class="bottom">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal_btm.png" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/visa.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/mastercard.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/maestro.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/jcb.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/discover.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/amex.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/diners.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/unionpay.svg" class="product-img">
                        <a class="btn btn-default pull-right" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8' ));?>
&method=EC&with_card=1<?php if (isset($_smarty_tpl->tpl_vars['ec_active']->value) && $_smarty_tpl->tpl_vars['ec_active']->value && isset($_smarty_tpl->tpl_vars['ec_card_active']->value) && $_smarty_tpl->tpl_vars['ec_card_active']->value) {?>&modify=1<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['ec_active']->value) && $_smarty_tpl->tpl_vars['ec_active']->value && isset($_smarty_tpl->tpl_vars['ec_card_active']->value) && $_smarty_tpl->tpl_vars['ec_card_active']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl ) );
}?></a>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['braintree_available']->value)) {?>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value) && $_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?>active-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/braintree-paypal.png">
                    <p>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept PayPal, debit and credit card payments via Braintree (a PayPal service)','mod'=>'paypal'),$_smarty_tpl ) );?>
.
                    </p>
                    <p><ul>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                    </ul></p>
                    <p><a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/hosted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <div class="bottom">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal_btm.png" class="product-img"> <b>+</b>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/visa.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/mastercard.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/maestro.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/jcb.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/discover.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/amex.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/diners.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/unionpay.svg" class="product-img">
                        <a class="btn btn-default pull-right" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8' ));?>
&method=BT&with_paypal=1<?php if (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value) && $_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?>&modify=1<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value) && $_smarty_tpl->tpl_vars['bt_paypal_active']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl ) );
}?></a>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['ppp_available']->value)) {?>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>active-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png">
                    <p>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal Plus','mod'=>'paypal'),$_smarty_tpl ) );?>

                    </p>
                    <p><ul>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                    </ul></p>
                    <p><a target="_blank" href="https://www.paypal.com/webapps/mpp/standard"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <div class="bottom">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/visa.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/mastercard.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/amex.svg" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/ppp-bank-logo.png" class="product-img">
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/kauf.png" class="product-img">
                        <a class="btn btn-default pull-right" href="#" onclick="display_popup('PPP')"><?php if (isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl ) );
}?></a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

        <div style="clear:both;"></div>
        <div class="blue">
            <div class="row-fluid" id="rtb1">
                <header class="containerCentered center-text">
                    <h2 class="pulloutHeadline "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find out why 17 million businesses worldwide choose PayPal.','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                </header>
                <div class="containerCentered">
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Safer and more protected','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                        <p class="contentPara"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With our Seller Protection and advanced fraud screening, we can protect your business.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easy and convenient','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                        <p class="contentPara"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers need just an email address and password or mobile number and PIN to pay quickly and more securely.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preferred by customers','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                        <p class="contentPara"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We’re the smart choice: Great Britain’s No.1 preferred online and mobile payment method','mod'=>'paypal'),$_smarty_tpl ) );?>
<sup>4</sup>.
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For invaluable insights into what makes British shoppers tick','mod'=>'paypal'),$_smarty_tpl ) );?>
,
                            <a data-pa-click="link|shopping-habits" href="https://www.paypal.com/uk-shopping-habits"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'click here','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>.</p>
                    </div>
                </div>
            </div>
            <div class="row-fluid" id="rtb2">
                <div class="containerCentered">
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Truly global','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                        <p class="contentPara"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access a whole world of customers. PayPal is available in 202 countries and markets, and in 25 currencies.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple to integrate','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                        <p class="contentPara"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Works with all major shopping carts and ecommerce platforms.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'24/7 customer support','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>
                        <p class="contentPara"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Whatever your query, we\'ve got it covered. Online or on the phone, we\'re here to help.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <div id="paypal_params" class="tab-pane fade col-sm-12 <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) || isset($_smarty_tpl->tpl_vars['ec_card_active']->value) || isset($_smarty_tpl->tpl_vars['bt_active']->value) || isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>in active<?php }?>">
        <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) || isset($_smarty_tpl->tpl_vars['ec_card_active']->value) || isset($_smarty_tpl->tpl_vars['bt_active']->value) || isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>
        <div class="panel parametres">
            <div class="panel-body">
                <div class="col-sm-8 help-left">
                    <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value) && $_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png">
                        <p>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept PayPal payments, you can optimize your conversion rate.','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['active_products']->value,'html','UTF-8' ));?>

                        </p>
                        <p><ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl ) );?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in theme of comScore, 4th trimestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With our Seller Protection Program and advanced fraud screening, we can protect your business','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        </ul></p>
                        <p>
                            <a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/express-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>
                        </p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['ec_card_active']->value) && $_smarty_tpl->tpl_vars['ec_card_active']->value) {?>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png">
                        <p>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept credit cards, debit cards and PayPal payments','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['active_products']->value,'html','UTF-8' ));?>

                        </p>
                        <p><ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl ) );?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in theme of comScore, 4th trilestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With our Seller Protection Program and advanced fraud screening, xe can protect your business','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        </ul></p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/express-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value) && $_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?>
                        <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/braintree-paypal.png">
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept PayPal, debit and credit card payments via Braintree (a PayPal service)','mod'=>'paypal'),$_smarty_tpl ) );?>
.
                        </p>
                        <p><ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        </ul></p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/hosted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['bt_active']->value) && !$_smarty_tpl->tpl_vars['bt_paypal_active']->value && $_smarty_tpl->tpl_vars['bt_active']->value) {?>
                        <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/braintree-paypal.png">
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept Braintree payments','mod'=>'paypal'),$_smarty_tpl ) );?>

                        </p>
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers can pay with a selection of local and international debit and credit cards. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade;
                        </p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/express-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['ppp_available']->value) && isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>
                        <img class="paypal-products" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'html','UTF-8' ));?>
/views/img/paypal.png">
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal Plus','mod'=>'paypal'),$_smarty_tpl ) );?>

                        </p>
                        <p><ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl ) );?>
&trade; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                        </ul></p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' ));?>
/webapps/mpp/hosted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></p>
                    <?php }?>
                </div>
                <div class="col-sm-3 help-right">
                        <p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl ) );?>
 ?
                    <a target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.paypal.com/fr/webapps/mpp/contact-us','mod'=>'paypal'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="configuration-block"></div>
    </div>

    </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['ppp_available']->value)) {?>
<div style="display: none;">
    <div id="content-fancybox-configuration">
        <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['return_url']->value,'javascript','UTF-8' ));?>
" method="post" id="credential-configuration" class="bootstrap">
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'API Credentials','mod'=>'paypal'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to accept PayPal Plus payments, please fill your API REST credentials.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
            <ul>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access','mod'=>'paypal'),$_smarty_tpl ) );?>
 <a target="_blank" href="https://developer.paypal.com/developer/applications/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://developer.paypal.com/developer/applications/','mod'=>'paypal'),$_smarty_tpl ) );?>
</a></li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or Create a business account','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a « REST API apps »','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click « Show » en dessous de « Secret: »','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy/paste your « Client ID » and « Secret » below for each environment','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
            </ul>
            <hr/>
            <input type="hidden" id="method" name="method"/>
            <input type="hidden" id="with_card" name="with_card"/>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox','mod'=>'paypal'),$_smarty_tpl ) );?>
</h4>
            <p>
                <label for="sandbox_client_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client ID','mod'=>'paypal'),$_smarty_tpl ) );?>
</label>
                <input type="text" id="sandbox_client_id" name="sandbox[client_id]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_CLIENTID']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_CLIENTID']->value,'htmlall','UTF-8' ));
}?>"/>
            </p>
            <p>
                <label for="sandbox_secret"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Secret','mod'=>'paypal'),$_smarty_tpl ) );?>
</label>
                <input type="password" id="sandbox_secret" name="sandbox[secret]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_SECRET']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_SECRET']->value,'htmlall','UTF-8' ));
}?>"/>
            </p>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live','mod'=>'paypal'),$_smarty_tpl ) );?>
</h4>
            <ul>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can switch to "Live" environment on top right','mod'=>'paypal'),$_smarty_tpl ) );?>
</li>
            </ul>
            <p>
                <label for="live_client_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client ID','mod'=>'paypal'),$_smarty_tpl ) );?>
</label>
                <input type="text" id="live_client_id" name="live[client_id]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_LIVE_CLIENTID']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PAYPAL_LIVE_CLIENTID']->value,'htmlall','UTF-8' ));
}?>"/>
            </p>
            <p>
                <label for="live_secret"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Secret','mod'=>'paypal'),$_smarty_tpl ) );?>
</label>
                <input type="password" id="live_secret" name="live[secret]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_LIVE_SECRET']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PAYPAL_LIVE_SECRET']->value,'htmlall','UTF-8' ));
}?>"/>
            </p>
            <hr/>
            <p>
                <button class="btn btn-default"  onclick="$.fancybox.close();return false;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>
                <button class="btn btn-info" name="save_credentials"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm API Credentials','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>
            </p>
        </form>
    </div>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">

    function display_popup(method)
    {
        $('#method').val(method);
        $.fancybox.open([
            {
                type: 'inline',
                autoScale: true,
                minHeight: 30,
                content: $('#content-fancybox-configuration').html(),
            }
        ]);
    }

    $(document).ready(function(){

        $('#change_product').click(function(event) {
            event.preventDefault();
            $('a[href=#paypal_conf]').click();
        });
        $('.main_form').insertAfter($('.configuration-block'));
        $('.bt_currency_form').insertAfter($('.main_form'));
        $('.form_shortcut').insertAfter($('.main_form'));
        $('.form_api_username').insertAfter($('.form_shortcut'));
        $('input[name=paypal_ec_in_context]').on("change", function(){
            if (this.value != 0) {
                $('#config_logo-name').parents('.form-group').hide();
            } else {
                $('#config_logo-name').parents('.form-group').show();
            }
        });
        if ($('input[name=paypal_ec_in_context]:checked').val() != 0) {
            $('#config_logo-name').parents('.form-group').hide();
        }
        $('input[name=paypal_vaulting]').on("change", function(){
            if (this.value == 0) {
                $('#card_verification_on').parents('.form-group').hide();
            } else {
                $('#card_verification_on').parents('.form-group').show();
            }
        });
        if ($('input[name=paypal_vaulting]:checked').val() == 0) {
            $('#card_verification_on').parents('.form-group').hide();
        }
        var ssl_active = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ssl_active']->value,'htmlall','UTF-8' ));?>
";
        if ($('#config_logo-images-thumbnails').length && !ssl_active) {
            $('#config_logo-images-thumbnails').after("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An image is on a insecure (http) server and will not be shown on paypal','mod'=>'paypal'),$_smarty_tpl ) );?>
");
        }
    });

<?php echo '</script'; ?>
>
<?php }
}
