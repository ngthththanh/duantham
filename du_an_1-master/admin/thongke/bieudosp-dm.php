<div class="page-wrapper">
    <div class="row">
        <div class="card-body">
            <div class="row2 font_titel">
                <h1>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h1>
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
                        ['Danh mục', 'Số lượng'],
                        <?php
                        foreach ($dsthongke as $thongke) {
                            extract($thongke);
                            echo "['$namedm', $soluong],";
                        }
                        ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'thong ke san pham theo danh muc'
                    };

                    // Draw
                    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);

                }
            </script>



        </div>
    </div>
</div>