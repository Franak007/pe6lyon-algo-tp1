# Énoncé 1
## Tester si une date est valide

<?php
/*

FONCTION estBissextile(var annee)
DÉBUT
        1600 => bissextile
        1700 => PAS bissextile
        1704 => bissextile
        1705 => PAS bissextile
    SI annee divisible par 400 ALORS
        Renvoyer VRAI
    FINSI
    SI annee divisible par 100 ALORS
        Renvoyer FAUX
    FINSI
    SI annee divisible par 4 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN
*/

function estBissextile($annee)
{
    if (($annee % 400) == 0) {
        return true;
    }
    if (($annee % 100) == 0) {
        return false;
    }
    if (($annee % 4) == 0) {
        return true;
    }

    return false;
}

function estValideJour($annee, $mois, $jour)
{
    if ($jour < 1) {
        return false;
    }
    if (($mois == 4
        || $mois == 6
        || $mois == 9
        || $mois == 11)
        && $jour <= 30) {
        return true;
    }
    if ($mois == 2) {
        if ((estBissextile($annee) && $jour <= 29)
        || ($jour <= 28)) {
            return true; 
        } else {
            return false;
        }
    }
    
    if ($jour <= 31) {
        return true;
    }
    return false;
}

function estValideMois($mois)
{
    if ($mois >= 1 
        && $mois <= 12) {
        return true;
    }
    return false;
}

function estValideAnnee($annee)
{
    if ($annee !=0) {
        return true;
    }
    return false;
}

function estValide($annee, $mois, $jour)
{
    if (estValideAnnee($annee)
        && estValideMois($mois)
        && estValideJour($annee, $mois, $jour)) {
            return true;
        }
        return false;
}

echo "test 30/02/2023 : ";
var_dump(estValideJour(2023,02,30));
echo "test 15/02/0000 : ";
var_dump(estValide(0000, 02, 15));
echo "test année 0 : ";
var_dump(estValideAnnee(0000));
