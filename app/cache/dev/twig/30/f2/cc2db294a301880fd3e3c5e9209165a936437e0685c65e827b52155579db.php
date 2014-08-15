<?php

/* MyAppEspritBundle:Actualite:show.html.twig */
class __TwigTemplate_30f2cc2db294a301880fd3e3c5e9209165a936437e0685c65e827b52155579db extends Twig_Template
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
        echo " 
<!DOCTYPE html>
<html>
<head>
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    <title>Liste Actualités</title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<center ><div style=\"height:150px;width:655px;border:0px solid #ccc;font:10px/15px Georgia, Garamond, Serif;overflow:auto;\">
       ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite"))) > 0)) {
            // line 15
            echo "<table class=\"bordered\" >
    
     
    <thead>
      
    <tr>
        <th>#</th>        
        <th>Titre</th>
        <th>Date Insertion</th>
        <th>Description</th>
        <th>Utilisateur associé</th>
        <th>Image</th>
        
    
    </tr>
    </thead>
    
       ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")));
            foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
                echo "  
       
     <tr>
        <th>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"), "html", null, true);
                echo "</th> 
        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "titre"), "html", null, true);
                echo "</td>
        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "dateinsertion"), "d/m/Y"), "html", null, true);
                echo "</td> <!-- date ici pas converti -->
        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "description"), 20, true, "..."), "html", null, true);
                echo "</td>
       <td><b>No  </b>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "utilisateur"), "id"), "html", null, true);
                echo "</td>
       
       ";
                // line 41
                if ((!(null === $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image")))) {
                    // line 42
                    echo "        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"), "html", null, true);
                    echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
                }
                // line 44
                echo "        
        ";
                // line 45
                echo " 
        ";
                // line 46
                if ((null === $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"))) {
                    // line 47
                    echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"), "html", null, true);
                    echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
                }
                // line 49
                echo "                      
        <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_delete", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_edit", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "         ";
        } else {
            // line 55
            echo "                   <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 56
        echo " 
    </tr>        
    
 

</table>
  </div> 
</center> </div>
     
   <center><h2><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\" style=\"text-decoration:none\">ajouter actualité</a></h2></center>  

</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Actualite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  104 => 46,  90 => 41,  81 => 38,  77 => 37,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 239,  222 => 188,  206 => 144,  190 => 131,  161 => 106,  134 => 85,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 339,  423 => 142,  413 => 328,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 298,  362 => 110,  360 => 109,  355 => 106,  341 => 283,  337 => 282,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 88,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 54,  128 => 97,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  75 => 17,  68 => 14,  56 => 27,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 51,  117 => 44,  105 => 40,  91 => 27,  62 => 30,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 209,  157 => 56,  145 => 46,  139 => 56,  131 => 52,  123 => 47,  120 => 74,  115 => 50,  111 => 37,  108 => 65,  101 => 45,  98 => 44,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 10,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 36,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 15,  39 => 11,  36 => 10,  33 => 8,  30 => 7,);
    }
}
