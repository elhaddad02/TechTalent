// window.onload = function() {
    var addBtn = document.getElementById("add");
    addBtn.addEventListener("click", function() {
        var formationsDiv = document.getElementById("formations-prof");
        
        // Création d'un nouveau div
        var newDiv = document.createElement("div");
        newDiv.id = 'formation';
        // Contenu du nouveau div
        newDiv.innerHTML = `
            <label for="diplome">Diplôme<input type="text" name="diplome[]" placeholder="Entrez votre diplôme"></label>
            <label for="etablissement">Nom de l'établissement<input type="text" name="etablissement[]" placeholder="Votre établissement"></label>
            <label for="dateFormation">Date de formation<input type="date" name="dateFormation[]" placeholder="Date de formation"></label>
            <span id="remove">x</span>
        `;
        
        // Ajout du nouveau div à l'intérieur du div "formation"
        formationsDiv.appendChild(newDiv);

        // supprimer le div formation
        document.addEventListener("click", function(event) {
            if (event.target.id === "remove") {
                var formationToRemove = event.target.parentNode;
                formationToRemove.remove(); // Suppression du div parent
            }
        });
    });
// };
