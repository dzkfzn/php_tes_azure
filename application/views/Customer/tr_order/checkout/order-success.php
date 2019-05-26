
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    </head>
    <body>
        <div class="container" >


            <h2>Order Status</h2>
            <p class="ord-succ">Your order has been placed successfully.</p>

            <!-- Order status & shipping info -->
            <div class="row col-lg-12 ord-addr-info">
                <div class="col-sm-6 adr">
                    <div class="hdr">Shipping Address</div>
                    <p><?php echo $order['CustomerName']; ?></p>
                    <p><?php echo $order['CustomerEmail']; ?></p>
                    <!--<p><?php echo $order['phone']; ?></p>-->
                    <!--<p><?php echo $order['address']; ?></p>-->
                </div>
                <div class="col-sm-6 info">
                    <div class="hdr">Order Info</div>
                    <p><b>Reference ID</b> #<?php echo $order['OrderID']; ?></p>
                    <p><b>Total</b> <?php echo '$' . $order['OrderTotal'] . ' USD'; ?></p>
                </div>
            </div>

            <!-- Order items -->
            <div class="row ord-items">
                <?php if (!empty($order['items'])) {
                    foreach ($order['items'] as $item) {
                        ?>
                        <div class="col-lg-12 item">
                            <div class="col-sm-2">
                                <div class="img" style="height: 75px; width: 75px;">
        <?php $imageURL = !empty($item["GamesThumbnail"]) ? base_url('Developer/GamesThumbnail/' . $item["GamesThumbnail"]) : base_url('assets/images/pro-demo-img.jpeg'); ?>
                                    <img src="<?php echo $imageURL; ?>" width="75"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p><b><?php echo $item["GamesName"]; ?></b></p>
                                <p><?php echo '$' . $item["GamesPrice"] . ' USD'; ?></p>
                                <!--<p>QTY: <?php echo $item["quantity"]; ?></p>-->
                            </div>
                            <div class="col-sm-2">
                                <p><b><?php echo '$' . $item["UnitPrice"] . ' USD'; ?></b></p>
                            </div>
                        </div>
                    <?php }
                }
                ?>
            </div>
        </div>
    </body>
</html>