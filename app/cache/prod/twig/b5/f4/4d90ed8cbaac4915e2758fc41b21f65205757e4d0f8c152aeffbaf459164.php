<?php

/* MyAppEspritBundle:Article:lister.html.twig */
class __TwigTemplate_b5f44d90ed8cbaac4915e2758fc41b21f65205757e4d0f8c152aeffbaf459164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'menu_haut' => array($this, 'block_menu_haut'),
            'menu_droite' => array($this, 'block_menu_droite'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "  
            
";
        // line 5
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("article" => (isset($context["article"]) ? $context["article"] : null))));
        // line 6
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("rubrique" => (isset($context["rubrique"]) ? $context["rubrique"] : null))));
        // line 7
        echo " ";
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("actualite" => (isset($context["actualite"]) ? $context["actualite"] : null))));
        // line 8
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("sousrubrique" => (isset($context["sousrubrique"]) ? $context["sousrubrique"] : null))));
        // line 9
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("menu" => (isset($context["menu"]) ? $context["menu"] : null))));
        // line 10
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("role" => (isset($context["role"]) ? $context["role"] : null))));
        // line 11
        echo " 
";
    }

    // line 16
    public function block_menu_gauche($context, array $blocks = array())
    {
        echo "  
          
 ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "menu"), "id") == 2)) {
                // line 19
                echo "  <div id='cssmenu'>  
<ul>
                  
         <li class='active has-sub'><a href='#'>";
                // line 22
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "title")), "html", null, true);
                echo "</a>            
\t <ul>    
                    ";
                // line 24
                echo "         
               ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    // line 26
                    echo "                       
                    ";
                    // line 27
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : null), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "id"))) {
                        echo "     
 
                  <li class='has-sub'><a href='#'>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : null), "title")), "html", null, true);
                        echo "</a>
                    ";
                    }
                    // line 30
                    echo "         
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo " 
                       ";
                // line 33
                echo "               ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                            
                      ";
                    // line 35
                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "id"))) {
                        echo " 
                  </li>
                 <li>
      <a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
                        echo "\">
                        ";
                        // line 39
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "role"), "id") == 1)) {
                            echo "  
                        <h3>    ";
                            // line 40
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nom")), "html", null, true);
                            echo " </h3>
                         ";
                        } else {
                            // line 42
                            echo "                       <strike>    ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nom")), "html", null, true);
                            echo "</strike>
                        ";
                        }
                        // line 44
                        echo "       </a>
              </li>
       
                      ";
                    }
                    // line 47
                    echo "  
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "  
  </li>
\t </ul>                   
\t </li>                
                             ";
            }
            // line 52
            echo "  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</ul>   
    </div>                   
";
    }

    // line 59
    public function block_menu_haut($context, array $blocks = array())
    {
        echo " 

   <ul id=\"menu\"> 
 
           ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 64
            echo "                       ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "menu"), "id") == 1)) {
                // line 65
                echo "

       <li>  <a href=\"#url\">";
                // line 67
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "title")), "html", null, true);
                echo " </a> 
         <ul>
              ";
                // line 70
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    echo " 
                               ";
                    // line 71
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : null), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "id"))) {
                        echo " 
                \t        
\t\t        <li> <a href=\"#url\" >";
                        // line 73
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : null), "title")), "html", null, true);
                        echo "</a></li>                  
                             ";
                    }
                    // line 74
                    echo " 
                
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo " 
             ";
                // line 78
                echo "\t     ";
                // line 79
                echo "              ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                         ";
                    // line 80
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "rubrique")) > 0)) {
                        // line 81
                        echo "                               ";
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "id"))) {
                            echo " 
\t\t        <li> <a href=\"#url\" >";
                            // line 82
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "nom")), "html", null, true);
                            echo "</a></li>                  
                             ";
                        }
                        // line 83
                        echo " 
                        ";
                    }
                    // line 84
                    echo " 
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo " 
             ";
                // line 87
                echo "          </ul>
         
         
         </li>
                     ";
            }
            // line 91
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo " 
 \t 
      </ul>                  
";
    }

    // line 99
    public function block_menu_droite($context, array $blocks = array())
    {
        // line 100
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo "       
                            <li class=\"bg_list_un\"><a href=\"#\" style=\"text-decoration:none\">";
            // line 101
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "title")), "html", null, true);
            echo " </a></li>\t\t\t\t\t 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "           ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 92,  267 => 91,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 80,  225 => 78,  197 => 70,  192 => 67,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 48,  146 => 47,  129 => 40,  97 => 30,  84 => 26,  37 => 5,  150 => 65,  139 => 56,  104 => 31,  90 => 41,  81 => 38,  77 => 24,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 344,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 239,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 42,  120 => 74,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 339,  423 => 142,  413 => 328,  409 => 327,  407 => 131,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 298,  362 => 110,  360 => 109,  355 => 106,  341 => 283,  337 => 282,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 88,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 82,  229 => 73,  220 => 70,  214 => 74,  177 => 65,  169 => 60,  140 => 44,  132 => 54,  128 => 97,  111 => 37,  107 => 33,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 79,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  131 => 52,  119 => 42,  108 => 65,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  79 => 18,  75 => 17,  68 => 14,  56 => 27,  50 => 11,  29 => 3,  87 => 27,  72 => 22,  55 => 16,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 14,  44 => 8,  35 => 5,  31 => 3,  43 => 8,  41 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 44,  115 => 35,  105 => 40,  101 => 45,  91 => 27,  69 => 35,  66 => 15,  62 => 30,  49 => 19,  24 => 4,  32 => 9,  25 => 5,  22 => 2,  19 => 1,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 25,  73 => 36,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 15,  39 => 6,  36 => 10,  33 => 8,  30 => 7,);
    }
}
