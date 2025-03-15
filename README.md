# MISTER-QUIZ
# français
Objectifs
Avez-vous déjà regardé « Qui veut gagner des millions ? » et vous êtes-vous demandé ce que vous feriez si c'était vous ? Eh bien, vous n'y jouerez pas encore cette fois. Mais une fois ce projet terminé, vous pourrez le faire.

Vous devrez continuer à développer un site web de quiz déjà en cours de développement. Le code déjà créé est disponible ici . Il manque du code que vous devrez créer pour répondre à toutes les demandes décrites dans la Instructionssection.

Le projet est écrit en PHP et utilise Laravel , l'un des frameworks web PHP les plus connus (si ce n'est le plus connu). Vous devez donc installer PHP et Laravel sur votre machine (vous pouvez utiliser la méthode qui vous convient le mieux). Familiarisez-vous avec les signes dollar.

Instructions
Tout d'abord, les utilisateurs doivent pouvoir s'inscrire et se connecter. Pour s'inscrire, il faut saisir un nom d'utilisateur, une adresse e-mail, un mot de passe et une confirmation de mot de passe. Pour se connecter, il faut fournir l'adresse e-mail et le mot de passe. Si les identifiants de connexion sont incorrects, un message d'erreur devrait s'afficher.

Dans la page de connexion, il doit être possible de naviguer vers la page d'inscription, et vice versa.

L'utilisateur doit avoir dans ses attributs le nombre d'XP, déterminé par le nombre de questions auxquelles il a répondu correctement. Le score de chaque catégorie de questions doit également être enregistré au format x/ycorrespondant xaux bonnes réponses et yau nombre total de questions.

Après connexion, l'utilisateur est redirigé vers la page d'accueil. Celle-ci doit comporter au moins trois boutons, quatre s'il est connecté :

Le bouton Connexion / Bouton Profil => si l'utilisateur n'est pas connecté, le bouton de connexion doit être visible, sinon le bouton de profil doit être visible.
Le bouton Classement => affiche une liste des meilleurs joueurs.
Le bouton Démarrer le quiz => bouton qui, lorsqu'il est enfoncé, démarre un quiz.
Le bouton Déconnexion => N'est affiché que si l'utilisateur est connecté.
Questionnaire
En cliquant sur le Start Quizbouton de la page d'accueil, si l'utilisateur n'est pas connecté, il est redirigé vers la page de connexion (au lieu de commencer le quiz). Si l'utilisateur est déjà connecté, le site web doit présenter les questions et les réponses disponibles pour chacune d'elles. Le joueur peut alors choisir une réponse à chaque question et, en bas de la liste, soumettre le quiz et obtenir ses résultats.

Une question a :

le texte de la question
une catégorie. Les catégories disponibles doivent être :
Art
Histoire
Géographie
Science
Sportif
XP
Il y a certaines conditions que vous devez prendre en compte :

Après avoir démarré le quiz, si l'utilisateur actualise la page, les mêmes questions devraient apparaître.
La même chose doit se produire si l’utilisateur revient à la page d’accueil et recommence le quiz.
Toutes les questions doivent avoir reçu une réponse avant de pouvoir soumettre le quiz.
Au moins une question de chaque catégorie est requise.
Après avoir soumis le questionnaire, l'utilisateur sera redirigé vers une Resultspage. Cette page doit afficher :

Combien de questions l'utilisateur a-t-il répondu correctement et le nombre total de questions posées
Combien de questions l'utilisateur a-t-il répondu correctement dans chaque catégorie ?
Si un utilisateur répond correctement à une question, son XP est augmenté du XP de la question à laquelle il a répondu correctement. De plus, son score pour la catégorie de cette question doit être mis à jour.

Profil
Lorsque l'utilisateur visite son profil, les éléments suivants doivent être visibles :

son nom d'utilisateur
son email
son XP
son rang (en fonction de la quantité d'XP) :
< 1500 XP => Apprenti Quiz
1500 XP - 5000 XP => Quizer moyen
5000 XP - 10000 XP => Quizer épique
>= 10000 XP => Maître du quiz
le pourcentage de réponses correctes pour chaque catégorie
nombre de réponses correctes pour chaque catégorie
nombre total de questions répondues pour chaque catégorie
Seul l'utilisateur doit pouvoir voir son propre profil.

Classement
La page du classement doit afficher un tableau des 10 meilleurs joueurs classés par nombre d'XP. Chaque ligne du tableau doit contenir :

nom d'utilisateur
montant d'XP
nombre total de réponses correctes
Laravel
Si vous avez déjà ouvert le fichier zip du projet fourni, vous avez peut-être été surpris par la quantité de fichiers et de dossiers qu'il contient. Nous savons que cela peut être fastidieux.

Voici les principaux dossiers et fichiers avec lesquels vous allez jouer :

app/
Http/Controllers/-> est le dossier de chaque contrôleur dans Laravel. Un contrôleur contrôle le backend d'une route spécifique.
Models/-> fait référence aux modèles/classes utilisés dans l'application.
database/migrations/-> ici se trouvent les migrations qui font référence à la base de données.
public/-> est le dossier qui applique CSS, JS, images, etc. au site Web.
resources/views/-> désigne le dossier contenant toutes les vues des différentes pages du site web. Vous remarquerez que les fichiers qu'il contient portent l'extension .blade.php. Cette extension est utilisée par Laravel pour écrire du HTML avec du PHP. Vous pouvez en savoir plus sur les modèles Blade sur le web.
routes/web.php-> est le fichier responsable des itinéraires sur le site Web.
Bien sûr, il existe de nombreux autres dossiers et fichiers disponibles qui peuvent vous aider à concrétiser l'idée que vous avez en tête pour le site Web, mais c'est à vous de les rechercher.

Vous pouvez profiter des modèles et de la conception fournis dans le fichier zip de ressources fourni, ou vous pouvez choisir de mettre en œuvre vos propres idées de conception, à condition que les exigences du projet soient respectées.

Vous pouvez utiliser certaines commandes pour, par exemple, créer des contrôleurs, créer des migrations, appliquer des migrations, etc. Les possibilités sont infinies. Vous remarquerez qu'à la racine du projet se trouve un fichier artisan. Essayez d'exécuter php artisanle fichier à la racine d'un projet Laravel et vous verrez toutes les commandes disponibles.

Base de données
Afin d'appliquer les migrations dans le database/migrations/répertoire, vous devrez créer une base de données. Shocker.

L'un des moyens d'y parvenir est d'utiliser XAMPP. XAMPP est l'environnement de développement PHP le plus populaire et regroupe des outils utiles pour simplifier le développement web. Il utilise principalement Apache2 (un serveur web http), MySQL (un service de gestion de bases de données) et phpMyAdmin (une application d'administration MySQL web).

Une fois XAMPP et ces trois outils opérationnels, vous pouvez localhost/phpmyadmincréer une nouvelle base de données appelée mister_quiz. Appliquez ensuite les migrations et vous pourrez commencer votre quête de quiz.

Voici un fichier SQL que vous pouvez exécuter dans phpMyAdmin afin d'obtenir des données (questions et réponses) exploitables. Vous pouvez également créer vos propres questions et réponses.

Lors de la première tentative d'exécution du projet, vous constaterez qu'il est possible de l'exécuter et d'accéder à la page web, mais que vous ne pourrez pas faire grand-chose de plus. C'est là que vous intervenez et que vous sauvez la mise (ou la semaine, selon le temps que vous consacrerez à ce projet).

# anglais
Objectives
Have you ever watched "Who Wants to Be a Millionaire?" and wonder how would you do if it was you? Well you are not going to play it this time yet. But after finishing this project, you will be able to.

You will have to continue to build a quiz game website that is already in development. The already made code is available here. There is missing some code that you will have to create in order to fullfil all the requests explained in the Instructions section.

The project is written in PHP and it is using Laravel, one of the most (if not the most) known PHP web framework. So you have to install both PHP and Laravel on your machine (you can use which method you like the best). Get comfortable using dollar signs.

Instructions
Firstly, users should be able to register and login. To register a user has to enter a username, an email, a password and a password confirmation. To login the user has to provide the email and the password. If the login credentials are not correct, an error message should appear.

In the Login page, it must be possible to navigate to the Registration page, and vice versa.

The user must have in its attributes the amount of XP, determined by the number of questions he or she answered right. Also the score for each category of questions should be stored in the format x/y where x are the correct answers and y are the total questions.

After logging in the user should be redirected to the homepage. The homepage should have at least three buttons present, four if they are logged in:

The Login button / Profile button => if the user is not logged in, the login button should be visible, otherwise the profile button must be visible.
The Leaderboard button => shows a list of the best players.
The Start Quiz button => button that when pressed starts a quiz.
The Logout button => Is only shown if the user is logged in.
Quiz
When clicking the Start Quiz button on the homepage, if the user is not logged in, the user should be redirected to the Login page (instead of starting the quiz). In case the user is already logged in, the website must present the questions and the available answers for each question. The player can then choose an answer to each question and at the bottom of all the questions submit the quiz and get his results.

A question has:

the question text
a category. The available categories must be:
Art
History
Geography
Science
Sports
XP
There are some conditions that you should have in account:

After starting the quiz, if the user refreshes the page the same questions should pop up.
The same must happen if the user goes back to the homepage and start the quiz again.
All questions should have been answered before being able to submit the quiz.
At least one question of each category is required.
After submitting the quiz, the user should be presented to a Results page. This page must show:

How many questions the user answered right and the number of total questions made
How many questions the user answered right in each category
If a user gets a correct answer to a question, his XP is increased by the XP of the question he answered right. Also the score that the user has for the category of that question should be updated.

Profile
When the user visits his profile the following must be visible:

his username
his email
his XP
his rank (dependent on the amount of XP):
< 1500 XP => Quiz Aprentice
1500 XP - 5000 XP => Average Quizer
5000 XP - 10000 XP => Epic Quizer
>= 10000 XP => Quiz Master
the percentage of correct answers for each category
number of correct answers for each category
number of total questions answered for each category
Only the user should be able to see his own profile.

Leaderboard
The leaderboard page should display a table containing the top 10 players organized by XP amount. Each row of the table must have:

username
XP amount
total correct answers
Laravel
If you already opened the project zip file provided, you might have been surprised with the amount of files and folders inside it. We know, it can be overwhelmeing.

Here are the main folders and files you will mess around with:

app/
Http/Controllers/ -> is the folder of every Controller in Laravel. A Controller is what controls the backend for a specific route.
Models/ -> refers to the models/ classes that are used in the app.
database/migrations/ -> here are located the migrations that refer to the database.
public/ -> is the folder that applies CSS, JS, images, etc. to the website.
resources/views/ -> refers to the folder containing every view for the different pages of the website. You will notice that the files inside it have the extension .blade.php. This extension is used by Laravel to write HTML together with PHP. You can learn more about Blade Templates in the web.
routes/web.php -> is the file responsible for the routes in the website.
Of course there are a lot more folders and files available that can help you achieve the idea that you have in mind for the website, but it is up to you to research them.

You can take advantage of the templates and design provided in the resource zip file provided, or you can choose to implement your own design ideas, as long as the project requirements are respected.

You may use some commands to, for example, create controllers, create migrations, apply migrations, etc. The options are endless. You will notice that in the root directory of the project there is a file artisan. Try running php artisan on the root folder of a Laravel project and you will see every command available for you.

Database
In order to apply the migrations in the database/migrations/ directory, you will need to create a database. Shocker.

One of the ways to accomplish that is to work with XAMPP. XAMPP is the most popular PHP development environment and unites useful tools in order to make web development easier. It pretty much uses Apache2 (an http web server host), MySQL (a database management service) and phpMyAdmin (a web MySQL administration app).

Once you have XAMPP and these three tools up and running, you can head over to localhost/phpmyadmin and create a new database called mister_quiz. After that you apply the migrations and you are good to go on your quiz quest.

Here is a sql file in which you can run in phpMyAdmin in order to have some data (questions and answers) for you to work with. You can also come up with your own questions and answers.

When first trying to run the project you will notice that you can in fact run it and go to the web page, but you will not be able to do much more. This is where you come in and save the day (or week depending on how much time you will take to solve this project).





<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## A propos de Laravel

Laravel est un framework d'application web avec une syntaxe expressive et élégante. Nous pensons que le développement doit être une expérience agréable et créative pour être vraiment satisfaisant. Laravel rend le développement moins pénible en facilitant les tâches courantes utilisées dans de nombreux projets web, telles que :

- [Moteur de routage simple et rapide] (https://laravel.com/docs/routing).
- [Puissant conteneur d'injection de dépendances](https://laravel.com/docs/container).
- Plusieurs back-ends pour le stockage des [sessions](https://laravel.com/docs/session) et des [caches](https://laravel.com/docs/cache).
- ORM de base de données expressif et intuitif (https://laravel.com/docs/eloquent).
- Migration de schémas agnostique (https://laravel.com/docs/migrations).
- [Traitement robuste des tâches d'arrière-plan](https://laravel.com/docs/queues).
- [Diffusion d'événements en temps réel] (https://laravel.com/docs/broadcasting).

Laravel est accessible, puissant et fournit les outils nécessaires à la réalisation de grandes applications robustes.

## Apprendre Laravel

Laravel possède la [documentation](https://laravel.com/docs) et la bibliothèque de tutoriels vidéo les plus complètes et les plus approfondies de tous les frameworks d'applications web modernes, ce qui facilite la prise en main du framework.

Si vous n'avez pas envie de lire, [Laracasts](https://laracasts.com) peut vous aider. Laracasts contient plus de 1500 tutoriels vidéo sur un large éventail de sujets tels que Laravel, le PHP moderne, les tests unitaires et le JavaScript. Améliorez vos compétences en piochant dans notre bibliothèque vidéo complète.

## Les sponsors de Laravel

Nous tenons à remercier les sponsors suivants qui financent le développement de Laravel. Si vous souhaitez devenir un sponsor, veuillez visiter la [page Patreon] de Laravel (https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contribuer

Merci d'envisager de contribuer au framework Laravel ! Le guide de contribution est disponible dans la [documentation Laravel] (https://laravel.com/docs/contributions).

## Code de conduite

Afin de s'assurer que la communauté Laravel est accueillante pour tous, veuillez lire et respecter le [Code de conduite] (https://laravel.com/docs/contributions#code-of-conduct).

## Vulnérabilités de sécurité

Si vous découvrez une faille de sécurité dans Laravel, veuillez envoyer un e-mail à Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). Toutes les failles de sécurité seront traitées rapidement.

## Licence

Le framework Laravel est un logiciel open-source sous licence [MIT licence](https://opensource.org/licenses/MIT).
