/* slideshow*/
		var slides = document.getElementsByClassName('picture');
	    var currentSlide = 0;
	    var slideInterval = setInterval(nextSlide,3000);
	
	    function nextSlide(){
	      slides[currentSlide].className = 'picture';
		  currentSlide = (currentSlide+1)%slides.length;
		  slides[currentSlide].className = 'picture showing';
	    }

//navigation bar
	    function myFunction() {
		    var x = document.getElementById("myTopnav");
		    if (x.className == "topnav") {
		        x.className += " responsive";
		    } else {
		        x.className = "topnav";
		    }
		    }
			