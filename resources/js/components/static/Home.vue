<template>
    <main class="main">
        <div class="container p-3">
            Dashobard
        </div>
    </main>
</template>

<script>
import { isLoggedIn } from "../../utils/jwt";
export default {
    data() {
        return {
           
        };
    },
    mounted(){
        // this.test();
    },
    computed: {
        isLoggedIn() {
            return isLoggedIn();
        },
    },
    methods:{
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