<?php

/* MyAppEspritBundle:Default:template.html.twig */
class __TwigTemplate_4e1c780e6a871740d6b461ff7ce183d023e107216c36591557982a816077a158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menuu' => array($this, 'block_menuu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
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

  <ul class=\"current\"><li><a href=\"";
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
          ";
        // line 418
        $this->displayBlock('menuu', $context, $blocks);
        // line 419
        echo "\t\t</div>
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

    // line 418
    public function block_menuu($context, array $blocks = array())
    {
        echo " ";
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
        return array (  556 => 418,  519 => 419,  517 => 418,  481 => 385,  471 => 378,  431 => 341,  427 => 340,  420 => 336,  406 => 325,  402 => 324,  395 => 320,  382 => 310,  378 => 309,  371 => 305,  358 => 295,  354 => 294,  347 => 290,  334 => 280,  330 => 279,  323 => 275,  287 => 242,  283 => 241,  275 => 236,  271 => 235,  239 => 206,  215 => 185,  121 => 94,  32 => 8,  26 => 5,  20 => 1,  120 => 56,  113 => 51,  102 => 48,  96 => 47,  91 => 44,  86 => 39,  81 => 37,  76 => 36,  72 => 34,  69 => 33,  65 => 32,  42 => 12,  37 => 10,  28 => 5,);
    }
}
