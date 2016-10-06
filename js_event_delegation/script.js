// Answer the questions here:

// - What do you think is going to happen?
//   console logs out the text inside the new button
// - What happened?
//   nothing happened
// - Why?
//   event handler was not applied to the new button. newButton did not exist when it buttons
//   were given the handler. Whereas, the other method is applied to the parent.
//========== Write your code below ===========//
$(document).ready(function(){
    $("#list").on('click','button',function(){
        console.log($(this).text());
    });
    var newButton = $("<li><button style='margin-top: 10px'>Delegated Button#5 Handler</button></li>");
    newList=$("<li>");
    newButton = $("<button>").attr("style","margin-top: 10px").text("Delegated Button#5");

    $("#list").append(newList.append(newButton));
    newNewList=$("<li>");
    var toGoggleButton = $("<button>").attr("style","margin-top: 10px").text("to Goggle!").click(function(){
        window.open("http://google.com");
    });
    $("#list").append(newNewList.append(toGoggleButton));
});