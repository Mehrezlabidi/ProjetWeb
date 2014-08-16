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
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("article" => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")))));
        // line 6
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("rubrique" => (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")))));
        // line 7
        echo " ";
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("actualite" => (isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")))));
        // line 8
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("sousrubrique" => (isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")))));
        // line 9
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("menu" => (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))));
        // line 10
        $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig")->display(array_merge($context, array("role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 2)) {
                // line 19
                echo "  <div id='cssmenu'>  
<ul>
     <li class='active has-sub'><a href='#'>";
                // line 21
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title")), "html", null, true);
                echo "</a>            
\t <ul>    
             
             
             
                    ";
                // line 26
                echo "         
               ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    echo "                      
                    ";
                    // line 28
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo "     
                            <li class='has-sub'><a href='#'>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title")), "html", null, true);
                        echo "</a>
                            
                                   <ul> ";
                        // line 31
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                            echo " 
                                              ";
                            // line 32
                            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique")) > 0)) {
                                // line 33
                                echo "                                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique"), "id") == $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))) {
                                    echo " 
                                                         ";
                                    // line 34
                                    echo "                                                                    
                                                              <li> <a href=\"";
                                    // line 35
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                                    echo "\">";
                                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                                        echo "<h3>";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                        echo "</h3>";
                                    } else {
                                        echo "<strike>";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                        echo "</strike>";
                                    }
                                    echo "</a></li>                                                                  
                                                          ";
                                    // line 37
                                    echo "                                                     ";
                                }
                                // line 38
                                echo "                                               ";
                            }
                            // line 39
                            echo "                                       ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t   </ul>
                            </li>
                    ";
                    }
                    // line 42
                    echo "         
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo " 
                            
                            
                            
                            
                       ";
                // line 49
                echo "               ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                  ";
                    // line 50
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                        echo "   
                      ";
                        // line 51
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                            echo " 
                            
                                 <li>
                                       <a href=\"";
                            // line 54
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                            echo "\">
                                ";
                            // line 55
                            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                                echo "<h3>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</h3>  
                                ";
                            } else {
                                // line 56
                                echo "<strike>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</strike>";
                            }
                            echo "                              
                                      </a>
                                </li>     
                      ";
                        }
                        // line 59
                        echo "  
                  ";
                    }
                    // line 60
                    echo " 
                
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "  
  
\t </ul>                   
    </li>                
             ";
            }
            // line 66
            echo "  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</ul>   
    </div>                   
";
    }

    // line 73
    public function block_menu_haut($context, array $blocks = array())
    {
        echo " 

   <ul id=\"menu\"> 
 
           ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 78
            echo "                       ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 1)) {
                // line 79
                echo "

       <li>  <a href=\"#url\">";
                // line 81
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title")), "html", null, true);
                echo " </a> 
         <ul>
              ";
                // line 84
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    echo " 
                               ";
                    // line 85
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
                \t        
\t\t        <li>
                            <a href=\"#url\" >";
                        // line 88
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title")), "html", null, true);
                        echo "</a>
                                  <ul> ";
                        // line 89
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                            echo " 
                                              ";
                            // line 90
                            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique")) > 0)) {
                                // line 91
                                echo "                                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique"), "id") == $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))) {
                                    echo " 
                                                         ";
                                    // line 92
                                    echo "                                                                    
                                                              <li><a href=\"";
                                    // line 93
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                    echo "</a></li>
                                                          ";
                                    // line 95
                                    echo "                                                     ";
                                }
                                // line 96
                                echo "                                               ";
                            }
                            // line 97
                            echo "                                       ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t   </ul>\t
                        
                        </li>                  
                             ";
                    }
                    // line 101
                    echo " 
                
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo " 
             ";
                // line 105
                echo "\t     ";
                // line 106
                echo "              ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                         ";
                    // line 107
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                        // line 108
                        echo "                               ";
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                            echo " 
\t\t                          <li>
                                                    <a href=\"";
                            // line 110
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                            echo "\">
                                           ";
                            // line 111
                            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                                echo "<h3>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</h3>  
                                           ";
                            } else {
                                // line 112
                                echo "<strike>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</strike>";
                            }
                            echo "                              
                                                                       </a>
                                           </li>                   
                             ";
                        }
                        // line 115
                        echo " 
                        ";
                    }
                    // line 116
                    echo " 
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo " 
             ";
                // line 119
                echo "          </ul>
         
         
         </li>
                     ";
            }
            // line 123
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo " 
 \t 
      </ul>                  
";
    }

    // line 131
    public function block_menu_droite($context, array $blocks = array())
    {
        // line 132
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo "       
                            <li class=\"bg_list_un\"><a href=\"#\" style=\"text-decoration:none\">";
            // line 133
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title")), "html", null, true);
            echo " </a></li>\t\t\t\t\t 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
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
        return array (  411 => 135,  403 => 133,  396 => 132,  393 => 131,  386 => 124,  379 => 123,  372 => 119,  369 => 117,  362 => 116,  358 => 115,  348 => 112,  341 => 111,  337 => 110,  331 => 108,  329 => 107,  322 => 106,  320 => 105,  317 => 103,  309 => 101,  297 => 97,  294 => 96,  291 => 95,  285 => 93,  282 => 92,  277 => 91,  275 => 90,  269 => 89,  265 => 88,  259 => 85,  252 => 84,  247 => 81,  243 => 79,  240 => 78,  236 => 77,  228 => 73,  222 => 68,  215 => 66,  208 => 62,  200 => 60,  196 => 59,  186 => 56,  179 => 55,  175 => 54,  169 => 51,  165 => 50,  158 => 49,  151 => 43,  144 => 42,  133 => 39,  130 => 38,  127 => 37,  113 => 35,  110 => 34,  105 => 33,  103 => 32,  97 => 31,  92 => 29,  88 => 28,  82 => 27,  79 => 26,  71 => 21,  67 => 19,  61 => 18,  55 => 16,  50 => 11,  48 => 10,  46 => 9,  44 => 8,  41 => 7,  39 => 6,  37 => 5,  31 => 3,);
    }
}
