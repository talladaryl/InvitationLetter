<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Everblue - Designs</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- GSAP et jQuery sont requis pour l'animation de la carte CodePen -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/CSSRulePlugin.min.js"></script>
    <!-- Tone.js pour les effets sonores -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tone/14.8.49/Tone.min.js"></script>
    <style>
        /* La classe suivante est nécessaire pour cacher la barre de défilement tout en gardant la fonctionnalité de défilement */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        /* NOUVEAUX STYLES POUR LA PREMIÈRE ANIMATION (Dazzling Dress Invitation) */
        .codepen1-container {
            height:500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e6e6e6;
        }
        .codepen1-envelope {
            position: relative;
            cursor: pointer;
        }
        .codepen1-back {
            position: relative;
            width:250px;
            height: 200px;
            background-color: #ffcea1;
        }
        .codepen1-letter {
            position: absolute;
            background-color: #fff;
            width:230px;
            height: 180px;
            top:10px;
            left:10px;
            transition: .2s;
        }
        .codepen1-letter:before {
            position: absolute;
            content:"";
            background-color: #ffd4ab;
            width: 80px;
            height: 80px;
            top:75px;
            left:75px;
        }
        .codepen1-letter:after {
            position: absolute;
            content:"";
            width:30px;
            height:30px;
            background-color: #fff;
            top:82px;
            left: 82px;
            box-shadow: 36px 0 #fff, 36px 36px #fff, 0px 36px #fff;
        }
        .codepen1-text {
            text-align: center;
            font-size: 17px;
            font-family: cursive;
            margin-top:20px;
            font-weight: bold;
            color:#ffb169;
        }
        .codepen1-text:before, .codepen1-text:after {
            content:"";
            position: absolute;
            width: 5px;
            border-radius:10px;
            background-color: #ffd4ab;
            height: 20px;
            top:60px;
        }
        .codepen1-text:before {
            left:108px;
            transform: rotate(-25deg);
        }
        .codepen1-text:after {
            left:118px;
            transform: rotate(25deg);
        }
        .codepen1-front {
            position: absolute;
            border-right: 130px solid #facba0;
            border-top: 100px solid transparent;
            border-bottom: 100px solid transparent;
            height:0;
            width:0;
            top:0;
            left:120px;
            z-index:3;
        }
        .codepen1-front:before {
            content:"";
            position: absolute;
            border-left: 130px solid #facba0;
            border-top: 100px solid transparent;
            border-bottom: 100px solid transparent;
            height:0;
            width:0;
            top:-100px;
            left:-120px;
        }
        .codepen1-front:after {
            content:"";
            position: absolute;
            border-bottom: 105px solid #f7c799;
            border-left: 125px solid transparent;
            border-right:125px solid transparent;
            height:0;
            width:0;
            top:-5px;
            left:-120px;
        }
        .codepen1-top {
            position: absolute;
            border-top: 105px solid #ffc894;
            border-left: 125px solid transparent;
            border-right:125px solid transparent;
            height:0;
            width:0;
            top:0;
            transform-origin: top;
            transition: .4s;
            z-index: 4;
        }
        .codepen1-shadow {
            position: absolute;
            background-color: rgba(0,0,0,0.1);
            width:250px;
            height:10px;
            top:220px;
            border-radius:50%;
        }
        .codepen1-envelope:hover .codepen1-top {
            transform: rotateX(160deg);
        }
        .codepen1-envelope:hover .codepen1-letter {
            transform: translateY(-100px);
            z-index:2;
        }

        /* NOUVEAUX STYLES POUR LA MINIATURE DU DESIGN 1 */
        .codepen1-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e6e6e6;
            transform: scale(0.6);
            transform-origin: center;
        }
        .codepen1-preview-envelope {
            position: relative;
            cursor: pointer;
        }
        .codepen1-preview-back {
            position: relative;
            width:250px;
            height: 200px;
            background-color: #ffcea1;
        }
        .codepen1-preview-letter {
            position: absolute;
            background-color: #fff;
            width:230px;
            height: 180px;
            top:10px;
            left:10px;
        }
        .codepen1-preview-letter:before {
            position: absolute;
            content:"";
            background-color: #ffd4ab;
            width: 80px;
            height: 80px;
            top:75px;
            left:75px;
        }
        .codepen1-preview-letter:after {
            position: absolute;
            content:"";
            width:30px;
            height:30px;
            background-color: #fff;
            top:82px;
            left: 82px;
            box-shadow: 36px 0 #fff, 36px 36px #fff, 0px 36px #fff;
        }
        .codepen1-preview-text {
            text-align: center;
            font-size: 17px;
            font-family: cursive;
            margin-top:20px;
            font-weight: bold;
            color:#ffb169;
        }
        .codepen1-preview-text:before, .codepen1-preview-text:after {
            content:"";
            position: absolute;
            width: 5px;
            border-radius:10px;
            background-color: #ffd4ab;
            height: 20px;
            top:60px;
        }
        .codepen1-preview-text:before {
            left:108px;
            transform: rotate(-25deg);
        }
        .codepen1-preview-text:after {
            left:118px;
            transform: rotate(25deg);
        }
        .codepen1-preview-front {
            position: absolute;
            border-right: 130px solid #facba0;
            border-top: 100px solid transparent;
            border-bottom: 100px solid transparent;
            height:0;
            width:0;
            top:0;
            left:120px;
            z-index:3;
        }
        .codepen1-preview-front:before {
            content:"";
            position: absolute;
            border-left: 130px solid #facba0;
            border-top: 100px solid transparent;
            border-bottom: 100px solid transparent;
            height:0;
            width:0;
            top:-100px;
            left:-120px;
        }
        .codepen1-preview-front:after {
            content:"";
            position: absolute;
            border-bottom: 105px solid #f7c799;
            border-left: 125px solid transparent;
            border-right:125px solid transparent;
            height:0;
            width:0;
            top:-5px;
            left:-120px;
        }
        .codepen1-preview-top {
            position: absolute;
            border-top: 105px solid #ffc894;
            border-left: 125px solid transparent;
            border-right:125px solid transparent;
            height:0;
            width:0;
            top:0;
            transform-origin: top;
            z-index: 4;
        }
        .codepen1-preview-shadow {
            position: absolute;
            background-color: rgba(0,0,0,0.1);
            width:250px;
            height:10px;
            top:220px;
            border-radius:50%;
        }
        
        /* Styles pour la deuxième animation (Golden Wedding) */
        .codepen2-container {
            min-height: 500px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            perspective: 600px;
        }
        .codepen2-content {
            position: relative;
        }
        .codepen2-shadow {
            position: absolute;
            width: 200px;
            height: 1px;
            background: transparent;
            border-radius: 30%;
            box-shadow: 50px 100px 10px 5px #eeeef3;
        }
        .codepen2-letter {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 280px;
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 15;
            border-radius: 2px;
            background: #d8d7e5;
            box-shadow: 0px 1px 7px -2px #283c2b;
        }
        .codepen2-letter .body {
            position: relative;
            width: 240px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #283c2b;
        }
        .codepen2-letter .close {
            position: absolute;
            right: 0;
            top: 0;
            font-size: 30px;
            font-family: 'Manjari', sans-serif;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .codepen2-letter .message {
            font-size: 40px;
            font-weight: 900;
            text-align: center;
            font-family: 'Great Vibes', cursive;
        }
        .codepen2-envelope {
            position: relative;
            width: 300px;
            height: 180px;
            background: linear-gradient(#cccbd7 0.5px, #26452b 0.5px);
            cursor: pointer;
        }
        .codepen2-envelope::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            border-top: 115px solid #7873A7;
            border-left: 150px solid transparent;
            border-right: 150px solid transparent;
            box-sizing: border-box;
            z-index: 30;
            transform-origin: top;
        }
        .codepen2-envelope::after {
            content: '';
            position: absolute;
            top: 0;
            width: 300px;
            height: 180px;
            z-index: 25;
            background:
                /* bottom-right */
                linear-gradient(30deg, #162819 47%, #0c170e 50%, #283c2b 50%) 150px 90px/ 150px 90px no-repeat,
                /* top-left */
                linear-gradient(31deg, #283c2b 49%, #0c170e 50%, transparent 50%) 0px 0px/ 152px 90px no-repeat,
                /* bottom-left */
                linear-gradient(150deg, #283c2b 50%, #0c170e 50%, #162819 53%) 0px 90px/ 151px 90px no-repeat,
                /* top-right */
                linear-gradient(148.7deg, transparent 50%, #0c170e 50%, #283c2b 51%) 150px 0px/ 150px 90px no-repeat;
        }
        
        /* NOUVEAUX STYLES POUR LA MINIATURE DU DESIGN 2 */
        .codepen2-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e6e6e6;
            transform: scale(0.6);
            transform-origin: center;
        }
        .codepen2-preview-content {
            position: relative;
        }
        .codepen2-preview-shadow {
            position: absolute;
            width: 200px;
            height: 1px;
            background: transparent;
            border-radius: 30%;
            box-shadow: 50px 100px 10px 5px #eeeef3;
        }
        .codepen2-preview-letter {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 280px;
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 15;
            border-radius: 2px;
            background: #d8d7e5;
            box-shadow: 0px 1px 7px -2px #283c2b;
        }
        .codepen2-preview-body {
            position: relative;
            width: 240px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #283c2b;
        }
        .codepen2-preview-message {
            font-size: 20px; /* Taille de police réduite pour la miniature */
            font-weight: 900;
            text-align: center;
            font-family: 'Great Vibes', cursive;
        }
        .codepen2-preview-envelope {
            position: relative;
            width: 300px;
            height: 180px;
            background: linear-gradient(#cccbd7 0.5px, #26452b 0.5px);
            cursor: pointer;
        }
        .codepen2-preview-envelope::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            border-top: 115px solid #7873A7;
            border-left: 150px solid transparent;
            border-right: 150px solid transparent;
            box-sizing: border-box;
            z-index: 30;
            transform-origin: top;
        }
        .codepen2-preview-envelope::after {
            content: '';
            position: absolute;
            top: 0;
            width: 300px;
            height: 180px;
            z-index: 25;
            background:
                /* bottom-right */
                linear-gradient(30deg, #162819 47%, #0c170e 50%, #283c2b 50%) 150px 90px/ 150px 90px no-repeat,
                /* top-left */
                linear-gradient(31deg, #283c2b 49%, #0c170e 50%, transparent 50%) 0px 0px/ 152px 90px no-repeat,
                /* bottom-left */
                linear-gradient(150deg, #283c2b 50%, #0c170e 50%, #162819 53%) 0px 90px/ 151px 90px no-repeat,
                /* top-right */
                linear-gradient(148.7deg, transparent 50%, #0c170e 50%, #283c2b 51%) 150px 0px/ 150px 90px no-repeat;
        }

        /* NOUVEAUX STYLES POUR LA TROISIÈME ANIMATION (Design Tropical) */
        .codepen3-container {
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #00B894; /* Correspond à la couleur de base du design */
        }
        .codepen3-envelope {
            width: 300px;
            height: 150px;
            background: #2D3436;
            position: relative;
            cursor: pointer;
        }
        .codepen3-envelope_top {
            border-bottom: 100px solid #2D3436;
            border-left: 110px solid transparent;
            border-right: 110px solid transparent;
            height: 0;
            width: 80px;
            position: absolute;
            transform: translateY(-100%);
            transform-origin: bottom;
            transition: .3s;
            z-index: 3;
        }
        .codepen3-envelope_body {
            position: relative;
        }
        .codepen3-envelope_body_front {
            width: 300px;
            height: 75px;
            background: #00cec9;
            position: absolute;
            z-index: 2;
            transform: translateY(100%);
        }
        .codepen3-envelope_body_left {
            width: 0;
            height: 0;
            border-top: 75px solid transparent;
            border-left: 110px solid #00B894;
            border-bottom: 75px solid transparent;
            z-index: 3;
            position: relative;
        }
        .codepen3-envelope_body_right {
            float: right;
            width: 0;
            height: 0;
            border-top: 75px solid transparent;
            border-right: 110px solid #00B894;
            border-bottom: 75px solid transparent;
            transform: translateY(-100%);
            z-index: 3;
            position: relative;
        }
        .codepen3-paper {
            background: #fff;
            width: 260px;
            height: 100px;
            position: absolute;
            left: 50%;
            margin-left: -135px;
            margin-top: -60px;
            text-align: center;
            padding: 5px;
            line-height: 4em;
            font-size: 1.5em;
            z-index: 3;
            transition: .2s;
        }
        .codepen3-envelope_top_close {
            transform: translateY(-100%) rotateX(180deg);
            border-bottom: 100px solid #00cec9;
            z-index: 4;
        }
        .codepen3-paper_close {
            margin-top: 0;
            z-index: 2;
        }

        /* NOUVEAUX STYLES POUR LA MINIATURE DU DESIGN 3 */
        .codepen3-preview-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #00B894;
            transform: scale(0.6);
            transform-origin: center;
        }
        .codepen3-preview-envelope {
            width: 300px;
            height: 150px;
            background: #2D3436;
            position: relative;
            cursor: pointer;
        }
        .codepen3-preview-envelope_top {
            border-bottom: 100px solid #2D3436;
            border-left: 110px solid transparent;
            border-right: 110px solid transparent;
            height: 0;
            width: 80px;
            position: absolute;
            transform: translateY(-100%);
            transform-origin: bottom;
            z-index: 3;
        }
        .codepen3-preview-envelope_body {
            position: relative;
        }
        .codepen3-preview-envelope_body_front {
            width: 300px;
            height: 75px;
            background: #00cec9;
            position: absolute;
            z-index: 2;
            transform: translateY(100%);
        }
        .codepen3-preview-envelope_body_left {
            width: 0;
            height: 0;
            border-top: 75px solid transparent;
            border-left: 110px solid #00B894;
            border-bottom: 75px solid transparent;
            z-index: 3;
            position: relative;
        }
        .codepen3-preview-envelope_body_right {
            float: right;
            width: 0;
            height: 0;
            border-top: 75px solid transparent;
            border-right: 110px solid #00B894;
            border-bottom: 75px solid transparent;
            transform: translateY(-100%);
            z-index: 3;
            position: relative;
        }
        .codepen3-preview-paper {
            background: #fff;
            width: 260px;
            height: 100px;
            position: absolute;
            left: 50%;
            margin-left: -135px;
            margin-top: -60px;
            text-align: center;
            padding: 5px;
            line-height: 4em;
            font-size: 1.5em;
            z-index: 3;
        }
        .codepen3-preview-envelope_top_close {
            transform: translateY(-100%) rotateX(180deg);
            border-bottom: 100px solid #00cec9;
            z-index: 4;
        }
        .codepen3-preview-paper_close {
            margin-top: 0;
            z-index: 2;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans" x-data="{
    open: false,
    activeIndex: 0,
    showAnimation: false,
    designs: [
        {
            id: 1,
            title: 'Dazzling Dress Invitation',
            description: 'Invitation élégante pour quinceañera avec robe scintillante.',
            image: 'https://placehold.co/1280x720/2C2C54/FFFFFF?text=Dazzling+Dress',
            colors: ['#2C2C54', '#EA2027', '#FDA7DC', '#EAB543', '#1B9CFC']
        },
        {
            id: 2,
            title: 'Golden Wedding',
            description: 'Modèle élégant doré pour mariages classieux.',
            image: 'https://placehold.co/1280x720/FFC312/FFFFFF?text=Golden+Wedding',
            colors: ['#FFC312', '#C4E538', '#12CBC4', '#FDA7DC', '#ED4C67']
        },
        {
            id: 3,
            title: 'Design Tropical',
            description: 'Modèle élégant avec des feuilles tropicales.',
            image: 'https://placehold.co/1280x720/00B894/FFFFFF?text=Design+Tropical',
            colors: ['#00B894', '#00cec9', '#ffeaa7', '#a29bfe', '#fd79a8']
        },
        {
            id: 4,
            title: 'Fête d\'été',
            description: 'Invitation vibrante pour une fête d\'été.',
            image: 'https://placehold.co/1280x720/EE5A24/FFFFFF?text=Fête+d%27été',
            colors: ['#FDCB6E', '#EE5A24', '#2C3A47', '#222F3E', '#F7F1E3']
        },
        {
            id: 5,
            title: 'Design Classique',
            description: 'Invitation sobre et élégante pour tout événement.',
            image: 'https://placehold.co/1280x720/B2BEC3/FFFFFF?text=Design+Classique',
            colors: ['#B2BEC3', '#636E72', '#2D3436', '#FFEAA7', '#FDCB6E']
        },
        {
            id: 6,
            title: 'Jungle Urbaine',
            description: 'Thème moderne avec motifs de plantes et d\'animaux.',
            image: 'https://placehold.co/1280x720/60A3BC/FFFFFF?text=Jungle+Urbaine',
            colors: ['#00B894', '#60A3BC', '#A29BFE', '#F7D794', '#EAB543']
        }
    ],
    get current() {
        return this.designs[this.activeIndex];
    },
    next() {
        if (this.activeIndex < this.designs.length - 1) this.activeIndex++;
    },
    prev() {
        if (this.activeIndex > 0) this.activeIndex--;
    },
    openModal(index) {
        this.activeIndex = index;
        this.open = true;
        this.showAnimation = false; // Réinitialiser l'état de l'animation lors de l'ouverture
    }
}" >

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-800 text-white p-6 flex flex-col">
            <div class="text-2xl font-bold mb-8">Everblue</div>
            <nav class="space-y-4 flex-grow">
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition">
                    <i class="fa fa-home"></i> Mes invitations
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition">
                    <i class="fa fa-plus"></i> Parcourir les designs
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition relative">
                    <i class="fa fa-envelope"></i> Mes messages
                    <span class="absolute right-3 top-2 bg-red-600 text-white text-xs font-semibold rounded-full px-2">4</span>
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition">
                    <i class="fa fa-question-circle"></i> Centre d’aide
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition">
                    <i class="fa fa-inbox"></i> Invitations reçues
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition">
                    <i class="fa fa-mobile-alt"></i> Site mobile
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-blue-700 rounded px-3 py-2 transition mt-auto">
                    <i class="fa fa-sign-out-alt"></i> Déconnexion
                </a>
            </nav>

            <!-- Sélecteur de langue -->
            <div class="mt-6">
                <label for="lang" class="block text-sm mb-1">Langue :</label>
                <select id="lang" class="w-full text-black rounded p-2">
                    <option value="fr" selected>Français</option>
                    <option value="en">English</option>
                </select>
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6 flex flex-col">
            <!-- Barre de recherche -->
            <div class="mb-6">
                <input
                    type="search"
                    placeholder="Rechercher un design, événement, thème..."
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                />
            </div>

            <!-- Header -->
            <header class="mb-4">
                <h1 class="text-3xl font-bold text-gray-800">Nos Designs</h1>
                <p class="text-gray-600 mt-1">Explorez les modèles disponibles pour vos événements : mariages, anniversaires, baptêmes, etc.</p>
            </header>

            <!-- Liste des cartes -->
            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 flex-grow overflow-y-auto hide-scrollbar">
                <template x-for="(design, index) in designs" :key="design.id">
                    <article @click="openModal(index)" class="relative rounded-lg shadow-lg overflow-hidden cursor-pointer group bg-white">
                        <!-- Conteneur pour l'aperçu -->
                        <div class="w-full h-60 flex items-center justify-center">
                            <!-- Aperçu pour le Design 1 (Dazzling Dress Invitation) -->
                            <template x-if="index === 0">
                                <div class="codepen1-preview-container">
                                    <div class="codepen1-preview-envelope">
                                        <div class="codepen1-preview-back"></div>
                                        <div class="codepen1-preview-letter">
                                            <div class="codepen1-preview-text">Remember To Change The World By Being Yourself!</div>
                                        </div>
                                        <div class="codepen1-preview-front"></div>
                                        <div class="codepen1-preview-top"></div>
                                        <div class="codepen1-preview-shadow"></div>
                                    </div>
                                </div>
                            </template>
                            <!-- Aperçu pour le Design 2 (Golden Wedding) -->
                            <template x-if="index === 1">
                                <div class="codepen2-preview-container">
                                    <div class="codepen2-preview-content">
                                        <div class="codepen2-preview-envelope"></div>
                                        <div class="codepen2-preview-letter">
                                            <div class="codepen2-preview-body">
                                                <div class="codepen2-preview-message">Fin.</div>
                                            </div>
                                        </div>
                                        <div class="codepen2-preview-shadow"></div>
                                    </div>
                                </div>
                            </template>
                            <!-- Aperçu pour le Design 3 (Design Tropical) -->
                            <template x-if="index === 2">
                                <div class="codepen3-preview-container">
                                    <div class="codepen3-preview-envelope">
                                        <div class="codepen3-preview-envelope_top"></div>
                                        <div class="codepen3-preview-envelope_body">
                                            <div class="codepen3-preview-paper">
                                                <span>Joyeux anniversaire !</span>
                                            </div>
                                            <div class="codepen3-preview-envelope_body_front"></div>
                                            <div class="codepen3-preview-envelope_body_left"></div>
                                            <div class="codepen3-preview-envelope_body_right"></div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <!-- Image statique pour les autres designs -->
                            <template x-if="index > 2">
                                <img
                                    :src="design.image"
                                    :alt="'Design ' + design.id"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    onerror="this.src='https://placehold.co/1280x720/cccccc/333333?text=Image+non+trouvée'"
                                />
                            </template>
                        </div>
                        
                        <!-- Icône enveloppe -->
                        <div class="absolute top-3 right-3 bg-white/80 backdrop-blur-sm p-2 rounded-full shadow">
                            <i class="fa fa-envelope text-blue-800"></i>
                        </div>

                        <!-- Overlay texte -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900/90 to-transparent p-4 text-white">
                            <h3 class="text-lg font-semibold" x-text="design.title"></h3>
                            <p class="text-sm opacity-90">Support verso</p>
                        </div>
                    </article>
                </template>
            </section>
        </main>
    </div>

    <!-- MODALE -->
    <div x-show="open"
         class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center p-4"
         x-transition>
        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl relative p-6" @click.outside="open = false">

            <!-- Close -->
            <button @click="open = false" class="absolute top-3 right-4 text-2xl text-gray-600 hover:text-black">&times;</button>

            <!-- Contenu de la modale -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Vue des designs réguliers -->
                <template x-if="activeIndex !== 0 && activeIndex !== 1 && activeIndex !== 2">
                    <div class="flex-1">
                        <img :src="current.image" alt="" class="rounded-lg shadow-md w-full max-h-[400px] object-cover">
                    </div>
                </template>

                <!-- Vue du design 1 avec l'animation CodePen -->
                <template x-if="activeIndex === 0">
                    <div class="flex-1">
                        <div x-show="!showAnimation" class="relative">
                            <img :src="current.image" alt="" class="rounded-lg shadow-md w-full max-h-[400px] object-cover">
                        </div>
                        <div x-show="showAnimation" class="codepen1-container">
                             <div class="codepen1-envelope" @click="initCardAnimation1()">
                                <div class="codepen1-back"></div>
                                <div class="codepen1-letter">
                                    <div class="codepen1-text">Remember To Change The World By Being Yourself!</div>
                                </div>
                                <div class="codepen1-front"></div>
                                <div class="codepen1-top"></div>
                                <div class="codepen1-shadow"></div>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- Vue du design 2 avec la nouvelle animation CodePen -->
                <template x-if="activeIndex === 1">
                    <div class="flex-1">
                        <div x-show="!showAnimation" class="relative">
                             <img :src="current.image" alt="" class="rounded-lg shadow-md w-full max-h-[400px] object-cover">
                        </div>
                        <div x-show="showAnimation" class="codepen2-container">
                            <div class="codepen2-content">
                                <div class="codepen2-envelope" @click="initCardAnimation2()"></div>
                                <div class="codepen2-letter">
                                    <div class="body">
                                        <span class="close" @click="closeCard2($event)">x</span>
                                        <div class="message">fin.</div>
                                    </div>
                                </div>
                                <div class="codepen2-shadow"></div>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- Vue du design 3 avec la nouvelle animation CodePen -->
                <template x-if="activeIndex === 2">
                    <div class="flex-1">
                        <div x-show="!showAnimation" class="relative">
                            <img :src="current.image" alt="" class="rounded-lg shadow-md w-full max-h-[400px] object-cover">
                        </div>
                        <div x-show="showAnimation" class="codepen3-container">
                            <div class="codepen3-envelope" @click="initCardAnimation3()">
                                <div class="codepen3-envelope_top"></div>
                                <div class="codepen3-envelope_body">
                                    <div class="codepen3-paper">
                                        <span>Happy Birthday!</span>
                                    </div>
                                    <div class="codepen3-envelope_body_front"></div>
                                    <div class="codepen3-envelope_body_left"></div>
                                    <div class="codepen3-envelope_body_right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <div class="flex-1 space-y-4">
                    <h2 class="text-2xl font-bold text-gray-800" x-text="current.title"></h2>
                    <div class="flex gap-2">
                        <template x-for="color in current.colors" :key="color">
                            <div :style="`background-color: ${color}`" class="w-5 h-5 rounded-full border border-gray-200"></div>
                        </template>
                    </div>
                    <button class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 transition">Commencer la personnalisation</button>
                    <!-- Bouton pour lancer l'animation -->
                    <button @click="showAnimation = true; activeIndex === 0 ? initCardAnimation1() : (activeIndex === 1 ? initCardAnimation2() : initCardAnimation3())" x-show="!showAnimation" class="flex items-center text-blue-600 hover:underline gap-1">
                        <i class="fa fa-play-circle"></i> Prévisualiser l'animation
                    </button>
                    <!-- Bouton pour revenir à l'image -->
                    <button @click="showAnimation = false; activeIndex === 0 ? closeCard1() : (activeIndex === 1 ? closeCard2() : closeCard3())" x-show="showAnimation" class="flex items-center text-red-600 hover:underline gap-1">
                        <i class="fa fa-stop-circle"></i> Arrêter l'animation
                    </button>
                    <p class="text-gray-600 text-sm" x-text="current.description"></p>
                    <p class="text-xs text-gray-400 mt-2">Support verso</p>
                </div>
            </div>

            <!-- Navigation -->
            <div class="absolute top-1/2 -translate-y-1/2 left-2">
                <button @click="prev" class="text-3xl text-white hover:text-blue-300">&larr;</button>
            </div>
            <div class="absolute top-1/2 -translate-y-1/2 right-2">
                <button @click="next" class="text-3xl text-white hover:text-blue-300">&rarr;</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Animation pour le design 1 (Dazzling Dress Invitation)
    let isCard1Open = false;
    let envelopeHoverListener;

    function initCardAnimation1() {
        if (!isCard1Open) {
            // Pas d'animation pour l'ouverture
        }
        
        // Supprime l'ancien listener s'il existe
        if (envelopeHoverListener) {
            $('.codepen1-envelope').off('mouseenter mouseleave', envelopeHoverListener);
        }
        
        // Ajoute un nouveau listener d'événement pour le survol
        envelopeHoverListener = function(event) {
            if (event.type === 'mouseenter') {
                $(this).find('.codepen1-top').css('transform', 'rotateX(160deg)');
                $(this).find('.codepen1-letter').css('transform', 'translateY(-100px)').css('z-index', 2);
            } else if (event.type === 'mouseleave') {
                $(this).find('.codepen1-top').css('transform', 'rotateX(0deg)');
                $(this).find('.codepen1-letter').css('transform', 'translateY(0px)').css('z-index', 1);
            }
        };

        $('.codepen1-envelope').on('mouseenter mouseleave', envelopeHoverListener);

        isCard1Open = true;
    }

    function closeCard1() {
        if (isCard1Open) {
            // Réinitialise les styles
            $('.codepen1-top').css('transform', 'rotateX(0deg)');
            $('.codepen1-letter').css('transform', 'translateY(0px)').css('z-index', 1);

            // Supprime l'écouteur d'événement
            if (envelopeHoverListener) {
                $('.codepen1-envelope').off('mouseenter mouseleave', envelopeHoverListener);
            }

            isCard1Open = false;
        }
    }

    // Animation pour le design 2 (Golden Wedding)
    let tl2, tlShadow;
    const flapRule = CSSRulePlugin.getRule(".codepen2-envelope:before");

    function initCardAnimation2() {
        if (tl2 && tlShadow) {
            tl2.restart();
            tlShadow.restart();
            return;
        }

        tl2 = gsap.timeline({ paused: true });
        tl2.to(flapRule, {
            duration: 0.5,
            cssRule: {
                rotateX: 180
            }
        })
        .set(flapRule, {
            cssRule: {
                zIndex: 10
            }
        })
        .to('.codepen2-letter', {
            translateY: -200,
            duration: 0.9,
            ease: "back.inOut(1.5)"
        })
        .set('.codepen2-letter', {
            zIndex: 40
        })
        .to('.codepen2-letter', {
            duration: .7,
            ease: "back.out(.4)",
            translateY: -5,
            translateZ: 250
        });

        tlShadow = gsap.timeline({ paused: true });
        tlShadow.to('.codepen2-shadow', {
            delay: 1.4,
            width: 450,
            boxShadow: "-75px 150px 10px 5px #eeeef3",
            ease: "back.out(.2)",
            duration: .7
        });

        tl2.play();
        tlShadow.play();
    }

    function closeCard2(e) {
        if (e) e.stopPropagation();
        if (tl2 && tlShadow) {
            tl2.reverse();
            tlShadow.reverse();
        }
    }

    // Animation pour le design 3 (Design Tropical)
    let isCard3Open = false;
    function initCardAnimation3() {
        if (!isCard3Open) {
            setTimeout(function() {
                $('.codepen3-envelope_top').toggleClass('codepen3-envelope_top_close');
            }, 150);
            $('.codepen3-paper').toggleClass('codepen3-paper_close');
            isCard3Open = true;
        } else {
            setTimeout(function() {
                $('.codepen3-paper').toggleClass('codepen3-paper_close');
            }, 150);
            $('.codepen3-envelope_top').toggleClass('codepen3-envelope_top_close');
            isCard3Open = false;
        }
    }

    function closeCard3() {
        if (isCard3Open) {
             setTimeout(function() {
                $('.codepen3-paper').toggleClass('codepen3-paper_close');
            }, 150);
            $('.codepen3-envelope_top').toggleClass('codepen3-envelope_top_close');
            isCard3Open = false;
        }
    }
</script>

</body>
</html>
