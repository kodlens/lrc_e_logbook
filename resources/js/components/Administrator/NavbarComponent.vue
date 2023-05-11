<template>
    <div>
        <div class="mynav">

            <div class="mynav-brand">LRC E-LOGBOOK</div>

            <div class="burger-button" @click="open = true">
                <div class="burger-div"></div>
                <div class="burger-div"></div>
                <div class="burger-div"></div>
            </div>

        </div>

        <b-sidebar
            type="is-light"
            :fullheight="fullheight"
            :fullwidth="fullwidth"
            :overlay="overlay"
            :right="right"
            v-model="open">
            <div class="p-4">
                <h3 class="title is-4">ADMINISTRATOR</h3>
                <b-menu>

                    <b-menu-list label="Menu">
                        
                    </b-menu-list>

                    <b-menu-list>
                        <b-menu-item label="QR Scanner" icon="qrcode-scan" tag="a" href="/dashboard"></b-menu-item>
                    </b-menu-list>

                    <b-menu-list>
                        <b-menu-item label="Users" icon="account" tag="a" href="/users"></b-menu-item>
                    </b-menu-list>

                    <b-menu-list label="Actions">
                        <b-menu-item @click="logout" label="Logout"></b-menu-item>
                    </b-menu-list>

                </b-menu>
            </div>
        </b-sidebar>

    </div>


</template>

<script>
export default {
    data(){
        return{
            open: false,
            overlay: true,
            fullheight: true,
            fullwidth: false,
            right: true
        }
    },
    methods: {
        logout(){
            axios.post('/logout').then(()=>{
                window.location = '/';
            })
        }
    }
}
</script>

<style scoped>
    .logo{
        padding: 0 30px 0 30px;
        height: 90px;
    }

    .burger-div{
        width: 20px;
        height: 2px;
        background-color: #100069;
        margin: 0 0 2.5px 0;
        margin-left: auto;
        border-radius: 10px;
    }

    .burger-button{
        display: flex;
        flex-direction: column;
        margin-left: auto;
        padding: 1px;
    }


    .mynav{
        padding: 25px;
        border-bottom: 2px solid #100069;
        display: flex;
    }

    .mynav-brand{
        font-weight: bold;
        font-size: 1.2em;
    }

    @media print {
        .mynav{
            display: none;
            border: 1px solid red;
        }
    }


  /* .hero{
        background-image: url("/img/bg-hero.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    } */

</style>
