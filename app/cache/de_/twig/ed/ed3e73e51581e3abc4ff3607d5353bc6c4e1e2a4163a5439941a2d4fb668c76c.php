<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_36e5e8c331299f2fa3dd2e3d8d24653edf97b091f54a94142c6d989480177370 extends Twig_Template
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
        $__internal_c7f1884c3466d5221d1b4e16fdab15765783693c026635a658dfbde681310f32 = $this->env->getExtension("native_profiler");
        $__internal_c7f1884c3466d5221d1b4e16fdab15765783693c026635a658dfbde681310f32->enter($__internal_c7f1884c3466d5221d1b4e16fdab15765783693c026635a658dfbde681310f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7f1884c3466d5221d1b4e16fdab15765783693c026635a658dfbde681310f32->leave($__internal_c7f1884c3466d5221d1b4e16fdab15765783693c026635a658dfbde681310f32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
