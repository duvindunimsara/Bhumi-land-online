function buyerForm() {
    var formcontainer = document.getElementById("buyer");
    formcontainer.classList.add("show");
    var formcontainer2 = document.getElementById("seller");
    formcontainer2.classList.remove("show");
}

function sellerForm() {
    var formcontainer = document.getElementById("seller");
    formcontainer.classList.add("show");
    var formcontainer2 = document.getElementById("buyer");
    formcontainer2.classList.remove("show");

}