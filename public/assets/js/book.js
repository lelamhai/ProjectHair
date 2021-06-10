$(document).ready(function () {
  var active_slot;
  var inside_slot;
  function change_status() {
    $(".slot-status").each(function (index, element) {
      let status = $(this).text();
      if (status !== "Còn chỗ") {
          let current = $(this).closest("td");
        $(current).addClass('het-slot');
      }
    });
  }

  function change_position() {
    let position = 0;
    $(".msg-box").each(function (index, element) {
      position += 1;
      if( (position % 2) == 0) {
        $(this).addClass('right');
      }
      
    });
  }

  function select_stylish(){
    $(".list-avatar-item").click(function () {
      let select = $(this);
      $(".list-avatar-item").removeClass('stylish-active');
      $(select).addClass('stylish-active');
      
    });
  }

  function loadLoadShedule() {
      var token = $("meta[name='csrf-token']").attr("content");
      var userId = parseInt($('.stylish-active').data('user'));
      $.ajax({
        url:"/book/load",
        method:'POST',
        data: {
            _token: token,
            userId: userId
        },
        success: function (response){
          console.log(response);
          if(response.result)
          {
            $( ".item-time").each(function( index, element ) {
              $(element).removeClass("booked");
            });

            var list = [];
             $.each(response.index, function( index, value ) {
              list.push(value.idEmp);
            });

            var i = 0;
            $.each(list, function() {
              $( ".item-time").each(function( index, element ) {
                  if(list[i] == index)
                  {
                      $(element).addClass("booked");
                  } 
              });
              i++;
            });
            
          }
        }
      });
  }

  loadLoadShedule();
  change_status();
  change_position();
  select_stylish();


  // =================== Event click avatar =========================
  $( ".list-avatar-item" ).click(function() {
      var token = $("meta[name='csrf-token']").attr("content");
      var userId = parseInt($(this).data('user'));
      $.ajax({
        url:"/book/user",
        method:'POST',
        data: {
            _token: token,
            userId: userId
        },
        success: function (response){
          console.log(response);
         if(response.result)
         {
             $( ".item-time").each(function( index, element ) {
                 $(element).removeClass("booked");
             });

            var list = [];
            for(var i=0; i < response.index.length; i++)
            {
              list.push(response.index[i].index);
            }
            // load time
             var i = 0;
             $.each(list, function() {
               $( ".item-time").each(function( index, element ) {
                   if(list[i] == index)
                   {
                      $(element).addClass("booked");
                   } 
               });
               i++;
             });
         }
      }
     });
  });

  // =================== Event click info =========================
  $( ".icon-info-bookig" ).click(function() {
      var token = $("meta[name='csrf-token']").attr("content");
      var userId = parseInt($(this).data('user'));
      $.ajax({
        url:"/book/comment",
        method:'POST',
        data: {
            _token: token,
            userId: userId
        },
        success: function (response){
          console.log(response);
          // console.log(response.comments[0]);
         if(response.result)
         {
            $(".fa-star").remove();
            $(".msg-box").remove();
            for(var i=0; i< response.comments.length; i++)
            {
                $(".popup-name").text(response.comments[i].emp_comment.name);
                if(i%2 == 0)
                {
                  $("#list-cmt").append("<div class='msg-box right'><b class='cmt-user'>"+response.comments[i].users_comment.name+"</b><p>"+response.comments[i].content +"</p></div>");
                } else {
                  $("#list-cmt").append("<div class='msg-box'><b class='cmt-user'>"+response.comments[i].users_comment.name+"</b><p>"+response.comments[i].content +"</p></div>");
                }
            }

            if(response.rates.length > 0)
            {
              var rates = 0;
              for(var i=0; i< response.rates.length; i++)
              {
                rates = rates + response.rates[i].rate;
              }
              rates = rates/response.rates.length;
              rates = Math.round(rates);
              for(var j=0; j < rates; j++)
              {
                  $('.rate').append('<i class="fas fa-star"></i>');
              }
            }
         }
      }
     });
  });

  // Choose time
  var index = -1;
  var date = "";
  $( ".item-time" ).click(function() {
    if($(this).hasClass("booked") )
    {
      return;
    }
    if($(this).hasClass("booking"))
    {
      $(this).removeClass("booking");
      index = -1;
    } else {
      if(index === -1 )
      {
          $(this).addClass("booking");
          index = $('.item-time').index(this);
          date = $.trim($(".time-schedule.active span").text());
      }
    }
  });
  // Radio

  // Submit booking
  $( "#btn-booking" ).click(function() {
      if(index != -1)
      {
          var token = $("meta[name='csrf-token']").attr("content");
          var empId = $(".UserId").val();
          var userId = $(".list-avatar-item.stylish-active").data('user');
          $.ajax({
            url:"/book/insert",
            method:'POST',
            data: {
                _token: token,
                userId: userId,
                empId: empId,
                date: date,
                index: index,
                service: 1
            },
            success: function (response){
              if(response.result)
              {
                console.log(response);
              }
          }
         });
      }
  });

});
