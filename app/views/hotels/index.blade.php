<!doctype HTML>
<html>
    <head>

    </head>
    <body>
        <h2> Search your best hotels</h2>
        {{ Form::open(array('action'=>'hotelsController@search')) }}
            {{ Form::label('gaurav','Enter City name') }}
                    <br>like delhi, mumbai, dubai<br>
            {{ Form:: text('city',null,array('placeholder'=>'city name in small letters','id'=>'city')) }}
            {{ Form::submit('Search') }}
        {{ Form::close() }}

    </body>
</html>