<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_03b279a7600738d3d9f0f4e8c7dc6ce17461f6f4bb4c7a5a928d12545184c851 extends Twig_Template
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
        $__internal_87e8185d636692ed32850079e6f030e9c91f47d81bfb55d02f381655d92417f8 = $this->env->getExtension("native_profiler");
        $__internal_87e8185d636692ed32850079e6f030e9c91f47d81bfb55d02f381655d92417f8->enter($__internal_87e8185d636692ed32850079e6f030e9c91f47d81bfb55d02f381655d92417f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_87e8185d636692ed32850079e6f030e9c91f47d81bfb55d02f381655d92417f8->leave($__internal_87e8185d636692ed32850079e6f030e9c91f47d81bfb55d02f381655d92417f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
