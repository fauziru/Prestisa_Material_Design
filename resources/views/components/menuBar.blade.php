@foreach($imb as $i)
<div class="col-md-2 col-auto mb">
	<a href="{{ route($i["mlink"]) }}">
		<div class="card">
			<div class="card-body text-center">
				<img class="icon" src="{{ asset('icon') }}/iconpngcolor/{{ $i["mikon"] }}.png"></img>
				<p class="menu-titel">{{ $i["mt"] }}</p>
			</div>
		</div>
	</a>
</div>
@endforeach