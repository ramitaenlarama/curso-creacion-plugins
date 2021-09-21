window.addEventListener("DOMContentLoaded",function(){
    console.log("registro cargado")
    let $form = document.querySelector("#signin");
    let $msg = document.querySelector(".msg");
    $form.addEventListener("submit",function(e){
        e.preventDefault();

        let datos = new FormData($form);
        let datosParse = new URLSearchParams(datos);

        fetch("http://yardsales.plz/wp-json/plz/registro",
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