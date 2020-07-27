const toggleModal = () => {
    document.querySelector('.modal')
        .classList.toggle('modal--hidden');
}

document.querySelector('#long_click')
    .addEventListener('click', toggleModal);

document.querySelector('.modal')
    .addEventListener('click', toggleModal);