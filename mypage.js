
/*메시지 팝업*/
function showPopup() { window.open("message.html", "a", "width=1200, height=780, left=100, top=50"); }


/*메시지 창*/
$('.chat-input input').keyup(function(e) {
    if ($(this).val() == '')
      $(this).removeAttr('good');
    else
      $(this).attr('good', '');
  });
  

  $(".person").on('click', function(){
    $(this).toggleClass('focus').siblings().removeClass('focus');
 })