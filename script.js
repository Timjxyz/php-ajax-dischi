const app = new Vue(
    {
        el: '#app',
        data: {
            endpoint:'http://localhost/php-ajax-dischi/server.php',
            discs: [],
            selectedGenre:"",
           
        },
        methods:{
      
        },

        mounted() {
               
            // Make a request for a user with a given ID
            axios
            .get(this.endpoint)
            
            .then((response) => {
                this.discs = response.data.response;
                console.log(response)
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
)