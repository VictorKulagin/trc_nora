/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 *
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

    'use strict';

    /*document.querySelector('button.md-trigger.button-tr').addEventListener( "click" , function() {var itemsData = document.querySelectorAll('p.demo-picked span')[0].innerText;
     itemsData = document.querySelectorAll('vcal-date vcal-date--active vcal-date--selected');
     console.log(itemsData);
     var re = /([A-z a-z]{3})\s(\b\d{2})\s(\d)\w+/;
     var rDate = itemsData.match(re);
     document.querySelector('input#stagerentalform-date.form-control').value = rDate[0];});*/

    /*var div = document.querySelectorAll('div.vcal-date.vcal-date--active');
     div[0].dataset.calendarDateNew;*/


    function DateSR(){
        document.querySelector('button.md-trigger.button-tr').addEventListener( "click" ,  function() {
            var itemsData = document.querySelector('div.vcal-date.vcal-date--active.vcal-date--selected');
            var saveData = itemsData.getAttribute('data-calendar-date-new');
            document.querySelector('input#stagerental-form_date.form-control').value = saveData;

            var dateSR = document.querySelector('input#stagerental-form_date.form-control').value;
            var timsSR = document.querySelector('input#stagerental-form_time.form-control').value;

            var allDataTime = dateSR + " " + timsSR + ":00";
            document.querySelector('input#stagerental-time_start.form-control').value = allDataTime;

        });
    }

    DateSR();



})( window );
