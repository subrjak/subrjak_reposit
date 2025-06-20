function createUser(name, email) {
    const data = {
        name: name,
        email: email
    };

    fetch('http://localhost/api/create_user', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + yourAccessToken
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Успех:', data);
        alert('Пользователь создан');
    })
    .catch(error => {
        console.error('Ошибка:', error);
        alert('Ошибка при создании пользователя');
    });
}

document.getElementById('form-register').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    createUser(name, email);
});