function toggleDropdown() {
    document.querySelector('.custom-dropdown').classList.toggle('active');
}

function selectOption(element) {
    const selectedOption = document.querySelector('.selected-option');
    const flag = element.querySelector('img').src;
    const language = element.getAttribute('data-value');

    selectedOption.querySelector('img').src = flag;

    document.querySelector('.custom-dropdown').classList.remove('active');

    // Reload page with selected language
    window.location.href = `?lang=${language}`;
}
