# **TP : Création d'un Agenda Annuel en Mode Console avec PHP**

## **Objectif**

L'objectif de ce TP est de générer un agenda annuel graphique pour une année donnée en utilisant la librairie Carbon en PHP. Vous allez apprendre à utiliser des concepts de base en PHP pour créer une interface en ligne de commande qui affiche l'agenda d'une année complète.

## **Description du Script**

Le script demande à l'utilisateur de saisir une année et vérifie que cette année est valide. Ensuite, il crée un agenda annuel en mode console qui est affiché de manière graphique, avec chaque mois étant présenté de façon condensée, comme un calendrier.

Chaque jour de la semaine est affiché dans une grille, et les week-ends apparaissent en rouge pour les mettre en évidence. Cela permet d'obtenir une vue d'ensemble rapide et intuitive de l'année.

## **Fonctionnalités**

1. **Saisie de l'année** : L'utilisateur est invité à entrer une année, par exemple "2024".
2. **Vérification de l'année** : Le script vérifie si l'entrée est valide, c'est-à-dire un nombre positif.
3. **Affichage graphique de l'agenda** : L'agenda de chaque mois est affiché avec les jours alignés en colonnes (Lun, Mar, Mer, etc.). Les week-ends sont en rouge.
4. **Utilisation de la librairie Carbon** : Carbon est utilisé pour faciliter la manipulation des dates.


## **Exemple de Résultat**

Voici un exemple de sortie pour l'année 2024 (seuls quelques mois sont montrés) :

```
Entrez une année (ex: 2024) : 2024

====================== JANVIER 2024 ======================
Lun   Mar   Mer   Jeu   Ven   Sam   Dim
      1     2     3     4     5     6  
  7     8     9    10    11    12    13  
 14    15    16    17    18    19    20  
 21    22    23    24    25    26    27  
 28    29    30    31

====================== FÉVRIER 2024 ======================
Lun   Mar   Mer   Jeu   Ven   Sam   Dim
            1     2     3     4  
  5     6     7     8     9    10    11  
 12    13    14    15    16    17    18  
 19    20    21    22    23    24    25  
 26    27    28    29
```

Les jours de week-end apparaissent en **rouge**, permettant de facilement identifier les week-ends dans l'agenda.

## **Consignes Supplémentaires**

- Assurez-vous d'avoir installé la librairie Carbon via Composer avant d'exécuter le script.
- Les couleurs s'affichent correctement dans les terminaux qui prennent en charge les codes ANSI.