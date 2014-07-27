<?php

/* MyAppEspritBundle:Default:template.html.twig */
class __TwigTemplate_4e1c780e6a871740d6b461ff7ce183d023e107216c36591557982a816077a158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ajout_menu' => array($this, 'block_ajout_menu'),
            'ajout_rubrique' => array($this, 'block_ajout_rubrique'),
            'ajout_sousrubrique' => array($this, 'block_ajout_sousrubrique'),
            'ajout_role' => array($this, 'block_ajout_role'),
            'ajout_article' => array($this, 'block_ajout_article'),
            'ajout_actualite' => array($this, 'block_ajout_actualite'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
<title>Administration</title>
 
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/screen.css"), "html", null, true);
        echo "\"/> 
<!--[if IE]>
<link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"css/pro_dropline_ie.css\" />
<![endif]-->

<!--  jquery core -->
<script src=\"js/jquery/jquery-1.4.1.min.js\" type=\"text/javascript\"></script>

<!--  checkbox styling script -->
<script src=\"js/jquery/ui.core.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/ui.checkbox.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/jquery.bind.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(function(){
\t\$('input').checkBox();
\t\$('#toggle-all').click(function(){
 \t\$('#toggle-all').toggleClass('toggle-checked');
\t\$('#mainform input[type=checkbox]').checkBox('toggle');
\treturn false;
\t});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src=\"js/jquery/jquery.selectbox-0.5.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect').selectbox({ inputClass: \"selectbox_styled\" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src=\"js/jquery/jquery.selectbox-0.5_style_2.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect_form_1').selectbox({ inputClass: \"styledselect_form_1\" });
\t\$('.styledselect_form_2').selectbox({ inputClass: \"styledselect_form_2\" });
});
</script>

<!--  styled select box script version 3 --> 
<script src=\"js/jquery/jquery.selectbox-0.5_style_2.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect_pages').selectbox({ inputClass: \"styledselect_pages\" });
});
</script>

<!--  styled file upload script --> 
<script src=\"js/jquery/jquery.filestyle.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
  \$(function() {
      \$(\"input.file_1\").filestyle({ 
          image: \"images/forms/choose-file.gif\",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src=\"js/jquery/custom_jquery.js\" type=\"text/javascript\"></script>
 
<!-- Tooltips -->
<script src=\"js/jquery/jquery.tooltip.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/jquery.dimensions.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(function() {
\t\$('a.info-tooltip ').tooltip({
\t\ttrack: true,
\t\tdelay: 0,
\t\tfixPNG: true, 
\t\tshowURL: false,
\t\tshowBody: \" - \",
\t\ttop: -35,
\t\tleft: 5
\t});
});
</script> 

 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/datePicker.css"), "html", null, true);
        echo "\"/> 
<!--  date picker script -->
 
<script src=\"js/jquery/date.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/jquery.datePicker.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
        \$(function()
{

// initialise the \"Select date\" link
\$('#date-pick')
\t.datePicker(
\t\t// associate the link with a date picker
\t\t{
\t\t\tcreateButton:false,
\t\t\tstartDate:'01/01/2005',
\t\t\tendDate:'31/12/2020'
\t\t}
\t).bind(
\t\t// when the link is clicked display the date picker
\t\t'click',
\t\tfunction()
\t\t{
\t\t\tupdateSelects(\$(this).dpGetSelected()[0]);
\t\t\t\$(this).dpDisplay();
\t\t\treturn false;
\t\t}
\t).bind(
\t\t// when a date is selected update the SELECTs
\t\t'dateSelected',
\t\tfunction(e, selectedDate, \$td, state)
\t\t{
\t\t\tupdateSelects(selectedDate);
\t\t}
\t).bind(
\t\t'dpClosed',
\t\tfunction(e, selected)
\t\t{
\t\t\tupdateSelects(selected[0]);
\t\t}
\t);

var updateSelects = function (selectedDate)
{
\tvar selectedDate = new Date(selectedDate);
\t\$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
\t\$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
\t\$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
\$('#d, #m, #y')
\t.bind(
\t\t'change',
\t\tfunction()
\t\t{
\t\t\tvar d = new Date(
\t\t\t\t\t\t\$('#y').val(),
\t\t\t\t\t\t\$('#m').val()-1,
\t\t\t\t\t\t\$('#d').val()
\t\t\t\t\t);
\t\t\t\$('#date-pick').dpSetSelected(d.asString());
\t\t}
\t);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
\$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src=\"js/jquery/jquery.pngFix.pack.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
\$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id=\"page-top-outer\">    

<!-- Start: page-top -->
<div id=\"page-top\">

\t<!-- start logo -->
\t<div id=\"logo\">
\t<a href=\"\">
       <!--  <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/logo.png"), "html", null, true);
        echo "\" width=\"156\" height=\"40\" alt=\"\" />  -->
            </a>
\t</div>
\t<!-- end logo -->

\t<!--  start top-search -->
\t<div id=\"top-search\">
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t<td><input type=\"text\" value=\"Search\" onblur=\"if (this.value=='') { this.value='Search'; }\" onfocus=\"if (this.value=='Search') { this.value=''; }\" class=\"top-search-inp\" /></td>
\t\t<td>
\t\t<select  class=\"styledselect\">
\t\t\t<option value=\"\"> Menu</option>
\t\t\t<option value=\"\"> Rubrique</option>
\t\t\t<option value=\"\"> Sous Rubrique</option>
\t\t\t<option value=\"\">Actualite</option>
\t\t\t<option value=\"\">Article</option>
                        <option value=\"\">Role</option>
\t\t</select> 
\t\t</td>
\t\t<td>
 <input type=\"image\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/top_search_btn.gif"), "html", null, true);
        echo "\"  />                   

\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
 \t<!--  end top-search -->
 \t<div class=\"clear\"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->

<div class=\"clear\">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class=\"nav-outer-repeat\"> 
<!--  start nav-outer -->
<div class=\"nav-outer\"> 

\t\t<!-- start nav-right -->
\t\t<div id=\"nav-right\">

\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t\t<div class=\"showhide-account\">
                            
  
  <a href=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">  
  <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/nav/nav_myaccount.gif"), "html", null, true);
        echo "\" width=\"93\" height=\"14\" alt=\"\" />
    </a>                    
                        </div>
\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t       <div class=\"showhide-account\">
      <a href=\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">                          
  <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/nav/nav_logout.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"14\" alt=\"\"  />                       
       </a>                       
                        </div>
\t\t\t<div class=\"clear\">&nbsp;</div>

\t\t\t<!--  start account-content -->\t
\t\t\t<div class=\"account-content\">
\t\t\t<div class=\"account-drop-inner\">
\t\t\t\t<a href=\"\" id=\"acc-settings\">Settings</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-details\">Personal details </a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-project\">Project details</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-inbox\">Inbox</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-stats\">Statistics</a> 
\t\t\t</div>
\t\t\t</div>
\t\t\t<!--  end account-content -->

\t\t</div>
\t\t<!-- end nav-right -->


\t\t<!--  start nav -->
\t\t<div class=\"nav\">
\t\t<div class=\"table\">

 <ul class=\"select\"><li><a href=\"";
        // line 278
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_show");
        echo "\"><b>Menu</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 282
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\">ajout un menu</a></li>
\t\t\t\t<li><a href=\"";
        // line 283
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_show");
        echo "\">afficher liste des menus</a></li>
\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

  <ul class=\"current\"><li><a href=\"";
        // line 293
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_show");
        echo "\"><b>Rubrique</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub show\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 297
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo "\">ajouter une rubrique</a></li>
\t\t\t\t<li><a href=\"";
        // line 298
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_show");
        echo "\">afficher liste des rubriques</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 308
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_show");
        echo "\"><b>Sous Rubrique</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 312
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "\">ajouter une Sous rubrique</a></li>
\t\t\t\t<li><a href=\"";
        // line 313
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_show");
        echo "\">afficher liste des sous rubriques</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 323
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_show");
        echo "\"><b>Article</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 327
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\">ajouter un article</a></li>
\t\t\t\t<li><a href=\"";
        // line 328
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_show");
        echo "\">afficher liste des articles</a></li>

                                
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_show");
        echo "\"><b>Actualit&eacute; </b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 343
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\">ajouter  une actualit&eacute;</a></li>
\t\t\t\t<li><a href=\"";
        // line 344
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_show");
        echo "\">afficher liste des actualit&eacute;s</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<!--  start nav -->

</div>
<div class=\"clear\"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class=\"clear\"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id=\"content-outer\">
<!-- start content -->
<div id=\"content\">

\t<!--  start page-heading -->
\t<div id=\"page-heading\">
\t\t<h1>Private CMS</h1>
\t</div>
\t<!-- end page-heading -->

\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
\t<tr>
\t\t<th rowspan=\"3\" class=\"sized\">
                   
  <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"  />                  
                </th>
\t\t<th class=\"topleft\"></th>
\t\t<td id=\"tbl-border-top\">&nbsp;</td>
\t\t<th class=\"topright\"></th>
\t\t<th rowspan=\"3\" class=\"sized\">
                   
        <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"  />           
                </th>
\t</tr>
\t<tr>
\t\t<td id=\"tbl-border-left\"></td>
\t\t<td>
\t\t<!--  start content-table-inner ...................................................................... START -->
\t\t<div id=\"content-table-inner\">

\t\t\t<!--  start table-content  -->
\t\t\t<div id=\"table-content\">
\t\t\t <!-- <h2>Sub Heading </h2> -->
 \t 
                           ";
        // line 402
        echo "                          ";
        $this->displayBlock('ajout_menu', $context, $blocks);
        // line 403
        echo "                          ";
        $this->displayBlock('ajout_rubrique', $context, $blocks);
        // line 404
        echo "                          ";
        $this->displayBlock('ajout_sousrubrique', $context, $blocks);
        // line 405
        echo "                          ";
        $this->displayBlock('ajout_role', $context, $blocks);
        // line 406
        echo "                          ";
        $this->displayBlock('ajout_article', $context, $blocks);
        // line 407
        echo "                          ";
        $this->displayBlock('ajout_actualite', $context, $blocks);
        // line 408
        echo "                   
                         
\t\t\t</div>
\t\t\t<!--  end table-content  -->

\t\t\t<div class=\"clear\"></div>

\t\t</div>
\t\t<!--  end content-table-inner ............................................END  -->
\t\t</td>
\t\t<td id=\"tbl-border-right\"></td>
\t</tr>
\t<tr>
\t\t<th class=\"sized bottomleft\"></th>
\t\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t\t<th class=\"sized bottomright\"></th>
\t</tr>
\t</table>
\t<div class=\"clear\">&nbsp;</div>

</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class=\"clear\">&nbsp;</div>
    
<!-- start footer -->         
<div id=\"footer\">
<!-- <div id=\"footer-pad\">&nbsp;</div> -->
\t<!--  start footer-left -->
\t<div id=\"footer-left\">
\tAdmin Skin &copy; Copyright Internet Dreams Ltd. <a href=\"\">www.netdreams.co.uk</a>. All rights reserved.</div>
\t<!--  end footer-left -->
\t<div class=\"clear\">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>";
    }

    // line 402
    public function block_ajout_menu($context, array $blocks = array())
    {
    }

    // line 403
    public function block_ajout_rubrique($context, array $blocks = array())
    {
    }

    // line 404
    public function block_ajout_sousrubrique($context, array $blocks = array())
    {
    }

    // line 405
    public function block_ajout_role($context, array $blocks = array())
    {
    }

    // line 406
    public function block_ajout_article($context, array $blocks = array())
    {
    }

    // line 407
    public function block_ajout_actualite($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Default:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 344,  434 => 343,  427 => 339,  413 => 328,  409 => 327,  402 => 323,  389 => 313,  385 => 312,  378 => 308,  365 => 298,  361 => 297,  354 => 293,  341 => 283,  337 => 282,  330 => 278,  294 => 245,  290 => 244,  282 => 239,  278 => 238,  246 => 209,  222 => 188,  128 => 97,  39 => 11,  33 => 8,  25 => 2,);
    }
}
