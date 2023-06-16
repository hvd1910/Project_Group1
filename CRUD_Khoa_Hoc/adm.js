var navsystem = document.querySelector('.navsystem');
var systemlist = document.querySelector('.nav_system-list');
navsystem.onclick = function () {
    systemlist.classList.toggle('open_sytem');
}