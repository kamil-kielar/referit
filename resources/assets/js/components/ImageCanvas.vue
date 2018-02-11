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
        props: ['images'],

        data() {
            return {
                images: [],
                click_x: 0,
                click_y: 0,
                bingo: false
            }
        },

        mounted() {

        },

        methods: {
            findXY: function(e) {
                var rect = e.target.getBoundingClientRect()
                this.click_x = e.pageX - rect.left
                this.click_x = (Math.round(this.click_x*100)/100).toFixed(2)
                this.click_y = e.pageY - rect.top
                this.click_y = (Math.round(this.click_y*100)/100).toFixed(2)
            }
        }
    }

</script>
