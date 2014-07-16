<?php

/* MyAppEspritBundle:Role:show.html.twig */
class __TwigTemplate_c347d2efddaa02cda9b4a62c7d19bc4fbf55ebd9e0b0bb3930fe0044d0856408 extends Twig_Template
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
    <title>Liste roles</title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2>Les roles</h2>
<center >
<table class=\"bordered\" >
    <thead>

    <tr>
        <th>#</th>              
        <th>Permission</th>
        <th>Utilisateur associé</th>
    </tr>
    </thead>
   
       ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 26
            echo "     <tr>
        <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"), "html", null, true);
            echo "</th> 
      
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "permission"), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "utilisateur"), "id"), "html", null, true);
            echo "</td>
        
        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_role_delete", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_role_edit", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tr>        
    
 

</table>
    <h2><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_new");
        echo "\">ajouter role</a></h2>
</center>
    </div>

</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 41,  86 => 36,  75 => 33,  69 => 32,  64 => 30,  60 => 29,  55 => 27,  52 => 26,  48 => 25,  27 => 7,  19 => 1,);
    }
}
