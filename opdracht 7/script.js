function kleur_aanpassen() {
    const titel = document.getElementById("titel");

    if (titel.innerText === "Welkom!") {
        titel.innerText = "Inhoud aangepast!";
        titel.style.color = "red";
    } else {
        titel.innerText = "Welkom!";
        titel.style.color = "black";
    }
}