<?php

/* head.html.twig */
class __TwigTemplate_bd7ecff8adb3920aedc5703f2dc981d603269d75dd0d1248bfe7400201bd4ccf extends Twig_Template
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
        // line 2
        $this->loadTemplate("header.html.twig", "head.html.twig", 2)->display($context);
        // line 3
        echo "<head>

</head>";
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
        return array (  21 => 3,  19 => 2,);
    }
}
/* {# app/Resources/views/header.html.twig #}*/
/* {% include 'header.html.twig' %}*/
/* <head>*/
/* */
/* </head>*/
