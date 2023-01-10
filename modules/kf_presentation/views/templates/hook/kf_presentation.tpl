<!-- Block kf_presentation -->



{* Template de module *}
<div id="kf_presentation_block_home" class='container block '>

  <div class="row">
    <div>
      <h2 class="center mb-2">
        {$titre nofilter}
      </h2>
      <div class="mb-2">
        <strong class="dark">
          {$soustitre nofilter}
        </strong>
      </div>
    </div>
    <div>
      <div class="col-md-7 mt-3">
        <div>
          <div>
            <div>{$contenu1 nofilter}</div>
    
            <div class="mt-2 mb-1">{$contenu2 nofilter}</div>
          </div>
          <div class='text-center'>
          {* Bouton vers une eventuelle page qui sommes-nous *}
            {* <a href="{url entity='cms' id=2}" class="mb-2 mt-2 col-md-4 col-sm-12 module-button btn btn-primary center">En
              Savoir
              plus</a> *}
          </div>
        </div>
      </div>
      <div class="module-image col-md-5 mt-1">
        <img src="{$image}" alt="{$imagedesc}" class="img-fluid">
      </div>
    </div>
  </div>


</div>