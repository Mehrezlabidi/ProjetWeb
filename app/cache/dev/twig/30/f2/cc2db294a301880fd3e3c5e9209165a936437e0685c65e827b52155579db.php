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
        <th>Image</th>
        
         <th>Utilisateur associé</th>
    </tr>
    </thead>
   
       ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 30
            echo "     <tr>
        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"), "html", null, true);
            echo "</th> 
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "titre"), "html", null, true);
            echo "</td>
        <td> </td> <!-- date ici pas converti -->
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "description"), "html", null, true);
            echo "</td>
       <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "utilisateur"), "id"), "html", null, true);
            echo "</td>
 
        <td><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image"), "html", null, true);
            echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
        
        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_delete", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_edit", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tr>        
    
 

</table>
    <h2><a href=\"";
        // line 48
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
        return array (  106 => 48,  99 => 43,  88 => 40,  82 => 39,  77 => 37,  72 => 35,  68 => 34,  63 => 32,  59 => 31,  56 => 30,  52 => 29,  27 => 7,  19 => 1,);
    }
}
