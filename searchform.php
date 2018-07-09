<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
  <div>
    <!--label for="s"><span class="<i class="fa fa-search"></i>"></span></label-->
    <input type="text" placeholder="pesquise aqui..." name="s" id="s" value="<?php the_search_query(); ?>" />
	<button class="seach-box-button"><span class="glyphicon glyphicon-search"></span></button> 
  </div>
</form>