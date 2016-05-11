<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bb6554185b5b793cd06baabc66467c71ec70ff729eeb4edce76c56cc416c2694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88765d03681ba45502048cbee0a2ae2886ca188ea631910e340ea81436baeedb = $this->env->getExtension("native_profiler");
        $__internal_88765d03681ba45502048cbee0a2ae2886ca188ea631910e340ea81436baeedb->enter($__internal_88765d03681ba45502048cbee0a2ae2886ca188ea631910e340ea81436baeedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88765d03681ba45502048cbee0a2ae2886ca188ea631910e340ea81436baeedb->leave($__internal_88765d03681ba45502048cbee0a2ae2886ca188ea631910e340ea81436baeedb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c99fc7c68399f0492d88c45182ec39fefcb92bceff93202451f219c777659982 = $this->env->getExtension("native_profiler");
        $__internal_c99fc7c68399f0492d88c45182ec39fefcb92bceff93202451f219c777659982->enter($__internal_c99fc7c68399f0492d88c45182ec39fefcb92bceff93202451f219c777659982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c99fc7c68399f0492d88c45182ec39fefcb92bceff93202451f219c777659982->leave($__internal_c99fc7c68399f0492d88c45182ec39fefcb92bceff93202451f219c777659982_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c42753cb57175ba3085955d404611cbebf0b7a429b362eec117de961bddec4de = $this->env->getExtension("native_profiler");
        $__internal_c42753cb57175ba3085955d404611cbebf0b7a429b362eec117de961bddec4de->enter($__internal_c42753cb57175ba3085955d404611cbebf0b7a429b362eec117de961bddec4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c42753cb57175ba3085955d404611cbebf0b7a429b362eec117de961bddec4de->leave($__internal_c42753cb57175ba3085955d404611cbebf0b7a429b362eec117de961bddec4de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8a3a0f9dd375bb062b4c6a38659a3590128d2476e5597a4051b17877137ae19 = $this->env->getExtension("native_profiler");
        $__internal_c8a3a0f9dd375bb062b4c6a38659a3590128d2476e5597a4051b17877137ae19->enter($__internal_c8a3a0f9dd375bb062b4c6a38659a3590128d2476e5597a4051b17877137ae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8a3a0f9dd375bb062b4c6a38659a3590128d2476e5597a4051b17877137ae19->leave($__internal_c8a3a0f9dd375bb062b4c6a38659a3590128d2476e5597a4051b17877137ae19_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
