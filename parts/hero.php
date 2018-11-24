<section class="hero section section--black mainview" id="jsHome" vs-anchor="jsHome">
  <div class="container">
    <p class="hero__title" id="jsTitle">Content Producer</p>
    <p class="hero__subtitle">Empower. Create. Cultivate.</p>
  </div>
</section>

<script>
  function runTextAnimation(frameArray, location, framerate){
    let i = 0, k = 0;
    let interval = setInterval(function(){
      if(k < frameArray.length){
        if(i < frameArray[k].frames){
          location.innerText = frameArray[k].content;
          i++
        } else {
          i = 0;
          k++
        }
      } else {
        k = 0;
      }
    }, 1000/framerate)
  }

  var frameArray = [
    {content: 'Content Producer', frames: 22},
    {content: 'Cotent Producer', frames: 2},
    {content: 'Cotedt Producer', frames: 2},
    {content: 'vtedt Eodeor', frames: 3},
    {content: 'vtdt Eodeor', frames: 2},
    {content: 'vitedt Eodeor', frames: 3},
    {content: 'vted Eodeor', frames: 2},
    {content: 'vted Eodeor', frames: 3},
    {content: 'vte*b Eodeor', frames: 2},
    {content: 'vte Eodeor', frames: 2},
    {content: 'vteo Eodeor', frames: 3},
    {content: 'vdeo Eodeor', frames: 2},
    {content: 'vibdeo Eodeor', frames: 3},
    {content: 'Video Edeor', frames: 3},
    {content: 'ideo Edeor', frames: 2},
    {content: 'ideo Edior', frames: 2},
    {content: 'ideo Editor', frames: 2},
    {content: 'Video Editor', frames: 2},
    {content: 'Vieo Ed^tor', frames: 3},
    {content: 'ieo E^tor', frames: 3},
    {content: 'Cideon Eator', frames: 2},
    {content: 'Cdon, Eator', frames: 2},
    {content: 'Crdon Eator', frames: 3},
    {content: 'Crodon CEator', frames: 2},
    {content: 'Crdon CrEator', frames: 3},
    {content: 'Conton CrEator', frames: 2},
    {content: 'Content CrEator', frames: 2},
    {content: 'Content Creator', frames: 53},
    {content: 'Cotent C}irtor', frames: 3},
    {content: 'Cotent }irtor', frames: 3},
    {content: 'Ctent }iretor', frames: 2},
    {content: 'tent }iretor', frames: 2},
    {content: 'tnt }iretor', frames: 2},
    {content: 'tnt }irector', frames: 3},
    {content: 'tmt }irector', frames: 2},
    {content: 'imt }irector', frames: 3},
    {content: 'Fimt }irector', frames: 3},
    {content: 'Fimt irector', frames: 2},
    {content: 'FiLmt irector', frames: 2},
    {content: 'FiLm irector', frames: 3},
    {content: 'FiLm Director', frames: 2},
    {content: 'Fim Director', frames: 3},
    {content: 'Film Director', frames: 52},
    {content: 'Film Drector', frames: 2},
    {content: 'Fil* Shrector', frames: 2},
    {content: 'il* Shrector', frames: 2},
    {content: 'il* Shretor', frames: 3},
    {content: 'i* Shredtor', frames: 3},
    {content: 'i* Shreditor', frames: 3},
    {content: 'i Shreditor!', frames: 2},
    {content: 'Shreditor!', frames: 10},
    {content: 'Shreditr!', frames: 3},
    {content: 'Sreditr!', frames: 2},
    {content: 'Sreitr!', frames: 3},
    {content: 'Sretr!', frames: 3},
    {content: 'STretr!', frames: 5},
    {content: 'STOretr!', frames: 2},
    {content: 'STOrtr!', frames: 3},
    {content: 'STOryr!', frames: 2},
    {content: 'STOrytr!', frames: 3},
    {content: 'STOryter!', frames: 2},
    {content: 'StOryter!', frames: 3},
    {content: 'StOrytelr!', frames: 2},
    {content: 'StOrytellr!', frames: 3},
    {content: 'StOryteller!', frames: 3},
    {content: 'StOryteller', frames: 2},
    {content: 'Stryteller', frames: 3},
    {content: 'Storyteller', frames: 60},
    {content: 'Soryteller', frames: 2},
    {content: 'oryteller', frames: 3},
    {content: 'Coryteller', frames: 2},
    {content: 'Corteller', frames: 3},
    {content: 'Contreller', frames: 2},
    {content: 'Conteller', frames: 3},
    {content: 'Conte ller', frames: 3},
    {content: 'Conte ler', frames: 3},
    {content: 'Conte lPer', frames: 3},
    {content: 'Conte Per', frames: 3},
    {content: 'Conte Prer', frames: 2},
    {content: 'Contet Prer', frames: 2},
    {content: 'Content Prer', frames: 3},
    {content: 'Content Prder', frames: 3},
    {content: 'Content Proder', frames: 2},
    {content: 'Content Prodcer', frames: 2},
    {content: 'Content Producer', frames: 15}
  ]
  let title = document.getElementById('jsTitle');
  runTextAnimation(frameArray, title, 23.98);
</script>