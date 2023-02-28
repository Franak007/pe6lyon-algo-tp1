# Énoncé 2

## FONCTION estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : entier


FONCTION mêmeDate(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : booléen
DEBUT
    SI annee1 = annee2
        ET mois1 = mois2
        ET jour1 = jour2 ALORS
        Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN

FONCTION dateAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : booleen
DEBUT

    SI annee1 < annee2 ALORS
        Renvoyer VRAI
    FINSI

    SI annee1 = annee2
        ET mois1 < mois2 ALORS
        Renvoyer VRAI
    FINSI
    
    SI annee1 = annee2
        ET mois1 = mois2
        ET jour1 < jour2 ALORS
        Renvoyer VRAI
    FINSI

    Renvoyer FAUX
FIN

FONCTION estAvant(var annee1, var mois1, var jour1, var annee2, var mois2, var jour2) : entier
DÉBUT
    Déclarer AVANT <- -1
    Déclarer PAREIL <- 0
    Déclarer APRÈS <- 1

    # Mêmes dates
    SI mêmeDate(annee1, mois1, jour1, annee2, mois2, jour2) ALORS
        Renvoyer PAREIL
    FINSI

    # Date1 AVANT Date2
    SI dateAvant(annee1, mois1, jour1, annee2, mois2, jour2) ALORS
        Renvoyer AVANT
    FINSI

    Renvoyer APRÈS
FIN