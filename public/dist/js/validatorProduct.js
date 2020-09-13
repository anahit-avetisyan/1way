function validate(){
    let titleAM=document.getElementsByClassName('titleAM')[0];
    let AMerror=document.getElementsByClassName('AMerror')[0];
    let titleRU=document.getElementsByClassName('titleRU')[0];
    let titleRU1=document.getElementsByClassName('titleRU1')[0];
    let titleEN=document.getElementsByClassName('titleEN')[0];
    let titleEN1=document.getElementsByClassName('titleEN1')[0];
    let selecterror=document.getElementsByClassName('selecterror')[0];
    let quantity=document.getElementsByClassName('quantity')[0];
    let quantity1=document.getElementsByClassName('quantity1')[0];
    let descriptionAM=document.getElementsByClassName('descriptionAM')[0];
    let descAMerror=document.getElementsByClassName('descAMerror')[0];
    let descriptionRU=document.getElementsByClassName('descriptionRU')[0];
    let descRUerror=document.getElementsByClassName('descRUerror')[0];
    let descriptionEN=document.getElementsByClassName('descriptionEN')[0];
    let descENerror=document.getElementsByClassName('descENerror')[0];
    let code=document.getElementsByClassName('code')[0];
    let codeerror=document.getElementsByClassName('codeerror')[0];
    let file=document.querySelector('.filestyle');
    let fileError=document.querySelector('.fileError');
    var brandSelect = document.querySelector(".brand").selectedIndex;
    var brandOption = brandSelect.options;



    titleAM.addEventListener('input', function() {
        AMerror.innerHTML = "";
        titleAM.style.border = "1px solid black";
    });
    descriptionAM.addEventListener('input', function() {
        descAMerror.innerHTML = "";
        this.style.border = "1px solid black";
    });
    descriptionRU.addEventListener('input', function() {
        descRUerror.innerHTML = "";
        this.style.border = "1px solid black";
    });
    descriptionEN.addEventListener('input', function() {
        descENerror.innerHTML = "";
        this.style.border = "1px solid black";
    });
    code.addEventListener('input', function() {
        codeerror.innerHTML = "";
        this.style.border = "1px solid black";
    });
    titleRU.addEventListener('input', function() {
        titleRU1.innerHTML = "";
        titleRU.border = "1px solid black";
    });
    titleEN.addEventListener('input', function() {
        titleEN1.innerHTML = "";
        this.border = "1px solid black";
    });
    quantity.addEventListener('input', function() {
        quantity1.innerHTML = "";
        quantity.border = "1px solid black";
    });

    switch (titleAM.value) {
        case "":
            AMerror.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            titleAM.style.border = "1px solid red";
            return false;
    }

    switch (titleRU.value) {
        case "":
            titleRU1.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            titleRU.style.border = "1px solid red";
            return false;
    }

    switch (titleEN.value) {
        case "":
            titleEN1.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            titleEN.style.border = "1px solid red";
            return false;
    }
    switch (quantity.value) {
        case "":
            quantity1.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            quantity.style.border = "1px solid red";
            return false;
    }
    switch (descriptionAM.value) {
        case "":
            descAMerror.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            descriptionAM.style.border = "1px solid red";
            return false;
    }
    switch (descriptionRU.value) {
        case "":
            descRUerror.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            descriptionRU.style.border = "1px solid red";
            return false;
    }
    switch (descriptionEN.value) {
        case "":
            descENerror.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            descriptionEN.style.border = "1px solid red";
            return false;
    }
    switch (code.value) {
        case "":
            codeerror.innerHTML = "Այս դաշտը չի կարող լինել դատարկ";
            code.style.border = "1px solid red";
            return false;
    }
    switch (brandOption[brandSelect].index) {
        case "0":
            alert('esh');
            return false;
    }
   console.log(brandSelect);
    console.log(brandOption);

    // var select = document.getElementsByClassName("custom-select")[0];

    // var brandValue=brand.options[select.selectedIndex].value;
    // var brandError=document.querySelector('.brandError');
    // var selectedValue = select.options[select.selectedIndex].value;
    // if (selectedValue == "selectcard")
    // {
    //    select.style.border='1px solid red';
    //    selecterror.innerHTML='Այս դաշտը ընտրված պետք է լինի';
    //    return  false;
    // }
    // if(brandValue=="selectcard"){
    //     brand.style.border='1px solid red';
    //     brandError.innerHTML='Այս դաշտը ընտրված պետք է լինի';
    //     return  false;
    // }
    //
    // if(file.files.length == 0 ){
    //     fileError.innerHTML="Նշեք ֆայլ";
    //     return false;
    // }




}


