<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Devrantia</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div id="app">
            <b-switch v-model="switchState">@{{ switchState }}</b-switch>
            <hr>

            <b-checkbox v-model="checkboxState">@{{ checkboxState }}</b-checkbox>
            <hr>

            <button class="button is-primary" @click="$toast.open('This is a Toast')">
                Show Toast
            </button>
            <button class="button is-primary" @click="$snackbar.open('This is a Snackbar')">
                Show Snackbar
            </button>
            <hr>

            <b-field>
                <b-input maxlength="25" placeholder="Your name"></b-input>
            </b-field>
        </div>

        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
