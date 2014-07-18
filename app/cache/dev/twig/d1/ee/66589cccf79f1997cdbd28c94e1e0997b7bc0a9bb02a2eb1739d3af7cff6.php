<?php

/* MyAppEspritBundle:Rubrique:show.html.twig */
class __TwigTemplate_d1ee66589cccf79f1997cdbd28c94e1e0997b7bc0a9bb02a2eb1739d3af7cff6 extends Twig_Template
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
    <title>Liste Rubrique</title>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2>Les rubriques</h2>
<center >
<table class=\"bordered\" >
    <thead>

    <tr>
        <th>#</th>              
        <th>Position</th>
        <th>State</th>
        <th>Title</th>
           <th>Menu associé</th>

    </tr>
    </thead>
   
       ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 28
            echo "     <tr>
        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"), "html", null, true);
            echo "</th> 
      
        <td><b>No  </b>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "position"), "html", null, true);
            echo "</td>
        
        
        
        
        
        
         
          ";
            // line 39
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "state") == 1)) {
                // line 40
                echo "          <td><b>access</b></td>
          ";
            } else {
                // line 42
                echo "          <td><b>denied</b></td>
          ";
            }
            // line 44
            echo "         
         
         
         
         
         
           <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), "html", null, true);
            echo "</td>
            <td><b>No  </b>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id"), "html", null, true);
            echo "</td>

        <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_delete", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_edit", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </tr>        
    
 

</table>
    <h2><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo "\">ajouter rubrique</a></h2>
</center>
    </div>

</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Rubrique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 62,  120 => 57,  109 => 54,  103 => 53,  98 => 51,  94 => 50,  86 => 44,  82 => 42,  78 => 40,  76 => 39,  65 => 31,  60 => 29,  57 => 28,  53 => 27,  30 => 7,  25 => 5,  19 => 1,);
    }
}
