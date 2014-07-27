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
  
<table class=\"bordered\" >
<thead>

    <tr>
        <th>#</th>        
        <th>Texte</th>
        <th>Nom</th>
        <th>Date</th>
       
         <th>Rubrique associé</th>
      <!--   <th>Sous Rubrique associé</th>  -->
        <th>Role associé</th>
         <th>Image</th>
    </tr>
    
</thead>
  
        ";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) > 0)) {
            // line 33
            echo "       ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo "    
     <tr>
         <th>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "</th> 
         <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), 20, true, "..."), "html", null, true);
                echo "</td>
         <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                echo "</td>
      <!--  <td>article.date</td>  -->
         <td>   ";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "         </td>
         
        

          <td>No  ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id"), "html", null, true);
                echo "</td>
       <!--    <td>No  ";
                // line 44
                echo "</td>  -->
         
         
          ";
                // line 47
                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                    // line 48
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 50
                    echo "          <td><b>denied</b></td>
            ";
                }
                // line 52
                echo "          
          
             
        
       ";
                // line 56
                if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                    // line 57
                    echo "        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
                }
                // line 59
                echo "        
        ";
                // line 60
                echo " 
        ";
                // line 61
                if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
                    // line 62
                    echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
                }
                // line 64
                echo "         
         
         
         
        <td><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "         ";
        } else {
            // line 73
            echo "                   <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 74
        echo " 
                  
    </tr>        
    
 

</table>
  </div> 
</center> </div>
    
 <center><h2><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\">ajouter article</a></h2></center>
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
        return array (  177 => 84,  165 => 74,  161 => 73,  158 => 72,  147 => 69,  141 => 68,  135 => 64,  129 => 62,  127 => 61,  124 => 60,  121 => 59,  115 => 57,  113 => 56,  107 => 52,  103 => 50,  99 => 48,  97 => 47,  92 => 44,  88 => 43,  81 => 39,  76 => 37,  72 => 36,  68 => 35,  60 => 33,  58 => 32,  30 => 7,  25 => 5,  19 => 1,);
    }
}
