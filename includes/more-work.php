<?php $projects   = getMoreWork($project);?>

<!-- Work Begin -->
<section class="section section--more-work">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
        <div class="heading heading--work">
          <h1 class="heading__title">More Work</h1>
          <h6 class="heading__subtitle">
            A showcase of design, <br class="hidden-xs-down"/>
            development and experiments
          </h6>
        </div>

        <div class="row-thin row">
          <?php foreach($projects as $project) : ?>
            <div class="col-xs-12 col-sm-4">
              <?php include_once('includes/'.$project.'/project.php');?>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Work End -->
