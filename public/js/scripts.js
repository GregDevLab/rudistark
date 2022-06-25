// Activer, désactiver les annonces

window.onload = () => {
    let boutons = document.querySelectorAll(".form-check-input");

    for (let bouton of boutons) {
        bouton.addEventListener("click", activer);
    }
};

function activer() {
    let xmlhttp = new XMLHttpRequest;

    xmlhttp.open('GET', '/admin/activeAnnonce/' + this.dataset.id);

    xmlhttp.send();
}

// Affichages des annonces

$(document).ready(function () {
    $('#list').click(function (event) { event.preventDefault(); $('#products .item').addClass('list-group-item'); });
    $('#grid').click(function (event) { event.preventDefault(); $('#products .item').removeClass('list-group-item'); $('#products .item').addClass('grid-group-item'); });
});

// Nav

var myLink = document.querySelector('a[href="#"]');
myLink.addEventListener('click', function (e) {
    e.preventDefault();
});