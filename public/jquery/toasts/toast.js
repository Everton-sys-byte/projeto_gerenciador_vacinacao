let toast_element = $('.toast')

toast_element.show()

$('.toast .btn-close').click(()=>{
    toast_element.fadeOut('500')
})