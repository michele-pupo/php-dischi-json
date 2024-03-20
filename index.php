<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- personal style  -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-dark text-white">

    <div id="app">
        <div id="navbar">
            <div id="my_container_navbar">
                <div class="py-3 d-flex" id="logo">
                    <img src="img/logo.svg" alt="">
                </div>
            </div>
        </div>

        <div id="my_container_album">
            <div id="my_album_section">
                <ul id="my_list_album" class="d-flex flex-wrap p-0">
                    <li id="my_album" v-for= "(album, index) in albums" :key="index" @click="showAlbumDetails(album)">
                        <img :src="album.poster" alt="album.author">
                    </li>
                </ul>
            </div>
        </div>

        <!-- sezione per mostrare i dettagli dell'album selezionato -->
        <div v-if="selectedAlbum" id="album-details">
            <button @click="closeAlbumDetails" id="close-button" class="fw-bold display-3">X</button>
            <h2>{{ selectedAlbum.title }}</h2>
            <p>Author: {{ selectedAlbum.author }}</p>
            <p>Year: {{ selectedAlbum.year }}</p>
            <p>Genre: {{ selectedAlbum.genre }}</p>
            <img :src="selectedAlbum.poster" alt="selectedAlbum.author">
        </div>
        
    </div>
    

    <script src="./js/main.js"></script>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>