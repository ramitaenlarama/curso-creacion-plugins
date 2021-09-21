<?php 


function plz_api_registro(){

    register_rest_route(
        "plz",
        "registro",
        array(
            'methods' => 'GET', 
            'callback' => 'plz_registro_callback'
        )
        );
}

function plz_registro_callback($request){
    return $request->get_params();
}
add_action("rest_api_init", "plz_api_registro");