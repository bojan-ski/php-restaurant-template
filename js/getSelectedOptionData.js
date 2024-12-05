document.querySelector('.select-option').addEventListener('change', function (e) {
    const userSelectedOption = e.target.value;
    // console.log(userSelectedOption);

    fetch('./db/getMenuItems.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            userSelectedOption
        })
    })
    .then(response => response.json())
    .then(data => console.log(data))
        // .then(response => response.json())
        // .then(data => {
        //     const resultContainer = document.querySelector('.menu-items-list');
        //     resultContainer.innerHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
        // })
        // .catch(error => console.error('Error:', error));
});

