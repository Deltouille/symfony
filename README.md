Informations de connexion :
Compte Admin :
  - Email : alexandre@gmail.com
  - MDP : admin
Compte User :
  - Email : alexandre.petit@gmail.com
  - MDP : user

Le site dispose de 8 pages
- Liste des Missions
- Liste des Agents
- Liste des Contacts
- Liste des Cibles
- Liste des Planques
- Liste des Nationnalitées
- Liste des Pays
- Liste des Spécialités

Chaque pages disposent d'un tableau affichant les données présente dans la base de données.
Chaque tableau peut être trié, un champ de recherche est aussi disponible.
Chaque pages disposent d'un bouton pour ajouter, modifier, supprimer ou acceder au détails d'un élément.
La suppression se fait directement a l'appuis du boutton "supprimer" et disparait automatiquement du tableau sans avoir a recharger la page grâce a AJAX
Chaque fomulaires disposent de vérification si besoin, par exemple vérifier si un agent est de la même nationnalité que la cible, si oui le formulaire retourne une erreur.

La base de donnée est fournis avec des données déjà présentes pour toutes les pages, la table des Pays et Nationnalité contient tout les pays et nationnalités.
La base de donnée tourne sous MySQL s'appelle study_symfony_evaluation.
La ligne de connexion se trouve dans le fichier .env est ressemble a : DATABASE_URL="mysql://root@127.0.0.1:3306/studi_symfony_evaluation"
