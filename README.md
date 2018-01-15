# POO_combat
Un jeu de combat, pour apprendre la POO

Voici les règles :
SIMULATEUR DE BATAILLE

Exercice : Refaire ce jeu vidéo http://store.steampowered.com/app/616560/Ultimate_Epic_Battle_Simulator/
En plus simple évidemment ! Dans ton terminal avec du texte ;)

Crée dans ton programme les classes suivantes : Chevalier, Fantassin, Paysan, Dragon, Taureau, Poulet

Les classes Chevalier, Fantassin, Paysan héritent de la classe HUMAIN
Les classes Dragon, Taureau, Poulet héritent de la classe ANIMAL
les classes Humain et Animal dérivent de la classe PERSONNAGE

Chaque PERSONNAGE possede : POINT DE SANTÉ, POINT D'ATTAQUE, qui varie selon le personnage (un poulet a moins de points de santé qu'un dragon).

Les classes humains possedent en plus une caractéristique ARME, qui change selon le type d'humain (Épée à deux mains pour le chevalier, épée simple pour le fantassin, fourche pour le paysan)
Les armes héritent de la classe ARME.

Ton terminal au démarrage doit présenter la liste des personnages, et proposer une sélection (appuyer sur 1, 2... 6 pour sélection un personnage)
Il te demande ensuite quel adversaire tu choisis (Mêmes choix)

Une fois les 2 adversaires sélectionnés, le programme lance le combat :
A chaque tour, chaque adversaire frappe l'autre : tu déduis des points de santé de l'un les points d'attaque de l'autre.

Exemple de ce que le terminal peut afficher à chaque tour :

     Tour 3 :
     CHEVALIER tape PAYSAN : PAYSAN Perd 12 PV ! Il lui en reste 30 !
     PAYSAN tape CHEVALIER : CHEVALIER Perd 3 PV ! Il lui en reste 55 !

Le jeu s’arrête quand un des deux personnages meurt et annonce qui est victorieux (ou si les deux meurent en même temps, égalité).

Contrainte : Utiliser les classes et l'héritage, faire du code aussi DRY que possible.