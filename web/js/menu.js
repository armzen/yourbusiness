    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
	
	$(document).ready(function() {

	var dropItem1 = document.getElementsByClassName('dropdown')[0];
	var dropItem2 = document.getElementsByClassName('dropdown')[1];

	var dropMenu1 = document.getElementsByClassName('dropdown-menu')[0];
	var dropMenu2 = document.getElementsByClassName('dropdown-menu')[1];
	console.log(dropMenu1);
	console.log(dropMenu2);

	$(dropItem1).click(function(){
			$(dropMenu1).slideToggle(400);
		});

	$(dropItem2).click(function(){
			$(dropMenu2).slideToggle(400);
		});

});