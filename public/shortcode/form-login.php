<?php 

function plz_add_login_form(){

    $response = '
    <main class="signin">
        <div class="signin__container">
            <form class="signin__form" id="signin">
                <div class="signin__email name--campo">
                    <label for="email">Email address</label>
                    <input name="email" type="email" id="email">
                </div>
                <div class="signin__pass name--campo">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password">
                </div>
                <div class="signin__submit">
                    <input type="submit" value="Log in">
                </div>
                <div class="signin_create-link">
                    <a href="'.home_url("sing-up").'">Sign up</a>
                </div>
            </form>
        </div>
    </main>
    ';

    return $response;
}