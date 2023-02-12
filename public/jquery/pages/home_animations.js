var windowHeight = $(window).height()
console.log(windowHeight)
$(window).scroll((event)=>{
    var scrollY = $(window).scrollTop()
    if(scrollY >= (windowHeight / 2))
    {
        $(".funcionalidades").animate({
            opacity: '1',
            left: '0px',
        }, 1000)

        $('.doctors').animate({
            opacity: '1',
            left: '0px',
        },1000)
    }
})