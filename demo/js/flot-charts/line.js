'use strict';

$(document).ready(function(){

    // Chart Options
    var lineChartOptions = {
        series: {
            lines: {
                show: true,
                barWidth: 0.05,
                fill: 0
            }
        },
        shadowSize: 0.1,
        grid : {
            borderWidth: 1,
            borderColor: 'rgba(255,255,255,0.1)',
            show : true,
            hoverable : true,
            clickable : true
        },
        yaxis: {
            tickColor: 'rgba(255,255,255,0.1)',
            tickDecimals: 0,
            font: {
                lineHeight: 13,
                style: 'normal',
                color: 'rgba(255,255,255,0.75)',
                size: 11
            },
            shadowSize: 0
        },

        xaxis: {
            tickColor: 'rgba(255,255,255,0.1)',
            tickDecimals: 0,
            font: {
                lineHeight: 13,
                style: 'normal',
                color: 'rgba(255,255,255,0.75)',
                size: 11
            },
            shadowSize: 0
        },
        legend:{
            container: '.flot-chart-legends--line',
            backgroundOpacity: 0.5,
            noColumns: 0,
            lineWidth: 0,
            labelBoxBorderColor: 'rgba(255,255,255,0)'
        }
    };


    var lineChartOptions_re = {
        series: {
            lines: {
                show: true,
                barWidth: 0.05,
                fill: 0
            }
        },
        shadowSize: 0.1,
        grid : {
            borderWidth: 1,
            borderColor: 'rgba(255,255,255,0.1)',
            show : true,
            hoverable : true,
            clickable : true
        },
        yaxis: {
            tickColor: 'rgba(255,255,255,0.1)',
            tickDecimals: 0,
            font: {
                lineHeight: 13,
                style: 'normal',
                color: 'rgba(255,255,255,0.75)',
                size: 11
            },
            shadowSize: 0
        },

        xaxis: {
            tickColor: 'rgba(255,255,255,0.1)',
            tickDecimals: 0,
            font: {
                lineHeight: 13,
                style: 'normal',
                color: 'rgba(255,255,255,0.75)',
                size: 11
            },
            shadowSize: 0
        },
        legend:{
            container: '.flot-chart-legends--line',
            backgroundOpacity: 0.5,
            noColumns: 0,
            lineWidth: 0,
            labelBoxBorderColor: 'rgba(255,255,255,0)'
        }
    };


    var tab=[];
    var annee=[];
    var lineChartData=[];
    var ladate=new Date();
    $.ajax({
        url:'Tools/virement.php',
        type:'POST',
        data:"annee="+encodeURIComponent(ladate.getFullYear()),
        async: false,
        success : function (data) {
            data=JSON.parse(data);
            var len = data.length;
            if(len > 0)
            {
               for (var i = 0; i < len; i++)
               {
                   tab.push([parseInt(data[i].mois), parseInt(data[i].nbre)]);
                   annee.push(data[i].annee);
               }
            }

            lineChartData.push({

                label: ladate.getFullYear(),
                data: tab,
                color: '#fff'
            });

        }
    });




    // var tab_re=[];
    // var annee_re=[];
    // var lineChartData_re=[];
    // var ladate_re=new Date();
    // $.ajax({
    //     url:'Tools/recharge.php',
    //     type:'POST',
    //     data:"annee="+encodeURIComponent(ladate_re.getFullYear()),
    //     async: false,
    //     success : function (data) {
    //         data=JSON.parse(data);
    //         var len = data.length;
    //         if(len > 0)
    //         {
    //             for (var i = 0; i < len; i++)
    //             {
    //                 tab_re.push([parseInt(data[i].mois), parseInt(data[i].nbre)]);
    //                 annee_re.push(data[i].annee);
    //             }
    //         }
    //
    //         lineChartData_re.push({
    //
    //             label: ladate_re.getFullYear(),
    //             data: tab_re,
    //             color: '#fff'
    //         });
    //
    //         console.log(tab_re);
    //
    //     }
    // });



    function stat_anterieur(dt) {
        $.ajax({
            url:'Tools/virement.php',
            type:'POST',
            data:"annee="+encodeURIComponent(dt),
            async: false,
            success : function (data) {
                data=JSON.parse(data);
                var len = data.length;
                if(len > 0)
                {
                    for (var i = 0; i < len; i++)
                    {
                        tab.push([parseInt(data[i].mois), parseInt(data[i].nbre)]);
                        annee.push(data[i].annee);
                    }
                }

                lineChartData.push({

                    label: dt,
                    data: tab,
                    color: '#fff'
                });


            }
        });

    }



    // Create chart
    if ($('.flot-line')[0]) {
        $.plot($('.flot-line'), lineChartData, lineChartOptions);
    }

    // if ($('.flot-line')[1]) {
    //     $.plot($('.flot-line'), lineChartData, lineChartOptions);
    // }




    // Chart Data
    // var lineChartData = [
    //
    //     {
    //         label: '2015',
    //         data: [[1,60], [2,30], [3,50], [4,100], [5,10], [6,90], [7,85]],
    //         color: '#fff'
    //     },
    //     {
    //         label: '2016',
    //         data: [[1,20], [2,90], [3,60], [4,40], [5,100], [6,25], [7,65]],
    //         color: 'rgba(255,255,255,0.5)'
    //     },
    //     {
    //         label: '2017',
    //         data: [[1,100], [2,20], [3,60], [4,90], [5,80], [6,10], [7,5]],
    //         color: 'rgba(255,255,255,0.15)'
    //     }
    // ];



});
