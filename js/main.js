
var app = new Vue(
    {
        el: '#root',
        data: {
            albums: []
        },
        methods: {
            getAlbums() {
                axios.get('http://localhost:8888/php-ajax-dischi/json.php')
                    .then(result => {
                        this.albums = result.data.results.data;
                        console.log(this.albums)
                    });
            }
        },
        created: function(){
            this.getAlbums();
        }

    }
)