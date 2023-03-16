//alerts dos cards
const alerts_delete = Array.from($('[delete-alert]'))

$('[btn-delete]').each((index, element)=>{
    element.addEventListener('mouseenter', ()=>{
        alerts_delete[index].classList.add(animationClass)
    })
    element.addEventListener('mouseout',()=>{
        alerts_delete[index].classList.remove(animationClass)
    })
})