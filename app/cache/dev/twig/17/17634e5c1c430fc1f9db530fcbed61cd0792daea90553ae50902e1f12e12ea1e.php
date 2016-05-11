<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_96005a88c067d397101d0a110d46208b23e9ddae8953027e9ffd9159a3107037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015d115ef4f07969dbff14c5f42055dbb7a64c98c20ad1694de8e6826b1f750b = $this->env->getExtension("native_profiler");
        $__internal_015d115ef4f07969dbff14c5f42055dbb7a64c98c20ad1694de8e6826b1f750b->enter($__internal_015d115ef4f07969dbff14c5f42055dbb7a64c98c20ad1694de8e6826b1f750b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015d115ef4f07969dbff14c5f42055dbb7a64c98c20ad1694de8e6826b1f750b->leave($__internal_015d115ef4f07969dbff14c5f42055dbb7a64c98c20ad1694de8e6826b1f750b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e7c8e546e35e762d3a10e664a71ce41461e24e9bf379cf53140517c22d6f573 = $this->env->getExtension("native_profiler");
        $__internal_7e7c8e546e35e762d3a10e664a71ce41461e24e9bf379cf53140517c22d6f573->enter($__internal_7e7c8e546e35e762d3a10e664a71ce41461e24e9bf379cf53140517c22d6f573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7e7c8e546e35e762d3a10e664a71ce41461e24e9bf379cf53140517c22d6f573->leave($__internal_7e7c8e546e35e762d3a10e664a71ce41461e24e9bf379cf53140517c22d6f573_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
