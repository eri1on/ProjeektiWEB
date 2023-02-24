var  pht=document.querySelector("img");

function showphoto1(){
    pht.style.marginLeft="0%";
    document.querySelector('.phtml').style.display = 'block';
    document.querySelector('.pcss').style.display = 'none';
    document.querySelector('.pjava').style.display = 'none';
    document.querySelector('.pphp').style.display = 'none';

}

function showphoto2(){
    pht.style.marginLeft="-100%";
    document.querySelector('.phtml').style.display = 'none';
    document.querySelector('.pcss').style.display = 'block';
    document.querySelector('.pjava').style.display = 'none';
    document.querySelector('.pphp').style.display = 'none';
    
    
}

function showphoto3(){
    pht.style.marginLeft="-200%";
    document.querySelector('.phtml').style.display = 'none';
    document.querySelector('.pcss').style.display = 'none';
    document.querySelector('.pjava').style.display = 'block';
    document.querySelector('.pphp').style.display = 'none';
   
}


function showphoto4(){
    pht.style.marginLeft="-300%";
    document.querySelector('.phtml').style.display = 'none';
    document.querySelector('.pcss').style.display = 'none';
    document.querySelector('.pjava').style.display = 'none';
    document.querySelector('.pphp').style.display = 'block';

}




