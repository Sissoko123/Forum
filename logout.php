<?php
// Page intermédiaire de déconnexion
// Elle injecte l'ID utilisateur en JS pour pouvoir effacer son localStorage AVANT la destruction de session
session_start();
if(!isset($_SESSION['auth'])) {
    header('Location: login.php');
    exit;
}
$userId = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Déconnexion...</title>
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #0f172a;
            font-family: Inter, sans-serif;
            color: #94a3b8;
            font-size: 1rem;
        }
        .logout-msg {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }
        .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid #334155;
            border-top-color: #3b82f6;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
    </style>
</head>
<body>
    <div class="logout-msg">
        <div class="spinner"></div>
        <span>Déconnexion en cours...</span>
    </div>
    <script>
        // ID de l'utilisateur actuellement connecté (injecté côté PHP avant destruction de session)
        const CURRENT_USER_ID = <?php echo json_encode($userId); ?>;

        /**
         * Efface les scores du localStorage pour cet utilisateur uniquement,
         * puis redirige vers logoutAction.php qui détruit la session PHP.
         */
        (function clearAndLogout() {
            const storageKey = `industrie40_scores_${CURRENT_USER_ID}`;
            localStorage.removeItem(storageKey);
            // Rediriger après avoir effacé le localStorage
            window.location.href = 'actions/logoutAction.php';
        })();
    </script>
</body>
</html>
