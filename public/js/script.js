//==============================================================
let arrow = document.getElementsByClassName('arrow')[0];
let hid = document.getElementsByClassName('hidden1')[0];
$('.arrow').click(function() {
    let products = document.getElementsByClassName('hidden')[0];
    this.style.display = 'none';
    products.style.display = 'block';
});
//==============================================================
let arrow1 = document.getElementById('arrow1');
let hid2 = document.getElementById('hidden2');
arrow1.addEventListener('click', function() {
    this.style.display = 'none';
    hid2.style.display = 'block';
});
//==============================================================
// let a = document.getElementsByClassName('prodsdiv');
// if (a.length < 16) {
//     arrow.style.display = "none";
// } else if (a.length >= 16) {
//     arrow.style.display = 'block';
// }


$('#button').click(function () {
    $("input[type='file']").trigger('click');
})

$("input[type='file']").change(function () {
    $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
})


