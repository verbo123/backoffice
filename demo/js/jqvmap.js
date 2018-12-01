'use strict';

$(document).ready(function () {

    function mapdat() {
        var tab=[];
        $.ajax({
            url:'Tools/mapdata.php',
            success : function (data) {
                data=JSON.parse(data);
                var len = data.length;
                if(len > 0)
                {
                    for (var i = 0; i < len; i++)
                    {
                        tab.push(data[i].country_code);
                    }
                }
              // console.log(tab);
                // Realtime visitors widget map
                if($('.map-visitors')[0]) {
                    $('.map-visitors').vectorMap({
                        map: 'world_en',
                        backgroundColor: 'rgba(0,0,0,0)',
                        color: 'rgba(255,255,255,0.2)',
                        borderColor: 'rgba(255,255,255,0.2)',
                        hoverOpacity: 1,
                        selectedColor: 'rgba(255,255,255,0.9)',
                        enableZoom: false,
                        showTooltip: true,
                        normalizeFunction: 'polynomial',
                        selectedRegions: tab, //['US', 'EN', 'NZ', 'CN', 'JP', 'SL', 'BR', 'AU', 'EG', 'BA'],
                        onRegionClick: function (event) {
                            event.preventDefault();
                        }
                    });
                }
            }
        });
    }
    mapdat();



});