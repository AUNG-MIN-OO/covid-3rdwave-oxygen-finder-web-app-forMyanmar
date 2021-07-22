let today = new Date();
let date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

document.getElementById("date").innerHTML = date;

// form show hide
$(".search-btn").click(function (){
    $(".hidden-form").removeClass("hide");
    $(".search-btn").addClass("hide");
})