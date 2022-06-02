$(function() {
    let url = window.location.href
    let urlCriarChamado = url.split("create_ticket=1")
    let urlCategoria = url.split("tracking.injector.php")
    if(urlCriarChamado.length > 1 || urlCategoria.length > 1){
        let campoLocalização = document.querySelector("#itil-form > div > div.card-body.row.mx-0 > div > div:nth-child(4)")
        let contemNomeLocalização = campoLocalização.innerHTML.split("Localização")
        if(contemNomeLocalização.length <= 1 ){
            campoLocalização.style.visibility ="hidden"
        }
        document.querySelector("#itil-form > div > div.card-body.row.mx-0 > div > div:nth-child(1)").style.visibility ="hidden"
        document.querySelector("#itil-form > div > div.card-body.row.mx-0 > div > div:nth-child(3)").style.visibility ="hidden"
    }
    
});