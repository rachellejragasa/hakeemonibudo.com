<?php get_header(); ?>  

<!-- Biography Section -->
  <div id="biography" class="biography">
    <div class="row">
      <div class="container">
        <div class="col s12 m12 l6 xl6">
          <h5 class="biography__heading"><?php the_field('bio_heading');?></h5>
        </div>
        <div class="col s12 m12 l5 xl5">
          <?php the_field('bio_intro_text');?>
        </div>
      </div>
    </div>
  </div>

<!-- Credidts Section -->
  <div id="credits" class="credits section">
    <div class="row">
      <div class="container">
        <div class="col s12 m12 l3 xl3">
            <h4 class="credits__heading"><?php the_field('credits_heading');?></h4>
        </div>
        <div class="col s12 m12 l9 xl9">
          <div class="credits__section">
              <h5 class="credits__sub-heading"><?php the_field('credits_section_1_heading');?></h5>
              <?php the_field('credits_section_1_text');?>
            </div>

            <div class="credits__section">
              <h5 class="credits__sub-heading"><?php the_field('credits_section_2_heading');?></h5>
              <?php the_field('credits_section_2_text');?>
            </div>
          
            <div class="credits__section">
              <h5 class="credits__sub-heading"><?php the_field('credits_section_3_heading');?></h5>
              <?php the_field('credits_section_3_text');?>
            </div>

            <div class="credits__section">
              <h5 class="credits__sub-heading"><?php the_field('credits_section_4_heading');?></h5>
              <?php the_field('credits_section_4_text');?>
            </div>
            
            <div class="credits__section">
              <h5 class="credits__sub-heading"><?php the_field('credits_section_5_heading');?></h5>
              <?php the_field('credits_section_5_text');?>
            </div>

            <div class="credits__section">
              <h5 class="credits__sub-heading"><?php the_field('credits_section_6_heading');?></h5>
              <?php the_field('credits_section_6_text');?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>    

<!-- Photos Section -->
<div id="photos" class="photos section">
  <div class="row">
    <div class="container">
      <div class="col s12 m12 l3 xl3">
        <h4 class="photos__heading">Photos</h4>
      </div>  
      <?php 
echo do_shortcode('[smartslider3 slider=3]');
?>
    </div>
  </div>
 </div>
</div>

<!-- Videos Section Desktop -->
<div id="videos" class="videos">
  <div class="row">
    <div class="container">
      <div class="col l3 xl3">
        <h4 class="videos__heading">Videos</h4>
      </div>  
      <div class="col l9 xl9 videos__gallery">
        <ul class="videos__gallery">
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/nw-TbTTDeBg?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/cv6d34Hlxlg?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/4Zk7t6zzRWE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/_TOd4RIx7I0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/edgy0kfSEBU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/nXyPTefuZIE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
          <li><iframe width="260" height="160" src="https://www.youtube.com/embed/StM3ua4d3rQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Videos Section Mobile -->
<div id="videos-mob" class="videos-mob">
  <div class="row">
    <div class="container">
      <div class="col s12 m12">
        <h4 class="videos__heading">Videos</h4>
      </div>  
    </div>
  </div>
  <div class="col s12 m12">
    <ul>
      <li>
        <div class="video-container">
          <iframe width="360" height="215" src="https://www.youtube.com/embed/cv6d34Hlxlg?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videos-mob__description">
          <div class="row">
            <div class="container">
              <h6>Move It 2016</h6>  
              <p>Hakeem Onibudo hosts the mainstage at Move It 2016</p>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="video-container">
          <iframe width="360" height="215" src="https://www.youtube.com/embed/4Zk7t6zzRWE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videos-mob__description">
          <div class="row">
            <div class="container">
              <h6>The 20 Year Story</h6>  
              <p>Motivate, Lead and Inspire</p>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="video-container">
          <iframe width="360" height="215" src="https://www.youtube.com/embed/_TOd4RIx7I0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videos-mob__description">
          <div class="row">
            <div class="container">
              <h6>Avengers Premier</h6>  
              <p>Hakeem Onibudo hosting at the Premier of Avengers Movie.</p>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="video-container">
          <iframe width="360" height="215" src="https://www.youtube.com/embed/edgy0kfSEBU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videos-mob__description">
          <div class="row">
            <div class="container">
              <h6>Red Carpet</h6>  
              <p>Hakeem Onibudo hosting at the Red Carpet</p>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="video-container">
          <iframe width="360" height="215" src="https://www.youtube.com/embed/nXyPTefuZIE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videos-mob__description">
          <div class="row">
            <div class="container">
              <h6>Hakeem Onibudo Showreel</h6>  
              <p>Showreel of Hakeem Onibudo's work.</p>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="video-container">
          <iframe width="360" height="215" src="https://www.youtube.com/embed/StM3ua4d3rQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videos-mob__description">
          <div class="row">
            <div class="container">
              <h6>Impact Dance Slippin</h6>  
              <p>Impact Dance performs their piece Slippin at Live Vibe.</p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- Contact Section -->
<div id="contact" class="contact section">
  <div class="row">
    <div class="container">
      <div class="col s12 m12 l3 xl3">
        <h4 class="contact__heading"><?php the_field('contact_heading');?></h4>
      </div>
      <div class="col s12 m12 l9 xl9">
        <h5><i class="fas fa-phone"></i> <?php the_field('contact_number');?></h5>
        <h5><i class="fas fa-envelope"></i><a href="mailto:hakeem@impactdance.co.uk"><?php the_field('contact_email');?></a></h5>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>