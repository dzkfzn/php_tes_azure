<html class=" responsive" lang="en"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="theme-color" content="#171a21">
        <title>Purchase</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">


        <link href="https://steamstore-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_global.css?v=ZDQlNd7AVFLY" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/shared/css/buttons.css?v=g4vF5QlH7C0a" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/store.css?v=SMC4MR4nk2VO" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/cart.css?v=Yv0DRsa8Z8bx" rel="stylesheet" type="text/css">
        <link href="https://steamstore-a.akamaihd.net/public/css/v6/steamaccount.css?v=YqNIj0d9c2x-" rel="stylesheet" type="text/css">
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
            ga('set', 'dimension3', 'checkout');
            ga('set', 'dimension4', "checkout\/DefaultAction");
            ga('send', 'pageview');
        </script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU"></script>
        <script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/tooltip.js?v=.vG8yiuBTGwkE"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_global.js?v=UR9qRb-0UZlx&amp;l=english"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/main.js?v=23lDubNuVAN4&amp;l=english"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/prototype-1.7.js?v=.a38iP7Khdmyy"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/scriptaculous/_combined.js?v=N9x7GFelaFEb&amp;l=english&amp;load=effects,controls,slider"></script>

        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/dynamicstore.js?v=I8FhuxJq0BZy&amp;l=english"></script>


        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function (event) {
                $J.data(document, 'x_readytime', new Date().getTime());
                $J.data(document, 'x_oldref', GetNavCookie());
                SetupTooltips({tooltipCSSClass: 'store_tooltip'});
            });
        </script><script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shipping.js?v=BGV5IEzAkz2B&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/checkout.js?v=Yo0CIFZhGRRX&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/dselect.js?v=yT8Q5U2-O4wX&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/javascript/submitonenter.js?v=_wO1TUaI5fl-&amp;l=english"></script>
        <script type="text/javascript" src="https://steamstore-a.akamaihd.net/public/shared/javascript/shared_responsive_adapter.js?v=TbBMCK37KgCo&amp;l=english"></script>

        <meta name="twitter:card" content="summary_large_image">

        <meta name="twitter:site" content="@steam_games">

        <meta property="og:title" content="Purchase">
        <meta property="twitter:title" content="Purchase">
        <meta property="fb:app_id" content="105386699540688">
        <meta property="og:site" content="Steam">


        <link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <link rel="image_src" href="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <meta property="og:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <meta name="twitter:image" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">
        <meta property="og:image:secure" content="https://steamstore-a.akamaihd.net/public/shared/images/responsive/share_steam_logo.png">




    <body class="v6 cart_page checkout responsive_page" style="">

        <?php
        $taxFee = $this->cart->total() * 0.05;
        $grandTotal = $this->cart->total() + $taxFee;
        ?>



        <div class="responsive_page_frame no_header">


            <div class="responsive_local_menu_tab">

            </div>

            <div class="responsive_page_menu_ctn localmenu">
                <div class="responsive_page_menu" id="responsive_page_local_menu">
                    <div class="localmenu_content">
                    </div>
                </div>
            </div>




            <div class="responsive_page_content_overlay">

            </div>

            <div class="responsive_fixonscroll_ctn nonresponsive_hidden no_menu">
            </div>

            <div class="responsive_page_content">

                <div id="responsive_store_nav_ctn"></div>
                <div class="responsive_page_template_content">

                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                    <script type="text/javascript">
            var g_sessionID = "9b9d67d675da28913730322a";
            var g_bIsInClientOrOverlay = false;
            var g_bIsInOverlay = false;
            var g_bIsSendGiftForm = false;
            var g_bRequiresShipping = false;
            var g_bIsGiftForm = false;
            var g_initialTab = 'payment_info';
            var g_bIsUpdateBillingInfoForm = false;
            var g_bPurchaseContainsSubscription = false;
            var g_bSkipAddressRequirementForPayPal = true;
            var g_bEnableCachedPayPalCredentials = true;
            var g_bEnableIBANForGiroPay = true;
            var g_nItemsForGifts = 0;
            var g_nItemsForSelf = 1;
            var g_sInventoryLink = "https:\/\/steamcommunity.com\/profiles\/76561198301739163\/inventory";
            var g_bHasBankDirectoryArray = false;
            var g_bMicroTxn = false;
            var g_bWalletCreditOnly = false;
            var rgValidTabs = ['payment_info', 'review'];
            var rgPaymentMethodProperties = {"steamaccount": {"value": "steamaccount", "refundable": true, "can_be_split": 0}, "visa": {"value": "visa", "refundable": true, "can_be_split": 1}, "mastercard": {"value": "mastercard", "refundable": true, "can_be_split": 1}, "eclubpoints": {"value": "eclubpoints", "refundable": false, "can_be_split": 1}};
            var sSiteName = "";
            var g_bUseNewPayPalCheckout = true;
            var g_bHasBillingStates = false;
            var rgFocusOnTabSelect = {gift_recipient: 'email_input', gift_note: 'gift_recipient_name', payment_info: 'payment_method_trigger'};
            $J(function () {
                //initialize transaction immediately>
                $('stored_card_processing').style.display = 'block';
                InitializeTransaction();
                AnimateStoredCardProcessingLabel();
                OnLoadCheckoutForm();
            });
            var g_nSteamAccountBalance = 2763900;
            var g_strSteamAccountBalance = 'Rp 27 639';
            var g_bUseRemainingSteamAccount = true;
                    </script>


                    <div class="page_header_ctn search">

                        <div id="checkout_header">
                            <div class="content">
                                <div id="checkout_steam_logo">
                                    <span id="logo_holder">
                                        <a href="https://store.steampowered.com/?snr=1_506_4_508_504" id="checkout_logo_default">
                                            <img src="<?php echo base_url(); ?>assets/Customer/img/core-img/logo.png">
                                        </a>
                                        <a href="https://store.steampowered.com/?snr=1_506_4_508_510" id="checkout_logo_receipt" style="display: none;">
                                            <img src="<?php echo base_url(); ?>assets/Customer/img/core-img/logo.png">
                                        </a>
                                    </span>
                                </div>
                                <div id="checkout_pipeline">



                                    <div class="cart_tab">
                                        <div class="cart_tab_left_inactive" id="payment_info_tab_select_left"></div>
                                        <div class="cart_tab_inactive" id="payment_info_tab_select">Payment Info</div>
                                        <div class="cart_tab_right_inactive" id="payment_info_tab_select_right"></div>
                                    </div>
                                    <div class="cart_tab_spacer"></div>

                                    <div class="cart_tab">
                                        <div class="cart_tab_left_on" id="review_tab_select_left"></div>
                                        <div class="cart_tab_on" id="review_tab_select">Review + Purchase</div>
                                        <div class="cart_tab_right_on" id="review_tab_select_right"></div>
                                    </div>

                                </div>
                                <div id="receipt_pipeline" style="display: none;">
                                    <div class="cart_tab">
                                        <div class="cart_tab_left_on"></div>
                                        <div class="cart_tab_on">THANK YOU</div>
                                        <div class="cart_tab_right_on"></div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="page_content">
                            <form action="<?php echo base_url() ?>checkout/BuyOrder_Transfer" method="post">
                                <!-- Center Column -->
                                <div class="leftcol" id="cart_area">

                                    <div class="checkout_content_box checkout_main">
                                        <span id="error_display" class="checkout_error checkout_form_error" style="display: none;"></span>





                                        <div id="payment_info_tab" class="checkout_tab" >
                                            <div class="checkout_content">
                                                <div class="form_row" id="cancel_pending_verification" style="display: none;">
                                                    <div>
                                                        <div id="cancel_pending_check">
                                                            <input type="checkbox" name="cancel_pending" value="1" id="cancel_pending">&nbsp;
                                                        </div>
                                                        <div id="cancel_pending_notes">
                                                            <label id="cancel_pending_label" for="cancel_pending" style="display: inline;" class="highlight_on_error">
                                                                Payment for the previous purchase was not completed. Continue with this current transaction.							</label>
                                                            <div>
                                                                Need help?  Contact <a href="http://support.steampowered.com/" target="_blank" rel="noreferrer">Steam Support</a>							</div>
                                                        </div>
                                                        <div style="clear: left;"></div>
                                                    </div>
                                                    <br>
                                                </div>

                                                <h3 id="payment_header" class="tab_header">Payment method</h3>
                                                <input type="hidden" name="stored_card_id" id="stored_card_id" value="">
                                                <input type="hidden" name="stored_paypal_id" id="stored_paypal_id" value="">
                                                <input type="hidden" name="stored_paypal_email" id="stored_paypal_email" value="">
                                                <script>
                                                    function showMetodePembayaran() {
                                                        document.getElementById("metodePembayaran").style = "display:block;";
                                                    }
                                                    function hideMetodePembayaran() {
                                                        document.getElementById("metodePembayaran").style = "display:none;";
                                                    }
                                                </script>
                                                <div class="payment_info_form_area" id="metodePembayaran" style="display: block" >


                                                    <div class="form_row" id="payment_row_step2" style="display: none;">
                                                        <p id="payment_row_step2_header">
                                                            <img src="https://steamstore-a.akamaihd.net/public/images/checkout/icon_alert.png">
                                                            Your GameGevity Wallet balance is too low to cover this transaction!			
                                                        </p>
                                                    </div>

                                                    <div class="form_row" id="payment_row_one">
                                                        <div>
                                                            <div class="form_left"><label id="payment_info_method_label" for="payment_method">Please select a payment method</label></div>
                                                            <div style="clear: both;"></div>
                                                        </div>
                                                        <div>
                                                            <div class="form_left">
                                                                <input type="hidden" name="stored_payment_method" id="stored_payment_method" value="">
                                                                <div class="dselect_container" id="payment_method_dselect_container">
                                                                    <input id="payment_method" type="hidden" name="payment_method" value="steamaccount" onchange="UpdatePaymentInfoForm();">
                                                                    <a class="trigger" tabindex="100" id="payment_method_trigger" href="javascript:DSelectNoop();" onfocus="DSelectOnFocus('payment_method');" onblur="DSelectOnBlur('payment_method');" onclick="DSelectOnTriggerClick('payment_method'); hidePembayaran();">My GameGevity Wallet</a>
                                                                    <div class="dropcontainer">
                                                                        <ul class="dropdownhidden" id="payment_method_droplist" style="">
                                                                            <li class="cachedPaymentMethodOption">
                                                                                <a class="inactive_selection" tabindex="99999" onmouseover="DHighlightItem('payment_method', 0, false);" id="steamaccount" onclick="DHighlightItem('payment_method', 0, true); hiddenButtonTransfer();">
                                                                                    My GameGevity Wallet
                                                                                </a>
                                                                            </li>
                                                                            <li class="uncachedPaymentMethodOption">
                                                                                <a class="inactive_selection" tabindex="99999"  onmouseover="DHighlightItem('payment_method', 1, false);" id="visa" onclick="DHighlightItem('payment_method', 1, true); showButtonTransfer();">
                                                                                    Transfer Bank
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <script>

                                                                    function showButtonTransfer() {
                                                                        document.getElementById("btnWalletDisable").style = "display:none;";
                                                                        document.getElementById("btnWalletEnable").style = "display:none;";
                                                                        document.getElementById("btnSubmitTransfer").style = "display:block;";
                                                                        document.getElementById("payment_row_address").style = "display:block;";
                                                                    }




                                                                    function hiddenButtonTransfer() {
                                                                        document.getElementById("payment_row_address").style = "display:none;";
<?php if ($this->session->userdata('CustomerWallet') < $grandTotal) {
    ?>
                                                                            document.getElementById("payment_row_step2").style = "display:block;";
                                                                            document.getElementById("btnWalletDisable").style = "display:block;";
                                                                            document.getElementById("btnWalletEnable").style = "display:none;";
<?php } else {
    ?>
                                                                            document.getElementById("btnWalletEnable").style = "display:block;";
                                                                            document.getElementById("btnWalletDisable").style = "display:none;";
    <?php
}
?>

                                                                        document.getElementById("btnSubmitTransfer").style = "display:none;";
                                                                    }
                                                                </script>


                                                                <script language="javascript">$J(function () {
                                                                        $J('#payment_method_dselect_container').on('keydown', HandleKeyDown);
                                                                    });
                                                                </script>			
                                                            </div>
                                                            <div class="form_right">
                                                            </div>
                                                            <div style="clear: both;"></div>
                                                        </div>
                                                    </div>
                                                    <div id="payment_method_notes" style="display:none;">
                                                        <div class="payment_method_notes_bubble" style="display:block;">
                                                            <ul>
                                                                <li id="payment_method_cafe_funded" style="display:none;">You can purchase GameGevity Wallet funds in person at . See cashier for details.</li>
                                                                <li id="payment_method_unable_to_split" style="display:none;">This payment method cannot be used as a secondary payment method to your wallet. Proceeding with the purchase will charge the full transaction amount only to the selected payment method.</li>
                                                                <li id="payment_row_not_refundable" style="display:none;">Purchases made with this payment method can only be refunded to your GameGevity Wallet. <a href="javascript:RefundPaymentMethodsPopup();">Learn More</a></li>
                                                                <li id="payment_method_specific_note" style="display:none;"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form_row" id="credit_card_row" style="display: none;">
                                                        <div>


                                                            <div style="clear: both;"></div>
                                                        </div>
                                                    </div>



                                                    <br>

                                                    <h3 id="payment_header_title" class="tab_header" style="display: none;">Billing information</h3>


                                                    <input type="hidden" id="cache_return_url" name="cache_return_url" value="https://store.steampowered.com/account">
                                                    <div class="" id="payment_row_address" style="display: none;">
                                                        <div>
                                                            <div class="form_left">
                                                                <div class="form_row">
                                                                    <label>Choose Bank</label>
                                                                    <select name="PaymentBank_ID"  >
                                                                        <?php
                                                                        foreach ($qbank as $rowBank) {
                                                                            ?>
                                                                            <option  value="<?php echo $rowBank->BankID ?>" > <?php echo $rowBank->BankName ?> </option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    <script language="javascript">$J(function () {
                                                                            $J('#billing_country_dselect_container').on('keydown', HandleKeyDown);
                                                                        });
                                                                    </script>		
                                                                </div>

                                                                <div style="clear: both;"></div>
                                                            </div>     
                                                        </div>

                                                        <div>
                                                            <div class="form_left">
                                                                <div class="form_row">
                                                                    <label for="billing_address">Your Account Number</label>
                                                                    <input tabindex="203" required type="text" class="text" maxlength="128" name="PaymentNoRek" id="billing_address" value="" >
                                                                </div>
                                                            </div>
                                                            <div class="form_right">
                                                                <div class="form_row">
                                                                    <label for="billing_city">Name of Account Owner</label>
                                                                    <input type="text" required class="text" tabindex="205" maxlength="50" name="PaymentNamaRek" id="billing_city" value="" >
                                                                </div>

                                                                <div id="billing_state_input" class="form_row" style="display: none;">
                                                                    <label id="billing_state_label" for="billing_state" style="display: none;">State/Province</label>
                                                                    <input tabindex="207" type="text" class="text" maxlength="33" name="billing_state_text" id="billing_state_text" value="">
                                                                    <div class="dselect_container" id="billing_state_select_dselect_container" style="display:none">
                                                                        <input id="billing_state_select" type="hidden" name="billing_state_select" value="">
                                                                        <a class="trigger" tabindex="208" id="billing_state_select_trigger" href="javascript:DSelectNoop();" onfocus="DSelectOnFocus('billing_state_select');" onblur="DSelectOnBlur('billing_state_select');" onclick="DSelectOnTriggerClick('billing_state_select');">Select State/Province</a>
                                                                        <div class="dropcontainer">
                                                                            <ul class="dropdownhidden" id="billing_state_select_droplist"><li><a class="inactive_selection" tabindex="99999" href="javascript:DSelectNoop();" onmouseover="DHighlightItem('billing_state_select', 0, false);" id="" onclick="DHighlightItem('billing_state_select', 0, true);">Select State/Province</a></li></ul>
                                                                        </div>
                                                                    </div><script language="javascript">$J(function () {
                                                                            $J('#billing_state_select_dselect_container').on('keydown', HandleKeyDown);
                                                                        });</script>								</div>

                                                            </div>
                                                            <div style="clear: both;"></div>
                                                        </div>

                                                    </div>
                                                    <!--</form>-->

                                                    <div class="form_row" id="mobile_number_row" style="display: none;">
                                                        <div>
                                                            <div class="form_left">
                                                                <label id="mobile_number_label" for="mobile_number" class="highlight_on_error">Mobile number</label>
                                                                <input type="text" name="mobile_number" id="mobile_number" tabindex="202" value="+7 ">
                                                            </div>
                                                            <div class="form_right">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" id="payment_row_stored_paypal_details" style="display: none;">
                                                        <div>
                                                            <div>
                                                                This transaction will be charged to your PayPal account: <span class="payment_method_review_method_label"></span>							</div>
                                                        </div>
                                                    </div>
                                                    <div class="form_row" id="payment_row_country_verification" style="display: none;">
                                                        <div id="verify_country_notes">
                                                            If your billing address is not in Indonesia, please <a href="javascript:PresentCountryCurrencyChangeDialog();">set your store region preference</a>						</div>
                                                    </div>
                                                    <div class="form_row" id="payment_row_bank_name" style="display: none;">
                                                        <br>
                                                        <div>
                                                            <div>
                                                                <label for="bank_name">Select a bank:</label>
                                                                <div class="dselect_container" id="bank_name_dselect_container">
                                                                    <input id="bank_name" type="hidden" name="bank_name" value="">
                                                                    <a class="trigger" tabindex="300" id="bank_name_trigger" href="javascript:DSelectNoop();" onfocus="DSelectOnFocus('bank_name');" onblur="DSelectOnBlur('bank_name');" onclick="DSelectOnTriggerClick('bank_name');"></a>
                                                                    <div class="dropcontainer">
                                                                        <ul class="dropdownhidden" id="bank_name_droplist"></ul>
                                                                    </div>
                                                                </div><script language="javascript">$J(function () {
                                                                        $J('#bank_name_dselect_container').on('keydown', HandleKeyDown);
                                                                    });</script>							</div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form_row" id="payment_row_save_my_address" style="display: none;">
                                                        <br>
                                                        <div>
                                                            <div id="save_my_address_input">
                                                                <div>
                                                                    <input class="checkout_checkbox" type="checkbox" tabindex="300" id="save_my_address" name="save_my_address" checked="checked">
                                                                    <label for="save_my_address">Save my payment information so checkout is easy next time</label>
                                                                </div>
                                                            </div>
                                                            <div style="clear: left;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form_row" id="payment_row_eight" style="display: block;">
                                                        <br>
                                                        <p id="external_payment_processor_notice">Good job, You are rich!</p>
                                                    </div>
                                                    <div class="checkout_error" id="cant_use_payment_method_in_overlay" style="display: none;">The selected payment method cannot be used from within the game to fund your GameGevity Wallet.<br><br>
                                                        To complete any item purchases with the selected payment method, you will need to add funds to your GameGevity Wallet through an internet browser first.<br><br>
                                                        You can fund your Wallet using this link in your web browser: <a href="http://store.steampowered.com/steamaccount/addfunds">http://store.steampowered.com/steamaccount/addfunds</a><br><br>
                                                        After adding funds to your GameGevity Wallet, you will then be able to complete your item transaction through the in game store using your GameGevity Wallet balance.</div>
                                                    <br>
                                                    <p id="youll_get_to_review" style="display: block;">
                                                        You'll have a chance to review your order before it's placed.					</p>

                                                    <br clear="all">
                                                    <div class="button_row">
                                                        <div id="payment_method_previous_button" style="display: none;">
                                                            <a href="javascript:ShowFirstPaymentStep();" class="btnv6_blue_hoverfade btn_medium"><span>Back</span></a>
                                                        </div>

                                                        <?php if ($this->session->userdata('CustomerWallet') < $grandTotal) {
                                                            ?>
                                                            <script>
                                                                document.getElementById("payment_row_step2").style = "display:block;";
                                                            </script>
                                                            <!--button wallet cukup duitnya-->
                                                            <a tabindex="300" href="javascript:showPembayaran('GameGevity Wallet');hideMetodePembayaran();showButtonWallet();" id="btnWalletEnable" class="btnv6_green_white_innerfade btn_medium continue" style="display: none;">
                                                                <span>Continue</span>
                                                            </a>

                                                            <!--ini button kalo wallet ga cukup-->
                                                            <div id="btnWalletDisable" class="btnv6_blue_hoverfade btn_medium btn_disabled working" style="display: block;">
                                                                <span>Continue</span>
                                                            </div>

                                                            <!--ini button buat transfer, button wallet ke hide smua-->
                                                            <a tabindex="300" href="javascript:showPembayaran('Transfer Bank');hideMetodePembayaran();showButtonBank();" id="btnSubmitTransfer" class="btnv6_green_white_innerfade btn_medium continue" style="display: none;">
                                                                <span>Continue</span>
                                                            </a>


                                                        <?php } else {
                                                            ?>
                                                            <!--button wallet cukup duitnya-->
                                                            <a tabindex="300" href="javascript:showPembayaran('GameGevity Wallet');hideMetodePembayaran();showButtonWallet()" id="btnWalletEnable" class="btnv6_green_white_innerfade btn_medium continue" style="display: block;">
                                                                <span>Continue</span>
                                                            </a>

                                                            <!--ini button kalo wallet ga cukup-->
                                                            <div id="btnWalletDisable" class="btnv6_blue_hoverfade btn_medium btn_disabled working" style="display: none;">
                                                                <span>Continue</span>
                                                            </div>

                                                            <!--ini button buat transfer, button wallet ke hide smua-->
                                                            <a tabindex="300" href="javascript:showPembayaran('Transfer Bank');hideMetodePembayaran();showButtonBank();" id="btnSubmitTransfer" class="btnv6_green_white_innerfade btn_medium continue" style="display: none;">
                                                                <span>Continue</span>
                                                            </a>
                                                            <?php
                                                        }
                                                        ?>




                                                        <script>
                                                            function showButtonBank() {
                                                                document.getElementById("btnWallet").style = "display:none;";
                                                                document.getElementById("btnTransferBank").style = "";
                                                            }
                                                            function showButtonWallet() {
                                                                document.getElementById("btnWallet").style = "";
                                                                document.getElementById("btnTransferBank").style = "display:none;";
                                                            }


                                                            function showPembayaran(jenis) {
                                                                document.getElementById("review_tab_1").style = "display:block;";
                                                                document.getElementById("payment_row_step2").style = "display:none;";
                                                                document.getElementById('jenisPembayaranLabel').innerHTML = jenis;
                                                            }
                                                            function hidePembayaran() {
                                                                document.getElementById("review_tab_1").style = "display:none;";
//                                                            document.getElementById("payment_row_step2").style = "display:block;";
                                                            }

                                                        </script>

                                                        <div id="paypal-button" style="display:none; float: right;"></div>
                                                        <div id="btnWalletDisable" class="btnv6_blue_hoverfade btn_medium btn_disabled working" style="display: none;">
                                                            <span>Working</span>
                                                        </div>
                                                    </div>
                                                    <br><br><br>
                                                </div>
                                            </div>
                                        </div>





                                        <div id="review_tab_1" class="checkout_tab" style="display: none;">
                                            <div style="display:none">

                                            </div>
                                            <div id="purchase_top" style="display: none;">
                                            </div>
                                            <div id="checkout_review_cart_message" class="checkout_error" style="display: none;">
                                                <span class="cart_pricechanged_tag">*</span> Note: One or more of the items below have changed in price since you added it to your cart.<br>
                                            </div>

                                            <!--mulai dari sini gan-->
                                            <!--mulai looping cart-->
                                            <div id="checkout_review_cart_area">

                                                <?php
                                                if ($this->cart->total_items() == 1) {
                                                    foreach ($cartItems as $item) {
                                                        ?>
                                                        <div class="checkout_review_cart_item even">
                                                            <div class="checkout_review_item_img">
                                                                <?php $imageURL = !empty($item["image"]) ? base_url('Developer/GamesThumbnail/' . $item["image"]) : base_url('assets/images/pro-demo-img.jpeg'); ?>

                                                                <img src="<?php echo $imageURL; ?>" width="120" height="45" border="0"></div>
                                                            <div class="checkout_review_item_price">
                                                                <div class="price">Rp <?php echo number_format($item["price"], 0, ',', ' '); ?></div>
                                                            </div>
                                                            <div class="checkout_review_item_desc">
                                                                <div class="checkout_review_item_platform">
                                                                    <span class="platform_img win"></span>
                                                                </div>
                                                                <?php echo $item["name"]; ?><br>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                } else if ($this->cart->total_items() > 1) {
                                                    $count = 0;
                                                    foreach ($cartItems as $item) {
                                                        ?>

                                                        <div class="checkout_review_cart_item <?php echo ( ++$count % 2 ? "even" : "odd") ?>">
                                                            <div class="checkout_review_item_img">
                                                                <?php $imageURL = !empty($item["image"]) ? base_url('Developer/GamesThumbnail/' . $item["image"]) : base_url('assets/images/pro-demo-img.jpeg'); ?>

                                                                <img src="<?php echo $imageURL; ?>" width="120" height="45" border="0"></div>
                                                            <div class="checkout_review_item_price">
                                                                <div class="price">Rp <?php echo number_format($item["price"], 0, ',', ' '); ?></div>
                                                            </div>
                                                            <div class="checkout_review_item_desc">
                                                                <div class="checkout_review_item_platform">
                                                                    <span class="platform_img win"></span>
                                                                </div>
                                                                <?php echo $item["name"]; ?><br>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <!--akhir looping cart-->

                                            <div class = "checkout_content confirm">
                                                <div class = "cart_totals_area">
                                                    <div id = "cart_price_summary" class = "cart_total_row">
                                                        <div id = "review_subtotal_value" class = "price">Rp <?php echo number_format($this->cart->total(), 0, ',', ' '); ?></div>
                                                        <div id = "cart_price_summary_subtotal">
                                                            Subtotal:
                                                        </div>
                                                    </div>
                                                    <div id = "cart_price_summary_text" class = "cart_total_row">
                                                        <div id = "review_shipping_value" class = "price" style = "display: none;"></div>
                                                        <div id = "cart_price_summary_shipping" style = "display: none;">
                                                            Shipping &amp;
                                                            Handling:
                                                        </div>
                                                    </div>
                                                    <div id = "cart_price_summary_text" class = "cart_total_row">
                                                        <div id = "review_taxes_value" class = "price" style = "display: block;">Rp <?php
                                                            echo number_format($taxFee, 0, ',', ' ');
                                                            ?></div>
                                                        <div id = "cart_price_summary_taxes" style = "display: block;">
                                                            <span id = "cart_price_summary_taxes_text">Tax For Your Country</span><span id = "cart_price_summary_taxes_different_shipping" style = "display:none;"><img data-tooltip-text = "Your purchase contains items that that will be delivered to a different location than your billing address and will be taxed at rates required by that jurisdiction." src = "https://steamstore-a.akamaihd.net/public/images/tooltip.png"></span><span>:</span>
                                                        </div>
                                                    </div>
                                                    <div class = "cart_total_rule"></div>
                                                    <div id = "cart_price_total" class = "cart_total_row">
                                                        <div id = "review_total_value" class = "price">Rp <?php
                                                            echo number_format($grandTotal, 0, ',', ' ');
                                                            ?></div>
                                                        <div id = "cart_price_total_text">
                                                            Total:
                                                        </div>
                                                    </div>
                                                    <div id = "checkout_review_tax_notice" class = "checkout_review_tax_notice" style = "display: none;"></div>
                                                </div>
                                                <div class = "rule"></div>

                                                <div id = "checkout_review_purchase_notice_area" style = "display: none;">
                                                    <div class = "review_notice" id = "checkout_review_purchase_notice"></div>
                                                    <div class = "rule"></div>
                                                </div>


                                                <div>
                                                    <div class = "review_row" id = "checkout_review_shipping_address_area" style = "display: none;">
                                                        <div class = "review_row_label">Shipping Address:</div>
                                                        <div class = "review_row_value">
                                                            <p>
                                                                <span id = "shipping_review_name"></span> (<a href = "javascript:SetTabEnabled('shipping_info');">Change</a>)
                                                                <br>
                                                                <span id = "review_shipping_address_body"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "checkout_review_payment_method_area">
                                                    <div id = "payment_method_review_row" class = "review_row">
                                                        <div class = "review_row_label">Payment method:</div>
                                                        <div class = "review_row_value">
                                                            <div class = "payment_method_review_row" id = "payment_method_review_row_provider" style = "display: none;">
                                                                <span id = "payment_method_review_text" class = "payment_method_review_method_label"></span> (<a href = "javascript:SetTabEnabled('payment_info');">Change</a>)
                                                                <div class = "payment_method_total" id = "payment_method_review_provider_total" style = "display: none;">Rp 0</div>

                                                                <div class = "checkout_review_hit_min_provider_amount_div" id = "payment_method_review_row_min_provider_amount" style = "display: none;">
                                                                    <span class = "checkout_review_hit_min_provider_amount">* minimum allowed</span>
                                                                </div>
                                                            </div>
                                                            <div class = "payment_method_review_row" id = "payment_method_review_row_steam_account" style = "display: block;">
                                                                <div id = "payment_method_review_text_steam_account">
                                                                    <label class = "payment_method_review_method_label" id="jenisPembayaranLabel">  </label> (<a href = "javascript:hidePembayaran();showMetodePembayaran();">Change</a>)
                                                                </div>
                                                                <div class = "payment_method_total" id = "payment_method_review_steam_account_total" style = "display: none;">Rp 4 249</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id = "payment_method_review_row_provider_cvv" style = "display: none;">
                                                    <div id = "payment_method_review_row" class = "review_row">
                                                        <div class = "review_row_label">Security code:</div>
                                                        <div class = "review_row_value">
                                                            <div class = "payment_method_review_row">
                                                                <input type = "text" class = "text" maxlength = "4" autocomplete = "off" name = "security_code_cached" id = "security_code_cached"><span id = "what_is_this"><a href = "javascript:PopupCVV2Explanation();">What's this?</a></span>
                                                                <div class="payment_method_total" id="payment_method_review_provider_total"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="checkout_review_gift_area">
                                                    <div class="review_row">
                                                        <div class="review_row_label">Gift options:</div>
                                                        <div class="review_row_value">
                                                            <p>None; this purchase is for your own account.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="checkout_review_payment_info_area" style="display: none;">
                                                    <div class="review_row" id="checkout_review_payment_info_area">
                                                        <div class="review_row_label">Billing Address:</div>
                                                        <div class="review_row_value">
                                                            <p id="review_address_body"> <br><br>, <br>ID</p>
                                                        </div>
                                                    </div>
                                                    <div class="review_row">
                                                        <div class="review_row_label">Phone:</div>
                                                        <div class="review_row_value">
                                                            <p id="review_phone_body"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="review_row">
                                                        <div class="review_row_label">Steam account:</div>
                                                        <div class="review_row_value">
                                                            <p id="review_account_body"> <?php echo $this->session->userdata('CustomerUsername'); ?> </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rule"></div>

                                                <div id="purchase_bottom">
                                                    <div id="purchase_confirm_ssa" class="highlight_on_error">
                                                        <input required type="checkbox" name="accept_ssa" value="1" id="accept_ssa">
                                                        <label for="accept_ssa">
                                                            <span>
                                                                I agree to the terms of the <a href="javascript:SSAPopup();" class="body_link">Steam Subscriber Agreement</a> (last updated 13 Nov, 2018.)															</span>
                                                        </label></div>							


                                                    <div id="purchase_bottom_note_paypalgc" style="display:none">PayPal transactions are authorized through the PayPal web site. Click the button below to open a new web browser window to initiate the transaction.</div>

                                                    <br>

                                                    <div id="purchase_button_container_bottom" class="cart_checkout_buttons">
                                                        <a id="purchase_button_bottom" href="<?php echo base_url('cart/'); ?>" class="btnv6_grey_black btn_medium">
                                                            <span id="purchase_button_bottom_text">Back to Cart</span>
                                                        </a>
                                                        <a id="btnWallet" href="<?php echo base_url('Checkout/BuyOrder'); ?>" class="btnv6_green_white_innerfade btn_medium" style="display:none;">
                                                            <span id="purchase_button_bottom_text">Purchase</span>
                                                        </a>
                                                        <input type="submit" id="btnTransferBank" style="display:none;" class="btnv6_green_white_innerfade btn_medium" value="Purchase"/>
<!--                                                                    <span id="purchase_button_bottom_text">Purchase</span>-->
                                                        <div id="purchase_button_disabled_bottom" class="btnv6_green_white_innerfade btn_medium btn_disabled" style="display:none">
                                                            <span>
                                                                Purchase							</span>
                                                        </div>
                                                        <div id="purchase_button_inprogress_bottom" class="btnv6_green_white_innerfade btn_medium btn_disabled" style="display:none">
                                                            <span>Working</span>
                                                        </div>

                                                        <span id="change_payment_method_button_bottom" style="display: none;"></span>

                                                        <a id="cancel_button_bottom" href="https://store.steampowered.com/?snr=1_506_4_508_502" class="btnv6_blue_hoverfade btn_medium" style="float: left; display:none">
                                                            <span>
                                                                Continue Shopping							</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <br>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="checkout_footer_notes">
                                        <div id="footer_note_review" style="">Confirmation will be emailed to your address at <?php echo $this->session->userdata('CustomerEmail'); ?></div>
                                    </div>
                                </div>
                            </form>
                            <div id="receipt_area" style="display:none" class="leftcol">
                                <div class="cart_area_body checkout_content_box">
                                    <div class="checkout_tab checkout_content">
                                        <h2>Thank you for your purchase!</h2>
                                        <div class="purchase_summary_area" id="purchase_summary_area">
                                            <p>
                                                <span id="checkout_receipt_description">An email confirmation has been sent to you.<br><br>Any digital items in this order are now registered to your account on Steam.  To access your items, simply visit your <a href="steam://open/games">library</a> in Steam whenever you're ready.</span>



                                            </p>
                                        </div>
                                        <div id = "receipt_error_display" class = "checkout_error" style = "display: none;"></div>

                                        <div class = "rule"></div>


                                        <div class = "checkout_gotsteam_area">
                                            <h1>Got Steam?</h1>
                                            <p>You'll need the Steam application to access your new products.</p>
                                            <div id="gotsteam_buttons">
                                                <a href="steam://subscriptioninstall/96994" class="btn_blue leftbtn">
                                                    <h3>Yes, Steam is installed</h3>
                                                    <h5>Install your new games now</h5>
                                                </a>
                                            </div>

                                            <a href="https://steamcdn-a.akamaihd.net/client/installer/SteamSetup.exe" class="btn_blue">
                                                <h3>No, I need Steam</h3>
                                                <h5>Free download</h5>
                                            </a>
                                            <div style="clear: left;"></div>
                                        </div>

                                        <div class="rule"></div>

                                        <h2>Your purchase receipt</h2>
                                        <div class="receipt_body">

                                            <p>Confirmation of your purchase is provided below. This information will also be emailed to you shortly.</p>
                                            <div class="receipt_confirmation_row">
                                                <div class="receipt_confirmation_label">Account Name</div>
                                                <div class="receipt_confirmation_data" id="receipt_accountname">dzakifzn30</div>
                                            </div>
                                            <div class="receipt_confirmation_row">
                                                <div class="receipt_confirmation_label">Total</div>
                                                <div class="receipt_confirmation_data" id="receipt_total_price">&nbsp;</div>
                                            </div>
                                            <div class="receipt_confirmation_row">
                                                <div class="receipt_confirmation_label">Confirmation code</div>
                                                <div class="receipt_confirmation_data" id="receipt_confirmation_code">&nbsp;</div>
                                            </div>
                                            <div class="receipt_print_button_row">
                                                <a href="javascript:window.print()" class="btn_checkout_print">
                                                    <div class="text">Print</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="gift_tracking_description" style="display: none;">
                                            <div class="rule"></div>
                                            <h2>Tracking your gift</h2>
                                            <div class="checkout_receipt_gift_detail">
                                                <p>Once your friend has redeemed their gift, your gift's status will change from "Sent" to "Redeemed". Here's how to check in on the status of your gift:<br><br><strong>Using Steam</strong><br><br>If you haven't already, you can <a href = "http://store.steampowered.com/about/">install Steam</a> for free. To check the status of your gift purchase using Steam, log into your account using the Steam application. Then from the Games menu, select "Manage gifts and guest passes...".</p>
                                            </div>
                                        </div>
                                        <div id = "receipt_track_img"></div>
                                    </div>
                                </div>

                                <a href = "https://store.steampowered.com/?snr=1_506_4_508_509" class = "btnv6_blue_hoverfade btn_medium" style = "float: left; margin-top: 14px;">
                                    <span>Return to the store</span>
                                </a>

                                <div style = "clear: left;"></div>
                            </div>

                            <div id = "pending_receipt_area" style = "display:none" class = "leftcol">
                                <div class = "cart_area_body checkout_content_box">
                                    <div class = "checkout_tab checkout_content">
                                        <h2 class = "checkout_pending_purchase_title">Your purchase is nearly complete</h2>
                                        <div class = "purchase_summary_area purchase_pending_area" id = "pending_purchase_summary_area" "="">
                                            <div><img src="<?php echo base_url(); ?>assets/Customer/img/core-img/logo.png"></div>
                                            <div class = "purchase_summary_area_pending_text">
                                                <p id = "pending_purchase_summary_payment_method_description" class = "checkout_pending_purchase_subtitle">
                                                    Your purchase is in progress. We are currently waiting for confirmation from your bank or payment processor. This process normally takes several minutes. </p>
                                                <p id = "pending_purchase_summary_payment_method_notes" class = "checkout_pending_purchase_payment_method_notes">
                                                    <span id = "pending_purchase_summary_payment_method_notes_text">Steam will send an email receipt to you when payment is received for this purchase.</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p id = "pending_purchase_summary_retry" class = "checkout_pending_purchase_payment_method_notes">
                                            <span><span class = "pending_purchase_summary_retry_note">Note: If your purchase fails, </span> Steam will email you a link that will let you try your purchase (with the discount) again for up to 72 hours.</span>
                                        </p>

                                        <div class = "rule"></div>

                                        <h2>Your purchase details</h2>

                                        <div class = "receipt_body">
                                            <p>Details of your pending purchase are provided below. You can always check the status of your transaction in your <a href = "https://store.steampowered.com/account/">account page</a>.</p>
                                            <br>
                                            <div class = "receipt_confirmation_row">
                                                <div class = "receipt_confirmation_label">Account Name</div>
                                                <div class = "receipt_confirmation_data" id = "pending_receipt_accountname">dzakifzn30</div>
                                            </div>
                                            <div class = "receipt_confirmation_row">
                                                <div class = "receipt_confirmation_label">Total</div>
                                                <div class = "receipt_confirmation_data" id = "pending_receipt_total_price">&nbsp;
                                                </div>
                                            </div>
                                            <div class = "receipt_confirmation_row">
                                                <div class = "receipt_confirmation_label">Confirmation code</div>
                                                <div class = "receipt_confirmation_data" id = "pending_receipt_confirmation_code">&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href = "https://store.steampowered.com/?snr=1_506_4_508_509" class = "btnv6_blue_hoverfade btn_medium" style = "float: left; margin-top: 14px;">
                                    <span>Return to the store</span>
                                </a>
                            </div>
                            <!--End Center Column -->




                            <!--Right Column -->
                            <div class = "rightcol">
                              

                                <div id = "col_right_shipping_info" class = "block" style = "display:none;">
                                </div>

                                <div id = "col_right_review" class = "block" style = "display: block;">

                                    <div id = "col_right_review_payment_tips" style = "display: none;">
                                        <p></p>
                                        <div class = "block_header block_header_green"><h4 id = "col_right_review_payment_tips_header_text">Purchasing on Steam</h4></div>
                                        <div class = "block_content block_content_inner">
                                            <p id = "col_right_review_payment_tips_info_text">When you submit your payment information your data is protected by Secure Socket Layer (SSL) technology certified by a digital certificate.</p>
                                        </div>
                                    </div>
                                </div>

                                <div id = "col_right_receipt" class = "block" style = "display:none">
                                    <div class = "block_header">NEED ASSISTANCE?</div>
                                    <div class = "block_content block_content_inner underlined_links">
                                        <p>For help or product support, please visit <a href = "https://help.steampowered.com">Steam Support online</a>.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Right Column -->

                            <div style = "clear: both;"></div>

                            <!--                            <form style = "display: none;" id = "logsuccessfulpurchase_form" method = "POST" action = "https://store.steampowered.com/checkout/logsuccessfulpurchase">
                                                            <input type = "hidden" name = "snr" value = "1_506_4_508_505">
                                                        </form>-->

                        </div>

                        <!--End Main Background -->
                        <div id = "currency_change_confirm_dialog" class = "currency_change_confirm_dialog" style = "display: none;">
                            <div class = "currency_no_options" style = "display: none;">
                                <!--no options -->
                                <h2>Country</h2>
                                <p>
                                    We have detected your current country as Indonesia. </p>

                                <div class = "currency_change_option_ctn">
                                    <a class = "currency_change_option btnv6_grey_black" href = "https://store.steampowered.com/account/change_country/">
                                        <span>
                                            <div class = "country">Update your store country</div>
                                            <div class = "notes">
                                                If your billing address differs from your current location </div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <script type = "text/javascript">
                            function OnUserCountryCurrencyChange(strDSelectName)
                            {
                                var strCCSelected = $J('#' + strDSelectName).val();
                                if (strCCSelected == 'ID')
                                    return;
                                var Modal = PresentCountryCurrencyChangeDialog(strCCSelected == 'help');
                                Modal.always(function () {
                                    DHighlightItemByValue(strDSelectName, 'ID', true);
                                });
                            }

                            function PresentCountryCurrencyChangeDialog(bShowContactSupport)
                            {
                                if (!window.$CurrencyChangeDialog)
                                {
                                    window.$CurrencyChangeDialog = $J('#currency_change_confirm_dialog');
                                }

                                if (typeof bShowContactSupport == 'undefined')
                                    bShowContactSupport = true;
                                var $Dialog = window.$CurrencyChangeDialog;
                                if (!bShowContactSupport)
                                {
                                    $Dialog.children('.currency_have_options').show();
                                    $Dialog.children('.currency_no_options').hide();
                                    var Modal = ShowDialog('Convert Store and Wallet', $Dialog.show());
                                    $Dialog.find('div.currency_change_option').click(function ()
                                    {
                                        var strNewCountry = $J(this).data('country');
                                        if ('ID' == strNewCountry)
                                        {
                                            Modal.Dismiss();
                                            return;
                                        }

                                        var WaitModal = ShowBlockingWaitDialog('Changing country...', '');
                                        $J.post('https://store.steampowered.com/account/setcountry', {sessionid: g_sessionID, cc: strNewCountry})
                                                .done(function () {
                                                    WaitModal.Dismiss();
                                                    ShowAlertDialog('Changing country...', "Your store region has been changed.  The prices and availability of items in your cart may have changed.<br \/>\r\n<br \/>\r\n\t\tYou will now be returned to the cart page where you can verify the items.").done(function () {
                                                        ShowBlockingWaitDialog('Loading...', '');
                                                        window.location = 'https://store.steampowered.com/cart/';
                                                    });
                                                }).fail(function () {
                                            WaitModal.Dismiss();
                                            ShowAlertDialog('Change country', 'There was a problem changing your country.  Please try again later.');
                                        });
                                    });
                                } else
                                {
                                    $Dialog.children('.currency_have_options').hide();
                                    $Dialog.children('.currency_no_options').show();
                                    var Modal = ShowAlertDialog('Convert Store and Wallet', $Dialog.show(), 'Cancel');
                                }

                                return Modal;
                            }
                        </script>	<!-- Footer -->
                    </div>	<!-- responsive_page_legacy_content -->


                </div>	<!-- responsive_page_content -->

            </div>	<!-- responsive_page_frame -->


            <input id="ext-version" type="hidden" value="1.4.1"></body></html>