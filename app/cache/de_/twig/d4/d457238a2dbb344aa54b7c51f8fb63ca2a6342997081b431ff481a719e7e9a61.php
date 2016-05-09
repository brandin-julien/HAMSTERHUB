<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_29eb65a07869ce01530ae83b6399f42e83ffea9ae76e47c44f1fbeb94e908601 extends Twig_Template
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
        $__internal_de8da5fd37cfb5ce31d207e08123b057a9ee11b51b371453f06ad19bfdac84b4 = $this->env->getExtension("native_profiler");
        $__internal_de8da5fd37cfb5ce31d207e08123b057a9ee11b51b371453f06ad19bfdac84b4->enter($__internal_de8da5fd37cfb5ce31d207e08123b057a9ee11b51b371453f06ad19bfdac84b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_de8da5fd37cfb5ce31d207e08123b057a9ee11b51b371453f06ad19bfdac84b4->leave($__internal_de8da5fd37cfb5ce31d207e08123b057a9ee11b51b371453f06ad19bfdac84b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
