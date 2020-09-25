// Get the modal
window.onload = function(){
var modal = document.getElementById('modalx');
var x='';
// Get the button that opens the modal
var btn = document.getElementById("mybtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var ok= document.getElementById('yes');
$('.modal-pics a').click(function() {
    var value = "assests/images/profile_pics/defaults/anaconda.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics1 a').click(function() {
    var value = "assests/images/profile_pics/defaults/bear.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics2 a').click(function() {
    var value = "assests/images/profile_pics/defaults/capebuffalo.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics3 a').click(function() {
    var value = "assests/images/profile_pics/defaults/elephant.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics4 a').click(function() {
    var value ="assests/images/profile_pics/defaults/jaguar.png";
    x=value;
    var input = $('#dam');
    input.val(value);
     event.preventDefault();
});
$('.modal-pics5 a').click(function() {
    var value = "assests/images/profile_pics/defaults/lion.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics6 a').click(function() {
    var value = "assests/images/profile_pics/defaults/rhino.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics7 a').click(function() {
    var value = "assests/images/profile_pics/defaults/shark.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics8 a').click(function() {
    var value = "assests/images/profile_pics/defaults/eagle.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
$('.modal-pics9 a').click(function() {
    var value = "assests/images/profile_pics/defaults/tiger.png";
    x=value;
    var input = $('#dam');
    input.val(value);
    event.preventDefault();
});
// When the user clicks on the button, open the modal 
btn.onclick =function() {
   modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
ok.onclick = function() {
    if(x=="")
       { 
        alert("Select a display picture");
        modal.style.display = "block";
        }
    else
    {
        alert("Profile picture was saved ");
        modal.style.display = "none";   
    }    
}
}