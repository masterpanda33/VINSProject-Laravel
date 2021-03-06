@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Doctor's Initial Assessment</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
					WEF 10-10-2015
				</div>
			</div>
		</div>
	</div>
	@if ($errors->any())
      <div class="alert alert-danger" role="alert">
          Please fix the following errors.
      </div>
  @endif

	<form action="{{ url('/DoctorsInitialAssessment') }}" method="post">
		{{ csrf_field() }}

		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-4">
					<label>History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="history" value="{{ old('history') }}" />
					@if($errors->has('history'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('history') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-4">
					<label>Past History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="past_history" value="{{ old('past_history') }}"/>
					@if($errors->has('past_history'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('past_history') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-4">
					<label>Allergic History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="allergic_history" value="{{ old('allergic_history') }}"/>
					@if($errors->has('allergic_history'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('allergic_history') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<h3>In case of Road Accident : </h3>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Name of Informant : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="name_informant" value="{{ old('name_informant') }}"/>
					@if($errors->has('name_informant'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('name_informant') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Brought By : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="brought_by" value="{{ old('brought_by') }}"/>
					@if($errors->has('brought_by'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('brought_by') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Place of Accident : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="place_of_accident" value="{{ old('place_of_accident') }}" />
					@if($errors->has('place_of_accident'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('place_of_accident') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Time : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="time" name="current_time" value="{{ old('current_time') }}"/>
					@if($errors->has('current_time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('current_time') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Date : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="date" name="current_date" value="{{ old('current_date') }}"/>
					@if($errors->has('current_date'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('current_date') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>MLC Done outside or not : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="mlc" value="{{ old('mlc') }}">
						<option value="no" {{ old('mlc')=='no'? "selected":"" }}>No</option>
						<option value="yes" {{ old('mlc')=='yes'? "selected":"" }}>Yes</option>
					</select>
					@if($errors->has('mlc'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('mlc') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<hr>
		<div class="row">
			<h3>History Of : </h3>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>LOC : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="loc" value="{{ old('loc') }}">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
					@if($errors->has('loc'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('loc') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>ENT Bleeding : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="ent_bleeding" value="{{ old('ent_bleeding') }}">
						<option value="no" {{ old('ent_bleeding')=='no'? "selected":"" }}>No</option>
						<option value="yes" {{ old('ent_bleeding')=='yes'? "selected":"" }}>Yes</option>
					</select>
					@if($errors->has('ent_bleeding'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('ent_bleeding') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Seizures : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="seizures" value="{{ old('seizures') }}">
						<option value="no" {{ old('seizures')=='no'? "selected":"" }}>No</option>
						<option value="yes" {{ old('seizures')=='yes'? "selected":"" }}>Yes</option>
					</select>
					@if($errors->has('seizures'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('seizures') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Vomiting : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="vomiting" value="{{ old('vomiting') }}">
						<option value="no" {{ old('vomiting')=='no'? "selected":"" }}>No</option>
						<option value="yes" {{ old('vomiting')=='yes'? "selected":"" }}>Yes</option>
					</select>
					@if($errors->has('vomiting'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('vomiting') }}</div></span>
					@endif
				</div>
			</div>
		</div>
		<hr>

		<div class="row">
			<h3>Vitals : </h3>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Pulse : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="pulse" value="{{ old('pulse') }}"/>
					@if($errors->has('pulse'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('pulse') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Temprature : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="temp" value="{{ old('temp') }}" />
					@if($errors->has('temp'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('temp') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>BP : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="bp" value="{{ old('bp') }}"/>
					@if($errors->has('bp'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('bp') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>SPO2 : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="spo2" value="{{ old('spo2') }}"/>
					@if($errors->has('spo2'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('spo2') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>RBS : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="rbs" value="{{ old('rbs') }}"/>
					@if($errors->has('rbs'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('rbs') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Pain : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="pain" value="{{ old('pain') }}">
						<option value="no" {{ old('pain')=='no'? "selected":"" }}>No</option>
						<option value="yes" {{ old('pain')=='yes'? "selected":"" }}>Yes</option>
					</select>
					@if($errors->has('pain'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('pain') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>GCS : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_e" value="{{ old('gcs_e') }}"/>
				@if($errors->has('gcs_e'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('gcs_e') }}</div></span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_m" value="{{ old('gcs_m') }}"/>
				@if($errors->has('gcs_m'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('gcs_m') }}</div></span>
				@endif
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_v" value="{{ old('gcs_v') }}"/>
				@if($errors->has('gcs_v'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('gcs_v') }}</div></span>
				@endif
			</div>
		</div>
	</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Systematic Examination : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="systematic_examination" value="{{ old('systematic_examination') }}"/>
					@if($errors->has('systematic_examination'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('systematic_examination') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Any other Findings or Injuries : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="any_other" value="{{ old('any_other') }}"/>
					@if($errors->has('any_other'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('any_other') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Treated on Admission : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="treated_on_admission" value="{{ old('treated_on_admission') }}"/>
					@if($errors->has('treated_on_admission'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('treated_on_admission') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Shifted To : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="shifted_to" value="{{ old('shifted_to') }}"/>
					@if($errors->has('shifted_to'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('shifted_to') }}</div></span>
					@endif
				</div>
			</div>
		</div>
		<div class="text-center form-group">
		<button class="btn btn-success" type="submit">Submit</button>
	</div>

</form>
</div>

@endsection
