<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 

<script>
	@if (Session::has("error"))
		alert("{{Session::get('error')}}");
	@endif

	@if (Session::has("mensaje"))
		alert("{{Session::get('mensaje')}}");
	@endif
</script>