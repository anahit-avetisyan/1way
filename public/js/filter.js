var inputLeft = document.getElementById("input-left");
var inputRight = document.getElementById("input-right");
var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

function setLeftValue() {
    var _this = inputLeft,
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.min(
        parseInt(_this.value),
        parseInt(inputRight.value) - 1
    );

    var percent = ((_this.value - min) / (max - min)) * 100;

    thumbLeft.style.left = percent + "%";
    range.style.left = percent + "%";
}
setLeftValue();

function setRightValue() {
    var _this = inputRight,
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.max(
        parseInt(_this.value),
        parseInt(inputLeft.value) + 1
    );

    var percent = ((_this.value - min) / (max - min)) * 100;

    thumbRight.style.right = 100 - percent + "%";
    range.style.right = 100 - percent + "%";
}
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function () {
    thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function () {
    thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function () {
    thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function () {
    thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function () {
    thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function () {
    thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function () {
    thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function () {
    thumbRight.classList.remove("active");
});

// let rangeinput1 = document.getElementById("rangeinput1");
// let rangeinput2 = document.getElementById("rangeinput2");

// // inputLeft.addEventListener('input',function () {
// //     rangeinput1.value=inputLeft.value;
// //     this.setAttribute('step','100000');
// // });
// // inputRight.addEventListener('input',function () {
// //     rangeinput2.value=inputRight.value;
// //     this.setAttribute('step','100000');
// // });
// rangeinput1.addEventListener("input", function () {
//     // inputLeft.setAttribute('value',`${this.value}`);
//     inputLeft.value = rangeinput1.value;
// });
// rangeinput2.addEventListener("input", function () {
//     // thinputRight.setAttribute('value',`${this.value}`);
//     inputRight.value = rangeinput2.value;
// });
//////////   /////////////////////////////////// ////////////// /////////////////
/////////////////////filter dropdowns/////////// ////////////// /////////////////
///////////  /////////////////////////////////// ////////////// /////////////////

const filterButton = document.querySelector(".filterButton");
const filtersHide = document.querySelector(".dropdownHide");

const dropdownController = function (button, dropdown) {
    button.addEventListener("click", function () {
        if (dropdown.classList.contains("dropdownHide")) {
            dropdown.classList.add("dropdownShow");
            dropdown.classList.remove("dropdownHide");
        } else {
            dropdown.classList.add("dropdownHide");
            dropdown.classList.remove("dropdownShow");
        }
    });
};
dropdownController(filterButton, filtersHide);
