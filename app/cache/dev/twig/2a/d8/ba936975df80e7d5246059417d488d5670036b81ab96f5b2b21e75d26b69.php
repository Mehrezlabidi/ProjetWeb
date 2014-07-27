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
            'menu' => array($this, 'block_menu'),
            'article' => array($this, 'block_article'),
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/flags1.jpg"), "html", null, true);
        echo "\" alt=\"\"  class=\"middle\"  /></a><a href=\"#\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/flags2.jpg"), "html", null, true);
        echo "\" alt=\"\"  class=\"middle\"  /></a>




                                            <select class=\"jump\"><option>US Dollar</option></select>
                                        </td>
                                        <td style=\"padding:37px 0px 0px 0px;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                <tr>
                                                    <td>  <img src=\"";
        // line 53
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
        // line 65
        echo "\" alt=\"\" /> 
                                  </a>
                                  <a href=\"#\">
                                      <img src=\"";
        // line 68
        echo "\" alt=\"\" />
                                  </a>
                              </td>
                          </tr> -->
                        <tr>
                            <td>
                                <!--               -->                       

                                <div class=\"stretchHolder\">
                                    <div class=\"stretchMenu\">
                                        <ul class=\"stretchDrop\">
                                            <!-- item 1 -->
                                            <li class=\"slide p1\"><a href=\"#url\">Rub1</a><div><b></b>
                                                    <dl>
                                                        <dt>APN</dt>
                                                        <dd><a href=\"url\">Model #1</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Objectifs</dt>
                                                        <dd><a href=\"url\">Standard</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Accessoires</dt>
                                                        <dd><a href=\"url\">Filters</a></dd>

                                                    </dl>
                                                    <p>Offres spéciales<a href=\"#url\">Digital APN</a> ></p>
                                                </div>
                                            </li>

                                            <li class=\"slide p3\"><a href=\"#url\">Rub2</a><div><b></b>
                                                    <dl>
                                                        <dt>APN</dt>
                                                        <dd><a href=\"url\">Model #1</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Objectifs</dt>
                                                        <dd><a href=\"url\">Standard</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Accessoires</dt>
                                                        <dd><a href=\"url\">Filters</a></dd>

                                                    </dl>
                                                    <p>Offres spéciales<a href=\"#url\">Digital APN</a> ></p>
                                                </div>
                                            </li>
                                            <!-- item 3 -->
                                            <li class=\"slide p5\"><a href=\"#url\">Rub3</a><div><b></b>
                                                    <dl>
                                                        <dt>APN</dt>
                                                        <dd><a href=\"url\">Model #1</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Objectifs</dt>
                                                        <dd><a href=\"url\">Standard</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Accessoires</dt>
                                                        <dd><a href=\"url\">Filters</a></dd>

                                                    </dl>
                                                    <p>Offres spéciales<a href=\"#url\">Digital APN</a> ></p>
                                                </div>
                                            </li>
                                            <!-- item 4 -->
                                            <li class=\"slide p4\"><a href=\"#url\">Rub4</a><div><b></b>
                                                    <dl>
                                                        <dt>APN</dt>
                                                        <dd><a href=\"url\">Model #1</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Objectifs</dt>
                                                        <dd><a href=\"url\">Standard</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Accessoires</dt>
                                                        <dd><a href=\"url\">Filters</a></dd>

                                                    </dl>
                                                    <p>Offres spéciales<a href=\"#url\">Digital APN</a> ></p>
                                                </div>
                                            </li>
                                            <!-- item 5 -->
                                            <li class=\"last p1\"><a href=\"#url\">Rub5</a><div><b></b>
                                                    <dl>
                                                        <dt>APN</dt>
                                                        <dd><a href=\"url\">Model #1</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Objectifs</dt>
                                                        <dd><a href=\"url\">Standard</a></dd>

                                                    </dl>
                                                    <dl>
                                                        <dt>Accessoires</dt>
                                                        <dd><a href=\"url\">Filters</a></dd>

                                                    </dl>
                                                    <p>Offres spéciales<a href=\"#url\">Digital APN</a> ></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--          -->
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
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td style=\"width:100%\">Categories:</td>
                                                    <td> <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_right.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                </tr>
                                            </table>
                                            <br style=\"line-height:2px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_body c1\">
                                                <tr>
                                                    <td> <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\" />  </td>
                                                    <td class=\"c1_top\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"9\"   alt=\"\" /></td>
                                                    <td><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\"><img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" /></td>
                                                    <td>
                                                        <br style=\"line-height:5px\" />
                                                        <ul>

                                                            <!-- menu a gauche  -->     

                                                            <ul class=\"menu\"> 

";
        // line 216
        $this->displayBlock('menu', $context, $blocks);
        // line 221
        echo "


                                                            </ul>



                                                            <!--initiate accordion-->
                                                            <script type=\"text/javascript\">
                                                                \$(function() {

                                                                    var menu_ul = \$('.menu > li > ul'),
                                                                            menu_a = \$('.menu > li > a');

                                                                    menu_ul.hide();

                                                                    menu_a.click(function(e) {
                                                                        e.preventDefault();
                                                                        if (!\$(this).hasClass('active')) {
                                                                            menu_a.removeClass('active');
                                                                            menu_ul.filter(':visible').slideUp('normal');
                                                                            \$(this).addClass('active').next().stop(true, true).slideDown('normal');
                                                                        } else {
                                                                            \$(this).removeClass('active');
                                                                            \$(this).next().stop(true, true).slideUp('normal');
                                                                        }
                                                                    });

                                                                });
                                                            </script>        

                                                            <!-- menu              a              gauche  -->                                                     

                                                        </ul>
                                                        <br style=\"line-height:10px\" />
                                                    </td>
                                                    <td class=\"c1_right\">

                                                        <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\" />                                     
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                     

                                                    </td>
                                                    <td class=\"c1_bottom\">
                                                        <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                                       

                                                    </td>
                                                    <td>
                                                        <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                  

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"3\" height=\"1\" alt=\"\" />                               

                                        </td>
                                        <td style=\"width:350px\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"cont_header_txt\">
                                                <tr>
                                                    <td>
                                                        <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                             

                                                    </td>
                                                    <td style=\"width:100%\">featured products:</td>
                                                    <td>
                                                        <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_right.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                         


                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- div pour  limiter larticle => -->     <div style=\"height:400px;width:350px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;\">
                                            ";
        // line 298
        $this->displayBlock('article', $context, $blocks);
        // line 299
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
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                                        
        
        
                                                                                    </td>
                                                                                    <td class=\"c2_top\">
        
                                                                                        <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                 
                                                                                    </td>
                                                                                    <td>
        
                                                                                       <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\" alt=\"\" />                  
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=\"c2_left\">
        
                                                                                        <img src=\"";
        // line 325
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
        // line 337
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
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\" alt=\"\" />                          
                                                                                                    </a><br /><br style=\"line-height:2px\" />
                                                                                                    <a href=\"#\">
        
        
                                                                                                        <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\" alt=\"\" />                              
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"c2_right\">
        
                                                                                        <img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\"  />                
        
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
        
        
                                                                                        <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                  
                                                                                    </td>
                                                                                    <td class=\"c2_bottom\">
        
                                                                                        <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\"  />                 
                                                                                    </td>
                                                                                    <td>
        
        
                                                                                       <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\" alt=\"\"  />                 
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td> <img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"2\" height=\"1\" /></td>
                                                                        <td style=\"width:172px\">
                                                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"c2\">
                                                                                <tr>
                                                                                    <td>
                                                                                         <img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>  
                                                                                         </td>
                                                                                    <td class=\"c2_top\">
        
                                                                                        <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"alt=\"\" width=\"9\" height=\"9\" />                      
                                                                                    </td>
                                                                                    <td>
                                                                                       <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_tr.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                        
        
        
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=\"c2_left\">
                                                                                        <img src=\"";
        // line 404
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
        // line 417
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
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_details.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                            
        
                                                                                                    </a><br /><br style=\"line-height:2px\" />
                                                                                                    <a href=\"#\">
        
                                                                                                        <img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button_add_to_cart1.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                                   
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"c2_right\">
                                                                                        <img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" width=\"9\" height=\"1\" alt=\"\"/>                                   
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                       <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_bl.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                     
        
        
                                                                                    </td>
                                                                                    <td class=\"c2_bottom\">
                                                                                        <img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\"  alt=\"\" width=\"1\" height=\"9\"/>                                      
        
                                                                                    </td>
                                                                                    <td>
                                                                                       <img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c2_br.jpg"), "html", null, true);
        echo "\"alt=\"\"/>                                   
        
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td>
                                                                            <img src=\"";
        // line 462
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
        // line 473
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
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title2_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                               
                                                    </td>
                                                    <td style=\"width:100%\">manufacturers:</td>
                                                    <td>



                                                        <img src=\"";
        // line 494
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
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                        

                                                    </td>
                                                    <td style=\"width:100%\">information:</td>
                                                    <td>
                                                        <img src=\"";
        // line 514
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
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tl.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                                       
                                                    </td>
                                                    <td class=\"c1_top\">


                                                        <img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"9\" />                       
                                                    </td>
                                                    <td>
                                                        <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_tr.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>                      


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"c1_left\">
                                                        <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                               


                                                    </td>
                                                    <td>
                                                        <ul>

                                         ";
        // line 547
        echo "                             
                                            ";
        // line 548
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 549
            echo "
                                                            <li class=\"bg_list_un\"><a href=\"#\">Article 1</a></li>
                                                            <li class=\"bg_list_un\"><a href=\"#\">Article 2</a></li>
                                                            <li class=\"bg_list_un\"><a href=\"#\">Article 3</a></li>           

                                             ";
        }
        // line 554
        echo " 

                                                        </ul>
                                                        <br style=\"line-height:10px\" />
                                                    </td>
                                                    <td class=\"c1_right\">

                                                        <img src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"9\" height=\"1\" />                              
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_bl.jpg"), "html", null, true);
        echo "\" alt=\"\"/>   

                                                    </td>
                                                    <td class=\"c1_bottom\">

                                                        <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/spacer.gif"), "html", null, true);
        echo "\" alt=\"\" width=\"1\" height=\"9\" />                          
                                                    </td>
                                                    <td>

                                                        <img src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/c1_br.jpg"), "html", null, true);
        echo "\" alt=\"\" />        
                                                </tr>
                                            </table>
                                            <br style=\"line-height:4px\" />
                                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"box_header_txt\">
                                                <tr>
                                                    <td>  <img src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/title1_left.jpg"), "html", null, true);
        echo "\" alt=\"\" />                                   
                                                    </td>


                                                    <td style=\"width:100%\">specials:</td>
                                                    <td>
                                                        <img src=\"";
        // line 587
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
        // line 606
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
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/fp.jpg"), "html", null, true);
        echo "\" alt=\"\" align=\"left\"/>                           



                    <img src=\"";
        // line 637
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
        // line 649
        $this->displayBlock('container', $context, $blocks);
        // line 650
        echo "









";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <title>   </title>
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
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/styleHorizontal.css"), "html", null, true);
        echo "\"/>  
";
    }

    // line 216
    public function block_menu($context, array $blocks = array())
    {
        echo " 

   

 ";
    }

    // line 298
    public function block_article($context, array $blocks = array())
    {
        echo " ";
    }

    // line 649
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
        return array (  927 => 649,  921 => 298,  911 => 216,  905 => 18,  901 => 17,  897 => 16,  893 => 15,  889 => 14,  885 => 13,  881 => 12,  875 => 9,  871 => 7,  868 => 6,  854 => 650,  852 => 649,  837 => 637,  830 => 633,  800 => 606,  778 => 587,  769 => 581,  760 => 575,  753 => 571,  745 => 566,  737 => 561,  728 => 554,  720 => 549,  718 => 548,  715 => 547,  705 => 540,  695 => 533,  689 => 530,  681 => 525,  667 => 514,  659 => 509,  641 => 494,  631 => 487,  614 => 473,  600 => 462,  590 => 455,  583 => 451,  575 => 446,  567 => 441,  557 => 434,  549 => 429,  534 => 417,  518 => 404,  508 => 397,  502 => 394,  495 => 390,  487 => 385,  479 => 380,  471 => 375,  464 => 371,  453 => 363,  442 => 355,  434 => 350,  418 => 337,  403 => 325,  394 => 319,  387 => 315,  378 => 309,  366 => 299,  364 => 298,  354 => 291,  346 => 286,  336 => 279,  326 => 272,  319 => 268,  312 => 264,  304 => 259,  264 => 221,  262 => 216,  250 => 207,  244 => 204,  240 => 203,  236 => 202,  227 => 196,  222 => 194,  89 => 65,  74 => 53,  59 => 43,  50 => 37,  31 => 20,  23 => 2,  124 => 36,  117 => 35,  109 => 33,  103 => 31,  97 => 29,  94 => 68,  87 => 27,  82 => 26,  77 => 25,  75 => 24,  71 => 23,  65 => 21,  61 => 20,  57 => 18,  54 => 17,  49 => 14,  47 => 13,  45 => 12,  43 => 11,  40 => 10,  38 => 9,  36 => 8,  32 => 6,  29 => 6,);
    }
}
