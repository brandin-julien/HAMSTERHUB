<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a5f8fb40579e595681f3b3899b6f688e866fec9062124bd23019473a22591765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b314b383e85b3e716f7e2ac93d42ae773ab05c46811a4c860148c95330465d3 = $this->env->getExtension("native_profiler");
        $__internal_4b314b383e85b3e716f7e2ac93d42ae773ab05c46811a4c860148c95330465d3->enter($__internal_4b314b383e85b3e716f7e2ac93d42ae773ab05c46811a4c860148c95330465d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b314b383e85b3e716f7e2ac93d42ae773ab05c46811a4c860148c95330465d3->leave($__internal_4b314b383e85b3e716f7e2ac93d42ae773ab05c46811a4c860148c95330465d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba03d7f0c9159ff8b52803b3c8c5e8ce5c98e2fab8dd3cfe6c9f57f2e680909c = $this->env->getExtension("native_profiler");
        $__internal_ba03d7f0c9159ff8b52803b3c8c5e8ce5c98e2fab8dd3cfe6c9f57f2e680909c->enter($__internal_ba03d7f0c9159ff8b52803b3c8c5e8ce5c98e2fab8dd3cfe6c9f57f2e680909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba03d7f0c9159ff8b52803b3c8c5e8ce5c98e2fab8dd3cfe6c9f57f2e680909c->leave($__internal_ba03d7f0c9159ff8b52803b3c8c5e8ce5c98e2fab8dd3cfe6c9f57f2e680909c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_efc5a9e225318fa244a617cab02fa713f03f59efcd1c5ab3748334ed771a8c52 = $this->env->getExtension("native_profiler");
        $__internal_efc5a9e225318fa244a617cab02fa713f03f59efcd1c5ab3748334ed771a8c52->enter($__internal_efc5a9e225318fa244a617cab02fa713f03f59efcd1c5ab3748334ed771a8c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_efc5a9e225318fa244a617cab02fa713f03f59efcd1c5ab3748334ed771a8c52->leave($__internal_efc5a9e225318fa244a617cab02fa713f03f59efcd1c5ab3748334ed771a8c52_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5335ba11252e560054410704395af51d83a9ccef7a1e8c8527b0575499bd3a31 = $this->env->getExtension("native_profiler");
        $__internal_5335ba11252e560054410704395af51d83a9ccef7a1e8c8527b0575499bd3a31->enter($__internal_5335ba11252e560054410704395af51d83a9ccef7a1e8c8527b0575499bd3a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5335ba11252e560054410704395af51d83a9ccef7a1e8c8527b0575499bd3a31->leave($__internal_5335ba11252e560054410704395af51d83a9ccef7a1e8c8527b0575499bd3a31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
