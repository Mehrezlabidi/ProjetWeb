<?php

/* MyAppEspritBundle:Menu:edit.html.twig */
class __TwigTemplate_d3bffc6462955efb5a94fef5345e677a232ac6ca247f224abd38de1e41a86dca extends Twig_Template
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
<title>Forms</title>
 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/style.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
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
      <div style=\"padding: 120px 50px 0 10px;\">
 
<h1>Modify Menu</h1>
<form   action=\"\"   method=\"post\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t <ul>
                  <li>
                 ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                  </li>
                   
       
\t </ul>
                       
        <button type=\"submit\" class=\"action\">Submit</button>
                          
                         
</form>
 
      </div>
 

















<!--
<form role=\"form\" method=\"post\" action=' '>
        <ul>
        
        <li>
                <label for=\"Position\">Position:</label>
                 ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
        </li>
         <li>
                <label for=\"name\">Title:</label>
                 ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
        </li>
         
             <input type=\"hidden\" name=\"name\" value=\"submit\">
                 ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
       
       
        
     
          
               <button type=\"submit\" class=\"action\">Submit</button>   
                 <button type=\"reset\" class=\"right\">Reset</button> 
                
         
          </ul>
</form>


-->
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 73,  104 => 69,  97 => 65,  58 => 29,  52 => 26,  32 => 9,  28 => 8,  19 => 1,);
    }
}
