// check if numbe is odd
function isOdd(num) { return num % 2;}
// click counter
let clickCount = 0;
// click behaviour
document.querySelectorAll('.navix').forEach(function(el){
    el.addEventListener('click', function() {
        clickCount += 1;
        if (isOdd(clickCount)) {
            document.getElementById("mySidenav").style.width = "260px";
            el.classList.add("is-active");
            let nav = el.getAttribute("data");
            if (nav == 2) {
                document.getElementById("nav1").classList.remove("is-active");
            }
        } else {
            el.classList.remove("is-active");
            document.getElementById("mySidenav").style.width = "0";
            let nav = el.getAttribute("data");
            if (nav == 2) {
                document.getElementById("nav1").classList.remove("is-active");
            }
        }
    });
});

let menuCount = 0;
document.querySelectorAll(".menu-has-sub").forEach(function(el) {
    el.addEventListener('click', function() {
        menuCount += 1;
        if (isOdd(menuCount)) {
            el.nextElementSibling.style.display = "block";
            el.nextElementSibling.style.visibility = "visible";
            el.nextElementSibling.style.opacity = "1";
            el.lastElementChild.children[0].style.display = "none";
            el.lastElementChild.children[1].style.display = "block";
        } else {
            el.nextElementSibling.style.opacity = "0";
            el.nextElementSibling.style.display = "none";
            el.nextElementSibling.style.visibility = "hidden";
            el.lastElementChild.children[0].style.display = "block";
            el.lastElementChild.children[1].style.display = "none";
        }
    });
});