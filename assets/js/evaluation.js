const dataStructure = {
    organisation: {
        title: "Organisation",
        subcategories: {
            employes: {
                title: "Employés",
                questions: [
                    { id: "LD1", text: "Nos employés possèdent les compétences techniques et numériques nécessaires pour exploiter efficacement et optimiser les systèmes et technologies existants." },
                    { id: "LD2", text: "Notre entreprise dispose d'un programme de formation et de développement clairement défini et structuré." },
                    { id: "LD3", text: "Les programmes de formation et de développement sont continus et favorisent l'amélioration constante des compétences ainsi que la reconversion professionnelle." },
                    { id: "LD4", text: "Les initiatives de formation et de développement sont officiellement alignées sur la stratégie de l'entreprise et ses besoins opérationnels." },
                    { id: "LD5", text: "Des mécanismes de retour d'information sont en place pour mettre à jour et améliorer régulièrement les programmes de formation et de développement." },
                    { id: "LD6", text: "Notre entreprise identifie de manière proactive les compétences futures et émergentes et prépare nos employés à les acquérir." },
                ]
            },
            leadership_strategie: {
                title: "Leadership et Stratégie",
                isGroup: true,
                groups: {
                    gouvernance: {
                        title: "Stratégie et gouvernance",
                        questions: [
                            { id: "SG1", text: "Les initiatives de transformation digitale sont explicitement intégrées à notre stratégie commerciale/d'entreprise." },
                            { id: "SG2", text: "Notre entreprise a une stratégie à long terme et un cadre de gouvernance clairement définis pour la transformation digitale." },
                            { id: "SG3", text: "Nous avons formellement mis en place des structures, des équipes ou des rôles dédiés pour piloter les initiatives de transformation digitale." },
                            { id: "SG4", text: "Les initiatives de transformation digitale ont été mises en œuvre dans plusieurs domaines fonctionnels." },
                            { id: "SG5", text: "Des mécanismes de gouvernance garantissent que les initiatives de transformation digitale sont suivies de manière cohérente et déployées à l'échelle de la société." },
                            { id: "SG6", text: "Notre stratégie de transformation digitale et notre modèle de gouvernance sont régulièrement revus et mis à jour de manière dynamique pour refléter les évolutions technologiques et du marché." },
                            { id: "SG7", text: "La direction générale soutient activement et visiblement les initiatives de transformation digitale." },
                            { id: "SG8", text: "Des ressources financières suffisantes sont allouées pour soutenir la mise en œuvre et le déploiement des initiatives de transformation digitale." },
                            { id: "SG9", text: "L'investissement dans les technologies numériques et de pointe est considéré comme une priorité stratégique à long terme plutôt que comme une dépense à court terme." },
                            { id: "SG10", text: "Les décisions d'allocation des ressources (budget, talents, infrastructure) s'alignent systématiquement sur la stratégie de transformation digitale de la société." }
                        ]
                    },
                    leadership: {
                        title: "Compétence de leadership",
                        questions: [
                            { id: "LC1", text: "La direction générale est bien informée des technologies nouvelles et des tendances du secteur pertinentes pour la société." },
                            { id: "LC2", text: "La direction exploite activement les nouveaux concepts et technologies pour améliorer la performance de la société." },
                            { id: "LC3", text: "La direction est capable de lancer et de mettre en œuvre de manière autonome des initiatives de transformation digitale sans trop dépendre de consultants externes." },
                            { id: "LC4", text: "La direction applique les technologies et pratiques émergentes dans plusieurs domaines fonctionnels." },
                            { id: "LC5", text: "La direction adapte en permanence l'approche de transformation digitale de la société en réponse à l'évolution des conditions technologiques et du marché." },
                            { id: "LC6", text: "La direction favorise une culture qui encourage l'expérimentation, l'innovation et la réflexion prospective." }
                        ]
                    }
                }
            },
            culture: {
                title: "Culture organisationnelle",
                questions: [
                    { id: "OC1", text: "Notre entreprise promeut des valeurs communes qui favorisent la transformation digitale." },
                    { id: "OC2", text: "Les employés font preuve d'ouverture d'esprit et d'une attitude positive envers les nouvelles technologies et les méthodes de travail digitales." },
                    { id: "OC3", text: "La collaboration entre les humains et les systèmes intelligents (par exemple, l'IA, l'automatisation) est considérée comme une opportunité plutôt que comme une menace." },
                    { id: "OC4", text: "La direction encourage activement la confiance et la sécurité psychologique dans le cadre des efforts de transformation digitale." },
                    { id: "OC5", text: "Notre entreprise adapte ses normes et ses pratiques en réponse aux changements technologiques et environnementaux." },
                    { id: "OC6", text: "La collaboration interfonctionnelle est encouragée pour soutenir la transformation digitale." },
                    { id: "OC7", text: "Les connaissances acquises lors des efforts de transformation digitale précédents sont intégrées dans les pratiques actuelles." }
                ]
            },
            environnement: {
                title: "Environnement opérationnel",
                questions: [
                    { id: "BE1", text: "Les équipes interfonctionnelles au sein de notre entreprise collaborent efficacement à la réalisation des objectifs de transformation digitale." },
                    { id: "BE2", text: "Les équipes sont encouragées à partager leurs ressources, leurs responsabilités et leurs indicateurs de performance entre les différentes fonctions." },
                    { id: "BE3", text: "Des équipes interfonctionnelles peuvent être constituées de manière flexible et rapide pour relever les nouveaux défis." },
                    { id: "BE4", text: "Notre entreprise collabore étroitement avec des partenaires externes (par exemple, fournisseurs, clients, prestataires technologiques) pour mener à bien les initiatives de transformation digitale." },
                    { id: "BE5", text: "Nos initiatives de transformation digitale sont conformes aux cadres réglementaires et juridiques applicables." },
                    { id: "BE6", text: "Les politiques gouvernementales et les programmes institutionnels soutiennent nos initiatives en faveur du développement digital et de l'innovation." },
                    { id: "BE7", text: "Nous surveillons de manière proactive les changements réglementaires ou politiques qui affectent notre écosystème digital et nous nous y adaptons." },
                    { id: "BE8", text: "Notre entreprise participe activement à des réseaux sectoriels, des clusters ou des plateformes d'innovation." }
                ]
            }
        }
    },
    processus: {
        title: "Processus",
        subcategories: {
            integration_verticale: {
                title: "Intégration verticale (opérations)",
                questions: [
                    { id: "VI1", text: "Nos processus de planification des ressources et d'exécution de la production sont clairement définis et standardisés à tous les niveaux hiérarchiques." },
                    { id: "VI2", text: "Les données opérationnelles provenant de l'atelier sont collectées par voie numérique et accessibles à l'ensemble des services concernés." },
                    { id: "VI3", text: "Nos systèmes OT et IT (par exemple machines, MES, ERP) sont connectés et partagent des données à tous les niveaux hiérarchiques." },
                    { id: "VI4", text: "L'échange de données entre les systèmes de planification et d'exécution s'effectue automatiquement avec un minimum d'intervention humaine." },
                    { id: "VI5", text: "Les informations circulent de manière fluide entre les fonctions sans dépendre fortement d'une coordination humaine." },
                    { id: "VI6", text: "Les systèmes intégrés utilisent activement les données opérationnelles pour analyser, optimiser et ajuster les processus en temps réel." }
                ]
            },
            integration_horizontale: {
                title: "Intégration horizontale (chaîne d'approvisionnement)",
                questions: [
                    { id: "HI1", text: "Nos processus de chaîne d'approvisionnement sont clairement définis et standardisés entre les différentes fonctions internes." },
                    { id: "HI2", text: "Les données relatives à la chaîne d'approvisionnement sont collectées par voie numérique et partagées entre les services de l'entreprise." },
                    { id: "HI3", text: "Nos systèmes informatiques d'entreprise (par exemple, ERP, SCM, CRM) sont connectés et permettent l'échange de données entre les différentes fonctions internes." },
                    { id: "HI4", text: "L'échange d'informations avec les fournisseurs et les clients repose sur des systèmes digitaux intégrés plutôt que sur une coordination humaine." },
                    { id: "HI5", text: "Les flux de données entre les fonctions internes et les partenaires externes circulent automatiquement avec un minimum d'intervention humaine." },
                    { id: "HI6", text: "Les systèmes intégrés de la chaîne d'approvisionnement analysent activement les données partagées afin d'optimiser la coordination et les performances tout au long de la chaîne de valeur." }
                ]
            },
            produits_services: {
                title: "Produits et services",
                questions: [
                    { id: "IPL1", text: "Les processus du cycle de vie des produits (de la conception à la fin de vie) sont clairement définis et standardisés à toutes les étapes du cycle de vie." },
                    { id: "IPL2", text: "Des outils numériques sont utilisés pour gérer et documenter les activités couvrant la conception, l'ingénierie, la production, le service après-vente et la mise au rebut." },
                    { id: "IPL3", text: "Les systèmes prenant en charge les différentes étapes du cycle de vie sont connectés et permettent le partage des données entre ces étapes." },
                    { id: "IPL4", text: "Les informations circulent de manière fluide entre les étapes du cycle de vie sans dépendre fortement d'une coordination humaine." },
                    { id: "IPL5", text: "L'échange de données entre les systèmes du cycle de vie s'effectue automatiquement avec une intervention humaine limitée." },
                    { id: "IPL6", text: "Les systèmes de cycle de vie intégrés analysent activement les données afin d'optimiser les performances des produits et les résultats du cycle de vie." }
                ]
            },
            integration_client: {
                title: "Intégration client",
                questions: [
                    { id: "CI1", text: "Nous collectons et analysons systématiquement, en temps réel, les données relatives aux besoins, aux préférences et aux habitudes d'utilisation de nos clients." },
                    { id: "CI2", text: "Notre organisation identifie rapidement les nouvelles exigences des clients et les traduit en informations exploitables." },
                    { id: "CI3", text: "Les exigences des clients sont rapidement intégrées dans les ajustements apportés aux produits, services ou processus." },
                    { id: "CI4", text: "Nos systèmes et processus prennent en charge la personnalisation ou le sur-mesure à grande échelle en fonction des demandes spécifiques des clients." },
                    { id: "CI5", text: "Les données clients sont intégrées entre les différentes fonctions (par exemple, marketing, production, chaîne d'approvisionnement) afin de permettre une prise de décision coordonnée." },
                    { id: "CI6", text: "Nous adaptons les structures organisationnelles, les flux de travail et les offres en fonction des retours d'expérience continus des clients et des données d'utilisation tout au long du cycle de vie." }
                ]
            }
        }
    },
    technologie: {
        title: "Technologie",
        subcategories: {
            automatisation: {
                title: "Automatisation",
                questions: [
                    { id: "AU1", text: "Les processus opérationnels, d'entreprise et des installations sont automatisés plutôt qu'exécutés manuellement." },
                    { id: "AU2", text: "L'automatisation des processus de production, administratifs et des installations ne nécessite qu'une intervention humaine minimale pour les activités courantes." },
                    { id: "AU3", text: "L'intervention humaine n'est principalement requise que pour la gestion des exceptions ou des événements imprévus." },
                    { id: "AU4", text: "Les systèmes automatisés peuvent être rapidement reconfigurés, modifiés ou réaffectés lorsque les besoins opérationnels évoluent." },
                    { id: "AU5", text: "Les systèmes d'automatisation couvrant l'atelier, les fonctions de l'entreprise et les installations sont intégrés et coordonnés." },
                    { id: "AU6", text: "Les processus automatisés couvrant différents domaines (production, entreprise, installations) fonctionnent comme un système unifié et synchronisé." },
                    { id: "AU7", text: "L'automatisation prend en charge les interactions dynamiques entre les domaines (par exemple, les décisions de production influençant automatiquement les systèmes de l'entreprise ou des installations)." },
                    { id: "AU8", text: "Notre infrastructure d'automatisation permet un déploiement évolutif et flexible de nouveaux processus automatisés." }
                ]
            },
            connectivite: {
                title: "Connectivité",
                questions: [
                    { id: "CN1", text: "Les équipements, les systèmes d'entreprise et les systèmes des installations de notre entreprise sont connectés digitalement." },
                    { id: "CN2", text: "Les systèmes connectés sont interopérables entre différentes technologies et différents protocoles de communication." },
                    { id: "CN3", text: "Les données peuvent être échangées de manière transparente entre les systèmes de production, d'entreprise et des installations sans restriction notable." },
                    { id: "CN4", text: "Nos systèmes interconnectés sont protégés par un cadre de cybersécurité robuste et résilient." },
                    { id: "CN5", text: "Les systèmes connectés permettent un échange de données sécurisé en temps réel entre différents domaines." },
                    { id: "CN6", text: "L'infrastructure réseau peut être rapidement configurée ou étendue pour s'adapter aux changements d'équipements, de systèmes ou aux besoins opérationnels." },
                    { id: "CN7", text: "La connectivité entre les systèmes des ateliers, de l'entreprise et des installations favorise les interactions coordonnées entre les différents domaines." },
                    { id: "CN8", text: "Notre infrastructure de connectivité est évolutive afin de soutenir la croissance future et l'augmentation des volumes de données." }
                ]
            },
            intelligence: {
                title: "Intelligence",
                questions: [
                    { id: "IN1", text: "Des systèmes digitaux sont utilisés pour surveiller et traiter les données opérationnelles, d'entreprise et relatives aux installations." },
                    { id: "IN2", text: "Les systèmes peuvent détecter automatiquement les écarts par rapport aux paramètres prédéfinis et les signaler au personnel concerné." },
                    { id: "IN3", text: "Les systèmes digitaux fournissent des informations diagnostiques sur les causes profondes des écarts détectés." },
                    { id: "IN4", text: "Les systèmes analytiques peuvent prédire les problèmes potentiels ou l'état futur des actifs, des processus ou des ressources." },
                    { id: "IN5", text: "Les informations prédictives sont utilisées pour optimiser de manière proactive les performances et l'efficacité des ressources." },
                    { id: "IN6", text: "Les systèmes sont capables d'exécuter de manière autonome des décisions ou des ajustements sans intervention humaine." },
                    { id: "IN7", text: "Les fonctionnalités intelligentes sont intégrées dans les domaines de la production, de l'entreprise et des installations." },
                    { id: "IN8", text: "La prise de décision fondée sur les données est intégrée dans les processus opérationnels et managériaux courants." }
                ]
            },
            donnees_cyber: {
                title: "Données & cybersécurité",
                questions: [
                    { id: "DC1", text: "Les données opérationnelles, d'entreprise et relatives aux installations sont systématiquement collectées et stockées dans des formats numériques structurés." },
                    { id: "DC2", text: "Les données issues de l'ensemble des systèmes sont exactes, complètes et fiables pour la prise de décision." },
                    { id: "DC3", text: "L'intégrité des données (principes ALCOA+) fait l'objet d'une surveillance et d'un maintien actifs." },
                    { id: "DC4", text: "Des politiques claires de gouvernance des données définissent la propriété, les droits d'accès et la responsabilité." },
                    { id: "DC5", text: "Les données sont activement utilisées pour soutenir la prise de décision opérationnelle, tactique et stratégique." },
                    { id: "DC6", text: "Des architectures et des modèles de données standardisés permettent l'intégration entre les systèmes et les domaines." },
                    { id: "DC7", text: "La société considère les données comme un atout stratégique pour l'innovation et l'amélioration des performances." },
                    { id: "DC8", text: "Des mesures de cybersécurité robustes protègent l'infrastructure digitale contre les accès non autorisés et les perturbations." },
                    { id: "DC9", text: "Les risques liés à la cybersécurité sont surveillés et gérés continuellement grâce à des processus formels d'évaluation des risques." },
                    { id: "DC10", text: "La société est en mesure de détecter rapidement les incidents de cybersécurité, d'y répondre et de s'en remettre." },
                    { id: "DC11", text: "Les stratégies de cybersécurité sont régulièrement mises à jour pour s'adapter à l'évolution des technologies." }
                ]
            }
        }
    }
};

class EvaluationApp {
    constructor() {
        this.scores = JSON.parse(localStorage.getItem('industrie40_scores')) || {};
        this.flatSequence = [];
        
        // Initialisation de la grille pour les groupes
        const grid = document.getElementById('modal-subcat-grid');
        if (grid) grid.style.display = 'grid'; // S'assurer que le style peut utiliser grid ou flex

        setTimeout(() => this.refreshDashboardScores(), 100);
    }

    openQuestionnaire(catKey, subKey) {
        this.currentDashboardCat = catKey;
        this.currentDashboardSub = subKey;
        
        // 1. Reconstruire la séquence de TOUT le pilier (la "dimension" complète = Organisation, etc.)
        this.flatSequence = [];
        const pillarSubcats = dataStructure[catKey].subcategories;
        for (const sk in pillarSubcats) {
            if (pillarSubcats[sk].isGroup) {
                for (const gk in pillarSubcats[sk].groups) {
                    this.flatSequence.push({ cat: catKey, sub: sk, group: gk });
                }
            } else {
                this.flatSequence.push({ cat: catKey, sub: sk, group: null });
            }
        }
        
        // 2. Comportement d'ouverture (Menu si groupe, sinon accès direct)
        const subcatData = pillarSubcats[subKey];
        if (subcatData.isGroup) {
            this.showSubcatView(catKey, subKey);
            document.getElementById('evalModal').classList.add('active');
            return;
        } else {
            // Trouver l'index exact où commencer dans la grande ligne
            this.currentSequenceIndex = this.flatSequence.findIndex(s => s.sub === subKey);
        }
        this.renderCurrentSequence();
        document.getElementById('evalModal').classList.add('active');
    }

    showSubcatView(catKey, subKey) {
        document.getElementById('modal-subcat-view').style.display = 'block';
        document.getElementById('modal-questions-view').style.display = 'none';
        document.getElementById('modal-footer-nav').style.display = 'none';
        
        const subcatData = dataStructure[catKey].subcategories[subKey];
        document.getElementById('modal-category-title').textContent = subcatData.title;
        document.getElementById('modal-breadcrumb').innerHTML = `${dataStructure[catKey].title} / ${subcatData.title}`;

        const grid = document.getElementById('modal-subcat-grid');
        grid.innerHTML = '';
        
        for (const gk in subcatData.groups) {
            const card = document.createElement('div');
            card.style.border = '1px solid var(--border-color)';
            card.style.borderRadius = '8px';
            card.style.padding = '16px';
            card.style.cursor = 'pointer';
            card.style.background = 'var(--main-bg)';
            card.style.transition = 'all 0.2s';
            
            card.onmouseover = () => card.style.borderColor = 'var(--primary-color)';
            card.onmouseout = () => card.style.borderColor = 'var(--border-color)';
            
            card.innerHTML = `<div style="font-weight:600; color:var(--text-main);">${subcatData.groups[gk].title}</div>`;
            
            card.onclick = () => {
                this.currentSequenceIndex = this.flatSequence.findIndex(s => s.group === gk);
                this.renderCurrentSequence();
            };
            grid.appendChild(card);
        }
    }

    renderCurrentSequence() {
        document.getElementById('modal-subcat-view').style.display = 'none';
        document.getElementById('modal-questions-view').style.display = 'block';
        document.getElementById('modal-footer-nav').style.display = 'flex';
        
        const step = this.flatSequence[this.currentSequenceIndex];
        this.showQuestions(step.cat, step.sub, step.group);
        this.updateNavigationButtons();
    }

    showQuestions(catKey, subKey, groupKey = null) {
        this.currentCategory = catKey;
        this.currentSubcategory = subKey;
        this.currentGroup = groupKey;
        
        const catData = dataStructure[catKey];
        const subcatData = catData.subcategories[subKey];
        
        let questions = [];
        let title = '';
        let breadcrumbHtml = `${catData.title}`;

        if (groupKey) {
            const groupData = subcatData.groups[groupKey];
            title = groupData.title;
            questions = groupData.questions;
            breadcrumbHtml += ` / ${subcatData.title} / ${title}`;
        } else {
            title = subcatData.title;
            questions = subcatData.questions;
            breadcrumbHtml += ` / ${title}`;
        }

        document.getElementById('modal-category-title').textContent = title;
        document.getElementById('modal-breadcrumb').innerHTML = breadcrumbHtml;

        const container = document.getElementById('modal-questions-container');
        container.innerHTML = '';

        questions.forEach(q => {
            const item = document.createElement('div');
            item.className = 'question-item';

            let optionsHtml = '';
            const currentScore = this.scores[q.id];

            for (let i = 1; i <= 7; i++) {
                const isChecked = currentScore == i ? 'checked' : '';
                optionsHtml += `
                    <label class="scale-option">
                        <input type="radio" name="${q.id}" value="${i}" ${isChecked} onchange="app.updateScore('${q.id}', ${i})">
                        <span class="scale-label">${i}</span>
                    </label>
                `;
            }

            item.innerHTML = `
                <div class="question-header">
                    <span class="question-text">${q.text}</span>
                </div>
                <div class="scale-options">
                    ${optionsHtml}
                </div>
            `;
            container.appendChild(item);
        });

        this.updateModalScoreDisplay();
    }

    updateScore(qId, value) {
        this.scores[qId] = value;
        this.updateModalScoreDisplay();
        this.saveScores(false); // Auto-save sans alert
    }

    updateModalScoreDisplay() {
        if (!this.currentCategory || !this.currentSubcategory) return;
        
        const subcatData = dataStructure[this.currentCategory].subcategories[this.currentSubcategory];
        let questions = [];

        if (this.currentGroup) {
            questions = subcatData.groups[this.currentGroup].questions;
        } else {
            questions = subcatData.questions;
        }

        let totalScore = 0;
        let answeredCount = 0;

        questions.forEach(q => {
            if (this.scores[q.id]) {
                totalScore += parseInt(this.scores[q.id]);
                answeredCount++;
            }
        });

        const scoreElement = document.getElementById('modal-score-value');
        if (scoreElement) {
            if (answeredCount > 0) {
                scoreElement.textContent = (totalScore / answeredCount).toFixed(1);
            } else {
                scoreElement.textContent = "-";
            }
        }
    }

    updateNavigationButtons() {
        const btnPrev = document.getElementById('btn-prev');
        const btnNext = document.getElementById('btn-next');
        
        // S'il n'y a qu'une seule étape dans la séquence, on peut masquer le précédent
        // Wait, on pourrait avoir "Retour au menu" si c'est un groupe ? Non, demander Suivant
        if (this.currentSequenceIndex === 0) {
            btnPrev.style.display = 'none';
        } else {
            btnPrev.style.display = 'block';
            btnPrev.textContent = 'Précédent';
        }

        if (this.currentSequenceIndex === this.flatSequence.length - 1) {
            btnNext.textContent = 'Terminer';
        } else {
            btnNext.textContent = 'Suivant';
        }
    }

    nextStep() {
        if (this.currentSequenceIndex < this.flatSequence.length - 1) {
            this.currentSequenceIndex++;
            this.renderCurrentSequence();
            document.getElementById('evalModal').scrollTo(0,0);
        } else {
            this.closeModal();
            this.refreshDashboardScores();
        }
    }

    prevStep() {
        if (this.currentSequenceIndex > 0) {
            this.currentSequenceIndex--;
            this.renderCurrentSequence();
            document.getElementById('evalModal').scrollTo(0,0);
        }
    }

    closeModal() {
        this.saveScores(false);
        document.getElementById('evalModal').classList.remove('active');
        this.refreshDashboardScores();
    }

    saveScores(showSuccess = true) {
        localStorage.setItem('industrie40_scores', JSON.stringify(this.scores));
        if (showSuccess) {
            this.refreshDashboardScores();
            this.closeModal();
        }
    }

    calculateAverageForQuestions(questions) {
        let total = 0;
        let count = 0;
        questions.forEach(q => {
            if (this.scores[q.id]) {
                total += parseInt(this.scores[q.id]);
                count++;
            }
        });
        return count > 0 ? (total / count) : 0;
    }

    calculateAverageForNode(groupsRaw) {
        let total = 0, count = 0;
        for (const key in groupsRaw) {
            let val = this.calculateAverageForQuestions(groupsRaw[key].questions);
            if(val > 0) { total += val; count++; }
        }
        return count > 0 ? (total / count) : 0;
    }

    calculateAverageForSubcat(subcatData) {
        if (subcatData.isGroup) {
            return this.calculateAverageForNode(subcatData.groups);
        } else {
            return this.calculateAverageForQuestions(subcatData.questions);
        }
    }

    refreshDashboardScores() {
        let catAverages = {};

        for(const catKey in dataStructure) {
            const subdivisions = dataStructure[catKey].subcategories;
            let catTotal = 0;
            let catCount = 0;

            for(const subKey in subdivisions) {
                const subcat = subdivisions[subKey];
                let avg = this.calculateAverageForSubcat(subcat);

                const scoreId = `score-${catKey}-${subKey}`;
                const el = document.getElementById(scoreId);
                if (el) {
                    if (avg > 0) {
                        el.textContent = avg.toFixed(1);
                        const progressBg = el.parentElement.nextElementSibling;
                        if(progressBg && progressBg.firstChild) {
                            progressBg.firstChild.style.width = Math.round((avg/7)*100) + '%';
                        }
                    } else {
                        el.textContent = "0.0";
                        const progressBg = el.parentElement.nextElementSibling;
                        if(progressBg && progressBg.firstChild) {
                            progressBg.firstChild.style.width = '0%';
                        }
                    }
                }

                if (avg > 0) {
                    catTotal += avg;
                    catCount++;
                }
            }

            const catScoreEl = document.getElementById(`score-${catKey}`);
            if (catScoreEl) {
                catScoreEl.textContent = catCount > 0 ? (catTotal / catCount).toFixed(1) : "0.0";
            }
        }
    }
}

const app = new EvaluationApp();
