<template>
    <form id="wrapper" method="post">
        <div class="container"></p>
            <div class="item">User</div>
            <div class="item">Date & Time</div>
            <div class="item">Location</div>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ...
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>         

        <div class="container">
            <a class="item">label1</a>
            <a class="item">label2</a>
            <a class="item">label3</a>
            <a class="item">label4</a>
            <a class="item">label5</a>
        </div>

        <div><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Post text area"> </textarea></div><br>
        <div><textarea class="form-control-file" id="exampleFormControlTextarea1" rows="3" placeholder="Post attachment area"> </textarea></div>
        <div>No. of views   <input class="float-right" type="submit" value="Submit"></div><br>
    </form>
</template>

<script>
    export default {
        ready: function () {

        },
        mounted() {
            console.log('Component mounted3.')
        }
    }
</script>
