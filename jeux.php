<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pierre, Feuille, Ciseaux</title>
        <link rel="stylesheet" href="./css/jeux.css" />
        <script src="./js/jeux.js" defer></script>
    </head>
    <body>
        <section class="game">
            <header>
                <div class="player-health">
                    <div class="player-health-bar player-1-health-bar"></div>
                    <span>Joueur 1</span>
                </div>
                <div class="timer">
                    <span>60</span>
                </div>
                <div class="player-health">
                    <div class="player-health-bar player-2-health-bar"></div>
                    <span class="player-health-2">Joueur 2</span>
                </div>
            </header>
            <div class="main">
                <div class="game-feedback">
                    <span class="message"></span>
                </div>
                <div>
                    <span class="player player-1">🤜</span>
                </div>
                <div>
                    <span>VS</span>
                </div>
                <div>
                    <span class="player player-2">🤛</span>
                </div>
            </div>
            <footer>
                <button type="button" class="game-btn play-btn" data-option="Rock">
                    <span>Pierre</span>
                </button>
                <button type="button" class="game-btn play-btn" data-option="Paper">
                    <span>Feuille</span>
                </button>
                <button type="button" class="game-btn play-btn" data-option="Scissors">
                    <span>Ciseaux</span>
                </button>
                <button type="button" class="game-btn reset-btn">
                    <span>Reset</span>
                </button>
            </footer>
        </section>
    </body>
</html>