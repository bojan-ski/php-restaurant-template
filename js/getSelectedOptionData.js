document.addEventListener('DOMContentLoaded', async () => {
    const selectElement = document.querySelector('.select-option');
    const resultContainer = document.querySelector('.menu-items-list');

    const fetchMenuItems = async (option) => {
        try {
            const response = await fetch('./db/getMenuItems.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ userSelectedOption: option }),
            });

            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            // console.log(response); 

            const data = await response.json();
            console.log(data);

            resultContainer.innerHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
        } catch (error) {
            console.error('Error:', error);
            resultContainer.innerHTML = '<p class="text-danger">An error occurred while fetching menu items.</p>';
        }
    }

    const defaultOption = selectElement.value;
    await fetchMenuItems(defaultOption);

    selectElement.addEventListener('change', async (e) => {
        const userSelectedOption = e.target.value;
        await fetchMenuItems(userSelectedOption);
    });
});



// document.querySelector('.select-option').addEventListener('change', async function (e) {
//     const userSelectedOption = e.target.value;

//     try {
//         const response = await fetch('./db/getMenuItems.php', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify({
//                 userSelectedOption
//             })
//         });
//         console.log(response);        

//         if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
       
//         const data = await response.json();
//         console.log(data);

//         const resultContainer = document.querySelector('.menu-items-list');
//         resultContainer.innerHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
//     } catch (error) {
//         console.error('Error:', error);
//     }
// });