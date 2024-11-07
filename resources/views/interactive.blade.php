
<style>

    .container1{
        background-color: rgb(220, 216, 216);
        /* height: 100vw; */
    }

    .isi-gambar{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        height: 300px;
    }

    .text{
        display: flex;
        flex-direction: column;
        margin-top: 50px;
    }

    .text h3{
        font-weight: bold;
    }

  

</style>

@extends('components.layout')

@section('container1')
<h2 style="font-weight: bold" class="p-5">Human Computer Interaction</h2>
@foreach ($posts as $post )
<div class="isi-gambar">
<img class="m-4" src={{$post["image"]}} alt="image1" style="border-radius: 10px">
<div class="text">
    <h3>{{$post["judul"]}}</h3>
    <h4>{{$post["penulis"]}}</h4>
    <h5 class="mb-5">{{$post["body"]}}</h5>   
    <div class="button2">
              <a href="/interactive/{{$post['slug']}}"{{$post['button']}}>
                <button><h1>read more..</h1></button>
              </a>
            </div>
    </div>
</div>

@endforeach

@endsection



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>