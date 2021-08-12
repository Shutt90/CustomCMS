import Chart from 'chart.js/auto';

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];
  
  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
}

const config = {
    type: 'line',
    data,
    options: {}
};


  var myChart = new Chart(
    document.querySelector('.visitors'),
    config
  );


  const labels2 = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];
  
  const data2 = {
    labels: labels2,
    datasets: [{
      label: 'My Second dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [5, 15, 2, 5, 23, 50, 47],
    }]
}

const config2 = {
    type: 'bar',
    data: data2,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };


  var myChart = new Chart(
    document.querySelector('.current-visitors'),
    config2
  );
