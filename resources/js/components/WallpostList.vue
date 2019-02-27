<template>
<div>
     <div class="wallpost" v-for="wallpost in wallposts">
         <p>
         <strong>{{wallpost.title}}</strong>
            <br>
            {{wallpost.body}}
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
