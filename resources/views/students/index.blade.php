@extends('layouts.main')

@section('main-content')

   <h2>I nostri ex studenti</h2>

   <div class="students">
      @foreach ( $students as $student )
         <a href="{{ route('student.show', ['id' => $student['id']]) }}" class="student">
            <header>
               <div class="student-img">
                  <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
               </div>
               <div class="info">
                  <h3>{{ $student['nome'] }} ({{ $student['eta'] }} anni)</h3>
                  <h4>Assunt{{ ($student['genere'] == 'm' ? 'o' : 'a') }} da {{ $student['azienda'] }} come {{ $student['ruolo'] }}</h4>
               </div>
            </header>
            <p>{{ $student['descrizione'] }}</p>
         </a>
      @endforeach
   </div>

@endsection