<?php

/* base.html.twig */
class __TwigTemplate_47f7a9c67d3ccee286fefb32d71b20e5628274ebc7b307f3ee03961430f8dc35 extends Twig_Template
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
        $__internal_4a40ffd0e734d03e2a1a04034a7fb50ccd859c0ba03a1603808e4efbd824e38e = $this->env->getExtension("native_profiler");
        $__internal_4a40ffd0e734d03e2a1a04034a7fb50ccd859c0ba03a1603808e4efbd824e38e->enter($__internal_4a40ffd0e734d03e2a1a04034a7fb50ccd859c0ba03a1603808e4efbd824e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
";
        
        $__internal_4a40ffd0e734d03e2a1a04034a7fb50ccd859c0ba03a1603808e4efbd824e38e->leave($__internal_4a40ffd0e734d03e2a1a04034a7fb50ccd859c0ba03a1603808e4efbd824e38e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a07ed805d3c044aa5f4536f81e9b22b2633403b0dd8c8acb57dd28293c8fccd = $this->env->getExtension("native_profiler");
        $__internal_4a07ed805d3c044aa5f4536f81e9b22b2633403b0dd8c8acb57dd28293c8fccd->enter($__internal_4a07ed805d3c044aa5f4536f81e9b22b2633403b0dd8c8acb57dd28293c8fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HamsterHub";
        
        $__internal_4a07ed805d3c044aa5f4536f81e9b22b2633403b0dd8c8acb57dd28293c8fccd->leave($__internal_4a07ed805d3c044aa5f4536f81e9b22b2633403b0dd8c8acb57dd28293c8fccd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8215958198d4f8abfca788ce93bc20b88beaf502d390424eb0618bc863eff64f = $this->env->getExtension("native_profiler");
        $__internal_8215958198d4f8abfca788ce93bc20b88beaf502d390424eb0618bc863eff64f->enter($__internal_8215958198d4f8abfca788ce93bc20b88beaf502d390424eb0618bc863eff64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8215958198d4f8abfca788ce93bc20b88beaf502d390424eb0618bc863eff64f->leave($__internal_8215958198d4f8abfca788ce93bc20b88beaf502d390424eb0618bc863eff64f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  47 => 5,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}HamsterHub{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
