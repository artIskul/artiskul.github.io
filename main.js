/* 
Author:Art sAntos
Date: 05,2020
Gmail:yelsantos0@gmail.com  
*/


// Shorthand selector
const select = (e) => document.querySelector(e);

// Navigation toggle
select('.open').addEventListener('click', () => {
  select('.nav-list').classList.add('active');
});

select('.close').addEventListener('click', () => {
  select('.nav-list').classList.remove('active');
});

// Filtering
function filterSelection(category) {
  const items = document.getElementsByClassName("filterDiv");
  const categoryClass = category === "all" ? "" : category;

  Array.from(items).forEach(item => {
    item.classList.remove("show");
    if (item.className.indexOf(categoryClass) > -1) {
      item.classList.add("show");
    }
  });
}

// Active button
const btnContainer = document.getElementById("myBtnContainer");
const btns = btnContainer.getElementsByClassName("btn");

Array.from(btns).forEach(btn => {
  btn.addEventListener("click", function() {
    const current = btnContainer.querySelector(".active");
    if (current) current.classList.remove("active");
    this.classList.add("active");
  });
});

// Skill bar animation
setTimeout(() => {
  $('.bar').each(function(i) {
    const $bar = $(this);
    $bar.append('<span class="count"></span>');
    setTimeout(() => {
      $bar.css('width', $bar.attr('data-percent'));
    }, i * 100);
  });

  $('.count').each(function() {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).parent('.bar').attr('data-percent')
    }, {
      duration: 2000,
      easing: 'swing',
      step: function(now) {
        $(this).text(Math.ceil(now) + '%');
      }
    });
  });
}, 500);
