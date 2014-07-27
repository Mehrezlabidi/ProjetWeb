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
<h2>Les Actualités</h2>
<center >
<table class=\"bordered\" >
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
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 31
            echo "     <tr>
        <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"), "html", null, true);
            echo "</th> 
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "titre"), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "dateinsertion"), "d/m/Y"), "html", null, true);
            echo "</td> <!-- date ici pas converti -->
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "description"), 20, true, "..."), "html", null, true);
            echo "</td>
       <td><b>No  </b>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "utilisateur"), "id"), "html", null, true);
            echo "</td>
       
       ";
            // line 38
            if ((!(null === $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image")))) {
                // line 39
                echo "        <td><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"), "html", null, true);
                echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
            }
            // line 41
            echo "        
        ";
            // line 42
            echo " 
        ";
            // line 43
            if ((null === $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"))) {
                // line 44
                echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"), "html", null, true);
                echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
            }
            // line 46
            echo "           
           
           
           
           
           
           
           
        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_delete", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_edit", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tr>        
    
 

</table>
    <h2><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\">ajouter actualité</a></h2>
</center>
    </div>

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
        return array (  140 => 63,  133 => 58,  122 => 55,  116 => 54,  106 => 46,  100 => 44,  98 => 43,  95 => 42,  92 => 41,  86 => 39,  84 => 38,  79 => 36,  75 => 35,  71 => 34,  67 => 33,  63 => 32,  60 => 31,  56 => 30,  30 => 7,  25 => 5,  19 => 1,);
    }
}
