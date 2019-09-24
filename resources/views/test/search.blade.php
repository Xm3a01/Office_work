<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <input type="text" name="" id="" v-model="serach">
        <input type="checkbox" value="cl" id="" v-model="select"> CL
        <input type="checkbox" value="bl" id="" v-model="select"> BL
        <input type="checkbox" value="dl" id="" v-model="select"> DL
        @{{ serach }}
        @{{ select }}
    </div>
   <script src="{{asset('js/app.js')}}"></script>
    <script>
    const app = new Vue({
    el: '#app',

    data: {

        serach: '',
        select: ['cl']
    }

    })
    </script>

</body>
</html>