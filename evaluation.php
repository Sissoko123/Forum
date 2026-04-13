<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation Industrie 4.0 - Échelle Entreprise</title>
    <link rel="stylesheet" href="assets/css/evaluation.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Industrie 4.0</h2>
                <p>Évaluation Entreprise</p>
            </div>
            
            <nav class="nav-menu" id="navMenu">
                <!-- Navigation items will be injected here by JS -->
            </nav>

            <div class="sidebar-footer">
                <button class="btn btn-secondary" onclick="window.location.href='index.php'">Retour à l'accueil</button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="topbar">
                <div class="breadcrumb" id="breadcrumb">
                    <span>Sélectionnez une catégorie</span>
                </div>
                <div class="overall-progress">
                    <div class="progress-info">
                        <span>Progression globale</span>
                        <span id="progress-percent">0%</span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" id="overall-progress-bar"></div>
                    </div>
                </div>
            </header>

            <div class="content-area">
                <div id="welcome-message" class="card welcome-card">
                    <h1>Bienvenue dans l'outil d'évaluation Industrie 4.0</h1>
                    <p>Veuillez sélectionner un pilier dans le menu de gauche pour commencer votre évaluation.</p>
                    <div class="pillars-overview">
                        <div class="pillar-card" onclick="app.selectCategory('organisation')">
                            <h3>Organisation</h3>
                            <p>Évaluez vos employés, votre leadership, culture et environnement.</p>
                        </div>
                        <div class="pillar-card" onclick="app.selectCategory('processus')">
                            <h3>Processus</h3>
                            <p>Analysez vos opérations, votre chaîne de valeur et vos clients.</p>
                        </div>
                        <div class="pillar-card" onclick="app.selectCategory('technologie')">
                            <h3>Technologie</h3>
                            <p>Mesurez votre niveau en automatisation, connectivité et data.</p>
                        </div>
                    </div>
                </div>

                <!-- Subcategories view (e.g., Leadership & Stratégie -> two options) -->
                <div id="subcategory-view" class="view-hidden">
                    <h2 id="subcategory-title" class="section-title">Sous-catégories</h2>
                    <div class="subcategories-grid" id="subcategories-grid">
                        <!-- Subcategories cards will be injected here -->
                    </div>
                </div>

                <!-- Questions view -->
                <div id="questions-view" class="view-hidden">
                    <div class="section-header">
                        <h2 id="question-category-title" class="section-title">Titre de la catégorie</h2>
                        <div class="category-score">
                            <span>Score:</span> <strong id="category-score-value">-</strong> / 5
                        </div>
                    </div>
                    
                    <div class="scale-legend">
                        <div class="legend-item"><span class="badge score-1">1</span> Non implémenté</div>
                        <div class="legend-item"><span class="badge score-2">2</span> Prévu</div>
                        <div class="legend-item"><span class="badge score-3">3</span> Mise en œuvre pilote</div>
                        <div class="legend-item"><span class="badge score-4">4</span> Partiellement implémenté</div>
                        <div class="legend-item"><span class="badge score-5">5</span> Entièrement implémenté</div>
                    </div>

                    <div id="questions-container" class="questions-list">
                        <!-- Questions will be built by JS -->
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-primary" id="btn-save" onclick="app.saveScores()">Enregistrer</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="assets/js/evaluation.js"></script>
</body>
</html>
