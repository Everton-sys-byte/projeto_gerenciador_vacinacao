//pega o tamanho da página
const containers = Array.from($('[data-anime-container]'))
const animationClass = "animate"

// pagina home animações
$(window).scroll(()=>{
    animation()
})

const animation = () => {
    let scrollY = $(window).scrollTop()
        //calculo para pegar +- 3/4 da tela
    scrollY += (window.innerHeight * 0.65)
    containers.forEach(element => {
        if(scrollY > element.offsetTop)
            element.classList.add(animationClass)
        else
            element.classList.remove(animationClass)
    });
}




