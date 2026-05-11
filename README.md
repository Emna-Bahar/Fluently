# 🌍 Fluently — Module Symfony (Langue / Niveau / Cours)
> Application web Symfony — Gestion administrative et pédagogique des langues, niveaux CECRL et cours

---
## Présentation générale

Fluently est une plateforme web Symfony de **formation linguistique et de suivi pédagogique**. L’application centralise tout le parcours d’apprentissage dans une seule interface : inscription des utilisateurs, gestion des langues et des niveaux CECRL, consultation des cours, passage des tests, suivi de la progression, travail en groupe, planification des sessions, réservations et objectifs personnels.

Le projet est pensé pour deux profils principaux :

- **Les étudiants**, qui apprennent une langue, passent des tests, rejoignent des groupes, participent aux chats et suivent leurs progrès.
- **Les enseignants et administrateurs**, qui créent et supervisent les contenus, les niveaux, les sessions, les groupes, les évaluations et les comptes utilisateurs.

L’application intègre aussi plusieurs briques avancées qui renforcent l’expérience utilisateur : **IA** pour la génération et l’analyse de contenu, **correction automatique**, **modération de messages**, **authentification Google**, **reconnaissance faciale**, **réservations**, **QR Code** et **notifications de suivi**.

Fluently fonctionne en **Symfony 6** avec une base de données MySQL partagée avec une application Java existante. Cela impose de garder un modèle de données stable et compatible, tout en ajoutant des fonctionnalités pédagogiques et collaboratives modernes.

## Ce que couvre l'application

- Gestion des **langues** et des **niveaux CECRL**
- Gestion des **cours** et du contenu d’apprentissage
- **Tests** et analyse des résultats
- **Groupes** d’apprentissage et chat associé
- **Sessions** et **réservations**
- **Objectifs** et **tâches** personnelles
- **Profil utilisateur**, inscription, connexion et récupération de compte

---

## 📌 Présentation du module

Ce module est la partie **gestion de contenu pédagogique et progression** de l'application Fluently. Il permet à un **administrateur** de gérer les langues, les niveaux CECRL et les cours, et à un **étudiant** de suivre son apprentissage, de consulter les cours, générer du contenu personnalisé par IA, et suivre sa progression.

Développé en **Symfony**, connecté à la même base de données MySQL que l'application desktop JavaFX existante.

---

## 🗂️ Structure du projet

```
src/
├── Controller/
│   ├── LangueController.php              → CRUD langues, upload drapeaux
│   ├── NiveauController.php              → CRUD niveaux, upload images
│   ├── CoursController.php               → CRUD cours, gestion ressources
│   └── CoursPersonnaliseController.php   → Génération cours IA (Mistral)
│
├── Entity/
│   ├── Langue.php          → nom, drapeau, description, popularité
│   ├── Niveau.php          → titre, description, image, difficulte, ordre
│   ├── Cours.php           → numero, ressources, date_creation
│   └── UserProgress.php    → progression utilisateur
│
├── Form/
│   ├── LangueType.php              → upload drapeau
│   ├── NiveauType.php              → upload image couverture
│   ├── CoursType.php               → ressources multiples + YouTube
│   └── CoursPersonnaliseType.php   → formulaire génération IA
│
├── Repository/
│   ├── LangueRepository.php        → requêtes personnalisées
│   ├── NiveauRepository.php        → filtres par langue, seuils
│   ├── CoursRepository.php         → filtres, comptage par niveau
│   └── UserProgressRepository.php  → progression par utilisateur
│
├── Service/
│   ├── LanguageStatsService.php    → statistiques Wikipedia
│   └── DictionaryService.php       → API Wiktionary
│
└── MessageHandler/
    └── GenererCoursMessageHandler.php → génération IA via Mistral

templates/
├── langue/
│   ├── index.html.twig           → liste langues (étudiant)
│   ├── index_admin.html.twig     → liste langues (admin)
│   ├── new.html.twig
│   ├── edit.html.twig
│   └── apprentissage.html.twig   → page apprentissage étudiant
├── niveau/
│   ├── index.html.twig
│   ├── new.html.twig
│   └── edit.html.twig
└── cours/
    ├── index.html.twig
    ├── new.html.twig
    ├── edit.html.twig
    └── base_apprentissage.html.twig → visualisation cours étudiant
```

---

## 🗄️ Base de données

| Table | Colonnes principales |
|-------|---------------------|
| `langue` | id, nom, drapeau, description, popularite, is_active |
| `niveau` | id, titre, description, image_couverture, difficulte, ordre, seuils |
| `cours` | id, numero, ressource, date_creation, cours_precedent_id, id_niveau_id |
| `user_progress` | id, dernier_numero_cours, test_niveau_complete, user_id, langue_id, niveau_actuel_id |

### Popularités
| Valeur | Badge |
|--------|-------|
| très haute | 🟠 |
| haute | 🟢 |
| moyenne | 🔵 |
| faible | 🟣 |

### Niveaux CECRL
| Difficulté | Ordre |
|------------|-------|
| A1 | 1 |
| A2 | 2 |
| B1 | 3 |
| B2 | 4 |
| C1 | 5 |
| C2 | 6 |

---

## ⚙️ Configuration réseau

```env
DATABASE_URL="mysql://user:password@10.206.162.141:3306/fluently"
```
```powershell
net use Z: \\10.206.162.141\uploads /user:partage MotDePasse /persistent:yes
```
```cmd
cd C:\xampp\htdocs\fluently\public\uploads
mklink /D images Z:\images
mklink /D ressources Z:\ressources
```

---

## 🚀 Fonctionnalités

### 1. 🌍 Gestion des Langues

| Fonction | Détail |
|----------|--------|
| CRUD | Création, modification, suppression |
| Upload drapeau | Image → dossier uploads/images/langues/ |
| Validation | Nom unique, longueur 2-50, description 5-500 |
| Filtres | Recherche par nom, statut actif/inactif |
| Statistiques | API Wikipedia (locuteurs, famille, écriture) |

### 2. 📊 Gestion des Niveaux

| Fonction | Détail |
|----------|--------|
| CRUD | Création, modification, suppression |
| Upload image | Image couverture → dossier uploads/images/niveaux/ |
| Validation | Titre unique par langue, ordre 1-10 |
| Seuils | Score min/max pour niveau CECRL |

### 3. 📚 Gestion des Cours

| Fonction | Détail |
|----------|--------|
| CRUD | Création, modification, suppression |
| Ressources | Fichiers multiples (PDF, vidéo, audio) + liens YouTube |
| Validation | Numéro unique par niveau, date non future |
| Progression | Action "Terminer" avec passage niveau suivant |

### 4. 🤖 Génération IA (Mistral)

| Fonction | Détail |
|----------|--------|
| Formulaire | Vocabulaire, grammaire, nouveaux mots, thèmes YouTube |
| Traitement | File d'attente Symfony Messenger |
| API | Mistral AI pour génération cours personnalisés |

---

## 🔧 Routes principales

| Route | Méthode | Description |
|-------|---------|-------------|
| `/Langue/` | GET | Liste langues étudiant |
| `/Langue/admin` | GET | Admin langues |
| `/Langue/admin/new` | GET/POST | Création langue |
| `/Langue/drapeau/{filename}` | GET | Affichage drapeau |
| `/niveau/` | GET | Liste niveaux |
| `/niveau/new` | GET/POST | Création niveau |
| `/cours/` | GET | Liste cours |
| `/cours/{id}/terminer` | POST | Marquer terminé |
| `/cours-personnalise/generer/{id}` | GET/POST | Génération IA |

---

## 🌐 APIs externes

| API | Usage |
|-----|-------|
| Mistral AI | Génération cours personnalisés |
| Wikipedia | Statistiques des langues |
| Wiktionary | Définitions dictionnaire |

---

## 🔑 Règles métier

1. Nom langue unique
2. Titre niveau unique par langue
3. Ordre niveau unique par langue (1-10)
4. Numéro cours unique par niveau
5. Date création cours non future
6. Progression stockée dans user_progress

---

---

# 🎯 Fluently — Module Symfony (Test / Question / Réponse / TestPassage)
> Application web Symfony — Évaluation, progression CECRL et analyse des performances

---

## 📌 Présentation du module

Ce module est la partie **évaluation et suivi de progression** de l'application Fluently. Il permet à un **étudiant** de passer des tests pour déterminer et valider son niveau CECRL, et à un **administrateur** de gérer les tests, questions et réponses, et de consulter les passages.

Les types de questions supportés sont le QCM, l'oral (évaluation par Levenshtein) et le texte libre (correction IA par Groq LLaMA selon grille DELF). Le module intègre un **workflow Symfony** pour gérer les statuts des passages (en_cours → en_pause → termine / expire).

Développé en **Symfony**, connecté à la même base de données MySQL que l'application desktop JavaFX existante.

---

## 🗂️ Structure du projet

```
src/
├── Controller/
│   ├── TestController.php        → CRUD tests (admin) + passage étudiant complet
│   └── MesTestsController.php    → liste des tests par langue/niveau (étudiant)
│
├── Entity/
│   ├── Test.php          → type, titre, durée, langue, niveau
│   ├── Question.php      → énoncé, type (qcm/oral/texte_libre), scoreMax
│   ├── Reponse.php       → contenu, isCorrect, score
│   └── TestPassage.php   → score, résultat, statut, temps, dates
│
├── Form/
│   └── TestType.php      → formulaire création/modification test
│
├── Repository/
│   ├── TestRepository.php              → filtres par type, langue, recherche
│   ├── TestPassageRepository.php       → filtres, score moyen, stats admin
│   └── UserProgressRepository.php      → findMostRecentByUserAndLangue()
│
├── Service/
│   ├── TestScoringService.php          → calcul score par type de question
│   ├── ExamModeService.php             → détection fraude, log événements
│   ├── AITextCorrectionService.php     → correction texte libre via Groq LLaMA
│   └── PerformanceAnalyzerService.php  → analyse performances + recommandations IA
│
└── config/
    └── packages/workflow.yaml          → workflow test_passage_state_machine

templates/
├── test/
│   ├── index.html.twig       → liste tests (admin)
│   ├── new.html.twig
│   ├── edit.html.twig
│   └── passages.html.twig    → tableau passages + stats (admin)
├── test_student/
│   ├── show.html.twig        → interface de passage du test
│   ├── result.html.twig      → résultats détaillés + historique
│   └── analyse.html.twig     → analyse de performances par langue
└── mes_tests/
    └── index.html.twig       → tests groupés par langue/type (étudiant)
```

---

## 🗄️ Base de données

| Table | Colonnes principales |
|-------|---------------------|
| `test` | id, type, titre, duree_estimee, langue_id, niveau_id |
| `question` | id, enonce, type, score_max, id_test_id |
| `reponse` | id, contenu_rep, is_correct, score, date_reponse, id_question_id |
| `test_passage` | id, date_debut, date_fin, resultat, score, score_max, statut, temps_passe, test_id, user_id |
| `user_progress` | id, dernier_numero_cours, test_niveau_complete, date_derniere_activite, user_id, langue_id, niveau_actuel_id |

### Types de tests
| Type | Rôle |
|------|------|
| `Test de niveau` | Détermine le niveau CECRL de l'étudiant — toujours accessible |
| `quiz_debutant` | Exercice d'entraînement du niveau actuel |
| `Test de fin de niveau` | Valide le passage au niveau supérieur (≥ 50%) |

### Types de questions
| Type | Description | Scoring |
|------|-------------|---------|
| `qcm` | Choix multiple | Bonne réponse = scoreMax, mauvaise = 0 |
| `oral` | Texte saisi comparé à l'énoncé | Levenshtein : ≥85% = 100%, ≥60% = 50%, sinon 0 |
| `texte_libre` | Rédaction longue | Groq LLaMA grille DELF 11 critères → (iaScore/100) × scoreMax |

### Statuts de TestPassage (Workflow Symfony)
| Statut | Transition depuis |
|--------|------------------|
| `brouillon` | état initial |
| `en_cours` | demarrer ← brouillon |
| `en_pause` | mettre_en_pause ← en_cours |
| `en_cours` | reprendre ← en_pause |
| `termine` | terminer ← en_cours |
| `expire` | expirer ← en_cours / en_pause |

### Score → Niveau CECRL
| Score | Niveau |
|-------|--------|
| ≥ 90% | C2 |
| ≥ 80% | C1 |
| ≥ 70% | B2 |
| ≥ 60% | B1 |
| ≥ 50% | A2 |
| < 50% | A1 |

---

## 🚀 Fonctionnalités

### 1. 🎯 Passage de test (TestController — côté étudiant)

Interface complète avec trois types de questions :

- **QCM** : boutons radio, soumis en POST
- **Oral** : champ texte, évalué par distance de Levenshtein normalisée
- **Texte libre** : `<textarea>` (minimum 50 caractères), corrigé par Groq LLaMA selon grille DELF (11 critères : respect du sujet, cohérence, expression, vocabulaire étendue/maîtrise, orthographe lexicale/grammaticale, structure, mise en page, lisibilité, présentation)

Timer basé sur `duree_estimee`, soumission automatique à expiration via workflow. Mise en pause avec sauvegarde en session.

### 2. 📚 Mes Tests — Progression par langue (MesTestsController)

Organisée par langue puis par type de test :

**Règles d'accessibilité :**
- `Test de niveau` → toujours accessible
- Pas de niveau dans cette langue → tout bloqué sauf Test de niveau
- `quiz_debutant` → accessible si niveau CECRL du test = niveau actuel
- `Test de fin de niveau` → même règle que quiz_debutant

**Affichage :**
- Cartes accessibles : icône colorée, badges durée/meilleur score/passages, barre de progression, bouton Commencer ou Repasser
- Cartes bloquées : cadenas grisé, raison du blocage, opacité réduite
- Historique toggle : date, pourcentage, temps passé
- Bannière recommandation : premier quiz non tenté du niveau actuel

**Correction bug niveau multiple :** `findMostRecentByUserAndLangue()` récupère la ligne `user_progress` la plus récente par `(user_id, langue_id)`.

### 3. ✅ Mise à jour automatique du niveau (TestController — studentSubmit)

Après **Test de niveau** :
- Calcul code CECRL depuis le score
- Recherche ou création du niveau correspondant dans la BD
- Mise à jour de `user_progress.niveau_actuel_id`

Après **Test de fin de niveau** réussi (≥ 50%) :
- Passage au niveau suivant (`ordre + 1`)
- Mise à jour de `user_progress.niveau_actuel_id`

### 4. 🎓 Page Apprentissage — Quiz débutants (LangueController)

Panneau latéral glissant affichant les quiz débutants du niveau actuel :
- Bouton toggle fixe sur le bord droit
- Panneau animé avec liste des quiz filtrés par niveau CECRL
- Indicateur de passage (✅) et meilleur score par quiz
- Message informatif si aucun quiz disponible pour ce niveau

**Correction bug filtre :** le code CECRL est extrait avec `code in difficulte` (et non `difficulte in code` qui est l'inverse).

### 5. 📊 Dashboard Admin — Passages (TestController)

- Tableau filtrable (recherche, statut, langue, test)
- 4 cartes statistiques : total, terminés, en cours, score moyen
- Actions : expirer ou finaliser via CSRF

### 6. 📈 Analyse de performances (PerformanceAnalyzerService)

- Filtrage des passages terminés par langue
- Calcul tendance (progression/régression/stable)
- Recommandations personnalisées par Groq LLaMA adaptées au niveau CECRL

### 7. 🔒 Mode Examen (ExamModeService)

- Activé pour les Tests de fin de niveau
- Détection changements d'onglet via `visibilitychange`
- Log événements suspects en session
- Analyse post-soumission affichée sur la page résultats

---

## 🔧 Routes principales

| Route | Méthode | Description |
|-------|---------|-------------|
| `/admin/test` | GET | Liste tests (admin) |
| `/admin/test/new` | GET/POST | Créer un test |
| `/admin/test/{id}/edit` | GET/POST | Modifier un test |
| `/admin/test/{id}` | POST | Supprimer un test |
| `/admin/test/passages` | GET | Dashboard passages admin |
| `/admin/passage/{id}/expire` | POST | Expirer un passage |
| `/admin/passage/{id}/finaliser` | POST | Finaliser un passage |
| `/mes-tests` | GET | Mes tests (étudiant) |
| `/admin/test/etudiant/{id}` | GET | Voir un test |
| `/admin/test/etudiant/{id}/start` | POST | Démarrer |
| `/admin/test/etudiant/{id}/pause` | POST | Mettre en pause |
| `/admin/test/etudiant/{id}/resume` | POST | Reprendre |
| `/admin/test/etudiant/{id}/submit` | POST | Soumettre |
| `/admin/test/etudiant/result/{id}` | GET | Résultats |
| `/admin/test/etudiant/analyse/{langueId}` | GET | Analyse performances |
| `/exam/log-event/{id}` | POST | Log événement examen (AJAX) |

---

## 🌐 APIs externes

| API | Usage | Endpoint |
|-----|-------|----------|
| **Groq LLaMA** | Correction texte libre (grille DELF) + recommandations IA | `POST /openai/v1/chat/completions` |

---

## ⚙️ Configuration

```env
GROQ_API_KEY=gsk_VOTRE_CLE
```

```yaml
# config/packages/workflow.yaml
framework:
    workflows:
        test_passage_state_machine:
            type: state_machine
            marking_store:
                type: method
                property: statut
            supports:
                - App\Entity\TestPassage
            initial_marking: brouillon
            places: [brouillon, en_cours, en_pause, termine, expire]
            transitions:
                demarrer:
                    from: brouillon
                    to: en_cours
                mettre_en_pause:
                    from: en_cours
                    to: en_pause
                reprendre:
                    from: en_pause
                    to: en_cours
                terminer:
                    from: en_cours
                    to: termine
                expirer:
                    from: [en_cours, en_pause]
                    to: expire
```

---

## 🔑 Règles métier

1. Le niveau actuel est dans `user_progress` — source de vérité pour les droits d'accès
2. `findMostRecentByUserAndLangue()` remplace `findOneBy()` pour éviter les doublons
3. La correction texte libre nécessite ≥ 50 caractères, sinon score = 0
4. Le timer est géré côté serveur — non falsifiable côté client
5. Les réponses en pause sont sauvegardées en session, pas en base de données
6. Les détails de correction sont transmis via session entre `submit` et `result`
7. Le filtre quiz par niveau utilise `code in difficulte` (CECRL dans la chaîne), et non l'inverse

---

# 📅 Fluently — Module 5 : Gestion des Sessions & Réservations

> Application web **Symfony 6** — Planification de sessions d'apprentissage, gestion des réservations, confirmation par QR Code, suggestions IA et intégration Google Calendar.

**Développeure :** Yosr Ben Hamouda
**Module :** 5 — Sessions & Réservations

---

## 📌 Présentation du module

Ce module est la partie **planification et réservation** de l'application Fluently. Il permet à un **formateur** de créer et gérer des sessions d'apprentissage en ligne, et à un **étudiant** de réserver une place, de recevoir une confirmation par QR Code, et de synchroniser les sessions avec son Google Calendar. Le module intègre également une **IA** (Luna) qui analyse le profil de l'étudiant pour suggérer les sessions les plus adaptées.

Développé en **Symfony**, connecté à la même base de données MySQL que l'application desktop JavaFX existante.

---

## 🗂️ Structure du projet

```
src/
├── Controller/
│   ├── SessionController.php          → CRUD sessions + calendrier + suggestions IA
│   └── ReservationController.php      → CRUD réservations + QR Code + confirmation
│
├── Entity/
│   ├── Session.php       → nom, description, date_heure, duree, prix, capacite_max, statut, lien_reunion, rating
│   └── Reservation.php   → date_reservation, statut, presence, commentaire, date_confirmation
│
├── Form/
│   ├── SessionType.php       → formulaire création/modification session
│   └── ReservationType.php   → formulaire réservation étudiant
│
├── Repository/
│   ├── SessionRepository.php      → filtres par statut, groupe, recherche, pagination
│   └── ReservationRepository.php  → filtres par utilisateur, session, statut
│
└── Service/
    ├── QrCodeService.php           → génération QR Code de confirmation
    ├── GoogleCalendarService.php   → intégration Google Calendar API
    └── LunaSessionService.php      → suggestions de sessions personnalisées (IA Luna)

templates/
├── session/
│   ├── index.html.twig        → liste sessions paginée (étudiant)
│   ├── index_admin.html.twig  → liste sessions (admin/formateur)
│   ├── new.html.twig          → formulaire création
│   ├── edit.html.twig         → formulaire modification
│   ├── show.html.twig         → détail session + bouton réservation
│   └── calendar.html.twig     → calendrier FullCalendar des sessions
└── reservation/
    ├── index.html.twig        → mes réservations (étudiant)
    ├── index_admin.html.twig  → toutes les réservations (admin)
    ├── new.html.twig          → formulaire réservation
    ├── show.html.twig         → détail réservation + QR Code
    └── confirmation.html.twig → page de confirmation avec QR Code
```

---

## 🗄️ Base de données

| Table | Colonnes principales |
|-------|---------------------|
| `session` | id, nom, description, date_heure, duree, prix, capacite_max, statut, lien_reunion, rating, id_group_id, id_user_id |
| `reservation` | id, date_reservation, statut, presence, commentaire, date_confirmation, id_session_id, id_user_id |

### Statuts de Session

| Statut | Description |
|--------|-------------|
| `planifiée` | Session créée, pas encore commencée |
| `en cours` | Session en déroulement |
| `terminée` | Session passée |
| `annulée` | Session annulée par le formateur |

### Statuts de Réservation

| Statut | Description |
|--------|-------------|
| `en attente` | Demande soumise, en attente de validation |
| `acceptée` | Réservation validée par le formateur |
| `refusée` | Réservation refusée (commentaire facultatif) |
| `annulée` | Annulée par l'étudiant |

### Relation

```
Session (1) ──────────────▶ (*) Reservation
  id, nom, date_heure           id, statut, date_confirmation
  capacite_max, prix            presence, commentaire
  statut, lien_reunion          id_user_id (FK)
  id_user_id (formateur)
```

---

## 🚀 Fonctionnalités

### 1. 📋 CRUD Sessions

Création, modification, suppression et affichage des sessions d'apprentissage avec :

- **Champs gérés** : nom, description, date/heure, durée (en minutes), prix, capacité maximale, statut, lien de réunion (Jit.si auto-généré)
- **Validation** : date non passée à la création, capacité > 0, prix ≥ 0
- **Lien réunion** : génération automatique d'un lien Jit.si unique à la création
- **Rating** : note moyenne calculée depuis les réservations des participants
- **Flash messages** : confirmation visuelle après chaque action CRUD

---

### 2. 📝 CRUD Réservations

Création, modification, suppression et suivi des réservations avec :

- **Workflow de validation** : en attente → acceptée / refusée par le formateur
- **Commentaire de refus** : champ facultatif pour expliquer un refus
- **Présence** : marquage de la présence effective de l'étudiant après la session
- **Date de confirmation** : horodatage automatique lors de l'acceptation ou du refus
- **Contrainte capacité** : réservation bloquée si `capacite_max` atteinte

```php
// ReservationController.php — Vérification capacité avant création
$placesOccupees = $reservationRepository->countAcceptedBySession($session);
if ($placesOccupees >= $session->getCapaciteMax()) {
    $this->addFlash('error', 'Cette session est complète.');
    return $this->redirectToRoute('app_session_show', ['id' => $session->getId()]);
}
```

---

### 3. 📅 Calendrier FullCalendar

Visualisation des sessions sur un calendrier interactif.

**Architecture :**

```
GET /session/calendar
        ↓
calendar.html.twig charge FullCalendar (CDN)
        ↓
FullCalendar appelle GET /session/calendar/events
        ↓
calendarEvents() retourne un JSON avec les sessions
        ↓
FullCalendar affiche les sessions colorées par statut
```

**Couleurs par statut :**

| Statut | Couleur |
|--------|---------|
| Planifiée | 🔵 `#4f6df5` |
| En cours | 🟢 `#2ecc71` |
| Terminée | ⚫ `#95a5a6` |
| Annulée | 🔴 `#e74c3c` |

**Popup au clic :** affiche le nom, la date/heure, la durée, le prix et un bouton de réservation directe.

---

### 4. 🤖 Suggestions IA — Luna

Le module intègre **Luna** pour analyser le profil et l'historique de l'étudiant afin de proposer les sessions les plus adaptées.

**Architecture complète :**

```
Étudiant accède à la liste des sessions
        ↓
LunaSessionService::getSuggestions($user)
  analyse : historique réservations, niveaux, langues préférées
        ↓
Appel API Luna (suggestions personnalisées)
        ↓
Sessions recommandées mises en avant (badge "Recommandé pour vous")
        ↓
Score de pertinence affiché sur chaque carte session
```

**Mode dégradé :** si l'API Luna est indisponible, tri par popularité (nombre de réservations acceptées).

---

### 5. 🔲 QR Code — Confirmation de réservation

Chaque réservation acceptée génère un QR Code unique servant de preuve de confirmation.

**Fonctionnement :**

```
Réservation passe au statut "acceptée"
        ↓
QrCodeService::generate($reservation)
  → encode : id_réservation + id_session + id_user + date_confirmation
        ↓
Image QR Code stockée dans uploads/qrcodes/
        ↓
Affiché sur la page de confirmation et dans le détail réservation
        ↓
Formateur peut scanner le QR Code pour valider la présence
```

**Données encodées dans le QR Code :**

```json
{
  "reservation_id": 46,
  "session_id": 50,
  "user_id": 6,
  "date_confirmation": "2026-04-13T19:35:05"
}
```

---

### 6. 🗓️ Intégration Google Calendar

Les étudiants peuvent synchroniser leurs réservations acceptées avec leur Google Calendar.

**Architecture :**

```
Réservation acceptée → bouton "Ajouter à Google Calendar"
        ↓
GoogleCalendarService::createEvent($reservation)
  titre : nom de la session
  début/fin : date_heure + durée
  description : lien_reunion + formateur
  lieu : lien Jit.si
        ↓
Redirection OAuth Google (scope calendar.events)
        ↓
Événement créé dans le calendrier de l'étudiant
        ↓
Lien de l'événement Google sauvegardé en session
```

---

### 7. 📄 Pagination

La liste des sessions est paginée avec **KnpPaginatorBundle** : 6 sessions par page.

```php
// SessionController.php
$query = $sessionRepository->createQueryBuilder('s')
    ->orderBy('s.date_heure', 'ASC')
    ->getQuery();

$pagination = $paginator->paginate(
    $query,
    $request->query->getInt('page', 1),
    6  // sessions par page
);
```

---

## 🔧 Routes principales

| Route | Méthode | Description |
|-------|---------|-------------|
| `/session/` | GET | Liste sessions (étudiant) |
| `/session/admin` | GET | Liste sessions (admin/formateur) |
| `/session/new` | GET/POST | Créer une session |
| `/session/{id}` | GET | Voir une session |
| `/session/{id}/edit` | GET/POST | Modifier une session |
| `/session/{id}` | POST | Supprimer une session |
| `/session/calendar` | GET | Calendrier FullCalendar |
| `/session/calendar/events` | GET | JSON événements calendrier |
| `/reservation/` | GET | Mes réservations (étudiant) |
| `/reservation/admin` | GET | Toutes les réservations (admin) |
| `/reservation/new/{sessionId}` | GET/POST | Réserver une session |
| `/reservation/{id}` | GET | Détail réservation + QR Code |
| `/reservation/{id}/accepter` | POST | Accepter une réservation |
| `/reservation/{id}/refuser` | POST | Refuser une réservation |
| `/reservation/{id}/annuler` | POST | Annuler une réservation |
| `/reservation/{id}/confirmation` | GET | Page confirmation + QR Code |
| `/reservation/{id}/google-calendar` | GET | Ajouter à Google Calendar |

---

## 🌐 APIs externes

| API | Usage |
|-----|-------|
| **Luna (IA)** | Suggestions de sessions personnalisées selon le profil étudiant |
| **Google Calendar API** | Synchronisation des réservations acceptées dans le calendrier |
| **QR Code (endroid/qr-code)** | Génération du QR Code de confirmation de réservation |
| **Jit.si** | Génération automatique des liens de réunion en ligne |

---

## 🔑 Règles métier

1. Une réservation ne peut être créée que si `places_acceptées < capacite_max`
2. Un étudiant ne peut avoir qu'une seule réservation active (`en attente` ou `acceptée`) par session
3. Le QR Code n'est généré que lorsque le statut passe à `acceptée`
4. La `date_confirmation` est horodatée automatiquement lors de l'acceptation ou du refus
5. Le lien Jit.si est généré une seule fois à la création de la session et ne peut pas être modifié
6. Seul le formateur propriétaire de la session peut accepter/refuser les réservations

---

*Fluently · Module 5 · Yosr Ben Hamouda · 2025*

---

# 🎯 Fluently — Module 6 : Gestion des Objectifs & Tâches

> Application web **Symfony 6** — Suivi personnalisé des objectifs d'apprentissage, gestion des tâches, gamification, recommandations IA et correction orthographique automatique.

**Développeur :** Sarra Ben Boubaker
**Module :** 6 — Objectifs & Tâches

---

## 📋 Table des matières

1. [Présentation du module](#présentation-du-module)
2. [Structure du projet](#structure-du-projet)
3. [Base de données](#base-de-données)
4. [Fonctionnalités](#fonctionnalités)
    - [CRUD Objectifs](#1-crud-objectifs)
    - [CRUD Tâches](#2-crud-tâches)
    - [Correction orthographique — LanguageTool](#3-correction-orthographique--languagetool)
    - [Pagination](#4-pagination)
    - [Calendrier FullCalendar](#5-calendrier-fullcalendar)
    - [Notifications d'échéances](#6-notifications-déchéances)
    - [Recommandations IA — Groq LLaMA](#7-recommandations-ia--groq-llama)
    - [Gamification](#8-gamification)
    - [Recherche dynamique & Filtres](#9-recherche-dynamique--filtres)
    - [Back-office & Export PDF](#10-back-office--export-pdf)
5. [Routes](#routes)
6. [Controllers](#controllers)
7. [Configuration](#configuration)
8. [Commandes utiles](#commandes-utiles)

---

## Présentation du module

Ce module permet à un **étudiant** de définir ses objectifs d'apprentissage, de les décomposer en tâches concrètes, et de suivre sa progression grâce à un système de **gamification** (points, niveaux, badges). Il intègre également une **IA** (Groq LLaMA) qui analyse les objectifs existants pour proposer des recommandations personnalisées, ainsi qu'une **correction orthographique** automatique via l'API LanguageTool.

L'**administrateur** dispose d'un back-office avec statistiques et export PDF.

---

## Structure du projet

```
src/
├── Controller/
│   ├── ObjectifController.php          → CRUD objectifs + calendrier + gamification
│   ├── TacheController.php             → CRUD tâches + recherche AJAX
│   ├── GamificationController.php      → Page points, badges, classement
│   └── RecommandationController.php    → Recommandations IA (Groq LLaMA)
│
├── Entity/
│   ├── Objectif.php                    → titre, description, statut, dateDeb, dateFin
│   └── Tache.php                       → titre, description, statut, priorité, progression
│
├── Form/
│   ├── ObjectifType.php                → Formulaire objectif avec contrôle de saisie
│   └── TacheType.php                   → Formulaire tâche avec contrôle de saisie
│
├── Repository/
│   ├── ObjectifRepository.php          → Requêtes personnalisées objectifs
│   └── TacheRepository.php             → searchTaches() pour filtre AJAX
│
└── EventSubscriber/
    └── DeadlineNotificationSubscriber.php → Alertes échéances automatiques

templates/
├── objectif/
│   ├── index.html.twig             → Liste paginée + gamification + calendrier + IA
│   ├── new.html.twig               → Formulaire ajout
│   ├── edit.html.twig              → Formulaire modification
│   ├── show.html.twig              → Détail objectif
│   └── calendar.html.twig          → Calendrier FullCalendar
├── tache/
│   ├── index.html.twig             → Liste + recherche AJAX + filtres + gamification
│   ├── new.html.twig               → Formulaire ajout + LanguageTool
│   ├── edit.html.twig              → Formulaire modification + LanguageTool
│   └── show.html.twig              → Détail tâche
├── gamification/
│   └── index.html.twig             → Points, niveaux, badges, classement
└── recommandation/
    └── index.html.twig             → Recommandations IA
```

---

## Base de données

### Entité `Objectif`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `titre` | VARCHAR(255) | Titre de l'objectif |
| `description` | TEXT | Description détaillée |
| `statut` | ENUM | `en_cours`, `complete`, `en_pause`, `abandonne` |
| `date_deb` | DATE | Date de début |
| `date_fin` | DATE | Date de fin prévue |
| `id_user_id` | INT (FK) | Utilisateur propriétaire |

### Entité `Tache`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `titre` | VARCHAR(255) | Titre de la tâche |
| `description` | TEXT | Description |
| `statut` | ENUM | `a_faire`, `en_cours`, `terminee`, `bloquee` |
| `priorite` | ENUM | `faible`, `moyenne`, `haute` |
| `progression` | INT | Pourcentage 0–100 |
| `date_limite` | DATE | Échéance |
| `objectif_id` | INT (FK) | Objectif parent |

### Relation

```
Objectif (1) ──────────────▶ (*) Tache
   id, titre, statut            id, titre, statut, priorite
   date_deb, date_fin           progression, date_limite
```

---

## Fonctionnalités

### 1. CRUD Objectifs

Création, modification, suppression et affichage des objectifs d'apprentissage avec :

- **Contrôle de saisie** : champs requis, longueur minimale/maximale, format dates, cohérence date début < date fin
- **Flash messages** : confirmation visuelle après chaque action
- **Modale de suppression** : confirmation avec token CSRF pour sécuriser la suppression

```php
// ObjectifController.php — Exemple création
if ($form->isSubmitted() && $form->isValid()) {
    $entityManager->persist($objectif);
    $entityManager->flush();
    $this->addFlash('success', 'Objectif créé avec succès ! 🎯');
    return $this->redirectToRoute('app_objectif_index');
}
```

---

### 2. CRUD Tâches

Création, modification, suppression et affichage des tâches liées à un objectif avec :

- **Contrôle de saisie** : validation Symfony + contraintes métier
- **Statuts disponibles** : À faire, En cours, Terminée, Bloquée
- **Priorités** : Faible, Moyenne, Haute
- **Barre de progression** : 0 à 100%

---

### 3. Correction orthographique — LanguageTool

L'API LanguageTool est intégrée dans les formulaires d'ajout et de modification de tâche.

**Fonctionnement :**

```
Utilisateur tape dans le champ titre ou description
                    ↓
          Pause de 900ms (debounce)
                    ↓
  Requête HTTP POST → https://api.languagetool.org/v2/check
                    ↓
  API retourne la liste des erreurs détectées
                    ↓
  Suggestions affichées sous le champ (boutons cliquables)
                    ↓
  Clic sur suggestion → texte corrigé automatiquement
```

**Paramètres envoyés à l'API :**

```javascript
const params = new URLSearchParams({
    text:     texte,
    language: 'fr',   // ou 'en', 'ar'...
    enabledOnly: 'false'
});

fetch('https://api.languagetool.org/v2/check', {
    method: 'POST',
    body:   params
})
```

**Avantages :**
- Aucune clé API requise (version gratuite)
- Détecte fautes d'orthographe ET erreurs grammaticales
- Fonctionne sur les champs `titre` ET `description`
- Intégré dans `new.html.twig` et `edit.html.twig`

---

### 4. Pagination

La liste des objectifs est paginée avec **KnpPaginatorBundle** : 3 objectifs par page.

```php
// ObjectifController.php
$query = $objectifRepository->createQueryBuilder('o')
    ->orderBy('o.id', 'DESC')
    ->getQuery();

$pagination = $paginator->paginate(
    $query,
    $request->query->getInt('page', 1),
    3  // objectifs par page
);
```

Le numéro de page est lu automatiquement depuis `?page=2` dans l'URL.

---

### 5. Calendrier FullCalendar

Visualisation des objectifs sur un calendrier interactif.

**Architecture :**

```
GET /objectif/calendar
        ↓
calendar.html.twig charge FullCalendar (CDN)
        ↓
FullCalendar appelle GET /objectif/calendar/events
        ↓
calendarEvents() retourne un JSON avec les événements
        ↓
FullCalendar affiche les objectifs colorés par statut
```

**Couleurs par statut :**

| Statut | Couleur |
|--------|---------|
| En cours | 🔵 `#4f6df5` |
| En retard (date dépassée) | 🔴 `#e74c3c` |
| En pause | 🟠 `#f39c12` |
| Complété | 🟢 `#2ecc71` |
| Abandonné | ⚫ `#95a5a6` |

**Popup au clic :**
Cliquer sur un événement ouvre une popup centrée (animation `popIn`) affichant le titre, les dates de début/fin et un lien vers l'objectif. La navigation directe est bloquée (`info.jsEvent.preventDefault()`).

---

### 6. Notifications d'échéances

Les alertes d'échéances sont générées automatiquement à chaque chargement de la page des objectifs via **DeadlineNotificationSubscriber** et **PHPFlasher**.

**Types d'alertes :**

| Type | Condition | Icône |
|------|-----------|-------|
| `echec` | Date de fin dépassée | ❌ |
| `bientot` | Date de fin dans ≤ 3 jours | ⚠️ |

**Fonctionnement :**

```
KernelEvents::REQUEST déclenché
        ↓
DeadlineNotificationSubscriber vérifie les objectifs
        ↓
Objectifs en retard ou bientôt → FlasherInterface::addFlash()
        ↓
Twig lit app.flashes(['echec', 'bientot'])
        ↓
Modale affichée à gauche (animation slideInLeft)
        ↓
Bouton "J'ai compris" ou clic overlay → fermeture
```

**Configuration PHPFlasher :**

```yaml
# config/packages/flasher.yaml
flasher:
    auto_render: false
    flash_bag:
        enabled: true
```

---

### 7. Recommandations IA — Groq LLaMA

Le module intègre **Groq LLaMA 3.1-8b-instant** pour analyser les objectifs existants et proposer 3 nouvelles recommandations personnalisées.

**Architecture complète :**

```
Utilisateur clique "Générer"
        ↓
JavaScript → POST /recommandation/generer (AJAX)
        ↓
construirePrompt() → texte avec données réelles
  (objectifs, statuts, progressions, tâches, retards)
        ↓
Appel API Groq : POST https://api.groq.com/openai/v1/chat/completions
  model: llama-3.1-8b-instant
  temperature: 0.7 / max_tokens: 2000
        ↓
Réponse JSON nettoyée (suppression ```json```)
        ↓
3 recommandations affichées (titre, description, durée, tâches suggérées)
        ↓
Clic "Créer cet objectif"
        ↓
POST /recommandation/creer-objectif
  → Objectif créé en base (date_deb = aujourd'hui, date_fin = +X semaines)
  → Redirection vers /objectif
```

**Mode démo automatique :**

Si `GROQ_API_KEY` est absente ou si une erreur survient, `modeDemo()` génère des recommandations adaptées aux données existantes de l'utilisateur sans appel API.

**Format JSON retourné par l'IA :**

```json
{
    "analyse": "...",
    "niveau": "intermédiaire",
    "score_progression": 75,
    "points_forts": ["..."],
    "axes_amelioration": ["..."],
    "recommandations": [
        {
            "rang": 1,
            "titre": "...",
            "description": "...",
            "pourquoi": "...",
            "difficulte": "moyen",
            "duree_semaines": 3,
            "priorite": "haute",
            "taches": [
                {"titre": "...", "priorite": "haute"}
            ],
            "emoji": "🎯"
        }
    ]
}
```

---

### 8. Gamification

Système de récompenses calculé entièrement **à la volée** depuis les entités existantes — aucune nouvelle table, aucune migration.

#### Points

| Action | Points gagnés |
|--------|--------------|
| Tâche terminée (`statut = 'terminee'`) | +10 pts |
| Objectif complété (`statut = 'complete'`) | +50 pts |

```php
$pointsTaches    = count($tachesTerminees)    * 10;
$pointsObjectifs = count($objectifsCompletes) * 50;
$totalPoints     = $pointsTaches + $pointsObjectifs;
```

#### Niveaux

| Points | Niveau | Icône | Couleur |
|--------|--------|-------|---------|
| 0 – 9 | Novice | 🐣 | `#95a5a6` |
| 10 – 99 | Débutant | 🌱 | `#2ecc71` |
| 100 – 499 | Intermédiaire | 🚀 | `#3498db` |
| 500 – 999 | Expert | 🌟 | `#f39c12` |
| 1000+ | Légende | 🦁 | `#8e44ad` |

#### Badges

| Badge | Icône | Condition |
|-------|-------|-----------|
| Premier pas | 🎯 | 1 tâche terminée |
| En route | ⚡ | 5 tâches terminées |
| Productif | 🔥 | 10 tâches terminées |
| Machine | 🤖 | 25 tâches terminées |
| Objectif atteint | 🏅 | 1 objectif complété |
| Ambitieux | 🏆 | 3 objectifs complétés |
| Champion | 👑 | 5 objectifs complétés |
| Centurion | 💯 | 100 points gagnés |
| Expert | 🌟 | 500 points gagnés |
| Légende | 🦁 | 1000 points gagnés |

#### Page Gamification (`/gamification/`)

Trois zones d'affichage :

- **Carte niveau** : icône, label, barre de progression vers le prochain niveau
- **Grille badges** : débloqués (colorés) vs verrouillés (grisés `grayscale(100%)`)
- **Classement** : top 10 utilisateurs triés par points, avec podium 🥇🥈🥉 et initiales générées automatiquement

---

### 9. Recherche dynamique & Filtres

La liste des tâches intègre une **recherche AJAX** sans rechargement de page.

**Fonctionnement :**

```
Utilisateur tape dans le champ recherche
        ↓
Debounce 350ms (évite requêtes excessives)
        ↓
fetch() POST → /tache/search
  { recherche: "...", statut: "...", priorite: "..." }
        ↓
TacheRepository::searchTaches() filtre en base
        ↓
JSON retourné avec tâches filtrées
        ↓
JavaScript reconstruit les lignes du tableau dynamiquement
```

**Filtres disponibles :**
- Recherche texte (titre ou description)
- Filtre par statut : Tous / À faire / En cours / Terminée / Bloquée
- Filtre par priorité : Toutes / Faible / Moyenne / Haute
- Bouton "Reset" pour réinitialiser tous les filtres

---

### 10. Back-office & Export PDF

**Statistiques objectifs (admin) :**

- Nombre total d'objectifs par statut
- Taux de complétion
- Objectifs en retard
- Graphiques de répartition

**Export PDF des tâches (admin) :**

```
GET /admin/tache/export-pdf
        ↓
TacheController::exportPdf()
  récupère toutes les tâches
        ↓
Rendu template tache/pdf.html.twig
        ↓
DomPDF génère le fichier PDF
        ↓
Response téléchargement automatique
```

---

## Routes

| Route | Méthode | Controller | Description |
|-------|---------|------------|-------------|
| `/objectif/` | GET | `ObjectifController::index()` | Liste objectifs paginée |
| `/objectif/new` | GET/POST | `ObjectifController::new()` | Ajouter un objectif |
| `/objectif/{id}` | GET | `ObjectifController::show()` | Voir un objectif |
| `/objectif/{id}/edit` | GET/POST | `ObjectifController::edit()` | Modifier un objectif |
| `/objectif/{id}` | POST | `ObjectifController::delete()` | Supprimer un objectif |
| `/objectif/calendar` | GET | `ObjectifController::calendar()` | Page calendrier |
| `/objectif/calendar/events` | GET | `ObjectifController::calendarEvents()` | JSON événements |
| `/tache/` | GET | `TacheController::index()` | Liste tâches + recherche |
| `/tache/search` | POST | `TacheController::search()` | Recherche AJAX (JSON) |
| `/tache/new` | GET/POST | `TacheController::new()` | Ajouter une tâche |
| `/tache/{id}` | GET | `TacheController::show()` | Voir une tâche |
| `/tache/{id}/edit` | GET/POST | `TacheController::edit()` | Modifier une tâche |
| `/tache/{id}` | POST | `TacheController::delete()` | Supprimer une tâche |
| `/gamification/` | GET | `GamificationController::index()` | Points, badges, classement |
| `/recommandation/` | GET | `RecommandationController::index()` | Page recommandations IA |
| `/recommandation/generer` | POST | `RecommandationController::generer()` | Générer via Groq (AJAX) |
| `/recommandation/creer-objectif` | POST | `RecommandationController::creerObjectif()` | Créer depuis recommandation |
| `/admin/objectif/stats` | GET | `ObjectifController::stats()` | Statistiques back-office |
| `/admin/tache/export-pdf` | GET | `TacheController::exportPdf()` | Export PDF |

---

## Controllers

### `ObjectifController`

| Méthode | Route | Description |
|---------|-------|-------------|
| `index()` | GET `/objectif/` | Liste paginée (3/page) + gamification |
| `calendar()` | GET `/objectif/calendar` | Page calendrier |
| `calendarEvents()` | GET `/objectif/calendar/events` | JSON pour FullCalendar |
| `new()` | GET/POST `/objectif/new` | Créer objectif |
| `show()` | GET `/objectif/{id}` | Afficher objectif |
| `edit()` | GET/POST `/objectif/{id}/edit` | Modifier objectif |
| `delete()` | POST `/objectif/{id}` | Supprimer (CSRF) |
| `calculerGamification()` | *privée* | Calcule points/niveaux/badges |

### `TacheController`

| Méthode | Route | Description |
|---------|-------|-------------|
| `index()` | GET `/tache/` | Liste + gamification |
| `search()` | POST `/tache/search` | Recherche AJAX → JSON |
| `new()` | GET/POST `/tache/new` | Créer tâche |
| `show()` | GET `/tache/{id}` | Afficher tâche |
| `edit()` | GET/POST `/tache/{id}/edit` | Modifier tâche |
| `delete()` | POST `/tache/{id}` | Supprimer (CSRF) |
| `exportPdf()` | GET `/admin/tache/export-pdf` | Export PDF |

### `GamificationController`

| Méthode | Route | Description |
|---------|-------|-------------|
| `index()` | GET `/gamification/` | Points, badges débloqués/verrouillés, classement top 10 |

### `RecommandationController`

| Méthode | Route | Description |
|---------|-------|-------------|
| `index()` | GET `/recommandation/` | Page + stats objectifs |
| `generer()` | POST `/recommandation/generer` | Appel Groq IA → JSON |
| `creerObjectif()` | POST `/recommandation/creer-objectif` | Création en base |
| `getSystemPrompt()` | *privée* | Instructions système pour l'IA |
| `construirePrompt()` | *privée* | Construit le prompt avec données réelles |
| `modeDemo()` | *privée* | Recommandations de secours |
| `calculerStats()` | *privée* | Stats objectifs pour la page |

---

## Configuration

### Variable d'environnement requise

```env
# .env.local
GROQ_API_KEY=gsk_votre_cle_groq
```

> Sans cette clé, le mode démo s'active automatiquement.

### PHPFlasher

```yaml
# config/packages/flasher.yaml
flasher:
    auto_render: false
    flash_bag:
        enabled: true
```

### KnpPaginator

```yaml
# config/packages/knp_paginator.yaml
knp_paginator:
    page_range: 5
    default_options:
        page_name: page
        sort_field_name: sort
        sort_direction_name: direction
        distinct: true
```

---

## Commandes utiles

```bash
# Vider le cache
php bin/console cache:clear

# Appliquer les migrations
php bin/console doctrine:migrations:migrate

# Créer une nouvelle migration après modification entité
php bin/console make:migration

# Vérifier les routes du module
php bin/console debug:router | grep objectif
php bin/console debug:router | grep tache
php bin/console debug:router | grep gamification
php bin/console debug:router | grep recommandation
```

---

*Fluently · Module 6 · Sarra Ben Boubaker · 2025*

---

# 💬 Fluently — Module 7 : Gestion des Groupes & Messages

> Application web **Symfony 6** — Gestion des classes d'apprentissage collaboratif, chat de groupe avec modération IA, sessions de groupe et réservations.

**Développeur :** Jihed Ramedi  
**Module :** 7 — Groupes & Messages

---

## 📌 Présentation du module

Ce module est la partie **collaboration et apprentissage collectif** de l'application Fluently. Il permet à un **administrateur** de créer et gérer des groupes (classes) liés à une langue et un niveau CECRL spécifiques, et à un **étudiant** de rejoindre les groupes pour lesquels il a validé les prérequis, participer au chat de groupe (avec modération linguistique), visualiser les autres membres, et suivre les sessions planifiées.

Le système intègre un **accès contrôlé à trois niveaux** (prérequis de test + capacité + auto-intégration), une **modération par détection de langue** (LibreTranslate) qui bloque les messages dans la mauvaise langue, et un **audit trail complet** via MessageLog.

Développé en **Symfony**, connecté à la même base de données MySQL que l'application desktop JavaFX existante.

---

## 🗂️ Structure du projet

```
src/
├── Controller/
│   ├── GroupeController.php        → CRUD groupes (admin) + affichage étudiant
│   └── SessionController.php       → Sessions de groupe (planification, réservations)
│
├── Entity/
│   ├── Groupe.php                  → nom, description, capacite, statut, langue, niveau
│   ├── Message.php                 → contenu, utilisateur, groupe, audit
│   ├── Session.php                 → date_heure, statut, lien_reunion, groupe, enseignant
│   ├── Reservation.php             → date_reservation, statut, session, utilisateur
│   └── MessageLog.php              → action, contenu_original, contenu_nouveau, auditeur
│
├── Form/
│   ├── GroupeType.php              → Formulaire création/modification groupe
│   └── SessionType.php             → Formulaire création/modification session
│
├── Repository/
│   ├── GroupeRepository.php        → findAllWithDetails() pour éviter N+1
│   ├── MessageRepository.php       → findByGroupeQueryBuilder() pour pagination
│   └── SessionRepository.php       → Filtres groupés, réservations
│
├── Service/
│   └── OpenAIClient.php            → Détection de langue via LibreTranslate
│
└── Security/
    └── Voters/                     → Vérification droits d'accès groupe

templates/
├── groupe/
│   ├── index.html.twig             → Liste groupes étudiant (débloqué/verrouillé)
│   ├── admin_groups.html.twig      → Liste groupes (admin CRUD)
│   ├── details.html.twig           → Détails groupe + chat + membres + sessions
│   ├── new.html.twig               → Formulaire création groupe (admin)
│   ├── edit.html.twig              → Formulaire modification groupe (admin)
│   └── admin_group_chat.html.twig  → Vue admin des messages du groupe
└── session/
    ├── index.html.twig             → Liste sessions (étudiant)
    ├── show.html.twig              → Détail session + bouton réservation
    └── calendar.html.twig          → Calendrier FullCalendar sessions
```

---

## 🗄️ Base de données

### Entité `Groupe`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `nom` | VARCHAR(50) | Nom du groupe (3-50 chars) |
| `description` | VARCHAR(255) | Description (10-255 chars) |
| `capacite` | INT | Capacité maximale (positif) |
| `statut` | VARCHAR(50) | `actif`, `archived`, `inactive` |
| `date_creation` | DATE | Date de création |
| `ID_langue_id` | INT (FK) | Langue enseignée (obligatoire) |
| `Id_niveau_id` | INT (FK) | Niveau CECRL (obligatoire) |

### Entité `Message`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `contenu` | TEXT | Contenu du message |
| `date_creation` | DATETIME | Horodatage création |
| `date_modif` | DATETIME | Horodatage dernière modification |
| `Id_user_id` | INT (FK) | Auteur du message |
| `Id_groupe_id` | INT (FK) | Groupe cible |

### Entité `Session`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `dateHeure` | DATETIME_IMMUTABLE | Date et heure de la session |
| `statut` | VARCHAR(50) | `planifiée`, `en cours`, `terminée`, `annulée` |
| `lienReunion` | VARCHAR(255) | URL réunion (Jit.si, Google Meet, etc.) |
| `group_id` | INT (FK) | Groupe auquel appartient la session |
| `user_id` | INT (FK) | Enseignant responsable |
| `rating` | INT | Note moyenne (0-5) |

### Entité `Reservation`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `dateReservation` | DATE | Date de la réservation |
| `statut` | VARCHAR(50) | `en attente`, `confirmée`, `annulée`, `refusée` |
| `session_id` | INT (FK) | Session réservée |
| `user_id` | INT (FK) | Étudiant |

### Entité `MessageLog`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `action` | VARCHAR(50) | `edited`, `deleted`, `created` |
| `messageId` | INT | ID du message original (soft reference) |
| `original_content` | TEXT | Contenu avant modification |
| `new_content` | TEXT | Contenu après modification |
| `user_id` | INT (FK) | Utilisateur affecté |
| `created_by_id` | INT (FK) | Administrateur ayant modéré |
| `groupe_id` | INT (FK) | Groupe concerné |
| `created_at` | DATETIME | Horodatage audit |

### Relations

```
Groupe (1) ──────────────▶ (*) Message          [Chat du groupe]
Groupe (1) ──────────────▶ (*) Session          [Leçons du groupe]
Groupe (Many-to-Many) User                      [Membres du groupe]
Groupe → Langue (Required)                      [Langue enseignée]
Groupe → Niveau (Required)                      [Niveau du groupe]

Session (1) ──────────────▶ (*) Reservation     [Inscriptions session]
Session → Groupe (Required)                     [Groupe propriétaire]
Session → User (Required)                       [Enseignant]
```

---

## 🚀 Fonctionnalités

### 1. 👥 CRUD Groupes (Admin)

Création, modification, suppression et affichage des groupes avec :

- **Champs gérés** : nom (unique), description, capacité (positive), statut, langue, niveau
- **Validation** : nom 3-50 chars, description 10-255 chars, capacité > 0
- **Liens langue/niveau** : chaque groupe cible exactement une langue et un niveau CECRL (A1-C2)
- **Flash messages** : confirmation visuelle après chaque action CRUD

```php
// GroupeController.php — Vérification unicité du nom par admin
if ($groupeRepository->findByNom($groupe->getNom())) {
    throw new DuplicateGroupException('Nom groupe déjà existant');
}
```

---

### 2. 🔐 Contrôle d'accès à trois niveaux

#### Niveau 1 : Prérequis de test (UserProgress)
```
Student cherche à accéder à /groupes/{id}
        ↓
Vérification : UserProgress.test_niveau_complete == true
           pour langue = groupe.ID_langue AND niveau = groupe.Id_niveau
        ↓
Si NON validé : Flash error + Redirect /groupes
  Message : "Accès refusé : vous devez compléter le test de niveau 
            pour la langue « English » (niveau B1) avant de rejoindre ce groupe."
```

#### Niveau 2 : Capacité du groupe
```
Si groupe n'est PAS plein : OK
Si groupe EST plein AND user n'est PAS membre : Bloqué
  Message : "Ce groupe est complet (12/12 membres). Accès non autorisé."
        ↓
Si groupe EST plein AND user EST déjà membre : OK (lecture seule du chat)
```

#### Niveau 3 : Auto-intégration
```
À la première visite de /groupes/{id} :
  IF user PASSE les 2 premiers niveaux :
    → Ajouter user à groupe_user table (Many-to-Many)
    → Redirect /groupes/{id} (vue mise à jour)
  ELSE :
    → Rester sur /groupes avec message d'erreur
```

---

### 3. 💬 Chat de groupe avec modération linguistique

#### Envoi de message
```
Étudiant tape un message et clique "Envoyer"
        ↓
POST /groupes/{id}/message
        ↓
Contenu non-vide ? Sinon : Redirect (abandon silencieux)
        ↓
LibreTranslate.detectLanguage(contenu)
        ↓
Si detected_language != groupe.ID_langue (ISO code) :
  Flash error : "Message blocked: group language is en, detected fr."
  Redirect /groupes/{id}
        ↓
Sinon : Sauvegarde Message en base + audit (MessageLog)
        ↓
Redirect /groupes/{id} (liste actualisée)
```

#### Modification de message
```
Auteur du message clique "Modifier"
        ↓
Form : texte mis à jour
        ↓
POST /messages/{id}/edit (CSRF token required)
        ↓
Vérification : current_user == message.author
        ↓
Détection langue (même vérification)
        ↓
MessageLog créé avec :
  - action: "edited"
  - original_content: ancien texte
  - new_content: nouveau texte
  - created_by: utilisateur courant (modérateur)
        ↓
Message.date_modif = now()
  → Affichage visual "Édité" dans la vue
```

#### Suppression de message
```
Auteur clique "Supprimer"
        ↓
POST /messages/{id}/delete (CSRF token)
        ↓
Vérification propriété + CSRF
        ↓
MessageLog créé avec :
  - action: "deleted"
  - original_content: contenu supprimé
  - created_by: utilisateur courant
        ↓
Message supprimé physiquement
        ↓
Historique conservé dans MessageLog (trace audit)
```

#### Affichage du chat
```
Liste paginée : 10 messages par page
Tri : du plus ancien au plus récent
Champ auteur : nom + prénom de l'utilisateur
Horodatage : date et heure du message
Boutons d'action : visible pour l'auteur seulement
```

---

### 4. 👨‍👩‍👧‍👦 Affichage des membres

```
Panneau latéral "Membres ({count}/{capacite})"
        ↓
Liste des utilisateurs du groupe avec :
  - Avatar (initiales)
  - Nom complet
  - Statut en ligne (optionnel)
        ↓
Indicateur visuel si groupe est plein : badge 🔴 COMPLET
```

---

### 5. 📅 Sessions du groupe

Chaque groupe peut avoir plusieurs sessions (leçons planifiées) :

- **Planification** : date/heure, durée, enseignant, lien réunion
- **Statuts** : `planifiée` → `en cours` → `terminée` (ou `annulée`)
- **Réservations** : étudiants réservent des places (cascade delete avec session)
- **Rating** : enseignant note la session après terminer (0-5 ⭐)

```
Étudiant consulte /groupes/{id}
        ↓
Voit la liste des sessions à venir
        ↓
Clique "Réserver"
        ↓
POST /reservation/new/{sessionId}
        ↓
Vérification capacité session
        ↓
Création Reservation avec statut = "en attente"
        ↓
Enseignant approuve ou refuse dans /session/
        ↓
Si acceptée : QR Code généré (voir Module 5)
Si refusée : Notification l'étudiant
```

---

### 6. 📊 Administration (Dashboard admin)

**Vue admin pour gérer tous les groupes :**

```
/groupe/admin
        ↓
Tableau avec colonnes :
  - Nom groupe
  - Langue + Niveau
  - Membres actuels / Capacité
  - Statut (actif/archived/inactive)
  - Actions (Edit, Delete, Vue chat)
        ↓
Filtres : par langue, par niveau, par statut
        ↓
Boutons : [+ Créer groupe] [Exporter CSV] [Vue chat détaillée]
```

**Modération des messages (admin) :**

```
/groupe/{id}/admin-chat
        ↓
Tous les messages du groupe (pagination)
        ↓
Colonnes :
  - Auteur
  - Contenu
  - Date/Heure
  - Actions : [Supprimer] [Archiver]
        ↓
MessageLog : historique complet de chaque modification/suppression
```

---

### 7. 🌍 Détection de langue (LibreTranslate)

**Intégration LibreTranslate :**

```env
# .env
LIBRETRANSLATE_URL=http://172.16.0.153:5000
```

**Mapping langue BD → Code ISO :**

```php
private const LANG_NAME_TO_CODE = [
    'anglais' => 'en',
    'english' => 'en',
    'français' => 'fr',
    'francais' => 'fr',
    'arabe' => 'ar',
    'espagnol' => 'es',
    'allemand' => 'de',
    'italien' => 'it',
    'portugais' => 'pt',
    // ... autres langues
];
```

**Exemple détection :**

```
Utilisateur envoie : "Hola amigos"
Groupe.ID_langue = English (en)
        ↓
LibreTranslate detect() retourne : "es" (Espagnol)
        ↓
es ≠ en → Message rejeté
        ↓
Flash : "Message blocked: group language is en, detected es."
```

---

## 🔧 Routes principales

| Route | Méthode | Description |
|-------|---------|-------------|
| `/groupes` | GET | Liste groupes étudiant (avec statut débloqué/verrouillé/rejoint) |
| `/groupes/{id}` | GET | Détails groupe + chat + membres + sessions |
| `/groupes/{id}/message` | POST | Envoyer un message |
| `/messages/{id}/edit` | POST | Modifier un message (owner only) |
| `/messages/{id}/delete` | POST | Supprimer un message (owner only, CSRF) |
| `/groupe/admin` | GET | Liste admin groupes (CRUD) |
| `/groupe/admin/new` | GET/POST | Créer groupe (admin) |
| `/groupe/{id}/edit` | GET/POST | Modifier groupe (admin) |
| `/groupe/{id}` | POST | Supprimer groupe (admin, CSRF) |
| `/groupe/{id}/admin-chat` | GET | Vue admin messages du groupe |
| `/session/` | GET | Liste sessions (étudiant) |
| `/session/{id}` | GET | Détail session + réservation |
| `/session/calendar` | GET | Calendrier FullCalendar |
| `/session/calendar/events` | GET | JSON événements calendrier |

---

## 🗄️ Contextes de données

### Contexte étudiant (`/groupes/{id}`)

```twig
{# groupe/details.html.twig #}
groupe:          Groupe (nom, description, capacite)
messages:        Collection<Message> (paginée 10/page)
currentUserId:   int|null
memberCount:     int
isMember:        bool
isFull:          bool
```

### Contexte admin (`/groupe/admin`)

```twig
{# groupe/admin_groups.html.twig #}
groupes:         Collection<Groupe> (tous)
recherche:       string|null (filtrage texte)
filtreLangue:    Langue|null
filtreNiveau:    Niveau|null
filtreStatut:    string|null (actif/archived/inactive)
```

---

## 🔑 Règles métier

1. **Prérequis test** : L'accès à un groupe requiert que l'utilisateur ait complété le test de niveau pour cette langue + ce niveau
2. **Capacité ferme** : Impossible d'ajouter un nouveau membre si groupe est plein (sauf si déjà membre)
3. **Auto-intégration** : L'utilisateur est automatiquement ajouté au groupe à la première visite (si prérequis + capacité OK)
4. **Modération linguistique** : Aucun message dans une langue différente de celle du groupe n'est accepté
5. **Propriété de message** : Seul l'auteur peut modifier/supprimer son propre message
6. **Audit trail** : Tout changement d'état (édition, suppression) est enregistré dans MessageLog avec qui a fait l'action et quand
7. **Cascade delete** : Suppression d'un groupe entraîne suppression des messages, sessions et réservations associés
8. **Lien unique langue-niveau** : Chaque groupe doit être lié à exactement une Langue + un Niveau (pas de groupe générique)

---

## 📊 Performance

- **N+1 Prevention** : `GroupeRepository::findAllWithDetails()` eager-load Langue + Niveau
- **Pagination** : Messages paginés 10 par page pour limiter le DOM
- **Indexes DB** : Sur (ID_langue_id, Id_niveau_id), (Id_groupe_id, Id_user_id)

---

## 🧪 Testing

Unit tests pour validation des entités (voir `tests/GroupeTest.php`) :
- ✅ Groupe valide passe validation
- ✅ Nom obligatoire (non-vide)
- ✅ Description longueur min (10 chars)
- ✅ Capacité positive
- ✅ Statut obligatoire
- ✅ Date création obligatoire

---

*Fluently · Module 7 · Jihed Ramedi · 2025*

---

# 👤 Fluently — Module 8 : Gestion des Utilisateurs & Authentification

> Application web **Symfony 6** — Inscription, connexion, profil utilisateur, authentification Google, reconnaissance faciale et réinitialisation de mot de passe.

**Développeur :** Azer Aissaoui  
**Module :** 8 — Utilisateurs & Authentification

---

## 📌 Présentation du module

Ce module gère tout le **cycle de vie utilisateur** de l'application Fluently : création de compte, connexion, déconnexion, mise à jour du profil, liaison avec Google OAuth, vérification faciale et récupération de mot de passe.

Il centralise aussi les informations de compte utilisées par les autres modules : rôles, statut en ligne/hors ligne, langue(s) suivie(s), groupes rejoints, tests passés, messages envoyés et objectifs associés.

Développé en **Symfony**, connecté à la même base de données MySQL que l'application desktop JavaFX existante.

---

## 🗂️ Structure du projet

```
src/
├── Controller/
│   ├── SecurityController.php       → login, logout, redirection par défaut
│   ├── RegisterController.php       → inscription + rôle initial
│   ├── ProfileController.php        → édition du profil utilisateur
│   ├── ForgotPasswordController.php → reset mot de passe par code email
│   ├── GoogleController.php        → connexion Google OAuth
│   └── FaceController.php          → setup et vérification faciale
│
├── Entity/
│   ├── User.php                    → email, nom, prénom, rôles, statut, faceDescriptor
│   └── PasswordResetCode.php       → code temporaire, expiration, user
│
├── Form/
│   └── RegisterType.php            → formulaire inscription
│
├── Repository/
│   └── UserRepository.php          → recherche utilisateur par email, statut, rôle
│
├── Service/
│   └── UserManager.php             → validation métier du compte

templates/
├── login/
│   ├── index.html.twig             → page de connexion
│   ├── forgot_password.html.twig   → demande code de réinitialisation
│   └── forgot_password_code.html.twig → saisie code + nouveau mot de passe
├── register/
│   └── index.html.twig             → inscription
├── profile/
│   └── index.html.twig             → modification du profil
└── face/
    ├── setup.html.twig             → enregistrement faciale
    └── verify.html.twig            → vérification faciale
```

---

## 🗄️ Base de données

### Entité `User`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `email` | VARCHAR(100) | Email unique du compte |
| `nom` | VARCHAR(50) | Nom de famille |
| `prenom` | VARCHAR(50) | Prénom |
| `roles` | JSON | Rôles Symfony (`ROLE_USER`, `ROLE_ADMIN`, etc.) |
| `password` | VARCHAR | Mot de passe hashé |
| `statut` | VARCHAR(100) | `active`, `inactive`, `online`, `offline`, `disabled` |
| `faceDescriptor` | TEXT | Descripteur facial encodé en JSON |

### Entité `PasswordResetCode`

| Colonne | Type | Description |
|---------|------|-------------|
| `id` | INT (PK) | Identifiant auto |
| `code` | VARCHAR(6) | Code de réinitialisation à 6 chiffres |
| `expiresAt` | DATETIME | Date d'expiration |
| `user_id` | INT (FK) | Utilisateur concerné |

### Relations

```
User (1) ──────────────▶ (*) TestPassage     [Historique des tests]
User (1) ──────────────▶ (*) Message         [Messages de groupe]
User (1) ──────────────▶ (*) Objectif        [Objectifs personnels]
User (Many-to-Many) Groupe                  [Groupes rejoints]
User (Many-to-Many) Langue                  [Langues suivies]
User → PasswordResetCode (1..*)             [Codes temporaires]
```

---

## 🚀 Fonctionnalités

### 1. 🔐 Connexion / Déconnexion

La connexion est gérée par `SecurityController` avec une redirection adaptée après authentification :

- **Utilisateur désactivé** : accès bloqué et déconnexion forcée
- **Utilisateur avec visage enregistré** : passage par la vérification faciale
- **Administrateur** : redirection vers le dashboard
- **Utilisateur standard** : redirection vers l’accueil

```php
// SecurityController.php — logique de redirection
if ($user->getFaceDescriptor()) {
    return $this->redirectToRoute('app_face_verify_page');
}

if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
    return $this->redirectToRoute('dashboard');
}
```

---

### 2. 📝 Inscription utilisateur

L’inscription crée un compte utilisateur avec :

- **Nom complet** séparé en nom et prénom
- **Email** unique
- **Mot de passe** hashé par Symfony
- **Rôle initial** choisi à l’inscription (`ROLE_USER`, `ROLE_STUDENT`, `ROLE_TEACHER`, `ROLE_ADMIN`)
- **Statut initial** à `active`

Le parcours d’inscription se termine par la configuration faciale via `FaceController`.

---

### 3. 👤 Profil utilisateur

La page profil permet de modifier :

- nom
- prénom
- email
- rôle
- mot de passe

La validation se fait côté contrôleur avec des erreurs stockées en session, et empêche notamment :

- les noms trop courts
- les emails invalides ou déjà utilisés
- les mots de passe trop courts
- les mots de passe de confirmation différents

---

### 4. 📧 Réinitialisation de mot de passe

Le mot de passe est réinitialisé avec un **code temporaire à 6 chiffres** envoyé par email.

**Flux :**

```
Utilisateur saisit son email
        ↓
Création d'un PasswordResetCode avec expiration 10 minutes
        ↓
Envoi du code par email
        ↓
Utilisateur saisit le code + nouveau mot de passe
        ↓
Vérification du code et de sa validité
        ↓
Mise à jour du mot de passe hashé
        ↓
Suppression du code temporaire
```

---

### 5. 🪪 Authentification Google

Le projet utilise **Google OAuth 2.0** pour proposer une connexion externe via `GoogleController`.

**Fonctionnement :**

- redirection vers Google avec les scopes email et profile
- retour sur le callback géré par Symfony / authenticator
- connexion ou création du compte selon la configuration applicative

---

### 6. 🙂 Authentification faciale

Le module faciale stocke un **descripteur facial** dans `User.faceDescriptor`.

**Flux :**

```
Inscription ou activation faciale
        ↓
Capture du descripteur face.js
        ↓
POST /face-setup/save
        ↓
Enregistrement du descripteur JSON en base
        ↓
À la connexion, vérification via /face-verify-page
        ↓
Comparaison distance euclidienne
        ↓
Si match : accès autorisé
```

---

### 7. 📡 Statut utilisateur en ligne / hors ligne

Le statut utilisateur est mis à jour automatiquement :

- `online` lors de la redirection par défaut après connexion
- `offline` lors de la déconnexion
- `disabled` pour bloquer le compte

Ce statut est utilisé par les autres modules pour identifier rapidement les comptes actifs.

---

## 🔧 Routes principales

| Route | Méthode | Description |
|-------|---------|-------------|
| `/login` | GET | Page de connexion |
| `/default-redirect` | GET | Redirection post-login |
| `/logout` | GET | Déconnexion |
| `/register` | GET/POST | Inscription |
| `/profile` | GET/POST | Gestion du profil |
| `/forgot-password` | GET/POST | Demande de réinitialisation |
| `/forgot-password/code` | GET/POST | Vérification du code et changement de mot de passe |
| `/connect/google` | GET | Connexion Google OAuth |
| `/connect/google/check` | GET | Callback Google |
| `/face-setup/{id}` | GET | Page de configuration faciale |
| `/face-setup/save` | POST | Sauvegarde du descripteur facial |
| `/face-verify-page` | GET | Page de vérification faciale |
| `/face-verify` | POST | Comparaison faciale |
| `/face-success` | GET | Confirmation après vérification faciale |

---

## 🌐 APIs externes

| API | Usage |
|-----|-------|
| Google OAuth 2.0 | Authentification externe |
| Mailer Symfony | Envoi du code de réinitialisation |
| Face.js | Capture et comparaison faciale |

---

## 🔑 Règles métier

1. L’email utilisateur doit être unique
2. Le mot de passe est toujours stocké hashé
3. Un compte désactivé ne peut pas se connecter
4. Un code de réinitialisation expire après 10 minutes
5. La vérification faciale est optionnelle mais bloquante si un descripteur existe
6. Le statut utilisateur est synchronisé avec les événements de connexion / déconnexion

---

## 🧪 Testing

- `UserManagerTest` couvre les règles métier de base du compte
- Les contrôles de profil vérifient les champs requis et l’unicité de l’email
- La réinitialisation de mot de passe valide l’expiration du code

---

*Fluently · Module 8 · Azer Aissaoui · 2025*

---

## 👥 Équipe

| Membre | Module |
|--------|--------|
| **Jihed Ramedi** | Groupe / Message / Chat / Modération IA |
| **Azer Aissaoui** | User / Authentification / Avatar IA / Google Sheets |
| **Emna Bahar** | Test / Question / Réponse / TestPassage |
| **Oumaima Ben Hammou** | Langue / Cours / Niveau / UserProgress |
| **Yosr Ben Hamouda** | Session / Réservation / QR Code / Google Calendar |
| **Sarra Ben Boubaker** | Objectif / Tâche / Gamification / IA |
