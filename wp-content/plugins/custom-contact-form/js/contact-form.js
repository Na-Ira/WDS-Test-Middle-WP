function submit_contact_form() {
  var fd = new FormData();
  fd.append("formContactSubmit", "1");
  fd.append("name", $("#your_name").val());
  fd.append("email", $("#your_email").val());
  fd.append("comments", $("#your_message").val());
  js_submit(fd, submit_contact_form_callback);
}

function submit_contact_form_callback(data) {

  var jdata = JSON.parse(data);

  if (jdata.success == 1) {

    var mess = jdata.message;

    $("#response_sub").html(mess);
    $("#response_sub").css("display", "block");
  } 
  else if (jdata.success == 0) {
   $("#response_sub").css("display", "none");
  }
}

function js_submit(fd, callback) {
  var submitUrl = "https://nastmobile.com/web-test/wp-content/plugins/custom-contact-form/process/";

  $.ajax({
    url: submitUrl,
    type: "post",
    data: fd,
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      callback(response);
    },
  });
}
