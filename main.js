
/*메시지 팝업*/
function showPopup() { window.open("message.html", "a", "width=450, height=600, left=100, top=50"); }


/*메시지 창*/
$('.chat-input input').keyup(function(e) {
    if ($(this).val() == '')
      $(this).removeAttr('good');
    else
      $(this).attr('good', '');
  });
  