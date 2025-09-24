# StudyBuddy – Assistant de révision pour étudiants  

## Description  

**StudyBuddy** est un outil hybride composé de :  
- Une **interface web** : permet de consulter, modifier, organiser et partager ses fiches de révision.  
- Une **application Python** : permet d’intégrer ses cours (copier/coller ou import) et de générer automatiquement des fiches de révision et des questions d’entraînement via une API d’IA.  

L’objectif est de transformer des notes brutes en ressources claires, synthétiques et interactives, afin de favoriser un apprentissage actif et efficace.  

## Fonctionnalités principales  

### Application Python  
- **Import de cours** : coller ou importer un texte brut.  
- **Génération de fiches** : création d’un résumé structuré par l’IA (définitions, points clés, exemples).  
- **Questions d’entraînement** : 5 questions par fiche (QCM et ouvertes).  
- **Envoi des fiches** : les fiches générées sont stockées dans la base de données pour être accessibles via l’interface web.  

### Interface Web  
- **Consultation** : accéder à toutes ses fiches sauvegardées.  
- **Modification** : éditer ou enrichir une fiche existante.  
- **Organisation** : classer ses fiches pour retrouver facilement l’information.  
- **Partage** : mettre ses fiches à disposition d’autres étudiants.  

## Gestion des rôles  

- **Élève** : crée et consulte ses fiches de révision, génère des QCM.  
- **Gestionnaire** : supervise les fiches et les prompts des élèves pour éviter les dérives ou abus.  
- **Administrateur** : a accès complet (gestion des comptes, fiches, prompts, etc.).  

## Évolutions prévues  

- **Historique** : conserver plusieurs versions d’une même fiche.  
- **Suivi de progression** : statistiques sur les révisions et résultats aux questions.  
- **Personnalisation des prompts** : permettre à chaque élève d’adapter les consignes données à l’IA pour générer ses fiches ou QCM sur mesure.  

## Technologies  

- **Backend / Génération IA** : Python  
- **Frontend** : Interface web (Flask/Django + HTML/CSS/JS)   
- **API IA** : Google Gemini via Google Generative AI SDK
- **Base de données** : MariaDB/MySQL
