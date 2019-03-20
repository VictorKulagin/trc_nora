$(window).load(function() {

    'use strict';

    // setInterval(function () {
    //     var btnData = document.querySelector('div.vcal-body > div');
    //     console.log(btnData);
    // }, 4000);

    document.addEventListener('calendar:createMonth', function (e) {
        var btnData = document.querySelectorAll('div.vcal-body > div');
        btnData.forEach(function (item, i, arr) {
            arr[i].addEventListener('click', (e) => {
                e.preventDefault();

                var locHost = window.location.host;
                var locProto = window.location.protocol;

                fetch('' + locProto + '//' + locHost + '/stage-rental/render')
                    .then((response) => {
                    return response.json();
                   })
                   .then((response) => {
                        var DataSR = document.querySelector('div.vcal-date.vcal-date--active.vcal-date--selected').getAttribute('data-calendar-date-new');
                        var itemsTime = document.querySelectorAll(".rabs label");

                        if (typeof response[DataSR] !== 'undefined') {
                            console.log(response[DataSR]);
                            for (var i = 0; i < response[DataSR].length; i++) {
                                console.log(response[DataSR][i]);

                                itemsTime.forEach(function(element) {
                                    if(response[DataSR][i] === element.innerHTML){
                                        element.classList.add("disabled-time");
                                        element.style = "color: #BDBDBD!important";
                                    } else {
                                        element.classList.remove("disabled-time");
                                        element.style = "color: #000000!important";
                                    }
                                });

                            }
                        } else {
                            itemsTime.forEach(function(element) {
                                element.classList.remove("disabled-time");
                                element.style = "color: #000000!important";
                            });
                        }

                   })
            });
        });

    }, false);
});