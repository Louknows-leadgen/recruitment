<ul class="list-group mb-2">
	@if(count($applicants))
		@foreach($applicants as $applicant)
			<li class="list-group-item">
			  	<div class="row">
			  		<div class="col-md-2">
			  			<img src="{{ get_avatar($applicant->gender) }}" width="100%" height="100%">
			  		</div>
			  		<div class="col-md-10">
			  			<h5>{{ implode(' ',[$applicant->first_name,$applicant->last_name]) }}</h5>
			  			<p><span class="fa fa-briefcase text-muted"></span> {{$applicant->job_name}}</p>
			  			<a href="{{ route('employees.create',['applicant_id'=>$applicant->applicant_id]) }}" class="btn btn-primary mb-2 mr-2">Hire</a>
			  			<span data-id="{{ $applicant->applicant_id }}" class="btn btn-secondary remove-trigger mb-2 mr-2">No show</span>
			  			<span data-id="{{ $applicant->applicant_id }}" class="btn btn-danger decline-offer-trig mb-2 mr-2">Declined Offer</span>
			  			<a href="{{ route('blacklists.blacklist_applicant',['id'=>$applicant->applicant_id]) }}" class="btn btn-dark blacklist-trig mr-2 mb-2">
			  				Blacklist
			  			</a>
			  		</div>
			  	</div>
			</li>
		@endforeach	
	@else
		<li class="list-group-item text-center">No applicants as of the moment</li>
	@endif	
</ul>
{!! $applicants->appends(['skey'=>$skey])->links() !!}
