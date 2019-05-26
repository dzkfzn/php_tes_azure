
        <?php
        foreach ($detailPro as $rowdata) {
            $GamesID = $rowdata['GamesID'];
            $GamesName = $rowdata['GamesName'];
            $GamesReleaseDate = $rowdata['GamesReleaseDate'];
            $GamesPrice = $rowdata['GamesPrice'];
            $GamesDesc = $rowdata['GamesDesc'];
            $GamesPlatform = $rowdata['GamesPlatform'];
            $GamesRating = $rowdata['GamesRating'];
            $GamesThumbnail = $rowdata['GamesThumbnail'];
            $GamesRating = $rowdata['GamesRating'];
            $DeveloperName = $rowdata['DeveloperName'];
        }
        try {
            foreach ($qSystemReq as $rowSyreq) {
                $SyReqOS = $rowSyreq['SyReqOS'];
                $SyReqCPU = $rowSyreq['SyReqCPU'];
                $SyReqRAM = $rowSyreq['SyReqRAM'];
                $SyReqVGA = $rowSyreq['SyReqVGA'];
                $SyReqHDD = $rowSyreq['SyReqHDD'];
                $SyReqDirectX = $rowSyreq['SyReqDirectX'];
            }
        } catch (Exception $ex) {
            $SyReqOS = 'tbd';
            $SyReqCPU = 'tbd';
            $SyReqRAM = 'tbd';
            $SyReqVGA = 'tbd';
            $SyReqHDD = 'tbd';
            $SyReqDirectX = 'tbd';
        }
        ?> 
<html class=" responsive" lang="en"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="theme-color" content="#171a21">
        <title><?php echo $GamesName ?> on Steam</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">


        <link href="https://steamstore-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_global.css?v=ZDQlNd7AVFLY" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/buttons.css?v=g4vF5QlH7C0a" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/store.css?v=SMC4MR4nk2VO" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/user_reviews.css?v=fRl7Zc8pKTl-" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/store_game_shared.css?v=x7dVnC6RV2vW" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/game.css?v=FPD_WsiwAaG5" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/recommended.css?v=QUQxWFcPHhAC" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/apphub.css?v=dunRbO3rtVVd" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_responsive.css?v=lZjXzgjiAjP-" rel="stylesheet" type="text/css">
        <script async="" src="//www.google-analytics.com/analytics.js"></script><script>
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
            ga('set', 'dimension3', 'application');
            ga('set', 'dimension4', "application\/app");
            ga('send', 'pageview');

        </script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU"></script>
        <script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/tooltip.js?v=.vG8yiuBTGwkE"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_global.js?v=UR9qRb-0UZlx&amp;l=english"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/main.js?v=23lDubNuVAN4&amp;l=english"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/dynamicstore.js?v=I8FhuxJq0BZy&amp;l=english"></script>


        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function (event) {
                $J.data(document, 'x_readytime', new Date().getTime());
                $J.data(document, 'x_oldref', GetNavCookie());
                SetupTooltips({tooltipCSSClass: 'store_tooltip'});
            });
        </script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/gamehighlightplayer.js?v=N-AW37qWJmUE&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/user_reviews.js?v=ygQMEd7gV3fm&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/dselect.js?v=yT8Q5U2-O4wX&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/app_tagging.js?v=_bbhezhQ8pzb&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/game.js?v=EK8n-DOL3OHI&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/flot-0.8/jquery.flot.js?v=.zrJjtPpGflQQ"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/flot-0.8/jquery.flot.resize.js?v=.TWn5-WgQL6_C"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/flot-0.8/jquery.flot.time.js?v=.wh3SCHrBBvNi"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/flot-0.8/jquery.flot.selection.js?v=.EGbodhwqG-oT"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_responsive_adapter.js?v=TbBMCK37KgCo&amp;l=english"></script>

        <meta name="twitter:card" content="summary_large_image">
        <meta name="Description" content="Gris is a hopeful young girl lost in her own world, dealing with a painful experience in her life. Her journey through sorrow is manifested in her dress, which grants new abilities to better navigate her faded reality.">

        <meta name="twitter:site" content="@steam_games">

        <meta property="og:title" content="GRIS on Steam">
        <meta property="twitter:title" content="GRIS on Steam">
        <meta property="fb:app_id" content="105386699540688">
        <meta property="og:site" content="Steam">
        <meta property="og:url" content="https://store.steampowered.com/app/683320/GRIS/">
        <meta property="og:description" content="Gris is a hopeful young girl lost in her own world, dealing with a painful experience in her life. Her journey through sorrow is manifested in her dress, which grants new abilities to better navigate her faded reality.">
        <meta property="twitter:description" content="Gris is a hopeful young girl lost in her own world, dealing with a painful experience in her life. Her journey through sorrow is manifested in her dress, which grants new abilities to better navigate her faded reality.">

        <link rel="canonical" href="https://store.steampowered.com/app/683320/GRIS/">

        <link rel="image_src" href="https://steamcdn-a.akamaihd.net/steam/apps/683320/header.jpg?t=1545069163">
        <link rel="image_src" href="https://steamcdn-a.akamaihd.net/steam/apps/683320/header.jpg?t=1545069163">
        <meta property="og:image" content="https://steamcdn-a.akamaihd.net/steam/apps/683320/header.jpg?t=1545069163">
        <meta name="twitter:image" content="https://steamcdn-a.akamaihd.net/steam/apps/683320/header.jpg?t=1545069163">
        <meta property="og:image:secure" content="https://steamcdn-a.akamaihd.net/steam/apps/683320/header.jpg?t=1545069163">




    </head>
    <body class="v6 app game_bg responsive_page" style="">


        <div class="responsive_page_frame with_header">

            <div class="responsive_page_menu_ctn mainmenu">
                <div class="responsive_page_menu" id="responsive_page_menu">
                    <div class="mainmenu_contents">
                        <div class="mainmenu_contents_items">
                            <!-- profile area -->
                            <div class="responsive_menu_user_area">
                                <div class="responsive_menu_user_persona persona offline">
                                    <div class="playerAvatar offline">
                                        <a href="https://steamcommunity.com/profiles/76561198301739163/">
                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/5f/5fca3380f4fcbe8046f23315feb01bf18ae6d5aa.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/5f/5fca3380f4fcbe8046f23315feb01bf18ae6d5aa.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/5f/5fca3380f4fcbe8046f23315feb01bf18ae6d5aa_medium.jpg 2x">											</a>
                                    </div>
                                    <a href="https://steamcommunity.com/profiles/76561198301739163/" data-miniprofile="341473435">Mr.Foladare</a>									</div>

                                <div class="responsive_menu_cartwallet_area persona offline">
                                    <div class="responsive_menu_user_cart">
                                        <a href="https://store.steampowered.com/cart/">
                                            Cart <b>(1)</b>													</a>
                                    </div>
                                    <div class="responsive_menu_user_wallet">
                                        <a href="https://store.steampowered.com/account/">
                                            Wallet <b>(Rp 23 390.35)</b>													</a>
                                    </div>
                                </div>
                            </div>

                            <div class="menuitem notifications_item">
                                Notifications										<div class="notification_count_total_ctn has_notifications">
                                    <span class="notification_envelope"></span>
                                    <span class="notification_count">67</span>
                                </div>
                            </div>
                            <div class="notification_submenu" style="display: none;" data-submenuid="notifications">

                                <a data-notification-type="4" class="popup_menu_item notification_ctn header_notification_comments" href="https://steamcommunity.com/profiles/76561198301739163/commentnotifications/">
                                    <span class="notification_icon"></span>New comments <span class="notification_count">0</span>			</a>
                                <div class="header_notification_dropdown_seperator"></div>
                                <a data-notification-type="5" class="popup_menu_item notification_ctn header_notification_items active_inbox_item" href="https://steamcommunity.com/profiles/76561198301739163/inventory/">
                                    <span class="notification_icon"></span>New items <span class="notification_count">8</span>			</a>
                                <div class="header_notification_dropdown_seperator"></div>
                                <a data-notification-type="6" class="popup_menu_item notification_ctn header_notification_invites active_inbox_item" href="https://steamcommunity.com/profiles/76561198301739163/home/invites/">
                                    <span class="notification_icon"></span>New invites <span class="notification_count">59</span>			</a>
                                <div class="header_notification_dropdown_seperator"></div>
                                <a data-notification-type="8" class="popup_menu_item notification_ctn header_notification_gifts" href="https://steamcommunity.com/profiles/76561198301739163/inventory/#pending_gifts">
                                    <span class="notification_icon"></span>New gifts <span class="notification_count">0</span>			</a>
                                <div class="header_notification_dropdown_seperator"></div>
                                <a data-notification-type="9" class="popup_menu_item notification_ctn header_notification_offlinemessages" href="javascript:void(0)" onclick="LaunchWebChat();
                HideMenu('header_notification_link', 'header_notification_dropdown');
                return false;">
                                    <span class="notification_icon"></span>New messages <span class="notification_count">0</span>			</a>
                                <a data-notification-type="1" class="popup_menu_item notification_ctn hide_when_empty header_notification_tradeoffers" href="https://steamcommunity.com/profiles/76561198301739163/tradeoffers/">
                                    <div class="header_notification_dropdown_seperator"></div>
                                    <span class="notification_icon"></span>New trade offers <span class="notification_count">0</span>					</a>
                                <a data-notification-type="2" class="popup_menu_item notification_ctn hide_when_empty header_notification_asyncgame" href="https://steamcommunity.com/profiles/76561198301739163/gamenotifications">
                                    <div class="header_notification_dropdown_seperator"></div>
                                    <span class="notification_icon"></span>New turns waiting <span class="notification_count">0</span>					</a>
                                <a data-notification-type="3" class="popup_menu_item notification_ctn hide_when_empty header_notification_moderatormessage" href="https://steamcommunity.com/profiles/76561198301739163/moderatormessages">
                                    <div class="header_notification_dropdown_seperator"></div>
                                    <span class="notification_icon"></span>New community messages <span class="notification_count">0</span>					</a>
                                <a data-notification-type="10" class="popup_menu_item notification_ctn hide_when_empty header_notification_helprequestreply" href="https://help.steampowered.com/en/wizard/HelpRequests">
                                    <div class="header_notification_dropdown_seperator"></div>
                                    <span class="notification_icon"></span>Steam Support replies <span class="notification_count">0</span>					</a>
                            </div>
                            <a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
                                Store	</a>
                            <div class="submenu_store" style="display: none;" data-submenuid="store">
                                <a class="submenuitem" href="https://store.steampowered.com/">Featured</a>
                                <a class="submenuitem" href="https://store.steampowered.com/explore/">Explore</a>
                                <a class="submenuitem" href="https://store.steampowered.com/curators/">Curators</a>
                                <a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
                                <a class="submenuitem" href="https://store.steampowered.com/news/">News</a>
                                <a class="submenuitem" href="https://store.steampowered.com/stats/">Stats</a>
                            </div>


                            <a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
                                Community	</a>
                            <div class="submenu_community" style="display: none;" data-submenuid="community">
                                <a class="submenuitem" href="https://steamcommunity.com/">Home</a>
                                <a class="submenuitem" href="https://steamcommunity.com/discussions/">Discussions</a>
                                <a class="submenuitem" href="https://steamcommunity.com/workshop/">Workshop</a>
                                <a class="submenuitem" href="https://steamcommunity.com/market/">Market</a>
                                <a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Broadcasts</a>
                            </div>



                            <a class="menuitem supernav username" href="https://steamcommunity.com/profiles/76561198301739163/home/" data-tooltip-type="selector" data-tooltip-content=".submenu_username">
                                You &amp; Friends		</a>
                            <div class="submenu_username" style="display: none;" data-submenuid="username">
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/home/">Activity</a>
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/">Profile</a>
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/friends/">Friends</a>
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/groups/">Groups</a>
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/screenshots/">Content</a>
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/badges/">Badges</a>
                                <a class="submenuitem" href="https://steamcommunity.com/profiles/76561198301739163/inventory/">Inventory</a>
                            </div>


                            <a class="menuitem" href="https://help.steampowered.com/en/">
                                Support	</a>

                            <div class="minor_menu_items">
                                <a class="menuitem" href="https://store.steampowered.com/account/">Account details</a>
                                <a class="menuitem" href="https://store.steampowered.com/account/preferences">Preferences</a>
                                <div class="menuitem change_language_action">
                                    Change language								</div>
                                <div class="menuitem" onclick="Logout();">Change User</div>
                                <div class="menuitem" onclick="Responsive_RequestDesktopView();">
                                    View desktop website									</div>
                            </div>
                        </div>
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
                <div class="responsive_page_menu" id="responsive_page_local_menu">
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
                                    <img src="http://localhost:10/PRG5/PROJECT/GameGevity//assets/Customer/img/core-img/logo.png" width="176" height="44">
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
                                                <a class="popup_menu_item tight" href="?l=schinese" onclick="ChangeLanguage('schinese'); return false;">简体中文 (Simplified Chinese)</a>

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

                    <script type="text/javascript">

                        var g_eDiscoveryQueueType = 0;

                        GStoreItemData.AddStoreItemDataSet(
                                {"rgApps": {"256290": {"name": "Child of Light", "url_name": "Child_of_Light", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 170 000<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/256290\/capsule_184x69.jpg?t=1455813114", "os_windows": true, "localized": true}, "542050": {"name": "Forgotton Anne", "url_name": "Forgotton_Anne", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 190 000<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/542050\/capsule_184x69.jpg?t=1545066728", "os_windows": true, "os_macos": true, "localized": true}, "24420": {"name": "Aquaria", "url_name": "Aquaria", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 89 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/24420\/capsule_184x69.jpg?t=1447351632", "os_windows": true, "os_linux": true, "localized": true}, "314630": {"name": "The Thin Silence", "url_name": "The_Thin_Silence", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 69 999<\/div><\/div><\/div>", "descids": [2, 5], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/314630\/capsule_184x69.jpg?t=1534811551", "os_windows": true, "os_macos": true, "localized": true, "has_adult_content_violence": true}, "224760": {"name": "FEZ", "url_name": "FEZ", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 89 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/224760\/capsule_184x69.jpg?t=1472521163", "os_windows": true, "os_macos": true, "os_linux": true, "localized": true}, "729370": {"name": "-KLAUS-", "url_name": "KLAUS", "discount_block": "<div class=\"discount_block empty \"><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/729370\/capsule_184x69.jpg?t=1546543366", "os_windows": true, "os_macos": true, "coming_soon": true, "localized": true}, "658590": {"name": "She and The Light Bearer", "url_name": "She_and_The_Light_Bearer", "discount_block": "<div class=\"discount_block empty \"><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/658590\/capsule_184x69.jpg?t=1546586568", "os_windows": true, "os_macos": true, "coming_soon": true, "localized": true}, "504230": {"name": "Celeste", "url_name": "Celeste", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 135 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/504230\/capsule_184x69.jpg?t=1544736069", "os_windows": true, "os_macos": true, "os_linux": true, "localized": true}, "204060": {"name": "Superbrothers: Sword & Sworcery EP", "url_name": "Superbrothers_Sword__Sworcery_EP", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 59 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/204060\/capsule_184x69.jpg?t=1447355095", "os_windows": true, "os_macos": true, "os_linux": true, "localized": true}, "366320": {"name": "Seasons after Fall", "url_name": "Seasons_after_Fall", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 115 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/366320\/capsule_184x69.jpg?t=1476102548", "os_windows": true, "localized": true}, "388420": {"name": "In Between", "url_name": "In_Between", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 99 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/388420\/capsule_184x69.jpg?t=1541027741", "os_windows": true, "os_macos": true, "os_linux": true, "localized": true}, "563810": {"name": "Fumiko!", "url_name": "Fumiko", "discount_block": "<div class=\"discount_block  no_discount\"> <div class=\"discount_prices\"><div class=\"discount_final_price\">Rp 59 999<\/div><\/div><\/div>", "descids": [], "small_capsulev5": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/563810\/capsule_184x69.jpg?t=1545309332", "os_windows": true, "os_macos": true, "os_linux": true, "localized": true}}, "rgPackages": [], "rgBundles": []});
                        GStoreItemData.AddNavParams({
                            recommended: "1_5_9__300",
                            recommend_franchise: "1_5_9__316",
                            more_from_franchise: "1_5_9__317",
                            bundle_component_preview: "1_5_9__412",
                            recommended_ranked_played: "1_5_9__862",
                        });

                        $J(function () {
                            var $Expander = $J('#devnotes_expander');
                            if ($Expander.length && $Expander.height() < parseInt($Expander.css('max-height'))) {
                                $J('#devnotes_more').hide();
                            }

                            CollapseLongStrings('.dev_row .summary.column');

                            InitQueueControls(683320, 683320, 0, '1_5_9_');
                            InitAutocollapse();
                            InitHorizontalAutoSliders();

                            Responsive_ReparentItemsInResponsiveMode('.responsive_apppage_details_right', $J('#responsive_apppage_details_right_ctn'));
                            Responsive_ReparentItemsInResponsiveMode('.responsive_apppage_details_left', $J('#responsive_apppage_details_left_ctn'));
                            Responsive_ReparentItemsInResponsiveMode('.responsive_apppage_reviewblock', $J('#responsive_apppage_reviewblock_ctn'));

                            //hack to workaround chrome bug
                            $J('#responsive_apppage_reviewblock_ctn').css('width', '100%');
                            window.setTimeout(function () {
                                $J('#responsive_apppage_reviewblock_ctn').css('width', '');
                            }, 1);


                            var watcher = new CScrollOffsetWatcher($J('#app_reviews_hash'), OnLoadReviews);
                            watcher.SetBufferHeight(0);
                        });
                        GDynamicStore.OnReady(function () {
                            RenderMoreLikeThisBlock(["256290", "542050", "24420", "314630", "224760", "729370", "658590", "504230", "204060", "366320", "388420", "563810"]);
                            RenderFranchiseAppBlock("[]");
                            RenderSuccessorRankedAppsBlock("[]")

                        });



                        // Add script hooks to handle messages returend to us by the broadcast service.

                    </script>

                    <div class="game_page_background game" style="background-image: url('https://steamcdn-a.akamaihd.net/steam/apps/683320/page_bg_generated_v6b.jpg?t=1545069163');">



               
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
                                    EnableSearchSuggestions($J('#searchform')[0].elements['term'], '1_5_9_', 'ID', 'english', g_rgUserPreferences, '5643918');
                                }


                            });
                        </script>
                        <script type="text/javascript">
                            var g_AccountID = 341473435;
                            var g_sessionID = "1c314071445718b429807be6";
                            var g_ServerTime = 1546957697;

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
                        <div class="page_content_ctn" itemscope="" itemtype="http://schema.org/Product">

                            <meta itemprop="image" content="https://steamcdn-a.akamaihd.net/steam/apps/683320/capsule_231x87.jpg?t=1545069163">
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" style="display: none;">
                                <meta itemprop="priceCurrency" content="IDR">
                                <meta itemprop="price" content="102 999">
                            </div>
                            <div class="page_title_area game_title_area page_content">
                                <div class="breadcrumbs">
                                    <div class="blockbg">
                                        <a href="#">All Games</a>
                                        &gt; <a href="#"><span itemprop="name"><?php echo $GamesName  ?></span></a>

                                    </div>
                                    <div style="clear: left;"></div>
                                </div>
                                <div class="apphub_HomeHeaderContent">

                                    <div class="apphub_HeaderStandardTop">
                                        <div class="apphub_OtherSiteInfo">
                                         
                                        </div>
                                        <div class="apphub_AppIcon"><img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/683320/10a3afeac4adedb37acaec02885bdc3c102eca93.jpg"><div class="overlay"></div></div>
                                        <div class="apphub_AppName"><?php echo $GamesName; ?></div>
                                        <div style="clear: both"></div>
                                    </div>

                                </div>

                            </div>
                            <div style="clear: left;"></div>

                            <div class="block">
                                <script type="text/javascript">
                                    var strRequiredVersion = "9";
                                    if (typeof (g_bIsOnMac) != 'undefined' && g_bIsOnMac)
                                        strRequiredVersion = "10.1.0";

                                </script>
                                <div class="game_background_glow">
                                    <div class="block_content page_content" id="game_highlights">

                                        <div class="rightcol">
                                            <div class="glance_ctn">
                                                <div class="game_header_image_ctn">
                                                    <img class="game_header_image_full" src="<?php echo base_url('Developer/GamesThumbnail/' . $GamesThumbnail); ?>">
                                                </div>
                                                <div class="game_description_snippet">
                                                    <?php echo $GamesDesc; ?>
                                                </div>

                                                <div class="glance_ctn_responsive_left">
                                                    <div class="user_reviews">
                                                        <div class="release_date">
                                                            <div class="subtitle column">Release Date:</div>
                                                            <div class="date"><?php echo date("M j, Y", strtotime($GamesReleaseDate)); ?></div>
                                                        </div>

                                                        <div class="dev_row">
                                                            <div class="subtitle column">Developer:</div>
                                                            <div class="summary column" id="developers_list">
                                                                <a href="#"><?php echo $DeveloperName ?></a>	
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="glance_ctn_responsive_right">
                                                    <!-- when the javascript runs, it will set these visible or not depending on what fits in the area -->
                                                    <div class="glance_tags_ctn popular_tags_ctn">
                                                        <div class="glance_tags_label">Genres:</div>
                                                        <div class="glance_tags popular_tags">

                                                            <?php
                                                            foreach ($qGenre as $rowdata) {
                                                                ?>
                                                                <a href="#" class="app_tag" style="">
                                                                    <?php echo $rowdata['GenreName']; ?>											
                                                                </a>
                                                                <?php
                                                            }
                                                            ?> 



                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear: both;"></div>
                                            </div>
                                        </div>

                                        <div class="leftcol">
                                            <div class="highlight_ctn">
                                                <div class="highlight_overflow">
                                                    <div id="highlight_player_area">


                                                        <?php
                                                        $i = 0;
                                                        if (!empty($qGambar)) {
                                                            foreach ($qGambar as $row) {
                                                                ?>

                                                                <div class="highlight_player_area_spacer">
                                                                    <img src="<?php echo base_url('Developer/Games_Picture/' . $row['ImagesID']); ?>">
                                                                </div>
                                                                <?php
                                                                break;
                                                            }
                                                        }
                                                        ?>

                                                        <script type="text/javascript">

                                                            var rgCommonFlashVars = {
                                                                clientLanguage: "english",
                                                                capsuleSize: "huge",
                                                                STAGE_WIDTH: 600,
                                                                STAGE_HEIGHT: 338,
                                                                AUTO_PLAY: "true",
                                                                ALLOW_JSPAUSE: "true",
                                                                TRACK_MUTE: "true",
                                                                CHECKBOX_AUTOPLAY_SHOW: "true",
                                                                CHECKBOX_AUTOPLAY_TEXT: "Autoplay+videos"
                                                            };
                                                            var rgScreenshotURLs = {"ss_4fa618f5a2141d48a05716d43598a260235b0aaa.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_4fa618f5a2141d48a05716d43598a260235b0aaa_SIZE_.jpg?t=1545069163", "ss_a155ad5423e11e3e764a1a270dcf4f30323f0a35.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_a155ad5423e11e3e764a1a270dcf4f30323f0a35_SIZE_.jpg?t=1545069163", "ss_62883bfa8a341db3f9c5c03768f5c14f938fe8fc.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_62883bfa8a341db3f9c5c03768f5c14f938fe8fc_SIZE_.jpg?t=1545069163", "ss_9c717701f0a67af52d227f69001e1415c932ae60.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_9c717701f0a67af52d227f69001e1415c932ae60_SIZE_.jpg?t=1545069163", "ss_5d1782d0ec36f4ca8b5ffc96a3cc5e255f5ac502.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_5d1782d0ec36f4ca8b5ffc96a3cc5e255f5ac502_SIZE_.jpg?t=1545069163", "ss_973175ba1865c5716c5f37588d00ac135b7d34ba.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_973175ba1865c5716c5f37588d00ac135b7d34ba_SIZE_.jpg?t=1545069163", "ss_a3312546adb747d7ee63c51532ee6ff960e79b31.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_a3312546adb747d7ee63c51532ee6ff960e79b31_SIZE_.jpg?t=1545069163", "ss_631d99cc6462cce94081032b7e600a6b87c3f7d3.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_631d99cc6462cce94081032b7e600a6b87c3f7d3_SIZE_.jpg?t=1545069163", "ss_201923b14d5d3a62cad06c6837fdf287526224f2.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_201923b14d5d3a62cad06c6837fdf287526224f2_SIZE_.jpg?t=1545069163", "ss_a21955b9313041a1c1cef4d369cca26a8d3d1750.jpg": "https:\/\/steamcdn-a.akamaihd.net\/steam\/apps\/683320\/ss_a21955b9313041a1c1cef4d369cca26a8d3d1750_SIZE_.jpg?t=1545069163"};
                                                        </script>
                                                    </div>
                                                    <div id="highlight_strip">
                                                        <div id="highlight_strip_scroll" style="width: 1562px; left: 0px;">
                                                            <div class="highlight_selector" style="left: 119.979px;"></div>

                                                            <?php
                                                            $i = 0;
                                                            if (!empty($qGambar)) {
                                                                foreach ($qGambar as $row) {
                                                                    $i++;
                                                                    ?>

                                                                    <div class="highlight_strip_item highlight_strip_screenshot" id="thumb_screenshot_<?php echo $row['ImagesID']; ?>" >
                                                                        <img src="<?php echo base_url('Developer/Games_Picture/' . $row['ImagesID']); ?>"  width="115" height="65" >
                                                                    </div>

                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                    <div class="slider_ctn">
                                                        <div id="highlight_slider_left" class="slider_left"><span></span></div>
                                                        <div class="slider" id="highlight_slider">
                                                            <div class="slider_bg">
                                                            </div>
                                                            <div class="handle" style="position: absolute; left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div id="highlight_slider_right" class="slider_right"><span></span></div>
                                                    </div>
                                                    <script type="text/javascript">
                                                        $J(function () {
                                                            var player = new HighlightPlayer({
                                                                elemPlayerArea: 'highlight_player_area',
                                                                elemStrip: 'highlight_strip',
                                                                elemStripScroll: 'highlight_strip_scroll',
                                                                elemSlider: 'highlight_slider',
                                                                rgMovieFlashvars: rgMovieFlashvars,
                                                                rgScreenshotURLs: rgScreenshotURLs,
                                                                rgDefaultMovieFlashvars: rgCommonFlashVars
                                                            });

                                                            $J('#highlight_slider_right').click(function () {
                                                                player.Transition(true);
                                                            });
                                                            $J('#highlight_slider_left').click(function () {
                                                                player.TransitionBack(true);
                                                            });

                                                            if (window.location.hash)
                                                            {
                                                                var ssid = window.location.hash.substr(1);
                                                                player.HighlightScreenshot(ssid);
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>






                                <div class="queue_overflow_ctn">

                                    <div class="queue_ctn ">
                                        <div class="queue_actions_ctn">

                                            <?php
                                            if ($this->session->userdata('IsWishlist') == false) {
                                                ?>
                                                <div id="add_to_wishlist_area">
                                                    <a class="btnv6_blue_hoverfade btn_medium" href="<?php echo base_url('ProDetail/addToWishlist/' . $GamesID . '/' . $this->session->userdata('CustomerID')); ?>" data-tooltip-text="Get notified by email when your wishlisted items get released or are on sale">
                                                        <span>Add to your wishlist</span>
                                                    </a>
                                                </div>

                                                <?php
                                            } else {
                                                ?>

                                                <div id="add_to_wishlist_area_success" style="">
                                                    <a href="<?php echo base_url('wishlist'); ?>" class="btnv6_blue_hoverfade btn_medium queue_btn_active" data-tooltip-text="This product is already on your wishlist. Click to view your wishlist.">
                                                        <span><img src="https://steamstore-a.akamaihd.net/public/images/v6/ico/ico_selected.png" border="0">
                                                            On Wishlist</span>
                                                    </a>
                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <div id="add_to_wishlist_area_fail" style="display: none;">
                                                <b>Oops, sorry!</b>
                                            </div>


                                            <div style="clear: both;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page_content">
                                <!-- Right Column -->
                                <div class="rightcol game_meta_data">
                                    <div id="responsive_apppage_details_left_ctn"></div>
                                    <div id="responsive_apppage_details_right_ctn"></div>
                                    <div style="clear: both;"></div>

                                    <div>
                                        
                                     
                                    
                                    </div>

                                    <div><div class="block responsive_apppage_details_left">
                                            <a class="btnv6_blue_hoverfade btn_medium" href="#" onclick="ShowShareDialog();
                                                    return false;"><span>Share</span></a>
                                            <a class="btnv6_blue_hoverfade btn_medium" href="#" onclick="ShowEmbedWidget(683320);
                                                    return false;"><span>Embed</span></a>
                                            <a id="ReportAppBtn" class="btnv6_blue_hoverfade btn_medium" href="javascript:void(0)" onclick="ShowReportDialog(683320)"><span data-tooltip-text="Report this Product"><i class="ico16 reportv6"></i>&nbsp;</span></a>
                                        </div></div>

                                    <div><div class="block responsive_apppage_reviewblock">
                                            <div id="game_area_metascore">
                                                <div class="score high">
                                                    83									</div>
                                                <div class="logo"></div>
                                                <div class="wordmark">
                                                    <div class="metacritic">metacritic</div>
                                                    <div id="game_area_metalink"><a href="https://www.metacritic.com/game/pc/gris?ftag=MCD-06-10aaa1f" target="_blank">Read Critic Reviews</a> <img src="https://steamstore-a.akamaihd.net/public/images/ico/iconExternalLink.gif" border="0" align="bottom"></div>
                                                </div>
                                            </div>
                                            <div style="clear: both"></div>
                                        </div></div>



                                </div>
                                <!-- End Right Column -->


                                <div class="leftcol game_description_column">





                                    <div id="game_area_purchase">







                                        <!--[if lte IE 7]>
<style type="text/css">
.game_area_purchase_game_dropdown_right_panel .btn_addtocart { float: none; }
</style>
<![endif]-->


                                        <div class="game_area_purchase_game_wrapper">
                                            <div class="game_area_purchase_game">
                                                <form name="add_to_cart_195262" action="https://store.steampowered.com/cart/" method="POST">
                                                    <input type="hidden" name="snr" value="1_5_9__403">
                                                    <input type="hidden" name="action" value="add_to_cart">
                                                    <input type="hidden" name="sessionid" value="1c314071445718b429807be6">
                                                    <input type="hidden" name="subid" value="195262">
                                                </form>
                                                <div class="game_area_purchase_platform"><span class="platform_img win"></span><span class="platform_img mac"></span></div>
                                                <h1>Buy <?php echo $GamesName; ?></h1>

                                                <div class="game_purchase_action">
                                                    <div class="game_purchase_action_bg">
                                                        <div class="game_purchase_price price">
                                                            Rp <?php echo number_format($GamesPrice, 0, ',', ' '); ?>		
                                                        </div>
                                                        <div class="btn_addtocart">
                                                            <?php
                                                            $isAdded = false;
                                                            foreach ($this->cart->contents() as $items) {
                                                                if ($items['id'] == $GamesID) {
                                                                    $isAdded = true;
                                                                }
                                                            }

                                                            if ($isAdded) {
                                                                ?>
                                                                <a class="btnv6_green_white_innerfade btn_medium" href="<?php echo base_url('Cart'); ?>">
                                                                    <span>In Cart</span>
                                                                </a>
                                                            <?php } else {
                                                                ?>
                                                                <a class="btnv6_green_white_innerfade btn_medium" href="<?php echo base_url('ProDetail/addToCart/' . $GamesID); ?>">
                                                                    <span>Add to Cart</span>
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="game_area_dlc_section">

                                            <div class="game_area_dlc_list">

                                            </div>


                                        </div> <!-- game_area_dlc_section -->

                                    </div>
                                    <!-- game_area_purchase -->


                                    <div class="purchase_area_spacer">&nbsp;</div>


                                    <!-- Announcements block -->






                                    <div class="game_page_autocollapse_ctn">
                                        <div class="game_page_autocollapse" style="max-height: none;">

                                        </div>
                                        <div class="game_page_autocollapse_fade">
                                            <div class="game_page_autocollapse_readmore">
                                                READ MORE
                                            </div>

                                        </div>

                                    </div>
                                    <div class="game_page_autocollapse_ctn">
                                        <div class="game_page_autocollapse" style="max-height: none;">
                                            <div id="game_area_description" class="game_area_description">
                                                <h2>About This Game</h2>
                                                <?php echo $GamesDesc ?>		

                                            </div>
                                            <div class="game_page_autocollapse_fade">
                                                <div class="game_page_autocollapse_readmore">READ MORE</div>

                                            </div>

                                        </div>



                                        <div class="game_page_autocollapse_ctn"><div class="game_page_autocollapse sys_req" style="max-height: none;">
                                                <h2>System Requirements</h2>
                                                <div class="sysreq_tabs">
                                                    <div class="sysreq_tab active" data-os="win">
                                                        General			
                                                    </div>
                                                    <div style="clear: left;"></div>
                                                </div>
                                                <div class="sysreq_contents">
                                                    <div class="game_area_sys_req sysreq_content active" data-os="win">
                                                        <div class="game_area_sys_req_full">
                                                            <ul>
                                                                <strong>Minimum:</strong><br>
                                                                <ul class="bb_ul">
                                                                    <li><strong>OS:</strong> <?php echo $SyReqOS ?><br></li>
                                                                    <li><strong>Processor:</strong><?php echo $SyReqCPU ?> <br></li>
                                                                    <li><strong>Memory:</strong><?php echo $SyReqRAM ?> <br></li>
                                                                    <li><strong>Graphics:</strong><?php echo $SyReqVGA ?> <br></li>
                                                                    <li><strong>Storage:</strong><?php echo $SyReqHDD ?> <br></li>
                                                                    <li><strong>DirectX:</strong><?php echo $SyReqDirectX ?></li>
                                                                </ul>		
                                                            </ul>
                                                        </div>
                                                        <div style="clear: both;"></div>
                                                    </div>

                                                </div>
                                            </div><div class="game_page_autocollapse_fade"><div class="game_page_autocollapse_readmore">READ MORE</div></div></div>
                                        <script type="text/javascript">
                                            $J(function () {
                                                var $Tabs = $J('.sysreq_tab');
                                                var $Content = $J('.sysreq_content');

                                                $Tabs.click(function () {
                                                    var $Tab = $J(this);
                                                    $Tabs.removeClass('active');
                                                    $Tab.addClass('active');

                                                    $Content.removeClass('active');
                                                    $Content.filter('[data-os=' + $Tab.data('os') + ']').addClass('active');

                                                    $Content.trigger('gamepage_autocollapse_expand');
                                                });
                                            });
                                        </script>

                                        <div class="game_page_autocollapse_ctn"><div class="game_page_autocollapse" style="max-height: none;">
                                                <div id="game_area_legal">
                                                    <p>Copyright 2018 Nomada Studio. All Rights Reserved.</p>
                                                </div>
                                            </div><div class="game_page_autocollapse_fade"><div class="game_page_autocollapse_readmore">READ MORE</div></div></div>








                                    </div>

                                    <div style="clear: both;"></div>
                                </div>


                                <div class="review_ctn">
                                    <div class="page_content">

                                        <div id="app_reviews_hash" class="app_reviews_area">
                                            <div class="user_reviews_header no_bottom_margin">
                                                Customer reviews		</div>

                                            <input type="hidden" id="review_appid" value="683320">
                                            <input type="hidden" id="review_default_day_range" value="30">
                                            <input type="hidden" id="review_start_date" value="-1">
                                            <input type="hidden" id="review_end_date" value="-1">
                                            <input type="hidden" id="review_summary_num_positive_reviews" value="2839">
                                            <input type="hidden" id="review_summary_num_reviews" value="2929">

                                            <div id="review_recent_events_container">
                                                <div class="review_recent_events_icon"><img src="https://steamstore-a.akamaihd.net/public/images/v6/app/review_alert.png"></div>
                                                <div class="recent_review_title">
                                                    <span id="recent_review_event_title">High Volume of Reviews Detected:</span> <span class="recent_review_event_dates" id="recent_review_event_dates"></span>
                                                </div>
                                                <span class="btnv6_white_transparent btn_small_thin"><span id="filter_reviews_exclude_event_btn">Exclude</span></span>
                                                <span class="recent_review_event_text">&nbsp;or&nbsp;</span>
                                                <span class="btnv6_white_transparent btn_small_thin"><span id="filter_reviews_to_event_btn">View Only</span></span>
                                                <span class="recent_review_event_text" id="recent_review_event_text"></span>
                                            </div>



                                        </div>

                                        <div id="review_selected_filters"></div>

                                        <div id="LoadingMoreReviewsall" style="display: none" class="loading_more_reviews">
                                            <img src="https://steamstore-a.akamaihd.net/public/shared/images/throbber.gif" class="loading_more_reviews_throbber">
                                            Loading reviews...		</div>
                                        <div id="LoadingMoreReviewsrecent" style="display: none" class="loading_more_reviews">
                                            <img src="https://steamstore-a.akamaihd.net/public/shared/images/throbber.gif" class="loading_more_reviews_throbber">
                                            Loading reviews...		</div>
                                        <div id="LoadingMoreReviewspositive" style="display: none" class="loading_more_reviews">
                                            <img src="https://steamstore-a.akamaihd.net/public/shared/images/throbber.gif" class="loading_more_reviews_throbber">
                                            Loading reviews...		</div>
                                        <div id="LoadingMoreReviewsnegative" style="display: none" class="loading_more_reviews">
                                            <img src="https://steamstore-a.akamaihd.net/public/shared/images/throbber.gif" class="loading_more_reviews_throbber">
                                            Loading reviews...		</div>
                                        <div id="LoadingMoreReviewsfunny" style="display: none" class="loading_more_reviews">
                                            <img src="https://steamstore-a.akamaihd.net/public/shared/images/throbber.gif" class="loading_more_reviews_throbber">
                                            Loading reviews...		</div>


                                        <div id="Reviews_positive" style="display: none" class="user_reviews_container leftcol"></div>
                                        <div id="Reviews_negative" style="display: none" class="user_reviews_container leftcol"></div>
                                        <div id="Reviews_recent" style="display: none" class="user_reviews_container leftcol"></div>
                                        <div id="Reviews_funny" style="display: none" class="user_reviews_container leftcol"></div>
                                        <div id="Reviews_all" style="display: none" class="user_reviews_container leftcol"></div>
                                        <div id="Reviews_summary" class="user_reviews_container" style="display: block;"><div id="Reviewssummary0">

                                                <div class="leftcol">
                                                    <div class="user_reviews_sub_header">Most Helpful Reviews&nbsp;
                                                        <span class="user_reviews_most_helpful_days">In the past 7 days</span>
                                                    </div>

                                                    <div class="review_box  partial">
                                                        <div id="ReviewContentsummary48004644">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/id/ItsMeAmory/">
                                                                        <div class="playerAvatar offline" data-miniprofile="60927203">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/34/3490ddd11224ab339117bb50e94389d96c91cdfb.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/34/3490ddd11224ab339117bb50e94389d96c91cdfb.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/34/3490ddd11224ab339117bb50e94389d96c91cdfb_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/id/ItsMeAmory/" data-miniprofile="60927203">ItsMeAmory</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/id/ItsMeAmory/games/?tab=all">595 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/id/ItsMeAmory/recommended/">22 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/id/ItsMeAmory/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">3.5 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 1 January									</div>


                                                                <div class="content">
                                                                    A captivating story of loss, depression, and healing, Gris is a pinnacle example of "Games as Art". The visual style and presentation is breathtaking, and Gris achieves an emotional depth with no words that many games cannot achieve with hours of dialogue. The controls are absolutely spot-on, and there's plenty of extra secrets and hidden gems laying around for any completionist to enjoy. The game is brief, about 3-5 hours (your mileage will vary), but for the price of a movie ticket and popcorn Gris offers an experience on par or exceeding almost anything on the silver screen.<br><br>Gris is a simple but brilliantly told story, one that will resonate with almost anyone. If you've ever experienced loss, depression, grief, or any other dark cloud in your life, I implore you to play this game. If ever your world seems to be only shades of black and grey, Gris may help bring color back into your world.<br><br>Keep the song alive.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48004644', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48004644')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48004644"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48004644')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48004644"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48004644', 1, 'RecommendationVoteTagBtnsummary48004644_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48004644_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    67 people found this review helpful										<br>2 people found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48028307">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/id/InFarDream/">
                                                                        <div class="playerAvatar online" data-miniprofile="33510253">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/85/858a097a426297390d6c256125233609a4bc6b32.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/85/858a097a426297390d6c256125233609a4bc6b32.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/85/858a097a426297390d6c256125233609a4bc6b32_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/id/InFarDream/" data-miniprofile="33510253">InFar</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/id/InFarDream/games/?tab=all">660 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/id/InFarDream/recommended/">23 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/id/InFarDream/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">2.9 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 2 January									</div>


                                                                <div class="content">
                                                                    More art than game, but it' ok.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48028307', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48028307')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48028307"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48028307')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48028307"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48028307', 1, 'RecommendationVoteTagBtnsummary48028307_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48028307_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    48 people found this review helpful										<br>9 people found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box  partial">
                                                        <div id="ReviewContentsummary48154010">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/id/reneberwanger/">
                                                                        <div class="playerAvatar online" data-miniprofile="119949012">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/78/783f546f5648d295b2e23f1d20dc57e6e003ec38.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/78/783f546f5648d295b2e23f1d20dc57e6e003ec38.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/78/783f546f5648d295b2e23f1d20dc57e6e003ec38_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/id/reneberwanger/" data-miniprofile="119949012">reneberwanger</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/id/reneberwanger/games/?tab=all">57 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/id/reneberwanger/recommended/">11 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/id/reneberwanger/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">4.6 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 7 January									</div>


                                                                <div class="content">
                                                                    I just finished the game.<br><br>I'm completely shocked. The game transcends the state of the art of a game and becomes a media never seen before.<br><br>In other words, it's like the evolution of a movie, orchestrating everything together. The music, the direction of art, and a story told only with sound and color. Without a line of dialogue or text.<br><br>I recommend it to everyone as it is an experience never experienced before.<br><br>Congratulations to the developers, as you have certainly invented a new entertainment format.<br><br>You will surely win the game of the year.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48154010', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48154010')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48154010"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48154010')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48154010"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48154010', 1, 'RecommendationVoteTagBtnsummary48154010_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48154010_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    24 people found this review helpful										<br>2 people found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48180171">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/id/douyu156277/">
                                                                        <div class="playerAvatar online" data-miniprofile="409389245">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/14/14e000b9d8b4badcf60f72ccd0c97509981afb55.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/14/14e000b9d8b4badcf60f72ccd0c97509981afb55.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/14/14e000b9d8b4badcf60f72ccd0c97509981afb55_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/id/douyu156277/" data-miniprofile="409389245">肖邦</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/id/douyu156277/games/?tab=all">152 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/id/douyu156277/recommended/">5 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/id/douyu156277/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product activated via Steam key" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_key.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">4.6 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    F12 F12 F12 F12 F12					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48180171', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48180171')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48180171"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48180171')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48180171"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48180171', 1, 'RecommendationVoteTagBtnsummary48180171_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48180171_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    11 people found this review helpful										<br>27 people found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48089411">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/profiles/76561198019865146/">
                                                                        <div class="playerAvatar offline" data-miniprofile="59599418">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e4/e48fe13a8d6326610f01843c7ca71ce95295ae77.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e4/e48fe13a8d6326610f01843c7ca71ce95295ae77.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e4/e48fe13a8d6326610f01843c7ca71ce95295ae77_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/profiles/76561198019865146/" data-miniprofile="59599418">Immadude</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/profiles/76561198019865146/games/?tab=all">211 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/profiles/76561198019865146/recommended/">2 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/profiles/76561198019865146/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product activated via Steam key" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_key.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">6.2 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 4 January									</div>


                                                                <div class="content">
                                                                    Gris is not a challenging game by any means. There isn't a way to even fail. It's a pleasant and relaxing experience. <br>Art style is the obvious standout here and it really is quite a treat. Any portion of the game would make a nice screenshot. The music is also great and holds its own. <br>Gameplay is smooth, basic and simple 2D platforming. The camera zooms in and out here and there, but it's done well. Never feels jarring or interfering. <br><br>Overall it's a solidly crafted game. If you're looking for a game that is quick and relaxing, give this one a go!<br>					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48089411', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48089411')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48089411"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48089411')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48089411"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48089411', 1, 'RecommendationVoteTagBtnsummary48089411_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48089411_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    9 people found this review helpful														</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48106231">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/profiles/76561198020742424/">
                                                                        <div class="playerAvatar offline" data-miniprofile="60476696">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/41/413249832f9017f1bee966326cf0e1b804dcae18.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/41/413249832f9017f1bee966326cf0e1b804dcae18.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/41/413249832f9017f1bee966326cf0e1b804dcae18_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/profiles/76561198020742424/" data-miniprofile="60476696">Kошечка</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/profiles/76561198020742424/games/?tab=all">147 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/profiles/76561198020742424/recommended/">1 review</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/profiles/76561198020742424/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">1.6 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 5 January									</div>


                                                                <div class="content">
                                                                    Buy this game.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48106231', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48106231')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48106231"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48106231')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48106231"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48106231', 1, 'RecommendationVoteTagBtnsummary48106231_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48106231_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    14 people found this review helpful										<br>4 people found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48180732">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/id/portal23/">
                                                                        <div class="playerAvatar offline" data-miniprofile="184366572">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/6f/6f982210fe9a377fdb74d9a836e4d670f0fd68fc.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/6f/6f982210fe9a377fdb74d9a836e4d670f0fd68fc.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/6f/6f982210fe9a377fdb74d9a836e4d670f0fd68fc_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/id/portal23/" data-miniprofile="184366572">portal23</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/id/portal23/games/?tab=all">116 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/id/portal23/recommended/">5 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/id/portal23/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">2.1 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    First time I can truly say that this 4K monitor was a worthwhile purchase. I haven't finished the game yet but it is absolutely gorgeous and I'm a sucker for video games that push the medium in this way. I'm that "gamer" who is okay with games that aren't so heavy on actual gameplay.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48180732', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48180732')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48180732"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48180732')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48180732"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48180732', 1, 'RecommendationVoteTagBtnsummary48180732_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48180732_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    3 people found this review helpful										<br>1 person found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48177040">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/id/retorra/">
                                                                        <div class="playerAvatar online" data-miniprofile="87305477">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/60/600f7f07fee891d7852e3d66f1d6a6c533ff8d2f.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/60/600f7f07fee891d7852e3d66f1d6a6c533ff8d2f.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/60/600f7f07fee891d7852e3d66f1d6a6c533ff8d2f_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/id/retorra/" data-miniprofile="87305477">retorra</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/id/retorra/games/?tab=all">34 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/id/retorra/recommended/">2 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/id/retorra/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product activated via Steam key" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_key.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">4.6 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    Probably the most beautiful and atmospheric game I've ever played.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48177040', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48177040')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48177040"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48177040')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48177040"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48177040', 1, 'RecommendationVoteTagBtnsummary48177040_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48177040_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    2 people found this review helpful										<br>1 person found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48028860">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/profiles/76561198076636750/">
                                                                        <div class="playerAvatar online" data-miniprofile="116371022">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a2/a2e07381fce61eba5604f0e4e71eb28c3f1bb6a9.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a2/a2e07381fce61eba5604f0e4e71eb28c3f1bb6a9.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a2/a2e07381fce61eba5604f0e4e71eb28c3f1bb6a9_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/profiles/76561198076636750/" data-miniprofile="116371022">Levophed</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/profiles/76561198076636750/games/?tab=all">42 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/profiles/76561198076636750/recommended/">2 reviews</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/profiles/76561198076636750/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">4.6 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 2 January									</div>


                                                                <div class="content">
                                                                    The art and atmosphere are absolutely gorgeous in this game. The puzzles are perfectly balanced so that it's intriguing but never frustrating. The introductions to new abilities are seamless so the player doesn't get lost but still gets the fun of discovering how to use the mechanics together themselves. The care for the details, beautiful art style, fluid platforming, and moving narrative make it one of the best games I've ever played.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48028860', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48028860')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48028860"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48028860')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48028860"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48028860', 1, 'RecommendationVoteTagBtnsummary48028860_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48028860_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    2 people found this review helpful														</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box ">
                                                        <div id="ReviewContentsummary48162932">


                                                            <div class="leftcol">
                                                                <div class="avatar">
                                                                    <a href="https://steamcommunity.com/profiles/76561198396427239/">
                                                                        <div class="playerAvatar offline" data-miniprofile="436161511">
                                                                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9c/9c25b5c42db990aed494f38eedb605b25f2d7007.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9c/9c25b5c42db990aed494f38eedb605b25f2d7007.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9c/9c25b5c42db990aed494f38eedb605b25f2d7007_medium.jpg 2x">						</div>
                                                                    </a>
                                                                </div>
                                                                <div class="persona_name"><a href="https://steamcommunity.com/profiles/76561198396427239/" data-miniprofile="436161511">aquariusic</a></div>
                                                                <div class="num_owned_games"><a href="https://steamcommunity.com/profiles/76561198396427239/games/?tab=all">11 products in account</a></div>
                                                                <div class="num_reviews"><a href="https://steamcommunity.com/profiles/76561198396427239/recommended/">1 review</a></div>
                                                            </div>

                                                            <div class="rightcol">
                                                                <a href="https://steamcommunity.com/profiles/76561198396427239/recommended/683320/" class="vote_header tooltip" data-tooltip-text="See Full Review">
                                                                    <div class="thumb">
                                                                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                    </div>

                                                                    <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">

                                                                    <div class="title ellipsis">Recommended</div>
                                                                    <div class="hours ellipsis">9.7 hrs on record</div>
                                                                </a>


                                                                <div class="postedDate">Posted: 7 January									</div>


                                                                <div class="content">
                                                                    This game has brought me to tears. The art style and presentation of the entire game along with the emotionally drawing music within the background completely achieves an emotional depth that more dialogue oriented games can't achieve. It is a relaxing 2D platform game that doesn't take too much time to complete, and evokes the different stages of grief while the player makes their way through a beautiful puzzle platformer					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48162932', 'summary');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Was this review helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48162932')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnsummary48162932"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48162932')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnsummary48162932"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48162932', 1, 'RecommendationVoteTagBtnsummary48162932_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnsummary48162932_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                                <div class="vote_info">
                                                                    3 people found this review helpful										<br>1 person found this review funny				</div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rightcol recent_reviews">
                                                    <div class="user_reviews_sub_header">Recently Posted</div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48186068">


                                                            <a href="https://steamcommunity.com/id/SirNoobsSultan/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="247566621">SirNoobs</span></div>
                                                                <div class="hours ellipsis"> 3.8 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    This is the most beautiful games that i have ever played however storywise i am quite lost on what is even going on xD but overall i would recommand this game, the art itself makes the game worth it.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48186068', 'recent_short');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48186068')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48186068"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48186068')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48186068"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48186068', 1, 'RecommendationVoteTagBtnrecent_short48186068_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48186068_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48184966">


                                                            <a href="https://steamcommunity.com/profiles/76561198134147713/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="173881985">Solenopsis Invicta</span></div>
                                                                <div class="hours ellipsis"> 0.3 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    I love the surrealistic artstyle. It's refreshing and gorgeous.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48184966', 'recent_short');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48184966')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48184966"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48184966')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48184966"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48184966', 1, 'RecommendationVoteTagBtnrecent_short48184966_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48184966_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48184001">


                                                            <a href="https://steamcommunity.com/id/PsKehf/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="344508027">Skull Kid</span></div>
                                                                <div class="hours ellipsis"> 1.8 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    Peaceful, calming, and soothing with beautiful visuals and amazing music. cant wait to finish game but i refuse to rush it. Worth the purchase id say.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48184001', 'recent_short');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48184001')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48184001"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48184001')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48184001"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48184001', 1, 'RecommendationVoteTagBtnrecent_short48184001_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48184001_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48183685">


                                                            <a href="https://steamcommunity.com/id/iHZRD/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="882403430">iHZRD</span></div>
                                                                <div class="hours ellipsis"> 8.4 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    Worth every dollar<br>اللعبة تستحق كل دولار جدا جميلة وهادئة					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48183685', 'recent_short');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48183685')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48183685"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48183685')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48183685"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48183685', 1, 'RecommendationVoteTagBtnrecent_short48183685_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48183685_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48183618">


                                                            <a href="https://steamcommunity.com/id/max5hi/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product activated via Steam key" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_key.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="324064093">max5hi</span></div>
                                                                <div class="hours ellipsis"> 7.4 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    BEAUTIFUL game.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48183618', 'recent_short');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48183618')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48183618"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48183618')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48183618"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48183618', 1, 'RecommendationVoteTagBtnrecent_short48183618_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48183618_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48182795">


                                                            <a href="https://steamcommunity.com/profiles/76561198449025218/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="488759490">johnnycabbage</span></div>
                                                                <div class="hours ellipsis"> 0.5 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    love is everything.<br><br>i beat it.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48182795', 'recent_short');
                                                                            return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48182795')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48182795"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48182795')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48182795"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48182795', 1, 'RecommendationVoteTagBtnrecent_short48182795_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48182795_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short partial">
                                                        <div id="ReviewContentrecent_short48180237">


                                                            <a href="https://steamcommunity.com/profiles/76561197971119363/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsDown_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="10853635">Daki</span></div>
                                                                <div class="hours ellipsis"> 1.2 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    I want to like this game. It has such a unique and fresh look, and a nice tone. But much of the style works against the mechanics of the game.<br><br>Moving the character around the world is a chore. There are regular inconsistencies with what can be walked behind and what cannot. Often times there are two walls present on screen at the same time that look identical. One can be walked behind or in front of, and the other cannot. There is no way to tell other than trying them all. This incosisentency is worsened by the game's flat art style. Some areas have invisible walls. Sometimes elements that are clearly in the foreground (they parallax at a higher speed) block you, but other times they don't. Sometimes you can walk up a 60 degree slope. Sometimes you can't walk up a 45 degree slope. It's a mess.<br><br>And walking around the world is basically all you do in this game. There are some platforming challenges, but they are all extremely simple.<br><br>Early on the game rewards you for exploring the area. So you learn to walk in the less obvious direction so you don't miss something. But then multiple times later on as I was doing this, a scripted event happens (e.g. the floor collapses behind me) and I can't go back, so I miss things. Which is exactly what I was trying to avoid by doing what the game taught me to do. It's frustrating. You can't reload, or immediately go back.<br><br>I think this game is relying heavily on its unique look to stand out as it is mechanically weak. But despite many assets looking crisp and pretty, there are compression artifacts and jagged edges throughout the game. All over. It seems like the maximum resolution of the world is actually 1080, even though you can set it higher. Fonts become more crisp, but that is about it.					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48180237', 'recent_short'); return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48180237')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48180237"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48180237')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48180237"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48180237', 1, 'RecommendationVoteTagBtnrecent_short48180237_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48180237_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="review_box short">
                                                        <div id="ReviewContentrecent_short48178876">


                                                            <a href="https://steamcommunity.com/profiles/76561198167635059/recommended/683320/" class="short_header tooltip" data-tooltip-text="See Full Review">
                                                                <img class="review_source tooltip" data-tooltip-text="Product purchased directly from Steam" src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_review_steam.png">
                                                                <div class="thumb">
                                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                                </div>
                                                                <div class="persona_name"><span data-miniprofile="207369331">CoochieLover</span></div>
                                                                <div class="hours ellipsis"> 3.7 hrs</div>
                                                            </a>


                                                            <div class="shortcol">


                                                                <div class="postedDate">Posted: 8 January									</div>


                                                                <div class="content">
                                                                    Pure art					<div class="gradient"></div>
                                                                </div>

                                                                <div class="posted">
                                                                    <div class="view_more"><a href="#" onclick="UserReviewShowMore('48178876', 'recent_short'); return false;">Read More</a></div>
                                                                    &nbsp;
                                                                </div>

                                                                <div class="hr"></div>
                                                                <div class="control_block">

                                                                    <span class="text">Helpful?</span>

                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteUp('48178876')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteUpBtnrecent_short48178876"><span><i class="ico16 thumb_upv6"></i> Yes</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteDown('48178876')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteDownBtnrecent_short48178876"><span><i class="ico16 thumb_downv6"></i> No</span></a>
                                                                    <a href="javascript:void(0)" onclick="UserReviewVoteTag('48178876', 1, 'RecommendationVoteTagBtnrecent_short48178876_1')" class="btnv6_grey_black btn_small_thin ico_hover " id="RecommendationVoteTagBtnrecent_short48178876_1"><span><i class="ico16 funny"></i> Funny</span></a>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear:left;"></div>

                                                <div id="ViewAllReviewssummary" class="view_all_reviews_btn leftcol">
                                                    <a href="https://steamcommunity.com/app/683320/reviews/?browsefilter=toprated&amp;snr=1_5_100010_">Browse all 3,338 reviews</a>
                                                </div>

                                                <div style="clear: both"></div>
                                            </div></div>
                                        <div id="Reviews_loading" class="user_reviews_container" style="display: none;">

                                        </div>
                                        <div style="clear: left"></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="hover game_hover" id="global_hover" style="display: none; left: 0; top: 0;">
                        <div class="game_hover_box hover_box">
                            <div class="content" id="global_hover_content">
                                <div id="hover_app_24420" style="display: none;">
                                    <div class="hover_top_area" style="display: none;">
                                    </div>
                                    <h4>Aquaria</h4>
                                    <div class="hover_release"> Released: 16 Dec, 2008 </div>


                                    <!-- emit count of things inside the package/bundle if we're showing screenshots; normally this would be in the description -->

                                    <div class="hover_screenshots">
                                        <div class="screenshot" style="background-image: url( https://steamcdn-a.akamaihd.net/steam/apps/24420/0000006864.600x338.jpg?t=1447351632  )">

                                        </div>
                                        <div class="screenshot" style="background-image: url( https://steamcdn-a.akamaihd.net/steam/apps/24420/0000006832.600x338.jpg?t=1447351632  )">

                                        </div>
                                        <div class="screenshot" style="background-image: url( https://steamcdn-a.akamaihd.net/steam/apps/24420/0000006833.600x338.jpg?t=1447351632  )">

                                        </div>
                                        <div class="screenshot" style="background-image: url( https://steamcdn-a.akamaihd.net/steam/apps/24420/0000006834.600x338.jpg?t=1447351632  )">

                                        </div>
                                    </div>

                                    <div class="hover_body">
                                        <div class="hover_review_summary">
                                            <div class="title">Overall user reviews:</div>
                                            <span class="game_review_summary positive">Very Positive</span>
                                            (477 reviews)
                                        </div>
                                        <div style="clear: left;"></div>
                                    </div>
                                    <div class="hover_body">
                                        User tags:			<div class="hover_tag_row">
                                            <div class="app_tag">Metroidvania</div><div class="app_tag">Indie</div><div class="app_tag">Female Protagonist</div><div class="app_tag">Exploration</div><div class="app_tag">Great Soundtrack</div><div class="app_tag">Adventure</div><div class="app_tag">Underwater</div><div class="app_tag">2D</div><div class="app_tag">Singleplayer</div><div class="app_tag">Beautiful</div><div class="app_tag">Action</div><div class="app_tag">Fantasy</div><div class="app_tag">Atmospheric</div><div class="app_tag">Platformer</div><div class="app_tag">Open World</div><div class="app_tag">Side Scroller</div><div class="app_tag">Story Rich</div><div class="app_tag">Philisophical</div><div class="app_tag">Puzzle</div><div class="app_tag">Action-Adventure</div>			</div>
                                    </div>





                                </div></div>
                        </div>
                        <div class="hover_arrow_left"></div>
                        <div class="hover_arrow_right"></div>
                    </div>
                    <div id="EmbedModal" style="display: none">
                        <div id="widget_create">
                            <p>You can use this widget-maker to generate a bit of HTML that can be embedded in your website to easily allow customers to purchase this game on Steam.</p>

                            <p class="small">Enter up to 375 characters to add a description to your widget:</p>
                            <textarea name="w_text" placeholder="Gris is a hopeful young girl lost in her own world, dealing with a painful experience in her life. Her journey through sorrow is manifested in her dress, which grants new abilities to better navigate her faded reality." maxlength="375"></textarea>

                            <div class="buttoncontainer">
                                <a class="btnv6_blue_hoverfade btn_medium " href="#" onclick="CreateWidget(683320); return false;"><span>Create widget</span></a>
                            </div>
                        </div>
                        <div id="widget_finished" style="display: none;">
                            <div id="widget_container"></div>

                            <p class="small">Copy and paste the HTML below into your website to make the above widget appear</p>
                            <textarea id="widget_code" style=""></textarea>
                        </div>

                    </div>

                    <div id="ShareModal" style="display: none">
                        <div class="share">&nbsp; <a href="https://store.steampowered.com/share/facebook/app/683320" target="_blank" rel="noreferrer" title="Share on Facebook"><img src="https://steamstore-a.akamaihd.net/public/images/v6/social/facebook.png"></a>&nbsp; <a href="https://store.steampowered.com/share/twitter/app/683320" target="_blank" rel="noreferrer" title="Share on Twitter"><img src="https://steamstore-a.akamaihd.net/public/images/v6/social/twitter.png"></a>&nbsp; <a href="https://store.steampowered.com/share/reddit/app/683320" target="_blank" rel="noreferrer" title="Share on Reddit"><img src="https://steamstore-a.akamaihd.net/public/images/v6/social/reddit.png"></a></div></div>

                    <div id="app_tagging_modal" class="app_tag_modal " style="display: none;">
                        <div class="app_tag_modal_content">
                            <div class="app_tag_modal_seperator"></div>
                            <div class="app_tag_modal_left">
                                <h2>Popular user-defined tags for this product:<span class="app_tag_modal_tooltip" data-tooltip-text="These are tags applied to the product by the most users.  You can click a tag to find other products with that tag applied.  Or, you can hit the plus symbol for any existing tags to increase that tag's popularity on this product.">(?)</span></h2>
                                <div class="app_tags popular_tags">
                                </div>
                            </div>
                            <div class="app_tag_modal_right">
                                <h2>Tags you've applied to this product:<span class="app_tag_modal_tooltip" data-tooltip-text="These are tags you've applied to this product.">(?)</span></h2>
                                <div class="app_tags your_tags">
                                </div>
                                <p>Enter a new tag in English:</p>
                                <p class="small">Suitable tags should be terms that other users would find useful to browse by.</p>
                                <form id="app_tag_form" name="app_tag_form">
                                    <div class="app_tag_form_ctn">
                                        <button class="btnv6_blue_hoverfade btn_medium" type="submit"><span>Add</span></button>
                                        <div class="gray_bevel for_text_input fullwidth">
                                            <input type="text" name="tag" value="" autocomplete="off" placeholder="Enter a tag">
                                        </div>
                                    </div>
                                </form>
                                <div class="previous_tags_ctn" style="display: none;">
                                    <p>Apply a tag you've used on other products:</p>
                                    <div class="app_tags previous_tags">
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $J(function () {
                            InitAppTagModal(683320,
                                    [{"tagid": 4166, "name": "Atmospheric", "count": 76, "browseable": true}, {"tagid": 492, "name": "Indie", "count": 71, "browseable": true}, {"tagid": 21, "name": "Adventure", "count": 63, "browseable": true}, {"tagid": 1756, "name": "Great Soundtrack", "count": 61, "browseable": true}, {"tagid": 5411, "name": "Beautiful", "count": 54, "browseable": true}, {"tagid": 7208, "name": "Female Protagonist", "count": 53, "browseable": true}, {"tagid": 6815, "name": "Hand-drawn", "count": 43, "browseable": true}, {"tagid": 1625, "name": "Platformer", "count": 43, "browseable": true}, {"tagid": 4182, "name": "Singleplayer", "count": 31, "browseable": true}, {"tagid": 1742, "name": "Story Rich", "count": 29, "browseable": true}, {"tagid": 3871, "name": "2D", "count": 26, "browseable": true}, {"tagid": 1710, "name": "Surreal", "count": 22, "browseable": true}, {"tagid": 5537, "name": "Puzzle-Platformer", "count": 22, "browseable": true}, {"tagid": 5900, "name": "Walking Simulator", "count": 16, "browseable": true}, {"tagid": 1628, "name": "Metroidvania", "count": 5, "browseable": true}],
                                    [],
                                    "1_5_9__410",
                                    "1_5_9__411",
                                    null);

                            if (typeof GDynamicStore != 'undefined')
                                GDynamicStore.FixupNamePortion();
                        });
                    </script>

                </div>	<!-- responsive_page_legacy_content -->

                <div id="footer_spacer" class=""></div>
                <div id="footer" class="">
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
                        <div id="footer_logo_steam"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_steam_footer.png" alt="Valve Software" border="0"></div>

                        <div id="footer_logo"><a href="http://www.valvesoftware.com" target="_blank" rel="noreferrer"><img src="https://steamstore-a.akamaihd.net/public/images/v6/logo_valve_footer.png" alt="Valve Software" border="0"></a></div>
                        <div id="footer_text">
                            <div>© 2019 Valve Corporation.  All rights reserved.  All trademarks are property of their respective owners in the US and other countries.</div>
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

        <div class="miniprofile_hover" style="display: none;"><div class="shadow_ul"></div><div class="shadow_top"></div><div class="shadow_ur"></div><div class="shadow_left"></div><div class="shadow_right"></div><div class="shadow_bl"></div><div class="shadow_bottom"></div><div class="shadow_br"></div><div class="miniprofile_hover_inner shadow_content"></div><div class="hover_arrow left miniprofile_arrow"><div class="miniprofile_arrow_inner"></div></div><div class="hover_arrow right miniprofile_arrow"><div class="miniprofile_arrow_inner"></div></div></div><input id="ext-version" type="hidden" value="1.4.1"><div id="review_histogram_tooltip"></div>


    </div>

</body>

</html>