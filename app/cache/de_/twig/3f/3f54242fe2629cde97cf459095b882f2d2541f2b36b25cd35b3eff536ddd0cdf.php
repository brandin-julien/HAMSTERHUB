<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_13843906812df7918eda2d6682395bdfe55b30d947a3e0b76630ae5a76a9a6d2 extends Twig_Template
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
        $__internal_f2a7ed03fc1b04dbb15acd6a101eaf7cd6a51ab0d3ecdc2bc2fb6d7dd32c2c21 = $this->env->getExtension("native_profiler");
        $__internal_f2a7ed03fc1b04dbb15acd6a101eaf7cd6a51ab0d3ecdc2bc2fb6d7dd32c2c21->enter($__internal_f2a7ed03fc1b04dbb15acd6a101eaf7cd6a51ab0d3ecdc2bc2fb6d7dd32c2c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f2a7ed03fc1b04dbb15acd6a101eaf7cd6a51ab0d3ecdc2bc2fb6d7dd32c2c21->leave($__internal_f2a7ed03fc1b04dbb15acd6a101eaf7cd6a51ab0d3ecdc2bc2fb6d7dd32c2c21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
