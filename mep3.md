Correction algo 3 du TP1 : 
# MEP3

## PROCÉDURE afficherDurée(var secondes)


/*
    CN1 : calculerHeures(50) => 0
    CN2 : calculerHeures(75) => 0
    CN3 : calculerHeures(3670) => 13600 + 70 => 1
    CN4 : calculerHeures(7500) => 23600 + 300 => 2
/
FONCTION calculerHeures(var secondes) : entier
DÉBUT
    Renvoyer valeurEntière(secondes/3600)
FIN


/
    CN1 : calculerMinutes(50) => 0
    CN2 : calculerMinutes(65) => 1
    CN3 : calculerMinutes(3670) => 61m10s => 1 = calculerMinutes(70)
/
FONCTION calculerMinutes(var secondes) : entier
DÉBUT
    Retourner valeurEntière( (secondes / 60) % 60 )
FIN

/
    CN1 : calculerSecondes(50) => 50
    CN2 : calculerSecondes(60) => 0
    CN3 : calculerSecondes(65) => 5 (non implémenté)
/
FONCTION calculerSecondes(var secondes) : entier
DÉBUT
    Retourner (secondes%60)
FIN

FONCTION getMessageHeures(secondes) : chaîne
DÉBUT
    Déclarer message <- ""
    SI calculerHeures(secondes) <> 0 ALORS
        message <- message + calculerHeures(secondes) + "heure"
        SI calculerHeures(secondes) > 1 ALORS
            message <- message + "s"
        FINSI
        message <- message + " "
    FINSI
    Renvoyer message
FIN

/
    CN1 : afficherDuree(50) => "50s"
    CN2 : afficherDuree(65) => "1m 5s"
    CN3 : afficherDuree(3670) => "1h 1m 10s"
*/
PROCÉDURE afficherDurée(var secondes)
DÉBUT
    Déclarer message <- ""
    message <- message + getMessageHeures(secondes)
    message <- message + getMessageMinutes(secondes)
    message <- message + getMessageSecondes(secondes)

    Afficher message
FIN
