var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});

var btnAbrirPopup_2 = document.getElementById('btn-abrir-popup-2'),
    overlay_2 = document.getElementById('overlay-2'),
    popup_2 = document.getElementById('popup-2'),
    btnCerrarPopup_2 = document.getElementById('btn-cerrar-popup-2');

btnAbrirPopup_2.addEventListener('click', function(){
    overlay_2.classList.add('active');
    popup_2.classList.add('active');
});

btnCerrarPopup_2.addEventListener('click', function(){
    overlay_2.classList.remove('active');
    popup_2.classList.remove('active');
});