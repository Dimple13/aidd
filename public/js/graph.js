let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1','2','3','4','5'],
        datasets:[{
          label:'Scores',
          data:[document.getElementsByTagName("p")[0].innerHTML,
          document.getElementsByTagName("p")[1].innerHTML,
          document.getElementsByTagName("p")[2].innerHTML,
          document.getElementsByTagName("p")[3].innerHTML,
          document.getElementsByTagName("p")[4].innerHTML,],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255,153,204, 1)',
            
          ],
          
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Stroop Progress Graph',
          fontSize:25,
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:false
        },
        scales: {
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Score'
            }
          }],
          xAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Games'
            }
          }]
        }
           
      }
    });