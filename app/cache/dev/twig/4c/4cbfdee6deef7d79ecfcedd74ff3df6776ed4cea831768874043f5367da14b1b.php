<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_714c9170ea9c91b7a712f11b5bb429472302d8f8d4c1f695e2303aea522600c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f1ce33b6dd20d78784896fb90f10f5e34050b79974e437a82062bca0620692ff = $this->env->getExtension("native_profiler");
        $__internal_f1ce33b6dd20d78784896fb90f10f5e34050b79974e437a82062bca0620692ff->enter($__internal_f1ce33b6dd20d78784896fb90f10f5e34050b79974e437a82062bca0620692ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ce33b6dd20d78784896fb90f10f5e34050b79974e437a82062bca0620692ff->leave($__internal_f1ce33b6dd20d78784896fb90f10f5e34050b79974e437a82062bca0620692ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0305dc267801121bfea3f65adeac9c3b58c6d601c67070eda8464e2e3b1e36bc = $this->env->getExtension("native_profiler");
        $__internal_0305dc267801121bfea3f65adeac9c3b58c6d601c67070eda8464e2e3b1e36bc->enter($__internal_0305dc267801121bfea3f65adeac9c3b58c6d601c67070eda8464e2e3b1e36bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0305dc267801121bfea3f65adeac9c3b58c6d601c67070eda8464e2e3b1e36bc->leave($__internal_0305dc267801121bfea3f65adeac9c3b58c6d601c67070eda8464e2e3b1e36bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
