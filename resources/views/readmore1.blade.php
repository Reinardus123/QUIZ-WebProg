{{-- @dd($post); --}}

<style>

    img{
        display: flex;
        align-self: center;
        border-radius: 10px;
        width: 100;
    }

    .container1{
        display: flex;
        flex-direction: column;
    }

    .jumbotron{
        
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: #013660;
        width: 80vw;
        height: 70vh;
        align-self: center;
        color: #ffffff;
    }

</style>

@extends('components.layout')

@section('container1')
<h1 class="m-5" style="font-size: large">{{$post['judul']}}</h1>
<div class="p-4 p-md-5 mb-4 rounded jumbotron">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">Apa itu Human Computer Interaction ? </h1>
    </div>
    <img src="{{ url($post['image']) }}" alt="">
  </div> 

<h4 class="m-5" style="font-size: medium">{{$post['penulis']}}</h4> 
<h5>{{$post['body']}}</h5>

@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>