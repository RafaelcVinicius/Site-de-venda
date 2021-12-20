
const btnmobile = document.getElementById("btn-mobile");

btnmobile.addEventListener('click', mobilemenu);

function mobilemenu(){
    const nav = document.getElementById("nav_bar");
    const btn = document.getElementById("btn-mobile");
    nav.classList.toggle('active');
    btn.classList.toggle('active');
}