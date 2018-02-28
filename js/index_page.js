var mediaQuery = window.matchMedia("(min-width: 750px)");


//Hide scroll bar on chat messages
var parent = document.getElementById('chat_container');
var child = document.getElementById('chat');
child.style.paddingRight =
    child.offsetWidth - child.clientWidth + 2 + "px"; //2px added to ensure fully hidden

window.onload = function(){
   $("#chat").animate({ scrollTop: $("chat").prop("scrollHeight")}, 1000);
};

//toggle menu for small screens and mobile devices
$("#menu_icon").click(function(){
    $("#drop_menu").slideToggle();
    $(this).toggleClass("upright rotated");
});


//hide drop menu if it is down and window is resized
//to where drop menu is no longer required
function hideDropMenu(){
    if(!mediaQuery.match){
        $("#drop_menu").hide();
        $("#menu_icon").removeClass("rotated");
        $("#menu_icon").addClass("upright");
    }
}

//listen for screen size change
mediaQuery.addListener(hideDropMenu);

