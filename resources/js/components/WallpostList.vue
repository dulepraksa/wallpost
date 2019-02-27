<template>
<div>
     <div class="wallpost" v-for="wallpost in wallposts">
         <p>
         <strong class=wallpost__title>{{wallpost.title}}</strong><button>...</button>
            <br>
            <p class=wallpost__body>{{wallpost.body}}</p>
        </p>
    </div>
</div>
</template>

<script>
    export default {
        data: function () {
            return {
                wallposts: []
            }
        },
        mounted: function () {           
            this.getAllPosts()
        },
        methods: {
            getAllPosts : function () {                
                axios.get('/api/wallpost')
                    .then(response => {
                        console.log(response)
                        this.wallposts = response.data
                    })
            }
        }
    }
</script>
