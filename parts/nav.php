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
        <div class="nav__links hidden" id="jsNavLinks">
          <li class="nav__item" data-link="1">Home</li>
          <li class="nav__item" data-link="2">About</li>
          <li class="nav__item" data-link="3">Projects</li>
          <li class="nav__item" data-link="4">Contact</li>
          <li class="nav__item" data-link="5">Friends</li>
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
      setTimeout(() => {
        $('#jsNavLinks').addClass('hidden');
      }, 500);
    } else {
      $('#jsNavLinks').removeClass('hidden');
      this.classList.add('open');
      setTimeout(() => {
        this.parentElement.classList.add('nav__bar--open');
      }, 100);
    }
  })
  $('.nav__item').on('click', function(){
    if(this.dataset.link !== undefined){
      $.scrollify.move(this.dataset.link - 1);
    }
  })
</script>