<?php

/* MyAppEspritBundle:Sousrubrique:show.html.twig */
class __TwigTemplate_b7c1b9435201fe2df06267e6bc2f2ae7cbf85555deb1bb7bb60a528445f307c5 extends Twig_Template
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
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    <title>Liste Sous Rubrique</title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2>Les sous rubriques</h2>
<center >
<table class=\"bordered\" >
    <thead>

    <tr>
        <th>#</th>              
        <th>Position</th>
        <th>State</th>
        <th>Title</th>
         <th>Rubrique associé</th>

    </tr>
    </thead>
   
       ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
            // line 30
            echo "     <tr>
        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"), "html", null, true);
            echo "</th> 
      
         <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "position"), "html", null, true);
            echo "</td>
         <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "state"), "html", null, true);
            echo "</td>
         <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), "html", null, true);
            echo "</td>
         
          <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id"), "html", null, true);
            echo "</td>
          
        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_delete", array("id" => $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_edit", array("id" => $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tr>        
    
 

</table>
    <h2><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "\">ajouter sous rubrique</a></h2>
</center>
    </div>

</body>
</html>
 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Sousrubrique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 48,  102 => 43,  91 => 40,  85 => 39,  80 => 37,  75 => 35,  71 => 34,  67 => 33,  62 => 31,  59 => 30,  55 => 29,  31 => 8,  26 => 6,  19 => 1,);
    }
}
