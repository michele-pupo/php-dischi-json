const { createApp } = Vue;

  createApp({
    data() {
      return {
        //array dove pushare i dati presi dal file .jason
        albums: [],
        selectedAlbum: null,    
      }
    },
    
    // metodo per la chiamata api
    methods: {
        getAlbums() {
          axios
          .get('server.php')
          .then(response => {
            this.albums = response.data;
          });
        },

        // imposta l'album selezionato quando viene cliccato
        showAlbumDetails(album) {
          this.selectedAlbum = album;
        },

        // imposta selectedAlbum su null per chiudere i dettagli dell'album
        closeAlbumDetails() {
          this.selectedAlbum = null; 
        }
    },

    // richiamo il metodo nella fase di creazione
    created() {
        this.getAlbums();
    }
}).mount('#app');