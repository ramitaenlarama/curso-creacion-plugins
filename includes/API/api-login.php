<?php 

function plz_api_login(){
    register_rest_route(
        "plz",
        "login",
        array(
            "methods" => "POST",
            "callback" => "plz_login_callback"
        )
        );
}

add_action("rest_api_init","plz_api_login");

function plz_login_callback($request){
    $cred = array(
        "user_login" => $request["email"],
        "user_password" => $request["password"],
        "remember"  => true
    );

    $user = wp_signon($cred);

    return $user->get_error_message();
}