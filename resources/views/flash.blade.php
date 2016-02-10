@if(session()->has('flash_messae'))


<script type="text/javascript">

	swal({
		title: "{{ session('flash_message.title') }}",
		text: "{{ session('flash_message') }}",
		type: "info",
		timer: 1700,
 		showConfirmButton: false
	});

</script>

@endif