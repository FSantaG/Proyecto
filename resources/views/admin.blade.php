<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            table, td{
                border:2px solid #ccc;
                align-items: center;
            }
            #container{
                margin-top: 2%;
                margin-left: 20%;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('layouts.navbar')

        <div id="container">
            <table style="border:2px solid #ccc;margin-left:20%">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Jeff@email.org</td>
                    <td>No</td>
                    <td><img style="width:35px" src="img/edit.png"></td>
                    <td><img style="width:35px" src="img/delete.png"></td>
                </tr>
                <tr>
                    <td>Geoff</td>
                    <td>Geoff@email.org</td>
                    <td>No</td>
                    <td><img style="width:35px" src="img/edit.png"></td>
                    <td><img style="width:35px" src="img/delete.png"></td>
                </tr>
                <tr>
                    <td>George</td>
                    <td>Geroge@email.org</td>
                    <td>Yes</td>
                    <td><img style="width:35px" src="img/edit.png"></td>
                    <td><img style="width:35px" src="img/delete.png"></td>
                </tr>
            </table>

            <div style="width:70%">
                <canvas id="myChart" ></canvas>
                </div>
            <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Unverified', 'Inactive', 'Verified', 'Banned', 'Deleted account'],
                    datasets: [{
                        label: '# of Users',
                        data: [7, 9, 13, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            </script>
        </div>

    </body>
</html>