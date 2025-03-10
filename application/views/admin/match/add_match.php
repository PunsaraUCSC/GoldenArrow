<div class="page-holder w-100 d-flex flex-wrap">
	<div class="container-fluid px-xl-5">
		<section class="py-5">
			<div class="row">
				<!-- Form Elements -->
				<div class="col-lg-12 mb-5">
					<div class="card">
						<div class="card-header">
							<h3 class="h6 text-uppercase mb-0">Add Match</h3>
						</div>
						<div class="card-body">
							<?php echo validation_errors(); ?>
							<?php echo form_open('AdminController/addMatch', 'class="form-horizontal"'); ?>
							<div class="form-group row">
								<label class="col-md-3 form-control-label">Tournament ID</label>
								<div class="col-md-9">
									<input type="text" name='tournamentId' class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Name</label>
								<div class="col-md-9">
									<input type="text" name='matchName' class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Location</label>
								<div class="col-md-9">
									<input type="text" name='matchLocation' class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Date</label>
								<div class="col-md-9">
									<input type="date" name='matchDate' class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Time</label>
								<div class="col-md-9">
									<input type="time" name='matchTime' class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Played</label>
								<div class="col-md-9">
									<select name="matchPlayed" class="form-control">
										<option value='1'>Yes</option>
										<option value='0'>No</option>
									</select> </div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Score</label>
								<div class="col-md-9">
									<input type="text" name='matchScore' class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 form-control-label">Opponent score</label>
								<div class="col-md-9">
									<input type="text" name='matchScoreOpponent' class="form-control">
								</div>
							</div>
							
							<div class="line"></div>
							<div class="form-group row">
								<div class="col-md-9 ml-auto">
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>