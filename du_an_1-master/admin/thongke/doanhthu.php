<div class="page-wrapper">
    <div class="row">
        <div class="card-body">
            <div class="row2 font_titel">
                <h1>THỐNG KÊ DOANH THU</h1>
            </div>

            <script src="https://www.gstatic.com/charts/loader.js"></script>


            <div id="myChart" style="width:100%; max-width:1800px; height:500px;">
            </div>

            <script>
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    // Set Data
                    const data = google.visualization.arrayToDataTable([
                        ['Thang', 'Doanh Thu'],
                        <?php
                        foreach ($dsthongke as $thongke) {
                            extract($thongke);
                            echo "['$thang', $total],";
                        }
                        ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'thong ke doanh thu theo tháng'
                    };

                    // Draw
                    const chart = new google.visualization.LineChart(document.getElementById('myChart'));
                    chart.draw(data, options);

                }
            </script>



        </div>
    </div>
</div>