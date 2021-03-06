@extends('layouts.app')

@section('content')

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Ventilator Charge Sheet</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/12 <br>
					REV. No. --- <br>
					WEF ----------
				</div>
			</div>
		</div>
	</div>


	<form action="{{ url('/VentilatorChargeSheet') }}" method="post">
		{{ csrf_field() }}
		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Name : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="name">
				@if($errors->has('name'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('name') }}</div></span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Age : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="age">
				@if($errors->has('age'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Sex : </label>
			</div>
			<div class="col-md-6">
				<select required class="form-control" name="sex" value="{{ old('sex') }}">
					<option value="NA">NA</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>BED No : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="bed_no">
				@if($errors->has('bed_no'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('bed_no') }}</div></span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Time : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="time" name="time">
				@if($errors->has('time'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Date : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="date" name="date">
				@if($errors->has('date'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Settings (GREEN)</th>
						<th class="form-inline">Hour :
							<select required class="form-control" name="time_slot01" value="{{ old('time_slot01') }}">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>

						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mode</td>
						<td><input class="form-control" type="text" name="mode">
							@if($errors->has('mode'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('mode') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Tidal Volume</td>
						<td><input class="form-control" type="text" name="tidal_volume">
							@if($errors->has('tidal_volume'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('tidal_volume') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Set Frequency (Controlled)</td>
						<td><input class="form-control" type="text" name="freq_controlled">
							@if($errors->has('freq_controlled'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('freq_controlled') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Set Frequency (SIMV)</td>
						<td><input class="form-control" type="text" name="freq_simv">
							@if($errors->has('freq_simv'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('freq_simv') }}</div></span>
							@endif
						</td>


					</tr>
					<tr>
						<td>Pressure Control</td>
						<td><input class="form-control" type="text" name="pressure_control">
							@if($errors->has('pressure_control'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('pressure_control') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Pressure Support (IPAP)</td>
						<td><input class="form-control" type="text" name="pressure_support">
							@if($errors->has('pressure_support'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('pressure_support') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>PEEP / CPAP (EDAP)</td>
						<td><input class="form-control" type="text" name="peep_cpap">
							@if($errors->has('peep_cpap'))
							  <span class="help-block"><div class="text-danger">{{ $errors->first('peep_cpap') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Triggering</td>
						<td><input class="form-control" type="text" name="triggering">
							@if($errors->has('triggering'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('triggering') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Flo2</td>
						<td><input class="form-control" type="text" name="flo2">
							@if($errors->has('flo2'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('flo2') }}</div></span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Measured (RED)</th>
						<th class="form-inline">Hour :
							<select required class="form-control" name="time_slot02" value="{{ old('time_slot02') }}">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th colspan="2">A. Volume</th>
					</tr>
					<tr>
						<td>Inp. TV</td>
						<td><input class="form-control" type="text" name="inp_tv">
							@if($errors->has('inp_tv'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('inp_tv') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Exp. TV</td>
						<td><input class="form-control" type="text" name="exp_tv">
							@if($errors->has('exp_tv'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('exp_tv') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Exp. MV</td>
						<td><input class="form-control" type="text" name="exp_mv">
							@if($errors->has('exp_mv'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('exp_mv') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Measured Frequency</td>
						<td><input class="form-control" type="text" name="measured_freq">
							@if($errors->has('measured_freq'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('measured_freq') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<th colspan="2">B. Pressure</th>

					</tr>
					<tr>
						<td>Peak Pressure</td>
						<td><input class="form-control" type="text" name="peak_pressure">
							@if($errors->has('peak_pressure'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('peak_pressure') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Mean</td>
						<td><input class="form-control" type="text" name="mean_pressure">
							@if($errors->has('mean_pressure'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('mean_pressure') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>End. Exp.</td>
						<td><input class="form-control" type="text" name="end_exp">
							@if($errors->has('end_exp'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('end_exp') }}</div></span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Alarms</th>
						<th class="form-inline">Hour :
							<select required class="form-control" name="time_slot03" value="{{ old('time_slot03') }}">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pressure Low</td>
						<td><input class="form-control" type="text" name="pressure_low">
							@if($errors->has('pressure_low'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('pressure_low') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Volume High MV</td>
						<td><input class="form-control" type="text" name="volume_high_mv">
							@if($errors->has('volume_high_mv'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('volume_high_mv') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Volume Low MV</td>
						<td><input class="form-control" type="text" name="volume_low_mv">
							@if($errors->has('volume_low_mv'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('volume_low_mv') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Gas Supply</td>
						<td><input class="form-control" type="text" name="gas_supply">
							@if($errors->has('gas_supply'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('gas_supply') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Power Failure</td>
						<td><input class="form-control" type="text" name="power_failure">
							@if($errors->has('power_failure'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('power_failure') }}</div></span>
							@endif
						</td>

					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">D. Position</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="position">
							@if($errors->has('position'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('position') }}</div></span>
							@endif
						</td>

					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">E. Suction</th>
					</tr>
					<tr>
						<td>E.T. / T'stomy</td>
						<td><input class="form-control" type="text" name="et_tstomy">
							@if($errors->has('et_tstomy'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('et_tstomy') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Oral</td>
						<td><input class="form-control" type="text" name="oral">
							@if($errors->has('oral'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('oral') }}</div></span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th></th>
						<th class="form-inline">Hour :

							<select required class="form-control"  name="time_slot04" value="{{ old('time_slot04') }}">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>F. Chest Physiotherapy</th>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="chest_physio">
							@if($errors->has('chest_physio'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('chest_physio') }}</div></span>
							@endif
						</td>

					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">G. ABG</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="abg">
							@if($errors->has('abg'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('abg') }}</div></span>
							@endif
						</td>

					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">H. X-Ray Chest</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="xray_chest">
							@if($errors->has('xray_chest'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('xray_chest') }}</div></span>
							@endif
						</td>

					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">I. Disposable Change</th>
					</tr>
					<tr>
						<td>Catheter Mount</td>
						<td><input class="form-control" type="text" name="catheter_mount">
							@if($errors->has('catheter_mount'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('catheter_mount') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Filter</td>
						<td><input class="form-control" type="text" name="filter">
							@if($errors->has('filter'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('filter') }}</div></span>
							@endif
						</td>

					</tr>
					<tr>
						<td>Ventilator Circuit</td>
						<td><input class="form-control" type="text" name="ventilator_circuit">
							@if($errors->has('ventilator_circuit'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('ventilator_circuit') }}</div></span>
							@endif
						</td>
					</tr>
					<tr>
						<td>E.T. Tube/ T'stomy Tube</td>
						<td><input class="form-control" type="text" name="et_tube">
							@if($errors->has('et_tube'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('et_tube') }}</div></span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row form-group text-center">
		<button class="btn btn-success" type="submit">Submit</button>
	</div>
</form>

</div>
@endsection
