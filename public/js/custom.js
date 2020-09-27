$(document).ready(function(){
    $(".make-favorite").on('click', function () {

         var id = $(this).data().id
        var user_id = $(this).data().user
        var curse = $(this).data().curse
        $.ajax({
            url:'/favorite/store/'+id +'/'+user_id + '/' + curse,
            type:"GET",
            dataType: "json",
            success:function (data) {

                if(data.success==true){
                    $('.flash-message-default').css('display',"flex")
                    $('.mssage-back').empty()
                    $('.mssage-back').append('Ավելացված է')
                    setTimeout(function(){
                        $('.flash-message-default').hide();// or fade, css display however you'd like.
                    }, 1000);

                }
            }
            })
    })
    $(".save-data-cart").on('click', function () {

        var id = $(this).data().id
        var user_id = $(this).data().user
        var curse = $(this).data().curse
        $.ajax({
            url:'/checkout/'+id +'/'+user_id + '/' + curse,
            type:"GET",
            dataType: "json",
            success:function (data) {

                if(data.success==true){
                    $('.flash-message-default').css('display',"flex")
                    $('.mssage-back').empty()
                    $('.mssage-back').append('Ավելացված է')
                    setTimeout(function(){
                        $('.flash-message-default').hide();// or fade, css display however you'd like.
                    }, 1000);

                }
            }
        })
    })



})
