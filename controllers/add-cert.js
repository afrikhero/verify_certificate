$(document).ready(function(){
  //process the form
  $('form').submit(function(event){
    //Process the form using AJAX

    var formData = {
      'name' : $('input[name=name]').val(),
      'email' : $('input[name=id]').val(),
      'course' : $('input[name=course]').val(),
      'date' : $('input[name=date]').val()
    };

    $.ajax({
      type : 'POST',
      url : 'add-cert.php',
      data : formData, //Data is taken from input value array of formData
      datatype : 'json',
      encode : true
    })
      //using the done promise callback in place of success
      .done(function(data){
        //Handle errors and validation messages

        if ( ! data.success) {

        if (data.erorrs.name) {
          $('#name-div').addClass('has-error');
          $('#name-div').append('<div class="help-block">' + data.errors.name + '</div>');
        }

        if (data.errors.id) {
          $('#id-div').addClass('has-error');
          $('#id-div').append('<div class="help-block">' + data.errors.id + '</div>');
        }

        if (data.erorrs.course) {
          $('#course-div').addClass('has-error');
          $('#course-div').append('<div class="help-block">' + data.errors.course + '</div>');

        }

        if (data.errors.date) {
          $('#date-div').addClass('has-error');
          $('#date-div').append('<div class="help-block">' + data.errors.date + '</div>');
        }

        if (data.errors.idExists) {
          $('#course-div').addClass('has-error');
          $('#course-div').append('<div class="help-block">' + data.errors.idExists + '</div>');
        }

      } else{
        //If success output success message!
        $('form').append('<div class="alert alert-success">' + data.message + '</div>');
        alert('success');
      }


      })
      //Using the fail promise
        .fail(function(data){
          console.log(data);
          //log any server error
        });

        event.preventDefault();

  });

});
