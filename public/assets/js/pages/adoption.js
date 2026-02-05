document.addEventListener('DOMContentLoaded', () => {

    const caretakerDropdown = document.querySelector('#caretakerDropdown');
    const petDropdown = document.querySelector('#petDropdown');

    caretakerDropdown.addEventListener('change', () => {

        petDropdown.options.length = 1;

        const url = "http://127.0.0.1:3000/adoptions?caretaker_id="+caretakerDropdown.value;

        fetch(url, {
            method:"GET",
            headers: {
                "Content-Type" : "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            data.pets.forEach(pet => {
                const option = document.createElement('option')
                option.innerText = pet.name;
                petDropdown.appendChild(option);
            });
            // console.log();
        })
        .catch(error => console.log(error));

    });

});