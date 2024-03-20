const { createApp } = Vue;

  createApp({
    data() {
      return {
        //array dove pushare i dati presi dal file .jason
        albums: [],    
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
    },

    // richiamo il metodo nella fase di creazione
    created() {
        this.getAlbums();
    }
}).mount('#app');