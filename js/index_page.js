//Hide scroll bar on chat messages
var parent = document.getElementById('chat_container');
var child = document.getElementById('chat');
child.style.paddingRight =
    child.offsetWidth - child.clientWidth + 2 + "px"; //2px added to ensure fully hidden

window.onload = function(){
  $("#chat").animate({ scrollTop: $('#chat').prop("scrollHeight")}, 1000);
};
