<?php

/* MyAppEspritBundle:Rubrique:show.html.twig */
class __TwigTemplate_d1ee66589cccf79f1997cdbd28c94e1e0997b7bc0a9bb02a2eb1739d3af7cff6 extends Twig_Template
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
<h2> </h2>
<center >      <div style=\"height:141px;width:545px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
        ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique"))) > 0)) {
            echo "      
<table class=\"bordered\" >
    <thead>

    <tr>
        <th>#</th>              
        <th>Position</th>
        <th>State</th>
        <th>Title</th>
        <th>Menu associé</th>

    </tr>
    </thead>
   
     
       ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
                // line 30
                echo "     <tr>  
       <th>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"), "html", null, true);
                echo "</th> 
      
        <td><b>No  </b>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "position"), "html", null, true);
                echo "</td>
          ";
                // line 34
                if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "state") == 1)) {
                    // line 35
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 37
                    echo "          <td><b>denied</b></td>
          ";
                }
                // line 39
                echo "           <td>";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), 20, true, "..."), "html", null, true);
                echo "</td>
            <td><b>No  </b>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id"), "html", null, true);
                echo "</td>

        <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_delete", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_edit", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
     
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "         ";
        } else {
            // line 47
            echo "           <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 48
        echo " 
    </tr>        
    
 

</table>
    
</div></center>
    </div>
<center><h2><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo " \" style=\"text-decoration:none\">ajouter rubrique</a></h2></center>
</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Rubrique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  118 => 48,  114 => 47,  65 => 31,  152 => 100,  113 => 49,  84 => 39,  70 => 33,  58 => 29,  210 => 148,  126 => 76,  20 => 1,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  333 => 280,  286 => 242,  274 => 236,  167 => 72,  124 => 55,  76 => 35,  287 => 212,  256 => 184,  236 => 167,  215 => 149,  127 => 78,  826 => 533,  820 => 437,  815 => 186,  809 => 110,  803 => 73,  797 => 18,  793 => 17,  789 => 16,  785 => 15,  781 => 14,  777 => 13,  773 => 12,  767 => 9,  763 => 7,  760 => 6,  746 => 534,  744 => 533,  729 => 521,  722 => 517,  692 => 490,  670 => 471,  661 => 465,  652 => 459,  645 => 455,  637 => 450,  629 => 445,  620 => 438,  616 => 437,  613 => 436,  610 => 435,  600 => 428,  590 => 421,  584 => 418,  562 => 402,  554 => 397,  536 => 382,  526 => 375,  509 => 361,  495 => 350,  485 => 343,  470 => 378,  462 => 329,  452 => 322,  429 => 305,  403 => 285,  397 => 282,  390 => 278,  382 => 273,  366 => 263,  359 => 259,  348 => 251,  329 => 279,  313 => 225,  289 => 207,  261 => 187,  259 => 186,  248 => 178,  213 => 155,  198 => 146,  148 => 102,  270 => 235,  262 => 92,  255 => 91,  233 => 80,  226 => 79,  205 => 71,  200 => 69,  192 => 65,  186 => 63,  170 => 59,  153 => 100,  110 => 50,  150 => 62,  104 => 47,  90 => 41,  81 => 38,  77 => 25,  591 => 407,  586 => 406,  581 => 405,  576 => 413,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 339,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 188,  206 => 151,  190 => 131,  161 => 111,  134 => 97,  100 => 43,  53 => 19,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 317,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 142,  413 => 292,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 310,  379 => 119,  374 => 268,  368 => 112,  365 => 298,  362 => 110,  360 => 109,  355 => 106,  341 => 283,  337 => 243,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 213,  294 => 245,  285 => 89,  283 => 88,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 90,  247 => 86,  241 => 176,  229 => 73,  220 => 159,  214 => 185,  177 => 65,  169 => 113,  140 => 55,  132 => 54,  128 => 97,  107 => 45,  61 => 29,  273 => 197,  269 => 94,  254 => 92,  243 => 88,  240 => 176,  238 => 206,  235 => 74,  230 => 166,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 110,  143 => 56,  135 => 47,  119 => 53,  102 => 32,  71 => 20,  67 => 15,  63 => 31,  59 => 24,  38 => 6,  94 => 42,  89 => 40,  85 => 39,  75 => 37,  68 => 34,  56 => 27,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 62,  78 => 21,  46 => 7,  27 => 2,  44 => 12,  31 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 62,  171 => 111,  166 => 71,  163 => 62,  158 => 55,  156 => 66,  151 => 96,  142 => 99,  138 => 98,  136 => 56,  121 => 56,  117 => 40,  105 => 37,  91 => 27,  62 => 30,  49 => 12,  24 => 4,  25 => 5,  19 => 1,  79 => 36,  72 => 34,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 209,  157 => 64,  145 => 46,  139 => 59,  131 => 52,  123 => 77,  120 => 94,  115 => 72,  111 => 46,  108 => 70,  101 => 61,  98 => 44,  96 => 44,  83 => 39,  74 => 34,  66 => 32,  55 => 15,  52 => 37,  50 => 10,  43 => 17,  41 => 10,  35 => 5,  32 => 9,  29 => 2,  209 => 148,  203 => 78,  199 => 136,  193 => 73,  189 => 131,  187 => 84,  182 => 66,  176 => 61,  173 => 65,  168 => 113,  164 => 57,  162 => 56,  154 => 58,  149 => 51,  147 => 50,  144 => 92,  141 => 89,  133 => 58,  130 => 81,  125 => 91,  122 => 74,  116 => 52,  112 => 49,  109 => 49,  106 => 48,  103 => 44,  99 => 35,  95 => 45,  92 => 42,  86 => 40,  82 => 22,  80 => 37,  73 => 36,  64 => 30,  60 => 16,  57 => 28,  54 => 23,  51 => 13,  48 => 21,  45 => 18,  42 => 15,  39 => 11,  36 => 10,  33 => 5,  30 => 7,);
    }
}
