let popupBg = document.querySelector('.popup__bg');  
let popup = document.querySelector('.popup');  
let openPopupButtons = document.querySelectorAll('.open-popup');  

openPopupButtons.forEach((button) => {  
  button.addEventListener('click', (e) => {  
    e.preventDefault();  
    popupBg.classList.add('active');  
    if(popup){popup.classList.add('active');  }
  })
});
document.addEventListener('click', (e) => { 
  if(e.target === popupBg) {  
    popupBg.classList.remove('active');  
    if(popup){popup.classList.remove('active');}
  }
});


let popupComBg = document.querySelector('.popup_com_bg');  
let popupCom = document.querySelector('.comment-respond');  
let review_form = document.getElementById('review_form');  
let openComPopupButtons = document.querySelectorAll('.open_coment-popup');  


openComPopupButtons.forEach((button) => {  
  button.addEventListener('click', (e) => {  
    e.preventDefault();  
    popupComBg.classList.add('active');  
    popupCom.classList.add('active');  
    review_form.style.display = 'block';  
  })
});
document.addEventListener('click', (e) => { 
  if(e.target === popupComBg) {  
    popupComBg.classList.remove('active');  
    popupCom.classList.remove('active');  
    review_form.style.display = 'none'  ;
  }
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}


let links = document.getElementsByTagName("a")
let all_links = Array.from(links);
let pattern = /optigel-combo-pack/
let pattern2 = /shop/

all_links.forEach(function(item) {
  // console.log(item.pathname);  
  if(pattern.test(item.pathname)){
          item.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '/';
     }, false);
    };
  if(pattern2.test(item.pathname)){
          item.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '/';
     }, false);
    };

});

