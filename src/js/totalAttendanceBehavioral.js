function createBarChart( object ){
    
    var ctx = document.getElementById( 'myChart' ).getContext( '2d' );
    var myBarChart = new Chart( ctx ,{
        type:'bar',
        
        borderColor: 'rgb(255, 86, 39)',
        data : {
            labels: object.labels ,
            datasets: [{
                data: object.values,
                backgroundColor: [
                    'rgba(0, 99, 132, 0.6)',
                    'rgba(30, 99, 132, 0.6)',
                    'rgba(60, 99, 132, 0.6)',
                    'rgba(90, 99, 132, 0.6)',
                    'rgba(120, 99, 132, 0.6)',
                    'rgba(150, 99, 132, 0.6)',
                ],
                borderColor: 'rgba(99, 132, 0, 1)',
            }],
            
        },
        options:{
            scales: {
                xAxes: [{
                  barPercentage: 1,
                  categoryPercentage: 0.6
                }],
                yAxes: [{
                  id: "y-axis-density"
                }/*, {
                  id: "y-axis-gravity"
                }*/]
              }
           
        }    
    });
}