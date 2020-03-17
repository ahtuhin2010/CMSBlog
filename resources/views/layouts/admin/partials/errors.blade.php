@if(session('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" area-label="Close">
			<i class="material-icons">close</i>
		</button>
		<span>
			<b> {{ session('success')}} </b> 
		</span>
	</div>
@endif

@if ($errors->any())

    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
        
@endif