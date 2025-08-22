
---
# framework-gaw

Un mini-framework PHP léger et minimaliste conçu pour expérimenter et mettre en place les concepts fondamentaux d’un framework moderne : **point d’entrée unique, architecture MVC, autoloading via namespace, gestion des vues et des contrôleurs, et extensibilité future**.

## Objectifs du projet

L’objectif de `framework-gaw` est de créer une base simple mais solide pour comprendre et implémenter les mécanismes essentiels d’un framework PHP.
Il permet à :

* **Mettre en pratique les concepts MVC (Model - View - Controller)**.
* **Utiliser les namespaces PHP** pour une organisation claire et extensible du code.
* **Gérer un point d’entrée unique (index.php)** pour centraliser le routage et la logique d’initialisation.
* **Structurer le projet** afin de pouvoir facilement l’étendre (middlewares, routing avancé, ORM, etc.).


## Structure du projet

```bash
framework-gaw/
📁 app/          # Dossier des contrôleurs
📁 config/       # Configuration de l'application (BD, etc.)
📁 core/         # Dossier du noyau (Contrôleurs de base, View, helpers, etc.)
📁 public/       # Dossier public (index.php, assets, images, etc.)
📁 views/        # Dossier des vues (templates HTML/PHP)
📄 index.php     # Point d'entrée principal de l'application

```

## Fonctionnalités actuelles

* **Point d’entrée unique** : `index.php` redirige toutes les requêtes vers l’application.
* **MVC minimal** : séparation claire entre modèles, vues et contrôleurs.
* **Classe Controller de base** : héritage simplifié pour créer des contrôleurs applicatifs.
* **Classe View de base** : rendu simple de templates PHP/HTML.
* **Helpers** : fonctions utilitaires accessibles dans tout le projet.
* **Namespaces** : organisation claire du code avec `namespace Core;`, `namespace App;`, etc.

---

## Roadmap (Évolutions prévues)

* [ ] **Système de routing avancé** (type `Router::get('/home', 'HomeController@index')`).
* [ ] **Gestion des erreurs et exceptions personnalisées**.
* [ ] **Système de configuration centralisé** (`config/`).
* [ ] **Gestion des middlewares** (authentification, logging, etc.).
* [ ] **ORM léger** ou intégration de PDO pour la couche `Model`.
* [ ] **Support CLI** (génération de contrôleurs, migrations...).
* [ ] **Tests unitaires** pour valider les composants du framework.

---

## Exemples d’utilisation

### Exemple de route (`routes/routes.php`)

```php
use App\Controllers\HomeController;

$router->get('/', [HomeController::class, 'index']);
```

### Exemple de contrôleur (`app/controllers/HomeController.php`)

```php
namespace App\Controllers;

use Core\Controller;
use Core\View;

class HomeController extends Controller {
    public function index() {
        return View::render('home/index', ['message' => 'Bienvenue sur framework-gaw !']);
    }
}
```

### Exemple de vue (`views/home/index.php`)

```php
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h1><?= $message ?></h1>
</body>
</html>
```

---

## Conclusion

`framework-gaw` est une **base pédagogique** pour comprendre et construire un framework MVC en PHP avec des concepts modernes comme les namespaces et un point d’entrée unique.

L’idée est de l’améliorer progressivement en y intégrant des fonctionnalités avancées (routing, ORM, middlewares…) tout en gardant une **philosophie de légèreté et de clarté**.

---
