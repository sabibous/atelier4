# Atelier 4: jQuery

## Objectif
L'objectif principal de cet atelier est de se familiariser avec les concepts de l'API jQuery.

## Exercices

### 1. Validation de formulaire
Essayez d'implémenter le script de base sur jQuery pour valider les champs d'un formulaire d'inscription pour un site e-commerce, selon les règles suivantes :<br>
Les champs "nom", "prénom", "adresse", "email", "login", "mot de passe", "confirmer mot de passe", "téléphone", "civilité", "Pays" sont des champs obligatoires.<br>
Le champ "email" doit être contrôlé par un regex email.<br>
Le champ "téléphone" doit être contrôlé par une regex numéro de téléphone.<br>
Les champs "mot de passe" et "confirmer mot de passe" doivent être identiques.<br>

### 2. QCM côté client
Créer une page contenant un QCM avec 5 questions qui auront chacune 3 réponses possibles.<br>
Ajouter un bouton "Corriger" qui, au lieu d’envoyer les réponses à un serveur, les vérifie côté client : pour chaque question, si la bonne réponse est sélectionnée, la question apparaît en vert, sinon elle apparaît en rouge.<br>
De plus (toujours après appui sur le bouton "Corriger"), lorsqu’une mauvaise réponse a été sélectionnée, la réponse sélectionnée apparaît en rouge et la bonne réponse en vert. Lorsque la bonne réponse a été sélectionnée, elle apparaît en vert.<br>
Lorsque l’utilisateur clique sur "Corriger" alors que certaines questions n’ont pas de réponse sélectionnée, alors la correction n’a pas lieu et ces questions apparaissent en orange.<br>
Après la correction, un message apparaît sous le QCM avec la note obtenue.


### 3. Calculatrice classique
Développer une calculatrice classique similaire à l'image fournie, en utilisant l'API jQuery.<br>


### 4. Chargement de liste déroulante avec Ajax
En utilisant le mécanisme Ajax pour le chargement d’une liste déroulante selon une action sélectionnée appliquée sur une autre liste déroulante (pays → région → ville), les informations sont stockées dans une base de données MySQL (Trois tables).