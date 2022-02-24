<template>
    <main class="main">
        <div class="container p-3">
            Dashobard
            <div v-if="!isLoggedIn"> 
                lol
            </div>
            <div v-else> 
            <a href="#" class="nav-link" @click.prevent="logout">
                            Wyloguj
                        </a>
            </div>
        </div>
    </main>
</template>

<script>
import { logout, isLoggedIn } from "../../utils/jwt";
export default {
    data() {
        return {
           
        };
    },
    mounted(){
        // this.test();
    },
    computed: {
        loggedUser() {
            return this.$store.state.loggedUser;
        },
        isLoggedIn() {
            return isLoggedIn();
        },
    },
    methods:{
        logout() {
            logout();
        },
        // test: function()
        // {
        //    if(window.localStorage.getItem("token")==null)
        //    {
        //        window.location.href = "/login"
        //    }
        // }
    }
};
</script>

<style lang="scss" scoped></style>