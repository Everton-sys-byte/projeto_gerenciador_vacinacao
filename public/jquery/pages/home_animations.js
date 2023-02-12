var windowHeight = $(window).height()
console.log(windowHeight)
$(window).scroll((event)=>{
    var scrollY = $(window).scrollTop()
    console.log(scrollY)
    if(scrollY >= (windowHeight / 2))
    {
        $(".funcionalidades").animate({
            opacity: '1',
            left: '0px',
        }, 1000)

        $('.image').animate({
            opacity: '1',
            left: '0px',
        },1000) 

    }

    if(scrollY >= 800)
    {
        $('.informations-cards').animate({
            opacity: '1',
            top: '0px'
        }, 1000)
    }
})