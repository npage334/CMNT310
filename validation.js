$(function() {
$("form[id='form']").validate({
	rules: {
		username: {
			required: true,
			minlength:3,
		},
		email: {
			required: true,
			email: true,
		},
		pass1: {
			required: true,
			passcheck:true,
		},
		pass2: {
			required: true,
			equalTo:#pass1,
		}
	}
	messages: {
		email:"Please enter a valid email adress.",
		username:
		{
		required:"Please enter a username.",
		minlength:"Your Username must be at least 3 characters long.",
		}
		pass1:
		{
		required:"Please enter a password.",
		passcheck:"please enter a valid password containing a number.",
		}
		pass2:"Both passwords are not the same.",
	
	},
	submitHandler: function(form) {
		form.submit();
	}
	}	
});

