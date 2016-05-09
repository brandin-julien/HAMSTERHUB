<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e15e59fad9af37e3cbab2439a066b8407da091e7ae29c69ab188c3636a83ea5a extends Twig_Template
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
        $__internal_39e58d7c956e10215795660f021127cf2fcf4e12ac84e9f7b63336d199be37ba = $this->env->getExtension("native_profiler");
        $__internal_39e58d7c956e10215795660f021127cf2fcf4e12ac84e9f7b63336d199be37ba->enter($__internal_39e58d7c956e10215795660f021127cf2fcf4e12ac84e9f7b63336d199be37ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_39e58d7c956e10215795660f021127cf2fcf4e12ac84e9f7b63336d199be37ba->leave($__internal_39e58d7c956e10215795660f021127cf2fcf4e12ac84e9f7b63336d199be37ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
