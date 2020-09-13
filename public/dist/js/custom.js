$(document).ready(function(){
     $(".select-brend").on('change',function () {

         var id = $(this).val()
         var href = window.location.href

        if(href.includes('search')){
            var indexofSearch = href.indexOf('search=')
            var oldSearch = href.substring(indexofSearch, 100)
            var newSearch = 'search=' + id
            var newHref = href.replace(oldSearch,newSearch)
            href = newHref

        }else{
            href += '?search='+id
        }
         window.location = href
     })

    $(document).on('click',".watch-product-button",function () {
        var id =$(this).data().id
        $.ajax({
            url:'/product-data/'+id,
            type:"GET",
            dataType: "json",
            success:function (data) {
                // console.log(data);
                if(data.success){
                    console.log(data.product.titleAM,'ssss',data)
                    $('.watch-modal-title').text(data.product.titleAM)
                    $('.product-name-am').val(data.product.titleAM)
                    $('.product-name-ru').val(data.product.titleRU)
                    $('.product-name-en').val(data.product.titleEN)
                    $('.quantity').val(data.product.quantity)
                    $('.product-description-am').val(data.product.descriptionAM)
                    $('.product-description-ru').val(data.product.descriptionEN)
                    $('.product-description-en').val(data.product.descriptionRU)
                    $('.product-code').val(data.product.code)
                    $('.product-size-type').val(data.product.sizeName)
                    $('.product-size').val(data.product.size)
                    $('.product-sale').val(data.product.sale)
                    $('.price-am').val(data.product.priceAM)
                    $('.price-en').val(data.product.priceEN)
                    $('.price-ru').val(data.product.priceRU)
                    $('.product-brend').val(data.product.brend && data.product.brend.title ? data.product.brend.id:'' )
                    $('.product-category').val(data.product.category && data.product.category.titleAM ?data.product.category.id:'')
                    var imgs = JSON.parse(data.product.posters)
                    $(".img-container").empty()
                    if(imgs.length>0){
                       var img = ""
                        imgs.map(function (img) {
                            var imgSrc = "/images/"+img
                            var imgTag =`<img src=${imgSrc}  width=\"60\" class=\"img-product\">`
                            $(".img-container").append(imgTag)
                        })

                    }
                    // console.log(data.product.color.length,"ssjsj")
                    // if(data.product.color.length>5){
                    //     var colors =JSON.parse(data.product.color)
                    //
                    //
                    //     if(colors.length>0){
                    //         var checkbox = $(".product-color")
                    //
                    //         for(var i = 0; i < checkbox.length; i++){
                    //             console.log($(checkbox[i]).val());
                    //             if(colors.includes($(checkbox[i]).val())){
                    //                 $(checkbox[i]).prop("checked", true);
                    //             }
                    //         }
                    //
                    //
                    //     }
                    // }
                    $('#myModal').modal('show')
                }

            }
        })



    })
});
