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
<<<<<<< HEAD
            'menu_haut' => array($this, 'block_menu_haut'),
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'article' => array($this, 'block_article'),
            'menu_droite' => array($this, 'block_menu_droite'),
            'container' => array($this, 'block_container'),
=======
            'content' => array($this, 'block_content'),
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
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
=======
        // line 2
        echo "

<!DOCTYPE html>
<html lang=\"en\">
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "    <body>
        <!--==============================header=================================-->
            ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"main\">
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
            <tr>
                <td align=\"center\">\t
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:718px\">
                        <tr>
                            <td style=\"height:102px\">
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                    <tr>
                                        <td style=\"width:345px; padding:16px 0px 0px 0px;\">
                                            <a href=\"#\">
<<<<<<< HEAD
                                              <!--  <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->       
=======
                                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" />          
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                            </a>
                                        </td>
                                        <td style=\"width:220px; padding:45px 0px 0px 0px;\">
                                            <a href=\"#\"> <img src=\"";
<<<<<<< HEAD
        // line 42
=======
        // line 31
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/flags.jpg"), "html", null, true);
        echo "\" alt=\"\"  class=\"middle\"  /></a><select class=\"jump\"><option>US Dollar</option></select>
                                        </td>
                                        <td style=\"padding:37px 0px 0px 0px;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>  <img src=\"";
<<<<<<< HEAD
        // line 47
=======
        // line 36
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 59
=======
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner1.jpg"), "html", null, true);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo "\" alt=\"\" /> 
                                </a>
                                <a href=\"#\">
                                    <img src=\"";
<<<<<<< HEAD
        // line 62
=======
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner2.jpg"), "html", null, true);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo "\" alt=\"\" />
                                </a>
                            </td>
                        </tr> -->
                        <tr>
<<<<<<< HEAD
                            <td>
                                                               <!--    menu horiz           -->                       
               
                                 <div class=\"stretchHolder\">                                    
\t                                                ";
        // line 71
        $this->displayBlock('menu_haut', $context, $blocks);
        echo "                                                                              
                                  </div>

                                                                  <!--  menu horiz          -->
=======
                            <td style=\"height:73px\">
                                <a href=\"index.html\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m1.jpg"), "html", null, true);
        echo "\" style=\"margin:0px 0px 0px 22px;\" alt=\"\" /></a><a href=\"index-1.html\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m2.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a><a href=\"index-2.html\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m3.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a><a href=\"index-3.html\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m4.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a><a href=\"index-4.html\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/m5.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding:0px 3px 25px 5px;\">

                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                    <tr>
                                        <td style=\"width:177px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                                <tr>
<<<<<<< HEAD
                                                    <td> <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td style=\"width:100%\">Categories:</td>
                                                    <td> <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
=======
                                                    <td>
                                                      <!--     <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\" /> -->
                                                    </td>
                                                    <td style=\"width:100%\">Categories:</td>
                                                    <td>
                                                  <!--      <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\" /> -->
                                                    </td>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
<<<<<<< HEAD
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
=======
                                                    <td>
                                                     <!--     <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\" /> -->
                                                    </td>
                                                    <td class=\"c1_top\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\"   alt=\"\" /></td>
                                                    <td>
                                                         <!--  <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\" /> --> </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\"><img src=\"";
        // line 88
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" /></td>
                                                    <td>
                                                        <br style=\"line-height:5px\" />
                                                        <ul>
<<<<<<< HEAD
                                         
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
                                                            
=======
                                                            <li class=\"bg_list\"><a href=\"#\">Advantage Flea</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Advantix K9</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Dog House</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Airline Carriers</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Allergies: Human</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Andis Clippers</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Anti-bark Devices</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Jingle Collars</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Backpacks</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Bad Breath</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Balls</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Bandannas</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Bark Collars</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Bath Supplies</a></li>
                                                            <li class=\"bg_list\"><a href=\"#\">Boomboxes</a></li>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                        </ul>
                                                        <br style=\"line-height:10px\" />
                                                    </td>
                                                    <td class=\"c1_right\">

                                                        <img src=\"";
<<<<<<< HEAD
        // line 142
=======
        // line 112
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" />                                     
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
<<<<<<< HEAD
                                                        <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                     
=======
                                                       <!--   <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                                 
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                                    </td>
                                                    <td class=\"c1_bottom\">
                                                        <img src=\"";
<<<<<<< HEAD
        // line 151
=======
        // line 121
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                                       

                                                    </td>
                                                    <td>
<<<<<<< HEAD
                                                       <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                  
=======
                                                    <!--      <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />      -->                                            
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <img src=\"";
<<<<<<< HEAD
        // line 162
=======
        // line 132
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"3\" height=\"1\" alt=\"\" />                               

                                        </td>
                                        <td style=\"width:350px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"cont_header_txt\">
                                                <tr>
                                                    <td>
<<<<<<< HEAD
                                                      <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                             
=======
                                                     <!--     <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                                                       
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                                    </td>
                                                    <td style=\"width:100%\">featured products:</td>
                                                    <td>
<<<<<<< HEAD
                                                       <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                         
=======
                                                    <!--      <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />        -->                                                 
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3


                                                    </td>
                                                </tr>
                                            </table>
<<<<<<< HEAD
                                               <!-- div pour  limiter larticle => -->   
                                            <div style=\"height:400px;width:350px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
                                            ";
        // line 182
        $this->displayBlock('article', $context, $blocks);
        // line 183
        echo "                                            </div>
                                             <!--        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"product\">
=======
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"product\">
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                <tr>
                                                    <td style=\"padding:0px 2px 3px 2px;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                            <tr>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
                                                                            <td>
<<<<<<< HEAD
                                                                              <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                        
=======
                                                                              <!--    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                                                    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3


                                                                            </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
<<<<<<< HEAD
        // line 199
=======
        // line 165
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                 
                                                                            </td>
                                                                            <td>

<<<<<<< HEAD
                                                                               <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\" alt=\"\" />                  
=======
                                                                          <!--        <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\" alt=\"\" />     -->             
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">

                                                                                <img src=\"";
<<<<<<< HEAD
        // line 209
=======
        // line 175
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 221
=======
        // line 187
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 234
=======
        // line 200
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\" alt=\"\" />                          
                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">


                                                                                                <img src=\"";
<<<<<<< HEAD
        // line 239
=======
        // line 205
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\" alt=\"\" />                              
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">

                                                                                <img src=\"";
<<<<<<< HEAD
        // line 247
=======
        // line 213
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\"  />                

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>


                                                                                <img src=\"";
<<<<<<< HEAD
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                  
=======
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                 
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                                            </td>
                                                                            <td class=\"c2_bottom\">

                                                                                <img src=\"";
<<<<<<< HEAD
        // line 259
=======
        // line 225
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\"  />                 
                                                                            </td>
                                                                            <td>


<<<<<<< HEAD
                                                                               <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                 
=======
                                                                                <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td> <img src=\"";
<<<<<<< HEAD
        // line 269
=======
        // line 235
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"2\" height=\"1\" /></td>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
<<<<<<< HEAD
                                                                            <td>
                                                                                 <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>  
                                                                                 </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 278
=======
                                                                            <td><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\"alt=\"\"/></td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 242
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"9\" height=\"9\" />                      
                                                                            </td>
                                                                            <td>
<<<<<<< HEAD
                                                                               <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                        
=======
                                                                                <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                       
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">
                                                                                <img src=\"";
<<<<<<< HEAD
        // line 288
=======
        // line 252
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 301
=======
        // line 265
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 313
=======
        // line 277
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                            

                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">

                                                                                                <img src=\"";
<<<<<<< HEAD
        // line 318
=======
        // line 282
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                   
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">
                                                                                <img src=\"";
<<<<<<< HEAD
        // line 325
=======
        // line 289
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\"/>                                   
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
<<<<<<< HEAD
                                                                               <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                     
=======
                                                                           <!--       <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>      -->                             
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3


                                                                            </td>
                                                                            <td class=\"c2_bottom\">
                                                                                <img src=\"";
<<<<<<< HEAD
        // line 335
=======
        // line 299
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"  alt=\"\" width=\"1\" height=\"9\"/>                                      

                                                                            </td>
                                                                            <td>
<<<<<<< HEAD
                                                                               <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                   
=======
                                                                           <!--       <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                -->                   
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <img src=\"";
<<<<<<< HEAD
        // line 346
=======
        // line 310
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 357
=======
        // line 321
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner3.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>           


                                                        </a>
                                                    </td>
                                                </tr>
<<<<<<< HEAD
                                            </table> -->
=======
                                            </table>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                        </td>
                                        <td><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>
                                        <td style=\"width:177px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt mod\">
                                                <tr>
                                                    <td>

<<<<<<< HEAD
                                                        <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                               
=======
                                                    <!--      <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>    -->                           
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                    </td>
                                                    <td style=\"width:100%\">manufacturers:</td>
                                                    <td>



<<<<<<< HEAD
                                                       <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                   
=======
                                             <!--             <img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>     -->                               
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
                                                        <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                        
=======
                                                  <!--        <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>   -->                                    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                                    </td>
                                                    <td style=\"width:100%\">information:</td>
                                                    <td>
<<<<<<< HEAD
                                                        <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                             
=======
                                                   <!--       <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>  -->                                            
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

                                                    </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
                                                    <td>


<<<<<<< HEAD
                                                     <img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                       
=======
                                                     <!--     <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>   -->                                    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                    </td>
                                                    <td class=\"c1_top\">


                                                        <img src=\"";
<<<<<<< HEAD
        // line 414
=======
        // line 378
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                       
                                                             </td>
                                                             <td>
<<<<<<< HEAD
                                                          <img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                      
=======
                                                            <!--   <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>   -->                    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\">
                                                        <img src=\"";
<<<<<<< HEAD
        // line 424
=======
        // line 388
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                               


                                                             </td>
                                                             <td>
                                                             <ul>
<<<<<<< HEAD
                                                                 
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
                                             
=======
                                                <li class=\"bg_list_un\"><a href=\"#\">Article 1</a></li>
                                                <li class=\"bg_list_un\"><a href=\"#\">Article 2</a></li>
                                                <li class=\"bg_list_un\"><a href=\"#\">Article 3</a></li>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                           </ul>
                                                <br style=\"line-height:10px\" />
                                                 </td>
                                        <td class=\"c1_right\">

                                            <img src=\"";
<<<<<<< HEAD
        // line 441
=======
        // line 402
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                              
                                                 </td>
                                                 </tr>
                                                 <tr>
                                                 <td>
<<<<<<< HEAD
                                          <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"/>   
=======
                                          <!--  <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"/> -->
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                                                          
                                        </td>
                                        <td class=\"c1_bottom\">

                                            <img src=\"";
<<<<<<< HEAD
        // line 451
=======
        // line 412
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                          
                                        </td>
                                        <td>

<<<<<<< HEAD
                                           <img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />        
=======
                                         <!--     <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />  -->                     
                                        </td>
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
                                    </tr>
                                </table>
                                <br style=\"line-height:4px\" />
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                    <tr>
<<<<<<< HEAD
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
=======
                                        <td>
                                         <!--     <img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                               


                                        </td>
                                        <td style=\"width:100%\">specials:</td>
                                        <td>
                                           <!--   <img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />  -->                              
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

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
<<<<<<< HEAD
        // line 486
=======
        // line 449
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        // line 513
=======
        // line 476
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/fp.jpg"), "html", null, true);
        echo "\" alt=\"\" align=\"left\"/>                           



                    <img src=\"";
<<<<<<< HEAD
        // line 517
=======
        // line 480
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"31\" height=\"1\"/>                                   
                    Pets store &copy; 2008 &nbsp;|&nbsp; <a href=\"#\">Privacy policy</a>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
<<<<<<< HEAD
               
</body>
</html>

";
        // line 529
        $this->displayBlock('container', $context, $blocks);
        // line 530
        echo "

=======

</body>
</html>

>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3








";
    }

<<<<<<< HEAD
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
=======
    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <title>Home</title>
    <meta charset=\"utf-8\">

    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/stylesheet.css"), "html", null, true);
        echo "\"/> 

";
    }

    // line 15
    public function block_content($context, array $blocks = array())
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
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
<<<<<<< HEAD
        return array (  829 => 529,  823 => 433,  818 => 182,  812 => 106,  806 => 71,  800 => 18,  796 => 17,  791 => 15,  787 => 14,  783 => 13,  779 => 12,  775 => 11,  771 => 10,  767 => 9,  761 => 6,  757 => 4,  754 => 3,  740 => 530,  738 => 529,  723 => 517,  716 => 513,  686 => 486,  664 => 467,  655 => 461,  646 => 455,  639 => 451,  631 => 446,  623 => 441,  614 => 434,  610 => 433,  607 => 432,  604 => 431,  594 => 424,  584 => 417,  578 => 414,  570 => 409,  556 => 398,  548 => 393,  530 => 378,  520 => 371,  503 => 357,  489 => 346,  479 => 339,  472 => 335,  464 => 330,  456 => 325,  446 => 318,  397 => 281,  391 => 278,  376 => 269,  353 => 255,  342 => 247,  331 => 239,  323 => 234,  307 => 221,  292 => 209,  276 => 199,  255 => 183,  253 => 182,  242 => 174,  207 => 151,  200 => 147,  155 => 107,  114 => 85,  58 => 42,  299 => 103,  291 => 101,  284 => 100,  281 => 99,  274 => 92,  267 => 193,  260 => 87,  257 => 85,  250 => 84,  236 => 81,  234 => 169,  225 => 78,  197 => 70,  192 => 142,  188 => 65,  185 => 64,  181 => 63,  167 => 54,  160 => 52,  153 => 106,  146 => 47,  129 => 40,  97 => 71,  84 => 26,  37 => 5,  150 => 65,  139 => 56,  104 => 31,  90 => 41,  81 => 59,  77 => 24,  591 => 407,  586 => 406,  581 => 405,  576 => 404,  571 => 403,  566 => 402,  522 => 408,  519 => 407,  516 => 406,  513 => 405,  510 => 404,  507 => 403,  504 => 402,  488 => 388,  478 => 381,  438 => 313,  434 => 343,  389 => 313,  385 => 312,  378 => 308,  361 => 297,  354 => 293,  330 => 278,  290 => 244,  282 => 239,  222 => 76,  206 => 144,  190 => 131,  161 => 106,  134 => 42,  120 => 74,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 339,  423 => 301,  413 => 328,  409 => 327,  407 => 288,  402 => 323,  398 => 129,  393 => 126,  387 => 122,  384 => 274,  381 => 120,  379 => 119,  374 => 116,  368 => 264,  365 => 298,  362 => 110,  360 => 259,  355 => 106,  341 => 283,  337 => 282,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 245,  285 => 89,  283 => 203,  278 => 238,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 179,  241 => 82,  229 => 73,  220 => 70,  214 => 155,  177 => 65,  169 => 60,  140 => 44,  132 => 94,  128 => 93,  111 => 37,  107 => 33,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 79,  224 => 162,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  131 => 52,  119 => 87,  108 => 65,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  79 => 18,  75 => 17,  68 => 14,  56 => 27,  50 => 37,  29 => 3,  87 => 27,  72 => 22,  55 => 16,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 14,  44 => 8,  35 => 5,  31 => 20,  43 => 8,  41 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 98,  138 => 54,  136 => 95,  123 => 47,  121 => 38,  117 => 44,  115 => 35,  105 => 40,  101 => 45,  91 => 27,  69 => 35,  66 => 47,  62 => 30,  49 => 19,  24 => 4,  32 => 9,  25 => 1,  22 => 2,  19 => 1,  209 => 73,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 59,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 62,  82 => 22,  80 => 25,  73 => 36,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 15,  39 => 6,  36 => 10,  33 => 8,  30 => 7,);
=======
        return array (  729 => 15,  722 => 10,  717 => 7,  714 => 6,  689 => 480,  682 => 476,  652 => 449,  630 => 430,  621 => 424,  610 => 416,  603 => 412,  595 => 407,  587 => 402,  570 => 388,  560 => 381,  554 => 378,  546 => 373,  532 => 362,  524 => 357,  506 => 342,  496 => 335,  479 => 321,  465 => 310,  455 => 303,  448 => 299,  440 => 294,  432 => 289,  422 => 282,  414 => 277,  399 => 265,  383 => 252,  373 => 245,  367 => 242,  361 => 239,  354 => 235,  346 => 230,  338 => 225,  331 => 221,  320 => 213,  309 => 205,  301 => 200,  285 => 187,  270 => 175,  261 => 169,  254 => 165,  245 => 159,  227 => 144,  219 => 139,  209 => 132,  199 => 125,  192 => 121,  185 => 117,  177 => 112,  150 => 88,  144 => 85,  139 => 83,  134 => 81,  123 => 73,  116 => 69,  93 => 57,  84 => 51,  78 => 48,  63 => 36,  55 => 31,  47 => 26,  35 => 16,  33 => 15,  29 => 13,  27 => 6,  21 => 2,);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    }
}
