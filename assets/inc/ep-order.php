    <div class="sac-order-area">
        <!--Dynamic Image Specific To Element-->
        <?php
        switch($_GET['element']){
        case "air": //Form Page
            echo "<img class='order-img' src='/sp/assets/img/ep-air-cover.png'>";
            break;
        case "water": //Form Page
            echo "<img class='order-img' src='/sp/assets/img/ep-water-cover.png'>";
            break;
        case "fire": //Form Page
            echo "<img class='order-img' src='/sp/assets/img/ep-fire-cover.png'>";
            break;
        case "earth": //Form Page
            echo "<img class='order-img' src='/sp/assets/img/ep-earth-cover.png'>";
            break;
        default: //Any page that is not defined in this switch will lead to this page
            echo "<img class='order-img' src='/sp/assets/img/ep-air-cover.png'>";
    }
    ?>
        <div class="order-form">
            <h2 class="order-title">Receive Your Elemental Paradigm For Just $19.00</h2>
                <table class="order-details">
                    <tbody>
                        <tr class="details">
                            <td class="right">Name:</td>
                            <td class="left"><span class="capitalize"><?php echo $_GET['name']?></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Email:</td>
                            <td class="left"><?php echo $_GET['email']?></td>
                        <tr class="details">
                            <td class="right">Element:</td>
                            <td class="left"><span class="capitalize"><?php echo $_GET['element']?></span></td>
                        </tr>
                    </tbody>
                </table>
            <!--Dynamic Order Link Specific To Element-->
            <?php
        switch($_GET['element']){
        case "air": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/ep-air'>Click Here To Order Now</a>";
            break;
        case "water": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/ep-water'>Click Here To Order Now</a>";
            break;
        case "fire": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/ep-fire'>Click Here To Order Now</a>";
            break;
        case "earth": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/ep-earth'>Click Here To Order Now</a>";
            break;
        default: //Any page that is not defined in this switch will lead to this page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/ep-air'>Click Here To Order Now</a>";
    }
    ?>
            <div class="order-footer">
            After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
            </div>
        </div>
    </div>    