   <footer class="main-footer">
      <nav class="nav-footer">
         <div class="footer-brand">
            <img src="https://www.boolean.careers/images/common/logo-white.png" alt="boolean_footer-logo">
         </div>

         <ul>
            <li><a href="{{ route('static-page.home') }}">Home</a></li>
            <li><a href="{{ route('static-page.faq') }}">Domande frequenti</a></li>
            <li><a href="{{ route('static-page.privacy') }}">Privacy</a></li>
         </ul>
      </nav>
   </footer>

   {{-- JS --}}
   {{--<script src="{{ asset('js/app.js') }}"></script>--}}
   @yield('scripts')

</body>
</html>