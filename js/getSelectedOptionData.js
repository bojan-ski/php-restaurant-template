import fetchMenuItems from './displayMenuItems/fetchMenuItems.js';
import { menuItemsCategories, menuItemsComplex, menuItemsSimple } from './displayMenuItems/menuItemsContainers.js';

document.addEventListener('DOMContentLoaded', async () => {
    const selectElement = document.querySelector('.select-option');
    const resultContainer = document.querySelector('.menu-items-list');     
    const selectedLanguage = document.documentElement.getAttribute('lang');    

    // Fetch and render menu items based on the selected option
    const handleMenuFetch = async (option) => {
        try {
            const data = await fetchMenuItems(option);                       

            // reset menu items content
            resultContainer.innerHTML = '';

            if(data.length == 0 && selectedLanguage == 'sr'){
                resultContainer.innerHTML = '<h3 class="text-white text-center text-danger fw-bold mb-5">Trenutno nemamo stavki iz menija</h3>';
            }else if(data.length == 0 && selectedLanguage == 'en'){
                resultContainer.innerHTML = '<h3 class="text-white text-center text-danger fw-bold mb-5">Currently there are no menu items </h3>';
            }

            // Render menu items based on the selected select option
            const categoryGroups = {
                categories: ['promo', 'doručak', 'americke_palacinke', 'slatke_palacinke', 'brusketi', 'burgeri', 'jela_po_porudžbini', 'salate', 'dezerti'],
                simple: ['sendvič', 'slane_palacinke', 'potaži', 'vafli'],
                complex: ['pica', 'paste']
            };

            if (categoryGroups.categories.includes(option)) {
                menuItemsCategories(option, data, resultContainer, selectedLanguage);
            } else if (categoryGroups.simple.includes(option)) {
                menuItemsSimple(option, data, resultContainer, selectedLanguage);
            } else if (categoryGroups.complex.includes(option)) {
                menuItemsComplex(data, resultContainer);
            }
        } catch (error) {
            resultContainer.innerHTML = '<h3 class="text-white text-center text-danger fw-bold mb-5">Greška prilikom prikazivanja stavki iz menija</h3>';
        }
    };

    // Load default option
    await handleMenuFetch(selectElement.value);

    // Update menu items on category change
    selectElement.addEventListener('change', async (e) => {
        await handleMenuFetch(e.target.value);
    });
});
