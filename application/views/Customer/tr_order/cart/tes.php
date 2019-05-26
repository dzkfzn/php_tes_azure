<!DOCTYPE html>


<?php STATIC $danger = FALSE; ?>
<html class=" responsive" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="theme-color" content="#171a21">
        <title>Shopping Cart</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

        <style>
            .not-active {
                pointer-events: none;
                cursor: default;
                text-decoration: none;
                color: black;
            }
        </style>
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB" rel="stylesheet" type="text/css" >
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_global.css?v=ZDQlNd7AVFLY" rel="stylesheet" type="text/css" >
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/buttons.css?v=g4vF5QlH7C0a" rel="stylesheet" type="text/css" >
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/store.css?v=SMC4MR4nk2VO" rel="stylesheet" type="text/css" >
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/cart.css?v=Yv0DRsa8Z8bx" rel="stylesheet" type="text/css" >
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/steamaccount.css?v=YqNIj0d9c2x-" rel="stylesheet" type="text/css" >
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_responsive.css?v=lZjXzgjiAjP-" rel="stylesheet" type="text/css" >
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-33786258-1', 'auto', {
                'sampleRate': 0.4});
            ga('set', 'dimension1', true);
            ga('set', 'dimension2', 'External');
            ga('set', 'dimension3', 'cart');
            ga('set', 'dimension4', "cart\/DefaultAction");
            ga('send', 'pageview');
        </script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU" ></script>
        <script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/tooltip.js?v=.vG8yiuBTGwkE" ></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_global.js?v=UR9qRb-0UZlx&amp;l=english" ></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/main.js?v=23lDubNuVAN4&amp;l=english" ></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/prototype-1.7.js?v=.a38iP7Khdmyy" ></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/scriptaculous/_combined.js?v=N9x7GFelaFEb&amp;l=english&amp;load=effects,controls,slider" ></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/dynamicstore.js?v=I8FhuxJq0BZy&amp;l=english" ></script>


        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function (event) {
                $J.data(document, 'x_readytime', new Date().getTime());
                $J.data(document, 'x_oldref', GetNavCookie());
                SetupTooltips({tooltipCSSClass: 'store_tooltip'});
            });
        </script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/cart.js?v=.qD1GCPJZkAZl" ></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/dselect.js?v=yT8Q5U2-O4wX&amp;l=english" ></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_responsive_adapter.js?v=TbBMCK37KgCo&amp;l=english" ></script>

        <meta name="twitter:card" content="summary_large_image">

        <meta name="twitter:site" content="@steam_games" />

        <meta property="og:title" content="Shopping Cart">
        <meta property="twitter:title" content="Shopping Cart">
        <meta property="fb:app_id" content="105386699540688">
        <meta property="og:site" content="Steam">


        <link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <meta property="og:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <meta name="twitter:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png" />
        <meta property="og:image:secure" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">




    </head>
    <body class="v6 login responsive_page">

        <div class="responsive_page_frame with_header">

            <div class="responsive_page_menu_ctn mainmenu">
                <div class="responsive_page_menu"  id="responsive_page_menu">
                    <div class="mainmenu_contents">

                        <div class="mainmenu_footer_spacer"></div>
                        <div class="mainmenu_footer">
                            <div class="mainmenu_footer_logo"><img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/logo_valve_footer.png"></div>
                            © Valve Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.							<span class="mainmenu_valve_links">
                                <a href="https://store.steampowered.com/privacy_agreement/" target="_blank">Privacy Policy</a>
                                &nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">Legal</a>
                                &nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/" target="_blank">Steam Subscriber Agreement</a>
                                &nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/" target="_blank">Refunds</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="responsive_local_menu_tab">

            </div>

            <div class="responsive_page_menu_ctn localmenu">
                <div class="responsive_page_menu"  id="responsive_page_local_menu">
                    <div class="localmenu_content">
                    </div>
                </div>
            </div>



            <div class="responsive_header">
                <div class="responsive_header_content">
                    <div id="responsive_menu_logo">
                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/header_menu_hamburger.png" height="100%">
                        <div class="responsive_header_notification_badge_ctn">
                            <div class="responsive_header_notification_badge notification_count_total_ctn has_notifications">
                                <span class="notification_count">67</span>
                            </div>
                        </div>
                    </div>
                    <div class="responsive_header_logo">
                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/responsive/header_logo.png" height="36" border="0" alt="STEAM">
                    </div>
                </div>
            </div>

            <div class="responsive_page_content_overlay">

            </div>

            <div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
            </div>

            <div class="responsive_page_content">

                <div id="global_header">
                    <div class="content">
                        <div class="logo">
                            <span id="logo_holder">
                                 <a href="<?php echo base_url('Products') ?>">
                                    <img src="<?php echo base_url() ?>/assets/Customer/img/core-img/logo.png" width="176" height="44">
                                </a>
                            </span>
                            <!--[if lt IE 7]>
                            <style type="text/css">
                                    #logo_holder img { filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0); }
                                    #logo_holder { display: inline-block; width: 176px; height: 44px; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://steamstore-a.akamaihd.net/public/images/v5/globalheader_logo.png'); }
                            </style>
                            <![endif]-->
                        </div>

                        <script type="text/javascript">
            jQuery(function ($) {
                $('#global_header .supernav').v_tooltip({'location': 'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY': -4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
            });
                        </script>

                        <div id="global_actions" <?php if ($this->session->userdata('logged_in')) echo 'style="display: none;"'; ?>>
                            <div id="global_action_menu"  >

                                <div id="header_notification_area">

                                    <div  class="header_notification_btn header_installsteam_btn_green">

                                        <a class="header_installsteam_btn_content" href="<?php echo base_url('login_user'); ?>">
                                            Login
                                        </a>
                                    </div>
                                    <script type="text/javascript">$J(EnableNotificationCountPolling);</script>
                                    <div id="header_notification_link" class="header_notification_btn global_header_toggle_button notification_count_total_ctn has_notifications" onclick="ShowMenu(this, 'header_notification_dropdown', 'right');">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--kalo llogin-->
                        <div id="global_actions"  <?php if (!$this->session->userdata('logged_in')) echo 'style="display: none;"'; ?>>
                            <div id="global_action_menu">
                                <!-- notification inbox area -->

                                <span class="pulldown global_action_link" id="account_pulldown" onclick="ShowMenu(this, 'account_dropdown', 'right', 'bottom', true);"><?php echo $this->session->userdata('CustomerUsername'); ?></span>
                                <div class="popup_block_new" id="account_dropdown" style="visibility: visible; top: 25px; left: 106.125px; display: none; opacity: 1;">
                                    <div class="popup_body popup_menu">
                                        <a class="popup_menu_item" href="<?php echo base_url('login_user/logout'); ?>">Logout</a>
                                        <a class="popup_menu_item" href="https://store.steampowered.com/account/">Account details</a>
                                        <a class="popup_menu_item" href="https://store.steampowered.com/account/preferences/">Preferences</a>
                                        <span class="popup_menu_item" id="account_language_pulldown">Change language</span>
                                        <div class="popup_block_new" id="language_dropdown" style="display: none;">
                                            <div class="popup_body popup_menu">
                                                <a class="popup_menu_item tight" href="?l=schinese" onclick="ChangeLanguage('schinese');
                                                        return false;">简体中文 (Simplified Chinese)</a>

                                            </div>
                                        </div>
                                        <a class="popup_menu_item" href="https://steamcommunity.com/profiles/76561198301739163/">View profile</a>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    RegisterFlyout('account_language_pulldown', 'language_dropdown', 'leftsubmenu', 'bottomsubmenu', true);
                                </script>
                                <div id="header_wallet_ctn">
                                    <a class="global_action_link" id="header_wallet_balance" href="https://store.steampowered.com/account/store_transactions/">Rp <?php echo $this->session->userdata('CustomerWallet') ?></a>
                                </div>
                            </div>
                            <a href="<?php echo base_url() . $this->session->userdata('CustomerID'); ?>" class="user_avatar playerAvatar offline">
                                <img src="<?php echo base_url('gambar/' . $this->session->userdata('CustomerImagePath')); ?>">
                            </a>
                        </div>
                    </div>
                </div>

                <div id="responsive_store_nav_ctn"></div>
                <div class="responsive_page_template_content">


                    <div class="page_background">

                        <div class="page_header_ctn search">


                            <script type="text/javascript">
                                $J(function () {
                                    BindAutoFlyoutEvents();
                                    var $Window = $J(window);
                                    var $Header = $J('#store_header');
                                    var $ResponsiveNavCtn = $J('#responsive_store_nav_ctn');
                                    var $HeaderWrapper;
                                    $Window.on('Responsive_SmallScreenModeToggled.StoreMenu', function () {
                                        var bUseSmallScreenMode = window.UseSmallScreenMode && window.UseSmallScreenMode();
                                        if (!$HeaderWrapper)
                                            $HeaderWrapper = $Header.wrap($J('<div/>', {'class': 'responsive_store_nav_ctn_spacer'})).parent();
                                        if (bUseSmallScreenMode)
                                            $ResponsiveNavCtn.append($Header);
                                        else
                                            $HeaderWrapper.append($Header);
                                        if (bUseSmallScreenMode)
                                        {
                                            $Header.css('visibility', 'hidden');
                                            $Header.show();
                                            var nMenuHeight = $J('#store_header').height() + $J('#store_header').offset().top;
                                            if ($Window.scrollTop() < nMenuHeight)
                                                $Window.scrollTop(nMenuHeight - GetResponsiveHeaderFixedOffsetAdjustment());
                                            $Header.css('visibility', 'visible');
                                        }
                                    }).trigger('Responsive_SmallScreenModeToggled.StoreMenu');
                                    if ($J('#searchform').length > 0)
                                    {
                                        var g_rgUserPreferences = {
                                            excluded_tags: [],
                                            excluded_content_descriptors: [3, 4]};
                                        EnableSearchSuggestions($J('#searchform')[0].elements['term'], '1_8_4_', 'ID', 'english', g_rgUserPreferences, '5639150');
                                    }


                                });
                            </script>
                            <script type="text/javascript">
                                var g_AccountID = 341473435;
                                var g_sessionID = "9b9d67d675da28913730322a";
                                var g_ServerTime = 1546874120;
                                $J(InitMiniprofileHovers);
                                GDynamicStore.Init(341473435, false, "");
                                GStoreItemData.SetCurrencyFormatter(function (nValueInCents, bWholeUnitsOnly) {
                                    var fmt = function (nValueInCents, bWholeUnitsOnly) {
                                        var format = v_numberformat(nValueInCents / 100, bWholeUnitsOnly ? 0 : 2, ".", " ");
                                        format = format.replace(".00", '');
                                        return format;
                                    };
                                    var strNegativeSymbol = '';
                                    return strNegativeSymbol + "Rp " + fmt(nValueInCents, bWholeUnitsOnly);
                                });
                                GStoreItemData.SetCurrencyMinPriceIncrement(100);
                            </script>
                            <div class="page_content">
                                <div class="breadcrumbs">
                                    <a href="https://store.steampowered.com/">All Products</a> &gt;
                                    Your Shopping Cart			</div>
                                <h2 class="pageheader">Your Shopping Cart</h2>
                            </div>
                        </div>

                        <div class="page_content">

                            <div style="clear: left;"></div>


                            <div style="clear: left;"></div>
                            <div class="leftcol">
                                <div class="cart_area_body checkout_content_box">
                                    <form name="remove_line_item" action="https://store.steampowered.com/cart/" method="POST">
                                        <input type="hidden" name="snr" value="1_8_4__cart-remove">
                                        <input type="hidden" name="action" value="remove_line_item">
                                        <input type="hidden" name="sessionid" value="9b9d67d675da28913730322a">
                                        <input type="hidden" id="line_item_to_remove_gid" name="lineitem_gid" value="-1">
                                        <input type="hidden" name="cart" value="2424524510945015911">
                                    </form>

                                    <div class="cart_item_list">
                                        <!-- cart item blocks -->

                                        <?php
                                        if ($this->cart->total_items() > 0) {
                                            foreach ($cartItems as $item) {
                                                ?>
                                                <div class="cart_row even"  onmouseover="GameHover(this, event, 'global_hover', { & quot; type & quot; : & quot; sub & quot; , & quot; id & quot; :17798, & quot; v6 & quot; :1});" onmouseout="HideGameHover(this, event, 'global_hover')">
                                                    <div class="cart_item">
                                                        <div class="cart_item_price_container">
                                                            <div class="cart_item_price ">
                                                                <div class="price">Rp <?php echo number_format($item["price"], 0, ',', ' '); ?></div>
                                                                <a class="remove_link" href="<?php echo base_url('cart/removeItem/' . $item["rowid"]); ?>">Remove</a>
                                                            </div>
                                                        </div>
                                                        <div class="cart_item_img "><a href="">
                                                                <?php $imageURL = !empty($item["image"]) ? base_url('Developer/GamesThumbnail/' . $item["image"]) : base_url('assets/images/pro-demo-img.jpeg'); ?>

                                                                <img src="<?php echo $imageURL; ?>" border="0"></a>
                                                        </div>
                                                        <div class="cart_item_desc">
                                                            <div class="cart_item_platform">
                                                                <span class="platform_img win"></span>									
                                                            </div>
                                                            <a href=""><?php echo $item["name"]; ?></a>
                                                            <br>
                                                            <?php
                                                            if ($item["verif"]) {
                                                                $danger = true;
                                                                ?>
                                                                <span class="cart_item_desc_ext">You already own this game</span>
                                                                <br>
                                                            <?php }
                                                            ?>


                                                        </div>
                                                        <div style="clear: left"></div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>

                                        <!-- /cart item blocks -->
                                    </div>

                                    <div class="checkout_content cart">

                                        <div class="cart_totals_area">

                                            <div id="cart_estimated_total_text" class="cart_total_row">
                                                <div id="cart_estimated_total" class="price">
                                                    Rp <?php echo number_format($this->cart->total(), 0, ',', ' '); ?>							</div>
                                                Estimated total<sup>1</sup>
                                            </div>						
                                        </div>

                                        <div class="rule"></div>
                                        <div style="clear: left;"></div>
                                        <?php if ($danger) {
                                            ?>
                                            <div class="cart_bodycopy highlight"><span class="cart_bodycopy_highlight"><sup>1</sup></span>Your account already owns some of the above items, so you can’t purchase them again. You can purchase these items as a gift or adjust the contents of your cart to continue.</div>
                                            <?php
                                        }
                                        ?>

                                        <div class="cart_bodycopy highlight">
                                            <div class="cart_bodycopy_highlight"><sup>1</sup></div>
                                            <div style="clear: left;"></div>
                                        </div><br>


                                        <div class="cart_bodycopy">Is this a purchase for yourself or is it a gift? Select one to continue to checkout.</div>




                                        <?php if ($this->cart->total_items() > 0 and $danger == false) { ?>

                                            <div class="cart_checkout_buttons">
                                                <a href="" class="btnv6_green_white_innerfade btn_medium btn_disabled continue not-active">
                                                    <span>
                                                        Purchase as a gift						
                                                    </span>
                                                </a>
                                                <a id="btn_purchase_self" href="<?php echo base_url('checkout/'); ?>" class="btnv6_green_white_innerfade btn_medium continue">
                                                    <span>
                                                        Purchase for myself									
                                                    </span>
                                                </a>

                                                <div style="clear: right;"></div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="cart_checkout_buttons">
                                                <a href="" class="btnv6_green_white_innerfade btn_medium btn_disabled continue not-active">
                                                    <span>
                                                        Purchase as a gift						
                                                    </span>
                                                </a>
                                                <a id="btn_purchase_self" href="<?php echo base_url('checkout/'); ?>" class="btnv6_green_white_innerfade btn_disabled btn_medium continue not-active">
                                                    <span>
                                                        Purchase for myself									
                                                    </span>
                                                </a>

                                                <div style="clear: right;"></div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="checkout_notes">
                                    <div style="float:right;">
                                        <a class="remove_link" href="javascript:ShowConfirmDialog( '', 'Are you sure you want to remove all items from your shopping cart?', 'Yes', 'No').done( function() { ForgetCart(); } );">Remove all items</a>
                                    </div>						

                                </div>
                                <br>
                                <div class="continue_shopping_ctn">
                                    <a href="<?php echo base_url('products/'); ?>" class="btn_medium btnv6_blue_hoverfade">
                                        <span>
                                            Continue Shopping						</span>
                                    </a>
                                </div>
                                <br><br>




                            </div>


                            <div style="clear: both;"></diV>
                        </div>
                    </div>
                    <!-- End Main Background -->

                    <div id="coupon_selector_bg" style="display: none;"></div>

                </div>	<!-- responsive_page_legacy_content -->

                <div id="footer_spacer" class=""></div>
                <div id="footer"  class="">
                    <div class="footer_content">
                        <div class="rule"></div>

                        <div id="footer_nav">



                            <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_steam_pulldown">
                                <span>ABOUT STEAM</span>
                            </span>
                            <div class="popup_block_new" id="footer_steam_dropdown" style="display: none;">
                                <div class="popup_body popup_menu">
                                    <a class="popup_menu_item" href="https://store.steampowered.com/about/?snr=1_44_44__22">
                                        What is Steam?				</a>
                                    <!--
                                            <a class="popup_menu_item" href="">
                                                    Download Steam now					</a>
                                    -->
                                    <a class="popup_menu_item" href="https://support.steampowered.com/kb_article.php?p_faqid=549#gifts" target="_blank" rel="noreferrer">
                                        Gifting on Steam				</a>
                                    <a class="popup_menu_item" href="https://steamcommunity.com/?snr=1_44_44__22">
                                        The Steam Community				</a>
                                </div>
                            </div>

                            <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_valve_pulldown">
                                <span>ABOUT VALVE</span>
                            </span>
                            <div class="popup_block_new" id="footer_valve_dropdown" style="display: none;">
                                <div class="popup_body popup_menu">
                                    <a class="popup_menu_item" href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">
                                        About Valve				</a>
                                    <a class="popup_menu_item" href="http://www.valvesoftware.com/business/" target="_blank" rel="noreferrer">
                                        Business Solutions				</a>
                                    <a class="popup_menu_item" href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">
                                        Steamworks				</a>
                                    <a class="popup_menu_item" href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">
                                        Jobs				</a>
                                </div>
                            </div>


                            <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_help_pulldown">
                                <span>HELP</span>
                            </span>
                            <div class="popup_block_new" id="footer_help_dropdown" style="display: none;">
                                <div class="popup_body popup_menu">
                                    <a class="popup_menu_item" href="https://help.steampowered.com/en/?snr=1_44_44__23">
                                        Support				</a>
                                    <a class="popup_menu_item" href="https://store.steampowered.com/forums/?snr=1_44_44__23" target="_blank" rel="noreferrer">
                                        Forums				</a>
                                    <a class="popup_menu_item" href="https://store.steampowered.com/stats/?snr=1_44_44__23" target="_blank" rel="noreferrer">
                                        Stats				</a>
                                </div>
                            </div>


                            <span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_feeds_pulldown">
                                <span>NEWS FEEDS</span>
                            </span>
                            <div class="popup_block_new" id="footer_feeds_dropdown" style="display: none;">
                                <div class="popup_body popup_menu">
                                    <a class="popup_menu_item" href="https://store.steampowered.com/feeds/news.xml">
                                        <img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Steam News				</a>
                                    <a class="popup_menu_item" href="https://store.steampowered.com/feeds/newreleases.xml">
                                        <img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Game Releases				</a>
                                    <a class="popup_menu_item" href="https://store.steampowered.com/feeds/daily_deals.xml">
                                        <img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Daily Deals				</a>
                                </div>
                            </div>
                            <div style="clear: left;"></div>

                            <script type="text/javascript">
                                RegisterFlyout('footer_genre_pulldown', 'footer_genre_dropdown', null, null, true);
                                RegisterFlyout('footer_steam_pulldown', 'footer_steam_dropdown', null, null, true);
                                RegisterFlyout('footer_valve_pulldown', 'footer_valve_dropdown', null, null, true);
                                RegisterFlyout('footer_help_pulldown', 'footer_help_dropdown', null, null, true);
                                RegisterFlyout('footer_feeds_pulldown', 'footer_feeds_dropdown', null, null, true);
                            </script>
                        </div>

                        <br>

                        <div class="rule"></div>
                        <div id="footer_logo_steam"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_steam_footer.png" alt="Valve Software" border="0" /></div>

                        <div id="footer_logo"><a href="http://www.valvesoftware.com" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_valve_footer.png" alt="Valve Software" border="0" /></a></div>
                        <div id="footer_text">
                            <div>&copy; 2019 Valve Corporation.  All rights reserved.  All trademarks are property of their respective owners in the US and other countries.</div>
                            <div>VAT included in all prices where applicable.&nbsp;&nbsp;

                                <a href="https://store.steampowered.com/privacy_agreement/" target="_blank" rel="noreferrer">Privacy Policy</a>
                                &nbsp; | &nbsp;
                                <a href="https://store.steampowered.com/legal/" target="_blank" rel="noreferrer">Legal</a>
                                &nbsp; | &nbsp;
                                <a href="https://store.steampowered.com/subscriber_agreement/" target="_blank" rel="noreferrer">Steam Subscriber Agreement</a>
                                &nbsp; | &nbsp;
                                <a href="https://store.steampowered.com/steam_refunds/" target="_blank" rel="noreferrer">Refunds</a>

                            </div>
                            <div class="responsive_optin_link">
                                <div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
                                    <span>View mobile website</span>
                                </div>
                            </div>

                        </div>



                        <div style="clear: left;"></div>
                        <br>

                        <div class="rule"></div>

                        <div class="valve_links">
                            <a href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">About Valve</a>
                            &nbsp; | &nbsp;<a href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">Steamworks</a>
                            &nbsp; | &nbsp;<a href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">Jobs</a>
                            &nbsp; | &nbsp;<a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="noreferrer">Steam Distribution</a>
                            &nbsp; | &nbsp;<a href="https://store.steampowered.com/digitalgiftcards/" target="_blank" rel="noreferrer">Gift Cards</a>
                            &nbsp; | &nbsp;<a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel="noopener"><img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_facebook.gif"> Steam</a>
                            &nbsp; | &nbsp;<a href="http://twitter.com/steam_games" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/ico/ico_twitter.gif"> @steam_games</a>
                        </div>

                    </div>
                </div>
            </div>	<!-- responsive_page_content -->

        </div>	<!-- responsive_page_frame -->
    </body>
</html>