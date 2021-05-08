  

	document.getElementById("btn_contact").addEventListener("click", function() 
	{
      let val_name = document.getElementById("name").value;
      let val_email = document.getElementById("email").value;
      let val_subject = document.getElementById("mail_subject").value;
      let val_message = document.getElementById("mail_message").value;
      var obj_data={name:String(val_name), email:String(val_email), sub:String(val_subject), msg:String(val_message)};
      var jsondata = JSON.stringify(obj_data);

      $.ajax({
      	url: "contact form/contact.php",
      	type: "POST",
      	data: "jsonData="+jsondata,
      	success: function(data)
            {
                  alert('NOTE: '+data);
            }
      });
    });