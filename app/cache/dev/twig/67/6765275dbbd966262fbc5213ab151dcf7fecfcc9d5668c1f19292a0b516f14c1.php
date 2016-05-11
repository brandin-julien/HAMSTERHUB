<?php

/* head.html.twig */
class __TwigTemplate_66318d45e5ac0156c98bfd0802fe454bebb7bfed56ac979ad79dcf4781dc3a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d924bc8d94810f0d7c4963a88d6dac4cf6a600c46f4a1c1e48b38d264abf798 = $this->env->getExtension("native_profiler");
        $__internal_4d924bc8d94810f0d7c4963a88d6dac4cf6a600c46f4a1c1e48b38d264abf798->enter($__internal_4d924bc8d94810f0d7c4963a88d6dac4cf6a600c46f4a1c1e48b38d264abf798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

        // line 2
        $this->loadTemplate("header.html.twig", "head.html.twig", 2)->display($context);
        // line 3
        echo "<header>

</header>";
        
        $__internal_4d924bc8d94810f0d7c4963a88d6dac4cf6a600c46f4a1c1e48b38d264abf798->leave($__internal_4d924bc8d94810f0d7c4963a88d6dac4cf6a600c46f4a1c1e48b38d264abf798_prof);

    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/header.html.twig #}*/
/* {% include 'header.html.twig' %}*/
/* <header>*/
/* */
/* </header>*/
