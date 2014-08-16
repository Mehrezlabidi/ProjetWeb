<?php

/* MyAppEspritBundle:Default:administration.html.twig */
class __TwigTemplate_94af52bf5fbda965b01a4a4dd3a56217131982ee23a2bb290279be3642470ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
<title>Administration</title>
 
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
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
        // line 94
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
        // line 185
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
        // line 206
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
        // line 235
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">  
  <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/nav/nav_myaccount.gif"), "html", null, true);
        echo "\" width=\"93\" height=\"14\" alt=\"\" />
    </a>                    
                        </div>
\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t       <div class=\"showhide-account\">
      <a href=\"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">                          
  <img src=\"";
        // line 242
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
        // line 275
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_show");
        echo "\"><b>Menu</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 279
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\">ajout un menu</a></li>
\t\t\t\t<li><a href=\"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_show");
        echo "\">afficher liste des menus</a></li>
\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

  <ul class=\"select\"><li><a href=\"";
        // line 290
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_show");
        echo "\"><b>Rubrique</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub show\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 294
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo "\">ajouter une rubrique</a></li>
\t\t\t\t<li><a href=\"";
        // line 295
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_show");
        echo "\">afficher liste des rubriques</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 305
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_show");
        echo "\"><b>Sous Rubrique</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 309
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "\">ajouter une Sous rubrique</a></li>
\t\t\t\t<li><a href=\"";
        // line 310
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_show");
        echo "\">afficher liste des sous rubriques</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 320
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_show");
        echo "\"><b>Article</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 324
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\">ajouter un article</a></li>
\t\t\t\t<li><a href=\"";
        // line 325
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_show");
        echo "\">afficher liste des articles</a></li>

                                
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 336
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_show");
        echo "\"><b>Actualit&eacute; </b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 340
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\">ajouter  une actualit&eacute;</a></li>
\t\t\t\t<li><a href=\"";
        // line 341
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
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"  />                  
                </th>
\t\t<th class=\"topleft\"></th>
\t\t<td id=\"tbl-border-top\">&nbsp;</td>
\t\t<th class=\"topright\"></th>
\t\t<th rowspan=\"3\" class=\"sized\">
                   
        <img src=\"";
        // line 385
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
\t\t\t<h3>Esprit</h3>
Un système de gestion de contenu ou SGC (Content Management System ou CMS) est une famille de logiciels destinés à la conception et à la mise à jour dynamique de sites Web 
ou d'applications multimédia.<br/>Ils partagent les fonctionnalités suivantes : 
\t\t\t<br />
\t\t\t<br />
 <li>ils permettent à plusieurs individus de travailler sur un même document  </li>
 <li>ils fournissent une chaîne de publication (workflow) offrant par exemple la possibilité de mettre en ligne le contenu des documents </li>
\t\t\t<br />
\t\t\t<br />
<li>ils permettent de séparer les opérations de gestion de la forme et du contenu </li>
<li>ils permettent de structurer le contenu (utilisation de FAQ, de documents, de blogs, de forums de discussion, etc.)</li>
                        <br />
\t\t\t<br />
<li>ils permettent de hiérarchiser les utilisateurs et de leur attribuer des rôles et des permissions (utilisateur anonyme, administrateur, contributeur, etc.) </li>
<li> certains SGC incluent la gestion de versions.</li>\t\t 


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

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Default:administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 378,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  346 => 290,  333 => 280,  329 => 279,  286 => 242,  270 => 235,  70 => 25,  65 => 22,  152 => 76,  118 => 66,  76 => 36,  293 => 215,  262 => 187,  205 => 139,  174 => 113,  157 => 99,  127 => 78,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 182,  242 => 170,  207 => 151,  200 => 147,  155 => 107,  114 => 85,  58 => 42,  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 236,  267 => 193,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 169,  225 => 78,  197 => 70,  192 => 142,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 106,  146 => 47,  129 => 70,  97 => 52,  84 => 26,  37 => 5,  150 => 65,  139 => 56,  104 => 31,  90 => 41,  81 => 38,  77 => 24,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 82,  120 => 94,  100 => 60,  53 => 19,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 116,  368 => 264,  365 => 298,  362 => 110,  360 => 259,  355 => 106,  341 => 283,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 203,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 82,  229 => 73,  220 => 70,  214 => 185,  177 => 114,  169 => 60,  140 => 44,  132 => 71,  128 => 93,  111 => 37,  107 => 62,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 88,  240 => 86,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 152,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  131 => 52,  119 => 87,  108 => 65,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 21,  47 => 9,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  79 => 18,  75 => 17,  68 => 34,  56 => 20,  50 => 18,  29 => 3,  87 => 41,  72 => 35,  55 => 16,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 14,  44 => 8,  35 => 10,  31 => 8,  43 => 8,  41 => 10,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 85,  163 => 62,  158 => 67,  156 => 77,  151 => 63,  142 => 98,  138 => 72,  136 => 95,  123 => 68,  121 => 67,  117 => 44,  115 => 65,  105 => 40,  101 => 45,  91 => 27,  69 => 35,  66 => 47,  62 => 30,  49 => 19,  24 => 4,  32 => 9,  25 => 5,  22 => 2,  19 => 1,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 75,  147 => 92,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 49,  109 => 63,  106 => 47,  103 => 60,  99 => 31,  95 => 28,  92 => 29,  86 => 62,  82 => 22,  80 => 25,  73 => 36,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 17,  45 => 8,  42 => 15,  39 => 11,  36 => 10,  33 => 5,  30 => 7,);
    }
}
