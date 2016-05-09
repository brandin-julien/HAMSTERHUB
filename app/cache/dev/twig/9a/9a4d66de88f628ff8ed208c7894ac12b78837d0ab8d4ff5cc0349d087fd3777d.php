<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cd0a03c419877c33ddee053722b22e7de4203e4605f2ce84a16b55d05157d0f4 extends Twig_Template
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
        $__internal_98713d8443d1e5a83c02a0940a8775542ca74ed14f6dea94802d83447f0cec90 = $this->env->getExtension("native_profiler");
        $__internal_98713d8443d1e5a83c02a0940a8775542ca74ed14f6dea94802d83447f0cec90->enter($__internal_98713d8443d1e5a83c02a0940a8775542ca74ed14f6dea94802d83447f0cec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98713d8443d1e5a83c02a0940a8775542ca74ed14f6dea94802d83447f0cec90->leave($__internal_98713d8443d1e5a83c02a0940a8775542ca74ed14f6dea94802d83447f0cec90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0dbd958558443c0b120eccddf9794b351d0ce4e29a8be3744347fac9566d4b8 = $this->env->getExtension("native_profiler");
        $__internal_b0dbd958558443c0b120eccddf9794b351d0ce4e29a8be3744347fac9566d4b8->enter($__internal_b0dbd958558443c0b120eccddf9794b351d0ce4e29a8be3744347fac9566d4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0dbd958558443c0b120eccddf9794b351d0ce4e29a8be3744347fac9566d4b8->leave($__internal_b0dbd958558443c0b120eccddf9794b351d0ce4e29a8be3744347fac9566d4b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3a361c73c3ed06487b8952da8fe8ee9945a8d1b22e544ff26b69a3b424e458c = $this->env->getExtension("native_profiler");
        $__internal_c3a361c73c3ed06487b8952da8fe8ee9945a8d1b22e544ff26b69a3b424e458c->enter($__internal_c3a361c73c3ed06487b8952da8fe8ee9945a8d1b22e544ff26b69a3b424e458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3a361c73c3ed06487b8952da8fe8ee9945a8d1b22e544ff26b69a3b424e458c->leave($__internal_c3a361c73c3ed06487b8952da8fe8ee9945a8d1b22e544ff26b69a3b424e458c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e193f8ff2415d41a2c7068b7ece072e60bfb94314507790abf8d9da7f16f35e = $this->env->getExtension("native_profiler");
        $__internal_3e193f8ff2415d41a2c7068b7ece072e60bfb94314507790abf8d9da7f16f35e->enter($__internal_3e193f8ff2415d41a2c7068b7ece072e60bfb94314507790abf8d9da7f16f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e193f8ff2415d41a2c7068b7ece072e60bfb94314507790abf8d9da7f16f35e->leave($__internal_3e193f8ff2415d41a2c7068b7ece072e60bfb94314507790abf8d9da7f16f35e_prof);

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
