    <div class="eote-order-area">
        <img class="order-img" src="/sp/assets/img/sac-cover.png">
        <div class="order-form">
            <h2 class="order-title">Receive Your Sacred Archetypal Collection For Just $17.00</h2>
                <table class="order-details">
                    <tbody>
                        <tr class="details">
                            <td class="right">Name:</td>
                            <td class="left"><span class="capitalize"><?php echo $_GET['name']?></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Email:</td>
                            <td class="left"><?php echo $_GET['email']?></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Archetype:</td>
                            <td class="left"><span class="capitalize"><?php echo $_GET['archetype']?></span></td>
                        </tr>
                    </tbody>
                </table>
            <!--Dynamic Order Link Specific To Archetype-->
            <?php
    switch($_GET['archetype']){
        case "caregiver": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-car'>Click Here To Order Now</a>";
            break;
        case "creator": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-cre'>Click Here To Order Now</a>";
            break;
        case "explorer": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-exp'>Click Here To Order Now</a>";
            break;
        case "hero": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-her'>Click Here To Order Now</a>";
            break;
        case "innocent": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-inn'>Click Here To Order Now</a>";
            break;
        case "jester": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-jes'>Click Here To Order Now</a>";
            break;
        case "lover": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-lov'>Click Here To Order Now</a>";
            break;
        case "magician": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-mag'>Click Here To Order Now</a>";
            break;
        case "member": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-mem'>Click Here To Order Now</a>";
            break;
        case "outlaw": //Form Page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-out'>Click Here To Order Now</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-rul'>Click Here To Order Now</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-sag'>Click Here To Order Now</a>";
            break;
        default: //Any page that is not defined in this switch will lead to this page
            echo "<a class='cta-button' href='http://individualogist.samcart.com/products/sac-car'>Click Here To Order Now</a>";
    }
    ?>
            <div class="order-footer">
            After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
            </div>
        </div>
    </div>    