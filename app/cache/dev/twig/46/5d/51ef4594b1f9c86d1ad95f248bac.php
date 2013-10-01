<?php

/* NFGsbBundle:Default:base.html.twig */
class __TwigTemplate_465d51ef4594b1f9c86d1ad95f248bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/NFGsb/css/style.css"), "html", null, true);
        echo "\" 
        type=\"text/css\" media=\"all\" />

    </head>
    <body>
\t<header>
\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/NFGsb/images/logoGsb.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"128\" height=\"128\" />
\t</header>
        <div id=en-tete>
        <center>
        <p id=content_header><b>Le laboratoire pharmaceutique GSB : Galaxy-Swiss Bourdin</b></p>
        </center>
        </div>
            <ul id=\"menu\">
              <li>
                <a href=\"#\">LE MENU :</a>
              </li>
              <li>
                <a href=\"#\">Accueil</a>
              </li>
              <li>
                <a href=\"#\">Visiteur</a>
              </li>
            </ul>
\t";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            
            <div id=\"pied_de_page\"> 
        <!--contenus du pied de page--> 
        </div> 
        </div> 
        <!--fermeture de la div global--> 
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GSB";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "NFGsbBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  89 => 31,  84 => 6,  78 => 5,  67 => 33,  65 => 31,  44 => 13,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
