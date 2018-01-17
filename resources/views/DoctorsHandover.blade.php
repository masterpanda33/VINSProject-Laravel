@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Doctor's Handover</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/IPD/62 <br>
						REV. No. 0.0 <br>
						WEF 25-02-2017
					</div>
				</div>
			</div>
		</div>
		@if ($errors->any())
	      <div class="alert alert-danger" role="alert">
	          Please fix the following errors
	      </div>
	  @endif

		<form action="DoctorsHandover" method="post">
			{{ csrf_field() }}
			<div class="row form-group">
			  <div class="col-md-8">
					<div class="col-md-4">
						<label class="control-label" for="diagnosis">Diagnosis :</label>
					</div>
					<div class="col-md-8">
						<textarea name="diagnosis" id="diagnosis" rows="3" class="form-control"></textarea>
						@if($errors->has('diagnosis'))
								<span class="help-block">{{ $errors->first('diagnosis') }}</span>
						@endif
					</div>
				</div>
			  <div class="col-md-4 text-right">
					<textarea name="addressograph" id="addressograph" rows="3" class="form-control" placeholder="Addressograph Here"></textarea>
				</div>
			</div>
			<hr>
			<div class="row form-group">
				<div class="col-md-6">
					<label>Handover for Day or Night : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="day_night">
						<option value="day">Day</option>
						<option value="night">Night</option>
					</select>
					@if($errors->has('day_night'))
							<span class="help-block">{{ $errors->first('day_night') }}</span>
					@endif
				</div>
			</div>

			<div class="row form-group">
			  <table class="table table-bordered table-responsive">
			    <thead>
					  <tr>
							<th class="text-center">Sr. No.</th>
							<th class="text-center">Particulars</th>
							<th class="text-center"></th>

					  </tr>
					</thead>
					<tbody>
					  <tr>
					    <td class="text-center">1</td>
							<td>Patient is surgical/conservative</td>
							<td class="text-center"><input type="checkbox" name="surgical" id="surgical" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">2</td>
							<td>If patient is surgical then tentative date of surgery</td>
							<td><input type="date" id="tentative_date_of_surgery" name="tentative_date_of_surgery" class="form-control"></td>

					  </tr>
					  <tr>
					    <td class="text-center">3</td>
							<td>Please mention date of surgery performed (If surgery performed)</td>
							<td><input type="date" id="date_of_surgery" name="date_of_surgery" class="form-control"></td>

					  </tr>
					  <tr>
					    <td class="text-center">4</td>
							<td>Physician's reference</td>
							<td><input type="text" class="form-control" name="physician_reference" id="physician_reference"></td>

					  </tr>
					  <tr>
					    <td class="text-center">5</td>
							<td>Any other specialist's reference</td>
							<td><input type="text" class="form-control" name="other_physician_reference" id="other_physician_reference"></td>

					  </tr>
					  <tr>
					    <td class="text-center">6</td>
							<td>Pathological investigation to be done</td>
							<td class="text-center"><input type="checkbox" name="pathological_investigation_done" id="pathological_investigation_done" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">7</td>
							<td>Reports of pathological investigation to be collected</td>
							<td class="text-center"><input type="checkbox" name="pathological_investigation_collected" id="pathological_investigation_collected" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">8</td>
							<td>Radiological investigation to be done</td>
							<td class="text-center"><input type="checkbox" name="radiological_investigation_done" id="radiological_investigation_done" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">9</td>
							<td>Reports of radiological investigation to be collected</td>
							<td class="text-center"><input type="checkbox" name="radiological_investigation_collected" id="radiological_investigation_collected" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">10</td>
							<td>Any other investigation to be done</td>
							<td class="text-center"><input type="checkbox" name="other_investigation_done" id="other_investigation_done" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">11</td>
							<td>Reports of said investigation awaited</td>
							<td class="text-center"><input type="checkbox" name="other_investigation_collected" id="other_investigation_collected" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">12</td>
							<td>Echo</td>
							<td class="text-center"><input type="checkbox" name="echo" id="echo" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">13</td>
							<td>Physiotherapy</td>
							<td class="text-center"><input type="checkbox" name="physiotherapy" value="yes"/></td>

					  </tr>
					  <tr>
					    <td class="text-center">14</td>
							<td>Specific instruction/ change in treatment</td>
							<td><textarea name="specific_instruction" id="specific_instruction" rows="3" class="form-control"></textarea></td>

					  </tr>
					  <tr>
					    <td class="text-center">15</td>
							<td>Verified by physician's assistant</td>
							<td class="text-center"><input type="checkbox" name="verified_by_assistant" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">16</td>
							<td>Over given by:</td>
							<td></td>
							<td></td>
					  </tr>
						<tr>
							<td class=""></td>
							<td>16.1 Name</td>
							<td><input type="text" class="form-control" name="name_given" id="name_given" />
								@if($errors->has('name_given'))
										<span class="help-block">{{ $errors->first('name_given') }}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td class=""></td>
							<td>16.2 Date</td>
							<td><input type="date" class="form-control" name="date_given" id="date_given" />
								@if($errors->has('date_given'))
										<span class="help-block">{{ $errors->first('date_given') }}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td class=""></td>
							<td>16.3 Time</td>
							<td><input type="time" class="form-control" name="time_given" id="time_given" />
								@if($errors->has('time_given'))
										<span class="help-block">{{ $errors->first('time_given') }}</span>
								@endif
							</td>
						</tr>
						<tr>
					    <td class="text-center">17</td>
							<td>Over taken by:</td>
							<td></td>
							<td></td>
					  </tr>
						<tr>
							<td class=""></td>
							<td>17.1 Name</td>
							<td><input type="text" class="form-control" name="name_taken" id="name_taken" />
								@if($errors->has('name_taken'))
										<span class="help-block">{{ $errors->first('name_taken') }}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td class=""></td>
							<td>17.2 Date</td>
							<td><input type="date" class="form-control" name="date_taken" id="date_taken" />
								@if($errors->has('date_taken'))
										<span class="help-block">{{ $errors->first('date_taken') }}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td class=""></td>
							<td>17.3 Time</td>
							<td><input type="time" class="form-control" name="time_taken" id="time_taken" />
								@if($errors->has('time_taken'))
										<span class="help-block">{{ $errors->first('time_taken') }}</span>
								@endif
							</td>
						</tr>
						<tr>
					</tbody>
			  </table>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
@endsection
