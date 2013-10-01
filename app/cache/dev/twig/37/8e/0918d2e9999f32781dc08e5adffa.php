<?php

/* NFGsbBundle::layout.html.twig */
class __TwigTemplate_378e0918d2e9999f32781dc08e5adffa extends Twig_Template
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
        <div id=\"entete\">
            <div id=\"entete_gauche\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/NFGsb/images/logoGsb.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"128\" height=\"128\" />
            </div>

            <div id=\"entete_droite\">
                <h1> Le laboratoire blabla </h1>
            </div>
        </div>
        <div id=\"corps\">
            <div id=\"corps_gauche\">
                <table id=\"table_menu\">
                    <tr>
                        <td class=\"td1\">
                            <p class=\"justifier\">Menu 1</p>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"td2\">
                            <ul>
                                <li><a href=\"#\">Sous menu 1-1</a></li>
                                <li><a href=\"#\">Sous menu 1-2</a></li>
                                <li><a href=\"#\">Sous menu 1-3</a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class=\"td1\">
                            <p class=\"justifier\">Menu 2</p>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"td2\">
                            <ul>
                                <li><a href=\"#\">Sous menu 2-1</a></li>
                                <li><a href=\"#\">Sous menu 2-2</a></li>
                                <li><a href=\"#\">Sous menu 2-3</a></li>
                                <li><a href=\"#\">Sous menu 2-4</a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>

            <div id=\"corps_droit\">
                <p>Corps</p>
            </div>
        </div>

        <div id=\"pied\">
            <p>pied de page</p>
        </div>
    </body>
\t";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "</html>";
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

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "        ";
    }

    public function getTemplateName()
    {
        return "NFGsbBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 67,  117 => 66,  112 => 6,  106 => 5,  102 => 68,  100 => 66,  45 => 14,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
