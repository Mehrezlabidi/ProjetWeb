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
    <title> </title>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2> </h2>
<center >      <div style=\"height:141px;width:545px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
              
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
        // line 28
        if ((twig_length_filter($this->env, (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique"))) > 0)) {
            // line 29
            echo "                      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
                // line 30
                echo "     <tr>  
       <th>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"), "html", null, true);
                echo "</th> 
      
        <td><b>No  </b>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "position"), "html", null, true);
                echo "</td>
          ";
                // line 34
                if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "state") == 1)) {
                    // line 35
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 37
                    echo "          <td><b>denied</b></td>
          ";
                }
                // line 39
                echo "           <td>";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), 20, true, "..."), "html", null, true);
                echo "</td>
            <td><b>No  </b>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id"), "html", null, true);
                echo "</td>

        <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_delete", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_edit", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
     
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "         ";
        } else {
            // line 47
            echo "           <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 48
        echo " 
    </tr>        
    
 

</table>
    
</div></center>
    </div>
<center><h2><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo "\">ajouter rubrique</a></h2></center>
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
        return array (  128 => 57,  117 => 48,  113 => 47,  110 => 46,  99 => 43,  93 => 42,  88 => 40,  83 => 39,  79 => 37,  75 => 35,  73 => 34,  69 => 33,  64 => 31,  61 => 30,  56 => 29,  54 => 28,  30 => 7,  25 => 5,  19 => 1,);
    }
}
