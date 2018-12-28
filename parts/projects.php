<section class="section section--black mainview projects" id="jsProjects" vs-anchor="jsProjects">
  <div class="container">
    <div class="projects__cont" onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/157377444" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont" onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/191757408" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont" onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/157370850" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont project__cont--mobile"  onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/146453353" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont project__cont--mobile"  onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/191757408" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont project__cont--mobile"  onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/191757408" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
  </div>
  <script>
    function closeMenu(el){
      el.classList.remove('open');
        el.parentElement.classList.remove('nav__bar--open');
        setTimeout(() => {
          $('#jsNavLinks').addClass('hidden');
        }, 500);
    }
    function playVideo(el){
      let videoLinkEl = el.dataset.video;
      $('#jsModal').removeClass('hidden');
      $('#jsVideoCont').html(videoLinkEl);
      let menu = document.getElementById('jsClose');
      closeMenu(menu);
    }
  </script>
  <?php include 'projects-modal.php'; ?>
</section>