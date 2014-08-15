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
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    <title> </title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
       
<center >  
                      
";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))) > 0)) {
            // line 18
            echo "<table class=\"bordered\" >
    <thead>

    <tr>
        <th>#</th>              
        <th>Permission</th>
        
    </tr>
    </thead>
   
     ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 29
                echo "     <tr>
         <th>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"), "html", null, true);
                echo "</th> 
        
         
          ";
                // line 33
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "permission") == 1)) {
                    // line 34
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 36
                    echo "          <td><b>denied</b></td>
          ";
                }
                // line 38
                echo "          
        <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_role_delete", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_role_edit", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "         ";
        } else {
            // line 44
            echo "       <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 45
        echo " 
    </tr>        

</table>
    <h2><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_new");
        echo "\" style=\"text-decoration:none\">ajouter role</a></h2>
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
        return array (  113 => 49,  107 => 45,  103 => 44,  100 => 43,  89 => 40,  83 => 39,  80 => 38,  76 => 36,  72 => 34,  70 => 33,  64 => 30,  61 => 29,  57 => 28,  45 => 18,  43 => 17,  31 => 8,  26 => 6,  19 => 1,);
    }
}
