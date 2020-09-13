const categoryAdd=document.querySelector('.categoryAdd');
const addDiv=document.querySelector('.addDiv');
const etc=document.querySelector('.etc');
const categoryRemove=document.querySelector('.categoryRemove');
const hideDiv=document.querySelector('.hideDiv');
categoryAdd.addEventListener('click',()=>{
    const input=document.createElement('input');
    addDiv.appendChild(input);
    input.style.marginLeft="5px";
    input.style.width="50px";
    input.style.marginBottom="5px";
    input.setAttribute('name','size[]');
});
categoryRemove.addEventListener('click',function () {
    addDiv.removeChild(addDiv.lastChild);
});

// if(etc.hasAttribute('selected')){
//     hideDiv.style.display='block !important';
// }
