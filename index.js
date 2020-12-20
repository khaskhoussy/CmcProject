document.addEventListener('DOMContentLoaded',()=>
{
    Highcharts.chart('container',{
        chart:{
            type :'column'
        },
        xAxis:{
            categories:[list[0].name,list[3].name,list[2].name,list[9].name,list[8].name]

        },
        series:[
            {
                name :list[0].name,
                data:[list[0].score]
            },
            {
                name :list[3].name,
                data:[list[3].score]
            },
            {
                name : list[2].name,
                data:[list[2].score]
            },
            {
                name : list[9].name,
                data:[list[9].score]
            },
            {
                name : list[8].name,
                data:[list[8].score]
            }
           
        ]
    });
})