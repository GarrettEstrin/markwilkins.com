<section class="section section--white about mainview about" id="jsAbout" vs-anchor="jsAbout">
  <div class="container">
    <div class="about__content--cont">
      <p class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem veniam impedit nam repudiandae repellendus quam, dolor, ad eaque dicta assumenda hic tenetur, eius necessitatibus perferendis doloribus veritatis id quas? Incidunt.
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo repellat, rem ad asperiores recusandae doloribus quaerat atque quidem optio sequi velit, sunt, dolorum explicabo. Quam praesentium repudiandae eveniet maxime voluptatibus.
      </p>
    </div>
    <div class="about__content--cont">
      <img src="/dist/assets/img/2_About/about_photo.jpeg" alt="" id="jsAboutImg">
    </div>
  </div>
</section>
<script>
  let aboutImg = document.getElementById('jsAboutImg');
  aboutImg.addEventListener('mouseover', function(){
    aboutImg.src = '/dist/assets/img/2_About/about_photo.gif';
  })
  aboutImg.addEventListener('mouseout', function(){
    aboutImg.src = '/dist/assets/img/2_About/about_photo.jpeg';
  })
</script>