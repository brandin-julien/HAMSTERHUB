<?php

/* HamsterHubBundle:Default:index.html.twig */
class __TwigTemplate_a4edcc6d0e298210aa7a31115bf77f883fa6a6346d21735e025369c3071b59df extends Twig_Template
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
        $__internal_01ab1a3e6a08948458df2c5f7c59bec5e8ee6512b21bd5051ccaaca4e46ba523 = $this->env->getExtension("native_profiler");
        $__internal_01ab1a3e6a08948458df2c5f7c59bec5e8ee6512b21bd5051ccaaca4e46ba523->enter($__internal_01ab1a3e6a08948458df2c5f7c59bec5e8ee6512b21bd5051ccaaca4e46ba523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        // line 1
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "HamsterHubBundle:Default:index.html.twig", 1)->display(array_merge($context, array("id" => "foo")));
        
        $__internal_01ab1a3e6a08948458df2c5f7c59bec5e8ee6512b21bd5051ccaaca4e46ba523->leave($__internal_01ab1a3e6a08948458df2c5f7c59bec5e8ee6512b21bd5051ccaaca4e46ba523_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': 'foo'} %}*/
