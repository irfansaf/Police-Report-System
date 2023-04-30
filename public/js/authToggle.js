const signUpBtn = document.getElementById('signUpBtn')
const signInBtn = document.getElementById('signInBtn')
const signUp = document.getElementById('signUp')
const signIn = document.getElementById('signIn')

signUpBtn.addEventListener('click',()=>{
    signUp.classList.remove('hidden')
    signIn.classList.add('hidden')
})
signInBtn.addEventListener('click',()=>{
    signIn.classList.remove('hidden')
    signUp.classList.add('hidden')
})

