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

function changeSite(){
    window.location.href = './index.html#scroll-to';
}

function aboutMe(){
    window.location.href = './about-me.html';
}

function changeTo(site){
    window.open(site);
}

function mobile(){
    var width = window.innerWidth <= 900;
    var pcHeader = document.getElementById('header-pc');
    var mobileHeader = document.getElementById('header-mobile');  
    if(width) {
        pcHeader.setAttribute("hidden", "hidden");
        mobileHeader.removeAttribute("hidden");
    } else{
        pcHeader.removeAttribute('hidden');
        mobileHeader.setAttribute("hidden", "hidden");
    }    
}
