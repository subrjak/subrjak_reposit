const overlay = document.getElementById('overlay');
const modalLogin = document.getElementById('modal-login');
const modalRegister = document.getElementById('modal-register');
const btnLogin = document.getElementById('btn-login');
const btnRegister = document.getElementById('btn-register');
const closeBtns = document.querySelectorAll('[data-close]');

function closeAll() {
    overlay.style.display = 'none';
    modalLogin.style.display = 'none';
    modalRegister.style.display = 'none';
}
function open(modal) {
    closeAll();
    overlay.style.display = 'flex';
    modal.style.display = 'block';
}

btnRegister.addEventListener('click', () => open(modalRegister));
btnLogin.addEventListener('click', () => open(modalLogin));

closeBtns.forEach(btn => btn.addEventListener('click', closeAll));

overlay.addEventListener('click', e => {
    if (e.target === overlay) closeAll();
});

document.getElementById('toRegister').addEventListener('click', e => {
    e.preventDefault();
    open(modalRegister);
});
document.getElementById('toLogin').addEventListener('click', e => {
    e.preventDefault();
    open(modalLogin);
});

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