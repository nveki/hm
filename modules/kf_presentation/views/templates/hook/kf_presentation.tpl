<!-- Block kf_presentation -->



{* Template de module *}
<div id="kf_presentation_block_home" class='container, block row'>

  <h2 class="center mb-2">
  {$titre nofilter}
  </h2>

  <div class="mb-2"><strong class="dark">
  {$soustitre nofilter}
  </strong></div>

  <div class="col-md-7 mt-2">
    <div>

    {$contenu}
   

    <a href="{url entity='cms' id=4}" class="mb-2 mt-2 col-md-4 col-sm-12 module-button btn btn-primary text-center">En Savoir
        plus</a>
    </div>
  </div>
  <div class="module-image col-md-5">
    {* <img src="{$module_dir}img/cabane-heart-mq.png" alt="Le coeur de la cabane" class="img-fluid"> *}
  </div>
 
</div>

