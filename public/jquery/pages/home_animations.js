//pega o tamanho da página
const containers = Array.from($('[data-anime]'))
const animationClass = "animate"


$(window).scroll(()=>{
    let scrollY = $(window).scrollTop()
    animation(scrollY)
})


const animation = (windowPosition) => {
        //calculo para pegar +- 3/4 da tela
    windowPosition += (window.innerHeight * 0.70)

    containers.forEach(element => {
        if(windowPosition > element.offsetTop)
            element.classList.add(animationClass)
        else
            element.classList.remove(animationClass)
    });
}
