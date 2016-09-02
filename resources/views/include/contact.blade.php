<!-- modal-contact -->
	<div class="modal fade modal-contact" id="contact" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content"> 
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">{{trans('contact.modal-title')}}</h4>
				</div>
				<div class="modal-body modal-spa">
					<div class="contact"> 
						<div class="contact-w3lsrow">
							<div class="col-md-6 contact-left w3-agileits">
								<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d44635.92294592703!2d-71.17629749380549!3d8.56756122561747!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1472539898442" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="col-md-6 contact-right">
								<form action="#" method="post">
									<div class="styled-input agile-styled-input-top">
										<input type="text" name="Name" required="">
										<label>{{trans('contact.lbl-1')}}</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="text" name="Email" required=""> 
										<label>{{trans('contact.lbl-2')}}</label>
										<span></span>
									</div> 
									<div class="styled-input">
										<input type="text" name="Subject" required="">
										<label>{{trans('contact.lbl-3')}}</label>
										<span></span>
									</div>
									<div class="styled-input">
										<textarea name="Message" required=""></textarea>
										<label>{{trans('contact.lbl-4')}}</label>
										<span></span>
									</div>	 
									<input type="submit" value="SEND">
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>  
					</div>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-contact -->