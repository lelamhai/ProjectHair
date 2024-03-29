window.addEventListener("load", event => {

    // Expand Left Side
    var icon = document.querySelector('.left__icon'),
        left = document.querySelector('.left');

    icon.addEventListener('click', expand);

    function expand() {
        if (left.classList.contains('show')) {
            left.classList.remove('show')
        } else {
            left.classList.add('show')
        }
    }

    var menuItem = document.querySelectorAll('.left__menuItem');

    menuItem.forEach(function (el) {
        el.addEventListener("click", openMenu);
    });

    function openMenu(event) {
        var currentmenuItem = event.currentTarget;

        if (currentmenuItem.classList.contains('open')) {
            currentmenuItem.classList.remove('open');
            let icon = currentmenuItem.querySelector('.left__title i');
            console.log(icon);
            icon.className='fas fa-plus';
        } else {
            currentmenuItem.classList.add('open');
            let icon = currentmenuItem.querySelector('.left__title i');
            console.log(icon);
            icon.className='fas fa-minus';
        }
    };
})


$(document).ready(function () {
    $(".btn-delete-order").click(function () {
        var idOrder = parseInt($(this).data('order'));
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            url:"/admin/order/delete/{idOrder}",
            method:'DELETE',
            data: {
                _token: token,
                idOrder: idOrder
            },
            success: function (response){
                if(response.result)
                {
                    location.reload(true);
                }
          }
         });
    });


    $(".btn-detail-order").click(function () {
        var token = $("meta[name='csrf-token']").attr("content");
        var idOrder = parseInt($(this).data('order'));
        $.ajax({
            url:"/admin/order/detail/{idOrder}",
            method:'POST',
            data: {
                _token: token,
                idOrder: idOrder
            },
            success: function (response){
                console.log(response.data);
                if(response.result)
                {
                    $(".item-detail-order").remove();
                    for(var i=0; i<response.data.length; i++)
                    {
                        var price = response.data[i][0].price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
                        $('.wrap-detail-order').append('<div class="item-detail-order"><a href=""><div class="img-detail-order"><img src="'+response.data[i][0].thumbnail+'" alt=""></div><div class="title-detail-order">'+response.data[i][0].title+'</div><div class="amount-detail-order">Số Lượng: '+ response.data[i][0].amount+'</div><div class="price-detail-order">Giá: '+price+' ₫</div> </a></div>');
                    }
                }
          }
         });
    });

    $("#imgInp").change(function(){
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#output').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    // booking
    $( ".status-service" ).change(function() {
        var token = $("meta[name='csrf-token']").attr("content");
        var idBook = $(this).data('book');
        var status = $(this).val();

        $.ajax({
            url:"/admin/update-booking",
            method:'POST',
            data: {
                _token: token,
                idBook: idBook,
                status: status
            },
            success: function (response){
                if(response.result)
                {
                    location.reload(true);
                }
          }
         });
    });



    $( ".right__table-item .report-stylist" ).click(function () {
        var idStylist = $(this).data('stylist');
        var _index = $(this).data('index');
        $("#report-"+idStylist).css('display','block');
        $( ".item-report" ).each(function( index ) {
            if(_index != index )
            {
                $( this ).remove();
            } 
        });
    });

    // $( ".close" ).click(function () {
    //     $(".item-report").css('display','none');
    // });
    
    // $( ".btn-save" ).click(function () {
    //     $(".item-report").css('display','none');
    // });
});