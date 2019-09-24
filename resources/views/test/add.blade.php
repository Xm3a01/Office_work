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
<h1>City</h1>
<form action="{{route('two.store')}}" method="POST">
    @csrf
   <input type="text" name="name" id="">
   <select name="country" id="" v-model = "select">
       @foreach ($countries as $country)   
          <option value="{{$country->id}}">{{$country->name}}</option>
       @endforeach
   </select>
   <ul>
       <li v-for="su in sub">
          @{{ su }}
       </li>
   </ul>
</div>



<script src="{{asset('js/app.js')}}"></script>
<script>
const app = new Vue({
el: '#app',

data: {

    serach: '',
    select:'',
    sub: [],
},
methods: {
    mounted() {
        this.getsub();
    }
    getsub() {
        axios.get(`datas/${this.select}`).then((res)=>{
                     this.sub = res.data,
                     console.log(this.sub)
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