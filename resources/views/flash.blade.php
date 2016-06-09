@if(session()->has('flash_message'))
<script type="text/javascript">
		swal({  title: "Error!",
			   text: "Here's my error message!",   
			   type: "info",
			   timer: 2000, 
			   showConfirmButton :false  
		    });
	</script>

@endif