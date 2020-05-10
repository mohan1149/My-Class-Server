let labels     = ['Departments', 'Staff', 'Students', 'Labs'];
let graph_sets = [];
axios({
  method:'get',
  url:'/get/institute/graph-data/'
})
.then(function(response){
  let datasets = response.data;
  datasets.map((dataset)=>{
    let g_set = {
      label:dataset.school_name,
      backgroundColor: '#'+ Math.floor(Math.random()*16777215).toString(16),
      borderColor: '#FFF',
      borderWidth: 1,
      data:[
        dataset.depts_count,
        dataset.staff_count,
        dataset.studs_count,
        dataset.labs_count
      ]
    };
    graph_sets.push(g_set);
  });
  var barChartData = {
    labels: labels,
    datasets: graph_sets,
  };
  var ctx = document.getElementById('institute-canvas').getContext('2d');
  window.myBar = new Chart(ctx, {
    type: 'bar',
    data: barChartData,
    options: {
      responsive: true,
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Institutes Bar Chart'
      }
    }
  });
});
