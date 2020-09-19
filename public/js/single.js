let err = document.getElementsByClassName("err")[0];
let errcolor = document.getElementsByClassName("errcolor")[0];

const colorRadio = document.querySelectorAll(".colorRadio");
const colorRadioInput = document.querySelectorAll(".colorRadioInput");
const forColorRadio = document.querySelectorAll(".forColorRadio");

const sizeRadio = document.querySelectorAll(".sizeRadio");
const sizeRadioInput = document.querySelectorAll(".sizeRadioInput");
const forSizeRadio = document.querySelectorAll(".forSizeRadio");

const quantityRadio = document.querySelectorAll(".quantityRadio");
const quantityRadioInput = document.querySelectorAll(".quantityRadioInput");
const forQuantityRadio = document.querySelectorAll(".forQuantityRadio");

const selectRadio = (class1, class2, inputValue, error) => {
    for (let i = 0; i < class1.length; i++) {
        class1[i].addEventListener("click", () => {
            for (let s = 0; s < class1.length; s++) {
                class1[s].classList.remove("i1");
            }
            class1[i].classList.add("i1");
            error.style.display = "none";
            for (let j = 0; j < class2.length; j++) {
                class2[j].setAttribute("checked", "checked");
                class2[j].value = inputValue[i].value;
            }
        });
    }
};

selectRadio(colorRadio, forColorRadio, colorRadioInput, errcolor);
selectRadio(sizeRadio, forSizeRadio, sizeRadioInput, err);
selectRadio(quantityRadio, forQuantityRadio, quantityRadioInput, err);
selectRadio(quantityRadio, forQuantityRadio, quantityRadioInput, err);

// // let cart = document.getElementsByClassName('cart')[0];
// // let finalprice = document.getElementsByClassName('finalprice')[0].innerHTML;
// // let prodname = document.getElementsByClassName('prodname')[0].innerHTML;
// // var a;
// // inp.addEventListener('input', function() {
// //     a = inp.value;
// // });
// // var arr = {};
// // var arr1 = [];
// // var b = 0;
// // cart.addEventListener('click', function() {
// //     b++;
// //     arr.price = finalprice;
// //     arr.inp = a;
// //     arr.img = image.src;
// //     arr.name = prodname;
// //     arr1.push(arr)
// //     localStorage.setItem(b, JSON.stringify(arr1));
// // });

let imgdiv = document.getElementsByClassName("imgdiv");
var newimg = document.getElementsByClassName("newImg")[0];
var newDiv = document.getElementById("newDiv");
for (let i = 0; i < imgdiv.length; i++) {
    imgdiv[i].onclick = function () {
        newDiv.style.display = "block";
        newimg.style.backgroundImage = this.style.backgroundImage;
    };
}

var span = document.getElementsByClassName("spanX")[0];
newDiv.onclick = function (ev) {
    if (ev.target == newimg) {
        newDiv.style.display = "block";
    } else {
        newDiv.style.display = "none";
    }
};
let price = document.getElementsByClassName("price")[0];
let price1 = document.getElementsByClassName("price1")[0];
var inp = document.getElementsByClassName("priceinp")[0];
let max = document.getElementsByClassName("mxvalue")[0].innerHTML;
let plus = document.getElementsByClassName("plus")[0];
let minus = document.getElementsByClassName("minus")[0];
const quantity = document.querySelector("#quantity");

minus.addEventListener("click", function () {
    if (inp.value <= 1) {
        return false;
    }
    inp.value--;
    quantity.value = inp.value;
});
plus.addEventListener("click", function () {
    if (inp.value >= +max) {
        return false;
    }
    inp.value++;
    quantity.value = inp.value;
});
inp.addEventListener("input", function () {
    $(this).val(
        $(this)
            .val()
            .replace(/[^1-9]/g, "")
    );
    quantity.value = inp.value;
});

$(".check").click(function () {
    $(".check").removeClass("i1");
    $(".check").prev().removeAttr("checked");
    $(this).addClass("i1");
    err.style.display = "none";
    $(this).prev().attr("checked", "checked");
    err.style.display = "none";
    return false;
});
$(".checkcolor").click(function () {
    $(".checkcolor").removeClass("i1");
    $(".checkcolor").prev().removeAttr("checked");
    $(this).addClass("i1");
    errcolor.style.display = "none";
    $(this).prev().attr("checked", "checked");
});
function formValidate() {
    if ($(".check").hasClass("i1") && $(".checkcolor").hasClass("i1")) {
        err.style.display = "none";
        errcolor.style.display = "none";
        return true;
    } else if (
        !$(".check").hasClass("i1") &&
        !$(".checkcolor").hasClass("i1")
    ) {
        errcolor.style.display = "block";
        errcolor.innerHTML = "Նշի Գույն";
        err.style.display = "block";
        err.innerHTML = "Նշի Չափս";
        return false;
    } else if (!$(".checkcolor").hasClass("i1")) {
        errcolor.style.display = "block";
        errcolor.innerHTML = "Նշի Գույն";
        return false;
    } else if (!$(".check").hasClass("i1")) {
        err.style.display = "block";
        err.innerHTML = "Նշի Չափս";
        return false;
    }
}

////////////////////////////////////////////////
///////////////////////lightslider/////////////
/////////////////////////////////////////////
let slider = $("#lightSlider").lightSlider({
    gallery: true,
    item: 1,
    thumbItem: 4,
    enableDrag: true,
    controls: false,
});

const right = document.querySelector(".right");
const left = document.querySelector(".left");

right.addEventListener("click", () => {
    slider.goToNextSlide();
});

left.addEventListener("click", () => {
    slider.goToPrevSlide();
});

const alert = document.querySelector(".alert");
alert.classList.add("fade");
