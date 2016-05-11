<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a72a2aad132fadc634b46d6b36f656397c9032d8400b620ac118e8aa26a512d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ea8e0d399e8d7ad49ed578080aebecb7609d2ad346f5836c0ad913ef9377d777 = $this->env->getExtension("native_profiler");
        $__internal_ea8e0d399e8d7ad49ed578080aebecb7609d2ad346f5836c0ad913ef9377d777->enter($__internal_ea8e0d399e8d7ad49ed578080aebecb7609d2ad346f5836c0ad913ef9377d777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8e0d399e8d7ad49ed578080aebecb7609d2ad346f5836c0ad913ef9377d777->leave($__internal_ea8e0d399e8d7ad49ed578080aebecb7609d2ad346f5836c0ad913ef9377d777_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9625032ffb21b510370dd7e150ddcbdb4ef7d224d6193554c31ca56921e72be = $this->env->getExtension("native_profiler");
        $__internal_b9625032ffb21b510370dd7e150ddcbdb4ef7d224d6193554c31ca56921e72be->enter($__internal_b9625032ffb21b510370dd7e150ddcbdb4ef7d224d6193554c31ca56921e72be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b9625032ffb21b510370dd7e150ddcbdb4ef7d224d6193554c31ca56921e72be->leave($__internal_b9625032ffb21b510370dd7e150ddcbdb4ef7d224d6193554c31ca56921e72be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
