<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b525064f3768af315b8a5230edbafb6594265f72d8620717925243cc7b2367f2 extends Twig_Template
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
        $__internal_eef66a0544a6e1556d9f0ce6db8aa80c335507a9058f6a90a47ac4d8872edae3 = $this->env->getExtension("native_profiler");
        $__internal_eef66a0544a6e1556d9f0ce6db8aa80c335507a9058f6a90a47ac4d8872edae3->enter($__internal_eef66a0544a6e1556d9f0ce6db8aa80c335507a9058f6a90a47ac4d8872edae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eef66a0544a6e1556d9f0ce6db8aa80c335507a9058f6a90a47ac4d8872edae3->leave($__internal_eef66a0544a6e1556d9f0ce6db8aa80c335507a9058f6a90a47ac4d8872edae3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
