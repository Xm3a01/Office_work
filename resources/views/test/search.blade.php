<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        {{-- <input type="text" name="" id="" v-model = "search">
        {{-- <div v-for ="res in result"></div> --}}
        {{-- <ul v-if ="search">
            <li v-for ="res in resu()">
                  @{{ res.ar_name }}
            </li>
        </ul> --}} 
     {{-- <input list="browsers" v-model = "search">
        <datalist id="browsers">
            @foreach ($all as $al)          
            <option value="{{$al->ar_name}}">
            @endforeach
      </datalist>  --}}

      <div class="container vue">
            <div v-if="index < a.length" v-for="index in list"> 
              <div>@{{a[--index].name}}</div>
              <i><div>@{{a[index].description}}</div></i>
              <hr />
            </div>
            <button @click="list += 1">show more reviews</button>
          </div>
    </div>
   <script src="{{asset('js/app.js')}}"></script>
    <script>
    const app = new Vue({
    el: '#app',

    data: {

        // search: '',
        // result: [],
        // list: 0,
        a: [{name: 'Omer' , logo: 'logo', des: 'hello'},{name: 'Ali' , logo: 'logo', des: 'hello'}, {name: 'Hasn' , logo: 'logo', des: 'hello'}],
        // a: [{name: 'Derek', description: 'Some comment'}, {name: 'Joe', description: 'Some comment'},{name: 'Mike', description: 'Some comment'}, {name: 'Ron', description: 'Some comment'},{name: 'Dii', description: 'Some comment'}, {name: 'Lonnie', description: 'Some comment'},{name: 'Paul', description: 'Some comment'}, {name: 'Mike', description: 'Some comment'},{name: 'Jody', description: 'Some comment'}, {name: 'Ryn', description: 'Some comment'},{name: 'Jord', description: 'Some comment'}, {name: 'Milly', description: 'Some comment'},{name: 'Judy', description: 'Some comment'}, {name: 'Vanilly', description: 'Some comment'},{name: 'Nolan', description: 'Some comment'}, {name: 'Pino', description: 'Some comment'},{name: 'Ryne', description: 'Some comment'}, {name: 'Scott', description: 'Some comment'},{name: 'Son', description: 'Some comment'}, {name: 'Bann', description: 'Some comment'},],
        list: 1
    },
    mounted(){
        //    this.fetchData()
        },
    methods: {

        // resu(){
        //         return this.result.filter(res =>{ return res.ar_name.toLowerCase().includes(this.search.toLowerCase())});
        //      },
        // fetchData() {
        //     axios.get('/search')
        //         .then((res)=>{
        //              this.result = res.data,
        //              console.log(this.result)
        //          })
        //          .catch((err)=>
        //          {
        //              console.log(err)
        //          })
        //    }
    }

    })
    </script>

</body>
</html>