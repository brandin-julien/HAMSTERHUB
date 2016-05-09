<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_85efb935bcaa690744cb89fc2b3497f43ffb073a4eb2c9aec7354a3a89b81e67 extends Twig_Template
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
        $__internal_e104d7cffef2e95e1c60b7ce29a1b4ad04205d33c9adfce1c042d8aecb7af78b = $this->env->getExtension("native_profiler");
        $__internal_e104d7cffef2e95e1c60b7ce29a1b4ad04205d33c9adfce1c042d8aecb7af78b->enter($__internal_e104d7cffef2e95e1c60b7ce29a1b4ad04205d33c9adfce1c042d8aecb7af78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e104d7cffef2e95e1c60b7ce29a1b4ad04205d33c9adfce1c042d8aecb7af78b->leave($__internal_e104d7cffef2e95e1c60b7ce29a1b4ad04205d33c9adfce1c042d8aecb7af78b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac3c15a3f137cd84f222f2e6cb4cce9e31b59832d0c05d57be0f359f9210fa47 = $this->env->getExtension("native_profiler");
        $__internal_ac3c15a3f137cd84f222f2e6cb4cce9e31b59832d0c05d57be0f359f9210fa47->enter($__internal_ac3c15a3f137cd84f222f2e6cb4cce9e31b59832d0c05d57be0f359f9210fa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ac3c15a3f137cd84f222f2e6cb4cce9e31b59832d0c05d57be0f359f9210fa47->leave($__internal_ac3c15a3f137cd84f222f2e6cb4cce9e31b59832d0c05d57be0f359f9210fa47_prof);

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
