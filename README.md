# Test Maker

Ce repository contient le code source de l'application de tests techniques. Cette application permet de tester les compétences techniques des candidats.

## Explications

Nous vous fournissons une base simple avec un datagrid. Nous vous demandons d'intégrer des données dans ce datagrid afin de l'afficher de façon plus user friendly. Il vous faudra ensuite créer une nouvelle route pour afficher un nouveau datagrid avec des données personnalisées cette fois-ci.

## Technologies

- [React](https://fr.reactjs.org/) pour le front
- [PHP](https://www.php.net/) (vanilla) pour le back
- [MySQL](https://www.mysql.com/fr/) pour la base de données
- [Material UI](https://mui.com/) pour l'UI
- [Axios](https://axios-http.com/fr/docs/intro) pour les requests
- [React Router](https://reactrouter.com/en/main) pour le routing

## Installation 

1. Cloner le repository
2. Accéder au dossier du repository
3. Installer les dépendances

## Consignes et précisions

**Tous les packages nécessaires sont déjà présents dans le package.json.**

1. En utilisant l'API [JSONPlaceholder](https://jsonplaceholder.typicode.com/), <ins>vous devez 'peupler' le datagrid principal</ins>. 
Le datagrid est déjà paramétré pour accueillir les données de cette API. Vous devez également
ajouter une nouvelle colonne 'Adress' et faire en sorte que la donnée affichée soit au format 'Street - City'.

2. Pour la suite, vous devez créer une nouvelle route à l'aide de [React Router](https://reactrouter.com/en/main). Cette route permet l'affichage d'un nouveau datagrid qui contiendra des données personnalisées (des posts). 
Pour cela, vous devez utiliser le script SQL fournis dans ```/resources``` pour créer la base de données MySQL. 
Dans le ```/back```, 4 routes sont mises à votre disposition, il s'agit d'un CRUD basique, vous devez écrire les fonctions qui conviennent pour le faire fonctionner !
