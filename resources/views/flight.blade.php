@extends('app_flight')

@section('content')

<div>
	<div class="row">
		<div class="col s12">
			<div class="row">
				<div class="col s6"><select type="text" name="from">
					@foreach($airport as $key)
					<option value="{{$key->airport_code}}">
						{{$key->airport_name}} ({{$key->airport_code}})
					</option>
					@endforeach
				</select>
				</div>
				<div class="col s6"><select type="text" name="to">
					@foreach($airport as $key)
					<option value="{{$key->airport_code}}">
						{{$key->airport_name}} ({{$key->airport_code}})
					</option>
					@endforeach
				</select>
				</div>
			</div>
			<div class="row">
				<div class="col s2">
					<select name="type" id="type">
						<option value="OW">Oneway</option>
						<option value="RT">Roundtrip</option>
					</select>
				</div>
				<div class="col s2">
					<input type="text" class="for_date" name="depart_date"></input>
				</div>
				<div class="col s2">
					<input type="text" class="for_date" name="return_date"></input>
				</div>
					<div class="col s1">
						<select name="adult" id="adult">
							@for($i=1;$i<6;$i++)
							<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
					</div>
					<div class="col s1">
						<select name="child" id="child">
							@for($i=1;$i<6;$i++)
							<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
					</div>
					<div class="col s1">
						<select name="infant" id="infant">
							@for($i=1;$i<6;$i++)
							<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
					</div>
					<div class="col s3">
						<span class="btn">Search</span>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection