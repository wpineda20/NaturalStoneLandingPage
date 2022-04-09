// const btnScrollToTop = document.querySelector('#btnScrollToTop');

// btnScrollToTop.addEventListener("click", () =>{

//     window.scrollTo(0,0);

//     window.scrollTo({
//         top: 0,
//         left: 0,
//         behavior: "smooth",
//     });

//     $("html, body").animate({ scrollTo: 0}, "slow");

// })

window.addEventListener('scroll', ()=>{
    var scroll = document.querySelector('.btnScrollToTop');

    scroll.classList.toggle("active", window.scrollY > 500)
    
});

function scrollToTop(){
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth",
        })
    }