let imgdiv = document.getElementsByClassName('imgdiv')[0];
var newimg = document.getElementsByClassName("newImg")[0];
var newDiv = document.getElementById('newDiv');
imgdiv.onclick = function(){
    newDiv.style.display = "block";
    newimg.style.backgroundImage = this.style.backgroundImage;
}
var span = document.getElementsByClassName("spanX")[0]
newDiv.onclick = function(ev){
    if(ev.target==newimg){
        newDiv.style.display = "block"
    }
    else{
        newDiv.style.display = "none"
    }
}
let price = document.getElementsByClassName('price')[0];
let price1 = document.getElementsByClassName('price1')[0];
var inp = document.getElementsByClassName("priceinp")[0];
let max = document.getElementsByClassName('mxvalue')[0].innerHTML;
let plus = document.getElementsByClassName('plus')[0];
let minus = document.getElementsByClassName('minus')[0];
minus.addEventListener('click', function() {
    if (inp.value <= 1) {
        return false;
    }
    inp.value--;
});
plus.addEventListener('click', function() {
    if (inp.value >= +max) {
        return false;
    }
    inp.value++;
});
inp.addEventListener('input', function() {
    // price.style.display = 'none';
    // price1.style.display = 'inline-block';
    // price1.innerHTML = +price.innerHTML * +inp.value;
    // if (inp.value == 1) {
    //     price.style.display = 'inline-block';
    //     price1.style.display = 'none';
    // }
    $(this).val($(this).val().replace(/[^0-9]/g, ''));
    if (inp.value == 0) {
        inp.value = 1;
    } else if (inp.value >= +max) {
        inp.value = max;
    }
});
let miniproduct = document.getElementsByClassName('miniproduct');
let arrowslide = document.getElementsByClassName('arrowslide1')[0];
let showimg = document.getElementsByClassName('showimg');
let hiddenimg = document.getElementsByClassName('hiddenimg');
let arrowslideleft = document.getElementsByClassName('arrowslideleft1')[0];
// let image = document.getElementsByClassName('imgmini')[0];
for (let i = 0; i < miniproduct.length; i++) {
    miniproduct[i].addEventListener('click', function() {
        imgdiv.style.backgroundImage = "url(" + this.getAttribute('src') + ")";
    });
}
for (let k = 0; k < hiddenimg.length; k++) {
    hiddenimg[k].style.display = 'none';
    arrowslideleft.style.display = 'none';
    arrowslide.addEventListener('click', function() {
        this.display = 'none';
        hiddenimg[k].style.display = 'inline-block';
        arrowslideleft.style.display = 'inline-block';
    });
    arrowslideleft.addEventListener('click', function() {
        hiddenimg[k].style.display = 'none';
        arrowslideleft.style.display = 'none';
    });
}
for (let j = 0; j < showimg.length; j++) {
    arrowslide.addEventListener('click', function() {
        showimg[j].style.display = 'none';
        this.style.display = 'none';
    });
    arrowslideleft.addEventListener('click', function() {
        showimg[j].style.display = 'inline-block';
        arrowslide.style.display = 'inline-block';
    });
}
// let arrow3 = document.getElementsByClassName('arrow3')[0];
// arrow3.addEventListener('click', function() {
//     let prod = document.getElementsByClassName('hidden3')[0];
//     this.style.display = 'none';
//     prod.style.display = 'block';
//     let hidrow = document.getElementsByClassName('hiddenrow')[0];
//     hidrow.style.marginLeft = "-3%";
//     let nkar = document.getElementsByClassName('nkar');
//     let nkar1 = document.getElementsByClassName('nkar1');
//     for (let j = 0; j <= 5; j++) {
//         for (let i = nkar.length; i >= 0; i--) {
//             nkar[j].classList.remove('nkar');
//             for (let k = 0; k < nkar1.length; k++) {
//                 nkar1[k].classList.remove('nkar1');
//             }
//         }
//     }
// });
let err = document.getElementsByClassName('err')[0];
let errcolor = document.getElementsByClassName('errcolor')[0];
$('.check').click(function() {
    $('.check').removeClass('i1');
    $('.check').prev().removeAttr("checked");
    $(this).addClass('i1');
    err.style.display = 'none';
    $(this).prev().attr("checked", "checked");
    err.style.display = 'none';
    return false;
});
$('.checkcolor').click(function() {
    $('.checkcolor').removeClass('i1');
    $('.checkcolor').prev().removeAttr("checked");
    $(this).addClass('i1');
    errcolor.style.display = 'none';
    $(this).prev().attr("checked", "checked");
});
// let cart = document.getElementsByClassName('cart')[0];
// let finalprice = document.getElementsByClassName('finalprice')[0].innerHTML;
// let prodname = document.getElementsByClassName('prodname')[0].innerHTML;
// var a;
// inp.addEventListener('input', function() {
//     a = inp.value;
// });
// var arr = {};
// var arr1 = [];
// var b = 0;
// cart.addEventListener('click', function() {
//     b++;
//     arr.price = finalprice;
//     arr.inp = a;
//     arr.img = image.src;
//     arr.name = prodname;
//     arr1.push(arr)
//     localStorage.setItem(b, JSON.stringify(arr1));
// });
function formValidate() {
    if ($('.check').hasClass('i1') && $('.checkcolor').hasClass('i1')) {
        err.style.display = 'none';
        errcolor.style.display = 'none';
        return true;
    } else if (!$('.check').hasClass('i1') && !$('.checkcolor').hasClass('i1')) {
        errcolor.style.display = 'block';
        errcolor.innerHTML = 'Նշի Գույն';
        err.style.display = 'block';
        err.innerHTML = 'Նշի Չափս';
        return false;
    } else if (!$('.checkcolor').hasClass('i1')) {
        errcolor.style.display = 'block';
        errcolor.innerHTML = 'Նշի Գույն';
        return false;
    } else if (!$('.check').hasClass('i1')) {
        err.style.display = 'block';
        err.innerHTML = 'Նշի Չափս';
        return false;
    }
}


