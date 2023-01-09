<?php
    require 'header.php';
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>
                    Sign Up
                </h1>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '
                            <p class="signuperror"> Fill in all fields! </p>
                            ';
                        }
                        else if ($_GET['error'] == "invalid_mail_and_uid") {
                            echo '
                            <p class="signuperror"> Invalid Mail And Username! </p>
                            ';
                        } 
                        else if ($_GET['error'] == "invalidmail") {
                            echo '
                            <p class="signuperror"> Invalid Mail! </p>
                            ';
                        }
                        else if ($_GET['error'] == "invaliduid") {
                            echo '
                            <p class="signuperror"> Invalid Username! </p>
                            ';
                        }
                        else if ($_GET['error'] == "passwordcheck") {
                            echo '
                            <p class="signuperror"> Invalid Match Password! </p>
                            ';
                        }
                        else if ($_GET['error'] == "usertaken") {
                            echo '
                            <p class="signuperror"> Invalid User Taken! </p>
                            ';
                        }
                    }
                    else if (isset($_GET['signup']) == "success") {
                        echo '
                        <p class="signupsuccess"> Sign Up Success! </p>
                        ';
                    }
                ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-confirm" placeholder="Confirm Password">
                    <button type="submit" name="signup-submit"> Signup </button>
                </form>
            </section>
        </div>

    </main>

<?php
    require 'footer.php';
?>