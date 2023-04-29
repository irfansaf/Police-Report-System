const allBtn = document.getElementById("allBtn")
const investigationBtn = document.getElementById("investigationBtn")
const finishedBtn = document.getElementById("finishedBtn")
const approveBtn =document.getElementById("approveBtn")

const approve = document.getElementById("approve")
const allCase = document.getElementById("allCase")
const investigationsCase = document.getElementById("investigationsCase")
const finishedCase = document.getElementById("finishedCase")

allBtn.addEventListener('click',()=>{
    allCase.classList.remove('hidden')
    investigationsCase.classList.add('hidden')
    finishedCase.classList.add('hidden')
})
investigationBtn.addEventListener('click',()=>{
    allCase.classList.add('hidden')
    investigationsCase.classList.remove('hidden')
    finishedCase.classList.add('hidden')
})
finishedBtn.addEventListener('click',()=>{
    allCase.classList.add('hidden')
    investigationsCase.classList.add('hidden')
    finishedCase.classList.remove('hidden')
})
console.log("Dasdsadsdsa")
approveBtn.addEventListener('click',()=>{
    approve.classList.toggle("hidden")
})

