<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3d97a3184f0cd4b0cc9158b13f34b5e6964fa580e6388087dda136a73b6510a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f90919e372140e78780f8c25e2bd6347f69a559a25ddcb9cf2c652e7217a96d4 = $this->env->getExtension("native_profiler");
        $__internal_f90919e372140e78780f8c25e2bd6347f69a559a25ddcb9cf2c652e7217a96d4->enter($__internal_f90919e372140e78780f8c25e2bd6347f69a559a25ddcb9cf2c652e7217a96d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f90919e372140e78780f8c25e2bd6347f69a559a25ddcb9cf2c652e7217a96d4->leave($__internal_f90919e372140e78780f8c25e2bd6347f69a559a25ddcb9cf2c652e7217a96d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0571d9ca00640adfa1f4d7bdee0bb32f7dd7664dec33a94d70e119de1b414aef = $this->env->getExtension("native_profiler");
        $__internal_0571d9ca00640adfa1f4d7bdee0bb32f7dd7664dec33a94d70e119de1b414aef->enter($__internal_0571d9ca00640adfa1f4d7bdee0bb32f7dd7664dec33a94d70e119de1b414aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_0571d9ca00640adfa1f4d7bdee0bb32f7dd7664dec33a94d70e119de1b414aef->leave($__internal_0571d9ca00640adfa1f4d7bdee0bb32f7dd7664dec33a94d70e119de1b414aef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
