document.querySelectorAll('a.qty-minus').addEventListener('click', function(e) {
    console.log("Button Hit");
          e.preventDefault();
          var $this = $(this);
          var $input = $this.closest('input').find('input');
          var value = parseInt($input.val());
      
          if (value > 1) {
              value = value - 1;
          } else {
              value = 0;
          }
      
      $input.val(value);
          
      });
  
document.querySelectorAll('a.qty-plus').addEventListener('click', function(e) {
          e.preventDefault();
          var $this = $(this);
          var $input = $this.closest('div').find('input');
          var value = parseInt($input.val());
  
          if (value < 100) {
          value = value + 1;
          } else {
              value =100;
          }
  
          $input.val(value);
      });
  
  // RESTRICT INPUTS TO NUMBERS ONLY WITH A MIN OF 0 AND A MAX 100
  document.querySelectorAll('input').addEventListener('blur', function(){
  
      var input = $(this);
      var value = parseInt($(this).val());
  
          if (value < 0 || isNaN(value)) {
              input.val(0);
          } else if
              (value > 100) {
              input.val(100);
          }
  });
  