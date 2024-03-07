(function ($){
    "use strict";
    // Members and Vistors attendance
    var ctx2 =$("attendance").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2,{
        type: "line",
        data: {
            labels:["Jan","Feb","Mar","Apir","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"],
            datasets:[{
                labels: "Members",
                data:[15,20,16,24,30,15,27,34,15,29],
                backgroundColor: "rgba(235,22,22,.7)",
                fill: true
            },
            {
                labels: "Vistors",
                data: [5,9,12,5,14,15,20,10,12,13,15,22],
                backgroundColor: "rgba(235,22,22,.5)",
                fill: true
            }
        ]
        },
        options:{
            responsive: true
        }
    });
})(jQuery);