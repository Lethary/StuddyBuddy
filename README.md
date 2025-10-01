# 📘 StudyBuddy – Assistant de révision pour étudiants

## ✨ Description

**StudyBuddy** est un outil hybride composé de :  
- 🌐 Une **interface web** ([studdy.boudetk.fr](https://studdy.boudetk.fr/)) : consulter, modifier, organiser et partager ses fiches de révision.  
- 🐍 Une **application Python** : importer ses cours (copier/coller ou fichiers) et générer automatiquement des fiches de révision + QCM grâce à l’IA.

🎯 Objectif : transformer des notes brutes en ressources claires, synthétiques et interactives, pour favoriser un apprentissage actif et efficace.

---

## ⚙️ Fonctionnalités principales

### 🐍 Application Python
- 📥 **Import de cours** : coller ou importer un texte brut.  
- ✍️ **Génération de fiches** : résumé structuré par l’IA (définitions, points clés, exemples).  
- ❓ **Questions d’entraînement** : 5 questions par fiche (QCM et ouvertes).  
- 🔗 **Envoi vers la base** : les fiches et QCM générés sont stockés dans la base pour être accessibles via l’interface web.

### 🌐 Interface Web
- 📖 **Consultation** : accéder à toutes ses fiches sauvegardées.  
- 📝 **Modification** : éditer ou enrichir une fiche existante.  
- 🗂️ **Organisation** : ranger ses fiches par **matière**, **chapitre**, ou catégorie.  
- 🤝 **Partage** : mettre ses fiches à disposition d’autres étudiants.

---

## 👥 Gestion des rôles et permissions

- 🎓 **Élève** : crée et consulte ses fiches, génère des QCM.  
- 👨‍🏫 **Gestionnaire** : supervise les fiches et les prompts des élèves pour éviter abus/erreurs.  
- 🛠️ **Administrateur** : gère l’ensemble du système (comptes, rôles, fiches, prompts, pages d’administration, gestion des fiches, etc.).

🔒 Le système repose sur des **permissions liées aux rôles et aux pages** (ex. pages d’administration, pages de gestion des fiches, etc.).

---

## 🚀 Évolutions prévues

- 📜 **Historique** : conserver plusieurs versions d’une fiche.  
- 📊 **Suivi de progression** : stats sur révisions et résultats QCM.  
- 🎨 **Personnalisation des prompts** : chaque élève pourra modifier les consignes données à l’IA pour créer des fiches/QCM adaptés.

---

## 🛠️ Technologies

- ⚙️ **Backend / Génération IA** : Python  
- 🌐 **Frontend Web** : PHP + HTML/CSS (JavaScript prévu plus tard)  
- 🤖 **API IA** : Google Gemini (via Google Generative AI SDK)  
- 🗄️ **Base de données** : MariaDB / MySQL
- ☁️ **Hébergement** : o2switch (France)