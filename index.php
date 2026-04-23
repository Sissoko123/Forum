<?php require('actions/securityAction.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="logo-container">
        <div class="logo-circle">P</div>
        Pharma 4.0
    </div>
    
    <div class="sidebar-header mt-2">DASHBOARD</div>
    <ul class="sidebar-menu">
        <li><a href="#" class="active"><i class="ph ph-squares-four"></i> Executive Dashboard</a></li>
        <li><a href="#"><i class="ph ph-play-circle"></i> Start Assessment</a></li>
        <li><a href="#"><i class="ph ph-chart-bar"></i> Results</a></li>
        <li><a href="#"><i class="ph ph-chart-pie-slice"></i> Dimension Analysis</a></li>
        <li><a href="#"><i class="ph ph-trend-up"></i> Benchmarking</a></li>
        <li><a href="#"><i class="ph ph-map-trifold"></i> Improvement Roadmap</a></li>
        <li><a href="#"><i class="ph ph-file-text"></i> Reports</a></li>
    </ul>

    <div class="sidebar-header">SETTINGS</div>
    <ul class="sidebar-menu">
        <li><a href="#"><i class="ph ph-buildings"></i> Organization</a></li>
        <li><a href="#"><i class="ph ph-users"></i> Users & Roles</a></li>
    </ul>

    <div class="sidebar-user">
        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['firstname'].' '.$_SESSION['lastname']); ?>&background=random" alt="User">
        <div class="user-info">
            <span class="user-name">Dr. <?php echo htmlspecialchars($_SESSION['lastname']); ?></span>
            <span class="user-role">SVP Operations</span>
        </div>
        <a href="actions/logoutAction.php" style="color:var(--sidebar-text);"><i class="ph ph-sign-out"></i></a>
    </div>
</div>

<!-- Main Wrapper -->
<div class="main-wrapper">
    <!-- Top Header -->
    <header class="top-header">
        <h1>Executive Dashboard</h1>
        <div class="header-actions">
            <div class="search-box">
                <i class="ph ph-magnifying-glass"></i>
                <input type="text" placeholder="Search...">
            </div>
            <button class="notification-btn"><i class="ph ph-bell"></i></button>
        </div>
    </header>

    <!-- Content -->
    <main class="dashboard-content">
        <div class="controls-bar">
            <div class="filters-group">
                <button class="btn-custom">Global Operations <i class="ph ph-caret-down"></i></button>
                <button class="btn-custom">Q4 2023 Assessment <i class="ph ph-caret-down"></i></button>
            </div>
            <div class="actions-group">
                <button class="btn-custom"><i class="ph ph-download-simple"></i> Export PDF</button>
                <button class="btn-custom btn-primary-custom"><i class="ph ph-plus"></i> New Assessment</button>
            </div>
        </div>

        <div class="grid-layout">
            <!-- Overall Maturity (Gauge) -->
            <div class="card-custom widget-overall">
                <div class="card-title">Overall Pharma 4.0 Maturity</div>
                <div class="card-subtitle">Based on ISPE Pharma 4.0™ Operating Model</div>
                <div class="maturity-wrapper pt-3">
                    <div id="gaugeMaturityChart" style="width: 250px; height: 160px; display:flex; align-items:flex-end;"></div>
                    <div class="maturity-stats">
                        <div class="stat-box">
                            <div class="stat-label">CLASSIFICATION</div>
                            <div class="stat-value text-blue"><i class="ph-fill ph-circle"></i> Advanced</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-label">BENCHMARK</div>
                            <div class="stat-value text-green"><i class="ph ph-trend-up"></i> Top 25% Percentile</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-label">ASSESSMENT DATE</div>
                            <div class="stat-value text-main">Oct 15, 2023</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-label">TREND VS PREV</div>
                            <div class="stat-value text-green">+0.4 points</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Recommendations -->
            <div class="card-custom widget-recommendations">
                <div class="d-flex justify-content-between">
                    <div class="card-title" style="margin-bottom:0;">Top Recommendations</div>
                    <span class="badge" style="background:var(--primary-light); color:var(--chart-orange); font-size:0.7rem;">Priority</span>
                </div>
                <div class="card-subtitle mt-1 mb-3">&nbsp;</div>
                <ul class="rec-list mb-3">
                    <li class="rec-item">
                        <div class="rec-icon"><i class="ph ph-database"></i></div>
                        <div class="rec-content">
                            <h4>Improve Data Governance</h4>
                            <p>Implement centralized data catalog and master data management.</p>
                        </div>
                    </li>
                    <li class="rec-item">
                        <div class="rec-icon"><i class="ph ph-microchip"></i></div>
                        <div class="rec-content">
                            <h4>IoT Integration in Mfg</h4>
                            <p>Deploy edge sensors on legacy equipment for real-time OEE.</p>
                        </div>
                    </li>
                    <li class="rec-item">
                        <div class="rec-icon"><i class="ph ph-graduation-cap"></i></div>
                        <div class="rec-content">
                            <h4>Digital Skills Training</h4>
                            <p>Launch upskilling program for shop-floor operators.</p>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn-link-custom">View Full Roadmap</a>
            </div>

            <!-- Capability Dimensions (Radar) -->
            <div class="card-custom widget-dimensions">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-title">Capability Dimensions</div>
                        <div class="card-subtitle mb-0">Performance across key Pharma 4.0 elements</div>
                    </div>
                    <i class="ph ph-dots-three text-muted"></i>
                </div>
                <div id="radarDimensionsChart" style="margin-top:20px; min-height: 280px;"></div>
            </div>

            <!-- Gap Analysis -->
            <div class="card-custom widget-gap">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <div class="card-title">Gap Analysis</div>
                        <div class="card-subtitle mb-0">Current vs Target scores by dimension</div>
                    </div>
                    <a href="#" style="font-size:0.875rem; text-decoration:none; color:var(--primary-color); font-weight:600;">View All</a>
                </div>
                
                <table class="gap-table">
                    <thead>
                        <tr>
                            <th>DIMENSION</th>
                            <th>CURRENT</th>
                            <th>TARGET</th>
                            <th>GAP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Data Governance</td><td>2.8</td><td>5.0</td><td class="gap-red">-2.2</td></tr>
                        <tr><td>Customer Integration</td><td>3.1</td><td>5.0</td><td class="gap-red">-1.9</td></tr>
                        <tr><td>Employees Readiness</td><td>3.5</td><td>5.0</td><td class="gap-yellow">-1.5</td></tr>
                        <tr><td>Tech Infrastructure</td><td>4.2</td><td>5.5</td><td class="gap-yellow">-1.3</td></tr>
                        <tr><td>Operations & SC</td><td>4.8</td><td>5.5</td><td class="gap-gray">-0.7</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Capability Pillars -->
            <div class="card-custom widget-pillars">
                <div class="card-title mb-4">Capability Pillars</div>
                <div class="pillars-grid">
                    
                    <!-- Organization Pillar -->
                    <div class="pillar-col">
                        <div class="pillar-header">
                            <i class="ph ph-tree-structure"></i>
                            <div><span class="title">Organizational</span><span class="score" style="white-space: nowrap; display: block; margin-top: 4px;">Note globale : <span id="score-organisation">0.0</span>/7</span></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('organisation', 'leadership_strategie')">
                            <div class="progress-info"><span>Leadership & Strategy</span><span id="score-organisation-leadership_strategie">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-green" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('organisation', 'culture')">
                            <div class="progress-info"><span>Culture</span><span id="score-organisation-culture">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-blue" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('organisation', 'environnement')">
                            <div class="progress-info"><span>Business Environment</span><span id="score-organisation-environnement">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-orange" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('organisation', 'employes')">
                            <div class="progress-info"><span>Employees</span><span id="score-organisation-employes">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-blue" style="width:0%"></div></div>
                        </div>
                    </div>

                    <!-- Technology Pillar -->
                    <div class="pillar-col">
                        <div class="pillar-header">
                            <i class="ph ph-desktop"></i>
                            <div><span class="title">Technology</span><span class="score" style="white-space: nowrap; display: block; margin-top: 4px;">Note globale : <span id="score-technologie">0.0</span>/7</span></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('technologie', 'connectivite')">
                            <div class="progress-info"><span>Connectivité</span><span id="score-technologie-connectivite">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-green" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('technologie', 'donnees_cyber')">
                            <div class="progress-info"><span>Data & Cybersecurity</span><span id="score-technologie-donnees_cyber">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-blue" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('technologie', 'automatisation')">
                            <div class="progress-info"><span>Automatisation</span><span id="score-technologie-automatisation">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-orange" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('technologie', 'intelligence')">
                            <div class="progress-info"><span>Intelligence & Systèmes</span><span id="score-technologie-intelligence">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-blue" style="width:0%"></div></div>
                        </div>
                    </div>

                    <!-- Processes Pillar -->
                    <div class="pillar-col">
                        <div class="pillar-header">
                            <i class="ph ph-gears"></i>
                            <div><span class="title">Processes</span><span class="score" style="white-space: nowrap; display: block; margin-top: 4px;">Note globale : <span id="score-processus">0.0</span>/7</span></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('processus', 'integration_verticale')">
                            <div class="progress-info"><span>Intégration verticale</span><span id="score-processus-integration_verticale">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-green" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('processus', 'produits_services')">
                            <div class="progress-info"><span>Products & Services</span><span id="score-processus-produits_services">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-blue" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('processus', 'integration_horizontale')">
                            <div class="progress-info"><span>Intégration horizontale</span><span id="score-processus-integration_horizontale">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-orange" style="width:0%"></div></div>
                        </div>
                        <div class="progress-item" onclick="app.openQuestionnaire('processus', 'integration_client')">
                            <div class="progress-info"><span>Customer Integration</span><span id="score-processus-integration_client">0.0</span></div>
                            <div class="progress-bar-bg"><div class="progress-bar-fill fill-blue" style="width:0%"></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maturity Progression (Line Chart) -->
            <div class="card-custom widget-progression">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-title">Maturity Progression</div>
                        <div class="card-subtitle mb-0">Historical assessment scores</div>
                    </div>
                    <select class="form-select" style="width:auto; font-size:0.875rem;"><option>All Time</option></select>
                </div>
                <div id="progressionLineChart" style="min-height:220px; margin-top:10px;"></div>
            </div>

            <!-- Industry Benchmark (Bar Chart) -->
            <div class="card-custom widget-benchmark">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-title">Industry Benchmark</div>
                        <div class="card-subtitle mb-0">Your score vs Global Pharma Average</div>
                    </div>
                    <i class="ph ph-corners-out text-muted"></i>
                </div>
                <div id="benchmarkBarChart" style="min-height:220px; margin-top:10px;"></div>
            </div>
            
        </div>
    </main>
</div>

<!-- Questionnaire Modal -->
<div class="modal-overlay" id="evalModal">
    
    <!-- Topbar for full screen -->
    <div class="fullscreen-topbar">
        <button class="btn-return" onclick="app.closeModal()">
            <i class="ph ph-arrow-left" style="font-size: 1.25rem;"></i> Retour au tableau de bord
        </button>
    </div>

    <div class="modal-content">
        <div class="modal-header">
            <div>
                <h2 id="modal-category-title">Titre de la catégorie</h2>
                <div style="font-size:0.85rem; color:var(--text-muted); margin-top:4px;" id="modal-breadcrumb">Organisation / Leadership & Stratégie</div>
            </div>
        </div>

        <div class="modal-body">
            <!-- View to choose sub-sub categories (if applicable, e.g. Leadership & Strategy) -->
            <div id="modal-subcat-view" style="display:none;">
                <h3 style="margin-top:0; margin-bottom:16px;">Veuillez choisir une sous-catégorie :</h3>
                <div class="subcat-grid" id="modal-subcat-grid"></div>
            </div>

            <!-- View for actual questions -->
            <div id="modal-questions-view" style="display:none;">
                <div id="modal-questions-container">
                    <!-- Javascript will populate questions here -->
                </div>
            </div>
        </div>

        <div class="modal-footer" id="modal-footer-nav" style="display: flex; justify-content: flex-start; gap: 16px;">
            <button class="btn-save" style="background-color: var(--text-muted);" id="btn-prev" onclick="app.prevStep()">Précédent</button>
            <button class="btn-save" id="btn-next" onclick="app.nextStep()">Suivant</button>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="assets/js/dashboard.js?version=6"></script>
<script src="assets/js/evaluation.js?version=6"></script>
</body>
</html>