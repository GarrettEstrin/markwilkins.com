<section class="nav" id="jsNavBar">
  <div class="container">
    <div class="nav__flex">
      <h1 class="nav__title">MARK WILKINS</h1>
      <ul class="nav__bar">
        <li class="nav__item nav__item--x" id="jsClose">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </li>
        <div class="nav__links">
          <li class="nav__item" data-link="jsHome">Home</li>
          <li class="nav__item" data-link="jsAbout">About</li>
          <li class="nav__item" data-link="jsProjects">Projects</li>
          <li class="nav__item" data-link="jsContact">Contact</li>
          <li class="nav__item" data-link="jsFriends">Friends</li>
        </div>
      </ul>
    </div>
  </div>
</section>
<script>
  let close = document.getElementById('jsClose');
  close.addEventListener('click', function(){
    if(this.classList.contains('open')){
      this.classList.remove('open');
      this.parentElement.classList.remove('nav__bar--open');
    } else {
      this.classList.add('open');
      this.parentElement.classList.add('nav__bar--open');
    }
  })
  $('.nav__item').on('click', function(){
    if(this.dataset.link !== undefined){
      $('html, body').animate({
        scrollTop: $("#" + this.dataset.link).offset().top
    }, 1000);
    }
  })
</script>