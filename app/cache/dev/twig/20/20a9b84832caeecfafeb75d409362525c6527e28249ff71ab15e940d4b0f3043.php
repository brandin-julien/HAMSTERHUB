<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ebc434ce97dece2fce2e44129ef87c81001c2cb62e9e6ffc5965eceb8fc7905b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8a3f193695b31c17d5422bd52f95d8e6a5013c7bd13a82fd131cd8933fb56ade = $this->env->getExtension("native_profiler");
        $__internal_8a3f193695b31c17d5422bd52f95d8e6a5013c7bd13a82fd131cd8933fb56ade->enter($__internal_8a3f193695b31c17d5422bd52f95d8e6a5013c7bd13a82fd131cd8933fb56ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3f193695b31c17d5422bd52f95d8e6a5013c7bd13a82fd131cd8933fb56ade->leave($__internal_8a3f193695b31c17d5422bd52f95d8e6a5013c7bd13a82fd131cd8933fb56ade_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca3d3d812263d665ec904f0bb869626882823697f6f9b98e5009d85df99fcde2 = $this->env->getExtension("native_profiler");
        $__internal_ca3d3d812263d665ec904f0bb869626882823697f6f9b98e5009d85df99fcde2->enter($__internal_ca3d3d812263d665ec904f0bb869626882823697f6f9b98e5009d85df99fcde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca3d3d812263d665ec904f0bb869626882823697f6f9b98e5009d85df99fcde2->leave($__internal_ca3d3d812263d665ec904f0bb869626882823697f6f9b98e5009d85df99fcde2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c1c819d358d8703ba3235b79ac08d2dc65219daaed9427031b76204738c04ed = $this->env->getExtension("native_profiler");
        $__internal_1c1c819d358d8703ba3235b79ac08d2dc65219daaed9427031b76204738c04ed->enter($__internal_1c1c819d358d8703ba3235b79ac08d2dc65219daaed9427031b76204738c04ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c1c819d358d8703ba3235b79ac08d2dc65219daaed9427031b76204738c04ed->leave($__internal_1c1c819d358d8703ba3235b79ac08d2dc65219daaed9427031b76204738c04ed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccb18920416fc5df71a83066b86ea2c880d5cdce722f2b2e9bd14470643b115c = $this->env->getExtension("native_profiler");
        $__internal_ccb18920416fc5df71a83066b86ea2c880d5cdce722f2b2e9bd14470643b115c->enter($__internal_ccb18920416fc5df71a83066b86ea2c880d5cdce722f2b2e9bd14470643b115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ccb18920416fc5df71a83066b86ea2c880d5cdce722f2b2e9bd14470643b115c->leave($__internal_ccb18920416fc5df71a83066b86ea2c880d5cdce722f2b2e9bd14470643b115c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
