# **Manipulation des dates avec la librairie Nesbot/Carbon en PHP 🐘**

## **🎯 Objectif**

L'objectif de ce TP est de vous familiariser avec la librairie Nesbot/Carbon, un outil puissant pour manipuler les dates et heures en PHP. Vous allez apprendre à créer, formater et manipuler des objets de type **date** en utilisant Carbon.

## **🔍 Contexte**

Vous travaillez sur une application de gestion de réservations. Vous devez réaliser plusieurs opérations liées aux dates, telles que le calcul de durées, l'ajout de délais, et le formatage de dates pour une meilleure lisibilité.

## **❓ Questions**

Pour chaque question, écrivez un code PHP utilisant Carbon qui répond à la problématique posée.

1. **Création d'une date**  
   Créez un objet Carbon représentant la date d'aujourd'hui. Affichez cette date au format suivant : `d/m/Y H:i:s`.

2. **Date spécifique**  
   Créez une date représentant le 1er janvier 2025 à  midi. Affichez cette date sous la forme : `d/m/Y H:i`.

3. **Ajout de délais**  
   Créez un objet Carbon représentant la date d'aujourd'hui. Ajoutez-y 10 jours et affichez le résultat. Ensuite, ajoutez 3 mois et affichez de nouveau la date.

4. **Calcul de différence**  
   Créez deux dates : la date d'aujourd'hui et une date au 1er janvier 2024. Calculez le nombre de jours de différence entre ces deux dates et affichez le résultat.

5. **Date relative**  
   Créez un objet Carbon représentant la date d'il y a une semaine. Affichez cette date au format relatif (à l'aide de la méthode `diffForHumans()`).

6. **Vérification de week-end**  
   Créez une fonction qui prend une date en paramètre et vérifie si cette date correspond à un jour de week-end (samedi ou dimanche). Utilisez Carbon pour déterminer si la date est un weekend ou non.

7. **Formatage personnalisé**  
   Créez une date représentant la veille du jour d'aujourd'hui. Affichez cette date avec un format plus lisible tel que : "Le lundi 25 septembre 2024" (utilisez la méthode `locale()` pour afficher le nom du jour en 🇫🇷 français).

8. **Calcul d'âge**  
   Créez une date représentant le 15 mai 2000. Calculez l'âge qu'aurait une personne née à cette date aujourd'hui.

9. **Heure de départ et de retour**  
   Imaginez que vous prévoyez un ✈️ voyage qui démarre aujourd'hui à 9h00 et qui dure 7 jours et 5 heures. Utilisez Carbon pour calculer la date et l'heure de retour, puis affichez le résultat.

10. **Date d'échéance**  
    Créez une fonction qui prend une date de départ et une durée (en jours) et qui renvoie la date d'échéance. Testez cette fonction avec une date de départ aujourd'hui et une durée de 15 jours.

## **📋 Consignes**

- Utilisez l'autoloading de Composer pour inclure la librairie Nesbot/Carbon dans vos fichiers 🐘 PHP.
- Ajoutez des 💬 commentaires explicatifs à votre code pour expliquer chaque étape.
- Testez chaque fonctionnalité et présentez vos résultats dans un fichier texte ou directement dans le script 🐘 PHP.

## **📂 Livrables**

- Un fichier 🐘 PHP contenant vos réponses sous forme de code, ainsi que les résultats obtenus sous forme de 💬 commentaires.
- Un fichier texte expliquant les étapes principales de votre démarche et les difficultés rencontrées, si vous en avez eues.