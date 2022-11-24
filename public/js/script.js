var option = {
    Animation:true,
    delay:10000
}

window.onload = (event) => {

    let myAlert = document.querySelector(".toast");
    let bsAlert = new bootstrap.Toast(myAlert, option);
    bsAlert.show();


   
}