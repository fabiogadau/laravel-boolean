<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Laravel Boolean</title>
   {{-- Stylesheet --}}
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   {{-- Fontawesome --}}
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'/>
</head>
<body>

   <header class="main-header">
      <nav class="navbar">
         <a href="{{ route('static-page.home') }}" class="navbar-brand">
            <div class="header-logo">
               <img src="https://www.boolean.careers/images/common/logo.png" alt="boolean-logo">
            </div>
         </a>

         <ul>
            <li><a
               @if ( Request::route()->getName() == 'static-page.home' )
                  class="active"
               @endif
               href="{{ route('static-page.home') }}">HOME</a></li>
            <li><a href="#">CORSO</a></li>
            <li><a
               @if ( Request::route()->getName() == 'student.index' )
                  class="active"
               @endif
               href="{{ route('student.index') }}">DOPO IL CORSO</a></li>
            <li><a href="#">LEZIONE GRATUITA</a></li>
            <li><a href="#">ASSUMI I NOSTRI STUDENTI</a></li>
            <li><a href="#">CANDIDATI ORA</a></li>
         </ul>
      </nav>
   </header>