$(document).ready(function () {
  $('#registrationForm').on('submit', function (event) {
      let isValid = true;

      // Basic validation checks
      if ($('#name').val().trim() === '') {
          alert('Name is required');
          isValid = false;
      }

      if ($('#email').val().trim() === '') {
          alert('Email is required');
          isValid = false;
      }

      if ($('#phone').val().trim().length !== 10) {
          alert('Phone number must be 10 digits');
          isValid = false;
      }

      // Prevent form submission if validation fails
      if (!isValid) {
          event.preventDefault();
      }
  });
});
