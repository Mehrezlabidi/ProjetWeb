<?php

/* MyAppEspritBundle:Actualite:send.html.twig */
class __TwigTemplate_ba10b2c6dade025ce67be9ebbe75a8a072b1fd8e38c51d2e01d5aa15151a0503 extends Twig_Template
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
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<title>Forms</title>
 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/style.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Engagement"), "html", null, true);
        echo "\"/> 
 
<!--[if IE]>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"js/jquery.uniform.min.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">
      \$(function(){
        \$(\"input:checkbox, input:radio, input:file, select\").uniform();
      });
    </script>
</head>
<body>

    <div style=\"padding: 20px 50px 0 10px;\">
<h1>Nouvelle Actualité</h1>
<form role=\"form\" method=\"post\" action='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "'>
\t<ul>
            
        <li>
        \t<label for=\"name\">Titre:</label>
                  ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget');
        echo "
        </li>
        <li>
        \t<label for=\"Position\">Date Insertion:</label>
                   ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateinsertion"), 'widget');
        echo "            
        </li>
        <li>
        \t<label for=\"name\">Description:</label>
                  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
        </li>
        <li>
        \t<label for=\"Position\">Image:</label>
                   ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget');
        echo "            
        </li>
        
        
        
        
        
        
        
        
        <li>\t  <input type=\"hidden\" name=\"name\" value=\"submit\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
                      <!-- clés etrangeres -->
                       ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       </li>
\t</ul>
     
        <button type=\"submit\" class=\"action\">Submit</button>
        <button type=\"reset\" class=\"right\">Reset</button>
  
</form>
    </div>

















 ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Actualite:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 57,  99 => 55,  85 => 44,  78 => 40,  71 => 36,  64 => 32,  56 => 27,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
