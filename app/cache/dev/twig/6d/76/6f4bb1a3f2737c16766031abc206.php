<?php

/* NFMonPremierBundle::layout.html.twig */
class __TwigTemplate_6d766f4bb1a3f2737c16766031abc206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/FNMonPremierBundle/css/style.css"), "html", null, true);
        echo "\"
        type=\"text/css\" media=\"all\" />
        
    </head>
    <body>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/NFMonPremierBundle/images/logo.gif"), "html", null, true);
        echo "\" alt=\"logo\"
        width=\"\" height=\"\" />
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bonjour";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "            <h1>Voici mon premier site Symfony version : ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</h1>
            <p>Le bloc body a donc maintenant un contenu </p>
        ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NFMonPremierBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  74 => 15,  71 => 14,  66 => 6,  60 => 5,  54 => 19,  51 => 18,  49 => 14,  44 => 12,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  28 => 2,);
    }
}
