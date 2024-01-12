<?php


include 'header.php';



?>












<div class="customer_login mt-60">
        <div class="container">
            <div class="row justify-content-center">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2 class="text-center text-primary">login</h2>
                        <form action="logincode.php" method="POST">
                            <p>
                                <label>Enter User Email <span>*</span></label>
                                <input type="text" name="email" required>
                            </p>
                            <p>
                                <label>Enter Password <span>*</span></label>
                                <input type="password" name="password" required>
                            </p>
                            <div class="login_submit text-center">
                               
                                <button type="submit" name="loginbtn" class="w-75">login</button>

                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

               
            </div>
        </div>
    </div>



<?php

include 'footer.php';

?>