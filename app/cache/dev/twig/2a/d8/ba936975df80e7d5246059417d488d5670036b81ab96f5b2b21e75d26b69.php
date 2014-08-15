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
            'menu_haut' => array($this, 'block_menu_haut'),
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'article' => array($this, 'block_article'),
            'menu_droite' => array($this, 'block_menu_droite'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
<html>
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 20
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
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->       

                                            </a>
                                        </td>
                                        <td style=\"width:220px; padding:45px 0px 0px 0px;\">
                                            <a href=\"#\"> <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/flags.jpg"), "html", null, true);
        echo "\" alt=\"\"  class=\"middle\"  /></a><select class=\"jump\"><option>US Dollar</option></select>
                                        </td>
                                        <td style=\"padding:37px 0px 0px 0px;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>  <img src=\"";
        // line 47
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
        // line 59
        echo "\" alt=\"\" /> 
                                </a>
                                <a href=\"#\">
                                    <img src=\"";
        // line 62
        echo "\" alt=\"\" />
                                </a>
                            </td>
                        </tr> -->
                        <tr>
                            <td>
                                                               <!--    menu horiz           -->                       
               
                                 <div class=\"stretchHolder\">                                    
\t                                                ";
        // line 71
        $this->displayBlock('menu_haut', $context, $blocks);
        echo "                                                                              
                                  </div>

                                                                  <!--  menu horiz          -->
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td style=\"width:100%\">Categories:</td>
                                                    <td> <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
                                                    <td> <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td class=\"c1_top\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\"   alt=\"\" /></td>
                                                    <td><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" /></td>
                                                    <td>
                                                        <br style=\"line-height:5px\" />
                                                        <ul>
                                         
          <!-- menu a gauche  -->     
     
\t                                             <ul class=\"menu\">   
                                                       ";
        // line 106
        $this->displayBlock('menu_gauche', $context, $blocks);
        // line 107
        echo "\t                                             </ul>
  
   
   
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
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" />                                     
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                     

                                                    </td>
                                                    <td class=\"c1_bottom\">
                                                        <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                                       

                                                    </td>
                                                    <td>
                                                       <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                  

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"3\" height=\"1\" alt=\"\" />                               

                                        </td>
                                        <td style=\"width:350px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"cont_header_txt\">
                                                <tr>
                                                    <td>
                                                      <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                             

                                                    </td>
                                                    <td style=\"width:100%\">featured products:</td>
                                                    <td>
                                                       <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                         


                                                    </td>
                                                </tr>
                                            </table>
                                               <!-- div pour  limiter larticle => -->   
                                            <div style=\"height:400px;width:350px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
                                            ";
        // line 182
        $this->displayBlock('article', $context, $blocks);
        // line 183
        echo "                                            </div>
                                             <!--        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"product\">
                                                <tr>
                                                    <td style=\"padding:0px 2px 3px 2px;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                            <tr>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
                                                                            <td>
                                                                              <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                        


                                                                            </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                 
                                                                            </td>
                                                                            <td>

                                                                               <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\" alt=\"\" />                  
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">

                                                                                <img src=\"";
        // line 209
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
        // line 221
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
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\" alt=\"\" />                          
                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">


                                                                                                <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\" alt=\"\" />                              
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">

                                                                                <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\"  />                

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>


                                                                                <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                  
                                                                            </td>
                                                                            <td class=\"c2_bottom\">

                                                                                <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\"  />                 
                                                                            </td>
                                                                            <td>


                                                                               <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                 
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td> <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"2\" height=\"1\" /></td>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
                                                                            <td>
                                                                                 <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>  
                                                                                 </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"9\" height=\"9\" />                      
                                                                            </td>
                                                                            <td>
                                                                               <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                        


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">
                                                                                <img src=\"";
        // line 288
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
        // line 301
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
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                            

                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">

                                                                                                <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                   
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">
                                                                                <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\"/>                                   
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                               <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                     


                                                                            </td>
                                                                            <td class=\"c2_bottom\">
                                                                                <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"  alt=\"\" width=\"1\" height=\"9\"/>                                      

                                                                            </td>
                                                                            <td>
                                                                               <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                   

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <img src=\"";
        // line 346
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
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner3.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>           


                                                        </a>
                                                    </td>
                                                </tr>
                                            </table> -->
                                        </td>
                                        <td><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>
                                        <td style=\"width:177px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt mod\">
                                                <tr>
                                                    <td>

                                                        <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                               
                                                    </td>
                                                    <td style=\"width:100%\">manufacturers:</td>
                                                    <td>



                                                       <img src=\"";
        // line 378
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
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                        

                                                    </td>
                                                    <td style=\"width:100%\">information:</td>
                                                    <td>
                                                        <img src=\"";
        // line 398
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
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                       
                                                    </td>
                                                    <td class=\"c1_top\">


                                                        <img src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                       
                                                             </td>
                                                             <td>
                                                          <img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                      


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\">
                                                        <img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                               


                                                             </td>
                                                             <td>
                                                             <ul>
                                                                 
                                         ";
        // line 431
        echo "                             
                                            ";
        // line 432
        echo "                                                                                          
                                           ";
        // line 433
        $this->displayBlock('menu_droite', $context, $blocks);
        echo "                      
                                             ";
        // line 434
        echo " 
                                             
                                                           </ul>
                                                <br style=\"line-height:10px\" />
                                                 </td>
                                        <td class=\"c1_right\">

                                            <img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                              
                                                 </td>
                                                 </tr>
                                                 <tr>
                                                 <td>
                                          <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"/>   
                                                                          
                                        </td>
                                        <td class=\"c1_bottom\">

                                            <img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                          
                                        </td>
                                        <td>

                                           <img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />        
                                    </tr>
                                </table>
                                <br style=\"line-height:4px\" />
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                    <tr>
                                      <td>  <img src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                   
                                          </td>

                                       
                                        <td style=\"width:100%\">specials:</td>
                                        <td>
                                           <img src=\"";
        // line 467
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
        // line 486
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
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/fp.jpg"), "html", null, true);
        echo "\" alt=\"\" align=\"left\"/>                           



                    <img src=\"";
        // line 517
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
        // line 529
        $this->displayBlock('container', $context, $blocks);
        // line 530
        echo "









";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "  <title>  Home </title>
    <meta charset=\"utf-8\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/stylesheet.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/reset.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/animate.css"), "html", null, true);
        echo "\"/> 
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/styles.css"), "html", null, true);
        echo "\"/>  
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/login-box.css"), "html", null, true);
        echo "\"/>     
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/stylemenu.css"), "html", null, true);
        echo "\"/>  
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/styleHorizontal.css"), "html", null, true);
        echo "\"/> 
<!-- -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/menuhorizontal.css"), "html", null, true);
        echo "\"/>  
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/menuvertical.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 71
    public function block_menu_haut($context, array $blocks = array())
    {
        echo " ";
    }

    // line 106
    public function block_menu_gauche($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 182
    public function block_article($context, array $blocks = array())
    {
    }

    // line 433
    public function block_menu_droite($context, array $blocks = array())
    {
        echo " ";
    }

    // line 529
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
        return array (  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  438 => 313,  423 => 301,  407 => 288,  397 => 281,  391 => 278,  384 => 274,  376 => 269,  368 => 264,  360 => 259,  353 => 255,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  283 => 203,  276 => 199,  267 => 193,  255 => 183,  253 => 182,  242 => 174,  234 => 169,  224 => 162,  214 => 155,  207 => 151,  200 => 147,  192 => 142,  155 => 107,  153 => 106,  142 => 98,  136 => 95,  132 => 94,  128 => 93,  119 => 87,  114 => 85,  97 => 71,  86 => 62,  81 => 59,  66 => 47,  58 => 42,  29 => 3,  25 => 1,  70 => 25,  65 => 22,  59 => 21,  56 => 20,  50 => 37,  48 => 17,  39 => 11,  35 => 10,  31 => 20,  28 => 7,);
    }
}
