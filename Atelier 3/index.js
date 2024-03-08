function calcul(x, y) 
{
    var pi = 3.14 ;
    if (x > 0)
    {
    return (x + y) * pi;
    }
    else
    {
        return y * pi;
    }
}
function nombres_parfait(n)
 {
    var resultats = [];
    for (var nombre = 2; nombre < n; nombre++)
     {
        var somme_diviseurs = 1; 
        for (var diviseur = 2; diviseur < nombre; diviseur++) {
            if (nombre % diviseur === 0) {
                somme_diviseurs += diviseur;
            }
        }
        if (somme_diviseurs === nombre) {
            resultats.push(nombre);
        }
    }
    return resultats;
}

var resultat = [];
var chaine1 = "abc";
var chaine2 = "de";

for (var i = 0; i < chaine1.length; i++) {
    for (var j = 0; j < chaine2.length; j++) {
        resultat.push(chaine1[i] + chaine2[j]);
    }
}

console.log(resultat);


// Définition du tableau T
var T = [17, 38, 10, 25, 72];

// Triage et affichage du tableau
T.sort();
console.log("Tableau trié :", T);

// Ajout de l'élément 12 au tableau et affichage
T.push(12);
console.log("Tableau avec l'élément 12 ajouté :", T);

// Renversement et affichage du tableau
T.reverse();
console.log("Tableau renversé :", T);

// Affichage de l'indice de l'élément 17
console.log("Indice de l'élément 17 :", T.indexOf(17));

// Suppression de l'élément 38 et affichage du tableau
T.splice(T.indexOf(38), 1);
console.log("Tableau avec l'élément 38 supprimé :", T);

// Affichage du sous-tableau du 2e au 3e élément
console.log("Sous-tableau du 2e au 3e élément :", T.slice(1, 3));

// Affichage du sous-tableau du début au 2e élément
console.log("Sous-tableau du début au 2e élément :", T.slice(0, 2));

// Affichage du sous-tableau du 3e élément à la fin de la liste
console.log("Sous-tableau du 3e élément à la fin de la liste :", T.slice(2));
