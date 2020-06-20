   <div class="footer-push"></div>
   
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

      <div class="address-social">
         <ul class="social">
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
         </ul>

         <p class="address">Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
      </div>
   </footer>

   {{-- JS --}}
   {{--<script src="{{ asset('js/app.js') }}"></script>--}}
   @yield('scripts')

</body>
</html>