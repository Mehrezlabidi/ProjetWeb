<?php

/* MyAppEspritBundle::layout.html.twig */
class __TwigTemplate_2ad8ba936975df80e7d5246059417d488d5670036b81ab96f5b2b21e75d26b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<!DOCTYPE html>
<html lang=\"fr\">
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "    <body>
        <!--==============================header=================================-->
            
 
 

               
        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"main\">
            <tr>
                <td align=\"center\">\t
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:718px\">
                        <tr>
                            <td style=\"height:102px\">
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                    <tr>
                                        <td style=\"width:345px; padding:16px 0px 0px 0px;\">
                                            <a href=\"#\">
                                              <!--  <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->       

                                            </a>
                                        </td>
                                        <td style=\"width:220px; padding:45px 0px 0px 0px;\">
                                            <a href=\"#\"> <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/flags.jpg"), "html", null, true);
        echo "\" alt=\"\"  class=\"middle\"  /></a><select class=\"jump\"><option>US Dollar</option></select>
                                        </td>
                                        <td style=\"padding:37px 0px 0px 0px;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>  <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/hp.jpg"), "html", null, true);
        echo "\" alt=\"\" />   </td>
                                                    <td style=\"width:100%; padding:4px 0px 0px 0px;\"><h1>Shopping cart: <br /><a href=\"#\">0 items</a></h1></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                      <!--  <tr>
                            <td style=\"height:184px\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 58
        echo "\" alt=\"\" /> 
                                </a>
                                <a href=\"#\">
                                    <img src=\"";
        // line 61
        echo "\" alt=\"\" />
                                </a>
                            </td>
                        </tr> -->
                        <tr>
                            <td style=\"height:73px\">
                                
       <a href=\"index.html\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m1.jpg"), "html", null, true);
        echo "\" style=\"margin:0px 0px 0px 22px;\" alt=\"\" /></a>
       <a href=\"index-1.html\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m2.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a>
       <a href=\"index-2.html\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m3.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a>
       <a href=\"index-3.html\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m4.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a>
       <a href=\"index-4.html\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m5.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a>
       
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding:0px 3px 25px 5px;\">

                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                    <tr>
                                        <td style=\"width:177px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                                <tr>
                                                    <td> <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td style=\"width:100%\">Categories:</td>
                                                    <td> <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
                                                    <td> <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td class=\"c1_top\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\"   alt=\"\" /></td>
                                                    <td><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" /></td>
                                                    <td>
                                                        <br style=\"line-height:5px\" />
                                                        <ul>
                                         
          <!-- menu a gauche  -->     
     
\t<ul class=\"menu\"> 
  
 ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 107
            echo "                <li class=\"item1\"><a href=\"#\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"), "html", null, true);
            echo " <span>R</span></a>  
                    
\t\t\t <ul>                 
               ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                // line 111
                echo "                         ";
                // line 112
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                    echo "     
                             <li class=\"subitem1\"><a href=\"#\">";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title"), "html", null, true);
                    echo " <span>S</span></a></li> 
                    ";
                }
                // line 114
                echo "         
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo " 
 
               ";
            // line 117
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo " 
                             ";
                // line 119
                echo "                      ";
                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                    echo " 
                             <li class=\"subitem1\"><a href=\"#\">";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                    echo " <span>A</span></a></li>
                      ";
                }
                // line 121
                echo "  
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "  
\t\t\t</ul>
                    
\t\t</li>     
                
            
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "   
  
       
\t</ul>
  
   
   
<!--initiate accordion-->
<script type=\"text/javascript\">
\t\$(function() {
\t
\t    var menu_ul = \$('.menu > li > ul'),
\t           menu_a  = \$('.menu > li > a');
\t    
\t    menu_ul.hide();
\t
\t    menu_a.click(function(e) {
\t        e.preventDefault();
\t        if(!\$(this).hasClass('active')) {
\t            menu_a.removeClass('active');
\t            menu_ul.filter(':visible').slideUp('normal');
\t            \$(this).addClass('active').next().stop(true,true).slideDown('normal');
\t        } else {
\t            \$(this).removeClass('active');
\t            \$(this).next().stop(true,true).slideUp('normal');
\t        }
\t    });
\t
\t});
</script>        
                                                            
                <!-- menu              a              gauche  -->                                                     
                                                            
                                                        </ul>
                                                        <br style=\"line-height:10px\" />
                                                    </td>
                                                    <td class=\"c1_right\">

                                                        <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" />                                     
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                     

                                                    </td>
                                                    <td class=\"c1_bottom\">
                                                        <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                                       

                                                    </td>
                                                    <td>
                                                       <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                  

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"3\" height=\"1\" alt=\"\" />                               

                                        </td>
                                        <td style=\"width:350px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"cont_header_txt\">
                                                <tr>
                                                    <td>
                                                      <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                             

                                                    </td>
                                                    <td style=\"width:100%\">featured products:</td>
                                                    <td>
                                                       <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                         


                                                    </td>
                                                </tr>
                                            </table>
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"product\">
                                                <tr>
                                                    <td style=\"padding:0px 2px 3px 2px;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                            <tr>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
                                                                            <td>
                                                                              <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                        


                                                                            </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                 
                                                                            </td>
                                                                            <td>

                                                                               <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\" alt=\"\" />                  
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">

                                                                                <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\"  />                
                                                                            </td>
                                                                            <td style=\"padding:7px 5px 4px 10px;\">
                                                                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                                                    <tr>
                                                                                        <td style=\"height:40px\">
                                                                                            <a href=\"#\">Cat Print Tapestry Kitty Cave</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>

                                                                                            <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/0p1.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                  

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=\"middle\" style=\"height:26px\">
                                                                                            <span class=\"productSpecialPrice\">\$39.99</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=\"middle\" style=\"height:54px\">
                                                                                            <a href=\"#\">

                                                                                                <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\" alt=\"\" />                          
                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">


                                                                                                <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\" alt=\"\" />                              
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">

                                                                                <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\"  />                

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>


                                                                                <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                  
                                                                            </td>
                                                                            <td class=\"c2_bottom\">

                                                                                <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\"  />                 
                                                                            </td>
                                                                            <td>


                                                                               <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                 
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td> <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"2\" height=\"1\" /></td>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
                                                                            <td>
                                                                                 <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>  
                                                                                 </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"9\" height=\"9\" />                      
                                                                            </td>
                                                                            <td>
                                                                               <img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                        


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">
                                                                                <img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\"  width=\"9\" height=\"1\" />                         

                                                                            </td>
                                                                            <td style=\"padding:7px 5px 4px 10px;\">
                                                                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                                                    <tr>
                                                                                        <td style=\"height:40px\">
                                                                                            <a href=\"#\">Lipiderm Healthy Skin and Coat Gel Capsules</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>

                                                                                            <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/0p2.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                 

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=\"middle\" style=\"height:26px\">
                                                                                            <span class=\"productSpecialPrice\">\$17.99</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class=\"middle\" style=\"height:54px\">
                                                                                            <a href=\"#\">
                                                                                                <img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                            

                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">

                                                                                                <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                   
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">
                                                                                <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\"/>                                   
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                               <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                     


                                                                            </td>
                                                                            <td class=\"c2_bottom\">
                                                                                <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"  alt=\"\" width=\"1\" height=\"9\"/>                                      

                                                                            </td>
                                                                            <td>
                                                                               <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                   

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"  alt=\"\" width=\"2\" height=\"1\"/>              


                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href=\"#\">
                                                            <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner3.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>           


                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>
                                        <td style=\"width:177px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt mod\">
                                                <tr>
                                                    <td>

                                                        <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                               
                                                    </td>
                                                    <td style=\"width:100%\">manufacturers:</td>
                                                    <td>



                                                       <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                   
                                                    </td>
                                                </tr>
                                            </table>
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td class=\"sel2\" style=\"padding:0px 17px 0px 17px;\">
                                                        <select class=\"jump1\"><option>Please select</option></select>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:5px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                                <tr>
                                                    <td>
                                                        <img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                        

                                                    </td>
                                                    <td style=\"width:100%\">information:</td>
                                                    <td>
                                                        <img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                             

                                                    </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
                                                    <td>


                                                     <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                       
                                                    </td>
                                                    <td class=\"c1_top\">


                                                        <img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                       
                                                             </td>
                                                             <td>
                                                          <img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                      


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\">
                                                        <img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                               


                                                             </td>
                                                             <td>
                                                             <ul>
                                                                 
                                         ";
        // line 451
        echo "                             
                                            ";
        // line 452
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 453
            echo "                                              ";
            echo " 
                                          <li class=\"bg_list_un\"><a href=\"#\">Article 1</a></li>
\t\t\t\t\t  <li class=\"bg_list_un\"><a href=\"#\">Article 2</a></li>
\t\t\t\t\t  <li class=\"bg_list_un\"><a href=\"#\">Article 3</a></li>           
                                                                 
                                             ";
        }
        // line 458
        echo " 
                                             
                                                           </ul>
                                                <br style=\"line-height:10px\" />
                                                 </td>
                                        <td class=\"c1_right\">

                                            <img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                              
                                                 </td>
                                                 </tr>
                                                 <tr>
                                                 <td>
                                          <img src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"/>   
                                                                          
                                        </td>
                                        <td class=\"c1_bottom\">

                                            <img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                          
                                        </td>
                                        <td>

                                           <img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />        
                                    </tr>
                                </table>
                                <br style=\"line-height:4px\" />
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                    <tr>
                                      <td>  <img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                   
                                          </td>

                                       
                                        <td style=\"width:100%\">specials:</td>
                                        <td>
                                           <img src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                 

                                        </td>
                                    </tr>
                                </table>
                                <br style=\"line-height:7px\" />
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body\">
                                    <tr>

                                        <td style=\"padding:0px 17px 0px 17px;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td class=\"middle\" style=\"height:20px\">
                                                        <span><a href=\"#\">KMR Powder by Pet Ag </a></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <br style=\"line-height:5px\" />
                                                        <img src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/0px.jpg"), "html", null, true);
        echo "\" alt=\"\" />                           

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style=\"height:30px\" class=\"middle\">
                                                <s>\$10.99</s>&nbsp; &nbsp; &nbsp; &nbsp; <span class=\"productSpecialPrice\">\$10.99</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
</td>
</tr>
<tr>
    <td class=\"footer\">
        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:718px\" align=\"center\">
            <tr>
                <td style=\"padding:11px 0px 0px 13px;\">

                    <img src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/fp.jpg"), "html", null, true);
        echo "\" alt=\"\" align=\"left\"/>                           



                    <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"31\" height=\"1\"/>                                   
                    Pets store &copy; 2008 &nbsp;|&nbsp; <a href=\"#\">Privacy policy</a>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
               
</body>
</html>

";
        // line 553
        $this->displayBlock('container', $context, $blocks);
        // line 555
        echo "






";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "   <title>   </title>
    <meta charset=\"utf-8\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/stylesheet.css"), "html", null, true);
        echo "\"/> 
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/reset.css"), "html", null, true);
        echo "\"/> 
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/animate.css"), "html", null, true);
        echo "\"/> 
       <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/styles.css"), "html", null, true);
        echo "\"/>  
       <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/login-box.css"), "html", null, true);
        echo "\"/>     
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/stylemenu.css"), "html", null, true);
        echo "\"/>  
";
    }

    // line 553
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  872 => 553,  866 => 17,  862 => 16,  858 => 15,  854 => 14,  850 => 13,  846 => 12,  840 => 9,  836 => 7,  833 => 6,  822 => 555,  820 => 553,  805 => 541,  798 => 537,  768 => 510,  746 => 491,  737 => 485,  728 => 479,  721 => 475,  713 => 470,  705 => 465,  696 => 458,  687 => 453,  685 => 452,  682 => 451,  672 => 444,  662 => 437,  656 => 434,  648 => 429,  634 => 418,  626 => 413,  608 => 398,  598 => 391,  581 => 377,  567 => 366,  557 => 359,  550 => 355,  542 => 350,  534 => 345,  524 => 338,  516 => 333,  501 => 321,  485 => 308,  475 => 301,  469 => 298,  462 => 294,  454 => 289,  446 => 284,  438 => 279,  431 => 275,  420 => 267,  409 => 259,  401 => 254,  385 => 241,  370 => 229,  361 => 223,  354 => 219,  345 => 213,  327 => 198,  319 => 193,  309 => 186,  299 => 179,  292 => 175,  285 => 171,  277 => 166,  237 => 128,  225 => 122,  218 => 121,  213 => 120,  208 => 119,  202 => 117,  198 => 115,  191 => 114,  186 => 113,  181 => 112,  179 => 111,  175 => 110,  168 => 107,  164 => 106,  152 => 97,  146 => 94,  142 => 93,  138 => 92,  129 => 86,  124 => 84,  109 => 72,  105 => 71,  101 => 70,  97 => 69,  93 => 68,  84 => 61,  79 => 58,  64 => 46,  56 => 41,  48 => 36,  29 => 19,  27 => 6,  21 => 2,);
    }
}
