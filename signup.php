<?php require('actions/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription — Pharma 4.0</title>
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
            <h1>Rejoignez la plateforme de maturité digitale</h1>
            <p>Créez votre compte pour commencer à évaluer, analyser et améliorer vos indicateurs de performance.</p>
        </div>

        <div class="auth-features">
            <div class="auth-feature-item">
                <div class="icon-wrap"><i class="ph ph-rocket-launch"></i></div>
                <span>Déployez rapidement vos premières évaluations</span>
            </div>
            <div class="auth-feature-item">
                <div class="icon-wrap"><i class="ph ph-users-three"></i></div>
                <span>Collaborez avec votre équipe en temps réel</span>
            </div>
            <div class="auth-feature-item">
                <div class="icon-wrap"><i class="ph ph-map-trifold"></i></div>
                <span>Générez automatiquement votre feuille de route</span>
            </div>
        </div>
    </div>

    <!-- Right Panel -->
    <div class="auth-right">
        <div class="auth-form-card">

            <h2>Créer un compte</h2>
            <p class="auth-subtitle">Remplissez les informations ci-dessous pour commencer.</p>

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
                        <i class="ph ph-at"></i>
                        <input id="pseudo" class="auth-input" type="text" name="pseudo" placeholder="Choisissez un pseudo" autocomplete="username">
                    </div>
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
                    <div class="auth-form-group" style="margin-bottom:0;">
                        <label for="lastname">Nom</label>
                        <div class="auth-input-wrap">
                            <i class="ph ph-user"></i>
                            <input id="lastname" class="auth-input" type="text" name="lastname" placeholder="Votre nom">
                        </div>
                    </div>
                    <div class="auth-form-group" style="margin-bottom:0;">
                        <label for="firstname">Prénom</label>
                        <div class="auth-input-wrap">
                            <i class="ph ph-user"></i>
                            <input id="firstname" class="auth-input" type="text" name="firstname" placeholder="Votre prénom">
                        </div>
                    </div>
                </div>

                <div class="auth-form-group" style="margin-top:20px;">
                    <label for="password">Mot de passe</label>
                    <div class="auth-input-wrap">
                        <i class="ph ph-lock"></i>
                        <input id="password" class="auth-input" type="password" name="password" placeholder="Choisissez un mot de passe" autocomplete="new-password">
                    </div>
                </div>

                <button type="submit" name="validate" class="auth-btn">
                    Créer mon compte <i class="ph ph-arrow-right" style="margin-left:6px;"></i>
                </button>
            </form>

            <div class="auth-switch">
                Déjà un compte ? <a href="login.php">Je me connecte</a>
            </div>
        </div>
    </div>

</body>
</html>