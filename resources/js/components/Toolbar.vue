<template>
    <v-card
    color="grey lighten-4"
    flat
    tile
    >
        <v-toolbar dense>
            <v-toolbar-title>Live forum</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">
                <!--router-link to="/"-->
                    <v-btn text>Forum</v-btn>
                <!--router-link-->
                <router-link to="/question">
                    <v-btn text>Ask Question</v-btn>
                </router-link>
                <router-link to="/categories">
                    <v-btn text>Category</v-btn>
                </router-link>
                <router-link to="/login">
                    <v-btn text>Login</v-btn>
                </router-link>
            </v-toolbar-items>
        </v-toolbar>
    </v-card>
</template>


<script>
    export default {

    }
</script>

<style>

</style>
