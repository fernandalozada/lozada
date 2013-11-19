 $(document).ready(function() {

 				//MENU HOME
 				$('#mainmenu').hide();

 				function showMenu(){
 					$('#mainmenu').fadeIn('slow');
 				}


 				setTimeout(showMenu, 4500);


 				//SLIDER 
                 $('.kwicks').kwicks({
                    maxSize : 550,
                    behavior: 'menu'
                });
            });