<?php require('actions/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — Pharma 4.0</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body class="auth-page">

    <!-- Left Panel -->
    <div class="auth-left">
        <div class="auth-logo">
            <div class="auth-logo-circle">P</div>
            <span class="auth-logo-name">Pharma 4.0</span>
        </div>

        <div class="auth-headline">
            <h1>Bienvenue sur votre espace analytique</h1>
            <p>Accédez à votre tableau de bord, analysez vos dimensions et pilotez votre transformation digitale.</p>
        </div>

        <div class="auth-features">
            <div class="auth-feature-item">
                <div class="icon-wrap"><i class="ph ph-chart-pie-slice"></i></div>
                <span>Tableaux de bord en temps réel et graphiques interactifs</span>
            </div>
            <div class="auth-feature-item">
                <div class="icon-wrap"><i class="ph ph-trend-up"></i></div>
                <span>Suivi des indicateurs de maturité et benchmarking</span>
            </div>
            <div class="auth-feature-item">
                <div class="icon-wrap"><i class="ph ph-shield-check"></i></div>
                <span>Données sécurisées et accès contrôlé par rôle</span>
            </div>
        </div>
    </div>

    <!-- Right Panel -->
    <div class="auth-right">
        <div class="auth-form-card">

            <h2>Connexion</h2>
            <p class="auth-subtitle">Entrez vos identifiants pour accéder à votre espace.</p>

            <?php if(isset($errorMsg)): ?>
            <div class="auth-error">
                <i class="ph ph-warning-circle"></i>
                <?php echo htmlspecialchars($errorMsg); ?>
            </div>
            <?php endif; ?>

            <form method="POST">
                <div class="auth-form-group">
                    <label for="pseudo">Pseudo</label>
                    <div class="auth-input-wrap">
                        <i class="ph ph-user"></i>
                        <input id="pseudo" class="auth-input" type="text" name="pseudo" placeholder="Votre pseudo" autocomplete="username">
                    </div>
                </div>

                <div class="auth-form-group">
                    <label for="password">Mot de passe</label>
                    <div class="auth-input-wrap">
                        <i class="ph ph-lock"></i>
                        <input id="password" class="auth-input" type="password" name="password" placeholder="Votre mot de passe" autocomplete="current-password">
                    </div>
                </div>

                <button type="submit" name="validate" class="auth-btn">
                    Se connecter <i class="ph ph-arrow-right" style="margin-left:6px;"></i>
                </button>
            </form>

            <div class="auth-switch">
                Pas encore de compte ? <a href="signup.php">Je m'inscris</a>
            </div>
        </div>
    </div>

</body>
</html>