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
    ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) > 0)) {
            // line 12
            echo "    <div style=\"padding: 120px 50px 0 10px;position:relative; top:-20px;left:-70px; \">
 
<center ><div style=\"height:150px;width:750px;border:0px solid #ccc;font:10px/15px Georgia, Garamond, Serif;overflow:auto;\">
    
<table class=\"bordered\" >
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
            // line 33
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
         <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "</td>
         
           ";
                // line 41
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                    // line 42
                    echo "           <td><p>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "title")), "html", null, true);
                    echo "</p></td>    
           ";
                } else {
                    // line 43
                    echo "<td>Aucun</td>";
                }
                // line 44
                echo "           
         
         
         
         
         
           ";
                // line 50
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique")) > 0)) {
                    // line 51
                    echo "           <td><p>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique"), "title")), "html", null, true);
                    echo "</p></td>    
           ";
                } else {
                    // line 52
                    echo "<td>Aucun</td>";
                }
                // line 53
                echo "          
             
          
          
          ";
                // line 57
                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                    // line 58
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 60
                    echo "          <td><b>denied</b></td>
            ";
                }
                // line 61
                echo "                 
        
       ";
                // line 63
                if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                    // line 64
                    echo "        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
                }
                // line 66
                echo "        
        ";
                // line 67
                echo " 
        ";
                // line 68
                if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
                    // line 69
                    echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
                }
                // line 71
                echo "               
        <td><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "         ";
        } else {
            // line 77
            echo "            <div style=\"height:150px;width:750px;\"></div>
            <h2 align=\"center\"><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 79
        echo " 
                  
    </tr>            

</table>
  </div> 
</center> </div>
    
 <center><h2><a href=\"";
        // line 87
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
        return array (  197 => 87,  187 => 79,  182 => 77,  179 => 76,  168 => 73,  162 => 72,  159 => 71,  153 => 69,  151 => 68,  148 => 67,  145 => 66,  139 => 64,  137 => 63,  133 => 61,  129 => 60,  125 => 58,  123 => 57,  117 => 53,  114 => 52,  108 => 51,  106 => 50,  98 => 44,  95 => 43,  89 => 42,  87 => 41,  82 => 39,  77 => 37,  73 => 36,  69 => 35,  62 => 33,  39 => 12,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }
}
