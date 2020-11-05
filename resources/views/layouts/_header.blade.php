<div class="row">
	<div class="col-md-12">
		<div class="header">
			<div class="logo">
		        <img src="{{ asset('images/leadgen_logo.png') }}">
		        <span>LEADGEN RECRUITMENT SYSTEM</span>
		    </div>
		    <div class="sign-in">
		    	@guest
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                @else
                	@can('access',[2])
                		<span class="mr-5 bell @if(notifications()) bell-notif @endif" 
                			  data-after="{{ notifications() }}">
                			<a href="{{ route('notifications.index') }}">Notifications</a>
                		</span>
                	@endcan
			    	Logged in as
					<span class="dropdown-toggle" data-toggle="dropdown">
						{{ Auth::user()->username }}
					</span>
					<div class="dropdown-menu user-menu">

						<a class="dropdown-item menu-item" href="{{ route('root') }}">
							Home page
						</a>

						<a class="dropdown-item menu-item" href="{{ route('user.account') }}">
							My account
						</a>

			            @can('access',[2])
						<a class="dropdown-item menu-item" href="{{ route('register') }}">
							Create user
						</a>
						@endcan

						@can('access',[4])
						<a class="dropdown-item menu-item" href="{{ route('job-offerings.index') }}">
							Job Offerings
						</a>
						@endcan

						<a class="link dropdown-item menu-item" 
						   href="#" 
						   onclick="event.preventDefault();
			                        document.getElementById('logout-form').submit();">
			               Sign out
			            </a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			            @csrf
			        	</form>
					</div>
				@endguest	
		    </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="sub-header mb-4">
			@auth
				@unless(Auth::user()->roleid == 1)
					<div class="toggle-icon">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
					</div>
				@endunless
				<ul class="d-flex align-items-center ml-5">
			        @can('access',[2])
			            <li class="list-inline-item mr-4" id="tab-resource">
			                <span class="dropdown-toggle">Resources</span>
			                <div class="drop-down">
			                    <a href="{{ route('applicants.index') }}">Applicants</a>
			                </div>
			            </li>
			        @endcan
			        
			        @can('access',[3])
			            <li class="list-inline-item mr-4"><a href="{{ route('applications.candidates') }}">Candidates</a></li>
			            <li class="list-inline-item mr-4"><a href="{{ route('history.index') }}">History</a></li>
			        @endcan

			        @can('access',[4])
			            <li class="list-inline-item mr-4"><a href="{{ route('hr-managers.index') }}">Dashboard</a></li>
			            <li class="list-inline-item mr-4"><a href="{{ route('job-offerings.index') }}">Job Offerings</a></li>
			            <li class="list-inline-item mr-4"><a href="{{ route('employees.active') }}">Employees</a></li>
			            <li class="list-inline-item mr-4"><a href="{{ route('ext-clr.index') }}">Exit Clearance</a></li>
			        @endcan
			    </ul>
		    @endauth
		</div>
	</div>
</div>