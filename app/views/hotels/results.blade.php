<!doctype html>
        <html>
            <head>

            </head>
            <body>
                <div id="result_box">
                    <h3>City: {{ $city }}</h3>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Hotel Name</th>
                            <th>Star</th>
                        </tr>

                    <?php $count=0; ?>
                    @foreach($info as $info_element)
                        <tr>
                            <th>{{ ++$count }}</th>
                            <th>{{ $info_element->hotel_name }}</th>
                            <th>{{ $info_element->stars }}</th>
                        </tr>
                        @endforeach

                    </table>

                </div>
            </body>
        </html>