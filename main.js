const openModal = document.querySelector(".hamburgerMenu");
const modalMenu = document.querySelector(".hamModal");
const closeModal = document.querySelector(".closeModal");

openModal.addEventListener('click', function(){
    modalMenu.classList.add('showModal')
})

closeModal.addEventListener('click', function(){
    modalMenu.classList.remove('showModal')
})