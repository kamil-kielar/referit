<template>
    <div class="panel panel-default">
        <div class="" v-for="image in images" v-if="image.id == 1">
            <div class="panel-heading">
                <h3>Testing target finding</h3>
                <h3><span class="label label-default">{{ click_x }} , {{ click_y }}</span></h3>
                <div class="alert alert-success" v-if="bingo" style="float: right">
                <strong>Well done!</strong> That's correct!
            </div>
            </div>
            <div class="panel-body">
                <img class="" :src="image.img_src" alt="">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                images: [],
                click_x: 0,
                click_y: 0,
                bingo: false
            }
        },

        mounted() {
            this.fetchImages()
        },

        methods: {
            fetchImages() {
                this.$http.get('images').then(response => {
                    this.images = response.data.images
                })
            },
        }
    }
</script>
