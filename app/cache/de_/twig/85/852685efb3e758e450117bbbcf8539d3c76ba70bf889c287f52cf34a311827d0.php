<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_157292f710b9777f884605554a73eca3cbe1bcbb79f2503a80122a699e0254d3 extends Twig_Template
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
        $__internal_3eb261d0f122dc09842f8b5e6038cf070a93ea48d8672b0b93c13175e50ab179 = $this->env->getExtension("native_profiler");
        $__internal_3eb261d0f122dc09842f8b5e6038cf070a93ea48d8672b0b93c13175e50ab179->enter($__internal_3eb261d0f122dc09842f8b5e6038cf070a93ea48d8672b0b93c13175e50ab179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3eb261d0f122dc09842f8b5e6038cf070a93ea48d8672b0b93c13175e50ab179->leave($__internal_3eb261d0f122dc09842f8b5e6038cf070a93ea48d8672b0b93c13175e50ab179_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
