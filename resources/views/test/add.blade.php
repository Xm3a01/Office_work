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
   <input type="text" name="ar_name" id="">
   <select name="country"    v-model = "select"  @change="getsub()" aria-placeholder="HEllo">
         <option value="" disabled selected>Select your option</option>
       @foreach ($countries as $country)   
          <option  value="{{$country->id}}">{{$country->name}}</option>
       @endforeach
   </select>
   {{-- <input name="country"  list="country"   v-model = "select"  @change="getsub()" >
   <datalist id="country">
        <option value="" disabled selected>Select your option</option>
        @foreach ($countries as $country)   
          <option  value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
   </datalist> --}}
   <button type="submit">Ok</button>
</form>
   <select name="city" id="">
             <option value="" disabled selected>Select City ...</option>
            <option v-for ="su in sub" :value="su.name">@{{su.name}}</option>
   </select>
   @{{sl}}
</div>


<script src="{{asset('js/app.js')}}"></script>
<script>
const app = new Vue({
el: '#app',

data: {

    serach: '',
    select:'',
    sub: [],
    sl: '',
},
methods: {
    mounted() {
        
    },
    getsub() {
        if(this.select != '') {
        axios.get(`datas/${this.select}`)
                .then((res)=>{
                     this.sub = res.data,
                     console.log(this.sub)
                 })
                 .catch((err)=>
                 {
                     console.log(err)
                 })
             }
            }
}

})
</script>



</body>
</html>