<?php

/* header.html.twig */
class __TwigTemplate_f87801c24a5851d8d2c873537220163f434757d89cd4c9306af0a882b8ae800f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a0059a0597290b87d33869ecd673c60bd535f2951df2087c0e0e3624b4c953 = $this->env->getExtension("native_profiler");
        $__internal_96a0059a0597290b87d33869ecd673c60bd535f2951df2087c0e0e3624b4c953->enter($__internal_96a0059a0597290b87d33869ecd673c60bd535f2951df2087c0e0e3624b4c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script>
    </head>
<body>

";
        
        $__internal_96a0059a0597290b87d33869ecd673c60bd535f2951df2087c0e0e3624b4c953->leave($__internal_96a0059a0597290b87d33869ecd673c60bd535f2951df2087c0e0e3624b4c953_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22a33d6a92761be17e8a0496efcaa5405feaa6dca882815ba198b141d69f3b02 = $this->env->getExtension("native_profiler");
        $__internal_22a33d6a92761be17e8a0496efcaa5405feaa6dca882815ba198b141d69f3b02->enter($__internal_22a33d6a92761be17e8a0496efcaa5405feaa6dca882815ba198b141d69f3b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HamsterHub";
        
        $__internal_22a33d6a92761be17e8a0496efcaa5405feaa6dca882815ba198b141d69f3b02->leave($__internal_22a33d6a92761be17e8a0496efcaa5405feaa6dca882815ba198b141d69f3b02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ae7fd0f145735bf5c61f0ff91aa3bf7f8c3ee1fcfe3fe4375765946fea34c94 = $this->env->getExtension("native_profiler");
        $__internal_9ae7fd0f145735bf5c61f0ff91aa3bf7f8c3ee1fcfe3fe4375765946fea34c94->enter($__internal_9ae7fd0f145735bf5c61f0ff91aa3bf7f8c3ee1fcfe3fe4375765946fea34c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/video.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_9ae7fd0f145735bf5c61f0ff91aa3bf7f8c3ee1fcfe3fe4375765946fea34c94->leave($__internal_9ae7fd0f145735bf5c61f0ff91aa3bf7f8c3ee1fcfe3fe4375765946fea34c94_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  69 => 8,  63 => 7,  51 => 5,  37 => 11,  35 => 7,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}HamsterHub{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/framework/css/reset.css') }}" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/framework/css/video.css') }}" type="text/css" media="all" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>*/
/*     </head>*/
/* <body>*/
/* */
/* */
