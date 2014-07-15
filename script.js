// var test = document.getElementById('more');

// test.addEventListener('click', function(e){
// 	alert("hey");
// }, false);

// letters = [];
// document.addEventListener('keypress', function(e){	
// 	letters.push(String.fromCharCode(e.keyCode));
// 	alert(letters);
// }, false);

var word = "";
document.addEventListener('keypress', function(e){
	word += String.fromCharCode(e.keyCode);
	if(word == "ngocky")
		alert('hey');
}, false);


//Smooth scrolling
$('a[href^="#"]').on('click', function(event) {
    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 600);
    }
});