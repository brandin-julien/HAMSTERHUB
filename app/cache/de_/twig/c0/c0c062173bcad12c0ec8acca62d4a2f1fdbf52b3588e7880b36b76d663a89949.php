<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cf3f8f9f0c59c1f7b82d15a7d7073128289b3219276f550731ccd3a27baacb3c extends Twig_Template
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
        $__internal_7463cbd71a79b4bbf18c1401281b7fdec824ee2e1da0f13c2b2ade44023d24c4 = $this->env->getExtension("native_profiler");
        $__internal_7463cbd71a79b4bbf18c1401281b7fdec824ee2e1da0f13c2b2ade44023d24c4->enter($__internal_7463cbd71a79b4bbf18c1401281b7fdec824ee2e1da0f13c2b2ade44023d24c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7463cbd71a79b4bbf18c1401281b7fdec824ee2e1da0f13c2b2ade44023d24c4->leave($__internal_7463cbd71a79b4bbf18c1401281b7fdec824ee2e1da0f13c2b2ade44023d24c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
