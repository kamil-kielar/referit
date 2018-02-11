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

                <hr>

                <p>
                    {{ rendered.target_ref_exp }}
                </p>

                <div v-if="clicked">

                    <button class="btn btn-primary" @click="renderGame() + saveData()">Next Image</button>

                </div>

            </div>
        </div>

        <div v-else>

            <h1> THE END</h1>

        </div>
    </div>
</template>

<script>
    export default {

        props: ['images', 'user'],

        data() {
            return {
                games: null,
                click_x: 0,
                click_y: 0,
                clicked: false,
                bingo: false,
                rendered: null,
                gameData: {
                    img_id: null,
                    ref_sender: null,
                    ref_checker: null,
                    user_click_x: null,
                    user_click_y: null,
                    user_ref_exp: null,
                }
            }
        },

        mounted: function () {

            this.importImages();

        },

        methods: {

            importImages() {

                this.games = this.images;

                this.renderGame();

            },

            renderGame() {

                for(let i = 0; i <= this.games.length; i++){

                    this.rendered = this.games[i];

                    this.games.shift();

                    return;

                }
            },

            saveData() {

                this.clicked = false;

                const data = new FormData();

                data.append('img_id', this.rendered.id);
                data.append('ref_sender', 'powinno byc puste w zaleznosci od typu gry');
                data.append('ref_checker', this.gameData.ref_checker);
                data.append('ref_send_time', 'zmien');
                data.append('ref_check_time', 'zmien');
                data.append('user_ref_exp', 'zmien');
                data.append('user_click_x', this.gameData.user_click_x);
                data.append('user_click_y', this.gameData.user_click_y);

                axios.post('/saveGame', data)
                    .then( response => {

                        console.log(response);

                    }, error => {
                        console.log(error);
                    });

            },

            findXY: function (e) {

                if(this.clicked){
                    return false;
                }

                this.clicked = true;

                var rect = e.target.getBoundingClientRect()
                this.click_x = e.pageX - rect.left
                this.click_x = (Math.round(this.click_x * 100) / 100).toFixed(2)
                this.click_y = e.pageY - rect.top
                this.click_y = (Math.round(this.click_y * 100) / 100).toFixed(2)

                this.gameData.img_id = this.rendered.id;
                this.gameData.user_click_x = this.click_x;
                this.gameData.user_click_y = this.click_y;
                this.gameData.ref_checker = this.user.id;

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