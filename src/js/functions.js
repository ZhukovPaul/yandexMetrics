function deviceCategory( id ,object ){
    console.log(object.colors);
    var ctx = document.getElementById( id+'deviceCategory' ).getContext( '2d' );
    var myBarChart = new Chart( ctx ,{
        type:'doughnut',
        
        borderColor: 'rgb(255, 86, 39)',
        data : {
            labels: object.labels ,
            datasets: [{
                data: object.values,
                backgroundColor: object.colors,
                borderColor: 'rgba(0, 0, 0, 0.8)',
            }],
            
        },
        options:{
         
           
        }    
    });
}


function totalAttendanceBehavioral( id, object ){
    
    var ctx = document.getElementById( id + 'totalAttendanceBehavioral' ).getContext( '2d' );
    var myBarChart = new Chart( ctx ,{
        type:'bar',
        borderColor: 'rgb(255, 86, 39)',
        data : {
            labels: object.labels ,
            datasets: [{
                data: object.values,
                backgroundColor: [
                    'rgb(97, 199, 189)',
                    'rgb(97, 199, 189)',
                    'rgb(97, 199, 189)',
                ],
                borderColor: 'rgba(99, 132, 0, 1)',
            }],
            
        },
        options:{
            title:{
                display: true,
                text: 'Общая посещаемость и поведенческие факторы',
                fontSize:20
            }
           
        }    
    });
}

function usersGeography( id ,object ){
    
    var ctx = document.getElementById( id+'usersGeography' ).getContext( '2d' );
    var myBarChart = new Chart( ctx ,{
        type:'bar',
        
        borderColor: 'rgb(255, 86, 39)',
        data : {
            labels: object.labels ,
            datasets: [{
                data: object.values,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 20, 147)',
                    'rgb(72, 209, 204)',
                    'rgb(218, 112, 214)',
                
                ],
                borderColor: 'rgba(0, 0, 0, 0.8)',
            }],
            
        },
        options:{
            
            title:{
                display: true,
                text: 'География посетителей',
                fontSize:20
            }
           
           
        }    
    });
}
function sourceDummary( id ,object ){
    
    var ctx = document.getElementById( id+'sourceDummary' ).getContext( '2d' );
    var myBarChart = new Chart( ctx ,{
        type:'doughnut',
        
        borderColor: 'rgb(255, 86, 39)',
        data : {
            labels: object.labels ,
            datasets: [{
                data: object.values,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 20, 147)',
                    'rgb(72, 209, 204)',
                    'rgb(218, 112, 214)',
                
                ],
                borderColor: 'rgba(0, 0, 0, 0.8)',
            }],
            
        },
        options:{
            title:{
                display: true,
                text: 'Распределение трафика по каналам',
                fontSize:20
            }
           
           
        }    
    });
}

function searchEngines( id ,object ){
    
    var ctx = document.getElementById( id+'searchEngines' ).getContext( '2d' );
    var searchEnginesChart = new Chart( ctx ,{
        type:'doughnut',
        borderColor: 'rgb(255, 86, 39)',
        data : {
            lineHeight:5,
            labels: object.labels ,
            datasets: [{
                data: object.values,
                backgroundColor: object.colors,
                borderColor: 'rgba(0, 0, 0, 0.8)',
            }],
            
        },
        options:{
      
           
        }    
    });
}