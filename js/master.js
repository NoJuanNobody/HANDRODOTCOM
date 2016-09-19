menu=document.querySelectorAll(".header-menu li a ");

if(page == "web"){
	// add active class to web
	menu[0].classList.add("active");
} else if(page == "contact"){
	// add class to contact
	menu[1].classList.add("active");
}else{
	// do nothing
}
console.log(page);
header=document.querySelector('.header');
window.addEventListener('scroll',onPageScroll, false);
function onPageScroll(){
	if(page == 'index' && window.scrollY > 700){
	header.classList.remove("hide");
		
		
	}else{
		header.classList.add("hide");
	}
}