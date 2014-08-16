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
<<<<<<< HEAD
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
=======
                  
         <li class='active has-sub'><a href='#'>";
                // line 22
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title")), "html", null, true);
                echo "</a>            
\t <ul>    
                    ";
                // line 24
                echo "         
               ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    // line 26
                    echo "                       
                    ";
                    // line 27
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo "     
 
                  <li class='has-sub'><a href='#'>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title")), "html", null, true);
                        echo "</a>
                    ";
                    }
                    // line 30
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                    echo "         
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
                // line 43
                echo " 
                            
                            
                            
                            
                       ";
                // line 49
=======
                // line 31
                echo " 
                       ";
                // line 33
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo "               ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
<<<<<<< HEAD
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
                
=======
                            
                      ";
                    // line 35
                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
                  </li>
                 <li>
      <a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                        echo "\">
                        ";
                        // line 39
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                            echo "  
                        <h3>    ";
                            // line 40
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                            echo " </h3>
                         ";
                        } else {
                            // line 42
                            echo "                       <strike>    ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
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
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
                // line 62
                echo "  
  
\t </ul>                   
    </li>                
             ";
            }
            // line 66
            echo "  
      ";
=======
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
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 68
=======
        // line 54
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo "</ul>   
    </div>                   
";
    }

<<<<<<< HEAD
    // line 73
=======
    // line 76
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    public function block_menu_haut($context, array $blocks = array())
    {
        echo " 

   <ul id=\"menu\"> 
 
           ";
<<<<<<< HEAD
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
=======
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 81
            echo "                       ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 1)) {
                // line 82
                echo "

       <li>  <a href=\"#url\">";
                // line 84
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title")), "html", null, true);
                echo " </a> 
         <ul>
              ";
<<<<<<< HEAD
                // line 84
=======
                // line 87
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    echo " 
                               ";
<<<<<<< HEAD
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
=======
                    // line 88
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
                \t        
\t\t        <li> <a href=\"#url\" >";
                        // line 90
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title")), "html", null, true);
                        echo "</a></li>                  
                             ";
                    }
                    // line 91
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                    echo " 
                
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
                // line 103
                echo " 
             ";
                // line 105
                echo "\t     ";
                // line 106
=======
                // line 93
                echo " 
             ";
                // line 95
                echo "\t     ";
                // line 96
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo "              ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
<<<<<<< HEAD
                         ";
                    // line 107
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                        // line 108
                        echo "                               ";
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                            echo " 
\t\t        <li> <a href=\"";
                            // line 109
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                            echo "</a></li>                  
                             ";
                        }
                        // line 110
                        echo " 
                        ";
                    }
                    // line 111
                    echo " 
=======
                               ";
                    // line 97
                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
               \t        
\t\t        <li> <a href=\"#url\" >";
                        // line 99
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                        echo "</a></li>                  
                             ";
                    }
                    // line 100
                    echo " 
               
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
                // line 112
                echo " 
             ";
                // line 114
=======
                // line 102
                echo " 
             ";
                // line 104
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo "          </ul>
         
         
         </li>
                     ";
            }
<<<<<<< HEAD
            // line 118
=======
            // line 108
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 119
=======
        // line 109
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo " 
 \t 
      </ul>                  
";
    }

<<<<<<< HEAD
    // line 126
    public function block_menu_droite($context, array $blocks = array())
    {
        // line 127
=======
    // line 131
    public function block_menu_droite($context, array $blocks = array())
    {
        // line 132
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo "       
                            <li class=\"bg_list_un\"><a href=\"#\" style=\"text-decoration:none\">";
<<<<<<< HEAD
            // line 128
=======
            // line 133
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title")), "html", null, true);
            echo " </a></li>\t\t\t\t\t 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 130
=======
        // line 135
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        return array (  396 => 130,  388 => 128,  381 => 127,  378 => 126,  371 => 119,  364 => 118,  357 => 114,  354 => 112,  347 => 111,  343 => 110,  336 => 109,  331 => 108,  329 => 107,  322 => 106,  320 => 105,  317 => 103,  309 => 101,  297 => 97,  294 => 96,  291 => 95,  285 => 93,  282 => 92,  277 => 91,  275 => 90,  269 => 89,  265 => 88,  259 => 85,  252 => 84,  247 => 81,  243 => 79,  240 => 78,  236 => 77,  228 => 73,  222 => 68,  215 => 66,  208 => 62,  200 => 60,  196 => 59,  186 => 56,  179 => 55,  175 => 54,  169 => 51,  165 => 50,  158 => 49,  151 => 43,  144 => 42,  133 => 39,  130 => 38,  127 => 37,  113 => 35,  110 => 34,  105 => 33,  103 => 32,  97 => 31,  92 => 29,  88 => 28,  82 => 27,  79 => 26,  71 => 21,  67 => 19,  61 => 18,  55 => 16,  50 => 11,  48 => 10,  46 => 9,  44 => 8,  41 => 7,  39 => 6,  37 => 5,  31 => 3,);
=======
        return array (  294 => 135,  286 => 133,  279 => 132,  276 => 131,  269 => 109,  262 => 108,  255 => 104,  252 => 102,  244 => 100,  239 => 99,  234 => 97,  227 => 96,  225 => 95,  222 => 93,  214 => 91,  209 => 90,  204 => 88,  197 => 87,  192 => 84,  188 => 82,  185 => 81,  181 => 80,  173 => 76,  167 => 54,  160 => 52,  153 => 48,  146 => 47,  140 => 44,  134 => 42,  129 => 40,  125 => 39,  121 => 38,  115 => 35,  107 => 33,  104 => 31,  97 => 30,  92 => 29,  87 => 27,  84 => 26,  80 => 25,  77 => 24,  72 => 22,  67 => 19,  61 => 18,  55 => 16,  50 => 11,  48 => 10,  46 => 9,  44 => 8,  41 => 7,  39 => 6,  37 => 5,  31 => 3,);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    }
}
