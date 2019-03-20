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




    /*var items = document.querySelectorAll('.rabs label');
    for(var i = 0; i < items.length; i++) {
        items[i].onclick = activeItemTime;
    }
    function activeItemTime() {
        this.classList.toggle('item-active');
        var result = document.querySelectorAll('.rabs label.item-active');
        for(var i = 0; i < result.length; i++) {
            var time = result[i].innerText;
            var elem = document.querySelector('input#stagerental-time_start');
            elem.val = time;
        }
    }*/

var itemsTime = document.querySelectorAll('.rabs input');

itemsTime.forEach(function(element) {
    element.addEventListener('click', function (e) {
        var val = e.target.value;
        var input = document.getElementById('stagerental-form_time');
        input.value = val;

    });
});

// itemsTime.addEventListener('click', function (e) {
//     console.log(e.target.value);
// });

    // function TimeSR(){
    //     var itemsTime = document.querySelector('.rabs-input');
    //     console.log(itemsTime);
    //     itemsTime.onclick = function (event) {
    //         console.log(event.target.innerHTML);
    //         document.querySelector('div.time_r').innerHTML = event.target.innerText;
    //     };
    // }
    //
    // TimeSR();


