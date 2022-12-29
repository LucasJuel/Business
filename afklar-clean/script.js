function toggle(){
    item = document.getElementById('contact-stay');
    console.log(item)
    item.classList.toggle('opened');
    item.classList.toggle('contact-stay');
}


function scrollInto(){
    var scrollTo = document.getElementById('scroll-to');
    scrollTo.scrollIntoView({behavior: "smooth", block: "center"});
}