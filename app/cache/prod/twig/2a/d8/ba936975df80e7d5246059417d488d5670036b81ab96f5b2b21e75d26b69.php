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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
            <tr>
                <td align=\"center\">\t
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:718px\">
                        <tr>
                            <td style=\"height:102px\">
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                    <tr>
                                        <td style=\"width:345px; padding:16px 0px 0px 0px;\">
                                            <a href=\"#\">
                                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" />          

                                            </a>
                                        </td>
                                        <td style=\"width:220px; padding:45px 0px 0px 0px;\">
                                            <a href=\"#\"> <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/flags.jpg"), "html", null, true);
        echo "\" alt=\"\"  class=\"middle\"  /></a><select class=\"jump\"><option>US Dollar</option></select>
                                        </td>
                                        <td style=\"padding:37px 0px 0px 0px;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>  <img src=\"";
        // line 36
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner1.jpg"), "html", null, true);
        echo "\" alt=\"\" /> 
                                </a>
                                <a href=\"#\">
                                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/banner2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </td>
                        </tr> -->
                        <tr>
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
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding:0px 3px 25px 5px;\">

                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                    <tr>
                                        <td style=\"width:177px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                                <tr>
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
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" /></td>
                                                    <td>
                                                        <br style=\"line-height:5px\" />
                                                        <ul>
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
                                                        </ul>
                                                        <br style=\"line-height:10px\" />
                                                    </td>
                                                    <td class=\"c1_right\">

                                                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" />                                     
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                       <!--   <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                                 

                                                    </td>
                                                    <td class=\"c1_bottom\">
                                                        <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                                       

                                                    </td>
                                                    <td>
                                                    <!--      <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />      -->                                            

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"3\" height=\"1\" alt=\"\" />                               

                                        </td>
                                        <td style=\"width:350px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"cont_header_txt\">
                                                <tr>
                                                    <td>
                                                     <!--     <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                                                       

                                                    </td>
                                                    <td style=\"width:100%\">featured products:</td>
                                                    <td>
                                                    <!--      <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />        -->                                                 


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
                                                                              <!--    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\" alt=\"\" />    -->                                                    


                                                                            </td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                 
                                                                            </td>
                                                                            <td>

                                                                          <!--        <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\" alt=\"\" />     -->             
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">

                                                                                <img src=\"";
        // line 175
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
        // line 187
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
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\" alt=\"\" />                          
                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">


                                                                                                <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\" alt=\"\" />                              
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">

                                                                                <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\"  />                

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>


                                                                                <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                 
                                                                            </td>
                                                                            <td class=\"c2_bottom\">

                                                                                <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\"  />                 
                                                                            </td>
                                                                            <td>


                                                                                <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td> <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"2\" height=\"1\" /></td>
                                                                <td style=\"width:172px\">
                                                                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                        <tr>
                                                                            <td><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\"alt=\"\"/></td>
                                                                            <td class=\"c2_top\">

                                                                                <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"9\" height=\"9\" />                      
                                                                            </td>
                                                                            <td>
                                                                                <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                       


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=\"c2_left\">
                                                                                <img src=\"";
        // line 252
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
        // line 265
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
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                            

                                                                                            </a><br /><br style=\"line-height:2px\" />
                                                                                            <a href=\"#\">

                                                                                                <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                   
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                            <td class=\"c2_right\">
                                                                                <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\"/>                                   
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                           <!--       <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>      -->                             


                                                                            </td>
                                                                            <td class=\"c2_bottom\">
                                                                                <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"  alt=\"\" width=\"1\" height=\"9\"/>                                      

                                                                            </td>
                                                                            <td>
                                                                           <!--       <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                -->                   

                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <img src=\"";
        // line 310
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
        // line 321
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

                                                    <!--      <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>    -->                           
                                                    </td>
                                                    <td style=\"width:100%\">manufacturers:</td>
                                                    <td>



                                             <!--             <img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>     -->                               
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
                                                  <!--        <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>   -->                                    

                                                    </td>
                                                    <td style=\"width:100%\">information:</td>
                                                    <td>
                                                   <!--       <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>  -->                                            

                                                    </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
                                                    <td>


                                                     <!--     <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>   -->                                    
                                                    </td>
                                                    <td class=\"c1_top\">


                                                        <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                       
                                                             </td>
                                                             <td>
                                                            <!--   <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>   -->                    


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\">
                                                        <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                               


                                                             </td>
                                                             <td>
                                                             <ul>
                                                <li class=\"bg_list_un\"><a href=\"#\">Article 1</a></li>
                                                <li class=\"bg_list_un\"><a href=\"#\">Article 2</a></li>
                                                <li class=\"bg_list_un\"><a href=\"#\">Article 3</a></li>
                                                           </ul>
                                                <br style=\"line-height:10px\" />
                                                 </td>
                                        <td class=\"c1_right\">

                                            <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                              
                                                 </td>
                                                 </tr>
                                                 <tr>
                                                 <td>
                                          <!--  <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"/> -->
                                                                          
                                        </td>
                                        <td class=\"c1_bottom\">

                                            <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                          
                                        </td>
                                        <td>

                                         <!--     <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />  -->                     
                                        </td>
                                    </tr>
                                </table>
                                <br style=\"line-height:4px\" />
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                    <tr>
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
        // line 449
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
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/fp.jpg"), "html", null, true);
        echo "\" alt=\"\" align=\"left\"/>                           



                    <img src=\"";
        // line 480
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
    }

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
        return array (  729 => 15,  722 => 10,  717 => 7,  714 => 6,  689 => 480,  682 => 476,  652 => 449,  630 => 430,  621 => 424,  610 => 416,  603 => 412,  595 => 407,  587 => 402,  570 => 388,  560 => 381,  554 => 378,  546 => 373,  532 => 362,  524 => 357,  506 => 342,  496 => 335,  479 => 321,  465 => 310,  455 => 303,  448 => 299,  440 => 294,  432 => 289,  422 => 282,  414 => 277,  399 => 265,  383 => 252,  373 => 245,  367 => 242,  361 => 239,  354 => 235,  346 => 230,  338 => 225,  331 => 221,  320 => 213,  309 => 205,  301 => 200,  285 => 187,  270 => 175,  261 => 169,  254 => 165,  245 => 159,  227 => 144,  219 => 139,  209 => 132,  199 => 125,  192 => 121,  185 => 117,  177 => 112,  150 => 88,  144 => 85,  139 => 83,  134 => 81,  123 => 73,  116 => 69,  93 => 57,  84 => 51,  78 => 48,  63 => 36,  55 => 31,  47 => 26,  35 => 16,  33 => 15,  29 => 13,  27 => 6,  21 => 2,);
    }
}
