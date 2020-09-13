function formValidate() {
    let nameVal = document.getElementsByClassName('name')[0];
    let nameError = document.getElementsByClassName('nameError')[0];
    let surname = document.getElementsByClassName('surname')[0];
    let surnameError = document.getElementsByClassName('surnameError')[0];
    let num = document.getElementsByClassName('num')[0];
    let numError = document.getElementsByClassName('numError')[0];
    let city = document.getElementsByClassName('city')[0];
    let cityError = document.getElementsByClassName('cityError')[0];
    let address = document.getElementsByClassName('address')[0];
    let addressError = document.getElementsByClassName('addressError')[0];
    var letters0 = /^[A-Za-z]+$/;
    var letters1 = /^[Ա-Ֆա-ֆ]+$/;
    var letters2 = /^[А-Яа-я]+$/;
    var phone = /^[0-9]+$/;
    nameVal.addEventListener('click', function() {
        nameError.innerHTML = "";
        nameVal.style.border = "1px solid black";
    });
    num.addEventListener('click', function() {
        numError.innerHTML = "";
        num.style.border = "1px solid black";
    });
    surname.addEventListener('click', function() {
        surnameError.innerHTML = "";
        surname.style.border = "1px solid black";
    });
    city.addEventListener('click', function() {
        cityError.innerHTML = "";
        city.style.border = "1px solid black";
    });
    address.addEventListener('click', function() {
        addressError.innerHTML = "";
        address.style.border = "1px solid black";
    });
    switch (nameVal.value) {
        case "":
            nameError.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            nameVal.style.border = "1px solid red";
            return false;
    }
    switch (surname.value) {
        case "":
            surnameError.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            surname.style.border = "1px solid red";
            return false;
    }
    switch (num.value) {
        case "":
            numError.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            num.style.border = "1px solid red";
            return false;
    }
    switch (city.value) {
        case "":
            cityError.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            city.style.border = "1px solid red";
            return false;
    }
    switch (address.value) {
        case "":
            addressError.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            address.style.border = "1px solid red";
            return false;
    }
    switch (true) {
        case (nameVal.value.length > 50):
            nameError.innerHTML = "անվան տառերի քանակը չի կարող լինել 50ից ավել";
            return false;
    }
    switch (true) {
        case (surname.value.length > 50):
            surnameError.innerHTML = "ազգանվան տառերի քանակը չի կարող լինել 50ից ավել";
            return false;
    }
    switch (true) {
        case (num.value.length > 30):
            numError.innerHTML = "համարը  չի կարող լինել 50 նշից ավել";
            return false;
    }
    switch (true) {
        case (address.value.length > 50):
            addressError.innerHTML = "հասցեի տառերի քանակը չի կարող լինել 50ից ավել";
            return false;
    }
    switch (true) {
        case (city.value.length > 50):
            cityError.innerHTML = "քաղաքի տառերի քանակը չի կարող լինել 50ից ավել";
            return false;
    }
    switch (true) {
        case ((!nameVal.value.match(letters0) && !nameVal.value.match(letters1) && !nameVal.value.match(letters2)) && (!surname.value.match(letters1) && !surname.value.match(letters0) && !surname.value.match(letters2)) && (!city.value.match(letters0) && !city.value.match(letters1) && !city.value.match(letters2))):
            nameError.innerHTML = "Լրացրեք միայն տառեր";
            nameVal.style.border = "1px solid red";
            surnameError.innerHTML = "Լրացրեք միայն տառեր";
            surname.style.border = "1px solid red";
            cityError.innerHTML = "Լրացրեք միայն տառեր";
            city.style.border = "1px solid red";
            return false;
    }
    switch (true) {
        case (!num.value.match(phone)):
            numError.innerHTML = "Լրացրեք միայն թվեր";
            num.style.border = "1px solid red";
            return false;
    }
}
let inp=document.getElementById('inp');
let quantity=inp.value;
inp.value=quantity;

let finelPriceAM=document.getElementById('finelPriceAM');
let finelPrice=finelPriceAM.value;
finelPriceAM.value=finelPrice;

let size=document.getElementById('size');
let size1=size.value;
size.value=size1;

let color=document.getElementById('color');
let color1=color.value;
color.value=color1;

// let code=document.getElementById('code');
// let code1=color.value;
// code.value=code1;
