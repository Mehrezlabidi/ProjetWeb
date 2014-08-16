<?php

/* MyAppEspritBundle:Menu:show.html.twig */
class __TwigTemplate_cb24fe3ed2de91aa287ebcddb07942ca5d35a94996b1bf6de020f49930d181a9 extends Twig_Template
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
<center >
      <div style=\"height:141px;width:500px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
  ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null)) > 0)) {
            // line 16
            echo "<table class=\"bordered\" >
    <thead>

    
    <tr>
        <th>#</th>        
        <th>Title</th>
        <th>Position</th>
        <th>Utilisateur associé</th>
    </tr>
    </thead>
   
    
       ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 30
                echo "
        <tr>
        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "id"), "html", null, true);
                echo "</th> 
        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "title")), "html", null, true);
                echo "</td>
        <td><b>No  </b>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "position"), "html", null, true);
                echo "</td>
        
        <td><b>";
                // line 36
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "utilisateur"), "nom")), "html", null, true);
                echo "</b></td>
 
";
                // line 41
                echo " 
 
        
        <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_delete", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_edit", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "         ";
        } else {
            // line 49
            echo "              <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 50
        echo " 
    </tr>       
    
</table> </div> 
</center>
    </div>
<center><h2><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\" style=\"text-decoration:none\"><p>ajouter menu</p></a></h2></center>

</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  74 => 34,  210 => 148,  126 => 76,  20 => 1,  470 => 378,  426 => 340,  419 => 336,  405 => 325,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  346 => 290,  333 => 280,  329 => 279,  286 => 242,  270 => 235,  70 => 33,  65 => 22,  152 => 76,  118 => 66,  76 => 36,  293 => 215,  262 => 187,  205 => 139,  174 => 113,  157 => 99,  127 => 78,  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 294,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 182,  242 => 170,  207 => 151,  200 => 147,  155 => 107,  114 => 85,  58 => 29,  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 236,  267 => 193,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 169,  225 => 78,  197 => 70,  192 => 142,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 100,  146 => 47,  129 => 70,  97 => 52,  84 => 41,  37 => 5,  150 => 65,  139 => 56,  104 => 31,  90 => 41,  81 => 38,  77 => 24,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 241,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 82,  120 => 94,  100 => 60,  53 => 17,  480 => 385,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 341,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 310,  379 => 119,  374 => 116,  368 => 264,  365 => 298,  362 => 110,  360 => 259,  355 => 106,  341 => 283,  337 => 282,  322 => 275,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 203,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 185,  177 => 114,  169 => 113,  140 => 44,  132 => 71,  128 => 93,  111 => 37,  107 => 62,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 88,  240 => 86,  238 => 206,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 152,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  131 => 52,  119 => 87,  108 => 70,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 21,  47 => 9,  38 => 6,  94 => 28,  89 => 44,  85 => 39,  79 => 36,  75 => 17,  68 => 34,  56 => 27,  50 => 18,  29 => 3,  87 => 41,  72 => 35,  55 => 16,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 2,  40 => 14,  44 => 8,  35 => 10,  31 => 8,  43 => 16,  41 => 15,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 85,  163 => 62,  158 => 67,  156 => 77,  151 => 63,  142 => 98,  138 => 72,  136 => 95,  123 => 68,  121 => 56,  117 => 44,  115 => 70,  105 => 40,  101 => 59,  91 => 27,  69 => 35,  66 => 32,  62 => 30,  49 => 19,  24 => 4,  32 => 9,  25 => 5,  22 => 2,  19 => 1,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 75,  147 => 92,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 74,  116 => 41,  112 => 49,  109 => 49,  106 => 48,  103 => 60,  99 => 31,  95 => 45,  92 => 29,  86 => 62,  82 => 22,  80 => 25,  73 => 36,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 17,  45 => 8,  42 => 15,  39 => 11,  36 => 10,  33 => 3,  30 => 7,);
    }
}
