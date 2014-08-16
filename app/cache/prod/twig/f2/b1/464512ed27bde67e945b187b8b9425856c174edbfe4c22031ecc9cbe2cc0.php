<?php

/* MyAppEspritBundle:Article:show.html.twig */
class __TwigTemplate_f2b1464512ed27bde67e945b187b8b9425856c174edbfe4c22031ecc9cbe2cc0 extends Twig_Template
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
 <title> </title>
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2>  </h2>
<center ><div style=\"height:150px;width:655px;border:0px solid #ccc;font:10px/15px Georgia, Garamond, Serif;overflow:auto;\">
    ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["article"]) ? $context["article"] : null)) > 0)) {
            // line 15
            echo "<table class=\"bordered\" >
<thead>

    <tr>
        <th>#</th>        
        <th>Texte</th>
        <th>Nom</th>
        <th>Date</th>
       
         <th>Rubrique associé</th>
         <th>Sous Rubrique associé</th>  
        <th>Role associé</th>
         <th>Image</th>
    </tr>
    
</thead>  
        
       ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo "    
     <tr>
         <th>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
                echo "</th> 
         <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "texte"), 20, true, "..."), "html", null, true);
                echo "</td>
         <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nom"), "html", null, true);
                echo "</td>
      <!--  <td>article.date</td>  -->
         <td>   ";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "date"), "d/m/Y"), "html", null, true);
                echo "         </td>
         
         
          <td><p>";
                // line 41
                echo " </p></td>    
           
           
         
         
         
         
         
         ";
                // line 52
                echo "          
             
          
          
          ";
                // line 60
                echo "                 
        
       ";
                // line 62
                if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image")))) {
                    // line 63
                    echo "        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                    echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
                }
                // line 65
                echo "        
        ";
                // line 66
                echo " 
        ";
                // line 67
                if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"))) {
                    // line 68
                    echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                    echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
                }
                // line 70
                echo "               
        <td><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "         ";
        } else {
            // line 76
            echo "                   <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 77
        echo " 
                  
    </tr>            

</table>
  </div> 
</center> </div>
    
 <center><h2><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\" style=\"text-decoration:none\">ajouter article</a></h2></center>
</body>
</html>
 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 76,  118 => 66,  76 => 36,  293 => 215,  262 => 187,  205 => 139,  174 => 113,  157 => 99,  127 => 78,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 255,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 182,  242 => 170,  207 => 151,  200 => 147,  155 => 107,  114 => 85,  58 => 42,  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 92,  267 => 193,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 169,  225 => 78,  197 => 70,  192 => 142,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 106,  146 => 47,  129 => 70,  97 => 52,  84 => 26,  37 => 5,  150 => 65,  139 => 56,  104 => 31,  90 => 41,  81 => 38,  77 => 24,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 239,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 82,  120 => 74,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 120,  379 => 119,  374 => 116,  368 => 264,  365 => 298,  362 => 110,  360 => 259,  355 => 106,  341 => 283,  337 => 282,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 203,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 82,  229 => 73,  220 => 70,  214 => 155,  177 => 114,  169 => 60,  140 => 44,  132 => 71,  128 => 93,  111 => 37,  107 => 62,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 152,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  131 => 52,  119 => 87,  108 => 65,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  79 => 18,  75 => 17,  68 => 34,  56 => 27,  50 => 37,  29 => 3,  87 => 41,  72 => 35,  55 => 16,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 14,  44 => 8,  35 => 5,  31 => 20,  43 => 8,  41 => 10,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 85,  163 => 62,  158 => 67,  156 => 77,  151 => 63,  142 => 98,  138 => 72,  136 => 95,  123 => 68,  121 => 67,  117 => 44,  115 => 65,  105 => 40,  101 => 45,  91 => 27,  69 => 35,  66 => 47,  62 => 30,  49 => 19,  24 => 4,  32 => 9,  25 => 5,  22 => 2,  19 => 1,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 75,  147 => 92,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 49,  109 => 63,  106 => 47,  103 => 60,  99 => 31,  95 => 28,  92 => 29,  86 => 62,  82 => 22,  80 => 25,  73 => 36,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 15,  39 => 6,  36 => 10,  33 => 5,  30 => 7,);
    }
}
