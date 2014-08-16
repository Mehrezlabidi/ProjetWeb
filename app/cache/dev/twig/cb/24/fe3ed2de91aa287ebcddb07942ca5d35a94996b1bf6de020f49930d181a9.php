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
    <title> </title>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2> </h2>
<center >
      <div style=\"height:141px;width:500px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
  ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))) > 0)) {
            // line 16
            echo "<table class=\"bordered\" >
    <thead>

    
    <tr>
        <th>#</th>        
        <th>Title</th>
        <th>Position</th>
        <th>Utilisateur associé</th>
    </tr>
    </thead>
   
    
       ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 30
                echo "
        <tr>
        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
                echo "</th> 
        <td>";
                // line 33
<<<<<<< HEAD
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title")), "html", null, true);
=======
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title"), "html", null, true);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                echo "</td>
        <td><b>No  </b>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "position"), "html", null, true);
                echo "</td>
        
<<<<<<< HEAD
        <td><b>";
                // line 36
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "utilisateur"), "nom")), "html", null, true);
                echo "</b></td>
=======
           <td><b>No  </b>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "utilisateur"), "id"), "html", null, true);
                echo "</td>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
 
";
                // line 41
                echo " 
 
        
        <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_delete", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_edit", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "         ";
        } else {
            // line 49
            echo "              <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 50
        echo " 
    </tr>       
    
</table> </div> 
</center>
    </div>
<<<<<<< HEAD
<center><h2><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\" style=\"text-decoration:none\"><p>ajouter menu</p></a></h2></center>
=======
    <center><h2><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\" style=\"text-decoration:none\">ajouter menu</a></h2></center>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

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
        return array (  121 => 56,  113 => 50,  109 => 49,  106 => 48,  95 => 45,  89 => 44,  84 => 41,  79 => 36,  74 => 34,  70 => 33,  66 => 32,  62 => 30,  58 => 29,  43 => 16,  41 => 15,  30 => 7,  25 => 5,  19 => 1,);
    }
}
