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
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_delete", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_edit", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "         ";
        } else {
            // line 62
            echo "                   <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 63
        echo " 
    </tr>        
    
 

</table>
  </div> 
</center> </div>
    
 
   <center><h2><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\">ajouter actualité</a></h2></center>

     

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
        return array (  158 => 73,  146 => 63,  142 => 62,  139 => 61,  128 => 58,  122 => 57,  112 => 49,  106 => 47,  104 => 46,  101 => 45,  98 => 44,  92 => 42,  90 => 41,  85 => 39,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  61 => 32,  42 => 15,  40 => 14,  30 => 7,  25 => 5,  19 => 1,);
    }
}
