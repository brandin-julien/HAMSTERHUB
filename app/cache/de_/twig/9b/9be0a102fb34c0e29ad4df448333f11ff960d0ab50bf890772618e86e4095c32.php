<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7a7fd1c74cacafd37f7e52327d68cdaf8080547e1a7c20a80dd6bd3381d0a276 extends Twig_Template
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
        $__internal_075d01f5a62625cdf7da38c5e60c675cfc3809c48344dc7e6c1eafafb19119fc = $this->env->getExtension("native_profiler");
        $__internal_075d01f5a62625cdf7da38c5e60c675cfc3809c48344dc7e6c1eafafb19119fc->enter($__internal_075d01f5a62625cdf7da38c5e60c675cfc3809c48344dc7e6c1eafafb19119fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_075d01f5a62625cdf7da38c5e60c675cfc3809c48344dc7e6c1eafafb19119fc->leave($__internal_075d01f5a62625cdf7da38c5e60c675cfc3809c48344dc7e6c1eafafb19119fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
