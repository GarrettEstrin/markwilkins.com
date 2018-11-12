<section class="nav nav--white">
  <div class="container">
    <div class="nav__flex">
      <h1 class="nav__title">MARK WILKINS</h1>
      <ul class="nav__bar">
        <li class="nav__item nav__item--x" id="jsClose">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </li>
        <li class="nav__item">Home</li>
        <li class="nav__item">About</li>
        <li class="nav__item">Projects</li>
        <li class="nav__item">Contact</li>
        <li class="nav__item">Friends</li>
      </ul>
    </div>
  </div>
</section>
<script>
  let close = document.getElementById('jsClose');
  close.addEventListener('click', function(){
    if(this.classList.contains('open')){
      this.classList.remove('open');
    } else {
      this.classList.add('open');
    }
  })
</script>