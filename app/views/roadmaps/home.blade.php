@extends('layouts.master')

@section('content')

	<div class="col-lg-2">
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation" class=" {{ ($tab == 'routes') ? 'active' : '' }} "><a href=" {{ URL::to('routes') }} ">Smart Route™</a></li>
			<li role="presentation" class=" {{ ($tab == 'maps') ? 'active' : '' }} "><a href=" {{ URL::to('maps') }} ">Black Spots</a></li>
		</ul>
	</div>
	<div class="col-lg-8">
		@if ($tab == 'maps')
			<iframe class="map-frame" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col2+from+1KQbT4jV66o70OY71ZAElkuyzblljTkN-bMS2DRMP&amp;viz=MAP&amp;h=false&amp;lat=23.755810688572833&amp;lng=90.47333474658194&amp;t=1&amp;z=12&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG"></iframe>
		@else
			{{ 'No Data Available Yet!' }}
		@endif
	</div>
	<div class="col-lg-12"></div>

@stop