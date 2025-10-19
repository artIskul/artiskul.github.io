/* 
Author:Art sAntos
Date: 05,2020
Gmail:yelsantos0@gmail.com  
*/


<script>
  // ---------- NAVIGATION MENU TOGGLE ----------
  let selectElement = (e) => document.querySelector(e);

  selectElement('.open').addEventListener('click', () => {    
      selectElement('.nav-list').classList.add('active');
  });

  selectElement('.close').addEventListener('click', () => {
      selectElement('.nav-list').classList.remove('active');
  });

  selectElement('#close').addEventListener('click', () => {
      selectElement('.nav-list').classList.remove('active');
  });


  // ---------- FILTER FUNCTION ----------
  filterSelection("all");
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    
    // Default case: only show elements with 'default-show'
    if (c == "all") {
      for (i = 0; i < x.length; i++) {
        if (x[i].classList.contains("default-show")) {
          w3AddClass(x[i], "show");
        } else {
          w3RemoveClass(x[i], "show");
        }
      }
      return;
    }

    // Category filter
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }


  // ---------- ACTIVE CLASS TO BUTTON ----------
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      if (current.length > 0) {
        current[0].className = current[0].className.replace(" active", "");
      }
      this.className += " active";
    });
  }


  // ---------- BAR CHART ANIMATION ----------
  setTimeout(function start (){
    $('.bar').each(function(i){  
      var $bar = $(this);
      $(this).append('<span class="count"></span>')
      setTimeout(function(){
        $bar.css('width', $bar.attr('data-percent'));      
      }, i*100);
    });

    $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).parent('.bar').attr('data-percent')
      }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now) +'%');
          }
      });
    });
  }, 500);
</script>



// Script fro submit button alternative of PHP
// function sendEmail(){
//   var name = $("#name");
//   var email = $("#email");
//   var subject = $("#subject");
//   var body = $("#body");

//   if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
//     $.ajax({
//       url: 'contact.php',
//       method: 'post',
//       dataType: 'json',
//       data:{
//         name: name.val(),
//         email: email.val(),
//         subject: subject.val(),
//         body: body.val()
//       }, success: function(response){
//         $('#myForm')[0].reset();
//         $('.sent-notification').text("Message sent successfully.");
//       }
//     });
//   }
// }
// function isNotEmpty(caller){
//   if(caller.val() == ""){
//     caller.css('border','1px solid red');
//     return false;
//   }
//   else
//   {
//     caller.css('border', '');
//     return true;
//   }

// }
