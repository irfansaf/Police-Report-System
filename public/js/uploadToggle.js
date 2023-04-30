const upload = document.getElementById('photo')
const category  = document.getElementById('category')
const description = document.getElementById('description')

const uploadField = document.getElementById('photoField')
const categoryField = document.getElementById('categoryField')
const descriptionField = document.getElementById('descriptionField')

upload.addEventListener('click',()=>{
    uploadField.classList.remove('hidden')
    categoryField.classList.add('hidden')
    descriptionField.classList.add('hidden')
})

category.addEventListener('click',()=>{
    uploadField.classList.add('hidden')
    categoryField.classList.remove('hidden')
    descriptionField.classList.add('hidden')
})

description.addEventListener('click',()=>{
    uploadField.classList.add('hidden')
    categoryField.classList.add('hidden')
    descriptionField.classList.remove('hidden')
})
