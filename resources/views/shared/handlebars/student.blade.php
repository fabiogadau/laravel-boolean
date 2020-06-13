<script id="student-template" type="text/x-handlebars-template">
   <a href="{{ url('student.show') }}/@{{ slug }}" class="student">
      <header>
         <div class="student-img">
            <img src="@{{ img }}" alt="@{{ nome }}">
         </div>
         <div class="info">
            <h3>@{{ nome }} (@{{ eta }} anni)</h3>
            <h4>@{{ assunzione }} da @{{ azienda }} come @{{ ruolo }}</h4>
         </div>
      </header>
      <p>@{{ descrizione }}</p>
   </a>
</script>