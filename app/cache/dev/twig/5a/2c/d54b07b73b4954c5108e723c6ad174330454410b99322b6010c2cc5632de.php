<?php

/* MyAppEspritBundle:Sousrubrique:send.html.twig */
class __TwigTemplate_5a2cd54b07b73b4954c5108e723c6ad174330454410b99322b6010c2cc5632de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle:Default:template.html.twig");

        $this->blocks = array(
            'ajout_sousrubrique' => array($this, 'block_ajout_sousrubrique'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle:Default:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_ajout_sousrubrique($context, array $blocks = array())
    {
        echo " 
  <form role=\"form\" method=\"post\" action='";
        // line 5
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "'>
<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
<tr>
\t<th rowspan=\"3\" class=\"sized\">
            
              <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" />   
         
        </th>
\t<th class=\"topleft\"></th>
\t<td id=\"tbl-border-top\">&nbsp;</td>
\t<th class=\"topright\"></th>
\t<th rowspan=\"3\" class=\"sized\">
          
            
       <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" />       
        </th>
</tr>
<tr>
\t<td id=\"tbl-border-left\"></td>
\t<td>
\t<!--  start content-table-inner -->
\t<div id=\"content-table-inner\">
\t
\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
\t<tr valign=\"top\">
\t<td>
\t
\t
\t\t<!--  start step-holder -->
\t\t<div id=\"step-holder\">
\t\t\t<div class=\"step-no\">1</div>
<<<<<<< HEAD
\t\t\t<div class=\"step-dark-left\"><a href=\"\">Add _sousrub details</a></div>
\t\t\t<div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">2</div>
\t\t\t<div class=\"step-light-left\">Select related _sousrub</div>
=======
\t\t\t<div class=\"step-dark-left\"><a href=\"\">Add _sousrubrique details</a></div>
\t\t\t<div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">2</div>
\t\t\t<div class=\"step-light-left\">Select related _sousrubrique</div>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">3</div>
\t\t\t<div class=\"step-light-left\">Edit / Delete</div>
\t\t\t<div class=\"step-light-round\">&nbsp;</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<!--  end step-holder -->
\t
\t\t<!-- start id-form -->
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
\t\t<tr>
\t\t\t<th valign=\"top\">Sub_Rubrique Title:</th>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "  </td>
                        
                        <td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th valign=\"top\">Position:</th>
\t\t\t<td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "</td>
                        
                        
\t\t\t<td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
                  <tr>
\t\t\t<th valign=\"top\">Etat</th>
\t\t\t<td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state"), 'widget');
        echo "</td>
                         \t 
\t\t</tr>
                
                
                <tr>
\t\t\t<th valign=\"top\">Rub No :</th>
\t\t\t<td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rubrique"), 'widget');
        echo "</td>
                        
                        
\t\t\t 
\t\t</tr>
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
                   
\t\t<th>&nbsp;</th>
\t\t<td valign=\"top\">
\t\t\t<input type=\"submit\"  value=\"\" class=\"form-submit\" />
\t\t\t<input type=\"reset\" value=\"\" class=\"form-reset\"  />
\t\t</td>
\t\t<td></td>
\t</tr>
\t</table>
\t<!-- end id-form  -->

\t</td>
\t<td>

\t<!--  start related-activities -->
\t<div id=\"related-activities\">
\t\t
\t\t<!--  start related-act-top -->
\t\t<div id=\"related-act-top\">
      <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/header_related_act.gif"), "html", null, true);
        echo "\"  width=\"271\" height=\"43\" alt=\"\" />                 
\t 
\t\t</div>
\t\t<!-- end related-act-top -->
\t\t
\t\t<!--  start related-act-bottom -->
\t\t<div id=\"related-act-bottom\">
\t\t
\t\t\t<!--  start related-act-inner -->
\t\t\t<div id=\"related-act-inner\">
\t\t\t
\t\t\t\t<div class=\"left\">
                                    <a href=\"\">
    <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_plus.gif"), "html", null, true);
        echo "\"  width=\"21\" height=\"21\" alt=\"\" />                                     
                                       
                                    </a></div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h5>Add another product</h5>
\t\t\t\t\tLorem ipsum dolor sit amet consectetur
\t\t\t\t\tadipisicing elitsed do eiusmod tempor.
\t\t\t\t\t<ul class=\"greyarrow\">
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a></li> 
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t<div class=\"lines-dotted-short\"></div>
\t\t\t\t
\t\t\t\t<div class=\"left\"><a href=\"\">
                                 
   <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_minus.gif"), "html", null, true);
        echo "\"  width=\"21\" height=\"21\" alt=\"\" />                                     
                                        
                                    </a></div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h5>Delete products</h5>
\t\t\t\t\tLorem ipsum dolor sit amet consectetur
\t\t\t\t\tadipisicing elitsed do eiusmod tempor.
\t\t\t\t\t<ul class=\"greyarrow\">
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a></li> 
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t<div class=\"lines-dotted-short\"></div>
\t\t\t\t
\t\t\t\t<div class=\"left\"><a href=\"\">
     <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_edit.gif"), "html", null, true);
        echo "\"  width=\"21\" height=\"21\" alt=\"\" />                                   
                                         
                                    </a></div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h5>Edit categories</h5>
\t\t\t\t\tLorem ipsum dolor sit amet consectetur
\t\t\t\t\tadipisicing elitsed do eiusmod tempor.
\t\t\t\t\t<ul class=\"greyarrow\">
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a></li> 
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end related-act-inner -->
\t\t\t<div class=\"clear\"></div>
\t\t
\t\t</div>
\t\t<!-- end related-act-bottom -->
\t
\t</div>
\t<!-- end related-activities -->

</td>
</tr>
<tr>
<td>
      <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/blank.gif"), "html", null, true);
        echo "\" width=\"695\" height=\"1\" alt=\"blank\" /> 
   
</td>
<td></td>
</tr>
</table>
 
<div class=\"clear\"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id=\"tbl-border-right\"></td>
</tr>
<tr>
\t<th class=\"sized bottomleft\"></th>
\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t<th class=\"sized bottomright\"></th>
</tr>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Sousrubrique:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 179,  212 => 151,  192 => 134,  171 => 116,  155 => 103,  132 => 83,  124 => 78,  114 => 71,  101 => 61,  89 => 52,  53 => 19,  41 => 10,  33 => 5,  28 => 4,);
    }
}
