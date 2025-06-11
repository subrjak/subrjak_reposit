const overlay = document.getElementById('overlay');
const modalLogin = document.getElementById('modal-login');
const modalRegister = document.getElementById('modal-register');
const btnLogin = document.getElementById('btn-login');
const btnRegister = document.getElementById('btn-register');
const closeBtns = document.querySelectorAll('[data-close]');

function open(modal) {
    closeAll();
    overlay.style.display = 'flex';
    modal.style.display = 'block';
}
function closeAll() {
    overlay.style.display = 'none';
    modalLogin.style.display = 'none';
    modalRegister.style.display = 'none';
}

btnRegister.addEventListener('click', () => open(modalRegister));
btnLogin.addEventListener('click', () => open(modalLogin));
closeBtns.forEach(btn => btn.addEventListener('click', closeAll));
overlay.addEventListener('click', e => { if (e.target === overlay) closeAll(); });

document.getElementById('form-register').addEventListener('submit', e => {
    e.preventDefault();
    alert(`Register: ${e.target['reg-email'].value}`);
    closeAll();
});
document.getElementById('form-login').addEventListener('submit', e => {
    e.preventDefault();
    alert(`Login: ${e.target['login-email'].value}`);
    closeAll();
});

const loginModal = document.getElementById('loginModal');
const registerModal = document.getElementById('registerModal');
function closeAll() {
    loginModal.style.display = 'none';
    registerModal.style.display = 'none';
}
function open(modal) {
    modal.style.display = 'block';
}
document.getElementById('toRegister').addEventListener('click', function (e) {
    e.preventDefault();
    closeAll();
    open(registerModal);
});

document.getElementById('toLogin').addEventListener('click', function (e) {
    e.preventDefault();
    closeAll();
    open(loginModal);
});