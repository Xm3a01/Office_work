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
        <input type="text" name="" id="" v-model = "search">
        {{-- <div v-for ="res in result"></div> --}}
        <ul v-if ="">
            <li v-for ="res in resu()">
                  @{{ res.name }}
            </li>
        </ul>
    </div>
   <script src="{{asset('js/app.js')}}"></script>
    <script>
    const app = new Vue({
    el: '#app',

    data: {

        search: '',
        result: []
    },
    mounted(){
           this.fetchData()
        },
    methods: {

        resu(){
                return this.result.filter(res =>{ return res.name.toLowerCase().includes(this.search.toLowerCase())});
             },
        fetchData() {
            axios.get('/result')
                .then((res)=>{
                     this.result = res.data,
                     console.log(this.result)
                 })
                 .catch((err)=>
                 {
                     console.log(err)
                 })
           }
    }

    })
    </script>

</body>
</html>