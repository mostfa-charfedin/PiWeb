# Onboardify - Plateforme Web Symfony d’Onboarding et de Gestion de Projets

##  Overview

**Onboardify** est une application web développée avec le framework **Symfony** dans le cadre du module **PIDEV 3A** à **Esprit School of Engineering**.  
Elle a pour objectif d'améliorer l'intégration des nouveaux employés dans une entreprise grâce à un onboarding gamifié, tout en facilitant la gestion de projets, les ressources , les evaluations ,  le suivi des réclamations et l'interaction entre les utilisateurs.

##  Fonctionnalités principales

- Gestion des utilisateurs.
- Gestion de réclamations et publications.
- Gestion des quiz.
- Gestion des parcours d’integration.
- Gestion des Programme bien etre.
- Gestion des Ressources et Evaluations.

##  Stack technique

- **Langage** : PHP 8+
- **Framework** : Symfony 6
- **Base de données** : MySQL
- **Frontend** : Twig, Bootstrap, JavaScript
- **API externe** : Hugging Face , google translate 
- **Outils** : Composer, Git, VS Code

##  Structure du projet

```
onboardify/
├── config/
├── public/
├── src/
│   ├── Controller/
│   ├── Entity/
│   ├── Form/
│   ├── Repository/
│   └── Service/
├── templates/
├── translations/
├── var/
├── vendor/
└── README.md
```

##  Installation et démarrage

1. Cloner le projet :
   ```bash
   git clone https://github.com/mostfa-charfedin/PiWeb.git
   cd onboardify
   ```

2. Installer les dépendances :
   ```bash
   composer install
   ```

3. Configurer l’environnement :
   - Copier le fichier `.env` :
     ```bash
     cp .env .env.local
     ```
   - Modifier les variables : `DATABASE_URL`, API Hugging Face , API GOOGLE TRANSLATE 

4. Créer la base de données :
   ```bash
   php bin/console doctrine:database:create
   php bin/console make:migration
   php bin/console doctrine:migrations:migrate
   ```

5. Lancer le serveur :
   ```bash
   symfony server:start
   ```

6. Accéder à l'application :
   [http://localhost:8000](http://localhost:8000)

##  Fork the repository:
Create a new branch: git checkout -b feature/my-new-feature  
Make changes and commit them: git commit -am 'Add some feature'  
Push to the branch: git push origin feature/my-new-feature  
Create a pull request on GitHub  

##  Topics GitHub

`symfony`, `php`, `onboarding`, `gamification`, `reclamations`, `huggingface`, `pidev`, `esprit`, `project-management`, `education`

##  Remerciements

Projet réalisé sous la supervision de **[Nom du professeur]** dans le cadre du module **PIDEV 3A** à **Esprit School of Engineering**.  
Merci à l’équipe **CodeRockers** pour leur collaboration et leur engagement.

---

**Mots-clés** : Symfony, PHP, Onboarding, Gamification, Gestion de projets, Réclamations, Hugging Face, Détection de toxicité, Esprit School of Engineering ,Ressources, 

##  Licence
Onboardify est une application web open-source, distribuée sous la licence Esprit.