let navbar1 = document.getElementsByClassName('navbar')[0];
document.onscroll = function() {
    if (document.documentElement.scrollTop + window.innerHeight + 100 > document.documentElement.scrollHeight) {
        navbar1.style.bottom = '-100%';
    } else {
        navbar1.style.bottom = '0%';
    }
};
const language = document.querySelector(".language");
const languagesBox = document.querySelector(".languagesBox");

const exchange = document.querySelector(".exchange");
const exchangesBox = document.querySelector(".exchangesBox");

const toggle = (elem, className) => {
    elem.classList.toggle(className);
};

// language.addEventListener("click", () => {
//     toggle(languagesBox, "l_e_active");
// });
//
// exchange.addEventListener("click", () => {
//     toggle(exchangesBox, "l_e_active");
// });

const currentLanguageExchange = document.querySelector(".currentLanguageExchange");
const languageExchange = document.querySelector(".languageExchange");
const triangle=document.querySelector('.triangle-up');
const cont=document.querySelector('.cont');

currentLanguageExchange.addEventListener("click", () => {
    triangle.classList.toggle("activeMenu");
    cont.classList.toggle('fade');
    languageExchange.classList.toggle('langExchActive');
    languagesBox.classList.add("l_e_active");
    exchangesBox.classList.add("l_e_active");
});

const hamburder_menu=document.getElementsByClassName('hamburder_menu')[0];
const leftMenu = document.querySelector('.leftMenu');
const bodyTag = document.querySelector("body")
const bottomMenu = document.querySelector(".bottomMenu")

hamburder_menu.addEventListener('click',function(){
    leftMenu.classList.add("active");
    bodyTag.classList.add("modalni");
    bottomMenu.style = {display: "none !important"};
});

const modalClose = document.querySelector(".modalClose")

modalClose.addEventListener("click", () => {
    leftMenu.classList.remove("active");
    bodyTag.classList.remove("modalni");
    bottomMenu.style = {display: "flex !important"};
})

const modalMenuBtn = document.querySelectorAll(".modalMenuBtn")
const modalItem = document.querySelectorAll(".modalItem")

for (let i = 0; i < modalMenuBtn.length; i++) {
    modalMenuBtn[i].addEventListener("click", () => {
        modalItem[i].classList.toggle("active");
    })
}

const headerForm=document.querySelectorAll('.headerForm');
const headerSearch=document.querySelectorAll('.headerSearch');

for (let i = 0; i < headerSearch.length; i++){
    headerForm[i].addEventListener('submit', (e) => {
        headerSearch[i].value.trim();
        (headerSearch[i].value.length === 0 || headerSearch[i].value === " ")  && e.preventDefault();
    });
}

const bottomSearchArea = document.querySelector(".bottomSearchArea")
const bottomSearchButton = document.querySelector(".bottomSearchButton")
bottomSearchButton.addEventListener("click", () => toggle(bottomSearchArea, "active"));


const Language=document.querySelector('.languageDropdown');
const LanguageModal=document.querySelector('.langModal');
const change=document.querySelector('.currencyDropdown');
const changeModal=document.querySelector('.exchangeModal');
const popup=function(target,modal){
    target.addEventListener('click',()=>{
        modal.classList.remove('hidden2');
    });
    modal.addEventListener('click',()=>{
       modal.classList.add('hidden2');
    });
}

popup(Language,LanguageModal);
popup(change,changeModal);
