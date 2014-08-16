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
    <title> </title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<h2> </h2>
<center ><div style=\"height:141px;width:600px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
               
  ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique"))) > 0)) {
            // line 18
            echo "<table class=\"bordered\" >
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
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                // line 32
                echo "      
     <tr>
        <th>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"), "html", null, true);
                echo "</th> 
      
         <td><b>No  </b>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "position"), "html", null, true);
                echo "</td>
    
         
          ";
                // line 39
                if (($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "state") == 1)) {
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
                // line 46
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), 20, true, "..."), "html", null, true);
                echo "</td>
         
         <td><b>";
                // line 48
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "title")), "html", null, true);
                echo "</b></td>
          
        <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_delete", array("id" => $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_edit", array("id" => $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "         ";
        } else {
            // line 55
            echo "            <h2><p> (  rien   a   afficher )</p></h2> 
         ";
        }
        // line 56
        echo " 
    </tr>           

</table>
</div></center>
    </div>
    <center><h2><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "\" style=\"text-decoration:none\">ajouter sous rubrique</a></h2></center>

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
        return array (  135 => 62,  127 => 56,  123 => 55,  120 => 54,  109 => 51,  103 => 50,  98 => 48,  93 => 46,  89 => 44,  85 => 42,  81 => 40,  79 => 39,  73 => 36,  68 => 34,  64 => 32,  60 => 31,  45 => 18,  43 => 17,  31 => 8,  26 => 6,  19 => 1,);
    }
}
