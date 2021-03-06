require('./bootstrap');

$(document).ready(function(){
   
   // Setup
   var filter = $('#filter');
   var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';
   var container = $('.students');

   // Faq variables for slide down of faqs answers
   var faqItem = $('.faq-item');
   var faqIcon = $('.faq-item i');
   var faqAnswer = $('.faq-answer');

   // Slide down of faq answer by clicking its question
   faqItem.click(function(){
      $(this).find(faqIcon).toggleClass('fa-plus fa-minus');
      $(this).find(faqAnswer).slideToggle(600).toggleClass('fixed');
   });

   // Init Handlebars
   var source = $('#student-template').html();
   var template = Handlebars.compile(source);

   filter.on('change', function(){
      var gender = $(this).val();

      $.ajax({
         url: apiUrl,
         method: 'POST',
         data: {
            filter: gender
         }
      })
      .done(function(res){
         var results = res.response;

         if ( results.length > 0 ){
            // Reset container
            container.html('');

            for ( var i = 0; results.length; i++ ){
               var item = results[i];

               var context = {
                  slug: item.slug,
                  img: item.img,
                  nome: item.nome,
                  eta: item.eta,
                  assunzione: (item.genere == 'm' ? 'Assunto' : 'Assunta'),
                  azienda: item.azienda,
                  ruolo: item.ruolo,
                  descrizione: item.descrizione
               };

               var output = template(context);
               container.append(output);
            }
         }
         else {
            console.log(res.error);
         }
      })
      .fail(function(){
         console.log('API error');
      });
   });

}); // End document ready
