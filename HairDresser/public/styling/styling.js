
function menu(){
    var a = document.getElementsByClassName("navbarSmall");
    if(a[0].classList.contains('vivify')){
        a[0].classList.remove('vivify');
        a[0].classList.remove('fadeInTop');
        a[0].style.display = 'none';
        document.getElementsByTagName('nav')[0].style.height = "80px";
        document.getElementsByClassName("openMenu")[0].src = "http://localhost:8080/GitHub/Website_Hair_dresser/HairDresser/public/graphics/menuO.svg";
    }else{
        a[0].classList.add('vivify');
        a[0].classList.add('fadeInTop');
        a[0].style.display = 'block';
        document.getElementsByTagName('nav')[0].style.height = "220px";
        document.getElementsByClassName("openMenu")[0].src = "http://localhost:8080/GitHub/Website_Hair_dresser/HairDresser/public/graphics/menuC.svg";
    }
    
 
}

