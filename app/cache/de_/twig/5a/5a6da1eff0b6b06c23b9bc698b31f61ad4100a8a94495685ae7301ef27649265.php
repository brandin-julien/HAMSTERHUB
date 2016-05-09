<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_02fa7a05452dcb968c1c6952976bf1efad6b8cbc61a58c2c60d575c031661f3f extends Twig_Template
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
        $__internal_a2dfb8b55ce2ccaf73d6ef2e597d86336e41fdb735b12b1b3e37544853ebb6b2 = $this->env->getExtension("native_profiler");
        $__internal_a2dfb8b55ce2ccaf73d6ef2e597d86336e41fdb735b12b1b3e37544853ebb6b2->enter($__internal_a2dfb8b55ce2ccaf73d6ef2e597d86336e41fdb735b12b1b3e37544853ebb6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a2dfb8b55ce2ccaf73d6ef2e597d86336e41fdb735b12b1b3e37544853ebb6b2->leave($__internal_a2dfb8b55ce2ccaf73d6ef2e597d86336e41fdb735b12b1b3e37544853ebb6b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
