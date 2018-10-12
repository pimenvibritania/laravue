@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
   <div class="container" id="jumbotron_index">
     <div class="text-center">
       <h1>LaraVue CRUD</h1>
       
       <p>Create CRUD with Laravel and Vue.js</p>
     </div>
    
     <router-view></router-view>
   </div>
 </div>
@endsection
