<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1cb7b2c8fd1b4609609efcf57ec228945651c5fd20ea373eb3f09ef7928d77a2 extends Twig_Template
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
        $__internal_ad95c89105cb9de814be8a46067ffbb3a20b5deb5fed239ad62011c2037a56d6 = $this->env->getExtension("native_profiler");
        $__internal_ad95c89105cb9de814be8a46067ffbb3a20b5deb5fed239ad62011c2037a56d6->enter($__internal_ad95c89105cb9de814be8a46067ffbb3a20b5deb5fed239ad62011c2037a56d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ad95c89105cb9de814be8a46067ffbb3a20b5deb5fed239ad62011c2037a56d6->leave($__internal_ad95c89105cb9de814be8a46067ffbb3a20b5deb5fed239ad62011c2037a56d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
