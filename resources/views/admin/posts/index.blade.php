@extends('layouts.app')

@section('content')
     <div class="container">
         <h1>I nostri post</h1>
         <table class="post-table">
             <thead>
                 <th>Titolo</th>
                 <th>Autore</th>
                 <th>Descrizione</th>
             </thead>
             <tbody>
                 @forelse ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->title}}</td>
                        <td></td>
                    </tr>   
                 @empty
                    <tr>
                        </tr> 
                 @endforelse
             </tbody>
         </table>

     </div>
@endsection