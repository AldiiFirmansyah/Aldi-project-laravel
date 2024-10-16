document.getElementById('loginform').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'aldi';
    const correctPassword = '123';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctUsername && password === correctPassword){
        alert('login sukses');
        window.location.href = 'index';
    }else{
        alert ('Login Gagal');
    }
});