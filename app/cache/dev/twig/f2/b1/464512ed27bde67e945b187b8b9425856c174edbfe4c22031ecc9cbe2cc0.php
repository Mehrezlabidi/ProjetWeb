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
 <title>Liste articles</title>
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2>Les articles</h2>
<center >
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
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            echo "     <tr>
         <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "</th> 
         <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
            echo "</td>
         <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
            echo "</td>
      <!--  <td>article.date</td>  -->
         <td>   ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
            echo "         </td>
         
        

          <td>No  ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id"), "html", null, true);
            echo "</td>
       <!--    <td>No  ";
            // line 42
            echo "</td>  -->
         
         
          ";
            // line 45
            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                // line 46
                echo "          <td><b>access</b></td>
          ";
            } else {
                // line 48
                echo "          <td><b>denied</b></td>
            ";
            }
            // line 50
            echo "          
          
             
        
       ";
            // line 54
            if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                // line 55
                echo "        <td><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
            }
            // line 57
            echo "        
        ";
            // line 58
            echo " 
        ";
            // line 59
            if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
                // line 60
                echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
            }
            // line 62
            echo "         
         
         
         
        <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </tr>        
    
 

</table>
    <h2><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\">ajouter article</a></h2>
</center>
    </div>

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
        return array (  161 => 75,  154 => 70,  143 => 67,  137 => 66,  131 => 62,  125 => 60,  123 => 59,  120 => 58,  117 => 57,  111 => 55,  109 => 54,  103 => 50,  99 => 48,  95 => 46,  93 => 45,  88 => 42,  84 => 41,  77 => 37,  72 => 35,  68 => 34,  64 => 33,  61 => 32,  57 => 31,  30 => 7,  25 => 5,  19 => 1,);
    }
}
