window.addEventListener("DOMContentLoaded",function(){
    
    let $form = document.querySelector("#signup");
    let $msg = document.querySelector(".msg");
    $form.addEventListener("submit",function(e){
        e.preventDefault();

        let datos = new FormData($form);
        let datosParse = new URLSearchParams(datos);

        fetch(`${plz.rest_url}/registro`,
        {
            method: "POST",
            body: datosParse
        }
        )
        .then(res=>res.json())
        .then(json=>{
            console.log(json)
            $msg.innerHTML = json?.msg
        })
        .catch(err=>{
            console.log(`Hay un error: ${err}`)
        })

    })

    
})