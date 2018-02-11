<template>
    <div class="panel panel-default">
        <div class="" v-if="rendered">
            <div class="panel-heading">
                <h3>Testing target finding</h3>
                <h3><span class="label label-default">{{ click_x }} , {{ click_y }}</span></h3>
                <div class="alert alert-success" v-if="bingo" style="float: right">
                <strong>Well done!</strong> That's correct!
            </div>
            </div>
            <div class="panel-body">
                <img class="" :src="rendered.img_src" alt="" @click="findXY">
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['images'],

        data() {
            return {
                click_x: 0,
                click_y: 0,
                bingo: false,
                rendered: null,
            }
        },

        mounted: function () {

            console.log(this.images[0]);

            // Render random image and delete once rendered
            this.rendered = this.images[0];

        },

        methods: {
            findXY: function (e) {

                var rect = e.target.getBoundingClientRect()
                this.click_x = e.pageX - rect.left
                this.click_x = (Math.round(this.click_x * 100) / 100).toFixed(2)
                this.click_y = e.pageY - rect.top
                this.click_y = (Math.round(this.click_y * 100) / 100).toFixed(2)

                if (this.click_x >= Number(this.rendered.target_x) && this.click_x <= (Number(this.rendered.target_x) + Number(this.rendered.target_w)) &&
                    this.click_y >= Number(this.rendered.target_y) && this.click_y <= (Number(this.rendered.target_y) + Number(this.rendered.target_h))) {

                    console.log('Bingo!')

                } else {

                    console.log('Failing you noob!')

                }
            }
        }
    }

</script>
