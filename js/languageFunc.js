function toggleDropdown() {
    document.querySelector('.custom-dropdown').classList.toggle('active');
}

function selectOption(element) {
    const selectedOption = document.querySelector('.selected-option');
    const flag = element.querySelector('img').src;

    selectedOption.querySelector('img').src = flag;

    document.querySelector('.custom-dropdown').classList.remove('active');
}