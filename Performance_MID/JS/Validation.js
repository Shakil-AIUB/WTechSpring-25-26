document.addEventListener("DOMContentLoaded", function (){

const unitPrice = 1000;
const days = 30;

const quantityField = document.getElementById("quantity");
const totalField = document.getElementById("total");


quantityField.addEventListener("input", function (){

    let quantity = parseInt(quantityField.value) ||0;

    if(quantity <0){
        alert("Quantity cannot be less than 0");
        quantityField.value = 0;
        quantity = 0;
    }

    let totalPrice = unitPrice* quantity*days;

    totalField.value= totalPrice;

    if(totalPrice >1000) {
        alert("You are eligible for a gift coupon!");
    }

});

});