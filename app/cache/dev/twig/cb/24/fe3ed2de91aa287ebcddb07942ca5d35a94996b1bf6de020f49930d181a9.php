<?php

/* MyAppEspritBundle:Menu:show.html.twig */
class __TwigTemplate_cb24fe3ed2de91aa287ebcddb07942ca5d35a94996b1bf6de020f49930d181a9 extends Twig_Template
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
    <title>Liste menus</title>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2>Les menus</h2>
<center >
      <div style=\"height:141px;width:500px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">

<table class=\"bordered\" >
    <thead>

    
    <tr>
        <th>#</th>        
        <th>Title</th>
        <th>Position</th>
        <th>Utilisateur associé</th>
    </tr>
    </thead>
   
       ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 29
            echo "
        <tr>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
            echo "</th> 
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title"), "html", null, true);
            echo "</td>
        <td><b>No  </b>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "position"), "html", null, true);
            echo "</td>
        
           <td><b>No  </b>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "utilisateur"), "id"), "html", null, true);
            echo "</td>
 
";
            // line 40
            echo " 
 
        
        <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_delete", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_edit", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
            echo "\">  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
            echo "\" alt=\"\" />  </a></td>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tr>       
    
 

</table> </div> 
</center>
    </div>
    <center><h2><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\">ajouter menu</a></h2></center>

</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  102 => 47,  91 => 44,  85 => 43,  80 => 40,  75 => 35,  70 => 33,  66 => 32,  62 => 31,  58 => 29,  54 => 28,  30 => 7,  25 => 5,  19 => 1,);
    }
}
