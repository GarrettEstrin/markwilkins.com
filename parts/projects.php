<section class="section section--black mainview projects" id="jsProjects" vs-anchor="jsProjects">
  <div class="container">
    <div class="projects__cont" onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/157377444" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont" onClick="playVideo(this)" data-video='<iframe src="https://player.vimeo.com/video/191757408" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'>
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont">
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont project__cont--mobile">
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont project__cont--mobile">
      <div class="projects__play"></div>
    </div>
    <div class="projects__cont project__cont--mobile">
      <div class="projects__play"></div>
    </div>
  </div>
  <script>
    function playVideo(el){
      let videoLinkEl = el.dataset.video;
      $(el).html(videoLinkEl);
      el.classList.add('projects__cont--noBG');
    }
  </script>
</section>