function additionalInfo(text, classes) {
    const paragraphEl = document.createElement('p');
    paragraphEl.textContent = text;
    paragraphEl.className = classes;

    return paragraphEl;
}

function createDivElement(classes) {
    const divEl = document.createElement('div');
    divEl.className = classes

    return divEl
}

function createCategoryTitle(category) {
    const categoryTitle = document.createElement('h3');
    categoryTitle.textContent = category;
    categoryTitle.className = 'category-title text-uppercase text-center fw-bold mb-3';

    return categoryTitle;
}

function createMenuTitle(size, title, classes) {
    const menuItemTitle = document.createElement(size);
    menuItemTitle.textContent = title;
    menuItemTitle.className = classes;

    return menuItemTitle
}

function createIngredientsDiv(item) {
    const ingredientsEl = document.createElement('div');
    ingredientsEl.className = 'ingredients';
    ingredientsEl.textContent = [
        item.ing_one,
        item.ing_two,
        item.ing_three,
        item.ing_four,
        item.ing_five,
        item.ing_six,
        item.ing_seven,
        item.ing_eight,
        item.ing_nine,
        item.ing_ten,
        item.ing_eleven,
        item.ing_twelve
    ].filter(Boolean).join(' | ');

    return ingredientsEl
}

function createPriceDiv(price) {
    const priceEl = document.createElement('div');
    priceEl.className = 'price col-2 text-end fw-bold fs-5';
    priceEl.textContent = `${price} RSD`;

    return priceEl
}

export function menuItemsCategories(option, data, resultContainer) {
    if (option == 'doručak') {
        const p = additionalInfo('Doručak se služi do 14h', 'mb-5 text-white');
        resultContainer.appendChild(p);
    }

    if (option == 'slatke_palacinke') {
        const p = additionalInfo('Palačinke naručite po broju.', 'mb-5 fs-5 text-white');
        resultContainer.appendChild(p);
    }

    // Get categories
    const groupedMenu = data.reduce((acc, item) => {
        if (!acc[item.category]) {
            acc[item.category] = [];
        }
        acc[item.category].push(item);

        return acc;
    }, {});

    // Display menu items per category
    for (const [category, menuItems] of Object.entries(groupedMenu)) {
        // Create category container
        const categoryContainer = createDivElement(`category ${category} text-white mb-5`)
        resultContainer.appendChild(categoryContainer);

        // Create category title
        const categoryTitle = createCategoryTitle(category)
        categoryContainer.appendChild(categoryTitle);

        // Create category sub title
        if (category == 'doručak') {
            const categorySubTitle = additionalInfo('Doručak se služi do 14h', 'text-center mb-4');
            categoryContainer.appendChild(categorySubTitle);
        }

        // Create/Add menu items for/to each category
        menuItems.forEach(item => {
            // Create menu item container
            const menuItemContainer = createDivElement('menu-item border-top py-3 mb-2')
            categoryContainer.appendChild(menuItemContainer);

            // Create menu item container
            const menuItemData = createDivElement('row justify-content-between')
            menuItemContainer.appendChild(menuItemData);

            // ROW ITEM 1
            const leftDiv = createDivElement('col-10')
            menuItemData.appendChild(leftDiv);

            // Create menu item title
            const menuItemTitle = createMenuTitle('h5', item.title, 'menu-item-title')
            leftDiv.appendChild(menuItemTitle);

            // Create/Add menu ingredients
            const ingredients = createIngredientsDiv(item)
            leftDiv.appendChild(ingredients);

            // ROW ITEM 2
            // Create/Add menu price
            const rightDiv = createPriceDiv(item.price)
            menuItemData.appendChild(rightDiv);
        });
    }
}

export function menuItemsSimple(option, data, resultContainer) {
    if (option == 'slane_palacinke') {
        const paraOne = additionalInfo('Palačinke naručite po broju.', 'mb-3 fs-5 text-white')
        resultContainer.appendChild(paraOne);

        const paraTwo = additionalInfo('POHOVANJE PALAČINKI 90 RSD', 'mb-3 fs-5 text-white text-uppercase')
        resultContainer.appendChild(paraTwo);
    }

    // Get categories
    const groupedMenu = data.reduce((acc, item) => {
        if (!acc[item.category]) {
            acc[item.category] = [];
        }
        acc[item.category].push(item);

        return acc;
    }, {});

    // Display menu items per category
    for (const [category, menuItems] of Object.entries(groupedMenu)) {
        // Create category container
        const categoryContainer = createDivElement(`category ${category} text-white mb-5`)
        resultContainer.appendChild(categoryContainer);

        // Create category title
        const categoryTitle = createCategoryTitle(category)
        categoryContainer.appendChild(categoryTitle);

        // Create/add ingredients and price
        menuItems.forEach(item => {
            // Create menu item container
            const menuItemData = createDivElement('row border-top py-3 justify-content-between')
            categoryContainer.appendChild(menuItemData);

            // ROW ITEM 1
            const leftDiv = createDivElement('col-10')
            menuItemData.appendChild(leftDiv);

            // Create menu item title
            const menuItemTitle = createMenuTitle('h6', item.title, 'mb-0 menu-item-title fs-5')
            leftDiv.appendChild(menuItemTitle);

            if (item.with_options) {
                const menuItemOptions = additionalInfo(item.with_options, 'mt-1 menu-item-options')
                leftDiv.appendChild(menuItemOptions);
            }

            // ROW ITEM 2
            // Create/Add menu price
            const rightDiv = createPriceDiv(item.price)
            menuItemData.appendChild(rightDiv);
        });
    }
}

export function menuItemsComplex(data, resultContainer) {
    // Get categories
    const groupedMenu = data.reduce((acc, item) => {
        if (!acc[item.category]) {
            acc[item.category] = [];
        }
        acc[item.category].push(item);

        return acc;
    }, {});

    // Display menu items per category
    for (const [category, menuItems] of Object.entries(groupedMenu)) {
        // Create category container
        const categoryContainer = createDivElement(`category ${category} text-white mb-5`)
        resultContainer.appendChild(categoryContainer);

        // Create category title
        const categoryTitle = createCategoryTitle(category)
        categoryContainer.appendChild(categoryTitle);

        // Create/add ingredients, size & price options
        menuItems.forEach(item => {
            // Create menu item container
            const menuItemContainer = createDivElement('menu-item border-top py-3 mb-2')
            categoryContainer.appendChild(menuItemContainer);

            // Create menu item container
            const menuItemData = createDivElement('row justify-content-between')
            menuItemContainer.appendChild(menuItemData);

            // ROW ITEM 1
            const divOne = createDivElement('col-10')
            menuItemData.appendChild(divOne);

            // Create menu title
            const menuItemTitle = createMenuTitle('h5', item.title, 'menu-item-title fw-bold')
            divOne.appendChild(menuItemTitle);

            // Create/Add menu ingredients
            const ingredients = createIngredientsDiv(item)
            divOne.appendChild(ingredients);

            // ROW ITEM 2
            // Create/Add menu price
            if (item.price) {
                const divTwo = createPriceDiv(item.price)
                menuItemData.appendChild(divTwo);
            }

            // ROW ITEM 3
            if (!item.price) {
                const divThree = createDivElement('row justify-content-between mt-3')
                menuItemData.appendChild(divThree);

                // SUB ROW ITEM 1
                const subDivOne = createDivElement('col-6')
                menuItemData.appendChild(subDivOne);

                const sizeOne = additionalInfo(item.size_small, 'size-options-one fw-bold mb-1')
                subDivOne.appendChild(sizeOne);

                // SUB ROW ITEM 2
                const subDivTwo = createDivElement('col-6')
                menuItemData.appendChild(subDivTwo);

                const priceOne = additionalInfo(`${item.price_small.replace(/\B(?=(\d{3})+(?!\d))/g, ",")} RSD`, 'price-one text-end fw-bold mb-1')
                subDivTwo.appendChild(priceOne);

                // SUB ROW ITEM 3
                const subDivThree = createDivElement('col-6')
                menuItemData.appendChild(subDivThree);

                const sizeTwo = additionalInfo(item.size_big, 'size-options-two fw-bold mb-1');
                subDivThree.appendChild(sizeTwo);

                // SUB ROW ITEM 4
                const subDivFour = createDivElement('col-6')
                menuItemData.appendChild(subDivFour);

                const priceTwo = additionalInfo(`${item.price_big.replace(/\B(?=(\d{3})+(?!\d))/g, ",")} RSD`, 'price-two text-end fw-bold mb-1')
                subDivFour.appendChild(priceTwo);

                // SUB ROW ITEM 5
                if (item.icon_one) {
                    const subDivFive = createDivElement('col-12 mt-1 d-flex align-items-center')
                    menuItemData.appendChild(subDivFive);

                    const divElOne = createDivElement('d-flex align-items-center inner-block')
                    subDivFive.appendChild(divElOne);

                    let iconSVG;
                    if (item.icon_one == 'Jaja') iconSVG = icons.jaja
                    if (item.icon_one == 'Ljuto') iconSVG = icons.ljuto
                    if (item.icon_one == 'Extra ljuto') iconSVG = icons.ekstra_ljuto
                    if (item.icon_one == 'Riba') iconSVG = icons.riba

                    divElOne.innerHTML = iconSVG;

                    const iconTextOne = additionalInfo(item.icon_one, 'ms-1 mb-0 text-white')
                    divElOne.appendChild(iconTextOne);

                    if (item.icon_two) {
                        const divElTwo = createDivElement('d-flex align-items-center inner-block ms-2')
                        subDivFive.appendChild(divElTwo);

                        let iconSVG;
                        if (item.icon_two == 'Jaja') iconSVG = icons.jaja
                        if (item.icon_two == 'Ljuto') iconSVG = icons.ljuto
                        if (item.icon_two == 'Extra ljuto') iconSVG = icons.ekstra_ljuto
                        if (item.icon_two == 'Riba') iconSVG = icons.riba

                        divElTwo.innerHTML = iconSVG;

                        const iconTexTwo = additionalInfo(item.icon_two, 'mb-0 text-white')
                        divElTwo.appendChild(iconTexTwo);
                    }
                }
            }
        });
    }
}

const icons = {
    jaja: `<svg xmlns="http://www.w3.org/2000/svg" data-bbox="34.501 20 130.999 160" viewBox="0 0 200 200" height="22" width="22" data-type="shape" aria-label="Jaja" role="img">
        <g>
            <path d="M100.352 20.048c.655-.188 34.258-2.071 57.471 54.604 22.839 55.734-12.168 86.99-16.193 90.379C127.122 177.458 111.023 180 99.978 180S72.74 177.458 58.7 165.408c-4.399-3.672-39.312-35.022-16.567-90.756 23.212-56.675 56.815-54.698 58.219-54.604zm-.374 150.538c9.454 0 23.307-2.071 35.194-12.333 4.025-3.389 34.258-30.503 14.04-80.023-20.405-49.897-47.736-48.955-48.86-48.861h-.562c-4.399 0-29.765 1.883-48.953 48.861-20.311 49.52 9.922 76.634 13.479 79.552 12.355 10.638 26.208 12.804 35.662 12.804zm-32.761-56.487c0-18.17 14.695-32.951 32.76-32.951s32.76 14.781 32.76 32.951-14.695 32.951-32.76 32.951-32.76-14.781-32.76-32.951zm9.361 0c0 12.992 10.483 23.536 23.4 23.536s23.4-10.544 23.4-23.536-10.483-23.536-23.4-23.536-23.4 10.544-23.4 23.536z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </g>
    </svg>`,
    ljuto: `<svg xmlns="http://www.w3.org/2000/svg" data-bbox="22.5 20 155 160" viewBox="0 0 200 200" height="22" width="22" data-type="shape" aria-label="Ljuto" role="img">
    <g>
        <path d="M166.22 74.889c-1.459-.915-3.009-1.647-4.65-2.287 3.282-9.697 7.294-28.999-1.459-52.602l-8.57 3.202c8.023 21.59 3.829 39.337 1.094 47.204-4.103-.366-8.205 0-12.126 1.189-8.114 2.653-14.405 8.691-17.596 17.107v.183c-.821 2.287-20.058 56.993-91.901 66.781-4.559.64-8.114 4.3-8.479 8.965-.365 4.666 2.279 8.691 6.656 10.154C40.221 178.353 51.891 180 63.743 180c46.315 0 94.454-25.523 109.223-62.39 10.576-26.347.274-38.056-6.838-42.721h.092zm-1.641 39.245c-16.593 41.624-83.513 67.787-132.928 51.321 0-.64.456-.732.638-.732 76.766-10.429 98.009-69.16 99.286-72.91 2.826-7.318 8.023-10.337 11.852-11.618 5.926-1.921 12.764-1.098 17.87 2.287 10.484 6.86 7.567 20.948 3.282 31.652z"></path>
    </g>
</svg>`,
    ekstra_ljuto: `<svg xmlns="http://www.w3.org/2000/svg" data-bbox="23.999 20 152.002 160" viewBox="0 0 200 200" height="22" width="22" data-type="shape" aria-label="Extra ljuto" role="img">
        <g>
            <path d="M166.416 92.827c-1.099-.759-2.282-1.35-3.549-1.857 2.704-8.185 5.746-23.882-1.352-42.953l-7.943 2.954c2.197 5.823 3.211 11.308 3.634 16.287l-.169 9.958c-.507 4.979-1.521 9.114-2.451 11.814a6.4 6.4 0 0 0-2.535 0c2.366-14.177-4.225-21.097-9.042-24.219-1.099-.759-2.282-1.35-3.465-1.857 2.704-8.186 5.746-23.882-1.352-42.954l-7.943 2.954c6.507 17.3 3.211 31.477 1.014 38.059-3.296-.338-6.591 0-9.802 1.013-6.845 2.278-12.084 7.342-14.703 14.346v.169c-.676 1.857-16.478 46.498-75.374 54.43a8.623 8.623 0 0 0-7.352 7.848c-.338 3.966 1.944 7.511 5.746 8.776 9.126 2.954 18.844 4.304 28.646 4.304 11.661 0 23.491-1.941 34.56-5.57-10.055 5.823-22.646 10.633-38.194 12.743-4.056.591-7.098 3.797-7.436 7.848-.338 3.966 1.944 7.511 5.746 8.776C62.227 178.565 71.945 180 81.747 180c38.363 0 78.247-21.013 90.5-51.477 8.788-22.025.169-31.73-5.746-35.612l-.085-.084zm-2.113 32.405c-13.605 33.924-68.445 55.274-108.498 42.11 35.659-4.81 56.868-22.194 68.783-37.046 9.295-11.646 12.929-21.603 13.436-22.954 2.197-5.823 6.338-8.27 9.464-9.283.76-.253 1.606-.422 2.366-.506 4.141-.759 8.535.084 11.915 2.363 8.365 5.4 5.999 16.793 2.534 25.316zm-131.82 14.093c63.731-8.213 90.618-37.968 94.29-54.481-.113.434-.232.859-.392 1.287a22.74 22.74 0 0 0-5.119-8.518c-.508-8.076-.785-16.017 1.824-26.296-.638 3.684-1.159 7.244-1.353 10.744a4.9 4.9 0 0 1 1.215-.68z"></path>
        </g>
    </svg>`,
    riba: `<svg xmlns="http://www.w3.org/2000/svg" data-bbox="20 52.499 160.001 95.001" viewBox="0 0 200 200" height="22" width="22" data-type="shape" aria-label="Riba" role="img">
    <g>
        <path d="M54.32 122.8c15.198 15.754 35.914 24.7 57.751 24.7v-.079a80.394 80.394 0 0 0 25.676-4.196c15.997-5.383 30.315-16.071 40.154-30.084 2.8-3.958 2.8-9.263 0-13.221-9.918-13.934-24.156-24.621-40.154-30.084-6.959-2.375-14.318-3.721-21.996-4.038-8.559-6.413-16.797-11.796-28.315-13.221-3.359-.475-6.559 1.267-8.079 4.117-2.72 5.067-4.399 11.638-4.799 18.367-7.519 4.038-14.318 9.104-20.237 15.279-5.199-7.521-13.838-13.458-24.156-16.229-3.199-.871-6.479.317-8.479 2.929-2 2.692-2.08 6.175-.32 9.025 4.239 6.729 6.239 16.229 6.239 20.505 0 3.721-1.84 13.459-6.319 20.505-1.84 2.85-1.68 6.333.32 9.025 1.92 2.613 5.279 3.8 8.479 2.929 10.397-2.771 19.116-8.708 24.235-16.229zm57.751 16.783c-21.357 0-41.513-9.5-55.431-26.125v-.079c-.88-1.108-2.24-1.583-3.679-1.425-1.36.158-2.56 1.108-3.119 2.375-3.359 7.838-11.518 14.171-21.837 16.942 5.199-8.154 7.519-19.396 7.519-24.7 0-4.988-2-16.15-7.519-24.779 10.318 2.771 18.397 9.104 21.757 16.862.16.475.48.871.88 1.267.8.792 1.92 1.188 3.04 1.188 1.12-.079 2.16-.554 2.88-1.425 6.559-7.838 14.558-14.171 23.676-18.683 1.36-.713 2.24-1.979 2.24-3.483.08-6.254 1.52-12.667 3.919-17.179 10.078 1.267 17.197 6.175 25.516 12.429.64.475 1.52.792 2.32.792 7.359.238 14.398 1.504 20.957 3.721 14.398 4.908 27.276 14.567 36.154 27.154a3.665 3.665 0 0 1 0 4.196c-8.879 12.588-21.757 22.246-36.154 27.155-7.442 2.53-15.2 3.797-23.119 3.797zm37.914-37.604c0 3.279-2.686 5.938-5.999 5.938s-5.999-2.658-5.999-5.938c0-3.279 2.686-5.938 5.999-5.938s5.999 2.659 5.999 5.938z" fill-rule="evenodd" clip-rule="evenodd"></path>
    </g>
</svg>`
};