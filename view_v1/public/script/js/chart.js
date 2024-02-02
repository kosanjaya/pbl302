const ctx = document.getElementById('myChart');
const barr = document.getElementById('bar');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['01:00','03:00','06:00','09:00','12:00','15:00','18:00','21:00','24:00'],
        datasets: [{
            label: 'Approved',
            data: [12, 19, 3, 9, 13, 3, 10, 5, 11],
            fill: true,
        //   borderColor: 'white',//#12B2A7
          borderWidth: 2,
        //   backgroundColor: 'white'
            // backgroundColor: 'rgba(255, 99, 132, 0.2)',
            // borderColor: 'rgb(255, 99, 132)',
            // pointBackgroundColor: 'rgb(255, 99, 132)',
            // pointBorderColor: '#fff',
            // pointHoverBackgroundColor: '#fff',
            // pointHoverBorderColor: 'rgb(255, 99, 132)'
            backgroundColor: 'rgba(26, 234, 120, 0.2)',
            borderColor: 'rgba(26, 234, 120, 1)',
            pointBackgroundColor: 'rgb(255, 99, 132)',
            // pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)'
          // tension: 0.1,
          // stepped: true
          },
          {
            label: 'Rejected',
            data: [20, 7, 12, 17, 7, 16, 3, 13, 10],
            fill:true,
            backgroundColor: 'rgba(216, 41, 31, 0.1)',
            borderColor: 'red',
            // pointBorderColor: '#fff',
            borderWidth: 2,
            // tension: 0.1,
          }

        ]},
      options: {
        scales: {
          x:{
            // offset: true,
            // beginAtZero: true,
            grid:{
              color: false,
              // drawOnChartArea:false,
            }
          },
          y: {
            grid: {
              color: '#484948',
            }, 
            ticks: {
              stepSize: 4
            },
            beginAtZero: true
          }
        },
        responsive: true
      }
    });

    new Chart(barr, {
      type: 'bar',
      data: {
        labels: ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',],
        datasets: [{
          label: 'Approved',
          data: [42, 12, 32, 10, 20, 34, 5],
          backgroundColor: 'rgba(26, 234, 120, 1)',
          // backgroundColor: [
          //   'rgba(255, 99, 132, 0.2)',
          //   'rgba(255, 159, 64, 0.2)',
          //   'rgba(255, 205, 86, 0.2)',
          //   'rgba(75, 192, 192, 0.2)',
          //   'rgba(54, 162, 235, 0.2)',
          //   'rgba(153, 102, 255, 0.2)',
          //   'rgba(201, 203, 207, 0.2)'
          // ],
          // borderColor: [
          //   'rgb(255, 99, 132)',
          //   'rgb(255, 159, 64)',
          //   'rgb(255, 205, 86)',
          //   'rgb(75, 192, 192)',
          //   'rgb(54, 162, 235)',
          //   'rgb(153, 102, 255)',
          //   'rgb(201, 203, 207)'
          // ],
          borderWidth: 1
            },
            {
                label: 'Rejected',
                data: [12, 22, 10, 5, 7, 3, 5],
                backgroundColor: 'rgba(216, 41, 31, 1)',
                // backgroundColor: [
                //     'rgba(255, 99, 132, 0.2)',
                //     'rgba(255, 159, 64, 0.2)',
                //     'rgba(255, 205, 86, 0.2)',
                //     'rgba(75, 192, 192, 0.2)',
                //     'rgba(54, 162, 235, 0.2)',
                //     'rgba(153, 102, 255, 0.2)',
                //     'rgba(201, 203, 207, 0.2)'
                // ],
                // borderColor: [
                //     'rgb(255, 99, 132)',
                //     'rgb(255, 159, 64)',
                //     'rgb(255, 205, 86)',
                //     'rgb(75, 192, 192)',
                //     'rgb(54, 162, 235)',
                //     'rgb(153, 102, 255)',
                //     'rgb(201, 203, 207)'
                // ],
            }
        ]}
    });