<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <v-app app>
            <v-container>
                <v-btn color="primary">
                    Primary
                </v-btn>
                <v-btn color="secondary">
                    Secondary
                </v-btn>
                <v-btn color="error">
                    Error
                </v-btn>
            </v-container>


            <v-card
                color="grey lighten-4"
                flat
                height="200px"
                tile
            >
                <v-toolbar dense>
                <v-app-bar-nav-icon></v-app-bar-nav-icon>

                <v-toolbar-title>Title</v-toolbar-title>

                <v-spacer></v-spacer>

                <v-btn icon>
                    <v-icon>mdi-magnify</v-icon>
                </v-btn>

                <v-btn icon>
                    <v-icon>mdi-heart</v-icon>
                </v-btn>

                <v-btn icon>
                    <v-icon>mdi-dots-vertical</v-icon>
                </v-btn>
                </v-toolbar>
            </v-card>


        </v-app>

    </div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
