const fetchMenuItems = async (option) => {
    try {
        const response = await fetch('./models/getMenuItems.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ userSelectedOption: option }),
        });

        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

        return await response.json();
    } catch (error) {
        throw new Error('Failed to fetch menu items.');
    }
};

export default fetchMenuItems;